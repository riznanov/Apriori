<?php 

class Apriori {
    private $delimiter   = ','; 
    private $minSup      = 0; 
    private $minConf     = 0; 
	private $sumTrans	= 0;
     
    private $rules       = array(); 
    private $table       = array(); 
    private $allitem   = array();
    private $allsups     = array(); 
    private $keys        = array(); 
    private $freqItmsts  = array();    
    private $phase       = 1;
    
    //maxPhase>=1
    private $maxPhase    = 10; 
    
    private $fiTime      = 0;
    private $arTime      = 0; 
    
	//menginputkan jumlah transaksi
	public function setSumTrans($int)
		{ $this->sumTrans=$int; }
	
	//mengambil nilai jumlah transaksi
	public function getSumTrans()
	{ return $this->sumTrans; }
	
	//menentukan karakter pemisah pada data transaksi
    public function setDelimiter($char)
    {
       $this->delimiter = $char;
    }
	
    //menentukan nilai min support
    public function setMinSup($int)
    {
       $this->minSup = $int;
    }
    
    public function setMinConf($int)
    {
       $this->minConf = $int;
    }
	//menentukan nilai maksimum fase atau scan
    public function setMaxScan($int)
    {
       $this->maxPhase = $int;
    }
	//mengambil hasil nilai karakter pemisah pada data transaksi
    public function getDelimiter()
    {
       return $this->delimiter;
    }
    //mengambil nilai min support
    public function getMinSup()
    {
       return $this->minSup;
    }
    //mengambil nilai min conf
    public function getMinConf()
    {
       return $this->minConf;
    }
    //mengambil nilai max fase
    public function getMaxScan()
    {
       return $this->maxPhase;
    }
    
   //fungsi untuk membuat tabel array dari data transaksi
    private function makeTable($db)
    { 
       $table   = array();
       $array   = array();
       $counter = 1;
      //memeriksa apakah data transaksi berbentuk array 
       if(!is_array($db))
          {
             $db = file($db);
          }
  
       $num = count($db);  
       for($i=0; $i<$num; $i++) 
          {
             $tmp  = explode($this->delimiter, $db[$i]);//memecah item2 barang
             $num1 = count($tmp);//hitung jumlah item yg sudah dipecah
             $x    = array();
             for($j=0; $j<$num1; $j++) 
                {
                   $x = trim($tmp[$j]);//hilangkan spasi kiri kanan
                   if($x==='')
                      {
                         continue;
                      }
                      
                   if(!isset($this->keys['v->k'][$x]))
                      {
                         $this->keys['v->k'][$x]         = $counter;
                         $this->keys['k->v'][$counter]   = $x;
                         $counter++;
                      } 
               
                   if(!isset($array[$this->keys['v->k'][$x]]))
                      {
                         $array[$this->keys['v->k'][$x]] = 1; 
                         $this->allsups[$this->keys['v->k'][$x]] = 1;                        
                      }
                   else
                      {
                         $array[$this->keys['v->k'][$x]]++; 
                         $this->allsups[$this->keys['v->k'][$x]]++;
                      }
               
                   $table[$i][$this->keys['v->k'][$x]] = 1; 
                } 
          }
 
       $tmp = array();
       foreach($array as $item => $sup) 
          { 
             if($sup>=$this->minSup)
                {
                   
                   $tmp[] = array($item);
                }
          }
  
       $this->allitem[$this->phase] = $tmp;
       $this->table = $table;  
    }
   //fungsi untuk
    private function scan($arr, $implodeArr = '')
    { 
       $cr = 0;
          
       if($implodeArr)
          { 
             if(isset($this->allsups[$implodeArr]))
                { 
                   return $this->allsups[$implodeArr];
                }
          }
       else
          {
             sort($arr);
             $implodeArr = implode($this->delimiter, $arr);
             if(isset($this->allsups[$implodeArr]))
                { 
                  return $this->allsups[$implodeArr];
                }
          } 
       
       $num  = count($this->table);
       $num1 = count($arr); 
       for($i=0; $i<$num; $i++)
          {
             $bool = true; 
             for($j=0; $j<$num1; $j++)
                {
                   if(!isset($this->table[$i][$arr[$j]]))
                      {
                         $bool = false;
                         break;
                      }
                }
         
             if($bool)
                {
                   $cr++;
                }
          }
          
       $this->allsups[$implodeArr] = $cr;
       
      return $cr;
    }
    //fungsi untuk menggabungkan itemset
    private function combine($arr1, $arr2)
    { 
       $result = array();
       
       $num  = count($arr1);
       $num1 = count($arr2); 
       for($i=0; $i<$num; $i++)
          {
             if(!isset($result['k'][$arr1[$i]]))
                {
                   $result['v'][] = $arr1[$i];
                   $result['k'][$arr1[$i]] = 1;
                }
          }
       for($i=0; $i<$num1; $i++)
          {
             if(!isset($result['k'][$arr2[$i]]))
                {
                   $result['v'][] = $arr2[$i];
                   $result['k'][$arr2[$i]] = 1;
                }
          }
      
      return $result['v'];
    } 
    
    //fungsi untuk membentuk nama itemset berdasarkan nama asli dari transaksi
    private function realName($arr)
    { 
       $result = ''; 
       
       $num = count($arr);
       for($j=0; $j<$num; $j++)
          { 
             if($j)
               {
                  $result .= $this->delimiter;
               }
                  
             $result .= $this->keys['k->v'][$arr[$j]]; 
          }
      
      return $result;
    }
	
    //fungsi untuk memeriksa aturan asosiasi
    private function checkRule($a, $b)
    { 
       $a_num = count($a); 
       $b_num = count($b); 
       for($i=0; $i<$a_num; $i++) 
          { 
             for($j=0; $j<$b_num; $j++) 
                {
                   if($a[$i]==$b[$j])
                      {
                         return false;
                      }
                }
          }
      return true;
    } 
	//fungsi untuk menghitung prosentase confidence
    private function confidence($sup_a, $sup_ab)
    {
        return round(($sup_ab / $sup_a) * 100, 2);
    }
  
    private function subsets($items) 
    {  
       $result  = array(); 
       $num     = count($items); 
       $members = pow(2, $num); 
       for($i=0; $i<$members; $i++) 
          { 
             $b   = sprintf("%0".$num."b", $i); 
             $tmp = array();  
             for($j=0; $j<$num; $j++) 
                { 
                   if($b[$j]=='1') 
                      {  
                         $tmp[] = $items[$j];   
                      }
                } 
      
             if($tmp)
                { 
                   sort($tmp);
                   $result[] = $tmp; 
                }  
          } 
   
      return $result; 
    }
    
    //fungsi untuk menghitung jumlah frequent itemset
    private function freqItemsets($db)
    { 
       $this->fiTime = $this->startTimer();  
       $this->makeTable($db);   
       while(1)
          {
             if($this->phase>=$this->maxPhase)
                {
                   break;
                }
                
             $num = count($this->allitem[$this->phase]);
             $cr  = 0;
             for($i=0; $i<$num; $i++)  
                {    
                   for($j=$i; $j<$num; $j++) 
                      {  
                         if($i==$j)
                            {
                               continue;
                            }
                     
                         $item = $this->combine($this->allitem[$this->phase][$i], $this->allitem[$this->phase][$j]); 
                         sort($item);  
                         $implodeArr = implode($this->delimiter, $item);
                         if(!isset($this->freqItmsts[$implodeArr]))
                            {
                               $sup = $this->scan($item, $implodeArr);
                               if($sup>=$this->minSup)
                                  {
                                     $this->allitem[$this->phase+1][] = $item;
                                     $this->freqItmsts[$implodeArr] = 1;
                                     $cr++;
                                  }
                            } 
                      }
                }
       
             if($cr<=1)
                {
                   break;
                }
      
             $this->phase++;  
          } 
           
       foreach($this->freqItmsts as $k => $v)
          {
             $arr = explode($this->delimiter, $k);
             $num = count($arr); 
             if($num>=3)
                { 
                   $subsets = $this->subsets($arr);  
                   $num1    = count($subsets); 
                   for($i=0; $i<$num1; $i++)
                      {
                         if(count($subsets[$i])<$num)
                            {
                               unset($this->freqItmsts[implode($this->delimiter, $subsets[$i])]);   
                            } 
                         else
                            {
                               break;
                            }
                      }
                } 
          }
     
       $this->fiTime = $this->stopTimer($this->fiTime); 
    }
    
   //fungsi proses
    public function process($db)
    {
       $checked = $result = array();     
       
       $this->freqItemsets($db);
       $this->arTime = $this->startTimer();
      
       foreach($this->freqItmsts as $k => $v)
          { 
             $arr     = explode($this->delimiter, $k); 
             $subsets = $this->subsets($arr);    
             $num     = count($subsets); 
             for($i=0; $i<$num; $i++)
                {
                   for($j=0; $j<$num; $j++)
                      {
                         if($this->checkRule($subsets[$i], $subsets[$j]))
                            {
                               $n1 = $this->realName($subsets[$i]);
                               $n2 = $this->realName($subsets[$j]);
                                     
                               $scan = $this->scan($this->combine($subsets[$i], $subsets[$j]));
                               $c1   = $this->confidence($this->scan($subsets[$i]), $scan);
                               $c2   = $this->confidence($this->scan($subsets[$j]), $scan); 
                              
                               if($c1>=$this->minConf)
                                  {
                                     $result[$n1][$n2] = $c1; 
                                  }
                                 
                               if($c2>=$this->minConf)
                                  { 
                                     $result[$n2][$n1] = $c2; 
                                  } 
                                             
                               $checked[$n1.$this->delimiter.$n2] = 1;
                               $checked[$n2.$this->delimiter.$n1] = 1; 
                            }
                      }
                } 
          }
      
       $this->arTime = $this->stopTimer($this->arTime); 
 
      return $this->rules = $result;
    }
    //fungsi untuk mencetak frequent itemset
    public function printFreqItemsets()
    {
       echo 'Time: '.$this->fiTime.' second(s)<br />*****************************************<br />';
         
       foreach($this->freqItmsts as $k => $v)
          {
             $tmp  = '';
             $tmp1 = '';
             $k    = explode($this->delimiter, $k);
             $num  = count($k);
             for($i=0; $i<$num; $i++)
                {  
                   if($i)
                      {
                         $tmp  .= $this->delimiter.$this->realName($k[$i]);
                         $tmp1 .= $this->delimiter.$k[$i];
                      }
                   else
                      {
                         $tmp  = $this->realName($k[$i]);
                         $tmp1 = $k[$i];
                      } 
                }
             
             echo '{'.$tmp.'} = '.$this->allsups[$tmp1].'<br />'; 
          }
    }   
    
    public function saveFreqItemsets($filename)
    {
       $content = '';
                
       foreach($this->freqItmsts as $k => $v)
          {
             $tmp  = '';
             $tmp1 = '';
             $k    = explode($this->delimiter, $k);
             $num  = count($k);
             for($i=0; $i<$num; $i++)
                {  
                   if($i)
                      {
                         $tmp  .= $this->delimiter.$this->realName($k[$i]);
                         $tmp1 .= $this->delimiter.$k[$i];
                      }
                   else
                      {
                         $tmp  = $this->realName($k[$i]);
                         $tmp1 = $k[$i];
                      } 
                }
             
             $content .= '{'.$tmp.'} = '.$this->allsups[$tmp1]."\n"; 
          }
          
        file_put_contents($filename, $content);
    }
    
    public function getFreqItemsets()
    {
       $result = array();
       
       foreach($this->freqItmsts as $k => $v)
          {
             $tmp        = array();
             $tmp['sup'] = $this->allsups[$k];
             $k          = explode($this->delimiter, $k);
             $num        = count($k);
             for($i=0; $i<$num; $i++)
                {  
                   $tmp[] = $this->realName($k[$i]); 
                }
             
             $result[] = $tmp; 
          }
       
      return $result;
    } 
    //print hasil association rule
    public function printAssociationRules()
    {
		$no=1;
		if($this->rules==null)
		{
			echo "<h3>Tidak ada aturan asosiasi yang terbentuk </h3>";
			}
			else {
			echo "<h3 align='center'>Association Rules yang terbentuk</h3><th>";
			
			echo 
			"<table width='100%' height='80' class='table table-hover'>
			<tr>
			<th width='17%' class='col-md-1'>NO</th>
			<th width='17%' class='col-md-5'>Association Rule</th>
			<th width='12%' class='col-md-2'>Confidence</th>
			</tr>";
			
       foreach($this->rules as $a => $arr)
          {
             foreach($arr as $b => $conf)
                { 
                   echo 
				   "<tr bgcolor='#E6E6E6'><td>$no</td><td>$a=> $b</td><td style='color:blue' width='100px'>$conf%</td></tr>";
				   echo "<tr><td colspan='2'>Dari seluruh pelanggan yang membeli $a, $conf% juga membeli $b</td></tr>";
				   $no++;
				   
                }
          }
		  echo "</tbody><table>";
	}
}
	
    public function saveAssociationRules($filename)
    {
        $content = '';
                
       foreach($this->rules as $a => $arr)
          {
             foreach($arr as $b => $conf)
                { 
                   $content .= "$a => $b = $conf%\nDari seluruh pelanggan yang membeli $a, $conf% juga membeli $b  \n"; 
                }
          } 
          
        file_put_contents($filename, $content);
    }
    
    public function getAssociationRules()
    {
        return $this->rules;
    } 
    //untuk memulai timer
    private function startTimer()
    {
       list($usec, $sec) = explode(" ", microtime());
       return ((float)$usec + (float)$sec);
    }
    //untuk menghentikan timer
    private function stopTimer($start, $round=2)
    {
       $endtime = $this->startTimer()-$start;
       $round   = pow(10, $round);
       return round($endtime*$round)/$round;
    }
}  
?>
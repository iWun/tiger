<?php
global $_W, $_GPC;
       include IA_ROOT . "/addons/tiger_newhu/inc/sdk/tbk/tb.php";
       include IA_ROOT . "/addons/tiger_newhu/inc/sdk/tbk/goodsapi.php"; 
       $cfg = $this->module['config'];
       $key=trim($_GPC['key']);
       $key=str_replace(" ","",$key);
       //echo var_dump($key);
       //exit;
       
       $dluid=$_GPC['dluid'];
       $lx=$_GPC['lx'];
       $lm=$_GPC['lm'];
       $tm=$_GPC['tm'];
       $pid=trim($_GPC['pid']);
       $pic_url=$_GPC['pic_url'];
       $key=str_replace("搜索","",$key);
       $key=str_replace("￼"," ",$key);
			 //$aaa=str_replace("￼s","AAA","abcssss");
			 //$key=str_replace("【天天特价】"," ",$key);
			 $key=str_replace("独立"," ",$key);
			 $key=str_replace("手枪"," ",$key);
	   
       $key=trim($key);
       $weid=$_W['uniacid'];
       $zn=$_GPC['zn'];//1站内
        if(!empty($cfg['gyspsj'])){
          $weid=$cfg['gyspsj'];
        }
        $keylen=strlen($key);
				if(empty($_GPC['page'])){
					$page=1;
				}
        
        $dblist = pdo_fetchall("select * from ".tablename($this->modulename."_cdtype")." where weid='{$_W['uniacid']}' and fftype=1  order by px desc");//底部菜单
         
         
        $tksign = pdo_fetch("SELECT * FROM " . tablename($this->modulename."_tksign") . " WHERE  tbuid='{$cfg['tbuid']}'");
 
       if($cfg['cjsstype']==1){//开启标题查券
         if($keylen>65){
         	//$ck = pdo_fetch("SELECT * FROM ".tablename('tiger_newhu_ck')." WHERE weid = :weid", array(':weid' => $_W['uniacid']));
	        ////goods=getgoodslist($_GPC['key'],'',$_W,$page,$cfg,$lx,$tm);
	       	// $url=$goods[0]->auctionUrl;
	         //$res=hqyongjin($url,$ck,$cfg,$this->modulename,'','',$tksign['sign'],$tksign['tbuid'],$_W,2);  
	        
	         if(!empty($res['couponid'])){
//	         	if($cfg['lbratetype']==3){
//              	$ratea=$this->ptyjjl($res['qhjpric'],$v['commissionRate'],$cfg);
//              }else{
//              	$ratea=$this->sharejl($res['qhjpric'],$v['commissionRate'],$bl,$share,$cfg);
//              } 
//	         	$cqdata=array(
//	         	     'rate'=>$ratea, //佣金
//		             'weid' => $_W['uniacid'],
//		             'itemid'=>$res['num_iid'],//商品ID
//		             'itemtitle'=>$res['title'],//商品名称
//		             'itempic'=>$res['pictUrl'],//主图地址
//		             'itemprice'=>$res['price'],//'商品原价', 
//		             'itemendprice'=>$res['qhjpric'],//商品价格,券后价
//		             'tkrates'=>$res['commissionRate'],//通用佣金
//		             'quan_id'=>$res['couponid'],//'优惠券ID',  
//		             'couponmoney'=>$res['couponAmount'],//优惠券面额
//		             'itemsale'=>$res['biz30day'],//月销售	             
//		             //'taokouling'=>$res['taokouling'],//淘口令
//		             //'lxtype'=>$res['qq'],
//		             'couponendtime'=>strtotime($res['couponendtime']),//优惠券结束
//		             'createtime'=>TIMESTAMP,
//		             'lm'=>3
//		        );
//		         $go = pdo_fetch("SELECT id FROM " . tablename($this->modulename."_newtbgoods") . " WHERE weid = '{$data['weid']}' and  itemid='{$res['num_iid']}'");
//		           if(empty($go)){ 
//		              $bb=pdo_insert($this->modulename."_newtbgoods",$cqdata);             
//		            }else{      
//		              pdo_update($this->modulename."_newtbgoods", $cqdata, array('weid'=>$cqdata['weid'],'itemid' =>$res['num_iid']));
//		            }  
		                 
		      }else{
		        $cqdata1=getview($res['num_iid']);
		       
		        
		      	if(!empty($cqdata1['id'])){
		      		if($cfg['lbratetype']==3){
	                	$ratea=$this->ptyjjl($cqdata1['itemendprice'],$v['tkrates'],$cfg);
	                }else{
	                	$ratea=$this->sharejl($cqdata1['itemendprice'],$v['tkrates'],$bl,$share,$cfg);
	                } 
		      		$cqdata=array(
		      		     'rate'=>$ratea,//佣金
			             'weid' => $_W['uniacid'],
			             'itemid'=>$cqdata1['itemid'],//商品ID
			             'itemtitle'=>$cqdata1['itemtitle'],//商品名称
			             'itempic'=>$cqdata1['itempic'],//主图地址
			             'itemprice'=>$cqdata1['itemprice'],//'商品原价', 
			             'itemendprice'=>$cqdata1['itemendprice'],//商品价格,券后价
			             'tkrates'=>$cqdata1['tkrates'],//通用佣金
			             'quan_id'=>$cqdata1['quan_id'],//'优惠券ID',  
			             'couponmoney'=>$cqdata1['couponmoney'],//优惠券面额
			             'itemsale'=>$cqdata1['itemsale'],//月销售	             
			             //'taokouling'=>$res['taokouling'],//淘口令
			             //'lxtype'=>$res['qq'],
			             'couponendtime'=>strtotime($cqdata1['couponendtime']),//优惠券结束
			             'createtime'=>TIMESTAMP,
			             'lm'=>2
			         );
//		      		$cqdata=$cqdata1;
		      	} 	
		      }
         }
       	
       }
       
//     echo "<pre>";
//     	print_r($cqdata);



        //echo $key; 
        $key=str_replace("&#039;"," ",$key);


       //exit;
//		if($cfg['zhaoxs']==0 ){
//
//		       if(!empty($key)){       	
//			       	
//			       	if($keylen>48){
//			       		$where1.=" and itemtitle like '%{$key}%'";
//			       		$cjgoods = pdo_fetchall("SELECT * FROM " . tablename($this->modulename.'_newtbgoods')." where weid='{$weid}' {$where1} order by couponmoney desc limit 1");   
//			       	}else{
//			       		$cjgoods='';
//			       	}       	
//			       	    	
//			       	if(empty($cjgoods)){
//			       		$arr=getfc3($key,$_W); 
//				         foreach($arr as $v){
//				             if (empty($v)) continue;
//				            $where.=" and itemtitle like '%{$v}%'";
//				         }
//				         if(empty($cfg['cjsswzxsgs'])){
//				         	$limit=20;
//				         }else{
//				         	$limit=$cfg['cjsswzxsgs'];
//				         }
//				         $cjgoods = pdo_fetchall("SELECT * FROM " . tablename($this->modulename.'_newtbgoods')." where weid='{$weid}' {$where} order by couponmoney desc limit ".$limit);
//			       	}
//		       }
//		}

								if($page==1 && empty($lx)){
	               	 $goods=cjsearch($page,$pid,$tksign['sign'],$tksign['tbuid'],$_W,$cfg,urlencode($_GPC['key']),2,'','','','',$tm,$px,1);		
									 if($goods['total_results']==1){
									 		           		$goods=$goods['result_list']['map_data'];
									 		           		if(!empty($goods['coupon_info'])){
									 		            		preg_match_all('|减(\d*)元|',$goods['coupon_info'], $returnArr);
									            					$conmany=$returnArr[1][0];   
									 		            	}else{
									 		            		$conmany=0;
									 		            	}       		
									 		           		 $itemendprice=$goods['zk_final_price']-$conmany;
									 				         $status=1;
									 				         $list[0]['itemtitle']=$goods['title'];  //标题
									 		                 $list[0]['shoptype']=$goods['user_type'];  //1天猫
									 		                 $list[0]['itemid']=$goods['num_iid'];//商品ID
									 		                 $list[0]['itemprice']=$goods['zk_final_price'];//原价
									 		                 $list[0]['itemendprice']=$itemendprice;//折扣价-优惠券金额
									 		                 $list[0]['couponmoney']=$conmany;//优惠券金额
									 		                 $list[0]['itemsale']=$goods['volume'];//月销量
									 		                 $list[0]['url']=$goods['item_url'];//商品链接
									 		                 $list[0]['shopTitle']=$goods['shop_title'];//店铺名称                 
									 		                 $list[0]['itempic']=$goods['pict_url'];//图片
									 		                 $list[0]['pid']=$pid;
									 		                 $list[0]['lm']=1;
									 		                 if($cfg['lbratetype']==3){
									 		                	$ratea=$this->ptyjjl($itemendprice,$goods['commission_rate']/100,$cfg);
									 		                 }else{
									 		                	$ratea=$this->sharejl($itemendprice,$goods['commission_rate']/100,$bl,$share,$cfg);
									 		                 } 
									 		                 $list[0]['rate']=$ratea;
									 		                 $list[0]['couponnum']=$goods['coupon_remain_count'];//剩余优惠券数量//用的是总量  
									 		
									 				    }else{
									 				    	
									 			            foreach($goods['result_list']['map_data'] as $k=>$v){
									 			            	$goods=$v;
									 			            	if(!empty($goods['coupon_info'])){
									 								preg_match_all('|减(\d*)元|',$goods['coupon_info'], $returnArr);
									            						$conmany=$returnArr[1][0];    
									 			            	}else{
									 			            		$conmany=0;
									 			            	}
									 			            	 		      		
									 			           		 $itemendprice=$goods['zk_final_price']-$conmany;
									 		//	            	if($itemendprice<0.02){
									 		//	            		continue;
									 		//	            	}        		
									 					         $status=1;
									 					         $list[$k]['itemtitle']=$goods['title'];  //标题
									 			                 $list[$k]['shoptype']=$goods['user_type'];  //1天猫
									 			                 $list[$k]['itemid']=$goods['num_iid'];//商品ID
									 			                 $list[$k]['itemprice']=$goods['zk_final_price'];//原价
									 			                 $list[$k]['itemendprice']=$itemendprice;//折扣价-优惠券金额
									 			                 $list[$k]['couponmoney']=$conmany;//优惠券金额
									 			                 $list[$k]['itemsale']=$goods['volume'];//月销量
									 			                 $list[$k]['url']=$goods['item_url'];//商品链接
									 			                 $list[$k]['shopTitle']=$goods['shop_title'];//店铺名称                 
									 			                 $list[$k]['itempic']=$goods['pict_url'];//图片
									 			                 $list[$k]['pid']=$pid;
									 			                 $list[$k]['lm']=1;
									 //			                 $ratea=$this->sharejl($itemendprice,$goods['commission_rate']/100,$bl,$share,$cfg);
									 			                 if($cfg['lbratetype']==3){
									 			                	$ratea=$this->ptyjjl($itemendprice,$goods['commission_rate']/100,$cfg);
									 			                 }else{
									 			                	$ratea=$this->sharejl($itemendprice,$goods['commission_rate']/100,$bl,$share,$cfg);
									 			                 } 
									 			                 $list[$k]['rate']=$ratea;
									 			                 $list[$k]['couponnum']=$goods['coupon_remain_count'];//剩余优惠券数量//用的是总量     
									 			          }
									 				       $status=1;
									 				    }
	              }
								
// 								echo "<pre>";
// 								print_r($list);
// 								exit;
       
       function getfc3($str,$wi){//分词
	       if(empty($str)){
	           $arr=json_decode(array('error'=>'分词标题必须要填写！'),TRUE);
	         return $arr;
	       }
	       $tkurl=urlencode($wi['setting']['site']['url']);//urlencode($wi['siteroot']);
	       $tkip=$_SERVER["SERVER_ADDR"];
	       //$url="http://www.huurl.cn/app/index.php?i=3&c=entry&do=fc&m=tiger_shouquan&str=".$str."&tkurl=".$tkurl."&tkip=".$tkip;
	       //$str=curl_request($url);
	       $str=getfcapi3($str);
	       $arr = explode(' ',trim($str));
	       foreach($arr as $k=>$v){
	           if(empty($v)){
	             continue;
	           }
	           if($k >10){
	             continue;
	           }
	          $a[$k]=$v;
	       }
	       return $a;
	   }
	
	
	   function getfcapi3($str){//分词
	           //http://www.huurl.cn/app/index.php?i=3&c=entry&do=fc&m=tiger_shouquan&str=棉麻衬衫女帛色棉麻女装纯棉衬衫女%20长袖上衣文艺复古立领小衫
	           //global $_W, $_GPC;
	           //$str=$_GPC['str'];
	           //$str='';
	           //初始化类
	            PhpAnalysis::$loadInit = false;
	            $pa = new PhpAnalysis(); 
	            //执行分词
	            $pa->SetSource($str);
	            $pa->resultType   = 1;
	            $pa->differMax = false;
	            $pa->unitWord = true;    
	            $pa->StartAnalysis($do_fork);    
	            $okresult = $pa->GetFinallyResult();
	            return $okresult;         
	   }

       

       $fans=$this->islogin();
       $openid=$fans['openid'];   
        if(empty($fans['tkuid'])){
        	$fans = mc_oauth_userinfo();  
            $openid=$fans['openid'];     
        }
       if(!empty($dluid)){
          $share=pdo_fetch("select * from ".tablename('tiger_newhu_share')." where weid='{$_W['uniacid']}' and id='{$dluid}'");
        }else{
          
          $zxshare=pdo_fetch("select * from ".tablename('tiger_newhu_share')." where weid='{$_W['uniacid']}' and from_user='{$openid}'");
        }
        if($zxshare['dltype']==1){
            if(!empty($zxshare['dlptpid'])){
               $cfg['ptpid']=$zxshare['dlptpid'];
               $cfg['qqpid']=$zxshare['dlqqpid'];
            }
        }else{
           if(!empty($zxshare['helpid'])){//查询有没有上级
                 $sjshare=pdo_fetch("select * from ".tablename('tiger_newhu_share')." where weid='{$_W['uniacid']}' and dltype=1 and id='{$zxshare['helpid']}'");
            }
        }


        if(!empty($sjshare['dlptpid'])){
            if(!empty($sjshare['dlptpid'])){
              $cfg['ptpid']=$sjshare['dlptpid'];
              $cfg['qqpid']=$sjshare['dlqqpid'];
            }
        }else{
           if($share['dlptpid']){
               if(!empty($share['dlptpid'])){
                 $cfg['ptpid']=$share['dlptpid'];
                 $cfg['qqpid']=$share['dlqqpid'];
               }
            }
        }
        if(empty($pid)){
        	$pid=$cfg['ptpid'];
	    }else{
	    	$cfg['ptpid']=$pid;
	    }
       
//     $goods=getgoodslist($key,'',$_W,$page,$cfg,$lx,$tm);
//     foreach($goods as $k=>$v){
//           $list[$k]['title']=$v->title;
//           $list[$k]['istmall']=$v->userType;
//           $list[$k]['num_iid']=$v->auctionId;
//           $list[$k]['org_price']=$v->zkPrice;
//           $list[$k]['price']=$v->zkPrice-$v->couponAmount;
//           $list[$k]['coupons_price']=$v->couponAmount;
//           $list[$k]['goods_sale']=$v->biz30day;
//           $list[$k]['url']=$v->auctionUrl;
//           $list[$k]['pic_url']='http:'.$v->pictUrl;
//     }

       include $this->template ( 'cqlist' );
?>

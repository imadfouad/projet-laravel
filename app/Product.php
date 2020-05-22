<?php

namespace App;



Class Product
        {
                    public $items=null;
                    public $TotalItems=0;
                    public $TotalPrice=0;

                public function __construct  ($oldCart)
                    {   if ( $oldCart)
                        {   $this->items=$oldCart->items;
                            $this->TotalItems=$oldCart->TotalItems;
                            $this->TotalPrice=$oldCart->TotalPrice ;

                        }



                    }



                    public function add($item,$id_article)
                {
                    $StoredItem=[
                        'id_article' =>$item->id_article,
                        'title'=> $item->nom,
                        'price'=>$item->prix,
                        'Qty' => 0  ,
                        'photo'=> $item->photo ,
                        'item' => $item,
                        'categorie' => $item->categorie,
                    ];

                    if ( $this ->items )
                    {
                        if (array_key_exists($id_article,$this->items))
                        {
                            $StoredItem=$this->items[$id_article];
                        }
                    }
                    $StoredItem['Qty']++;
                    $StoredItem['price']=$item->prix * $StoredItem['Qty'];
                    $this -> items[$id_article]=$StoredItem;
                    $this -> TotalItems ++ ;
                    $this ->TotalPrice += $item -> prix ;
                }

                public function reduceByOne($item , $id_article){

                    $StoredItem=$this->items[$id_article];
                    $StoredItem['Qty']--;
                    $StoredItem['price'] = $item->prix * $StoredItem['Qty'];
                    $this->items[$id_article]=$StoredItem;
                    $this->TotalItems --;
                    $this->TotalPrice-= $item -> prix;

                    if($this->items[$id_article]['Qty'] <= 0){
                        unset($this->items[$id_article]);
                    }
                    
                }




                }

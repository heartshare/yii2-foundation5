<?php

namespace plastique\foundation5;

class GridView extends \yii\grid\GridView {
    
    public $tableOptions = [
                                'class' => 'grid-table', 
                                'role'  => 'grid'
                            ]; 
    public $pager = [
                        'class' => 'plastique\foundation5\PagesLinks'
                    ];
    
    public function run()
    {
        \yii\grid\GridViewAsset::register($this->getView());
        parent::run();
    }
}

<?php

namespace plastique\foundation5;
use Yii;
use plastique\foundation5\helpers\Html;


class GridActionColumn extends \yii\grid\ActionColumn {
    
  public $template = '{edit} {delete}';
  public $contentOptions  = [
                                'class' => 'grid-actions'
                            ];

  protected function initDefaultButtons()
  {    
    if (!isset($this->buttons['edit'])) {
      $this->buttons['edit'] = function ($url, $model) {
        return Html::a(
                        Html::icon(
                                    'pencil',
                                    ['class' => 'color-black size-21']
                        ), 
                        $url, 
                        [
                            'title'     => Yii::t('admin', 'row.button.update'),
                            'data-pjax' => '0',
                        ]
                );
      };
    }
    
    if (!isset($this->buttons['delete'])) {
      $this->buttons['delete'] = function ($url, $model) {
        return Html::a(
                        Html::icon(
                                    'x',
                                    ['class' => 'color-red size-21']
                        ), 
                        $url, 
                        [
                            'title'        => Yii::t('yii', 'row.button.delete'),
                            'data-confirm' => Yii::t('admin', 'row.delete.confirm'),
                            'data-method'  => 'post',
                            'data-pjax'    => '0',
                        ]
                );
      };
    }
  }
}


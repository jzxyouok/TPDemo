<?php
namespace Home\Model;
header('Content-type:text/html;charset=utf-8');
use Think\Model;
class CommentModel extends Model{
    
    protected  $_auto = array(
        array('comment_date','time',1,'function'),
    );
        
        
}


<?php
/**
 * hashid
 * User: kl
 * DateTime: 2021/10/1 12:34 上午
 *
 * 使用方法
 * $model=new \Kl\Hashid\Hashid();
 * //$model->salt=123456;       //盐值
 * //$model->minHashLength=5;   //生成最小长度，默认5
 * //$model->alphabet='abcdefghijklmnopqrstuvwxyz1234567890';   //由哪些字符组成的密码
 *
 * $sid=$model->encode(1);
 * var_dump('sid:'.$sid);
 * $id=$model->decode('abc');
 * var_dump('id:'.$id);
 */
namespace Kl\HashId;
use Hashids\Hashids;

class Hashid{

    /**
     * 盐值
     */
    public $salt='5735570';
    /**
     * 生成最短字符数
     */
    public $minHashLength=5;
    /**
     * 密码组成字符
     */
    public $alphabet='abcdefghijklmnopqrstuvwxyz1234567890';

    private function HashIds(){
        return new Hashids($this->salt, $minHashLength = $this->minHashLength, $alphabet = $this->alphabet);
    }

    /**
     * id解密
     * User: kl
     * DateTime: 2021/10/1 1:08 上午
     * @param string $string
     * @return mixed
     */
    public function decode(string $string){
        $hashids = $this->HashIds();
        if (is_array($hashids->decode($string)) && $hashids->decode($string)){
            return $hashids->decode($string)[0];
        }
        return false;
    }

    /**
     * id加密
     * User: kl
     * DateTime: 2021/10/1 1:08 上午
     * @param int $id
     * @return mixed
     */
    public function encode(int $id){
        $hashids = $this->HashIds();
        return $hashids->encode(1);
    }

}
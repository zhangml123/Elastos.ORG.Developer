<?php
/**
 * @Author: [FENG] <1161634940@qq.com>
 * @Date:   2018-08-05 23:38:23
 * @Last Modified by:   [FENG] <1161634940@qq.com>
 * @Last Modified time: 2018-08-05 23:44:44
 */

namespace Api\Controller;
use Think\Controller;

class PaymentController extends Controller 
{   

    /**
     * [Weixinpay 微信扫码支付]
     */
    public function Weixinpay()
    {   
        $master_order_sn = time().rand(0000,9999);
        $order = array(
            'body'          => "账户充值",
            'total_fee'     => '1',
            'out_trade_no'  => strval($master_order_sn),
            'product_id'    => $master_order_sn,
            );
        weixinpay($order);
    }

    /**
     * [Alipay PC支付宝支付]
     */
    public function Alipay(){
        $master_order_sn = time().rand(0000,9999);
        $order = array(
            'body'          => "账户充值",
            'total_fee'     => '0.01',
            'out_trade_no'  => strval($master_order_sn),
            'product_id'    => $master_order_sn,
            );
        Alipay($order);
    }

    /**
     * [MAlipay 手机支付宝支付]
     */
    public function MAlipay(){
        $master_order_sn = time().rand(0000,9999);
        $order = array(
            'body'          => "账户充值",
            'total_fee'     => '0.01',
            'out_trade_no'  => strval($master_order_sn),
            'product_id'    => $master_order_sn,
            );
        Malipay($order);
    }

    /**
     * [wexipay_notify 微信支付异步回调]
     * @return [type] [description]
     */
    public function wexipay_notify(){
        // 导入微信支付sdk
        Vendor('Weixinpay.Weixinpay');
        $wxpay=new \Weixinpay();
        $result=$wxpay->notify();
        if ($result) {
            // 支付成功 修改数据库的订单状态等
        }
    }

    /**
     * [alipay_notify 支付宝异步回调]
     * @return [type] [description]
     */
    public function alipay_notify(){
        Vendor('Alipay.pagepay.service.AlipayTradeService');

        $data=$_POST;

        $alipaySevice = new \AlipayTradeService(); 
        $result = $alipaySevice->check($data);

        if($result) {//验证成功
            $out_trade_no = $data['out_trade_no']; //商户订单号
            $trade_no = $data['trade_no']; //支付宝交易号
            $trade_status = $data['trade_status']; //交易状态

            if(($data['trade_status'] == 'TRADE_FINISHED') || ($data['trade_status'] == 'TRADE_SUCCESS')) {
                // 支付成功 修改数据库的订单状态等
            }
            //――请根据您的业务逻辑来编写程序（以上代码仅作参考）――
            echo "success"; //请不要修改或删除
        }else {
            //验证失败
            echo "fail";
        }

    }

    /**
     * [return_url 同步跳转]
     * @return [type] [description]
     */
    public function return_url()
    {
    }

}
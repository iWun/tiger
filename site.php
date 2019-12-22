<?php

goto T5b9l;
iT905:
require_once ROOT_PATH . 'inc/sdk/tbk/TopSdk.php';
goto K1Rwl;
T5b9l:
defined('IN_IA') or exit('Access Denied');
goto g19P4;
NLMh9:
require_once ROOT_PATH . 'lib/excel.php';
goto iT905;
g19P4:
define('ROOT_PATH', IA_ROOT . '/addons/tiger_newhu/');
goto NLMh9;
K1Rwl:
class tiger_newhuModuleSite extends WeModuleSite
{
    public $table_request = "tiger_newhu_request";
    public $table_goods = "tiger_newhu_goods";
    public $table_ad = "tiger_newhu_ad";
    private static $t_sys_member = "mc_members";
    public function doMobileMdorderlist()
    {
        goto ISHph;
        tqjEi:
        gyTy6:
        goto qrNnS;
        qrNnS:
        $share = pdo_fetch('select * from ' . tablename('tiger_newhu_share') . " where weid='{$_W['uniacid']}' and from_user='{$fans['openid']}'");
        goto acbt6;
        KQqny:
        if ($op == 'df') {
            goto ln5Qi;
        }
        goto xvGOQ;
        sQKEH:
        include $this->template('md/mdorderlist');
        goto vn35f;
        iHeh1:
        goto oCjrj;
        goto K325Q;
        koq_o:
        goto gQlgB;
        goto CassQ;
        qIvm9:
        $order = pdo_fetchall('select * from ' . tablename($this->modulename . '_mdorder') . " where weid='{$_W['uniacid']}' {$ddorwehre} and uid='{$share['id']}' order by id desc");
        goto koq_o;
        LXih_:
        if (!empty($fans['tkuid'])) {
            goto gyTy6;
        }
        goto rkB5F;
        acbt6:
        $uid = $share['id'];
        goto Y1bK7;
        xvGOQ:
        if ($op == 'yf') {
            goto xjwa_;
        }
        goto IcV41;
        Y1bK7:
        oCjrj:
        goto o0o6D;
        K325Q:
        y1aoh:
        goto m4oKL;
        QCDrf:
        Jaf2R:
        goto tqjEi;
        rkB5F:
        $fans = mc_oauth_userinfo();
        goto Pj2EA;
        v6KYD:
        $share = pdo_fetch('select * from ' . tablename('tiger_newhu_share') . " where weid='{$_W['uniacid']}' and id='{$uid}'");
        goto iHeh1;
        o0o6D:
        $op = $_GPC['op'];
        goto iCEc4;
        WSYdP:
        gQlgB:
        goto sQKEH;
        iCEc4:
        if ($op == 'qb') {
            goto f_tOe;
        }
        goto KQqny;
        DI6is:
        $cfg = $this->module['config'];
        goto h4EQv;
        tCfIZ:
        exit;
        goto QCDrf;
        WIazc:
        $order = pdo_fetchall('select * from ' . tablename($this->modulename . '_mdorder') . " where weid='{$_W['uniacid']}' and  uid='{$share['id']}' and sh=2  order by id desc");
        goto WSYdP;
        ISHph:
        global $_W, $_GPC;
        goto DI6is;
        CATAu:
        xjwa_:
        goto WIazc;
        Pj2EA:
        if (!empty($fans['openid'])) {
            goto Jaf2R;
        }
        goto tWQLZ;
        IcV41:
        goto gQlgB;
        goto bFuw6;
        bFuw6:
        f_tOe:
        goto qIvm9;
        h4EQv:
        $uid = $_GPC['uid'];
        goto NlqAm;
        Hebv9:
        $order = pdo_fetchall('select * from ' . tablename($this->modulename . '_mdorder') . " where weid='{$_W['uniacid']}' and  uid='{$share['id']}' and sh!=2 order by id desc");
        goto kTgwC;
        kTgwC:
        goto gQlgB;
        goto CATAu;
        NlqAm:
        if (empty($uid)) {
            goto y1aoh;
        }
        goto v6KYD;
        CassQ:
        ln5Qi:
        goto Hebv9;
        tWQLZ:
        echo '请从微信客户端打开！';
        goto tCfIZ;
        m4oKL:
        $fans = $this->islogin();
        goto LXih_;
        vn35f:
    }
    public function doMobileMdaddorder()
    {
        goto WZWy7;
        VlVIv:
        die(json_encode(array("error" => 0, "msg" => "免单未开始！")));
        goto K1U4P;
        K1U4P:
        Gs47_:
        goto Ct579;
        yPagZ:
        if (empty($mdset['mdtype'])) {
            goto PIrtg;
        }
        goto xNKF4;
        UUsmP:
        if (!($adzoneid != $tkorder['tgwid'])) {
            goto GS0ur;
        }
        goto trWX3;
        wgUwg:
        $mderr = 1;
        goto E4Y3t;
        d7HkG:
        $orderid = $_GPC['code'];
        goto C6dg7;
        xNKF4:
        if ($time < $mdset['starttime']) {
            goto D7umr;
        }
        goto Z8adp;
        qNDd9:
        $weid = $_W['uniacid'];
        goto d7HkG;
        ojC2G:
        $uid = $_GPC['uid'];
        goto qNDd9;
        XJr_e:
        goto nXZop;
        goto o2hhJ;
        zphrB:
        D7umr:
        goto DCImD;
        E4Y3t:
        die(json_encode(array("error" => 0, "msg" => "今天免单不满足！")));
        goto l62bE;
        SJNoy:
        $mdyaoqing = pdo_fetchcolumn('SELECT COUNT(*) FROM ' . tablename('tiger_newhu_share') . " WHERE weid='{$_W['uniacid']}' and helpid='{$member['id']}' and createtime>'{$timetoday}' order by id desc ");
        goto nbJOn;
        euyZA:
        $mdyaoqing = pdo_fetchcolumn('select COUNT(*) from ' . tablename('tiger_newhu_tkorder') . " where weid='{$_W['uniacid']}' and tbsbuid6='{$member['tbsbuid6']}' and addtime>'{$timetoday}' and orderzt<>'订单失效' order by id desc");
        goto Rw3qW;
        s22hP:
        r2HN6:
        goto xhN5X;
        SgNxJ:
        $mdtype = 3;
        goto cs2k5;
        Bq5Mz:
        $order = pdo_fetch('select * from ' . tablename('tiger_newhu_mdorder') . " where weid='{$weid}' and orderid='{$orderid}'");
        goto iFiZz;
        Rw3qW:
        if (!($mdyaoqing >= $mdset['mdzgcount'])) {
            goto ODJ7x;
        }
        goto I3ZNW;
        VnDki:
        $pidSplit = explode('_', $mdset['miandanpid']);
        goto MscyZ;
        i6teT:
        if (!empty($member['tbsbuid6'])) {
            goto UBqjM;
        }
        goto WmNqi;
        ubm0Y:
        eLqjk:
        goto GYak0;
        Dc25V:
        die(json_encode(array("error" => 1, "msg" => "订单已经存在！")));
        goto vvkKf;
        WNYtm:
        nXZop:
        goto FrHB6;
        SLfsk:
        if (!($op == 'bd')) {
            goto eLqjk;
        }
        goto Fr5Ts;
        S5sdD:
        if (!empty($uid)) {
            goto VgmiO;
        }
        goto Uy3Yz;
        Asl8T:
        $data = array("weid" => $weid, "openid" => $member['from_user'], "uid" => $member['id'], "nickname" => $member['nickname'], "avatar" => $member['avatar'], "orderid" => $orderid, "itemid" => $tkorder['numid'], "jl" => $jl, "jltype" => $jltype, "sh" => $sh, "yongjin" => $tkorder['xgyg'], "price" => $tkorder['fkprice'], "type" => 0, "createtime" => TIMESTAMP);
        goto SmvMt;
        WmNqi:
        $tbsbuid6 = substr($orderid, -6);
        goto UmFaK;
        WZWy7:
        global $_W, $_GPC;
        goto jHDub;
        ysqs2:
        fsbP3:
        goto vgGya;
        hStf7:
        $time = time();
        goto yPagZ;
        oPfqR:
        iZsTn:
        goto SgNxJ;
        JOxZj:
        LkYMb:
        goto VlDqq;
        zC0Xv:
        $myorder = pdo_fetch('select * from ' . tablename('tiger_newhu_mdorder') . " where weid='{$weid}' and createtime>'{$mytimetoday}' and uid='{$uid}'");
        goto KbN1_;
        cdHti:
        $timetoday = strtotime(date('Y-m-d', time()));
        goto euyZA;
        sPfQ4:
        rLIo5:
        goto jPVM3;
        yU9G4:
        DJjCn:
        goto f5Pfj;
        RBTCQ:
        die(json_encode(array("error" => 1, "msg" => "订单提交成功")));
        goto jr9eM;
        vvkKf:
        goto ICDKJ;
        goto M_qcC;
        CfA13:
        $tbsbuid6 = substr($orderid, -6);
        goto VWEgE;
        j_6q1:
        RRNVn:
        goto Asl8T;
        o2hhJ:
        H3UoC:
        goto azp2C;
        XhJE9:
        $tkorder = pdo_fetch('select * from ' . tablename('tiger_newhu_tkorder') . " where weid='{$weid}' and orderid='{$orderid}'");
        goto CnUQ1;
        iFiZz:
        $mytimetoday = strtotime(date('Y-m-d', time()));
        goto zC0Xv;
        GYak0:
        if (empty($mdset['mdrensum'])) {
            goto H3UoC;
        }
        goto ze2kP;
        kS4Qh:
        if ($tkorder['orderzt'] == '订单失效') {
            goto fsbP3;
        }
        goto Zkmi2;
        DCImD:
        $mdtype = 2;
        goto VlVIv;
        QzPPU:
        ICDKJ:
        goto mz19p;
        v4dQv:
        goto RRNVn;
        goto ysqs2;
        FrHB6:
        $mdtime = $member['createtime'] + $mdday;
        goto hStf7;
        Fr5Ts:
        if (!empty($member['tbsbuid6'])) {
            goto Qxusw;
        }
        goto CfA13;
        lG7WA:
        $sh = 0;
        goto UIHRx;
        fNIGG:
        goto rLIo5;
        goto oPfqR;
        VOpbM:
        tsnCD:
        goto f9DdZ;
        yjnAw:
        if (!($mdset['mdyaoqingcount'] >= 1)) {
            goto PWqme;
        }
        goto w0Rkn;
        nMlvA:
        L3UhQ:
        goto ZSg_K;
        bOCah:
        PIrtg:
        goto m1NVh;
        JFk2E:
        $mdset = pdo_fetch('SELECT * FROM ' . tablename('tiger_newhu_miandanset') . " WHERE weid='{$_W['uniacid']}' order by id desc ");
        goto S5sdD;
        w0Rkn:
        $timetoday = strtotime(date('Y-m-d', time()));
        goto SJNoy;
        nbJOn:
        if (!($mdyaoqing >= $mdset['mdyaoqingcount'])) {
            goto tsnCD;
        }
        goto n9tek;
        Ct579:
        goto WDLjL;
        goto bOCah;
        xhN5X:
        $sh = 3;
        goto aTYao;
        m1NVh:
        WDLjL:
        goto PE60O;
        vgGya:
        $sh = 4;
        goto KRFWs;
        V4Mn0:
        VgmiO:
        goto SLfsk;
        TFrMI:
        if ($tkorder['orderzt'] == '订单结算') {
            goto z0OOi;
        }
        goto v4dQv;
        aTYao:
        goto RRNVn;
        goto DSWo0;
        vsUV7:
        Qxusw:
        goto Pia9C;
        Z8adp:
        if ($time > $mdset['endtime']) {
            goto iZsTn;
        }
        goto mgCb2;
        VWEgE:
        $ups = array("tbsbuid6" => $tbsbuid6);
        goto eqXQg;
        mgCb2:
        if ($mdtime > $time) {
            goto DJjCn;
        }
        goto yjnAw;
        PE60O:
        if (!(empty($mdtype) && empty($sgmdtype))) {
            goto nra_v;
        }
        goto wgUwg;
        SGurM:
        yqbJ1:
        goto Q7g61;
        w3hpr:
        if (!($mdset['mdzgcount'] >= 1)) {
            goto LkYMb;
        }
        goto cdHti;
        SmvMt:
        if (pdo_insert('tiger_newhu_mdorder', $data) === false) {
            goto ke8JH;
        }
        goto i6teT;
        P2OU4:
        die(json_encode(array("error" => 1, "msg" => "系统繁忙、数据有错误！")));
        goto SGurM;
        f5Pfj:
        $mdtype = 8;
        goto GCmgO;
        trWX3:
        die(json_encode(array("error" => 1, "msg" => "请提交免单商品订单号！")));
        goto UQova;
        cs2k5:
        die(json_encode(array("error" => 0, "msg" => "免单已结束！")));
        goto sPfQ4;
        Q7g61:
        goto sJh4S;
        goto VDQii;
        tFnUi:
        UBqjM:
        goto RBTCQ;
        C6dg7:
        $member = pdo_fetch('SELECT * FROM ' . tablename('tiger_newhu_share') . " WHERE weid='{$_W['uniacid']}' and id='{$uid}'");
        goto JFk2E;
        UQova:
        GS0ur:
        goto kS4Qh;
        KbN1_:
        if (empty($myorder)) {
            goto L3UhQ;
        }
        goto VdjR2;
        VdjR2:
        die(json_encode(array("error" => 0, "msg" => "一天只能免单一个商品！")));
        goto nMlvA;
        jHDub:
        $op = $_GPC['op'];
        goto ojC2G;
        n9tek:
        $mdtype = 5;
        goto VOpbM;
        QYOnY:
        ke8JH:
        goto P2OU4;
        Zkmi2:
        if ($tkorder['orderzt'] == '订单付款') {
            goto r2HN6;
        }
        goto TFrMI;
        ze2kP:
        $mdday = $mdset['mdrensum'] * 86400;
        goto XJr_e;
        iYqbn:
        goto RRNVn;
        goto s22hP;
        MscyZ:
        $adzoneid = $pidSplit[3];
        goto UUsmP;
        EyNDy:
        ODJ7x:
        goto JOxZj;
        GCmgO:
        YGwAr:
        goto fNIGG;
        jPVM3:
        goto Gs47_;
        goto zphrB;
        UIHRx:
        die(json_encode(array("error" => 1, "msg" => "您提交的订单暂未更新，请过15分钟后在提交，感谢您的支持！")));
        goto IPMrH;
        VlDqq:
        goto YGwAr;
        goto yU9G4;
        l62bE:
        nra_v:
        goto Bq5Mz;
        jr9eM:
        goto yqbJ1;
        goto QYOnY;
        Pia9C:
        die(json_encode(array("error" => 0, "msg" => "绑定订单成功,请提交免单订单号！")));
        goto ubm0Y;
        f9DdZ:
        PWqme:
        goto w3hpr;
        ZSg_K:
        if (empty($order)) {
            goto Zna0g;
        }
        goto Dc25V;
        UmFaK:
        $ups = array("tbsbuid6" => $tbsbuid6);
        goto Z3SZP;
        CnUQ1:
        if (empty($tkorder)) {
            goto zPa3N;
        }
        goto VnDki;
        Z3SZP:
        $b = pdo_update('tiger_newhu_share', $ups, array("id" => $member['id'], "weid" => $weid));
        goto tFnUi;
        M_qcC:
        Zna0g:
        goto XhJE9;
        mz19p:
        die(json_encode(array("error" => 1, "msg" => '您提交的订单已经存在！' . $member['nickname'])));
        goto sMYyn;
        DSWo0:
        z0OOi:
        goto IoPPK;
        eqXQg:
        $b = pdo_update('tiger_newhu_share', $ups, array("id" => $member['id'], "weid" => $weid));
        goto vsUV7;
        KRFWs:
        die(json_encode(array("error" => 1, "msg" => "您提交的订单已退款！")));
        goto iYqbn;
        I3ZNW:
        $sgmdtype = 6;
        goto EyNDy;
        Uy3Yz:
        die(json_encode(array("error" => 0, "msg" => "会员数据错误、请稍后在试！")));
        goto V4Mn0;
        azp2C:
        $mdday = 1 * 86400;
        goto WNYtm;
        IoPPK:
        $sh = 1;
        goto j_6q1;
        IPMrH:
        sJh4S:
        goto QzPPU;
        VDQii:
        zPa3N:
        goto lG7WA;
        sMYyn:
    }
    public function doMobileMd()
    {
        goto DXNNE;
        tt237:
        if (empty($mdset['mdtype'])) {
            goto MXR_9;
        }
        goto iSjcA;
        ViEbe:
        print_r($list);
        goto ZxOq7;
        pwVeI:
        if (!($mdyaoqing >= $mdset['mdzgcount'])) {
            goto DpfdS;
        }
        goto RwnSX;
        TPWEP:
        hjuQ8:
        goto WGRfa;
        tBt33:
        exit;
        goto OhFkQ;
        dRaL6:
        goto Qk8g5;
        goto zOXXx;
        mNFPR:
        $mderr = 1;
        goto t_dXt;
        CPBQ9:
        MXR_9:
        goto lnLLf;
        o0yQR:
        if (!empty($fans)) {
            goto y2X8a;
        }
        goto WYZdv;
        jy5MS:
        $timetoday = strtotime(date('Y-m-d', time()));
        goto MjF1r;
        hXreQ:
        EkfpP:
        goto lEcWZ;
        x077m:
        if (empty($mdset['mdrensum'])) {
            goto hjuQ8;
        }
        goto lAXw9;
        DnE1H:
        jE4H4:
        goto dRaL6;
        lMnwh:
        w_LFi:
        goto Gqvbt;
        RGayV:
        goto mVZAB;
        goto CPBQ9;
        JmvdL:
        $uid = $_GPC['uid'];
        goto jkwUj;
        WYZdv:
        $loginurl = $_W['siteroot'] . str_replace('./', 'app/', $this->createMobileurl('login')) . '&m=tiger_newhu' . '&tzurl=' . urlencode($tktzurl);
        goto U2ppA;
        lAXw9:
        $mdday = $mdset['mdrensum'] * 86400;
        goto v85C2;
        JQGMh:
        if ($time > $mdset['endtime']) {
            goto hKEfr;
        }
        goto icy_1;
        fksIU:
        if (!(empty($mdtype) && empty($sgmdtype))) {
            goto rFCNv;
        }
        goto mNFPR;
        mOn_H:
        $mdtype = 2;
        goto yo3VH;
        T71_2:
        $time = time();
        goto tt237;
        iQFb3:
        mVZAB:
        goto fksIU;
        lEcWZ:
        include $this->template('md/index');
        goto AdEIe;
        w_ZAH:
        $op = $_GPC['op'];
        goto suYFl;
        U2ppA:
        header('Location: ' . $loginurl);
        goto tBt33;
        XaRtC:
        exit(json_encode(array("pages" => $pager, "data" => $list, "lm" => 1)));
        goto ak0Pb;
        SzCDY:
        Nu6nb:
        goto DCdK9;
        srgMt:
        $mdtype = 8;
        goto IN3_p;
        FGuJd:
        if (!empty($fans['tkuid'])) {
            goto rRicP;
        }
        goto jNNUw;
        v85C2:
        goto w_LFi;
        goto TPWEP;
        kzr1o:
        goto Nu6nb;
        goto DFnhQ;
        icy_1:
        if ($mdtime > $time) {
            goto eLRe8;
        }
        goto fzZUu;
        lnLLf:
        $mdtype = 1;
        goto iQFb3;
        KzScH:
        $fans = $this->islogin();
        goto FGuJd;
        tEyCH:
        rRicP:
        goto UIm93;
        heBlp:
        bBXe5:
        goto TrcPh;
        t_dXt:
        rFCNv:
        goto dPqG_;
        MjF1r:
        $mdyaoqing = pdo_fetchcolumn('select COUNT(*) from ' . tablename('tiger_newhu_tkorder') . " where weid='{$_W['uniacid']}' and tbsbuid6='{$member['tbsbuid6']}' and addtime>'{$timetoday}' and orderzt<>'订单失效' order by id desc");
        goto pwVeI;
        ak0Pb:
        echo '<pre>';
        goto ViEbe;
        DCdK9:
        goto qcjmh;
        goto GOWTh;
        TrcPh:
        glI__:
        goto ha8Pk;
        ha8Pk:
        if (!($mdset['mdzgcount'] >= 1)) {
            goto jE4H4;
        }
        goto jy5MS;
        uLNBH:
        $mdtype = 3;
        goto SzCDY;
        GOWTh:
        tYoN7:
        goto mOn_H;
        iSjcA:
        if ($time < $mdset['starttime']) {
            goto tYoN7;
        }
        goto JQGMh;
        WGRfa:
        $mdday = 1 * 86400;
        goto lMnwh;
        OhFkQ:
        y2X8a:
        goto tEyCH;
        D8_dR:
        if (!($mdyaoqing >= $mdset['mdyaoqingcount'])) {
            goto bBXe5;
        }
        goto qNUYD;
        rr_66:
        $pindex = max(1, intval($_GPC['page']));
        goto mVkwJ;
        q6xPz:
        $mdyaoqing = pdo_fetchcolumn('SELECT COUNT(*) FROM ' . tablename('tiger_newhu_share') . " WHERE weid='{$_W['uniacid']}' and helpid='{$member['id']}' and createtime>'{$timetoday}' order by id desc ");
        goto D8_dR;
        DFnhQ:
        hKEfr:
        goto uLNBH;
        xvvkx:
        $cfg = $this->module['config'];
        goto JmvdL;
        aGTRh:
        $timetoday = strtotime(date('Y-m-d', time()));
        goto q6xPz;
        zOXXx:
        eLRe8:
        goto srgMt;
        IN3_p:
        Qk8g5:
        goto kzr1o;
        mVkwJ:
        $psize = 20;
        goto rUqXs;
        wYIzB:
        zdTHn:
        goto x077m;
        DXNNE:
        global $_W, $_GPC;
        goto w_ZAH;
        RwnSX:
        $sgmdtype = 6;
        goto rx_Yy;
        rx_Yy:
        DpfdS:
        goto DnE1H;
        Gqvbt:
        $mdtime = $member['createtime'] + $mdday;
        goto T71_2;
        I433f:
        $pager = pagination($total, $pindex, $psize);
        goto XaRtC;
        wsNlX:
        $total = pdo_fetchcolumn('SELECT COUNT(*) FROM ' . tablename($this->modulename . '_miandangoods') . " where weid='{$_W['uniacid']}'");
        goto I433f;
        UIm93:
        $member = $this->getmember($fans, $mc['uid']);
        goto wYIzB;
        ZxOq7:
        exit;
        goto hXreQ;
        dPqG_:
        if (!($op == 1)) {
            goto EkfpP;
        }
        goto rr_66;
        fzZUu:
        if (!($mdset['mdyaoqingcount'] >= 1)) {
            goto glI__;
        }
        goto aGTRh;
        rUqXs:
        $list = pdo_fetchall('select * from ' . tablename($this->modulename . '_miandangoods') . " where weid='{$_W['uniacid']}'  order by id desc LIMIT " . ($pindex - 1) * $psize . ",{$psize}");
        goto wsNlX;
        jkwUj:
        if (empty($uid)) {
            goto Uh6OH;
        }
        goto IWRAt;
        qNUYD:
        $mdtype = 5;
        goto heBlp;
        m_wO1:
        goto zdTHn;
        goto TBmSu;
        suYFl:
        $mdset = pdo_fetch('SELECT * FROM ' . tablename('tiger_newhu_miandanset') . " WHERE weid='{$_W['uniacid']}' order by id desc ");
        goto xvvkx;
        TBmSu:
        Uh6OH:
        goto KzScH;
        yo3VH:
        qcjmh:
        goto RGayV;
        IWRAt:
        $member = pdo_fetch('select * from ' . tablename('tiger_newhu_share') . " where weid='{$_W['uniacid']}' and id='{$uid}'");
        goto m_wO1;
        jNNUw:
        $fans = mc_oauth_userinfo();
        goto o0yQR;
        AdEIe:
    }
    public function doMobileMdadd()
    {
        goto iuHY2;
        iuHY2:
        global $_W, $_GPC;
        goto itBOR;
        QCunJ:
        if (empty($uid)) {
            goto HaQmA;
        }
        goto lITks;
        Mcqpn:
        $member = $this->getmember($fans, $mc['uid']);
        goto Au5M0;
        AXLMb:
        exit;
        goto uywiP;
        nFc4o:
        D3yVO:
        goto Mcqpn;
        QAJ8O:
        $fans = mc_oauth_userinfo();
        goto lbQE2;
        G8Gzp:
        header('Location: ' . $loginurl);
        goto AXLMb;
        IbzfT:
        $fans = $this->islogin();
        goto ngVpR;
        lV6Uc:
        HaQmA:
        goto IbzfT;
        ivSJq:
        include $this->template('md/mdadd');
        goto Ls2fs;
        itBOR:
        $mdset = pdo_fetch('SELECT * FROM ' . tablename('tiger_newhu_miandanset') . " WHERE weid='{$_W['uniacid']}' order by id desc ");
        goto tTJm0;
        tTJm0:
        $uid = $_GPC['uid'];
        goto QCunJ;
        lbQE2:
        if (!empty($fans)) {
            goto G7rXi;
        }
        goto V4Yjl;
        lITks:
        $member = pdo_fetch('select * from ' . tablename('tiger_newhu_share') . " where weid='{$_W['uniacid']}' and id='{$uid}'");
        goto nFQ7U;
        V4Yjl:
        $loginurl = $_W['siteroot'] . str_replace('./', 'app/', $this->createMobileurl('login')) . '&m=tiger_newhu' . '&tzurl=' . urlencode($tktzurl);
        goto G8Gzp;
        nFQ7U:
        goto V6UCS;
        goto lV6Uc;
        ngVpR:
        if (!empty($fans['tkuid'])) {
            goto D3yVO;
        }
        goto QAJ8O;
        uywiP:
        G7rXi:
        goto nFc4o;
        Au5M0:
        V6UCS:
        goto ivSJq;
        Ls2fs:
    }
    public function doMobileTaolijin()
    {
        goto tzdvm;
        aww9e:
        $req->setSendEndTime('2019-06-11 00:00:00');
        goto vYvtT;
        qZa2j:
        $resp = $c->execute($req);
        goto JR9hF;
        JPuit:
        $req->setItemId('584558401295');
        goto GYRij;
        LuK57:
        $secret = $cfg['tksecretKey'];
        goto NFd21;
        U6_4i:
        $req->setName('淘礼金来啦');
        goto TnMjz;
        Bz0V3:
        $req->setAdzoneId('110806711');
        goto JPuit;
        rya4I:
        $req->setUseStartTime('2019-06-20');
        goto qZa2j;
        h0ebi:
        $c->secretKey = $secret;
        goto fDsQR;
        beB1r:
        $req->setUseEndTimeMode('1');
        goto rya4I;
        w2Apj:
        echo $resp['result']['msg_info'];
        goto aBrcF;
        fDsQR:
        $req = new TbkDgVegasTljCreateRequest();
        goto Bz0V3;
        bRNX4:
        $req->setSecuritySwitch('false');
        goto B40dI;
        vYvtT:
        $req->setUseEndTime('1');
        goto beB1r;
        NSmLq:
        $appkey = $cfg['tkAppKey'];
        goto LuK57;
        aBrcF:
        echo '<pre>';
        goto CCjRH;
        NFd21:
        $c = new TopClient();
        goto hMp4h;
        m81Yz:
        $req->setSendStartTime('2019-06-20 00:00:00');
        goto aww9e;
        B40dI:
        $req->setPerFace('10');
        goto m81Yz;
        Uzs8U:
        exit;
        goto Fvpux;
        hMp4h:
        $c->appkey = $appkey;
        goto h0ebi;
        GYRij:
        $req->setTotalNum('1');
        goto U6_4i;
        tzdvm:
        $cfg = $this->module['config'];
        goto NSmLq;
        JR9hF:
        $resp = json_decode(json_encode($resp), TRUE);
        goto w2Apj;
        CCjRH:
        print_r($resp);
        goto Uzs8U;
        TnMjz:
        $req->setUserTotalWinNumLimit('1');
        goto bRNX4;
        Fvpux:
    }
    public function doMobileAppwnqtzclass()
    {
        goto FCtQh;
        ERmbD:
        TIT3r:
        goto UT5Jg;
        Qh_Jm:
        $qtz = pdo_fetch('select * from ' . tablename('tiger_newhu_qtzlist') . " where weid='{$_W['uniacid']}' and id='{$id}'");
        goto AjRhE;
        UT5Jg:
        exit(json_encode(array("data" => $catlist, "title" => $qtz['title'], "picurl" => tomedia($qtz['picurl']))));
        goto fzIns;
        p0wE7:
        $id = trim($_GPC['id']);
        goto Qh_Jm;
        dnPt5:
        foreach ($qtzcate as $k => $v) {
            $catlist[$k] = explode('-', $v);
            n5OIg:
        }
        goto ERmbD;
        TlmaW:
        $catlist = array();
        goto dnPt5;
        AjRhE:
        $qtzcate = explode('|', $qtz['cate']);
        goto TlmaW;
        FCtQh:
        global $_W, $_GPC;
        goto p0wE7;
        fzIns:
    }
    public function doMobileAppwnqtzlist()
    {
        goto ZpqZj;
        DnzJD:
        TSyDd:
        goto RQg14;
        wKSQ0:
        $islm = $this->getlmid($MaterialId);
        goto V9FKj;
        iqSqI:
        Z3wsP:
        goto Pg8u1;
        tR3dk:
        $page = $page + 1;
        goto iqRXE;
        qiXS2:
        $goodslist = $this->tblmnewgoods($page, $MaterialId);
        goto K1CmZ;
        jNe6z:
        if (empty($page)) {
            goto yXc9x;
        }
        goto tR3dk;
        NIoKa:
        $MaterialId = 7950;
        goto uMm5n;
        pP0H0:
        goto GO3fs;
        goto iqSqI;
        ck2JA:
        yXc9x:
        goto sFD_l;
        K1CmZ:
        GO3fs:
        goto S_Qb8;
        uMm5n:
        ULd1Z:
        goto qRzFW;
        JRRty:
        $page = 0;
        goto NwUeI;
        sFD_l:
        $page = 1;
        goto DnzJD;
        V9FKj:
        $page = $_GPC['page'];
        goto y4ek5;
        NwUeI:
        pN_Lz:
        goto qiXS2;
        qRzFW:
        if (!empty($page)) {
            goto pN_Lz;
        }
        goto JRRty;
        Pg8u1:
        if (!($MaterialId == 1)) {
            goto ULd1Z;
        }
        goto NIoKa;
        S_Qb8:
        exit(json_encode(array("data" => $goodslist, "lm" => 2)));
        goto A14Lo;
        ZpqZj:
        global $_W, $_GPC;
        goto fQFjP;
        iqRXE:
        goto TSyDd;
        goto ck2JA;
        y4ek5:
        if ($islm == 1) {
            goto Z3wsP;
        }
        goto jNe6z;
        fQFjP:
        $MaterialId = trim($_GPC['MaterialId']);
        goto wKSQ0;
        RQg14:
        $goodslist = $this->tbqtz($page, $MaterialId);
        goto pP0H0;
        A14Lo:
    }
    public function doMobileWnqtzgoods()
    {
        goto AvGNp;
        cJs7A:
        WCH2E:
        goto Bn7U0;
        bi4Nl:
        gflcL:
        goto qiqXm;
        BZhey:
        $MaterialId = 7950;
        goto uA2I6;
        osZaY:
        include $this->template('zt/wnqtzgoods');
        goto tMEP_;
        i_5tH:
        $catlist = array();
        goto ocUXl;
        ICFpy:
        $id = trim($_GPC['id']);
        goto wVCOL;
        yXNm0:
        $MaterialId = $qtz['cateid'];
        goto cJs7A;
        w6ftN:
        if ($islm == 1) {
            goto hXGYS;
        }
        goto ZOvJq;
        WYmgp:
        goto gflcL;
        goto m6MvC;
        ocUXl:
        foreach ($qtzcate as $k => $v) {
            $catlist[$k] = explode('-', $v);
            KRkAI:
        }
        goto DpgFF;
        GRx2_:
        s1VRZ:
        goto YUer0;
        J5qZ2:
        $goodslist = $this->tblmnewgoods($page, $MaterialId);
        goto bi4Nl;
        KeW_a:
        $page = $page + 1;
        goto XoC7d;
        wVCOL:
        $tigerapp = $_GPC['tigerapp'];
        goto zYE0T;
        zYE0T:
        $MaterialId = trim($_GPC['MaterialId']);
        goto ejzxp;
        cDBiL:
        $op = $_GPC['op'];
        goto t9uF_;
        YUer0:
        $goodslist = $this->tbqtz($page, $MaterialId);
        goto WYmgp;
        AvGNp:
        global $_W, $_GPC;
        goto ICFpy;
        ubJaM:
        if (!($MaterialId == 1)) {
            goto ikKyv;
        }
        goto BZhey;
        k3FBS:
        if (!empty($MaterialId)) {
            goto WCH2E;
        }
        goto yXNm0;
        t9uF_:
        if (!($op == 'toajax')) {
            goto CKprp;
        }
        goto VEPEg;
        Bn7U0:
        $qtzcate = explode('|', $qtz['cate']);
        goto i_5tH;
        uA2I6:
        ikKyv:
        goto prkw5;
        NDVor:
        $page = 1;
        goto GRx2_;
        prkw5:
        if (!empty($page)) {
            goto JuHOb;
        }
        goto OLYqJ;
        VEPEg:
        $islm = $this->getlmid($MaterialId);
        goto w6ftN;
        OLYqJ:
        $page = 0;
        goto XhFFi;
        bzgOK:
        $page = $_GPC['page'];
        goto cDBiL;
        ejzxp:
        $qtz = pdo_fetch('select * from ' . tablename('tiger_newhu_qtzlist') . " where weid='{$_W['uniacid']}' and id='{$id}'");
        goto k3FBS;
        XoC7d:
        goto s1VRZ;
        goto HikDe;
        ZOvJq:
        if (empty($page)) {
            goto jkvMf;
        }
        goto KeW_a;
        qiqXm:
        exit(json_encode(array("pages" => "", "data" => $goodslist, "lm" => 2)));
        goto u5DzI;
        u5DzI:
        CKprp:
        goto osZaY;
        DpgFF:
        q3ORL:
        goto bzgOK;
        HikDe:
        jkvMf:
        goto NDVor;
        m6MvC:
        hXGYS:
        goto ubJaM;
        XhFFi:
        JuHOb:
        goto J5qZ2;
        tMEP_:
    }
    function getlmid($lmid)
    {
        goto YO1l1;
        YO1l1:
        $arr = array("21715", "21714", "21713", "21712", "21711", "21710", "21707", "21704", "21705", "21703", "21702", "21706", "21708", "21701", "23593", "23595", "23594", "23590", "23589", "23587", "23945", "23946", "23947", "23959", "23942", "23941", "23920", "23958", "23955", "23956", "23954", "23957", "23922", "22423", "23080", "23165", "23081", "23086", "23087", "23083", "23082", "23085", "23084", "23021", "23019", "23020", "23018", "23111", "23161", "22738", "22737", "22733", "22735", "22659", "22652", "22653", "22654", "22650", "22657", "23114", "22922", "23089", "22914", "22913", "22912", "22911", "22910", "22908", "23134", "22907", "22909", "23204", "23195", "23239", "22677", "19541", "19543", "19540", "19539", "19542", "19579", "19728", "19727", "19719", "19718", "19646", "19705", "19703", "19623", "18493", "19701", "19625", "18845", "18847", "11830", "11842", "7951", "7950", "16697", "16335", "15444", "18935", "18934", "18933", "18931", "18930", "1", "7950", "18620", "18621", "18622", "18623", "18625", "18626", "18627", "18634", "18635", "18636", "18637", "18577", "18578", "18579", "18580", "18581", "18582", "18583", "18584", "18585", "18586", "18587", "18591", "18592", "18593", "18594", "18595", "18596", "18597", "18598", "18599", "18600", "18601", "18628", "18629", "18630", "18631", "18632", "18914", "18906", "18903", "18909", "18910", "18912", "18968", "18969", "18970", "18971", "18976", "18620", "18621", "18622", "18623", "18625", "18626", "18627", "18634", "18635", "18636", "18637", "16217", "15895", "15893", "15896", "15897", "15898", "15899", "15900", "15903", "15902", "15901", "18222", "13671", "13865", "13851", "13852", "13858", "13855", "13854", "13856", "13853", "13857", "13859", "13968", "17122", "14971", "14976", "17359", "11049");
        goto u3gGO;
        L1H2J:
        return 2;
        goto AWK2h;
        P8SQW:
        return 1;
        goto HGM8r;
        HGM8r:
        goto mFX_1;
        goto ByCAp;
        u3gGO:
        if (!in_array($lmid, $arr)) {
            goto eCvLn;
        }
        goto P8SQW;
        AWK2h:
        mFX_1:
        goto nXyxO;
        ByCAp:
        eCvLn:
        goto L1H2J;
        nXyxO:
    }
    public function tbqtz($page, $MaterialId)
    {
        goto Klzmt;
        aIwK1:
        $memberid = $pidSplit[1];
        goto iRczS;
        iRczS:
        if (empty($memberid)) {
            goto OHmGY;
        }
        goto Cc8LW;
        Rv6X4:
        $pidSplit = explode('_', $cfg['ptpid']);
        goto aIwK1;
        K4I_O:
        A0mbT:
        goto QSnGh;
        QSnGh:
        return $list;
        goto I1Pby;
        uzzyj:
        Hdh5W:
        goto I3dRp;
        T4snf:
        foreach ($goods['result_list']['map_data'] as $k => $v) {
            goto DYnUO;
            agaWU:
            goto PnQff;
            goto TD4SC;
            k3oas:
            if (empty($ratea)) {
                goto kj_KE;
            }
            goto J507L;
            s0m1K:
            $list[$k]['itempic'] = 'http:' . $goods['pict_url'];
            goto SUp6_;
            vowUc:
            $list[$k]['itemprice'] = $goods['zk_final_price'];
            goto mgbQ6;
            FW4Vn:
            PnQff:
            goto aJ3sO;
            v6E_1:
            $sj = '0';
            goto FW4Vn;
            L2RKn:
            $list[$k]['commission_rate'] = $goods['commission_rate'];
            goto XaSh0;
            DfHRp:
            $list[$k]['lm'] = 1;
            goto L2RKn;
            wiuHG:
            $list[$k]['itemsale'] = $goods['volume'];
            goto U4M4P;
            jWayk:
            HdQDG:
            goto agaWU;
            qxNCk:
            $list[$k]['sj'] = $sj;
            goto kry78;
            DJYjs:
            $list[$k]['couponmoney'] = $conmany;
            goto wiuHG;
            bqO0x:
            $list[$k]['shoptype'] = $goods['user_type'];
            goto Zubvv;
            fOr3O:
            zVPSp:
            goto IO01T;
            mgbQ6:
            $list[$k]['itemendprice'] = $itemendprice;
            goto DJYjs;
            j0heU:
            J4SoH:
            goto LG28Q;
            Cia27:
            j0oZs:
            goto Ubpcy;
            Jca2m:
            NZdK7:
            goto v0QVK;
            J507L:
            $appset = pdo_fetch('SELECT * FROM ' . tablename('tiger_app_tuanzhangset') . " WHERE weid='{$_W['uniacid']}' order by px desc ");
            goto a2zhO;
            v0QVK:
            $sj = $ratea * $appset['jl'] / 100 + $ratea;
            goto Nt5m2;
            HefvJ:
            $sj = 0;
            goto ZmURh;
            VEUlZ:
            $status = 1;
            goto zATyf;
            GDIZn:
            if (!empty($goods['coupon_amount'])) {
                goto J4SoH;
            }
            goto t8bfu;
            IO01T:
            $itemendprice = $goods['zk_final_price'] - $conmany;
            goto VEUlZ;
            Uvlxg:
            $list[$k]['couponnum'] = $goods['coupon_remain_count'];
            goto BfQru;
            L3ska:
            H_t5c:
            goto k3oas;
            Jpq5e:
            $sj = '升级赚:' . $sj;
            goto jWayk;
            Nt5m2:
            $sj = number_format($sj, 2, '.', '');
            goto Jpq5e;
            a2zhO:
            $appcfg = pdo_fetch('select * from ' . tablename('tiger_newhu_appset') . " where weid='{$_W['uniacid']}'");
            goto k2A4E;
            KcOBG:
            $list[$k]['shopTitle'] = $goods['shop_title'];
            goto s0m1K;
            FL5H5:
            $ratea = $this->sharejl($itemendprice, $goods['commission_rate'], $bl, $share, $cfg);
            goto F7VMF;
            Zubvv:
            $list[$k]['itemid'] = $goods['item_id'];
            goto vowUc;
            t8bfu:
            $conmany = 0;
            goto U2FWP;
            Ubpcy:
            $ratea = $this->ptyjjl($itemendprice, $goods['commission_rate'], $cfg);
            goto L3ska;
            LG28Q:
            $conmany = $goods['coupon_amount'];
            goto fOr3O;
            SUp6_:
            $list[$k]['pid'] = $pid;
            goto DfHRp;
            k2A4E:
            if ($appcfg['sjztype'] == 1) {
                goto NZdK7;
            }
            goto HefvJ;
            U2FWP:
            goto zVPSp;
            goto j0heU;
            zATyf:
            $list[$k]['itemtitle'] = $goods['title'];
            goto bqO0x;
            TD4SC:
            kj_KE:
            goto v6E_1;
            U4M4P:
            $list[$k]['click_url'] = $goods['click_url'];
            goto EBbar;
            F7VMF:
            goto H_t5c;
            goto Cia27;
            EBbar:
            $list[$k]['coupon_click_url'] = $goods['coupon_click_url'];
            goto KcOBG;
            aJ3sO:
            $list[$k]['yj'] = '预估赚:' . $ratea;
            goto qxNCk;
            kry78:
            $list[$k]['rate'] = $ratea;
            goto Uvlxg;
            BfQru:
            Bg_Fp:
            goto TQjsQ;
            DYnUO:
            $goods = $v;
            goto GDIZn;
            XaSh0:
            if ($cfg['lbratetype'] == 3) {
                goto j0oZs;
            }
            goto FL5H5;
            ZmURh:
            goto HdQDG;
            goto Jca2m;
            TQjsQ:
        }
        goto K4I_O;
        I3dRp:
        $goods = qtz($tksign['sign'], $cfg['ptpid'], $MaterialId, $page);
        goto T4snf;
        Sohna:
        $cfg = $this->module['config'];
        goto Rv6X4;
        TxcVS:
        include IA_ROOT . '/addons/tiger_newhu/inc/sdk/tbk/goodsapi.php';
        goto Sohna;
        MB2wW:
        OHmGY:
        goto XORKq;
        JR_i0:
        goto Hdh5W;
        goto MB2wW;
        Klzmt:
        global $_W, $_GPC;
        goto TxcVS;
        XORKq:
        $tksign = pdo_fetch('SELECT * FROM ' . tablename($this->modulename . '_tksign') . " WHERE  tbuid='{$cfg['tbuid']}'");
        goto uzzyj;
        Cc8LW:
        $tksign = pdo_fetch('SELECT * FROM ' . tablename($this->modulename . '_tksign') . " WHERE  memberid='{$memberid}'");
        goto JR_i0;
        I1Pby:
    }
    public function tblmnewgoods($page, $hdid)
    {
        goto bG0SW;
        rJZHz:
        uJ4C8:
        goto oyl9f;
        ffnG4:
        echo '<pre>';
        goto Hvab8;
        cBDk0:
        $list = array();
        goto b7vH9;
        zvX3V:
        $bl = pdo_fetch('select * from ' . tablename('tiger_wxdaili_set') . " where weid='{$_W['uniacid']}'");
        goto MyAkg;
        oyl9f:
        return $list;
        goto ffnG4;
        OQviL:
        $page = 0;
        goto Sev_X;
        Sev_X:
        kO1Q7:
        goto aqmnk;
        DMzdO:
        $cfg = $this->module['config'];
        goto zvX3V;
        aqmnk:
        $data = array("pNum" => $page, "pSize" => 15, "floorId" => $hdid, "refpid" => $cfg['ptpid']);
        goto lgWAh;
        Hvab8:
        print_r($list);
        goto T2mxE;
        bG0SW:
        global $_W, $_GPC;
        goto DMzdO;
        lgWAh:
        $data = $this->tblmres($data);
        goto cBDk0;
        b7vH9:
        foreach ($data['resultList'] as $k => $v) {
            goto Z1iGC;
            YRCvK:
            $list[$k]['lm'] = 1;
            goto uBClC;
            zpKoa:
            $list[$k]['itemid'] = $v['itemId'];
            goto QVPha;
            u_9xR:
            goto yBoSa;
            goto P4lXj;
            WAZVa:
            if ($appcfg['sjztype'] == 1) {
                goto qI6pd;
            }
            goto MnTcw;
            nTZRq:
            goto J16H2;
            goto LZHVE;
            wzGZT:
            $list[$k]['url'] = $v['url'];
            goto gieOU;
            LZHVE:
            qI6pd:
            goto mSP2c;
            s0O9Y:
            $tkrates = $v['tkMktRate'] / 100;
            goto bvA7U;
            k8502:
            $list[$k]['pid'] = $pid;
            goto YRCvK;
            hFpNB:
            J16H2:
            goto co1Ke;
            oUBcC:
            $list[$k]['sj'] = $sj;
            goto gB9LG;
            ewF1i:
            AY1PU:
            goto RYsPu;
            Knai2:
            b5Pnz:
            goto wLQw4;
            HYY1O:
            $list[$k]['itemsale'] = $v['monthSellCount'];
            goto wzGZT;
            P4lXj:
            pPX6O:
            goto smoNJ;
            fnvUq:
            $tkrates = $v['calTkRate'] / 100;
            goto SnQTh;
            GvL83:
            $istm = 1;
            goto Gsjaw;
            Gsjaw:
            Mv0EL:
            goto ewF1i;
            Z1iGC:
            $itemendprice = $v['promotionPrice'] - $v['couponAmount'];
            goto wu210;
            SnQTh:
            FY_Bk:
            goto qw9W_;
            wu210:
            if (empty($v['tkMktRate'])) {
                goto hzLA2;
            }
            goto s0O9Y;
            gMs3G:
            $list[$k]['shoptype'] = $istm;
            goto zpKoa;
            p_OjL:
            NX8ej:
            goto Hy8dB;
            KCY0f:
            $istm = 0;
            goto tpjvU;
            dKPK4:
            UBRv1:
            goto GvL83;
            smoNJ:
            $ratea = $this->ptyjjl($itemendprice, $tkrates, $cfg);
            goto S0iGW;
            ecWbx:
            $istm = $v['userType'];
            goto WJuMr;
            bvA7U:
            goto FY_Bk;
            goto cRt5C;
            MnTcw:
            $sj = 0;
            goto nTZRq;
            wLQw4:
            if ($v['isTmall'] == true) {
                goto UBRv1;
            }
            goto KCY0f;
            SM5dN:
            $list[$k]['itemendprice'] = $itemendprice;
            goto whxlc;
            SV1C_:
            if (empty($ratea)) {
                goto NX8ej;
            }
            goto wysj4;
            mSP2c:
            $sj = $ratea * $appset['jl'] / 100 + $ratea;
            goto hnRit;
            jxF3f:
            $list[$k]['itempic'] = 'http:' . $v['pic'];
            goto k8502;
            Hy8dB:
            $sj = '0';
            goto vBT6A;
            uBClC:
            $list[$k]['couponnum'] = $v['couponsurplus'];
            goto iD7tg;
            QVPha:
            $list[$k]['itemprice'] = $v['promotionPrice'];
            goto SM5dN;
            v1iaa:
            $appcfg = pdo_fetch('select * from ' . tablename('tiger_newhu_appset') . " where weid='{$_W['uniacid']}'");
            goto WAZVa;
            wysj4:
            $appset = pdo_fetch('SELECT * FROM ' . tablename('tiger_app_tuanzhangset') . " WHERE weid='{$_W['uniacid']}' order by px desc ");
            goto v1iaa;
            W5eZu:
            if (empty($v['userType'])) {
                goto b5Pnz;
            }
            goto ecWbx;
            iD7tg:
            oa0IZ:
            goto jPvoL;
            S0iGW:
            yBoSa:
            goto SV1C_;
            Cyj0P:
            $ratea = $this->sharejl($itemendprice, $tkrates, $bl, $share, $cfg);
            goto u_9xR;
            MIr0_:
            $sj = '升级赚:' . $sj;
            goto hFpNB;
            RYsPu:
            $list[$k]['rate'] = $ratea;
            goto Xxj_h;
            hnRit:
            $sj = number_format($sj, 2, '.', '');
            goto MIr0_;
            co1Ke:
            goto SfxCB;
            goto p_OjL;
            gB9LG:
            $list[$k]['itemtitle'] = $v['itemName'];
            goto gMs3G;
            gieOU:
            $list[$k]['shopTitle'] = $v['sellerNickName'];
            goto jxF3f;
            whxlc:
            $list[$k]['couponmoney'] = $v['couponAmount'];
            goto HYY1O;
            WJuMr:
            goto AY1PU;
            goto Knai2;
            qw9W_:
            if ($cfg['lbratetype'] == 3) {
                goto pPX6O;
            }
            goto Cyj0P;
            tpjvU:
            goto Mv0EL;
            goto dKPK4;
            cRt5C:
            hzLA2:
            goto fnvUq;
            vBT6A:
            SfxCB:
            goto W5eZu;
            Xxj_h:
            $list[$k]['yj'] = '预估赚:' . $ratea;
            goto oUBcC;
            jPvoL:
        }
        goto rJZHz;
        MyAkg:
        if (!empty($page)) {
            goto kO1Q7;
        }
        goto OQviL;
        T2mxE:
    }
    public function doMobileCs6()
    {
        goto y8rC0;
        s4TPF:
        $dtkgoodsview = $dtkgodsv['data'];
        goto eQvK8;
        xo5as:
        $dtkapp_key = $cfg['dtkapp_key'];
        goto r22IP;
        hACLy:
        $dtkgods = newgoodsview('575889114043', $dtkapp_key, $dtkapp_secret);
        goto rd8_8;
        ShRZa:
        $mancom = $dtkgoodsview['couponConditions'];
        goto oKz8V;
        kZmnX:
        function newgoodsview($goodsId, $dtkapp_key, $dtkapp_secret)
        {
            goto KtowN;
            KwQW6:
            $output = curl_exec($ch);
            goto WvSXy;
            KtowN:
            $host = 'https://openapi.dataoke.com/api/goods/get-goods-details';
            goto o70xw;
            IvRfz:
            curl_setopt($ch, CURLOPT_URL, $url);
            goto bVnLL;
            o70xw:
            $appKey = $dtkapp_key;
            goto I5_Ck;
            yQgkf:
            $data['sign'] = makeSign($data, $appSecret);
            goto QmPpy;
            I5_Ck:
            $appSecret = $dtkapp_secret;
            goto o1AdG;
            o1AdG:
            $data = ["appKey" => $dtkapp_key, "version" => "v1.1.0", "goodsId" => $goodsId];
            goto yQgkf;
            WvSXy:
            curl_close($ch);
            goto A8hBf;
            gZ2hg:
            curl_setopt($ch, CURLOPT_HEADER, 0);
            goto KwQW6;
            bVnLL:
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
            goto eafS8;
            eafS8:
            curl_setopt($ch, CURLOPT_TIMEOUT, 10);
            goto gZ2hg;
            QmPpy:
            $url = $host . '?' . http_build_query($data);
            goto KYlq5;
            A8hBf:
            return $output;
            goto oNDE1;
            KYlq5:
            $ch = curl_init();
            goto IvRfz;
            oNDE1:
        }
        goto hACLy;
        eQvK8:
        $dtkgoodsview['couponLink'] = $dtkgoodsview['couponLink'] . '&';
        goto WNUIL;
        CpyAD:
        echo '<pre>';
        goto xTdNp;
        rd8_8:
        $dtkgodsv = @json_decode($dtkgods, true);
        goto s4TPF;
        ZeI2C:
        function makeSign($data, $appSecret)
        {
            goto kLomG;
            Ll8Ze:
            $str = trim($str, '&');
            goto sve0k;
            GjqGl:
            UgsxU:
            goto Ll8Ze;
            LvBXM:
            return $sign;
            goto Nc7Mh;
            KprJK:
            foreach ($data as $k => $v) {
                $str .= '&' . $k . '=' . $v;
                t2H7Q:
            }
            goto GjqGl;
            kLomG:
            ksort($data);
            goto Vxupn;
            sve0k:
            $sign = strtoupper(md5($str . '&key=' . $appSecret));
            goto LvBXM;
            Vxupn:
            $str = '';
            goto KprJK;
            Nc7Mh:
        }
        goto kZmnX;
        TgjNP:
        print_r($dtkgoodsview);
        goto VZr1x;
        WNUIL:
        $Quan_id = $this->Text_qzj($dtkgoodsview['couponLink'], 'activityId=', '&');
        goto ShRZa;
        xTdNp:
        echo $Quan_id . '券' . $money . '【满' . $mancom . '元使用】';
        goto TgjNP;
        oKz8V:
        $money = $dtkgoodsview['couponPrice'];
        goto CpyAD;
        r22IP:
        $dtkapp_secret = $cfg['dtkapp_secret'];
        goto ZeI2C;
        y8rC0:
        $cfg = $this->module['config'];
        goto xo5as;
        VZr1x:
    }
    public function tblmres($data)
    {
        goto RJTeg;
        Z8Zvp:
        $singjson = $_m_h5_tk . '&' . $t . '&' . $appkey . '&' . $jsondata;
        goto OPMzP;
        A6Al4:
        $_m_h5_tk = $this->qudaimapianduan($json['cookie'], '_m_h5_tk=', '_');
        goto Z8Zvp;
        OPMzP:
        $sign = md5($singjson);
        goto tLPlA;
        tLPlA:
        $url = 'https://acs.m.taobao.com/h5/mtop.alimama.union.xt.en.api.entry/1.0/?jsv=2.4.16&appKey=' . $appkey . '&t=' . $t . '&sign=' . $sign . '&api=mtop.alimama.union.xt.en.api.entry&v=1.0&AntiCreep=true&type=jsonp&dataType=jsonp&callback=mtopjsonp1&data=' . urlencode($jsondata);
        goto p3CBw;
        oEgFO:
        $jsondata = str_replace('\\/', '/', $jsondata);
        goto Q0o2N;
        E2qr1:
        $json = $this->curl_request($url, '', $cookies, 1);
        goto A6Al4;
        RJTeg:
        $appkey = '12574478';
        goto g2XCG;
        mgz_m:
        return $dataarr['data']['recommend'];
        goto TKR0l;
        p3CBw:
        $json = $this->curl_request($url, '', $json['cookie'], 0);
        goto RpP_V;
        g2XCG:
        $t = '0';
        goto WSGYv;
        iBoUq:
        $jsondata = str_replace(')', '', $jsondata);
        goto gDyi2;
        WSGYv:
        $jsondata = json_encode($data);
        goto oEgFO;
        Q0o2N:
        $url = 'https://acs.m.taobao.com/h5/mtop.alimama.union.xt.en.api.entry/1.0/?jsv=2.4.16&appKey=' . $appkey;
        goto E2qr1;
        gDyi2:
        $dataarr = @json_decode($jsondata, true);
        goto mgz_m;
        RpP_V:
        $jsondata = str_replace('mtopjsonp1(', '', $json);
        goto iBoUq;
        TKR0l:
    }
    public function doMobileCs4()
    {
        goto k88Jl;
        CerzM:
        echo $this->getMillisecond();
        goto q2gUD;
        lLYkq:
        echo '<pre>';
        goto YkFBF;
        YkFBF:
        print_r($data);
        goto SRc3Q;
        Vt2KK:
        echo 11;
        goto CerzM;
        k88Jl:
        $data = array("id" => "19673324092", "type" => "1");
        goto Vt2KK;
        SRc3Q:
        exit;
        goto SzVnX;
        q2gUD:
        $data = $this->tbviewimg($data);
        goto lLYkq;
        SzVnX:
    }
    public function getMillisecond()
    {
        goto vBxR8;
        u5tDL:
        $ran = rand(100, 300);
        goto P_s6r;
        P_s6r:
        $t = $time . $ran;
        goto a9FSy;
        vBxR8:
        $time = time();
        goto u5tDL;
        a9FSy:
        return $t;
        goto x23c5;
        x23c5:
    }
    public function tbviewimg($data)
    {
        goto aXLZU;
        rJWRH:
        $url = 'https://h5api.m.taobao.com/h5/mtop.taobao.detail.getdesc/6.0/?jsv=2.4.0&appKey=' . $appkey;
        goto dtEpX;
        lhVj8:
        return $img;
        goto zLLQr;
        XcuGI:
        foreach ($descarr[1] as $k => $v) {
            goto mtZgw;
            lMCno:
            $xcximg[$k] = $v;
            goto JowYf;
            mtZgw:
            $img .= '<img src=\'' . $v . '\'/>';
            goto lMCno;
            JowYf:
            rp4_1:
            goto vpM_e;
            vpM_e:
        }
        goto bbr3E;
        mUlVX:
        $jsondata = str_replace(')', '', $jsondata);
        goto wuhif;
        dtEpX:
        $json = $this->curl_request($url, '', $cookies, 1);
        goto Nhu6r;
        YAYc_:
        preg_match_all('<img[\\s\\S]*?src="([\\s\\S]*?)"[\\s\\S]*?>', $descstr, $descarr);
        goto XcuGI;
        k1tqP:
        $sign = md5($singjson);
        goto tC18Z;
        Nhu6r:
        $_m_h5_tk = $this->qudaimapianduan($json['cookie'], '_m_h5_tk=', '_');
        goto mT51d;
        wuhif:
        $dataarr = @json_decode($jsondata, true);
        goto CtHbI;
        qLTr2:
        $jsondata = json_encode($data);
        goto yT5Bx;
        bbr3E:
        ENdea:
        goto lhVj8;
        yT5Bx:
        $jsondata = str_replace('\\/', '/', $jsondata);
        goto rJWRH;
        aXLZU:
        $appkey = '12574478';
        goto V30SI;
        CtHbI:
        return $dataarr;
        goto yeMvS;
        yunBy:
        $jsondata = str_replace('mtopjsonp1(', '', $json);
        goto mUlVX;
        ruG0U:
        $json = $this->curl_request($url, '', $json['cookie'], 0);
        goto yunBy;
        tC18Z:
        $url = 'https://h5api.m.taobao.com/h5/mtop.taobao.detail.getdesc/6.0/?jsv=2.4.0&appKey=' . $appkey . '&t=' . $t . '&sign=' . $sign . '&api=mtop.taobao.detail.getdesc&v=6.0&AntiFlool=true&AntiCreep=true&type=jsonp&dataType=jsonp&callback=mtopjsonp1&data=' . urlencode($jsondata);
        goto ruG0U;
        mT51d:
        $singjson = $_m_h5_tk . '&' . $t . '&' . $appkey . '&' . $jsondata;
        goto k1tqP;
        V30SI:
        $t = $this->getMillisecond();
        goto qLTr2;
        yeMvS:
        $descstr = $dataarr['data']['pcDescContent'];
        goto YAYc_;
        zLLQr:
    }
    function qudaimapianduan($ss, $qian, $hou)
    {
        goto eL9rp;
        eL9rp:
        $i = strpos($ss, $qian);
        goto iJewM;
        Lr5j4:
        $output = substr($output, 0, $i);
        goto n0pGp;
        lrLeo:
        $i = strpos($output, $hou);
        goto Lr5j4;
        n0pGp:
        return $output;
        goto fGLFH;
        iJewM:
        $output = substr($ss, $i + strlen($qian), strlen($ss));
        goto lrLeo;
        fGLFH:
    }
    public function jd1fgoufl()
    {
        goto lNOEf;
        H8QKg:
        $hjkarr = @json_decode($hjkview, true);
        goto KD2J5;
        KD2J5:
        return $hjkarr;
        goto NcPI1;
        FP3QS:
        $hjkview = $this->curl_request($hjkurl, $hjkpost);
        goto H8QKg;
        lNOEf:
        $hjkurl = 'https://api.91fyt.com/index.php/api/v1/hd/hdgoodscname';
        goto NmW3T;
        NmW3T:
        $hjkpost = array("hdid" => 3);
        goto FP3QS;
        NcPI1:
    }
    public function jd1fgougoodlist($page, $cid)
    {
        goto sj3AA;
        k5tKh:
        $hjkview = $this->curl_request($hjkurl, $hjkpost);
        goto Kjbvv;
        InszQ:
        return $hjkarr;
        goto upmd_;
        cZcCw:
        $hjkpost = array("hdid" => 3, "pagesize" => 10, "pageindex" => $page, "cid" => $cid);
        goto k5tKh;
        sj3AA:
        $hjkurl = 'https://api.91fyt.com/index.php/api/v1/hd/hdgoodslist';
        goto cZcCw;
        Kjbvv:
        $hjkarr = @json_decode($hjkview, true);
        goto InszQ;
        upmd_:
    }
    public function jd1fgougoodurl($goods_id, $subunionid)
    {
        goto UURs6;
        UURs6:
        $hjkurl = 'https://api.91fyt.com/index.php/api/v1/hd/hdgetunionurlapi';
        goto q5bHM;
        y9bMj:
        return $hjkarr;
        goto OEAIw;
        FmU5R:
        $hjkarr = @json_decode($hjkview, true);
        goto y9bMj;
        fkOnP:
        $hjkview = $this->curl_request($hjkurl, $hjkpost);
        goto FmU5R;
        q5bHM:
        $hjkpost = array("memberid" => 1014414, "hdid" => 3, "goods_id" => $goods_id, "subunionid" => $subunionid);
        goto fkOnP;
        OEAIw:
    }
    public function jd1fgorder($subunionid = "", $page = 1)
    {
        goto TnpTp;
        PX2rc:
        $hjkarr = @json_decode($hjkview, true);
        goto aaIpF;
        aaIpF:
        return $hjkarr;
        goto zSCS7;
        TnpTp:
        $hjkurl = 'https://api.91fyt.com/index.php/api/v1/hd/hdorderlistapi';
        goto zAEZu;
        t9Gd1:
        $hjkview = $this->curl_request($hjkurl, $hjkpost);
        goto PX2rc;
        zAEZu:
        $hjkpost = array("memberid" => 1014414, "hdid" => 3, "pageindex" => $page, "pagesize" => 50, "subunionid" => $subunionid);
        goto t9Gd1;
        zSCS7:
    }
    public function dlzdsh($uid, $share, $guanliopenid = "", $cfg = "")
    {
        goto CEfzs;
        nO7s_:
        Tvwn7:
        goto shW19;
        wWd6L:
        qwcS5:
        goto B2lAb;
        CEfzs:
        global $_W;
        goto TUSd3;
        IzwPN:
        BRVpu:
        goto aGXMN;
        IlwV5:
        YNV19:
        goto sAFY8;
        G8G74:
        if (empty($pddpidres['pid'])) {
            goto Iexc4;
        }
        goto aj317;
        aj317:
        $res = pdo_update('tiger_newhu_share', array("pddpid" => $pddpidres['pid'], "dltype" => 1), array("id" => $uid, "weid" => $_W['uniacid']));
        goto XMn9D;
        pptp7:
        if (empty($guanliopenid)) {
            goto Tvwn7;
        }
        goto nO7s_;
        B2lAb:
        $jdpidres = pdo_fetch('select * from ' . tablename('tiger_wxdaili_jdpid') . " where weid='{$_W['uniacid']}' and type=0 order by id desc ");
        goto AZ481;
        ZS9i4:
        $dlmsg = '<a href=\'' . $tturl . '\'>进入合伙人中心</a>
重点：进入合伙人中心，复制口令，打开淘♂寳APP完成渠道授权，未授权不能跟单结算佣金！';
        goto rUbMn;
        XMn9D:
        if (empty($res)) {
            goto GijFz;
        }
        goto HsLqK;
        AZ481:
        if (!empty($jdpidres)) {
            goto zkD2I;
        }
        goto v_8_b;
        sAFY8:
        zkD2I:
        goto NZjXK;
        s9t4G:
        GijFz:
        goto hfhUq;
        IFvv5:
        $res = pdo_update('tiger_newhu_share', array("tgwid" => 11111), array("id" => $uid, "weid" => $_W['uniacid']));
        goto wWd6L;
        ay0Cl:
        if (empty($res)) {
            goto BRVpu;
        }
        goto Razrq;
        NSNU2:
        $res = pdo_update('tiger_newhu_share', array("jdpid" => $jdpidres['pid'], "dltype" => 1), array("id" => $uid, "weid" => $_W['uniacid']));
        goto ay0Cl;
        aGXMN:
        fg65S:
        goto G8G74;
        Smveo:
        if (empty($jdpidres['pid'])) {
            goto fg65S;
        }
        goto NSNU2;
        Razrq:
        $res = pdo_update('tiger_wxdaili_jdpid', array("type" => 1, "uid" => $share['id'], "nickname" => $share['nickname']), array("id" => $jdpidres['id']));
        goto IzwPN;
        XCxpk:
        if (!empty($pddpidres)) {
            goto TsjcA;
        }
        goto pptp7;
        DXazM:
        $tturl = $cfg['tknewurl'] . 'app/index.php?i=' . $_W['uniacid'] . '&c=entry&do=newmember&m=tiger_wxdaili';
        goto ZS9i4;
        rUbMn:
        $this->postText($share['from_user'], $dlmsg);
        goto RfiDQ;
        hfhUq:
        Iexc4:
        goto DXazM;
        v_8_b:
        if (empty($guanliopenid)) {
            goto YNV19;
        }
        goto IlwV5;
        HsLqK:
        $res = pdo_update('tiger_wxdaili_pddpid', array("type" => 1, "uid" => $share['id'], "nickname" => $share['nickname']), array("id" => $pddpidres['id']));
        goto s9t4G;
        TUSd3:
        if (!empty($share['tgwid'])) {
            goto qwcS5;
        }
        goto IFvv5;
        shW19:
        TsjcA:
        goto Smveo;
        NZjXK:
        $pddpidres = pdo_fetch('select * from ' . tablename('tiger_wxdaili_pddpid') . " where weid='{$_W['uniacid']}' and type=0 order by id desc ");
        goto XCxpk;
        RfiDQ:
    }
    public function doMobileMobanxiaoxi()
    {
        goto Ctij0;
        qCBoA:
        $yhopenid = $_GPC['yhopenid'];
        goto wFFq3;
        wFFq3:
        if (!empty($openid)) {
            goto c34OI;
        }
        goto QqZE6;
        mnqY4:
        c34OI:
        goto JOrSP;
        WBf0B:
        $str = $this->mbmsg($openid, $mb, $mb['mbid'], $url = '', $fans, $orderid, $cfg = '', $valuedata = '');
        goto Myj23;
        zeBN8:
        $fans = pdo_fetch('select * from ' . tablename($this->modulename . '_share') . " where weid='{$_W['uniacid']}' and from_user='{$yhopenid}'");
        goto WBf0B;
        Ctij0:
        global $_W, $_GPC;
        goto eRPqg;
        JXMfn:
        $orderid = $_GPC['orderid'];
        goto TVBoJ;
        eRPqg:
        $openid = $_GPC['openid'];
        goto qCBoA;
        Myj23:
        print_r($str);
        goto u8dNj;
        QqZE6:
        echo 'openid必填';
        goto II6tL;
        TVBoJ:
        $mb = pdo_fetch('select * from ' . tablename($this->modulename . '_mobanmsg') . " where weid='{$_W['uniacid']}' and id='{$id}'");
        goto zeBN8;
        JOrSP:
        $id = $_GPC['id'];
        goto JXMfn;
        II6tL:
        exit;
        goto mnqY4;
        u8dNj:
    }
    public function doMobileKefuxiaoxi()
    {
        goto gXMhl;
        ABhRx:
        if (!empty($openid)) {
            goto uu18Z;
        }
        goto CZ4rP;
        dYwle:
        echo $str;
        goto bcbwu;
        CZ4rP:
        echo 'openid必填';
        goto yzyJm;
        tzdwG:
        $str = $this->postText($openid, $msg);
        goto dYwle;
        NIgb6:
        $msg = $_GPC['msg'];
        goto tzdwG;
        gXMhl:
        global $_W, $_GPC;
        goto jCc1m;
        Frohp:
        uu18Z:
        goto NIgb6;
        jCc1m:
        $openid = $_GPC['openid'];
        goto ABhRx;
        yzyJm:
        exit;
        goto Frohp;
        bcbwu:
    }
    public function jiangli($openid, $order)
    {
        goto Onate;
        Onate:
        global $_W;
        goto n5kNF;
        mQ2uL:
        if (empty($data['price'])) {
            goto IXILa;
        }
        goto mmJsH;
        ZCCa8:
        $data['msg'] = $member['nickname'] . '二级奖励';
        goto Co3sy;
        CO93C:
        Zl4Sn:
        goto UehTN;
        TYUm7:
        $this->mc_jl($hmember['id'], 1, 10, $data['price'], $data['msg'], $order['orderno']);
        goto jJnz6;
        PJhj1:
        aTkax:
        goto NSPii;
        poUbB:
        if (!empty($bl['level1'])) {
            goto hsWc0;
        }
        goto wdH8Z;
        fdpRw:
        if (empty($data['price'])) {
            goto srA37;
        }
        goto z3FRk;
        QYp5U:
        Kf5pM:
        goto sOcI2;
        zMV2T:
        $data['avatar'] = $sjmember['avatar'];
        goto SnOoD;
        dTmZl:
        $data = array("weid" => $_W['uniacid'], "orderno" => $order['orderno'], "goods_id" => $order['goods_id'], "state" => 1, "paystate" => 1, "paytime" => $order['paytime'], "createtime" => time());
        goto LKHjQ;
        jJnz6:
        pdo_insert($this->modulename . '_order', $data);
        goto g6QjL;
        Of2ii:
        l1kP7:
        goto zzaCD;
        ydN7O:
        if (empty($sjmember['from_user'])) {
            goto sOHkJ;
        }
        goto Y6OFj;
        TP6GZ:
        $msg0 = str_replace('#金额#', $order['price'], $msg0);
        goto Kn32X;
        wdH8Z:
        $data['price'] = $bl['glevel3'];
        goto junFw;
        SnOoD:
        $data['openid'] = $sjmember['from_user'];
        goto iYZ87;
        jayu4:
        if (empty($sjmember['helpid'])) {
            goto aTkax;
        }
        goto QunE9;
        QunE9:
        $hmember = pdo_fetch('SELECT * FROM ' . tablename('tiger_newhu_share') . " WHERE id = '{$sjmember['helpid']}' and weid='{$_W['uniacid']}' and dltype=1 order by id desc limit 1");
        goto zVt2y;
        Xca2_:
        IXILa:
        goto a0KRt;
        junFw:
        goto egx0P;
        goto hDGT7;
        w0P8G:
        $data['nickname'] = $hmember['nickname'];
        goto AQIwB;
        z3FRk:
        $msg2 = str_replace('#昵称#', $member['nickname'], $bl['zfmsg2']);
        goto Y2Ube;
        n8lEL:
        goto l1kP7;
        goto TC2v2;
        VF6hE:
        $this->postText($sjmember['from_user'], $msg1);
        goto nZ3FH;
        Zt2lg:
        file_put_contents(IA_ROOT . '/addons/tiger_wxdaili/log.txt', '
' . json_encode($uid . '--3--' . $data['price']), FILE_APPEND);
        goto iXE4Q;
        mLVNF:
        pdo_insert($this->modulename . '_order', $data);
        goto Xca2_;
        gfT_l:
        if (empty($hmember['helpid'])) {
            goto Zbo8v;
        }
        goto pMEAt;
        Y2Ube:
        $msg2 = str_replace('#金额#', $data['price'], $msg2);
        goto ePYWY;
        nCHge:
        if (!empty($bl['level1'])) {
            goto p2F9K;
        }
        goto rejJc;
        n5kNF:
        load()->model('mc');
        goto F1mRh;
        Az9Eo:
        $data['nickname'] = $sjmember['nickname'];
        goto zMV2T;
        JtdTC:
        $data['memberid'] = $smember['id'];
        goto BkCY_;
        nZ3FH:
        $this->mc_jl($sjmember['id'], 1, 10, $data['price'], $data['msg'], $order['orderno']);
        goto tmKbA;
        jvZC6:
        $msg1 = str_replace('#金额#', $data['price'], $msg1);
        goto VF6hE;
        ePYWY:
        $this->postText($hmember['from_user'], $msg2);
        goto TYUm7;
        NSPii:
        cLyvR:
        goto Go5_r;
        pMEAt:
        $smember = pdo_fetch('SELECT * FROM ' . tablename('tiger_newhu_share') . " WHERE id = '{$hmember['helpid']}' and weid='{$_W['uniacid']}' and dltype=1 order by id desc limit 1");
        goto poUbB;
        zVt2y:
        if (!empty($bl['level1'])) {
            goto u40TL;
        }
        goto vcba2;
        iLmSI:
        ECSJ1:
        goto gfT_l;
        F1mRh:
        $cfg = $this->module['config'];
        goto YKcFA;
        Kn32X:
        $this->postText($member['from_user'], $msg0);
        goto XheVV;
        HG0hb:
        $member = pdo_fetch('SELECT * FROM ' . tablename('tiger_newhu_share') . " WHERE id = '{$order['memberid']}' and weid='{$_W['uniacid']}'");
        goto dTmZl;
        Co3sy:
        if (empty($hmember['openid'])) {
            goto ECSJ1;
        }
        goto fdpRw;
        tmKbA:
        pdo_insert($this->modulename . '_order', $data);
        goto QYp5U;
        mmJsH:
        $msg3 = str_replace('#昵称#', $member['nickname'], $bl['zfmsg3']);
        goto PFfys;
        HFfuz:
        $data['cengji'] = 3;
        goto MgT2W;
        TC2v2:
        p2F9K:
        goto aMqos;
        CzgqK:
        $msg1 = str_replace('#昵称#', $member['nickname'], $bl['zfmsg1']);
        goto jvZC6;
        MEWtL:
        $this->mc_jl($smember['id'], 1, 10, $data['price'], $data['msg'], $order['orderno']);
        goto mLVNF;
        aMqos:
        $data['price'] = $order['price'] * $bl['level1'] / 100;
        goto Of2ii;
        hDGT7:
        hsWc0:
        goto ISpUF;
        YKcFA:
        $bl = pdo_fetch('select * from ' . tablename('tiger_wxdaili_set') . " where weid='{$_W['uniacid']}'");
        goto HG0hb;
        a0KRt:
        CUQYV:
        goto Zt2lg;
        nD2o0:
        u40TL:
        goto r1NH_;
        pqsyP:
        $data['cengji'] = 2;
        goto ZCCa8;
        iYZ87:
        $data['cengji'] = 1;
        goto y_9xr;
        BkCY_:
        $data['nickname'] = $smember['nickname'];
        goto e9mfs;
        ISpUF:
        $data['price'] = $order['price'] * $bl['level3'] / 100;
        goto uaksl;
        zzaCD:
        $data['memberid'] = $sjmember['id'];
        goto Az9Eo;
        g6QjL:
        srA37:
        goto iLmSI;
        Y6OFj:
        if (empty($data['price'])) {
            goto Kf5pM;
        }
        goto CzgqK;
        uaksl:
        egx0P:
        goto JtdTC;
        HJUC0:
        $data['openid'] = $smember['from_user'];
        goto HFfuz;
        e9mfs:
        $data['avatar'] = $smember['avatar'];
        goto HJUC0;
        PFfys:
        $msg3 = str_replace('#金额#', $data['price'], $msg3);
        goto lEWK4;
        LKHjQ:
        $msg0 = str_replace('#昵称#', $member['nickname'], $bl['zfmsg0']);
        goto TP6GZ;
        AQIwB:
        $data['avatar'] = $hmember['avatar'];
        goto QaXVw;
        lEWK4:
        $this->postText($smember['from_user'], $msg3);
        goto MEWtL;
        XheVV:
        if (empty($member['helpid'])) {
            goto cLyvR;
        }
        goto ZHv4p;
        vcba2:
        $data['price'] = $bl['glevel2'];
        goto Ff6gW;
        iXE4Q:
        Zbo8v:
        goto PJhj1;
        UehTN:
        $data['memberid'] = $hmember['id'];
        goto w0P8G;
        sOcI2:
        sOHkJ:
        goto jayu4;
        ZHv4p:
        $sjmember = pdo_fetch('SELECT * FROM ' . tablename('tiger_newhu_share') . " WHERE id = '{$member['helpid']}' and weid='{$_W['uniacid']}' and dltype=1");
        goto nCHge;
        QaXVw:
        $data['openid'] = $hmember['from_user'];
        goto pqsyP;
        MgT2W:
        $data['msg'] = $member['nickname'] . '三级奖励';
        goto ny0gi;
        y_9xr:
        $data['msg'] = $member['nickname'] . '一级奖励';
        goto ydN7O;
        rejJc:
        $data['price'] = $bl['glevel1'];
        goto n8lEL;
        r1NH_:
        $data['price'] = $order['price'] * $bl['level2'] / 100;
        goto CO93C;
        ny0gi:
        if (empty($smember['openid'])) {
            goto CUQYV;
        }
        goto mQ2uL;
        Ff6gW:
        goto Zl4Sn;
        goto nD2o0;
        Go5_r:
    }
    public function jdtbtgetorder($appKey, $appSecret, $accesstoken, $unionid, $page, $time)
    {
        goto YXS_B;
        YXS_B:
        $c = new JdClient();
        goto IHY6j;
        IHY6j:
        $c->appKey = $appKey;
        goto kByls;
        cX6HB:
        $req = new UnionServiceQueryOrderListRequest();
        goto T4a18;
        GrWAp:
        $req->setPageIndex($page);
        goto abBIU;
        DbMIX:
        $c->accessToken = $accesstoken;
        goto dGycW;
        ndxNa:
        $arrres = $arr;
        goto Qc17l;
        Qc17l:
        orN0l:
        goto PGQQl;
        rlV3c:
        $arr = @json_decode($arr, true);
        goto K1r0U;
        dGycW:
        $c->serverUrl = 'https://gw.api.360buy.com/routerjson';
        goto cX6HB;
        abBIU:
        $req->setPageSize(400);
        goto nVFku;
        nVFku:
        $resp = $c->execute($req, $c->accessToken);
        goto t0uJu;
        r_H2r:
        $req->setTime($time);
        goto GrWAp;
        t0uJu:
        $resp = $resp->result;
        goto rlV3c;
        PGQQl:
        return $arrres;
        goto O_Q4U;
        T4a18:
        $req->setUnionId($unionid);
        goto r_H2r;
        r2gBW:
        if (!empty($arrres)) {
            goto orN0l;
        }
        goto ndxNa;
        K1r0U:
        $arrres = $arr['data'];
        goto r2gBW;
        kByls:
        $c->appSecret = $appSecret;
        goto DbMIX;
        O_Q4U:
    }
    public function get_server_ip()
    {
        goto b2H45;
        z99EL:
        return $server_ip;
        goto mqOdW;
        taEFr:
        bREHY:
        goto gpLsS;
        hNYv8:
        D0NGl:
        goto CNn7W;
        YLxwC:
        goto Y4pL9;
        goto taEFr;
        b2H45:
        if (isset($_SERVER)) {
            goto D0NGl;
        }
        goto clsdx;
        gpLsS:
        $server_ip = $_SERVER['SERVER_ADDR'];
        goto GOUrB;
        v2lnK:
        rCjFF:
        goto z99EL;
        CNn7W:
        if ($_SERVER['SERVER_ADDR']) {
            goto bREHY;
        }
        goto GtwFZ;
        GOUrB:
        Y4pL9:
        goto v2lnK;
        GtwFZ:
        $server_ip = $_SERVER['LOCAL_ADDR'];
        goto YLxwC;
        TwGkf:
        goto rCjFF;
        goto hNYv8;
        clsdx:
        $server_ip = getenv('SERVER_ADDR');
        goto TwGkf;
        mqOdW:
    }
    public function sms($tel, $accessKeyId, $accessKeySecret, $SignName, $TemplateCode, $code)
    {
        goto vH8Ou;
        iXoXs:
        UTBZQ:
        goto kx2Bt;
        ctzv5:
        $cfg = $this->module['config'];
        goto ViUkF;
        kx2Bt:
        return 'OK';
        goto Dy8Ja;
        WoyV8:
        file_put_contents(IA_ROOT . '/addons/tiger_newhu/sms_log.txt', '
' . json_encode($rurl), FILE_APPEND);
        goto YcNDQ;
        bgD3O:
        $rurl = $this->curl_request($smsurl);
        goto WoyV8;
        ViUkF:
        $smsurl = $_W['siteroot'] . 'addons/tiger_newhu/inc/sms/sms/sendSms.php?tel=' . $tel . '&accessKeyId=' . $accessKeyId . '&accessKeySecret=' . $accessKeySecret . '&SignName=' . $SignName . '&TemplateCode=' . $TemplateCode . '&code=' . $code . '';
        goto bgD3O;
        uvMzW:
        goto gGpZl;
        goto iXoXs;
        YcNDQ:
        if (strpos($rurl, 'OK') !== false) {
            goto UTBZQ;
        }
        goto UDiwU;
        vH8Ou:
        global $_W, $_GPC;
        goto ctzv5;
        UDiwU:
        return '发送失败';
        goto uvMzW;
        Dy8Ja:
        gGpZl:
        goto OK4kq;
        OK4kq:
    }
    public function getzdorder($member, $cfg)
    {
        goto VBLOj;
        rrzaA:
        i4Zb4:
        goto BzAda;
        GgtDQ:
        $bl = pdo_fetch('select * from ' . tablename('tiger_wxdaili_set') . " where weid='{$weid}'");
        goto vqgs5;
        iE1Ht:
        Rc4BO:
        goto IIn1t;
        VBLOj:
        global $_W;
        goto p2VbA;
        OWp_0:
        $mdset = pdo_fetch('SELECT * FROM ' . tablename('tiger_newhu_miandanset') . " WHERE weid='{$weid}' order by id desc ");
        goto Jc0fm;
        A9eme:
        if (!pdo_tableexists('tiger_wxdaili_set')) {
            goto i4Zb4;
        }
        goto GgtDQ;
        U7ksP:
        T33DM:
        goto YgoJq;
        iJeJK:
        $tkorlist = pdo_fetchall('select * from ' . tablename($this->modulename . '_tkorder') . " where weid='{$_W['uniacid']}' and tbsbuid6='{$tbsbuid6}' and addtime>'{$ztime}' and orderzt<>'订单失效' and zdgd<>1 order by id desc");
        goto OWp_0;
        vqgs5:
        if (!($bl['dlfxtype'] == 1)) {
            goto YYQ2G;
        }
        goto CvPgG;
        O8Nag:
        $ztime = mktime(0, 0, 0, date('m'), date('d') - date('w') + 1 - 20, date('Y'));
        goto iJeJK;
        p2VbA:
        if (!($cfg['zdgdtype'] != 1)) {
            goto Kl8Bq;
        }
        goto ik6em;
        tOZXp:
        O40fH:
        goto SC9Rk;
        QlUCW:
        return '';
        goto iE1Ht;
        CvPgG:
        if (!($member['dltype'] == 1)) {
            goto Rc4BO;
        }
        goto QlUCW;
        SC9Rk:
        $tbsbuid6 = $member['tbsbuid6'];
        goto O8Nag;
        ik6em:
        return '';
        goto pjc32;
        BzAda:
        if (!empty($member['tbsbuid6'])) {
            goto O40fH;
        }
        goto IjAoI;
        IIn1t:
        YYQ2G:
        goto rrzaA;
        pjc32:
        Kl8Bq:
        goto A9eme;
        Jc0fm:
        $pidSplit = explode('_', $mdset['miandanpid']);
        goto UMIr5;
        UMIr5:
        foreach ($tkorlist as $k => $tkorder) {
            goto GyJZP;
            haK9G:
            $dltgw = pdo_fetch('select * from ' . tablename('tiger_newhu_share') . " where weid='{$_W['uniacid']}' and tgwid='{$tkorder['tgwid']}'");
            goto EYIkq;
            oNQKh:
            goto DHlNx;
            goto jh54a;
            A6q9g:
            if ($cfg['fxtype'] == 1) {
                goto WS6CI;
            }
            goto r_9gV;
            BbEBw:
            goto zqaqo;
            goto syV6t;
            Y8aDR:
            $jl = $tkorder['xgyg'] * $cfg['ejf'] / 100;
            goto ay1LH;
            D_JlJ:
            JYrZA:
            goto pw0A7;
            hNZ9S:
            pdo_update($this->modulename . '_tkorder', array("zdgd" => 1), array("weid" => $_W['uniacid'], "orderid" => $orderid));
            goto WbnTQ;
            V0PtM:
            mktHr:
            goto drHFj;
            ukp8l:
            if (empty($cfg['ejf'])) {
                goto QULRN;
            }
            goto CeA5U;
            iXFQp:
            if ($cfg['gdfxtype'] == 1) {
                goto LwL27;
            }
            goto E9vuo;
            aBwxJ:
            goto iELRn;
            goto EUHQx;
            Bmm1O:
            TbTAw:
            goto Uy8me;
            w3Tyj:
            wfO26:
            goto Oy2Hh;
            JyRGg:
            $ejtxmsg = str_replace('#昵称#', $member['nickname'], $cfg['ejtxmsg']);
            goto eo8Uc;
            EBX77:
            goto qvaUB;
            goto tuTeI;
            x3W5c:
            $jl = $cfg['zgf'];
            goto ygeMw;
            KfUo3:
            if ($cfg['fxtype'] == 1) {
                goto Mb01n;
            }
            goto kiRrL;
            oxHEz:
            goto zqaqo;
            goto fPDr_;
            b9b3p:
            if (empty($yjmember['helpid'])) {
                goto zgrUc;
            }
            goto ukp8l;
            PkzYU:
            Mb01n:
            goto JaDJ5;
            fmd1q:
            goto IHRKP;
            goto BHP7H;
            Bu3Sr:
            $sh = 3;
            goto KfUo3;
            kiRrL:
            if ($cfg['fxtype'] == 2) {
                goto sK1tX;
            }
            goto LnKBW;
            C6I3h:
            $orderid = $tkorder['orderid'];
            goto H9UqH;
            tQPZZ:
            if (!($cfg['dlddfx'] == 1)) {
                goto djjV1;
            }
            goto IrBrX;
            rw_fV:
            $jl = $cfg['zgf'];
            goto R24sq;
            pdEYH:
            $jl = $tkorder['xgyg'] * $cfg['zgf'] / 100;
            goto fkmJt;
            EDob5:
            $jl = $cfg['yjf'];
            goto RSAFv;
            rEdXZ:
            if (!($tkorder['tgwid'] == $adzoneid)) {
                goto rtXhu;
            }
            goto AZAOt;
            Oy2Hh:
            if ($cfg['gdfxtype'] == 1) {
                goto JYrZA;
            }
            goto CVQ8L;
            w47nv:
            sK1tX:
            goto UETam;
            YYT6D:
            nbzf7:
            goto cG59m;
            EYIkq:
            DWe2T:
            goto rYUmw;
            aHET4:
            $this->postText($yjmember['from_user'], $yjtxmsg);
            goto GlDOJ;
            CeA5U:
            if ($cfg['fxtype'] == 1) {
                goto wfO26;
            }
            goto XZsGo;
            I8FIU:
            if ($cfg['gdfxtype'] == 1) {
                goto Q4Q_p;
            }
            goto MRyhy;
            pw0A7:
            $jl = $cfg['ejf'];
            goto LOU2c;
            eo8Uc:
            $ejtxmsg = str_replace('#订单号#', $orderid, $ejtxmsg);
            goto PKJm4;
            IrBrX:
            if (empty($tkorder['relation_id'])) {
                goto luKut;
            }
            goto T0bOi;
            Rp6YT:
            UvvUK:
            goto gLViJ;
            wMHOf:
            bq_7K:
            goto C6I3h;
            Zbgnd:
            $data3 = array("weid" => $_W['uniacid'], "openid" => $rjmember['from_user'], "memberid" => $rjmember['openid'], "uid" => $rjmember['id'], "nickname" => $rjmember['nickname'], "jl" => $jl, "jltype" => $jltype, "avatar" => $rjmember['avatar'], "jlnickname" => $member['nickname'], "jlavatar" => $member['avatar'], "orderid" => $orderid, "yongjin" => $tkorder['xgyg'], "itemid" => $tkorder['numid'], "type" => 2, "sh" => $sh, "createtime" => TIMESTAMP);
            goto btDCw;
            t5lYH:
            $jl = $cfg['yjf'];
            goto Jq9eD;
            I8pdE:
            vi77g:
            goto Esitk;
            XAq5J:
            $this->postText($rjmember['from_user'], $ejtxmsg);
            goto Zbgnd;
            WbnTQ:
            EXFsg:
            goto fNHkt;
            UETam:
            $jltype = 1;
            goto kWlyl;
            N7Q9n:
            if (!empty($order)) {
                goto vi77g;
            }
            goto sy8Yd;
            xieYW:
            if (!empty($order)) {
                goto mktHr;
            }
            goto z_yY7;
            fNHkt:
            if (empty($member['helpid'])) {
                goto TbTAw;
            }
            goto xCaOc;
            S37Dn:
            $order = pdo_fetchall('select * from ' . tablename($this->modulename . '_order') . " where weid='{$_W['uniacid']}' and type=1 and orderid={$orderid} and itemid='{$tkorder['numid']}'");
            goto xieYW;
            LOU2c:
            ocAli:
            goto c4NpF;
            FhN7l:
            goto SJk4u;
            goto C1zu5;
            LnKBW:
            goto j1udJ;
            goto PkzYU;
            eTgsr:
            zqaqo:
            goto PtT99;
            hPHHk:
            $yjtxmsg = str_replace('#金额#', $jl, $yjtxmsg);
            goto aHET4;
            k9X2j:
            djjV1:
            goto uzLh3;
            Uy8me:
            EtTlL:
            goto MoGXZ;
            SIqKs:
            goto bq_7K;
            goto Rxc7S;
            YQRrt:
            LwL27:
            goto t5lYH;
            eWY0x:
            if (!empty($order['id'])) {
                goto EtTlL;
            }
            goto aqArb;
            bRm_4:
            yTQfu:
            goto AtrgN;
            C1zu5:
            Q4Q_p:
            goto EDob5;
            gLViJ:
            if ($cfg['gdfxtype'] == 1) {
                goto dHlGX;
            }
            goto W4qhY;
            z_yY7:
            pdo_insert($this->modulename . '_order', $data2);
            goto V0PtM;
            SMC2k:
            rtXhu:
            goto tQPZZ;
            BHP7H:
            MZSXO:
            goto uoyw3;
            XZsGo:
            if ($cfg['fxtype'] == 2) {
                goto nbzf7;
            }
            goto PkX06;
            A94ZN:
            if ($cfg['gdfxtype'] == 1) {
                goto WBL6D;
            }
            goto pdEYH;
            xcSub:
            zgrUc:
            goto Bmm1O;
            PtT99:
            $yjmember = pdo_fetch('select * from ' . tablename($this->modulename . '_share') . " where weid='{$_W['uniacid']}' and id='{$member['helpid']}' order by id desc");
            goto SNX8q;
            w9hp9:
            goto DWe2T;
            goto T_hnr;
            PKJm4:
            $ejtxmsg = str_replace('#金额#', $jl, $ejtxmsg);
            goto XAq5J;
            kWlyl:
            j1udJ:
            goto S9Nyk;
            H9UqH:
            $data = array("weid" => $_W['uniacid'], "openid" => $member['from_user'], "memberid" => $member['openid'], "uid" => $member['id'], "nickname" => $member['nickname'], "avatar" => $member['avatar'], "orderid" => $orderid, "itemid" => $tkorder['numid'], "jl" => $jl, "jltype" => $jltype, "sh" => $sh, "yongjin" => $tkorder['xgyg'], "type" => 0, "createtime" => TIMESTAMP);
            goto LB62k;
            Esitk:
            QULRN:
            goto xcSub;
            uzLh3:
            $order = pdo_fetch('select * from ' . tablename($this->modulename . '_order') . " where weid='{$_W['uniacid']}' and orderid='{$tkorder['orderid']}' and itemid='{$tkorder['numid']}'");
            goto eWY0x;
            PkX06:
            goto yTQfu;
            goto w3Tyj;
            ygeMw:
            iELRn:
            goto SIqKs;
            uoyw3:
            $jltype = 0;
            goto Tqd_7;
            MRyhy:
            $jl = intval($tkorder['xgyg'] * $cfg['yjf'] / 100 * $cfg['jfbl']);
            goto FhN7l;
            T0bOi:
            $dltgw = pdo_fetch('select * from ' . tablename('tiger_newhu_share') . " where weid='{$_W['uniacid']}' and qdid='{$tkorder['relation_id']}'");
            goto w9hp9;
            tuTeI:
            WBL6D:
            goto rw_fV;
            IBxpj:
            if ($cfg['fxtype'] == 2) {
                goto eJf4k;
            }
            goto W42tF;
            CVQ8L:
            $jl = intval($tkorder['xgyg'] * $cfg['ejf'] / 100 * $cfg['jfbl']);
            goto uhk1S;
            U1a67:
            $jl = number_format($jl, 2, '.', '');
            goto EP50Y;
            LB62k:
            $resorder = pdo_insert($this->modulename . '_order', $data);
            goto Dsu57;
            EUHQx:
            dHlGX:
            goto x3W5c;
            T_hnr:
            luKut:
            goto haK9G;
            E9vuo:
            $jl = $tkorder['xgyg'] * $cfg['yjf'] / 100;
            goto U1a67;
            MoGXZ:
            LLEMy:
            goto Z3HMc;
            xCaOc:
            if (empty($cfg['yjf'])) {
                goto SDeMI;
            }
            goto A6q9g;
            GyJZP:
            $adzoneid = $pidSplit[3];
            goto rEdXZ;
            DWx0P:
            QjEvh:
            goto k0Cw1;
            SNX8q:
            $yjtxmsg = str_replace('#昵称#', $member['nickname'], $cfg['yjtxmsg']);
            goto sxgm9;
            R24sq:
            qvaUB:
            goto wMHOf;
            sy8Yd:
            pdo_insert($this->modulename . '_order', $data3);
            goto I8pdE;
            MioBZ:
            DHlNx:
            goto bRm_4;
            KdQlp:
            IHRKP:
            goto Bu3Sr;
            W4qhY:
            $jl = intval($tkorder['xgyg'] * $cfg['zgf'] / 100 * $cfg['jfbl']);
            goto aBwxJ;
            jh54a:
            smeJU:
            goto h3dri;
            syV6t:
            WS6CI:
            goto I8FIU;
            GlDOJ:
            $data2 = array("weid" => $_W['uniacid'], "openid" => $yjmember['from_user'], "memberid" => $yjmember['openid'], "uid" => $yjmember['id'], "nickname" => $yjmember['nickname'], "jl" => $jl, "jltype" => $jltype, "avatar" => $yjmember['avatar'], "jlnickname" => $member['nickname'], "jlavatar" => $member['avatar'], "orderid" => $orderid, "yongjin" => $tkorder['xgyg'], "itemid" => $tkorder['numid'], "type" => 1, "sh" => $sh, "createtime" => TIMESTAMP);
            goto S37Dn;
            fPDr_:
            gx5hk:
            goto iXFQp;
            Dsu57:
            if (!($resorder != false)) {
                goto EXFsg;
            }
            goto hNZ9S;
            AtrgN:
            $rjmember = pdo_fetch('select * from ' . tablename($this->modulename . '_share') . " where weid='{$_W['uniacid']}' and id='{$yjmember['helpid']}' order by id desc");
            goto JyRGg;
            aqArb:
            if ($cfg['fxtype'] == 1) {
                goto MZSXO;
            }
            goto IjHHw;
            uhk1S:
            goto ocAli;
            goto D_JlJ;
            JaDJ5:
            $jltype = 0;
            goto SnTnf;
            Rxc7S:
            eJf4k:
            goto A94ZN;
            AZAOt:
            goto LLEMy;
            goto SMC2k;
            c4NpF:
            goto yTQfu;
            goto YYT6D;
            IjHHw:
            if ($cfg['fxtype'] == 2) {
                goto QjEvh;
            }
            goto fmd1q;
            SnTnf:
            goto j1udJ;
            goto w47nv;
            S9Nyk:
            if ($cfg['fxtype'] == 1) {
                goto UvvUK;
            }
            goto IBxpj;
            h3dri:
            $jl = $cfg['ejf'];
            goto MioBZ;
            EP50Y:
            goto KWYOy;
            goto YQRrt;
            Tqd_7:
            goto IHRKP;
            goto DWx0P;
            Jq9eD:
            KWYOy:
            goto eTgsr;
            r_9gV:
            if ($cfg['fxtype'] == 2) {
                goto gx5hk;
            }
            goto BbEBw;
            btDCw:
            $order = pdo_fetchall('select * from ' . tablename($this->modulename . '_order') . " where weid='{$_W['uniacid']}' and type=2 and orderid={$orderid}  and itemid='{$tkorder['numid']}'");
            goto N7Q9n;
            drHFj:
            SDeMI:
            goto b9b3p;
            I4Omc:
            goto LLEMy;
            goto sY8Y6;
            ay1LH:
            $jl = number_format($jl, 2, '.', '');
            goto oNQKh;
            RSAFv:
            SJk4u:
            goto oxHEz;
            sY8Y6:
            qOaq7:
            goto k9X2j;
            k0Cw1:
            $jltype = 1;
            goto KdQlp;
            W42tF:
            goto bq_7K;
            goto Rp6YT;
            fkmJt:
            $jl = number_format($jl, 2, '.', '');
            goto EBX77;
            cG59m:
            if ($cfg['gdfxtype'] == 1) {
                goto smeJU;
            }
            goto Y8aDR;
            rYUmw:
            if (empty($dltgw)) {
                goto qOaq7;
            }
            goto I4Omc;
            sxgm9:
            $yjtxmsg = str_replace('#订单号#', $orderid, $yjtxmsg);
            goto hPHHk;
            Z3HMc:
        }
        goto U7ksP;
        IjAoI:
        return '';
        goto tOZXp;
        YgoJq:
    }
    public function getmember($fans = "", $wqid = "", $helpid = "", $lytype = 0)
    {
        goto rt2uC;
        SdjkJ:
        return $share;
        goto Q7coH;
        Pbq1r:
        $share['id'] = pdo_insertid();
        goto ve_jX;
        fsYmw:
        goto WSNkN;
        goto kk1X1;
        dgmEP:
        if (!empty($fans['unionid'])) {
            goto iPXxZ;
        }
        goto qOo0l;
        MOfO1:
        goto PCsHP;
        goto DjQNt;
        AHXiG:
        pdo_insert('tiger_newhu_share', array("openid" => $wqid, "nickname" => $fans['nickname'], "avatar" => $fans['avatar'], "unionid" => $fans['unionid'], "pid" => "", "updatetime" => time(), "createtime" => time(), "parentid" => 0, "weid" => $_W['uniacid'], "helpid" => $helpid, "score" => "", "cscore" => "", "pscore" => "", "from_user" => $fans['openid'], "lytype" => $lytype, "follow" => 1));
        goto Pbq1r;
        DjQNt:
        hNIID:
        goto XDioo;
        cm30E:
        if (!empty($share['id'])) {
            goto cCydU;
        }
        goto AHXiG;
        nmcJo:
        return $share;
        goto LaLqb;
        qOo0l:
        $share = pdo_fetch('select * from ' . tablename('tiger_newhu_share') . " where weid='{$_W['uniacid']}' and from_user='{$fans['openid']}'");
        goto fzRRq;
        xUGam:
        goto J1Wr1;
        goto IqF8T;
        kk1X1:
        iPXxZ:
        goto KXoUJ;
        Q7coH:
        HoBWn:
        goto xUGam;
        XDj8u:
        $updata = array("unionid" => $fans['unionid'], "openid" => $wqid, "nickname" => $fans['nickname'], "avatar" => $fans['avatar']);
        goto A62cS;
        IqF8T:
        sAjyX:
        goto dYzmZ;
        dYzmZ:
        $updata = array("from_user" => $fans['openid'], "openid" => $wqid, "nickname" => $fans['nickname'], "avatar" => $fans['avatar']);
        goto vMtiF;
        uxQg9:
        return '';
        goto oqRyy;
        Ghfn8:
        J1Wr1:
        goto P2Rac;
        CrE7f:
        pdo_update('tiger_newhu_share', $updata, array("weid" => $_W['uniacid'], "from_user" => $fans['openid']));
        goto EMsDH;
        sPaIb:
        $share = pdo_fetch('select * from ' . tablename('tiger_newhu_share') . " where weid='{$_W['uniacid']}' and from_user='{$fans['openid']}'");
        goto uX0n9;
        kXNyt:
        if (!empty($fans['openid'])) {
            goto C3AeE;
        }
        goto uxQg9;
        kYzq3:
        pdo_insert('tiger_newhu_share', array("openid" => $wqid, "nickname" => $fans['nickname'], "avatar" => $fans['avatar'], "unionid" => $fans['unionid'], "pid" => "", "updatetime" => time(), "createtime" => time(), "parentid" => 0, "weid" => $_W['uniacid'], "helpid" => $helpid, "score" => "", "cscore" => "", "pscore" => "", "from_user" => $fans['openid'], "lytype" => $lytype, "follow" => 1));
        goto W8mHO;
        DdnJf:
        $cfg = $this->module['config'];
        goto gIu6E;
        EMsDH:
        $share = pdo_fetch('select * from ' . tablename('tiger_newhu_share') . " where weid='{$_W['uniacid']}' and from_user='{$fans['openid']}'");
        goto SdjkJ;
        WpGwh:
        R_oA0:
        goto MOfO1;
        rPsu8:
        return $share;
        goto RYfpS;
        oSWuX:
        jAFv6:
        goto nmcJo;
        q6J_2:
        C3AeE:
        goto kYzq3;
        W8mHO:
        $share['id'] = pdo_insertid();
        goto sPaIb;
        ZMtBN:
        if (!empty($share['id'])) {
            goto sAjyX;
        }
        goto kjARl;
        P2Rac:
        WSNkN:
        goto KatbQ;
        fzRRq:
        if (!empty($share['id'])) {
            goto hNIID;
        }
        goto kXNyt;
        KXoUJ:
        $share = pdo_fetch('select * from ' . tablename('tiger_newhu_share') . " where weid='{$_W['uniacid']}' and unionid='{$fans['unionid']}'");
        goto ZMtBN;
        oqRyy:
        goto R_oA0;
        goto q6J_2;
        IQSqH:
        HSvqj:
        goto XDj8u;
        lGXj6:
        cCydU:
        goto LPQhh;
        Xx254:
        RLCRf:
        goto dgmEP;
        UhEeX:
        return $share;
        goto Ghfn8;
        LaLqb:
        goto HoBWn;
        goto lGXj6;
        YI81l:
        if (!empty($fans['openid'])) {
            goto RLCRf;
        }
        goto iRgkQ;
        uX0n9:
        return $share;
        goto WpGwh;
        nZzNP:
        $share = pdo_fetch('select * from ' . tablename('tiger_newhu_share') . " where weid='{$_W['uniacid']}' and from_user='{$fans['openid']}'");
        goto rPsu8;
        RYfpS:
        emyhP:
        goto YQ_uf;
        wqbGl:
        goto emyhP;
        goto IQSqH;
        kjARl:
        $share = pdo_fetch('select * from ' . tablename('tiger_newhu_share') . " where weid='{$_W['uniacid']}' and from_user='{$fans['openid']}'");
        goto cm30E;
        eWNWf:
        $this->dlzdsh($share['id'], $share, '', $cfg);
        goto oSWuX;
        ve_jX:
        $share = pdo_fetch('select * from ' . tablename('tiger_newhu_share') . " where weid='{$_W['uniacid']}' and id='{$share['id']}'");
        goto DdnJf;
        vMtiF:
        pdo_update('tiger_newhu_share', $updata, array("weid" => $_W['uniacid'], "unionid" => $fans['unionid']));
        goto aeBkF;
        fOrv0:
        return $share;
        goto wqbGl;
        iRgkQ:
        return '';
        goto Xx254;
        LPQhh:
        $updata = array("unionid" => $fans['unionid'], "openid" => $wqid, "nickname" => $fans['nickname'], "avatar" => $fans['avatar']);
        goto CrE7f;
        YQ_uf:
        PCsHP:
        goto fsYmw;
        XDioo:
        if (!empty($fans['unionid'])) {
            goto HSvqj;
        }
        goto fOrv0;
        gIu6E:
        if (!($cfg['dlgzsdtype'] == 1)) {
            goto jAFv6;
        }
        goto eWNWf;
        A62cS:
        pdo_update('tiger_newhu_share', $updata, array("weid" => $_W['uniacid'], "from_user" => $fans['openid']));
        goto nZzNP;
        rt2uC:
        global $_W;
        goto YI81l;
        aeBkF:
        $share = pdo_fetch('select * from ' . tablename('tiger_newhu_share') . " where weid='{$_W['uniacid']}' and unionid='{$fans['unionid']}'");
        goto UhEeX;
        KatbQ:
    }
    public function bryj($share, $begin_time, $end_time, $zt, $bl, $cfg)
    {
        goto Fti3c;
        dPw69:
        $byygsum = '0.00';
        goto RhdE5;
        o4Liq:
        yLUjE:
        goto NDDIr;
        zYHvw:
        if ($send_time == $end_time) {
            goto uU18H;
        }
        goto fSMVO;
        b2lQG:
        if ($zt == 3) {
            goto fb0tk;
        }
        goto k5h4v;
        egr3P:
        if (empty($byygsum)) {
            goto j8vN8;
        }
        goto ExpU2;
        VLNnp:
        $byygsum = pdo_fetchcolumn('SELECT sum(xgyg) FROM ' . tablename('tiger_newhu_tkorder') . " where weid='{$_W['uniacid']}'  {$ddzt} {$dwhere} {$where}");
        goto O7UD7;
        GicZY:
        qdifE:
        goto VLNnp;
        QxgUs:
        $where = '';
        goto DErwI;
        lpyPH:
        foreach ($tgwarr as $k => $v) {
            $where .= ' tgwid=' . $v . ' or ';
            RJlC8:
        }
        goto kwlYW;
        HX7LT:
        iJ9R4:
        goto yV_2P;
        pAhjG:
        if ($cfg['jsms'] == 1) {
            goto DRhn7;
        }
        goto FkVrB;
        tf0CY:
        $byygsum = $byygsum * $bl['dlbl1'] / 100;
        goto wgs4S;
        qQLYO:
        uU18H:
        goto raF6m;
        tKmAk:
        goto cDKv2;
        goto Qfh4R;
        OtToS:
        if ($zt == 1) {
            goto GheCX;
        }
        goto ueuVN;
        oKogl:
        if (!empty($sj2)) {
            goto fev6W;
        }
        goto Bn2ze;
        raF6m:
        $addtime = 'jstime';
        goto O295Q;
        ujURY:
        if (!($bl['dltype'] == 3)) {
            goto iJ9R4;
        }
        goto oKogl;
        fSMVO:
        $addtime = 'addtime';
        goto iQtPa;
        xyzsF:
        w0Cb9:
        goto FZ068;
        T_cdX:
        if (empty($share['dlbl'])) {
            goto H32AF;
        }
        goto ff3ii;
        RhdE5:
        ob276:
        goto FIOOc;
        v8Ph0:
        LROvY:
        goto egr3P;
        Bn2ze:
        $dj = 1;
        goto tKmAk;
        FkVrB:
        $addtime = 'addtime';
        goto DRQ72;
        O295Q:
        fp4Fo:
        goto OERQ7;
        NItVA:
        QUehc:
        goto Ib9az;
        grVGi:
        if (empty($sj)) {
            goto wyTOm;
        }
        goto U5hCB;
        tXEkg:
        kZsqN:
        goto mD8k0;
        Gn5fR:
        C7Fbe:
        goto OtToS;
        yV_2P:
        wyTOm:
        goto X68f4;
        iNNGZ:
        return $byygsum;
        goto eOtRd;
        qQ2iR:
        if ($dj == 2) {
            goto q02Dq;
        }
        goto tf0CY;
        kwlYW:
        dYaRI:
        goto wqJLP;
        NDDIr:
        $yj2 = $byygsum * $bl['dlbl2'] / 100;
        goto Oc8C3;
        M9p9p:
        $yj3 = $byygsum * $bl['dlbl3'] / 100;
        goto aOvVH;
        W9dFV:
        $dj = 1;
        goto yCww1;
        wKSGR:
        G9sDd:
        goto ACeag;
        apr4t:
        $ddzt = ' and orderzt=\'订单付款\'';
        goto mzDH3;
        aTN58:
        H32AF:
        goto TuxzF;
        wqJLP:
        $where .= 'tgwid=' . $tgwarr[0] . ')';
        goto GicZY;
        Ubd_F:
        goto C7Fbe;
        goto wKSGR;
        gxCuM:
        j8vN8:
        goto dPw69;
        i1SOI:
        q02Dq:
        goto M9p9p;
        ACeag:
        if (empty($begin_time)) {
            goto DOMcD;
        }
        goto bfayM;
        ff3ii:
        $bl['dlbl1'] = $share['dlbl'];
        goto aTN58;
        z9ec5:
        $dj = 2;
        goto LWwtV;
        DErwI:
        if (!empty($share['tgwid'])) {
            goto QUehc;
        }
        goto lOUTf;
        ZQvPC:
        einc_:
        goto apr4t;
        mD8k0:
        goto T1ieU;
        goto varfl;
        Y72q9:
        rvgmV:
        goto ntwdb;
        yCww1:
        RStlE:
        goto W9ecD;
        O7UD7:
        if (empty($bl['dlkcbl'])) {
            goto LROvY;
        }
        goto iZj0Z;
        Qfh4R:
        fev6W:
        goto z9ec5;
        OERQ7:
        if (!($zt == 2)) {
            goto L_5vx;
        }
        goto izE9m;
        T55wz:
        goto kZsqN;
        goto i1SOI;
        varfl:
        tiz3E:
        goto cXamw;
        N2sYr:
        DRhn7:
        goto zYHvw;
        ZhtME:
        $byygsum = $yj3 - $yj2 - $yj1;
        goto tXEkg;
        MhMBF:
        bP2FN:
        goto Ubd_F;
        FIOOc:
        if ($bl['fxtype'] == 1) {
            goto tiz3E;
        }
        goto sOItl;
        aOvVH:
        $yj2 = $yj3 * $bl['dlbl2t3'] / 100;
        goto hp2Vu;
        Oc8C3:
        $yj1 = $yj2 * $bl['dlbl1t2'] / 100;
        goto E2Kgb;
        d6cZ9:
        DOMcD:
        goto Gn5fR;
        k5h4v:
        goto w0Cb9;
        goto YCk2j;
        FZ068:
        $tgwarr = explode('|', $share['tgwid']);
        goto QxgUs;
        XR2OS:
        $dwhere = "and {$addtime}>={$begin_time} and {$addtime}<{$end_time}";
        goto MhMBF;
        iZj0Z:
        $byygsum = $byygsum * (100 - $bl['dlkcbl']) / 100;
        goto v8Ph0;
        Ni6Ln:
        $ddzt = ' and orderzt=\'订单结算\'';
        goto Y2LfS;
        Y2LfS:
        goto w0Cb9;
        goto ZQvPC;
        SmstU:
        fb0tk:
        goto DMJYe;
        YhqU8:
        if (empty($begin_time)) {
            goto bP2FN;
        }
        goto XR2OS;
        X68f4:
        goto ob276;
        goto gxCuM;
        iQtPa:
        goto fp4Fo;
        goto qQLYO;
        sOItl:
        if ($dj == 1) {
            goto yLUjE;
        }
        goto qQ2iR;
        U5hCB:
        if (!($bl['dltype'] == 2)) {
            goto RStlE;
        }
        goto W9dFV;
        BniKw:
        L_5vx:
        goto Y72q9;
        cXamw:
        $byygsum = $byygsum * $bl['dlbl1'] / 100;
        goto l4Q7u;
        YCk2j:
        GheCX:
        goto Ni6Ln;
        Fti3c:
        global $_W;
        goto T_cdX;
        ExpU2:
        $sj = pdo_fetch('select * from ' . tablename('tiger_newhu_share') . " where weid='{$_W['uniacid']}' and id='{$share['helpid']}'");
        goto grVGi;
        l4Q7u:
        T1ieU:
        goto iNNGZ;
        ntwdb:
        if (empty($end_time)) {
            goto G9sDd;
        }
        goto YhqU8;
        ra2RE:
        goto qdifE;
        goto NItVA;
        hp2Vu:
        $yj1 = $yj3 * $bl['dlbl1t3'] / 100;
        goto ZhtME;
        izE9m:
        $addtime = 'addtime';
        goto BniKw;
        W9ecD:
        $sj2 = pdo_fetch('select * from ' . tablename('tiger_newhu_share') . " where weid='{$_W['uniacid']}' and id='{$sj['helpid']}'");
        goto ujURY;
        DMJYe:
        $ddzt = ' and orderzt<>\'订单失效\'';
        goto xyzsF;
        DRQ72:
        goto rvgmV;
        goto N2sYr;
        lOUTf:
        $where .= ' and tgwid=111111';
        goto ra2RE;
        TuxzF:
        $send_time = strtotime(date('Y-m-d 23:59:59', strtotime(-date('d') . 'day')));
        goto pAhjG;
        E2Kgb:
        $byygsum = $yj2 - $yj1;
        goto T55wz;
        Ib9az:
        $where .= 'and (';
        goto lpyPH;
        wgs4S:
        goto kZsqN;
        goto o4Liq;
        bfayM:
        $dwhere = "and addtime>={$begin_time}";
        goto d6cZ9;
        mzDH3:
        goto w0Cb9;
        goto SmstU;
        LWwtV:
        cDKv2:
        goto HX7LT;
        ueuVN:
        if ($zt == 2) {
            goto einc_;
        }
        goto b2lQG;
        eOtRd:
    }
    public function jcbl($share, $bl)
    {
        goto VN2_n;
        YG36R:
        ELnqB:
        goto qIMfr;
        WNkmF:
        goto C3c1r;
        goto dfO52;
        qIMfr:
        $sj2 = pdo_fetch('select * from ' . tablename('tiger_newhu_share') . " where weid='{$_W['uniacid']}' and id='{$sj['helpid']}'");
        goto LDxHL;
        dYC11:
        $cj = 2;
        goto Jswpg;
        dfO52:
        NMX6A:
        goto jQobq;
        uWKxk:
        $tname = $bl['dlname1'];
        goto cVJTY;
        rCDKI:
        $arr = array("bl" => $djbl, "tname" => $tname, "cj" => $cj);
        goto exAWu;
        CA1Hi:
        $cj = 1;
        goto CtisL;
        HvF_r:
        $tname = $bl['dlname1'];
        goto ljNf3;
        TrVMo:
        kWbSB:
        goto BxyLX;
        FtHWR:
        goto izozp;
        goto YG36R;
        CtisL:
        goto kWbSB;
        goto kshy0;
        cve9h:
        $djbl = $bl['dlbl1'];
        goto HvF_r;
        ny9Gg:
        dB4EL:
        goto rCDKI;
        CqRGM:
        $cj = 3;
        goto e_NSB;
        Jswpg:
        hZG0F:
        goto TrVMo;
        uB1mU:
        $djbl = $bl['dlbl1'];
        goto UBdLk;
        VN2_n:
        global $_W;
        goto vH91k;
        aN6Ky:
        $cj = 2;
        goto WNkmF;
        Mar2D:
        izozp:
        goto mkybJ;
        vH91k:
        $sj = pdo_fetch('select * from ' . tablename('tiger_newhu_share') . " where weid='{$_W['uniacid']}' and id='{$share['helpid']}'");
        goto MwObu;
        k09yc:
        $djbl = $bl['dlbl2'];
        goto wdebf;
        a_9qA:
        if (!empty($sj)) {
            goto ELnqB;
        }
        goto cve9h;
        F0dZ1:
        NZqnR:
        goto IgOm2;
        LDxHL:
        if (!empty($sj2)) {
            goto NMX6A;
        }
        goto WeVnh;
        cUoA0:
        $tname = $bl['dlname3'];
        goto CqRGM;
        WeVnh:
        $djbl = $bl['dlbl2'];
        goto CHo8R;
        CHo8R:
        $tname = $bl['dlname2'];
        goto aN6Ky;
        MwObu:
        if ($bl['dltype'] == 3) {
            goto ZIDYT;
        }
        goto W_3dA;
        UBdLk:
        $tname = $bl['dlname1'];
        goto CA1Hi;
        exAWu:
        return $arr;
        goto tIpjb;
        nEigC:
        $tname = $bl['dlname1'];
        goto ny9Gg;
        ljNf3:
        $cj = 1;
        goto FtHWR;
        DIjHD:
        $djbl = $bl['dlbl1'];
        goto uWKxk;
        mkybJ:
        goto kWbSB;
        goto F0dZ1;
        wdebf:
        $tname = $bl['dlname2'];
        goto dYC11;
        kshy0:
        ZIDYT:
        goto a_9qA;
        e_NSB:
        C3c1r:
        goto Mar2D;
        CPY_2:
        goto hZG0F;
        goto ex9EA;
        W_3dA:
        if ($bl['dltype'] == 2) {
            goto NZqnR;
        }
        goto uB1mU;
        cVJTY:
        $cj = 1;
        goto CPY_2;
        ex9EA:
        EMi3R:
        goto k09yc;
        IgOm2:
        if (!empty($sj)) {
            goto EMi3R;
        }
        goto DIjHD;
        jQobq:
        $djbl = $bl['dlbl3'];
        goto cUoA0;
        BxyLX:
        if (empty($share['dlbl'])) {
            goto dB4EL;
        }
        goto skuRG;
        skuRG:
        $djbl = $share['dlbl'];
        goto nEigC;
        tIpjb:
    }
    public function bydlyj($share, $begin_time, $end_time = "", $zt, $bl, $cfg)
    {
        goto nQyXx;
        tt3E_:
        $array = array("yj2" => $rjrs * $bl['dlbl2'] / 100, "yj3" => $sjrs * $bl['dlbl3'] / 100);
        goto R1Tjt;
        SvmOP:
        $sjrs = pdo_fetchcolumn('SELECT sum(t.xgyg) FROM ' . tablename('tiger_newhu_share') . ' s left join ' . tablename('tiger_newhu_tkorder') . " t ON s.tgwid=t.tgwid where s.weid='{$_W['uniacid']}'   and s.dltype=1  {$ddzt} and s.helpid in (" . implode(',', array_keys($fans1)) . ") {$where}");
        goto ifVNg;
        ifVNg:
        aJEFA:
        goto n0oQL;
        oRG84:
        $ddzt = ' and orderzt<>\'订单失效\'';
        goto jALkA;
        m4jSq:
        $sjrs = '0.00';
        goto PlK6Q;
        IGXci:
        mNlEg:
        goto dj607;
        gOe93:
        $rjrs = $rjrs * (100 - $bl['dlkcbl']) / 100;
        goto ljsGm;
        jNmDc:
        if (empty($fans1)) {
            goto aJEFA;
        }
        goto SvmOP;
        ta734:
        $ddzt = ' and orderzt=\'订单付款\'';
        goto ignDP;
        jnsxB:
        a3Gh9:
        goto ArkNy;
        Mp9OJ:
        noghh:
        goto pcEUX;
        uzY1j:
        $rjshare = pdo_fetchall('SELECT id,helpid,tgwid FROM ' . tablename('tiger_newhu_share') . " where weid='{$_W['uniacid']}' and helpid='{$share['id']}' and dltype=1");
        goto vfeDH;
        ZvXL6:
        $ddzt = ' and orderzt=\'订单结算\'';
        goto tFFXt;
        h1pC8:
        if ($zt == 1) {
            goto wShKh;
        }
        goto vhCAT;
        LP8yC:
        if (empty($begin_time)) {
            goto N1Ta7;
        }
        goto ngX91;
        VC0_K:
        $rjrs = '0.00';
        goto aSdoR;
        ignDP:
        goto hDVmE;
        goto Z0UWZ;
        TJ_6F:
        goto U2ZtR;
        goto dnFgH;
        n0oQL:
        if (empty($bl['dlkcbl'])) {
            goto ZUrAy;
        }
        goto iP7tT;
        tFFXt:
        goto hDVmE;
        goto ddb_m;
        XEiwG:
        LQV58:
        goto Y6iSr;
        Y6iSr:
        kNXI3:
        goto h1pC8;
        gpx3d:
        $addtime = 'addtime';
        goto tztff;
        k0W89:
        ZUrAy:
        goto Bi7E2;
        zBrXt:
        $where = "and addtime>={$begin_time}";
        goto XEiwG;
        ghi_2:
        K7Ek7:
        goto WQ_sJ;
        nQyXx:
        global $_W;
        goto xn07z;
        zlR0h:
        $sjrs = '0.00';
        goto p5QTg;
        Z0UWZ:
        rQRsL:
        goto oRG84;
        wOIK4:
        foreach ($rjshare as $k => $v) {
            goto AmOZL;
            Kxhfx:
            $r = $r + $a;
            goto txpbw;
            AmOZL:
            $a = pdo_fetchcolumn('SELECT sum(xgyg) FROM ' . tablename('tiger_newhu_tkorder') . "  where weid='{$_W['uniacid']}' and tgwid='{$v['tgwid']}' {$ddzt} {$where}");
            goto Kxhfx;
            txpbw:
            R3U32:
            goto fhuzY;
            fhuzY:
        }
        goto jnsxB;
        PlK6Q:
        YtTZU:
        goto Mp9OJ;
        SqX0o:
        yNFk0:
        goto tt3E_;
        IKoIl:
        if (empty($end_time)) {
            goto ZWz3I;
        }
        goto LP8yC;
        vhCAT:
        if ($zt == 2) {
            goto q8UJq;
        }
        goto w3yrL;
        Ezg0K:
        $bbegin_time = strtotime(date('Y-m-d H:i:s', mktime(0, 0, 0, date('m'), 1, date('Y'))));
        goto uzY1j;
        wIVFy:
        wShKh:
        goto ZvXL6;
        GtKhm:
        $addtime = 'jstime';
        goto irV5M;
        lKFMX:
        if (empty($bl['dlkcbl'])) {
            goto Z3rVK;
        }
        goto gOe93;
        iP7tT:
        $sjrs = $sjrs * (100 - $bl['dlkcbl']) / 100;
        goto k0W89;
        ZuaI6:
        $fans1 = pdo_fetchall('select id from ' . tablename('tiger_newhu_share') . " where weid='{$_W['uniacid']}' and dltype=1 and helpid='{$share['id']}'", array(), 'id');
        goto jNmDc;
        O7zsZ:
        if (!($zt == 2)) {
            goto z4_AO;
        }
        goto gpx3d;
        vfeDH:
        $r = '';
        goto wOIK4;
        dj607:
        if ($send_time == $end_time) {
            goto MKHN_;
        }
        goto SM4UH;
        w3yrL:
        if ($zt == 3) {
            goto rQRsL;
        }
        goto rKJBn;
        R1Tjt:
        return $array;
        goto DZay7;
        ceUFh:
        if ($bl['dltype'] == 3) {
            goto hrx3g;
        }
        goto zlR0h;
        M6bpS:
        $rjrs = '0.00';
        goto X2OSy;
        irV5M:
        U2ZtR:
        goto O7zsZ;
        FGSgs:
        goto kNXI3;
        goto AqRxu;
        WQ_sJ:
        $send_time = strtotime(date('Y-m-d 23:59:59', strtotime(-date('d') . 'day')));
        goto i8kg2;
        jALkA:
        hDVmE:
        goto Ezg0K;
        ddb_m:
        q8UJq:
        goto ta734;
        xn07z:
        if (empty($share['dlbl'])) {
            goto K7Ek7;
        }
        goto t8h4Q;
        tztff:
        z4_AO:
        goto SbRb3;
        t8h4Q:
        $bl['dlbl1'] = $share['dlbl'];
        goto ghi_2;
        AqRxu:
        ZWz3I:
        goto MdfKx;
        Bi7E2:
        if (!empty($sjrs)) {
            goto YtTZU;
        }
        goto m4jSq;
        mPDAd:
        $addtime = 'addtime';
        goto uDQ8Y;
        ljsGm:
        Z3rVK:
        goto x1xUk;
        ngX91:
        $where = "and {$addtime}>={$begin_time} and {$addtime}<{$end_time}";
        goto MNnEy;
        x1xUk:
        if (!empty($rjrs)) {
            goto sc6uY;
        }
        goto VC0_K;
        aSdoR:
        sc6uY:
        goto ceUFh;
        p5QTg:
        goto noghh;
        goto lf_71;
        i8kg2:
        if ($cfg['jsms'] == 1) {
            goto mNlEg;
        }
        goto mPDAd;
        SM4UH:
        $addtime = 'addtime';
        goto TJ_6F;
        SbRb3:
        k3txl:
        goto IKoIl;
        pcEUX:
        if (!($bl['dltype'] == 1)) {
            goto yNFk0;
        }
        goto M6bpS;
        ArkNy:
        $rjrs = $r;
        goto lKFMX;
        dnFgH:
        MKHN_:
        goto GtKhm;
        uDQ8Y:
        goto k3txl;
        goto IGXci;
        lf_71:
        hrx3g:
        goto ZuaI6;
        MNnEy:
        N1Ta7:
        goto FGSgs;
        MdfKx:
        if (empty($begin_time)) {
            goto LQV58;
        }
        goto zBrXt;
        X2OSy:
        $sjrs = '0.00';
        goto SqX0o;
        rKJBn:
        goto hDVmE;
        goto wIVFy;
        DZay7:
    }
    public function dljiangli($endprice, $tkrate, $bl, $share)
    {
        goto Q7KJY;
        VPLBi:
        $sjshare = pdo_fetch('select * from ' . tablename('tiger_newhu_share') . " where weid='{$share['weid']}'and dltype=1 and id='{$share['helpid']}'");
        goto Z3CBA;
        Rw4WJ:
        if (empty($share['helpid'])) {
            goto kt71H;
        }
        goto VPLBi;
        kELyG:
        goto DDQOi;
        goto uIdRd;
        gBlDM:
        auqr9:
        goto SvZe7;
        jnBxc:
        $jryj = $yj * $bl['dlbl1t2'] / 100;
        goto WHCmb;
        wlt73:
        kt71H:
        goto IUjWi;
        aWDgM:
        $dlbl = $fs['bl'];
        goto tC1Tv;
        VteNn:
        goto zYWBm;
        goto AEndR;
        Xn4rT:
        file_put_contents(IA_ROOT . '/addons/tiger_tkxcx/yj_log.txt', '
' . 'uid:' . $share['id'] . '------' . $yj . '-' . $jryj . '-' . $jrsjyj . '=' . $jrzyj, FILE_APPEND);
        goto WNQVj;
        Hymp4:
        if (empty($share['helpid'])) {
            goto ujWgT;
        }
        goto jnBxc;
        ydDk3:
        MboXQ:
        goto dKiV0;
        gU33Q:
        $dlyj = $dlyj * (100 - $bl['dlkcbl']) / 100;
        goto L4BDT;
        wWyUS:
        ujWgT:
        goto XuomP;
        TczUe:
        QlVRe:
        goto TaN15;
        MaXiR:
        if ($bl['fxtype'] == 1) {
            goto QlVRe;
        }
        goto SL5dx;
        SvZe7:
        goto DDQOi;
        goto E186z;
        tC1Tv:
        goto MTr9i;
        goto ydDk3;
        KSYHg:
        $jrsjyj = 0;
        goto S7hy4;
        BNils:
        if (empty($sjshare['helpid'])) {
            goto z67xH;
        }
        goto hqWde;
        IUjWi:
        $jryj = 0;
        goto LxGya;
        S7hy4:
        zYWBm:
        goto FHxGz;
        chLRr:
        if (empty($bl['dlkcbl'])) {
            goto Wz_L1;
        }
        goto gU33Q;
        uIdRd:
        pzfIG:
        goto Hymp4;
        LxGya:
        zRKUy:
        goto auqdG;
        RDSel:
        $jrzyj = $yj - $jryj - $jrsjyj;
        goto Xn4rT;
        AEndR:
        z67xH:
        goto KSYHg;
        Xaxch:
        if (empty($share['dlbl'])) {
            goto MboXQ;
        }
        goto aWDgM;
        XFPGm:
        HKfZ5:
        goto FvQOg;
        Z3CBA:
        $jryj = $yj * $bl['dlbl2t3'] / 100;
        goto BNils;
        XuomP:
        $jryj = 0;
        goto gBlDM;
        dKiV0:
        $dlbl = $bl['dlbl1'];
        goto QlOtI;
        lKt8Y:
        goto HKfZ5;
        goto TczUe;
        MU_Ag:
        if ($bl['dltype'] == 2) {
            goto pzfIG;
        }
        goto yM2JH;
        uXJm1:
        $dlyj = $endprice * $tkrate / 100;
        goto chLRr;
        SL5dx:
        $yj = number_format($dlyj * $dlbl / 100, 2);
        goto MU_Ag;
        E186z:
        jhNLA:
        goto Rw4WJ;
        yM2JH:
        if ($bl['dltype'] == 3) {
            goto jhNLA;
        }
        goto kELyG;
        L4BDT:
        Wz_L1:
        goto OJowB;
        hqWde:
        $jrsjyj = $yj * $bl['dlbl1t3'] / 100;
        goto VteNn;
        FvQOg:
        return $dlrate;
        goto bYudN;
        auqdG:
        DDQOi:
        goto RDSel;
        OJowB:
        $fs = $this->jcbl($share, $bl);
        goto Xaxch;
        TaN15:
        $dlrate = number_format($dlyj * $dlbl / 100, 2);
        goto XFPGm;
        WHCmb:
        goto auqr9;
        goto wWyUS;
        FHxGz:
        goto zRKUy;
        goto wlt73;
        WNQVj:
        $dlrate = number_format($jrzyj, 2);
        goto lKt8Y;
        Q7KJY:
        global $_W;
        goto uXJm1;
        QlOtI:
        MTr9i:
        goto MaXiR;
        bYudN:
    }
    public function ptyjjl($endprice, $tkrate, $cfg)
    {
        goto lr_9b;
        K9KCD:
        $yj1 = intval($yj1);
        goto lPOgs;
        rlMkn:
        $yj1 = $yongj * $cfg['jfbl'];
        goto K9KCD;
        UKUV3:
        if (!empty($yongj)) {
            goto ux3UO;
        }
        goto xLN29;
        lPOgs:
        goto Nfle8;
        goto OFTnz;
        KTd4E:
        return $yj1;
        goto hJ6jj;
        Hkxzh:
        $yongj = $yj * $cfg['zgf'] / 100;
        goto UKUV3;
        zSuoU:
        Xviql:
        goto rlMkn;
        ZZZrh:
        Nfle8:
        goto KTd4E;
        w0iF1:
        if ($cfg['fxtype'] == 2) {
            goto oJf1w;
        }
        goto CErzQ;
        xLN29:
        $yongj = '0.00';
        goto w3NSA;
        CErzQ:
        goto Nfle8;
        goto zSuoU;
        vjWwC:
        $yj = $endprice * $tkrate / 100;
        goto Hkxzh;
        w3NSA:
        ux3UO:
        goto szkk4;
        lr_9b:
        global $_W;
        goto vjWwC;
        szkk4:
        if ($cfg['fxtype'] == 1) {
            goto Xviql;
        }
        goto w0iF1;
        OFTnz:
        oJf1w:
        goto VIrwW;
        VIrwW:
        $yj1 = number_format($yongj, 2);
        goto ZZZrh;
        hJ6jj:
    }
    public function sharejl($endprice, $tkrate, $bl, $share, $cfg)
    {
        goto vae_J;
        fX88H:
        $yj = $this->ptyjjl($endprice, $tkrate, $cfg);
        goto HTyk6;
        uVYr_:
        $yj = $this->dljiangli($endprice, $tkrate, $bl, $share);
        goto choac;
        JKK99:
        DEShL:
        goto uVYr_;
        vae_J:
        if ($share['dltype'] == 1) {
            goto DEShL;
        }
        goto fX88H;
        choac:
        WyKFe:
        goto AG5UT;
        HTyk6:
        goto WyKFe;
        goto JKK99;
        AG5UT:
        return $yj;
        goto OVtD6;
        OVtD6:
    }
    public function tkljx($msg)
    {
        goto UXAPf;
        c1N2M:
        uyggi:
        goto fZQbT;
        UXAPf:
        global $_W, $_GPC;
        goto RpAtO;
        x0ATO:
        $jsonStr = json_encode($resp);
        goto VEBOS;
        qhEra:
        if ($cfg['jqtkAppKey']) {
            goto x3QR2;
        }
        goto PoRML;
        otRxg:
        $secret = $cfg['tksecretKey'];
        goto a7FtG;
        PoRML:
        $appkey = $cfg['tkAppKey'];
        goto otRxg;
        AK2Ma:
        return $jsonArray;
        goto a0Dy5;
        bCXQC:
        $c->secretKey = $secret;
        goto IDGWb;
        BKx6O:
        $c->appkey = $appkey;
        goto bCXQC;
        IDGWb:
        $req = new WirelessShareTpwdQueryRequest();
        goto F_COn;
        VEBOS:
        $jsonArray = json_decode($jsonStr, true);
        goto AK2Ma;
        S2O2T:
        $secret = $cfg['jqtksecretKey'];
        goto c1N2M;
        E4Vwj:
        x3QR2:
        goto VPgyV;
        k0oJ1:
        $resp = $c->execute($req);
        goto x0ATO;
        a7FtG:
        goto uyggi;
        goto E4Vwj;
        VPgyV:
        $appkey = $cfg['jqtkAppKey'];
        goto S2O2T;
        fZQbT:
        $c = new TopClient();
        goto BKx6O;
        F_COn:
        $req->setPasswordContent($msg);
        goto k0oJ1;
        RpAtO:
        $cfg = $this->module['config'];
        goto qhEra;
        a0Dy5:
    }
    public function mc_jl($uid, $type, $typelx, $num, $remark, $orderid)
    {
        goto JFUMn;
        EIixZ:
        goto fBaMJ;
        goto u4kSk;
        FUyk4:
        $data = array("uid" => $uid, "weid" => $_W['uniacid'], "type" => $type, "typelx" => $typelx, "num" => $num, "remark" => $remark, "orderid" => $orderid, "createtime" => time());
        goto nm1BP;
        uag0z:
        $credit1 = $share['credit1'] + $num;
        goto sKX2n;
        nm1BP:
        $share = pdo_fetch('SELECT credit1,credit2 FROM ' . tablename($this->modulename . '_share') . " WHERE id='{$uid}' and weid='{$_W['uniacid']}' ");
        goto IAhiG;
        EdxQu:
        goto MYgXO;
        goto QoNxP;
        asr2L:
        if (!empty($uid)) {
            goto zSzlS;
        }
        goto u2d3z;
        CStz9:
        MYgXO:
        goto iI_Py;
        gjzgp:
        E2DwH:
        goto EIixZ;
        guwKP:
        if ($inst === false) {
            goto HRAOE;
        }
        goto TYhXQ;
        B4xQP:
        A4Ks6:
        goto teI5e;
        Jt8NX:
        $inst = pdo_insert($this->modulename . '_jl', $data);
        goto guwKP;
        senlV:
        if (!($credit2 < 0)) {
            goto GMLf5;
        }
        goto t7KBI;
        tZZUN:
        zSzlS:
        goto FUyk4;
        u2d3z:
        return;
        goto tZZUN;
        IAhiG:
        if ($type == 1) {
            goto IVhMc;
        }
        goto r3xsV;
        IBHPC:
        return array("error" => 0, "data" => "积分不足");
        goto OWBHE;
        lFRRq:
        if ($inst === false) {
            goto KXV0d;
        }
        goto BlOrM;
        ZSzZG:
        if ($res === false) {
            goto mFeMJ;
        }
        goto aMnkI;
        Kr0eW:
        GMLf5:
        goto VVxNk;
        m5TGl:
        return array("error" => 0, "data" => "余额更新失败");
        goto gjzgp;
        YnrIo:
        u5aQ8:
        goto kh8QV;
        JFUMn:
        global $_W;
        goto asr2L;
        VVxNk:
        $res = pdo_update($this->modulename . '_share', array("credit2" => $credit2), array("id" => $uid));
        goto ZSzZG;
        cdvbF:
        IVhMc:
        goto xW3k3;
        OWBHE:
        fhhGl:
        goto YuGg_;
        QoNxP:
        PODnJ:
        goto uag0z;
        BlOrM:
        return array("error" => 1, "data" => "余额更新成功");
        goto RYGiY;
        YuGg_:
        $res = pdo_update($this->modulename . '_share', array("credit1" => $credit1), array("id" => $uid));
        goto LuCe1;
        TYhXQ:
        return array("error" => 1, "data" => "积分更新成功");
        goto twzds;
        pXLcW:
        goto MYgXO;
        goto cdvbF;
        aMnkI:
        $inst = pdo_insert($this->modulename . '_jl', $data);
        goto lFRRq;
        twzds:
        goto A4Ks6;
        goto OPaEx;
        C0VXd:
        return array("error" => 0, "data" => "余额更新失败");
        goto bC4ht;
        OPaEx:
        HRAOE:
        goto hTWKT;
        hTWKT:
        return array("error" => 0, "data" => "积分更新失败");
        goto B4xQP;
        u4kSk:
        mFeMJ:
        goto C0VXd;
        sKX2n:
        if (!($credit1 < 0)) {
            goto fhhGl;
        }
        goto IBHPC;
        xW3k3:
        $credit2 = $share['credit2'] + $num;
        goto senlV;
        yF1y_:
        KXV0d:
        goto m5TGl;
        teI5e:
        goto BeAQW;
        goto YnrIo;
        RYGiY:
        goto E2DwH;
        goto yF1y_;
        HDwng:
        BeAQW:
        goto CStz9;
        kh8QV:
        return array("error" => 0, "data" => "积分更新失败");
        goto HDwng;
        LuCe1:
        if ($res === false) {
            goto u5aQ8;
        }
        goto Jt8NX;
        r3xsV:
        if ($type == 0) {
            goto PODnJ;
        }
        goto pXLcW;
        bC4ht:
        fBaMJ:
        goto EdxQu;
        t7KBI:
        return array("error" => 0, "data" => "余额不足");
        goto Kr0eW;
        iI_Py:
    }
    public function islogin()
    {
        goto r2_YZ;
        hh5oX:
        return $fans;
        goto vbmVY;
        oCS7B:
        if (empty($_SESSION['openid'])) {
            goto sGbZ3;
        }
        goto RL2Zg;
        r2_YZ:
        global $_W;
        goto oCS7B;
        RL2Zg:
        $fans['openid'] = $_SESSION['openid'];
        goto Vbd3R;
        zNOkW:
        sGbZ3:
        goto ZCN6Z;
        ZCN6Z:
        $mc = mc_fetch($fans['openid']);
        goto WBr34;
        WBr34:
        $fans = array("id" => $_SESSION['tkuid'], "tkuid" => $_SESSION['tkuid'], "wquid" => $mc['uid'], "credit1" => $share['credit1'], "credit2" => $share['credit2'], "nickname" => $share['nickname'], "avatar" => $share['avatar'], "helpid" => $share['helpid'], "dlptpid" => $share['dlptpid'], "unionid" => $share['unionid'], "from_user" => $share['from_user'], "openid" => $share['from_user'], "createtime" => $share['createtime'], "tgwid" => $share['tgwid'], "cqtype" => $share['cqtype'], "dltype" => $share['dltype'], "status" => $share['status']);
        goto hh5oX;
        Vbd3R:
        $share = pdo_fetch('select * from ' . tablename($this->modulename . '_share') . " where weid='{$_W['uniacid']}' and id='{$_SESSION['tkuid']}'");
        goto zNOkW;
        vbmVY:
    }
    public function doMobileLogin()
    {
        goto Qko2Y;
        CnwG2:
        $_SESSION['tkuid'] = $share['id'];
        goto nRf8o;
        N3hmZ:
        $fans = mc_oauth_userinfo();
        goto AKaA_;
        FEb3l:
        goto tjRXy;
        goto EXyqP;
        Og40j:
        $password = trim($_GPC['password']);
        goto ycPHK;
        Qko2Y:
        global $_GPC, $_W;
        goto lmlVV;
        eaC1R:
        exit(json_encode(array("status" => 0, "msg" => "帐号密码错误", "tzurl" => urldecode($tzurl))));
        goto FEb3l;
        x0Adp:
        $pid = $_GPC['pid'];
        goto ttN0d;
        J5gqt:
        $username = trim($_GPC['username']);
        goto Og40j;
        hoDAG:
        $_SESSION['unionid'] = $share['unionid'];
        goto YQDUi;
        Kzydo:
        tjRXy:
        goto f263U;
        GGN8c:
        include $this->template('login');
        goto iYR8m;
        f263U:
        TXfjo:
        goto GGN8c;
        ttN0d:
        $tzurl = $_GPC['tzurl'];
        goto N3hmZ;
        nRf8o:
        $_SESSION['openid'] = $share['from_user'];
        goto hoDAG;
        AKaA_:
        if (!$_W['isajax']) {
            goto TXfjo;
        }
        goto J5gqt;
        r1Vb1:
        if ($username == $share['pcuser'] && $password == $share['pcpasswords']) {
            goto dosqw;
        }
        goto eaC1R;
        YQDUi:
        $_SESSION['pid'] = $share['dlptpid'];
        goto FJxFP;
        lmlVV:
        $cfg = $this->module['config'];
        goto x0Adp;
        rcNsV:
        $_SESSION['username'] = $share['pcuser'];
        goto CnwG2;
        ycPHK:
        $share = pdo_fetch('SELECT * FROM ' . tablename($this->modulename . '_share') . " WHERE pcuser='{$username}' and weid='{$_W['uniacid']}' ");
        goto r1Vb1;
        EXyqP:
        dosqw:
        goto rcNsV;
        FJxFP:
        exit(json_encode(array("status" => 1, "msg" => "登录成功", "tzurl" => urldecode($tzurl))));
        goto Kzydo;
        iYR8m:
    }
    public function doMobileLoginout()
    {
        goto NlZ_g;
        NlZ_g:
        session_unset();
        goto IuyXu;
        IuyXu:
        session_destroy();
        goto zKq2u;
        zKq2u:
        exit(json_encode(array("status" => 1, "msg" => "退出登录成功")));
        goto cnFih;
        cnFih:
    }
    public function doMobilebdLogin()
    {
        goto eXCwE;
        vcs0A:
        goto QjQWd;
        goto pBzpa;
        im8_f:
        if (empty($share['id'])) {
            goto sXZIU;
        }
        goto OC4U2;
        CX3uB:
        if (!empty($share['id'])) {
            goto pLZSG;
        }
        goto X0036;
        b_tcf:
        $share = pdo_fetch('SELECT * FROM ' . tablename($this->modulename . '_share') . " WHERE unionid='{$unionid}' and weid='{$_W['uniacid']}' ");
        goto DaQET;
        onJqn:
        goto XdSsS;
        goto MqeiL;
        zeWjn:
        fT1Ut:
        goto WJQ9J;
        KcR9E:
        exit(json_encode(array("status" => 1, "msg" => "绑定成功！")));
        goto zeWjn;
        eD2_8:
        include $this->template('bdlogin');
        goto sCXaL;
        c291e:
        $password = trim($_GPC['password']);
        goto N5142;
        c9HiR:
        XdSsS:
        goto fzfqH;
        Jug1Y:
        bszAP:
        goto eD2_8;
        spzsf:
        $cfg = $this->module['config'];
        goto BEOcl;
        BFU3T:
        $share = pdo_fetch('SELECT * FROM ' . tablename($this->modulename . '_share') . " WHERE from_user='{$openid}' and weid='{$_W['uniacid']}' ");
        goto im8_f;
        wu6og:
        if (!($aaa !== 'false')) {
            goto fT1Ut;
        }
        goto KcR9E;
        YnsvE:
        if (!empty($openid)) {
            goto ruo20;
        }
        goto D0McL;
        QwQVe:
        exit(json_encode(array("status" => 0, "msg" => "手机号已经存在！")));
        goto Hosor;
        EfhJZ:
        if (!$_W['isajax']) {
            goto bszAP;
        }
        goto YnsvE;
        N5142:
        $usdata = array("pcuser" => $username, "pcpasswords" => $password);
        goto EfhJZ;
        D0McL:
        exit(json_encode(array("status" => 0, "msg" => "请在微信端绑定")));
        goto bQuy9;
        eXCwE:
        global $_GPC, $_W;
        goto spzsf;
        Hosor:
        dXSas:
        goto BFU3T;
        MqeiL:
        BjNec:
        goto jQssy;
        Pt7XI:
        $sharepcuser = pdo_fetch('SELECT * FROM ' . tablename($this->modulename . '_share') . " WHERE pcuser='{$username}' and weid='{$_W['uniacid']}' ");
        goto oRgSS;
        bQuy9:
        ruo20:
        goto Pt7XI;
        pBzpa:
        sXZIU:
        goto b_tcf;
        BEOcl:
        $fans = mc_oauth_userinfo();
        goto efaU9;
        oRgSS:
        if (empty($sharepcuser['id'])) {
            goto dXSas;
        }
        goto QwQVe;
        OC4U2:
        $aaa = pdo_update($this->modulename . '_share', $usdata, array("weid" => $_W['uniacid'], "id" => $share['id']));
        goto wu6og;
        jQssy:
        pdo_update($this->modulename . '_share', $usdata, array("weid" => $_W['uniacid'], "id" => $share['id']));
        goto c9HiR;
        WJQ9J:
        exit(json_encode(array("status" => 0, "msg" => $aaa)));
        goto vcs0A;
        fzfqH:
        QjQWd:
        goto CX3uB;
        TbJ13:
        $unionid = $_GPC['unionid'];
        goto mEw9c;
        mEw9c:
        $username = trim($_GPC['username']);
        goto c291e;
        p9vK5:
        exit(json_encode(array("status" => 0, "msg" => "用户不存在，请先关注公众号")));
        goto onJqn;
        efaU9:
        $openid = $_GPC['openid'];
        goto TbJ13;
        wKo_x:
        pLZSG:
        goto Jug1Y;
        DaQET:
        if (!empty($share['id'])) {
            goto BjNec;
        }
        goto p9vK5;
        X0036:
        exit(json_encode(array("status" => 0, "msg" => "用户不存在，请先关注公众号")));
        goto wKo_x;
        sCXaL:
    }
    public function sjrd44($length = 4)
    {
        goto U7znv;
        U7znv:
        $chars = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        goto fuJ6g;
        WGc6p:
        zqF1P:
        goto eySCA;
        eTTfx:
        goto zqF1P;
        goto pPLdp;
        fuJ6g:
        $str = '';
        goto Oja2V;
        lhejI:
        HZqtD:
        goto UFX2g;
        Oja2V:
        $i = 0;
        goto WGc6p;
        lpuHW:
        return $str;
        goto acBI2;
        NOGNq:
        $str .= $chars[mt_rand(0, strlen($chars) - 1)];
        goto lhejI;
        UFX2g:
        $i++;
        goto eTTfx;
        pPLdp:
        Bd6eL:
        goto lpuHW;
        eySCA:
        if (!($i < $length)) {
            goto Bd6eL;
        }
        goto NOGNq;
        acBI2:
    }
    public function getimg($url, $path = "", $_W)
    {
        goto v6SL0;
        OEoxx:
        ob_end_clean();
        goto v3W5a;
        Y8DWc:
        readfile($url);
        goto tsyTr;
        mtK3b:
        $sctime = date('YmdHis') . $this->sjrd44(6);
        goto kyfUh;
        v6SL0:
        empty($path) && ($path = IA_ROOT . '/addons/tiger_newhu/goodsimg/' . date('Ymd'));
        goto kh5w6;
        sZ1Cr:
        return $_W['siteroot'] . 'addons/tiger_newhu/goodsimg/' . date('Ymd') . '/' . $sctime . '.png';
        goto gPccm;
        odpuV:
        fwrite($fp, $img);
        goto F2EfC;
        rlDe7:
        if (!($url == '')) {
            goto qenBB;
        }
        goto GV3FE;
        tsyTr:
        $img = ob_get_contents();
        goto OEoxx;
        kh5w6:
        !file_exists($path) && mkdir($path, 0777, true);
        goto rlDe7;
        v3W5a:
        $fp = fopen($filename, 'a');
        goto odpuV;
        deKmV:
        ob_start();
        goto Y8DWc;
        xwSUA:
        qenBB:
        goto mtK3b;
        kyfUh:
        $filename = $path . '/' . $sctime . '.png';
        goto deKmV;
        GV3FE:
        return false;
        goto xwSUA;
        F2EfC:
        fclose($fp);
        goto sZ1Cr;
        gPccm:
    }
    public function doMobileTupian()
    {
        goto LoIlv;
        eQJ_q:
        $url = urldecode($_GPC['url']);
        goto tydV_;
        EI_l0:
        $ewm = $this->getimg('http://bshare.optimix.asia/barCode?site=weixin&url=' . $url, '', $_W);
        goto ECciE;
        dVnKx:
        $title = urldecode($_GPC['title']);
        goto GXhjv;
        GXhjv:
        $price = $_GPC['price'];
        goto cRz7p;
        tydV_:
        include IA_ROOT . '/addons/tiger_newhu/inc/sdk/tbk/tb.php';
        goto bSYfP;
        kiaAI:
        $taoimage = $_GPC['taoimage'];
        goto eQJ_q;
        cRz7p:
        $yhj = $_GPC['yhj'];
        goto Da5s9;
        Da5s9:
        $orprice = $_GPC['orprice'];
        goto jlYNC;
        LoIlv:
        global $_GPC, $_W;
        goto nRyLh;
        nRyLh:
        $cfg = $this->module['config'];
        goto dVnKx;
        xguT7:
        $url = $urlarr;
        goto EI_l0;
        ECciE:
        picjialidun($_W, $title, $price, $yhj, $orprice, $xiaol, $jrprice, $taoimage, $ewm);
        goto K_uGX;
        bSYfP:
        $urlarr = $this->dwzw($url);
        goto xguT7;
        mJ1ff:
        $jrprice = $_GPC['jrprice'];
        goto kiaAI;
        jlYNC:
        $xiaol = $_GPC['xiaol'];
        goto mJ1ff;
        K_uGX:
    }
    public function getfc($string, $len = 2)
    {
        goto e6LOo;
        Mthj9:
        $start = 0;
        goto jPISC;
        n07LF:
        return $array;
        goto pP3FU;
        qS0X0:
        VULcn:
        goto n07LF;
        ieAM7:
        $string = mb_substr($string, $len, $strlen, 'utf8');
        goto badjF;
        jPISC:
        $strlen = mb_strlen($string);
        goto aqMLX;
        e6LOo:
        $string = str_replace(' ', '', $string);
        goto Mthj9;
        badjF:
        $strlen = mb_strlen($string);
        goto KH2Fp;
        t_se0:
        $array[] = mb_substr($string, $start, $len, 'utf8');
        goto ieAM7;
        NCjaf:
        if (!$strlen) {
            goto VULcn;
        }
        goto t_se0;
        KH2Fp:
        goto AEBYk;
        goto qS0X0;
        aqMLX:
        AEBYk:
        goto NCjaf;
        pP3FU:
    }
    public function curl_request($url, $post = "", $cookie = "", $returnCookie = 0)
    {
        goto cmFWw;
        TC5Oj:
        $cookies = $val;
        goto rqpeQ;
        zeFtz:
        if ($returnCookie) {
            goto VBZw6;
        }
        goto DfWrl;
        rjQri:
        $cookies = $cookies . '; ' . $val;
        goto eKlvO;
        DfWrl:
        return $data;
        goto eHqPy;
        fqBrO:
        VBZw6:
        goto HZQEA;
        ZvF5O:
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, 0);
        goto UTkG1;
        ASBSD:
        curl_close($curl);
        goto zeFtz;
        vneey:
        if ($cookies == '') {
            goto vpHNJ;
        }
        goto rjQri;
        o57qk:
        vpHNJ:
        goto TC5Oj;
        oROMg:
        if (!curl_errno($curl)) {
            goto QVWjC;
        }
        goto FzESj;
        P3TIm:
        ROh3C:
        goto bA2iD;
        vwnlX:
        B0ryM:
        goto ZJ3l9;
        KuE62:
        curl_setopt($curl, CURLOPT_COOKIE, $cookie);
        goto P3TIm;
        cmFWw:
        $curl = curl_init();
        goto iya0r;
        ITZuY:
        if (!$cookie) {
            goto ROh3C;
        }
        goto KuE62;
        FzESj:
        return curl_error($curl);
        goto NRWk_;
        iya0r:
        curl_setopt($curl, CURLOPT_URL, $url);
        goto CCvBm;
        RRbTw:
        if (!$post) {
            goto mIf2j;
        }
        goto hP0AX;
        o8g40:
        preg_match_all('/Set\\-Cookie:([^;]*);/', $header, $matches);
        goto h2mDe;
        VbwEo:
        vBRxL:
        goto Lbm26;
        xWvHZ:
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
        goto UakHY;
        h2mDe:
        FYTYC:
        goto PSCry;
        dyA59:
        $info['content'] = $body;
        goto R9VUL;
        Udyns:
        mIf2j:
        goto ITZuY;
        CCvBm:
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
        goto D9CAk;
        H1_i7:
        curl_setopt($curl, CURLOPT_POSTFIELDS, http_build_query($post));
        goto Udyns;
        bA2iD:
        curl_setopt($curl, CURLOPT_HEADER, $returnCookie);
        goto bk7Mx;
        eKlvO:
        goto ydJOV;
        goto o57qk;
        UakHY:
        $data = curl_exec($curl);
        goto oROMg;
        PND7Z:
        curl_setopt($curl, CURLOPT_REFERER, 'http://XXX');
        goto ZvF5O;
        ZJ3l9:
        $info['cookie'] = substr($cookies, 1);
        goto dyA59;
        NRWk_:
        QVWjC:
        goto ASBSD;
        rqpeQ:
        ydJOV:
        goto ax0st;
        bk7Mx:
        curl_setopt($curl, CURLOPT_TIMEOUT, 10);
        goto xWvHZ;
        eHqPy:
        goto vBRxL;
        goto fqBrO;
        HZQEA:
        list($header, $body) = explode('

', $data, 2);
        goto o8g40;
        PSCry:
        if (!(list($key, $val) = each($matches[1]))) {
            goto B0ryM;
        }
        goto vneey;
        vs1w2:
        curl_setopt($curl, CURLOPT_FOLLOWLOCATION, 1);
        goto grnPU;
        UTkG1:
        curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, 0);
        goto RRbTw;
        hP0AX:
        curl_setopt($curl, CURLOPT_POST, 1);
        goto H1_i7;
        ax0st:
        goto FYTYC;
        goto vwnlX;
        D9CAk:
        curl_setopt($curl, CURLOPT_USERAGENT, 'Mozilla/5.0 (compatible; MSIE 10.0; Windows NT 6.1; 	Trident/6.0)');
        goto vs1w2;
        grnPU:
        curl_setopt($curl, CURLOPT_AUTOREFERER, 1);
        goto PND7Z;
        R9VUL:
        return $info;
        goto VbwEo;
        Lbm26:
    }
    public function strurl($coupons_url)
    {
        goto ysps3;
        R1fDc:
        if (empty($wz)) {
            goto MWxHk;
        }
        goto wBfPY;
        BOfVC:
        goto S5wBi;
        goto QwavS;
        TvAxz:
        return substr($url, $wz + 11, 32);
        goto Ekd3c;
        ysps3:
        $url = strtolower($coupons_url);
        goto l1sRx;
        wBfPY:
        return substr($url, $wz + 12, 32);
        goto BOfVC;
        QwavS:
        MWxHk:
        goto HOe8T;
        HOe8T:
        $activity_id = 'activityid=';
        goto XFlUd;
        XFlUd:
        $wz = strpos($url, $activity_id);
        goto TvAxz;
        Q53MG:
        $wz = strpos($url, $activity_id);
        goto R1fDc;
        l1sRx:
        $activity_id = 'activity_id=';
        goto Q53MG;
        Ekd3c:
        S5wBi:
        goto rMWv1;
        rMWv1:
    }
    public function doMobileLjtkl()
    {
        goto GSlU1;
        zFTkq:
        $img = urldecode($_GPC['img']);
        goto mccsa;
        cf2Mj:
        die(json_encode(array("tkl" => $tkl)));
        goto KEqTt;
        oQBxi:
        $url = urldecode($_GPC['url']);
        goto zFTkq;
        mccsa:
        $tjcontent = $_GPC['title'];
        goto zZ7UN;
        GSlU1:
        global $_W, $_GPC;
        goto oQBxi;
        zZ7UN:
        $tkl = $this->tkl($url, $img, $tjcontent);
        goto cf2Mj;
        KEqTt:
    }
    public function tkl($url, $img, $tjcontent)
    {
        goto SazQH;
        MeBoU:
        $c = new TopClient();
        goto Y0kFD;
        dFupF:
        $appkey = $cfg['tkAppKey'];
        goto bUZ7k;
        bPF1S:
        $jsonArray = json_decode($jsonStr, true);
        goto En9kr;
        wIOXA:
        $req = new TbkTpwdCreateRequest();
        goto Ma2Rb;
        bUZ7k:
        $secret = $cfg['tksecretKey'];
        goto MeBoU;
        pmS6e:
        H_bdz:
        goto OGKhQ;
        aCFW3:
        $cfg = $this->module['config'];
        goto dFupF;
        owROq:
        $req->setLogo($img);
        goto c1fP8;
        AuOZ_:
        $taokou = $cfg['tklleft'] . $taokou . $cfg['tklright'];
        goto pmS6e;
        mmaqR:
        $req->setUrl($url);
        goto owROq;
        cevlg:
        $resp = $c->execute($req);
        goto N3NmP;
        SazQH:
        global $_W, $_GPC;
        goto aCFW3;
        s7h4f:
        $taokou = str_replace('￥', '', $taokou);
        goto AuOZ_;
        Y0kFD:
        $c->appkey = $appkey;
        goto W69LJ;
        W69LJ:
        $c->secretKey = $secret;
        goto wIOXA;
        WhJAq:
        jYVMm:
        goto HZ4YQ;
        N3NmP:
        $jsonStr = json_encode($resp);
        goto bPF1S;
        c1fP8:
        $req->setExt('{}');
        goto cevlg;
        Ma2Rb:
        $req->setText($tjcontent);
        goto mmaqR;
        HZ4YQ:
        if (empty($cfg['tklleft'])) {
            goto H_bdz;
        }
        goto s7h4f;
        En9kr:
        $taokou = $jsonArray['data']['model'];
        goto taIA_;
        f_9KO:
        return $taokou;
        goto I1Cph;
        taIA_:
        if (!($cfg['tklnewtype'] == 1)) {
            goto jYVMm;
        }
        goto ED2mR;
        ED2mR:
        $taokou = str_replace('《', '￥', $taokou);
        goto WhJAq;
        OGKhQ:
        file_put_contents(IA_ROOT . '/addons/tiger_newhu/tkl_log.txt', '
' . $url . '------' . $img . '-----' . $tjcontent . '------' . json_encode($jsonArray), FILE_APPEND);
        goto f_9KO;
        I1Cph:
    }
    public function doMobileSq88888888()
    {
        goto SI2Ng;
        TdhwA:
        exit;
        goto Br0dF;
        B_wEN:
        $cfg = $this->module['config'];
        goto StyhP;
        y3rQR:
        if (!($_GPC['my'] != 'tigernewhu')) {
            goto Tp6EZ;
        }
        goto VW0en;
        SI2Ng:
        global $_W, $_GPC;
        goto y3rQR;
        Dfm40:
        VFZN1:
        goto ub9_l;
        ZFK4F:
        echo '淘ID:' . $tbuid . '<br>';
        goto NUdPo;
        FQQln:
        foreach ($s as $k => $v) {
            goto wzmJO;
            dAffZ:
            echo ',' . $b['tbuid'];
            goto QiCVY;
            QiCVY:
            DzEc_:
            goto M9ZRT;
            wzmJO:
            $b = unserialize($v['settings']);
            goto dAffZ;
            M9ZRT:
        }
        goto Dfm40;
        VW0en:
        echo 'cs';
        goto TdhwA;
        RJBFr:
        $tkip = $this->get_server_ip();
        goto S62sd;
        StyhP:
        $host = $_SERVER['HTTP_HOST'];
        goto C13sJ;
        NUdPo:
        echo '域名:' . $tkurl2 . '<br>';
        goto crmaZ;
        C13sJ:
        $host = strtolower($host);
        goto jGgAN;
        q_uHu:
        $tkurl1 = $host;
        goto F5fTN;
        F5fTN:
        $tkurl2 = $_W['setting']['site']['url'];
        goto RJBFr;
        crmaZ:
        echo 'tkip:' . $tkip . '<br>';
        goto Et35U;
        Br0dF:
        Tp6EZ:
        goto B_wEN;
        jGgAN:
        $tbuid = $cfg['tbuid'];
        goto q_uHu;
        Et35U:
        $s = pdo_fetchall('select settings from ' . tablename('uni_account_modules') . ' where module=\'tiger_newhu\'');
        goto FQQln;
        S62sd:
        echo '使用域名:' . $host . '<br>';
        goto ZFK4F;
        ub9_l:
    }
    public function oldtkl($url, $img, $tjcontent)
    {
        goto nkJZj;
        xPCFL:
        file_put_contents(IA_ROOT . '/addons/tiger_newhu/oldtkl_log.txt', '
' . json_encode($resp), FILE_APPEND);
        goto nSU9l;
        jA5bD:
        $appkey = $cfg['tkAppKey'];
        goto hgxF3;
        Ji9xb:
        if (!($cfg['tklnewtype'] == 1)) {
            goto jtm_t;
        }
        goto Cud5Q;
        WB9eX:
        $tpwd_param->text = $tjcontent;
        goto ocevs;
        I1Di8:
        $resp = $c->execute($req);
        goto Wel9C;
        iCECj:
        $c->secretKey = $secret;
        goto hxHSF;
        hxHSF:
        $req = new WirelessShareTpwdCreateRequest();
        goto YX1E1;
        z44yU:
        jtm_t:
        goto xPCFL;
        YokPh:
        $req->setTpwdParam(json_encode($tpwd_param));
        goto I1Di8;
        HO63x:
        $tpwd_param->logo = $img;
        goto WB9eX;
        nkJZj:
        global $_W, $_GPC;
        goto YsNWV;
        YsNWV:
        $cfg = $this->module['config'];
        goto jA5bD;
        nSU9l:
        return $taokou;
        goto k8V2z;
        Wel9C:
        $taokou = $resp->model;
        goto BB5BG;
        SBWtJ:
        $c->appkey = $appkey;
        goto iCECj;
        ocevs:
        $tpwd_param->url = $url;
        goto YokPh;
        hgxF3:
        $secret = $cfg['tksecretKey'];
        goto TE7iz;
        YX1E1:
        $tpwd_param = new GenPwdIsvParamDto();
        goto NVXPT;
        TE7iz:
        $c = new TopClient();
        goto SBWtJ;
        NVXPT:
        $tpwd_param->ext = '{"":""}';
        goto HO63x;
        BB5BG:
        settype($taokou, 'string');
        goto Ji9xb;
        Cud5Q:
        $taokou = str_replace('《', '￥', $taokou);
        goto z44yU;
        k8V2z:
    }
    public function hlinorder($userInfo, $_W)
    {
        goto unGpT;
        unGpT:
        global $_W, $_GPC;
        goto s0ssy;
        stiJs:
        foreach ($userInfo as $v) {
            goto i2Vef;
            qvgu1:
            goto Rb0NJ;
            goto kWhS6;
            ojqS0:
            pdo_insert($this->modulename . '_newtbgoods', $item);
            goto Y47hy;
            kWhS6:
            YVWuR:
            goto ojqS0;
            Y47hy:
            Rb0NJ:
            goto c3Wt8;
            i2Vef:
            $fztype = pdo_fetch('select * from ' . tablename($this->modulename . '_fztype') . " where weid='{$_W['uniacid']}' and hlcid='{$v['fqcat']}' order by px desc");
            goto ZX1Ti;
            M52a0:
            $item = array("weid" => $_W['uniacid'], "fqcat" => $fztype['id'], "zy" => 2, "quan_id" => $Quan_id, "itemid" => $v['itemid'], "itemtitle" => $v['itemtitle'], "itemshorttitle" => $v['itemshorttitle'], "itemdesc" => $v['itemdesc'], "itemprice" => $v['itemprice'], "itemsale" => $v['itemsale'], "itemsale2" => $v['itemsale2'], "conversion_ratio" => $v['conversion_ratio'], "itempic" => $v['itempic'], "itemendprice" => $v['itemendprice'], "shoptype" => $v['shoptype'], "userid" => $v['userid'], "sellernick" => $v['sellernick'], "tktype" => $v['tktype'], "tkrates" => $v['tkrates'], "ctrates" => $v['ctrates'], "cuntao" => $v['cuntao'], "tkmoney" => $v['tkmoney'], "tkurl" => $v['tkurl'], "couponurl" => $v['couponurl'], "planlink" => $v['planlink'], "couponmoney" => $v['couponmoney'], "couponsurplus" => $v['couponsurplus'], "couponreceive" => $v['couponreceive'], "couponreceive2" => $v['couponreceive2'], "couponnum" => $v['couponnum'], "couponexplain" => $v['couponexplain'], "couponstarttime" => $v['couponstarttime'], "couponendtime" => $v['couponendtime'], "starttime" => $v['starttime'], "isquality" => $v['isquality'], "item_status" => $v['item_status'], "report_status" => $v['report_status'], "is_brand" => $v['is_brand'], "is_live" => $v['is_live'], "videoid" => $v['videoid'], "activity_type" => $v['activity_type'], "createtime" => TIMESTAMP);
            goto SrYos;
            ZX1Ti:
            $Quan_id = $this->strurl($v['couponurl']);
            goto M52a0;
            SrYos:
            $go = pdo_fetch('SELECT id FROM ' . tablename($this->modulename . '_newtbgoods') . " WHERE weid='{$_W['uniacid']}' and itemid='{$v['itemid']}' ORDER BY id desc");
            goto SXeGt;
            c3Wt8:
            vcc2V:
            goto MfVlO;
            bz1st:
            pdo_update($this->modulename . '_newtbgoods', $item, array("weid" => $_W['uniacid'], "itemid" => $v['itemid']));
            goto qvgu1;
            SXeGt:
            if (empty($go)) {
                goto YVWuR;
            }
            goto bz1st;
            MfVlO:
        }
        goto VLaU8;
        VLaU8:
        GgPjK:
        goto euqOm;
        s0ssy:
        $cfg = $this->module['config'];
        goto stiJs;
        euqOm:
    }
    public function indtkgoods($dtklist)
    {
        goto BSYpb;
        L39Pd:
        $cfg = $this->module['config'];
        goto VSks_;
        VSks_:
        foreach ($dtklist as $v) {
            goto Yrl1E;
            neD5s:
            xJxVg:
            goto FIeWi;
            FuWm6:
            wRNmR:
            goto rppSD;
            PUrMe:
            $yjbl = $v['Commission_jihua'];
            goto uT4sR;
            w5DKi:
            $shoptype = 'B';
            goto neD5s;
            UgdmO:
            goto z5SZE;
            goto FuWm6;
            rppSD:
            $lxtype = '营销计划';
            goto YH2z3;
            oZcSz:
            $lxtype = '鹊桥活动';
            goto VbNFw;
            mjEyM:
            MQOfb:
            goto w5DKi;
            jTLVn:
            Zr2SX:
            goto Pp1is;
            geoy4:
            drLez:
            goto XtwM_;
            VydJL:
            $lxtype = '通用计划';
            goto PUrMe;
            uT4sR:
            goto z5SZE;
            goto UPgs2;
            Pp1is:
            pdo_insert($this->modulename . '_newtbgoods', $item);
            goto geoy4;
            r2a0H:
            if ($v['Commission_queqiao'] != '0.00') {
                goto IHayj;
            }
            goto H9rK5;
            JQ8oE:
            goto drLez;
            goto jTLVn;
            XtwM_:
            ZyuyU:
            goto uvc4S;
            lxDJB:
            if ($v['IsTmall'] == 1) {
                goto MQOfb;
            }
            goto Diz_k;
            yybTd:
            pdo_update($this->modulename . '_newtbgoods', $item, array("weid" => $_W['uniacid'], "itemid" => $v['GoodsID']));
            goto JQ8oE;
            Diz_k:
            $shoptype = 'C';
            goto PLv_7;
            EZiVL:
            z5SZE:
            goto lxDJB;
            TVBL3:
            $go = pdo_fetch('SELECT itemid FROM ' . tablename($this->modulename . '_newtbgoods') . " WHERE weid = '{$_W['uniacid']}' and  itemid={$v['GoodsID']} ");
            goto hfwIB;
            YH2z3:
            $yjbl = $v['Commission_jihua'];
            goto EZiVL;
            PLv_7:
            goto xJxVg;
            goto mjEyM;
            UPgs2:
            IHayj:
            goto oZcSz;
            H9rK5:
            if ($v['Commission_jihua'] != '0.00') {
                goto wRNmR;
            }
            goto VydJL;
            hfwIB:
            if (empty($go)) {
                goto Zr2SX;
            }
            goto yybTd;
            Yrl1E:
            $fztype = pdo_fetch('select * from ' . tablename($this->modulename . '_fztype') . " where weid='{$_W['uniacid']}' and dtkcid='{$v['Cid']}' order by px desc");
            goto r2a0H;
            FIeWi:
            $item = array("weid" => $_W['uniacid'], "fqcat" => $fztype['id'], "zy" => 1, "tktype" => $lxtype, "itemid" => $v['GoodsID'], "itemtitle" => $v['Title'], "itemdesc" => $v['Introduce'], "itempic" => $v['Pic'], "itemendprice" => $v['Price'], "itemsale" => $v['Sales_num'], "tkrates" => $yjbl, "couponreceive" => $v['Quan_receive'], "couponsurplus" => $v['Quan_surplus'], "couponmoney" => $v['Quan_price'], "couponendtime" => strtotime($v['Quan_time']), "couponurl" => $v['Quan_link'], "shoptype" => $shoptype, "quan_id" => $v['Quan_id'], "couponexplain" => $v['Quan_condition'], "itemprice" => $v['Org_Price'], "tkurl" => $v['Jihua_link'], "createtime" => TIMESTAMP);
            goto TVBL3;
            VbNFw:
            $yjbl = $v['Commission_queqiao'];
            goto UgdmO;
            uvc4S:
        }
        goto GeUnx;
        GeUnx:
        sMF0n:
        goto hxWhh;
        BSYpb:
        global $_W, $_GPC;
        goto soomf;
        soomf:
        $page = $_GPC['page'];
        goto L39Pd;
        hxWhh:
    }
    public function apUpload($media_id)
    {
        goto jVO9R;
        NKN4F:
        $url = 'http://file.api.weixin.qq.com/cgi-bin/media/get?access_token=' . $access_token . '&media_id=' . $media_id;
        goto dlBvU;
        muIrb:
        curl_close($ch);
        goto t12yn;
        joOcs:
        mkdir($newfolder, 7777);
        goto sDGT0;
        tWKv_:
        $ch = curl_init($url);
        goto VG5Ud;
        jVO9R:
        global $_W, $_GPC;
        goto h3kec;
        Q4dNf:
        $newfolder = ATTACHMENT_ROOT . 'images' . '/tiger_newhu_photos' . '/';
        goto jiM48;
        sDGT0:
        LO32V:
        goto b6OcY;
        b_HKr:
        $accObj = WeixinAccount::create($_W['uniacid']);
        goto pk11O;
        VG5Ud:
        $fp = fopen($targetName, 'wb');
        goto VBiHH;
        jiM48:
        if (is_dir($newfolder)) {
            goto LO32V;
        }
        goto joOcs;
        t12yn:
        fclose($fp);
        goto YjcIs;
        h3kec:
        load()->classs('weixin.account');
        goto b_HKr;
        YjcIs:
        return $picurl;
        goto et9Ff;
        pk11O:
        $access_token = $accObj->fetch_token();
        goto NKN4F;
        dlBvU:
        file_put_contents(IA_ROOT . '/addons/tiger_newhu/log.txt', '
 old:' . json_encode($access_token), FILE_APPEND);
        goto RW2jH;
        VBiHH:
        curl_setopt($ch, CURLOPT_FILE, $fp);
        goto WvJyW;
        pox51:
        $targetName = ATTACHMENT_ROOT . $picurl;
        goto tWKv_;
        TVohF:
        curl_exec($ch);
        goto muIrb;
        RW2jH:
        file_put_contents(IA_ROOT . '/addons/tiger_newhu/log.txt', '
 old:' . json_encode($media_id), FILE_APPEND);
        goto Q4dNf;
        b6OcY:
        $picurl = 'images' . '/tiger_newhu_photos' . '/' . date('YmdHis') . rand(1000, 9999) . '.jpg';
        goto pox51;
        WvJyW:
        curl_setopt($ch, CURLOPT_HEADER, 0);
        goto TVohF;
        et9Ff:
    }
    public function dwz($url)
    {
        goto hJAc3;
        JivKP:
        $cfg = $this->module['config'];
        goto GIEgS;
        tPp9a:
        $url = $this->wxdwz($turl);
        goto coHMF;
        goTCv:
        goto oLVgh;
        goto iNg99;
        GIEgS:
        $url = urlencode($url);
        goto nKFC8;
        Bc15O:
        goto oLVgh;
        goto p2pgM;
        coHMF:
        oLVgh:
        goto FcTwe;
        VN48e:
        $url = $this->sinadwz($turl);
        goto Bc15O;
        iNg99:
        ix7j3:
        goto VN48e;
        EKSW2:
        $urlarr = $this->zydwz($turl);
        goto goTCv;
        ZKL7G:
        if ($cfg['dwzlj'] == 0) {
            goto ix7j3;
        }
        goto Ve08v;
        Ve08v:
        if ($cfg['dwzlj'] == 1) {
            goto UURNQ;
        }
        goto EKSW2;
        hJAc3:
        global $_W;
        goto JivKP;
        nKFC8:
        $turl = $_W['siteroot'] . str_replace('./', 'app/', $this->createMobileurl('openlink', array("link" => $url)));
        goto ZKL7G;
        p2pgM:
        UURNQ:
        goto tPp9a;
        FcTwe:
    }
    public function dwzw($turl)
    {
        goto KKYOq;
        PmyXC:
        $url = $this->zydwz($turl);
        goto nsBVE;
        B_g0V:
        BdECg:
        goto xUu3p;
        xUu3p:
        $url = $this->wxdwz($turl);
        goto jlUdP;
        mPGUN:
        if ($cfg['dwzlj'] == 0) {
            goto jbP5q;
        }
        goto NSmKy;
        dvECt:
        $url = $this->sinadwz($turl);
        goto gtjt7;
        gtjt7:
        goto yg6up;
        goto B_g0V;
        nsBVE:
        goto yg6up;
        goto jJWX6;
        xZpJw:
        return $url;
        goto tfSHh;
        jlUdP:
        yg6up:
        goto xZpJw;
        KKYOq:
        global $_W;
        goto TxnJ8;
        jJWX6:
        jbP5q:
        goto dvECt;
        TxnJ8:
        $cfg = $this->module['config'];
        goto mPGUN;
        NSmKy:
        if ($cfg['dwzlj'] == 1) {
            goto BdECg;
        }
        goto PmyXC;
        tfSHh:
    }
    public function zydwz($turl)
    {
        goto uV6YN;
        FEY7X:
        $cfg = $this->module['config'];
        goto R1XoV;
        R1XoV:
        $data = array("weid" => $_W['uniacid'], "url" => $turl, "createtime" => TIMESTAMP);
        goto qQA_M;
        edk1o:
        $url = $cfg['zydwz'] . 't.php?d=' . $id;
        goto x2iV0;
        uV6YN:
        global $_W;
        goto FEY7X;
        x2iV0:
        return $url;
        goto Wcbao;
        RHXFv:
        $id = pdo_insertid();
        goto edk1o;
        qQA_M:
        pdo_insert('tiger_newhu_dwz', $data);
        goto RHXFv;
        Wcbao:
    }
    public function wxdwz($url)
    {
        goto RdUiX;
        RdUiX:
        $result = '{"action":"long2short","long_url":"' . $url . '"}';
        goto DkZdp;
        zIFFJ:
        $ret = ihttp_request($url, $result);
        goto MrtLK;
        MrtLK:
        $content = @json_decode($ret['content'], true);
        goto t33cS;
        t33cS:
        return $content['short_url'];
        goto SPIdx;
        DkZdp:
        $access_token = $this->getAccessToken();
        goto EcG4Q;
        EcG4Q:
        $url = "https://api.weixin.qq.com/cgi-bin/shorturl?access_token={$access_token}";
        goto zIFFJ;
        SPIdx:
    }
    public function sinadwz($url)
    {
        goto yadx7;
        yadx7:
        global $_W;
        goto fD0Eh;
        bwSV5:
        if (empty($cfg['sinkey'])) {
            goto yVy5l;
        }
        goto jyXtI;
        yYVBP:
        goto glfg1;
        goto jtWq8;
        m0kzu:
        file_put_contents(IA_ROOT . '/addons/tiger_newhu/log--sina.txt', '
--3' . json_encode($json), FILE_APPEND);
        goto Bljlr;
        O2C2H:
        $json = ihttp_get($sinaurl);
        goto Ix5pn;
        W6Onx:
        $key = '1549359964';
        goto OAJ9l;
        GyV6Q:
        return $result[0]['url_short'];
        goto yAwAO;
        fD0Eh:
        $cfg = $this->module['config'];
        goto bwSV5;
        Ix5pn:
        file_put_contents(IA_ROOT . '/addons/tiger_newhu/log--sina.txt', '
--3' . $url, FILE_APPEND);
        goto m0kzu;
        jyXtI:
        $key = trim($cfg['sinkey']);
        goto yYVBP;
        AWEib:
        $turl2 = urlencode($url);
        goto O21Mx;
        O21Mx:
        $sinaurl = "http://api.t.sina.com.cn/short_url/shorten.json?source={$key}&url_long={$turl2}";
        goto YrAPi;
        YrAPi:
        load()->func('communication');
        goto O2C2H;
        OAJ9l:
        glfg1:
        goto AWEib;
        Bljlr:
        $result = @json_decode($json['content'], true);
        goto GyV6Q;
        jtWq8:
        yVy5l:
        goto W6Onx;
        yAwAO:
    }
    public function addtbgoods($data)
    {
        goto IX7Qb;
        hpfM7:
        if (!($cfg['cxrk'] == 1)) {
            goto bd227;
        }
        goto yN1qq;
        ggCf_:
        pdo_insert($this->modulename . '_tbgoods', $data);
        goto jzSQU;
        d1RQj:
        pdo_update($this->modulename . '_tbgoods', $data, array("weid" => $data['weid'], "num_iid" => $data['num_iid']));
        goto LKkDd;
        vGiry:
        CVrVm:
        goto GQ3__;
        yN1qq:
        if (!empty($data['num_iid'])) {
            goto CVrVm;
        }
        goto p373r;
        p373r:
        return '';
        goto vGiry;
        FEr3w:
        SSY0z:
        goto ggCf_;
        jzSQU:
        hDf3m:
        goto elyTI;
        GQ3__:
        $go = pdo_fetch('SELECT id FROM ' . tablename($this->modulename . '_tbgoods') . " WHERE weid = '{$data['weid']}' and  num_iid='{$data['num_iid']}'");
        goto GhrC1;
        LKkDd:
        goto hDf3m;
        goto FEr3w;
        elyTI:
        bd227:
        goto Z_FXf;
        IX7Qb:
        $cfg = $this->module['config'];
        goto hpfM7;
        GhrC1:
        if (empty($go)) {
            goto SSY0z;
        }
        goto d1RQj;
        Z_FXf:
    }
    public function mygetID($url)
    {
        goto tEf2C;
        zyvgH:
        PEsz3:
        goto T3DaY;
        OGm2D:
        aMkce:
        goto Cw6Rd;
        JTB8I:
        goto aMkce;
        goto zyvgH;
        T3DaY:
        return $match[1];
        goto OGm2D;
        tEf2C:
        if (preg_match('/[\\?&]id=(\\d+)/', $url, $match)) {
            goto PEsz3;
        }
        goto dOlSL;
        dOlSL:
        return '';
        goto JTB8I;
        Cw6Rd:
    }
    public function getyouhui2($str)
    {
        preg_match_all('|(￥[^￥]+￥)|ism', $str, $matches);
        return $matches[1][0];
    }
    public function geturl($str)
    {
        goto SVHcR;
        QEDs1:
        Xp3J6:
        goto oEKeb;
        y1MZl:
        l2hxC:
        goto VfPio;
        T_QCs:
        return $url;
        goto ivOJG;
        vG92b:
        preg_match('/[\\s]/u', $url, $matches, PREG_OFFSET_CAPTURE);
        goto AERAJ;
        Fx79i:
        if ($url == 'http') {
            goto Xp3J6;
        }
        goto T_QCs;
        AERAJ:
        $url = substr($url, 0, $matches[0][1]);
        goto Fx79i;
        F0wOn:
        $url = 'http' . trim($exp[1]) . ' ';
        goto vG92b;
        ivOJG:
        goto l2hxC;
        goto QEDs1;
        oEKeb:
        return '';
        goto y1MZl;
        SVHcR:
        $exp = explode('http', $str);
        goto F0wOn;
        VfPio:
    }
    public function myisexists($url)
    {
        goto pvlR0;
        F_uZS:
        goto OIPuq;
        goto xqj7W;
        uX_Uy:
        if (stripos($url, 'tmall.com') !== false) {
            goto zXepY;
        }
        goto OYgzb;
        pvlR0:
        if (stripos($url, 'taobao.com') !== false) {
            goto wfdVr;
        }
        goto uX_Uy;
        bNMnt:
        OIPuq:
        goto U9qUs;
        NcjR2:
        return 2;
        goto aeIBU;
        edrRE:
        return 2;
        goto sACj6;
        sACj6:
        goto OIPuq;
        goto elAMr;
        elAMr:
        zXepY:
        goto NcjR2;
        xqj7W:
        wfdVr:
        goto edrRE;
        bFRMf:
        return 2;
        goto bNMnt;
        U9qUs:
        return 0;
        goto SLlHV;
        OYgzb:
        if (stripos($url, 'tmall.hk') !== false) {
            goto kPaib;
        }
        goto b4S1o;
        b4S1o:
        return 1;
        goto F_uZS;
        aeIBU:
        goto OIPuq;
        goto CcdP7;
        CcdP7:
        kPaib:
        goto bFRMf;
        SLlHV:
    }
    public function jdgoodsID($url)
    {
        goto Sjuza;
        qsii8:
        $goodsid = $this->Text_qzj($url, 'com/', '.html');
        goto DdYHX;
        r4NzW:
        if (!empty($goodsid)) {
            goto I3jUX;
        }
        goto URlTU;
        Sjuza:
        $goodsid = $this->Text_qzj($url, '?sku=', '&');
        goto FHVHn;
        UsFAD:
        YK0Ek:
        goto jIRCs;
        FHVHn:
        if (!empty($goodsid)) {
            goto YK0Ek;
        }
        goto LMvoo;
        AV7gY:
        I3jUX:
        goto EVC9V;
        EVC9V:
        return $goodsid;
        goto obrsJ;
        DdYHX:
        tb3Ea:
        goto r4NzW;
        LMvoo:
        $goodsid = $this->Text_qzj($url, 'product/', '.html');
        goto UsFAD;
        jIRCs:
        if (!empty($goodsid)) {
            goto tb3Ea;
        }
        goto qsii8;
        URlTU:
        $goodsid = $this->jdgoods($url);
        goto AV7gY;
        obrsJ:
    }
    public function pddgoodsID($url)
    {
        goto ub1Rr;
        dF3RL:
        return '';
        goto sc4ex;
        PraKU:
        KcAQ5:
        goto e099C;
        ub1Rr:
        if (preg_match('/[\\?&]goods_id=(\\d+)/', $url, $match)) {
            goto d_gs5;
        }
        goto dF3RL;
        aKtXb:
        return $match[1];
        goto PraKU;
        FrE01:
        d_gs5:
        goto aKtXb;
        sc4ex:
        goto KcAQ5;
        goto FrE01;
        e099C:
    }
    public function pdddwzw($turl)
    {
        goto nTzrg;
        gvvLf:
        $url = $this->zydwz($turl);
        goto rtxls;
        nTzrg:
        global $_W;
        goto NJctq;
        NJctq:
        $cfg = $this->module['config'];
        goto gvvLf;
        rtxls:
        return $url;
        goto ADCgF;
        ADCgF:
    }
    public function getgoodsid($url)
    {
        goto KFpvj;
        qs1CL:
        $goodsid = $this->Text_qzj($str, 'itemId%3D', '%26');
        goto k3tLX;
        dzR5h:
        ThV9x:
        goto XjX0f;
        EH1Jx:
        $goodsid = $this->Text_qzj($str, '&id=', '&');
        goto N4bQH;
        mwme2:
        aGKhZ:
        goto mLg2M;
        uiYyO:
        if (!empty($goodsid)) {
            goto XAaiC;
        }
        goto qs1CL;
        wgcZi:
        VEmO0:
        goto PbIE5;
        C9YQZ:
        $goodsid = $this->Text_qzj($str, 'itemId=', '&');
        goto RzsfU;
        RzsfU:
        KinNA:
        goto uiYyO;
        Dztv2:
        if (!empty($goodsid)) {
            goto wwlwq;
        }
        goto EH1Jx;
        Ouhba:
        if (!empty($goodsid)) {
            goto ThV9x;
        }
        goto Vlf9i;
        FTzr5:
        $goodsid = $this->Text_qzj($str, '?id=', '&');
        goto Dztv2;
        mLg2M:
        if (!empty($goodsid)) {
            goto VEmO0;
        }
        goto lX57l;
        pJe4i:
        return $goodsid;
        goto y3SO5;
        N4bQH:
        wwlwq:
        goto Ouhba;
        k3tLX:
        XAaiC:
        goto pJe4i;
        FRyTX:
        $goodsid = $this->Text_qzj($str, 'com/i', '.htm');
        goto mwme2;
        KFpvj:
        $str = $url;
        goto FTzr5;
        lX57l:
        $goodsid = $this->Text_qzj($str, 'itemid=', '&');
        goto wgcZi;
        PbIE5:
        if (!empty($goodsid)) {
            goto KinNA;
        }
        goto C9YQZ;
        Vlf9i:
        $goodsid = $this->Text_qzj($str, 'itemId:', ',');
        goto dzR5h;
        XjX0f:
        if (!empty($goodsid)) {
            goto aGKhZ;
        }
        goto wv5vb;
        wv5vb:
        $url = $this->Text_qzj($str, 'url = \'', '\';');
        goto FRyTX;
        y3SO5:
    }
    public function hqgoodsid($url)
    {
        goto J4vDR;
        T3Dj8:
        $str = str_replace('"', '', $str);
        goto SvXRp;
        zWVfs:
        $goodsid = $this->Text_qzj($str, '&id=', '&');
        goto X4yjA;
        XMhZ7:
        NySeA:
        goto BWNpT;
        chM3w:
        file_put_contents(IA_ROOT . '/addons/tiger_newhu/log.txt', '
' . json_encode($goodsid), FILE_APPEND);
        goto DZNCQ;
        TpLrB:
        $goodsid = $this->Text_qzj($str, 'com/i', '.htm');
        goto chM3w;
        atWg2:
        return $goodsid;
        goto UWIo4;
        BWNpT:
        if (!empty($goodsid)) {
            goto iwgCd;
        }
        goto lttcZ;
        X4yjA:
        p7RHk:
        goto cfR8b;
        hfbc6:
        $goodsid = $this->Text_qzj($str, '?id=', '&');
        goto rIFFc;
        rIFFc:
        if (!empty($goodsid)) {
            goto p7RHk;
        }
        goto zWVfs;
        J4vDR:
        $str = file_get_contents($url);
        goto T3Dj8;
        lttcZ:
        $url = $this->Text_qzj($str, 'url = \'', '\';');
        goto TpLrB;
        DZNCQ:
        iwgCd:
        goto atWg2;
        SvXRp:
        file_put_contents(IA_ROOT . '/addons/tiger_newhu/log.txt', '
' . $str, FILE_APPEND);
        goto hfbc6;
        DFTYL:
        $goodsid = $this->Text_qzj($str, 'itemId:', ',');
        goto XMhZ7;
        cfR8b:
        if (!empty($goodsid)) {
            goto NySeA;
        }
        goto DFTYL;
        UWIo4:
    }
    public function Text_qzj($Text, $Front, $behind)
    {
        goto PjsVV;
        j6zss:
        $temp = mb_substr($Text, $t1, strlen($Text) - $t1);
        goto DADg_;
        WTm1F:
        KDn17:
        goto j6zss;
        ZTkie:
        if (!($t2 == FALSE)) {
            goto jemNa;
        }
        goto gmZdI;
        vrQor:
        if ($t1 == FALSE) {
            goto NB1M_;
        }
        goto Ujfry;
        SzLUc:
        return mb_substr($temp, 0, $t2);
        goto yq5aI;
        aAgag:
        jemNa:
        goto SzLUc;
        Ujfry:
        $t1 = $t1 - 1 + strlen($Front);
        goto V9aQl;
        DADg_:
        $t2 = mb_strpos($temp, $behind);
        goto ZTkie;
        V9aQl:
        goto KDn17;
        goto Nn0vJ;
        Nn0vJ:
        NB1M_:
        goto kG0fH;
        kG0fH:
        return '';
        goto WTm1F;
        PjsVV:
        $t1 = mb_strpos('.' . $Text, $Front);
        goto vrQor;
        gmZdI:
        return '';
        goto aAgag;
        yq5aI:
    }
    function gstr($str)
    {
        goto AJPYm;
        AJPYm:
        $encode = mb_detect_encoding($str, array("ASCII", "UTF-8", "GB2312", "GBK"));
        goto y4OX8;
        DbV70:
        pt6SE:
        goto oyKEL;
        y4OX8:
        if (!(!$encode == 'UTF-8')) {
            goto pt6SE;
        }
        goto ibXwC;
        oyKEL:
        return $str;
        goto NLzsJ;
        ibXwC:
        $str = iconv('UTF-8', $encode, $str);
        goto DbV70;
        NLzsJ:
    }
    public function ewm($url)
    {
        goto iJmeY;
        RpK1m:
        $errorCorrectionLevel = 'L';
        goto lI0nl;
        vSgFt:
        exit;
        goto CBhIg;
        iJmeY:
        include 'phpqrcode.php';
        goto GG0xA;
        lI0nl:
        $matrixPointSize = '4';
        goto RseDi;
        GG0xA:
        $value = $url;
        goto RpK1m;
        RseDi:
        QRcode::png($value, false, $errorCorrectionLevel, $matrixPointSize);
        goto vSgFt;
        CBhIg:
    }
    public function sendNews($openid, $text)
    {
        goto EFtZV;
        hd4sN:
        $url = "https://api.weixin.qq.com/cgi-bin/message/custom/send?access_token={$access_token}";
        goto Psmmv;
        Psmmv:
        $ret = ihttp_request($url, $result);
        goto xYjWW;
        Lv3zv:
        $access_token = $this->getAccessToken();
        goto hd4sN;
        B7UDj:
        $custom = array("touser" => $openid, "msgtype" => "news", "news" => array("articles" => array(array("title" => urlencode('晒单奖励提醒'), "description" => urlencode($text), "url" => $url, "picurl" => ""))));
        goto p0tzj;
        xYjWW:
        return $ret;
        goto VGdL0;
        NRm_q:
        $url = $_W['siteroot'] . str_replace('./', 'app/', $this->createMobileurl('index'));
        goto B7UDj;
        EFtZV:
        global $_W, $_GPC;
        goto NRm_q;
        p0tzj:
        $result = urldecode(json_encode($custom));
        goto Lv3zv;
        VGdL0:
    }
    public function postText($openid, $text)
    {
        goto WW48j;
        WW48j:
        $post = '{"touser":"' . $openid . '","msgtype":"text","text":{"content":"' . $text . '"}}';
        goto imY0h;
        vTKnH:
        return $ret;
        goto YUrTA;
        imY0h:
        $ret = $this->postRes($this->getAccessToken(), $post);
        goto vTKnH;
        YUrTA:
    }
    private function postRes($access_token, $data)
    {
        goto jfgj4;
        wdNNS:
        return $content['errcode'];
        goto MrvTq;
        j4Tj4:
        load()->func('communication');
        goto yxs_A;
        yxs_A:
        $ret = ihttp_request($url, $data);
        goto QmTcY;
        jfgj4:
        $url = "https://api.weixin.qq.com/cgi-bin/message/custom/send?access_token={$access_token}";
        goto j4Tj4;
        QmTcY:
        $content = @json_decode($ret['content'], true);
        goto wdNNS;
        MrvTq:
    }
    private function getAccessToken()
    {
        goto udz4p;
        j4yAW:
        $acid = $_W['acid'];
        goto fCt5h;
        udz4p:
        global $_W;
        goto wRZni;
        wRZni:
        load()->model('account');
        goto j4yAW;
        fCt5h:
        if (!empty($acid)) {
            goto Dl3f8;
        }
        goto cr8b9;
        uVKAy:
        Dl3f8:
        goto XXBeh;
        Oj7qX:
        return $token;
        goto bM2Zy;
        cr8b9:
        $acid = $_W['uniacid'];
        goto uVKAy;
        XXBeh:
        include IA_ROOT . '/addons/tiger_newhu/wxtoken.php';
        goto Oj7qX;
        bM2Zy:
    }
    public function createRule($kword, $pid)
    {
        goto roPDi;
        fqgsd:
        pdo_insert('rule', $rule);
        goto Fzs1A;
        Fzs1A:
        unset($rule['name']);
        goto K8wap;
        roPDi:
        global $_W;
        goto ZBvhZ;
        dZGls:
        pdo_insert('rule_keyword', $rule);
        goto n6K8D;
        T_BZ4:
        $rule['content'] = $kword;
        goto dZGls;
        n6K8D:
        file_put_contents(IA_ROOT . '/addons/tiger_newhu/log.txt', '
 old:' . json_encode($pid . '----' . $rule['rid']), FILE_APPEND);
        goto WUavS;
        WUavS:
        pdo_update($this->modulename . '_poster', array("rid" => $rule['rid']), array("id" => $pid));
        goto j2qL0;
        ZBvhZ:
        $rule = array("uniacid" => $_W['uniacid'], "name" => $this->modulename, "module" => $this->modulename, "status" => 1, "displayorder" => 254);
        goto fqgsd;
        eyDp1:
        $rule['rid'] = pdo_insertid();
        goto T_BZ4;
        K8wap:
        $rule['type'] = 1;
        goto eyDp1;
        j2qL0:
    }
    public function get_device_type()
    {
        goto USJtC;
        AoAJB:
        $type = 'ios';
        goto L2f8X;
        vcNK6:
        v7O6Z:
        goto D6zcE;
        vQUtc:
        $type = 'android';
        goto eem0R;
        D6zcE:
        return $type;
        goto GQXw_;
        eem0R:
        if (!(strpos($agent, 'iphone') || strpos($agent, 'ipad'))) {
            goto YpX5A;
        }
        goto AoAJB;
        L2f8X:
        YpX5A:
        goto Xnkfz;
        Xnkfz:
        if (!strpos($agent, 'android')) {
            goto v7O6Z;
        }
        goto w3JGd;
        w3JGd:
        $type = 'android';
        goto vcNK6;
        USJtC:
        $agent = strtolower($_SERVER['HTTP_USER_AGENT']);
        goto vQUtc;
        GQXw_:
    }
    public function gettaogoods($numid, $api)
    {
        goto i09z4;
        nyjV4:
        $resp = json_decode(json_encode($resp), TRUE);
        goto IQ6D0;
        rskol:
        $secretKey = $api['tksecretKey'];
        goto t47L9;
        pa0SD:
        $c->secretKey = $secretKey;
        goto GnVZ0;
        dY0BU:
        if (!empty($appkey)) {
            goto wG90i;
        }
        goto QRgLQ;
        t47L9:
        wG90i:
        goto r4FYv;
        zIguE:
        $appkey = $api['appkey'];
        goto ywGUV;
        r4FYv:
        $c->appkey = $appkey;
        goto pa0SD;
        GnVZ0:
        $req = new TbkItemInfoGetRequest();
        goto wF8Q1;
        W_dC5:
        return $arr;
        goto O8swc;
        dXqgx:
        $resp = $c->execute($req);
        goto nyjV4;
        QRgLQ:
        $appkey = $api['tkAppKey'];
        goto rskol;
        IQ6D0:
        $arr = $resp['results']['n_tbk_item'];
        goto W_dC5;
        wF8Q1:
        $req->setFields('num_iid,title,pict_url,small_images,reserve_price,zk_final_price,user_type,provcity,item_url,seller_id,volume,nick,shop_dsr,ratesum,i_rfd_rate,h_good_rate,h_pay_rate30');
        goto xTgmW;
        ywGUV:
        $secretKey = $api['secretKey'];
        goto dY0BU;
        NwPrB:
        $req->setNumIids($numid);
        goto dXqgx;
        i09z4:
        $c = new TopClient();
        goto zIguE;
        xTgmW:
        $req->setPlatform('1');
        goto NwPrB;
        O8swc:
    }
    public function goodlist($key, $pid, $page)
    {
        goto S6TKp;
        bgznK:
        $resp = json_decode(json_encode($resp), TRUE);
        goto ojhKz;
        nByjN:
        $req->setPageNo($page);
        goto TKXLw;
        gkebZ:
        $req->setQ($key);
        goto nByjN;
        ojhKz:
        $goods = $resp['results']['tbk_coupon'];
        goto quK5E;
        ZC2iM:
        $c->appkey = $api['appkey'];
        goto NtRG_;
        hk817:
        $c = new TopClient();
        goto ZC2iM;
        NtRG_:
        $c->secretKey = $api['secretKey'];
        goto kA2v8;
        jkUAx:
        return $list;
        goto rEZ56;
        XP61b:
        $api = taobaopp($tiger);
        goto hk817;
        I3m9F:
        $resp = $c->execute($req);
        goto bgznK;
        SR123:
        $req->setPageSize('20');
        goto gkebZ;
        j3XY8:
        $req->setPlatform('2');
        goto SR123;
        S6TKp:
        require_once IA_ROOT . '/addons/tiger_newhu/inc/sdk/getpic.php';
        goto XP61b;
        TKXLw:
        $req->setPid($pid);
        goto I3m9F;
        a80j3:
        M4K1a:
        goto jkUAx;
        quK5E:
        foreach ($goods as $k => $v) {
            goto E6h2W;
            Yv7Nd:
            $list[$k]['num_iid'] = $v['num_iid'];
            goto D58hF;
            uRa5m:
            $list[$k]['pic_url'] = $v['pict_url'];
            goto ZMPLr;
            mJF3n:
            H13K4:
            goto Hy0XF;
            f1O7K:
            $list[$k]['org_price'] = $v['zk_final_price'];
            goto uRa5m;
            E6h2W:
            $list[$k]['title'] = $v['title'];
            goto NU0nC;
            OWoUY:
            $list[$k]['small_images'] = $v['small_images']['string'];
            goto mn5UY;
            ZMPLr:
            $list[$k]['shop_title'] = $v['shop_title'];
            goto OvjoM;
            KGuCa:
            $list[$k]['item_url'] = $v['item_url'];
            goto OWoUY;
            Q3v0h:
            $list[$k]['coupons_price'] = $matches[2][0];
            goto Zxpvj;
            n8kQv:
            $list[$k]['nick'] = $v['nick'];
            goto bb9B2;
            YZgoM:
            $list[$k]['coupons_end'] = $v['coupon_end_time'];
            goto liUud;
            GqryO:
            $list[$k]['coupons_total'] = $v['coupon_total_count'];
            goto KGuCa;
            mn5UY:
            $list[$k]['pic_url'] = $v['pict_url'];
            goto mJF3n;
            D58hF:
            $list[$k]['url'] = $v['coupon_click_url'];
            goto YZgoM;
            OvjoM:
            $list[$k]['tk_rate'] = $v['commission_rate'];
            goto n8kQv;
            bb9B2:
            $list[$k]['coupons_take'] = $v['coupon_remain_count'];
            goto GqryO;
            NU0nC:
            $list[$k]['istmall'] = $v['user_type'];
            goto Yv7Nd;
            liUud:
            preg_match_all('|满([\\d\\.]+).*元减([\\d\\.]+).*元|ism', $v['coupon_info'], $matches);
            goto Q3v0h;
            pn7kH:
            $list[$k]['price'] = $v['zk_final_price'] - $matches[2][0];
            goto f1O7K;
            Zxpvj:
            $list[$k]['goods_sale'] = $v['volume'];
            goto pn7kH;
            Hy0XF:
        }
        goto a80j3;
        kA2v8:
        $req = new TbkItemCouponGetRequest();
        goto j3XY8;
        rEZ56:
    }
    public function rhy($quan_id, $num_iid, $pid)
    {
        $url = 'https://uland.taobao.com/coupon/edetail?activityId=' . $quan_id . '&itemId=' . $num_iid . '&src=tiger_tiger&pid=' . $pid . '';
        return $url;
    }
    public function rhydx($quan_id, $num_iid, $pid)
    {
        $url = 'https://uland.taobao.com/coupon/edetail?activityId=' . $quan_id . '&itemId=' . $num_iid . '&src=tiger_tiger&pid=' . $pid . '&dx=1';
        return $url;
    }
    private function sendtext($txt, $openid)
    {
        goto e7OOr;
        R0l6M:
        include IA_ROOT . '/addons/tiger_newhu/wxtoken.php';
        goto ZzJFJ;
        iYaZ3:
        u7BLH:
        goto R0l6M;
        BbJvZ:
        if ($acid) {
            goto u7BLH;
        }
        goto MxO9R;
        qAFk9:
        $acid = $_W['account']['acid'];
        goto BbJvZ;
        MxO9R:
        $acid = pdo_fetchcolumn('SELECT acid FROM ' . tablename('account') . ' WHERE uniacid=:uniacid ', array(":uniacid" => $_W['uniacid']));
        goto iYaZ3;
        ZzJFJ:
        $data = $account->sendCustomNotice(array("touser" => $openid, "msgtype" => "text", "text" => array("content" => urlencode($txt))));
        goto qMZ7K;
        qMZ7K:
        return $data;
        goto fZO9T;
        e7OOr:
        global $_W;
        goto qAFk9;
        fZO9T:
    }
    function GetIpLookup($ip = "")
    {
        goto FMdZV;
        xZIZo:
        MKXDm:
        goto Q0gqb;
        LBezG:
        OJ4z2:
        goto to4c7;
        oeSlm:
        MYNU_:
        goto XvgTE;
        Q0gqb:
        return $json;
        goto o764g;
        RiXtQ:
        return false;
        goto bKq7i;
        PoZNC:
        return false;
        goto KGWt3;
        TxaHK:
        $ip = GetIp();
        goto LBezG;
        V7XIP:
        unset($json['ret']);
        goto xZIZo;
        gA_zP:
        preg_match('#\\{.+?\\}#', $res, $jsonMatches);
        goto Bq5CM;
        FMdZV:
        if (!empty($ip)) {
            goto OJ4z2;
        }
        goto TxaHK;
        to4c7:
        $res = @file_get_contents('http://int.dpool.sina.com.cn/iplookup/iplookup.php?format=js&ip=' . $ip);
        goto cmwhi;
        KqgyC:
        return false;
        goto dOi0r;
        KGWt3:
        MbC6d:
        goto f_h4W;
        XvgTE:
        $json['ip'] = $ip;
        goto V7XIP;
        bKq7i:
        goto MKXDm;
        goto oeSlm;
        a2Vkh:
        $jsonMatches = array();
        goto gA_zP;
        Lf0Uo:
        if (isset($json['ret']) && $json['ret'] == 1) {
            goto MYNU_;
        }
        goto RiXtQ;
        cmwhi:
        if (!empty($res)) {
            goto M11ww;
        }
        goto KqgyC;
        f_h4W:
        $json = json_decode($jsonMatches[0], true);
        goto Lf0Uo;
        Bq5CM:
        if (isset($jsonMatches[0])) {
            goto MbC6d;
        }
        goto PoZNC;
        dOi0r:
        M11ww:
        goto a2Vkh;
        o764g:
    }
    function getIp()
    {
        goto n1j9t;
        qHXIS:
        adpYu:
        goto TveJ0;
        D97pn:
        LsqeE:
        goto SYbMB;
        TveJ0:
        $onlineip = getenv('REMOTE_ADDR');
        goto inZ4_;
        inZ4_:
        goto LsqeE;
        goto RYi2h;
        xn_ed:
        q8UXO:
        goto cWBlw;
        SYbMB:
        return $onlineip;
        goto UBSbT;
        RcJwa:
        if (getenv('REMOTE_ADDR') && strcasecmp(getenv('REMOTE_ADDR'), 'unknown')) {
            goto adpYu;
        }
        goto ovYJg;
        n1j9t:
        $onlineip = '';
        goto d1JxE;
        ovYJg:
        if (isset($_SERVER['REMOTE_ADDR']) && $_SERVER['REMOTE_ADDR'] && strcasecmp($_SERVER['REMOTE_ADDR'], 'unknown')) {
            goto WFHIZ;
        }
        goto S190_;
        XF9bS:
        goto LsqeE;
        goto q2340;
        d1JxE:
        if (getenv('HTTP_CLIENT_IP') && strcasecmp(getenv('HTTP_CLIENT_IP'), 'unknown')) {
            goto q8UXO;
        }
        goto pFOSN;
        pFOSN:
        if (getenv('HTTP_X_FORWARDED_FOR') && strcasecmp(getenv('HTTP_X_FORWARDED_FOR'), 'unknown')) {
            goto kvsV2;
        }
        goto RcJwa;
        RYi2h:
        WFHIZ:
        goto jtSqd;
        S190_:
        goto LsqeE;
        goto xn_ed;
        ZWbeR:
        $onlineip = getenv('HTTP_X_FORWARDED_FOR');
        goto UnOG3;
        jtSqd:
        $onlineip = $_SERVER['REMOTE_ADDR'];
        goto D97pn;
        q2340:
        kvsV2:
        goto ZWbeR;
        cWBlw:
        $onlineip = getenv('HTTP_CLIENT_IP');
        goto XF9bS;
        UnOG3:
        goto LsqeE;
        goto qHXIS;
        UBSbT:
    }
    public function sendMsg($openid, $tplmsgid, $data = array(), $data1, $url = "")
    {
        goto ovGgF;
        npNjV:
        if ($_W['account']['level'] == 4) {
            goto eKm7H;
        }
        goto QTAqq;
        ZV1o3:
        goto iCdZ5;
        goto BxtD1;
        sZKRA:
        if (empty($data)) {
            goto er_20;
        }
        goto H5lCb;
        BxtD1:
        eKm7H:
        goto vUSHR;
        r3tpJ:
        if (empty($tplmsgid)) {
            goto lopVQ;
        }
        goto npNjV;
        yx90K:
        er_20:
        goto tgONK;
        H5lCb:
        include IA_ROOT . '/addons/tiger_newhu/wxtoken.php';
        goto r3tpJ;
        NB6qw:
        $this->postText($this->message['from'], $data1);
        goto ZV1o3;
        Su75U:
        $cfg = $this->module['config'];
        goto sZKRA;
        ovGgF:
        global $_W;
        goto Su75U;
        ZuPXP:
        lopVQ:
        goto NB6qw;
        GNmzL:
        iCdZ5:
        goto yx90K;
        vUSHR:
        return $account->sendTplNotice($openid, $tplmsgid, $data, $url);
        goto GNmzL;
        QTAqq:
        goto iCdZ5;
        goto ZuPXP;
        tgONK:
    }
    public function sendMsg1($openid, $tplmsgid, $data = array(), $data1, $url = "")
    {
        goto XheUP;
        WLgjK:
        include IA_ROOT . '/addons/tiger_newhu/wxtoken.php';
        goto hjyQm;
        hjyQm:
        return $account->sendTplNotice($openid, $tplmsgid, $data, $url);
        goto WXr8J;
        XheUP:
        global $_W;
        goto KpQ0Z;
        KpQ0Z:
        $cfg = $this->module['config'];
        goto WLgjK;
        WXr8J:
    }
    public function mbmsg($openid, $mb, $mbid, $url = "", $fans, $orderid, $cfg = "", $valuedata = "")
    {
        goto OqG7q;
        A3IMs:
        $mb['remark'] = str_replace('#订单号#', $orderid, $mb['remark']);
        goto jQb3M;
        HvQZw:
        $tp_color1 = unserialize($mb['zjcolor']);
        goto J_ruL;
        s24lX:
        Hxh3w:
        goto HvQZw;
        YH9RE:
        $mb['remark'] = str_replace('#昵称#', $fans['nickname'], $mb['remark']);
        goto A3IMs;
        HAvu8:
        $tp_value1 = str_replace('#订单号#', $orderid, $tp_value1);
        goto Jw_JT;
        Jw_JT:
        if (empty($valuedata)) {
            goto Hxh3w;
        }
        goto j1TBb;
        s1lYd:
        $tp_value1 = str_replace('#手机号#', $valuedata['tel'], $tp_value1);
        goto s24lX;
        ZZhjm:
        $tplist1 = array("first" => array("value" => $mb['first'], "color" => $mb['firstcolor']));
        goto Whv0b;
        xpyy4:
        $tp_value1 = unserialize($mb['zjvalue']);
        goto qqQ0F;
        Whv0b:
        foreach ($tp_value1 as $key => $value) {
            goto tOVIJ;
            TxMwY:
            goto MvQuw;
            goto bwhE0;
            Tc4qt:
            $tplist1['keyword' . $key] = array("value" => $value, "color" => $tp_color1[$key]);
            goto hSVmY;
            hSVmY:
            MvQuw:
            goto YmAdS;
            bwhE0:
            iQHXd:
            goto Tc4qt;
            tOVIJ:
            if (!empty($value)) {
                goto iQHXd;
            }
            goto TxMwY;
            YmAdS:
        }
        goto h8Emk;
        h8Emk:
        nNokp:
        goto i6per;
        OqG7q:
        global $_W;
        goto xpyy4;
        STEUU:
        $mb['first'] = str_replace('#订单号#', $orderid, $mb['first']);
        goto ZZhjm;
        J_ruL:
        $mb['first'] = str_replace('#时间#', date('Y-m-d H:i:s', time()), $mb['first']);
        goto w1R_9;
        w1R_9:
        $mb['first'] = str_replace('#昵称#', $fans['nickname'], $mb['first']);
        goto STEUU;
        aqHsX:
        $tp_value1 = str_replace('#微信号#', $valuedata['weixin'], $tp_value1);
        goto s1lYd;
        xAr07:
        $msg = $this->sendMsg1($openid, $mbid, $tplist1, '', $url);
        goto Zy0va;
        j1TBb:
        $tp_value1 = str_replace('#提现金额#', $valuedata['rmb'], $tp_value1);
        goto uG03E;
        q_rf2:
        $tp_value1 = str_replace('#昵称#', $fans['nickname'], $tp_value1);
        goto HAvu8;
        qqQ0F:
        $tp_value1 = str_replace('#时间#', date('Y-m-d H:i:s', time()), $tp_value1);
        goto q_rf2;
        uG03E:
        $tp_value1 = str_replace('#提现账号#', $valuedata['txzhanghao'], $tp_value1);
        goto aqHsX;
        i6per:
        $mb['remark'] = str_replace('#时间#', date('Y-m-d H:i:s', time()), $mb['remark']);
        goto YH9RE;
        Zy0va:
        return $msg;
        goto mIUL2;
        jQb3M:
        $tplist1['remark'] = array("value" => $mb['remark'], "color" => $mb['remarkcolor']);
        goto xAr07;
        mIUL2:
    }
    function post_txhb($cfg, $openid, $dtotal_amount, $desc, $dmch_billno)
    {
        goto lDf1I;
        XG9M1:
        if (strtolower($code) == 'success' && strtolower($result) == 'success') {
            goto cFF8B;
        }
        goto vMlJz;
        TlG6i:
        $ret['code'] = 0;
        goto sqJxi;
        cmBMa:
        $dtotal = $dtotal_amount / 100;
        goto j8swt;
        W6niw:
        N1Agp:
        goto YRE5f;
        YJLYJ:
        gafK7:
        goto hjvsK;
        bVu6V:
        $pars['remark'] = '来自' . $cfg['copyright'] . '的红包';
        goto OVho9;
        CozHS:
        $pars['client_ip'] = $cfg['client_ip'];
        goto ZUIAZ;
        Xon2p:
        YMc32:
        goto OeiFj;
        wSUG4:
        $result = $xpath->evaluate('string(//xml/result_code)');
        goto XG9M1;
        YKU19:
        $pars['nonce_str'] = random(32);
        goto sQBnv;
        fRhKo:
        $ret['message'] = '3error3';
        goto P5DfH;
        I5dAI:
        $ret['code'] = 0;
        goto qGRsK;
        fsm8P:
        $pars['min_value'] = $dtotal_amount;
        goto Bv_Qw;
        UiEcj:
        $fans = mc_fetch($_W['openid']);
        goto cmBMa;
        KFaMP:
        $xpath = new DOMXPath($dom);
        goto J0HIw;
        ZUIAZ:
        $pars['act_name'] = '兑换红包';
        goto bVu6V;
        eSH3D:
        qKgBr:
        goto KFaMP;
        KG8l4:
        $ret['dissuccess'] = 0;
        goto AVstZ;
        lFpGA:
        goto YMc32;
        goto eSH3D;
        BDiCI:
        if (!empty($dmch_billno)) {
            goto gafK7;
        }
        goto nDL2z;
        kZ6X1:
        $ret['message'] = $error;
        goto Y7QLG;
        thBOy:
        $resp = ihttp_request($url, $xml, $extras);
        goto quDNr;
        A7WcY:
        $procResult = null;
        goto thBOy;
        hjvsK:
        $root = IA_ROOT . '/attachment/tiger_newhu/cert/' . $_W['uniacid'] . '/';
        goto b1cxk;
        P5DfH:
        return $ret;
        goto lFpGA;
        InJ6K:
        $string1 .= "key={$cfg['apikey']}";
        goto t2Am_;
        lDf1I:
        global $_W;
        goto nMos4;
        hmpM3:
        $ret['code'] = -2;
        goto UCyA6;
        d1Q8d:
        exit;
        goto nGhDa;
        EJPlu:
        $xml = '<?xml version="1.0" encoding="utf-8"?>' . $resp['content'];
        goto rfAMy;
        qGRsK:
        $ret['message'] = 'success';
        goto L0tQh;
        AtX6I:
        FUcky:
        goto KXeTn;
        b1cxk:
        $ret = array();
        goto I5dAI;
        s9Kgw:
        $extras = array();
        goto CIguP;
        fQdyW:
        $pars['total_amount'] = $dtotal_amount;
        goto fsm8P;
        i6saH:
        $pars['nick_name'] = $cfg['copyright'];
        goto sY0Vf;
        KXeTn:
        $procResult = $resp['message'];
        goto PNy1a;
        rfAMy:
        $dom = new DOMDocument();
        goto hDScH;
        ydoOZ:
        $pars['mch_id'] = $cfg['mchid'];
        goto sx_DD;
        OeiFj:
        goto N1Agp;
        goto AtX6I;
        jmMA6:
        goto WMqBM;
        goto sxdxU;
        tfx6Q:
        return $ret;
        goto rG6q8;
        AVstZ:
        $ret['message'] = '余额不足';
        goto tvwZH;
        quDNr:
        if (is_error($resp)) {
            goto FUcky;
        }
        goto EJPlu;
        nMos4:
        load()->model('mc');
        goto dtABI;
        Y1O7G:
        load()->func('communication');
        goto A7WcY;
        vMlJz:
        $error = $xpath->evaluate('string(//xml/err_code_des)');
        goto hmpM3;
        roOUE:
        $extras['CURLOPT_SSLCERT'] = $root . 'apiclient_cert.pem';
        goto dbNNs;
        rG6q8:
        WMqBM:
        goto Xon2p;
        jbEYC:
        $ret['code'] = -1;
        goto KG8l4;
        sx_DD:
        $pars['wxappid'] = $cfg['appid'];
        goto i6saH;
        kYsYL:
        $ret['message'] = 'success';
        goto tfx6Q;
        aHxCx:
        $pars['total_num'] = 1;
        goto IMHjB;
        sqJxi:
        $ret['dissuccess'] = 1;
        goto kYsYL;
        GUgaG:
        $pars = array();
        goto YKU19;
        IMHjB:
        $pars['wishing'] = '提现红包成功!';
        goto CozHS;
        j8swt:
        if (!($dtotal > $fans['credit2'])) {
            goto rrXW3;
        }
        goto jbEYC;
        L0tQh:
        $url = 'https://api.mch.weixin.qq.com/mmpaymkttransfers/sendredpack';
        goto GUgaG;
        jp1ZR:
        $string1 = '';
        goto K7KTt;
        K7KTt:
        foreach ($pars as $k => $v) {
            $string1 .= "{$k}={$v}&";
            QoNib:
        }
        goto GV8_4;
        nGhDa:
        rrXW3:
        goto fJobi;
        dtABI:
        if (empty($desc)) {
            goto vDWO6;
        }
        goto UiEcj;
        Y7QLG:
        return $ret;
        goto jmMA6;
        PNy1a:
        $ret['code'] = -1;
        goto USiZH;
        Bv_Qw:
        $pars['max_value'] = $dtotal_amount;
        goto aHxCx;
        KdNhX:
        $ret['message'] = $procResult;
        goto Tph7b;
        USiZH:
        $ret['dissuccess'] = 0;
        goto KdNhX;
        J0HIw:
        $code = $xpath->evaluate('string(//xml/return_code)');
        goto wSUG4;
        UCyA6:
        $ret['dissuccess'] = 0;
        goto kZ6X1;
        t2Am_:
        $pars['sign'] = strtoupper(md5($string1));
        goto oRiWB;
        nDL2z:
        $dmch_billno = random(10) . date('Ymd') . random(3);
        goto YJLYJ;
        sxdxU:
        cFF8B:
        goto TlG6i;
        UOodq:
        $ret['code'] = -3;
        goto Wzdnk;
        oRiWB:
        $xml = array2xml($pars);
        goto s9Kgw;
        fJobi:
        vDWO6:
        goto BDiCI;
        Tph7b:
        return $ret;
        goto W6niw;
        JWYlK:
        $pars['re_openid'] = $openid;
        goto fQdyW;
        sQBnv:
        $pars['mch_billno'] = $dmch_billno;
        goto ydoOZ;
        sY0Vf:
        $pars['send_name'] = $cfg['copyright'];
        goto JWYlK;
        dbNNs:
        $extras['CURLOPT_SSLKEY'] = $root . 'apiclient_key.pem';
        goto Y1O7G;
        Wzdnk:
        $ret['dissuccess'] = 0;
        goto fRhKo;
        hDScH:
        if ($dom->loadXML($xml)) {
            goto qKgBr;
        }
        goto UOodq;
        GV8_4:
        Rdw_3:
        goto InJ6K;
        tvwZH:
        return $ret;
        goto d1Q8d;
        CIguP:
        $extras['CURLOPT_CAINFO'] = $root . 'rootca.pem';
        goto roOUE;
        OVho9:
        ksort($pars, SORT_STRING);
        goto jp1ZR;
        YRE5f:
    }
    public function post_qyfk($cfg, $openid, $amount, $desc, $dmch_billno)
    {
        goto jvJWA;
        X6UYh:
        OGUJ1:
        goto O8H9F;
        OjP47:
        K3OO_:
        goto PEOYF;
        dKwj_:
        $procResult = $resp['message'];
        goto iy_Ys;
        EWtlX:
        $pars['spbill_create_ip'] = $cfg['client_ip'];
        goto VWqhY;
        j8mKH:
        $ret['code'] = -3;
        goto Hz5rS;
        fUI2I:
        goto n8qqo;
        goto Wmtmx;
        YnQw4:
        $ret['dissuccess'] = 0;
        goto dgth0;
        iyjyH:
        $pars['mchid'] = $cfg['mchid'];
        goto KxHVw;
        Rk6wL:
        $ret['message'] = 'success';
        goto cjDiR;
        Qg9Af:
        return $ret;
        goto WLImu;
        u7nnK:
        $dtotal = $amount / 100;
        goto d3fla;
        XCljW:
        return $ret;
        goto fyLce;
        aOy9a:
        $ret['amount'] = $amount;
        goto GKNSt;
        d3fla:
        if (!($dtotal > $fans['credit2'])) {
            goto P0FHT;
        }
        goto u_UKS;
        zr5q1:
        $pars = array();
        goto DNXgZ;
        xUZ90:
        return $ret;
        goto yTGq5;
        ZK9eX:
        if (strtolower($code) == 'success' && strtolower($result) == 'success') {
            goto VQ6F3;
        }
        goto s9tFu;
        NCnjN:
        $dom = new DOMDocument();
        goto t0J3M;
        mF3kN:
        $ret = array();
        goto Myi1L;
        QbkXJ:
        $ret['dissuccess'] = 1;
        goto Rk6wL;
        EJcGU:
        $pars['openid'] = $openid;
        goto vXPcG;
        pl7IG:
        if (!empty($dmch_billno)) {
            goto K3OO_;
        }
        goto d7IfU;
        WLImu:
        exit;
        goto gbYr_;
        gbYr_:
        P0FHT:
        goto ND16j;
        a_ReV:
        $string1 = '';
        goto txAep;
        vXPcG:
        $pars['check_name'] = 'NO_CHECK';
        goto jTXys;
        d7IfU:
        $dmch_billno = random(10) . date('Ymd') . random(3);
        goto OjP47;
        dgth0:
        $ret['message'] = '余额不足';
        goto Qg9Af;
        ND16j:
        APHbH:
        goto pl7IG;
        rgZ25:
        $code = $xpath->evaluate('string(//xml/return_code)');
        goto epRxt;
        rFKfP:
        $ret['code'] = -2;
        goto NfUeE;
        GKNSt:
        $url = 'https://api.mch.weixin.qq.com/mmpaymkttransfers/promotion/transfers';
        goto zr5q1;
        jBy6w:
        n8qqo:
        goto SNsXh;
        cjDiR:
        return $ret;
        goto jBy6w;
        p9fZV:
        $xml = array2xml($pars);
        goto mBFOj;
        B_2Y9:
        $xml = '<?xml version="1.0" encoding="utf-8"?>' . $resp['content'];
        goto NCnjN;
        VTKjI:
        $fans = mc_fetch($_W['openid']);
        goto u7nnK;
        azqyb:
        $extras['CURLOPT_SSLCERT'] = $root . 'apiclient_cert.pem';
        goto lV_qm;
        DNXgZ:
        $pars['mch_appid'] = $cfg['appid'];
        goto iyjyH;
        INJDR:
        load()->func('communication');
        goto M49bo;
        mBFOj:
        $extras = array();
        goto AwKAg;
        NfUeE:
        $ret['dissuccess'] = 0;
        goto cWph4;
        t0J3M:
        if ($dom->loadXML($xml)) {
            goto OGUJ1;
        }
        goto j8mKH;
        iy_Ys:
        $ret['code'] = -1;
        goto oPDXq;
        u_UKS:
        $ret['code'] = -1;
        goto YnQw4;
        KxHVw:
        $pars['nonce_str'] = random(32);
        goto TKtdw;
        UxKk3:
        $pars['desc'] = '来自' . $_W['account']['name'] . '的提现';
        goto EWtlX;
        x7KDj:
        fkrr9:
        goto sVQK9;
        Hz5rS:
        $ret['dissuccess'] = 0;
        goto yZvWT;
        xNepZ:
        $ret['message'] = 'success';
        goto aOy9a;
        kwtFM:
        if (is_error($resp)) {
            goto k1mCF;
        }
        goto B_2Y9;
        lV_qm:
        $extras['CURLOPT_SSLKEY'] = $root . 'apiclient_key.pem';
        goto INJDR;
        mEnVT:
        return $ret;
        goto fUI2I;
        xigw0:
        $pars['sign'] = strtoupper(md5($string1));
        goto p9fZV;
        PEOYF:
        $root = IA_ROOT . '/attachment/tiger_newhu/cert/' . $_W['uniacid'] . '/';
        goto mF3kN;
        GNpfD:
        $ret['message'] = '-1:' . $procResult;
        goto xUZ90;
        sVQK9:
        $string1 .= "key={$cfg['apikey']}";
        goto xigw0;
        s9tFu:
        $error = $xpath->evaluate('string(//xml/err_code_des)');
        goto rFKfP;
        Vt2mZ:
        $ret['code'] = 0;
        goto QbkXJ;
        yZvWT:
        $ret['message'] = 'error response';
        goto XCljW;
        dbA_3:
        k1mCF:
        goto dKwj_;
        M49bo:
        $procResult = null;
        goto ksrm0;
        ye0Xo:
        if (empty($desc)) {
            goto APHbH;
        }
        goto VTKjI;
        Wmtmx:
        VQ6F3:
        goto Vt2mZ;
        SNsXh:
        SdXaF:
        goto n_cnP;
        Myi1L:
        $ret['code'] = 0;
        goto xNepZ;
        jvJWA:
        global $_W;
        goto IRpQA;
        AwKAg:
        $extras['CURLOPT_CAINFO'] = $root . 'rootca.pem';
        goto azqyb;
        epRxt:
        $result = $xpath->evaluate('string(//xml/result_code)');
        goto ZK9eX;
        n_cnP:
        goto J38Iv;
        goto dbA_3;
        oPDXq:
        $ret['dissuccess'] = 0;
        goto GNpfD;
        ksrm0:
        $resp = ihttp_request($url, $xml, $extras);
        goto kwtFM;
        txAep:
        foreach ($pars as $k => $v) {
            $string1 .= "{$k}={$v}&";
            G5DnU:
        }
        goto x7KDj;
        VWqhY:
        ksort($pars, SORT_STRING);
        goto a_ReV;
        jTXys:
        $pars['amount'] = $amount;
        goto UxKk3;
        yTGq5:
        J38Iv:
        goto EbnmZ;
        TKtdw:
        $pars['partner_trade_no'] = $dmch_billno;
        goto EJcGU;
        fyLce:
        goto SdXaF;
        goto X6UYh;
        IRpQA:
        load()->model('mc');
        goto ye0Xo;
        cWph4:
        $ret['message'] = '-2:' . $error;
        goto mEnVT;
        O8H9F:
        $xpath = new DOMXPath($dom);
        goto rgZ25;
        EbnmZ:
    }
    public function getAccountLevel()
    {
        goto Qcuk1;
        Qcuk1:
        global $_W;
        goto RPl4Q;
        RPl4Q:
        load()->classs('weixin.account');
        goto PssIv;
        kgfkD:
        $account = $accObj->account;
        goto fadqr;
        PssIv:
        $accObj = WeixinAccount::create($_W['uniacid']);
        goto kgfkD;
        fadqr:
        return $account['level'];
        goto SeKrO;
        SeKrO:
    }
    private function SendSMS($mobile, $content)
    {
        goto X0Kud;
        BJeF3:
        kVE0m:
        goto tBYQ3;
        W_ezC:
        if (empty($config['dyAppKey']) || empty($config['dyAppSecret']) || empty($config['dysms_free_sign_name']) || empty($config['dysms_template_code'])) {
            goto PIxqV;
        }
        goto hYbW3;
        hYbW3:
        include IA_ROOT . '/addons/tiger_newhu/inc/sdk/dayu/TopSdk.php';
        goto MDVrh;
        PInE7:
        e6_LQ:
        goto VTSWx;
        I_7Pq:
        file_put_contents(IA_ROOT . '/addons/tiger_newhu/log.txt', '
 old:' . json_encode($resp), FILE_APPEND);
        goto Y13wo;
        nqJ2X:
        if ($json['code'] == 200) {
            goto V5R0n;
        }
        goto kVCua;
        xkD8b:
        goto q1VQ1;
        goto PInE7;
        fVJdM:
        $c->appkey = $config['dyAppKey'];
        goto TJIas;
        Dle2l:
        return $resp->sub_msg;
        goto xkD8b;
        SrWDW:
        $jhappkey = $config['jhappkey'];
        goto RwO4_;
        PobCz:
        return '短信参数配置不正确，请联系管理员';
        goto OxFpZ;
        bSssI:
        $req->setSmsTemplateCode($config['dysms_template_code']);
        goto x_Qey;
        L8vDJ:
        goto kVE0m;
        goto YFqQL;
        dWfhu:
        V5R0n:
        goto HWmjZ;
        x7sH5:
        $req->setSmsFreeSignName($config['dysms_free_sign_name']);
        goto quAgX;
        RwO4_:
        $jhcode = $config['jhcode'];
        goto onxW7;
        MDVrh:
        $c = new TopClient();
        goto fVJdM;
        fXC_d:
        $req->setSmsType('normal');
        goto x7sH5;
        quAgX:
        $req->setSmsParam($content);
        goto gCG6B;
        OxFpZ:
        KfLwp:
        goto L8vDJ;
        EmV0s:
        $content = $result['error_code'] . $result['reason'];
        goto rqyaI;
        YFqQL:
        B6W2c:
        goto SrWDW;
        onxW7:
        $json = ihttp_get("http://v.juhe.cn/sms/send?mobile={$mobile}&tpl_id={$jhcode}&tpl_value={$content}&key={$jhappkey}");
        goto OxvBo;
        N1yeh:
        return $content;
        goto BJeF3;
        m8qu8:
        goto tjjJB;
        goto dWfhu;
        GkFnt:
        $req = new AlibabaAliqinFcSmsNumSendRequest();
        goto fXC_d;
        gCG6B:
        $req->setRecNum($mobile);
        goto bSssI;
        TJIas:
        $c->secretKey = $config['dyAppSecret'];
        goto GkFnt;
        M4Jmo:
        q1VQ1:
        goto WRB0p;
        l4sid:
        tjjJB:
        goto N1yeh;
        VTSWx:
        return 0;
        goto M4Jmo;
        rqyaI:
        goto zpT2U;
        goto uci9n;
        k9UYY:
        $content = 0;
        goto DFnWi;
        uci9n:
        GffgR:
        goto k9UYY;
        X0Kud:
        $config = $this->module['config'];
        goto V1WYu;
        V1WYu:
        load()->func('communication');
        goto RSRVh;
        x_Qey:
        $resp = $c->execute($req);
        goto I_7Pq;
        OxvBo:
        $result = @json_decode($json['content'], true);
        goto nqJ2X;
        kVCua:
        $content = '接口调用错误.';
        goto m8qu8;
        Q50gQ:
        PIxqV:
        goto PobCz;
        HWmjZ:
        if ($result['error_code'] == 0) {
            goto GffgR;
        }
        goto EmV0s;
        Y13wo:
        if ($resp->result->err_code == 0) {
            goto e6_LQ;
        }
        goto Dle2l;
        RSRVh:
        if ($config['smstype'] == 'juhesj') {
            goto B6W2c;
        }
        goto W_ezC;
        DFnWi:
        zpT2U:
        goto l4sid;
        WRB0p:
        goto KfLwp;
        goto Q50gQ;
        tBYQ3:
    }
    public function doMobileDuibaxf()
    {
        goto frEra;
        jJHow:
        qWoMD:
        goto OomVD;
        ECuF6:
        exit(json_encode(array("status" => "fail", "errorMessage" => "积分不足", "credits" => $request_array['credits'])));
        goto zCjvj;
        FK95f:
        $share = pdo_fetch('select * from ' . tablename('tiger_newhu_share') . " where weid='{$_W['uniacid']}' and id='{$uid}'");
        goto hRC1u;
        jYk2J:
        goto v3YjS;
        goto m2Szo;
        uTwq4:
        pdo_insert($this->modulename . '_dborder', $insert);
        goto FOqxK;
        FOqxK:
        if (pdo_insertid()) {
            goto e4vDR;
        }
        goto MokyN;
        s5TR7:
        rq9tj:
        goto yKyhN;
        zCjvj:
        goto qWoMD;
        goto FcsAu;
        EJT1r:
        VS61k:
        goto JmP4G;
        pC6uz:
        v3YjS:
        goto jJHow;
        xqAoc:
        foreach ($request_array as $key => $val) {
            goto yj0Fx;
            KEIfK:
            if (!(in_array($key, $unsetkeyarr) || strstr($key, '__'))) {
                goto BrUJl;
            }
            goto EgkPz;
            yj0Fx:
            $unsetkeyarr = array("i", "do", "m", "c", "module_status:1", "module_status:tiger_shouquan", "module_status:tiger_newhu", "notice", "state");
            goto KEIfK;
            WoN36:
            RzQY6:
            goto cDsWZ;
            EgkPz:
            unset($request_array[$key]);
            goto iwwUW;
            iwwUW:
            BrUJl:
            goto WoN36;
            cDsWZ:
        }
        goto EJT1r;
        OomVD:
        XKj3v:
        goto w3HzX;
        yKyhN:
        $insert = array("uniacid" => $_W['uniacid'], "uid" => $uid, "bizId" => date('YmdHi') . random(8, 1), "orderNum" => $request_array['orderNum'], "credits" => $request_array['credits'], "params" => $request_array['params'], "type" => $request_array['type'], "ip" => $request_array['ip'], "starttimestamp" => $request_array['timestamp'], "waitAudit" => $request_array['waitAudit'], "actualPrice" => $request_array['actualPrice'], "description" => $request_array['description'], "facePrice" => $request_array['facePrice'], "Audituser" => $request_array['Audituser'], "itemCode" => $request_array['itemCode'], "status" => 0, "createtime" => time());
        goto uTwq4;
        MU10o:
        goto ry6ME;
        goto s5TR7;
        WUWGL:
        $settings = $this->module['config'];
        goto vXRrC;
        MokyN:
        exit(json_encode(array("status" => "fail", "errorMessage" => "系统错误，请重试！", "credits" => $request_array['credits'])));
        goto IYwwj;
        bTW7j:
        $uid = $request_array['uid'];
        goto xqAoc;
        JmP4G:
        file_put_contents(IA_ROOT . '/addons/tiger_newhu/inc/mobile/log.txt', '
 old:' . json_encode($request_array), FILE_APPEND);
        goto I9GVL;
        gwsrl:
        if ($yue > 0) {
            goto vqi3T;
        }
        goto ECuF6;
        FcsAu:
        vqi3T:
        goto HQ9Yc;
        vXRrC:
        $request_array = $_GPC;
        goto bTW7j;
        hRC1u:
        $yue = intval($share['credit1']) - $request_array['credits'];
        goto gwsrl;
        oRnNh:
        if ($updatecredit['error'] == 1) {
            goto tEWwO;
        }
        goto pV9lS;
        ukBoA:
        include 'duiba.php';
        goto p2ssM;
        IYwwj:
        goto XKj3v;
        goto h3QkF;
        GiBQX:
        exit(json_encode(array("status" => "fail", "errorMessage" => $ret, "credits" => $request_array['credits'])));
        goto MU10o;
        wbHgH:
        if (is_array($ret)) {
            goto rq9tj;
        }
        goto GiBQX;
        pV9lS:
        exit(json_encode(array("status" => "fail", "errorMessage" => "扣除{$cfg['hztype']}错误", "credits" => $request_array['credits'])));
        goto jYk2J;
        HQ9Yc:
        $updatecredit = $this->mc_jl($uid, 0, 9, -abs($request_array['credits']), '兑吧兑换' . $request_array['description'], '');
        goto oRnNh;
        h3QkF:
        e4vDR:
        goto FK95f;
        w3HzX:
        ry6ME:
        goto pVl6C;
        frEra:
        global $_W, $_GPC;
        goto ukBoA;
        I9GVL:
        $ret = parseCreditConsume($settings['AppKey'], $settings['appSecret'], $request_array);
        goto wbHgH;
        m2Szo:
        tEWwO:
        goto pFnD0;
        p2ssM:
        $cfg = $this->module['config'];
        goto WUWGL;
        pFnD0:
        exit(json_encode(array("status" => "ok", "errorMessage" => "", "bizId" => $insert['bizId'], "credits" => $yue)));
        goto pC6uz;
        pVl6C:
    }
    public function postgoods($goods, $openid)
    {
        goto zNIyg;
        Gg3oa:
        $acid = $_W['acid'];
        goto JzmD5;
        lwK4I:
        include IA_ROOT . '/addons/tiger_newhu/wxtoken.php';
        goto Ui8yN;
        zNIyg:
        global $_W;
        goto FOTtl;
        Ui8yN:
        $status = $account->sendCustomNotice($message);
        goto cNySW;
        cNySW:
        return $status;
        goto XCXoQ;
        rhbCw:
        $message = array("touser" => trim($openid), "msgtype" => "news", "news" => array("articles" => $response));
        goto Gg3oa;
        Ff3zJ:
        $acid = $_W['uniacid'];
        goto P2Fse;
        JzmD5:
        if (!empty($acid)) {
            goto P2ZgT;
        }
        goto Ff3zJ;
        FOTtl:
        foreach ($goods as $key => $value) {
            goto ZuMCp;
            ZuMCp:
            $viewurl = $_W['siteroot'] . str_replace('./', 'app/', $this->createMobileurl('view', array("itemid" => $value['itemid'])));
            goto CCMl6;
            AC5gK:
            j7O8z:
            goto BabS9;
            CCMl6:
            $response[] = array("title" => urlencode('【券后价:' . $value['itemendprice'] . '】' . $value['itemtitle']), "description" => urlencode($value['itemtitle']), "picurl" => tomedia($value['itemtitle'] . '_100x100.jpg'), "url" => $viewurl);
            goto AC5gK;
            BabS9:
        }
        goto qy_zW;
        P2Fse:
        P2ZgT:
        goto lwK4I;
        qy_zW:
        rRXPs:
        goto rhbCw;
        XCXoQ:
    }
}
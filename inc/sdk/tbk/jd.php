<?php
 goto XvgAC; YX3lS: function gettgw($accesstoken, $unionid, $pidname, $key) { goto ANUlm; goRxE: $arr = jdgetcurl($url); goto asE0t; Bwk5C: return $arr; goto fO8y5; asE0t: $arr = @json_decode($arr, true); goto Bwk5C; ANUlm: $url = "\150\164\164\160\x3a\57\57\153\x75\x2e\164\x69\147\145\x72\x74\x61\x6f\x6b\145\x2e\143\x6f\x6d\x2f\141\x70\x70\57\x69\156\x64\x65\170\x2e\x70\150\x70\x3f\x69\75\x32\x26\143\x3d\145\x6e\164\162\x79\46\x64\157\75\x4a\144\x63\x6a\x70\151\x64\x26\155\x3d\x74\x69\147\x65\x72\x5f\172\x68\141\x6f\163\x68\141\156\147\x26\141\x63\x63\145\163\163\x74\157\x6b\145\x6e\75" . $accesstoken . "\x26\x75\x6e\x69\x6f\x6e\x69\144\75" . $unionid . "\x26\160\151\144\x6e\141\x6d\145\75" . $pidname . "\46\153\145\171\x3d" . $key . ''; goto goRxE; fO8y5: } goto uoLMk; MkW6M: function viewrhy($accesstoken, $couponurl, $goods_id, $unionid, $tgwid) { goto zAmqp; IKWMc: return $zlurl; goto Pixmr; Vlgu7: $zlurl = jdgetcurl($url); goto IKWMc; zAmqp: $url = "\150\x74\x74\160\x3a\x2f\x2f\x6b\165\x2e\164\151\147\145\x72\164\141\157\153\145\56\x63\x6f\x6d\x2f\141\x70\160\57\151\156\144\145\x78\56\160\x68\160\x3f\151\75\62\46\x63\75\145\156\x74\162\x79\x26\144\x6f\x3d\152\x64\x72\150\171\46\155\x3d\164\151\x67\145\162\137\172\150\x61\x6f\163\x68\x61\x6e\147\x26\x61\143\x63\145\x73\163\x74\157\153\x65\156\75" . $accesstoken . "\x26\143\x6f\x75\160\157\156\x75\x72\154\x3d" . urlencode($couponurl) . "\46\x67\157\x6f\x64\x73\x5f\x69\x64\x3d" . $goods_id . "\x26\x75\156\x69\157\x6e\151\x64\75" . $unionid . "\x26\164\147\x77\151\144\x3d" . $tgwid . ''; goto Vlgu7; Pixmr: } goto yq2CX; MFQer: function jdviewzl($jdset, $jdsign, $itemid, $p_id, $jdlm = 0, $discount_link = '') { goto NYvmN; MAPR0: mDGsH: goto p2PB3; c09Bz: if (empty($zl)) { goto Dvr7t; } goto ABOsi; lTGL9: $jdyurl = viewzl($jdsign["\141\x63\x63\x65\163\163\x5f\x74\157\153\145\156"], $itemid, $jdset["\165\156\151\157\x6e\x69\144"], $p_id); goto QIf3c; K9vi1: Dvr7t: goto lTGL9; A9_qg: goto mDGsH; goto K9vi1; p2PB3: return $view; goto EsJ6s; NYvmN: $zl = viewrhy($jdsign["\x61\143\143\x65\163\x73\137\164\157\153\145\156"], $discount_link, $itemid, $jdset["\165\156\x69\157\x6e\151\144"], $p_id); goto cT1MT; ABOsi: $view["\152\x64\x79\165\162\154"] = ''; goto A9_qg; QIf3c: $view["\x6a\144\x79\165\162\154"] = $jdyurl; goto MAPR0; cT1MT: $view["\x6a\144\x72\150\171"] = $zl; goto c09Bz; EsJ6s: } goto MkW6M; XvgAC: function jdgoodslist($jdset, $type, $px, $price1, $price2, $hd, $page, $key, $dlyj, $rate) { goto c_jf2; KvBHX: return $arr; goto EA11u; HGVs2: $arr = jdgetcurl($url); goto J7doy; bKDsz: Yvl9j: goto IJdgm; J7doy: $arr = @json_decode($arr, true); goto KvBHX; zPeak: $url = "\150\164\164\160\x3a\x2f\x2f\154\x61\x6f\150\165\x63\x6d\163\x2e\143\157\155\x2f\152\144\141\x70\151\x2f\x69\x6e\x64\x65\170\x2f\164\x69\x67\145\162\x6c\x69\163\x74\x2e\x68\x74\155\154\77\x6a\x64\x75\151\x64\x3d" . $jduid . "\46\x74\171\160\x65\x3d" . $type . "\x26\x70\x78\x3d" . $px . "\46\x70\x72\x69\x63\145\61\75" . $price1 . "\x26\x70\x72\x69\143\x65\62\75" . $price2 . "\x26\x68\144\x3d" . $hd . "\46\x70\141\147\145\x3d" . $page . "\x26\x6b\145\171\x3d" . $key . "\46\x72\141\x74\145\75" . $rate; goto HGVs2; IJdgm: $jduid = $jdset["\x6a\x64\165\x69\144"]; goto zPeak; c_jf2: if (!empty($page)) { goto Yvl9j; } goto xH9X_; xH9X_: $page = 1; goto bKDsz; EA11u: } goto j8Ukn; dJaYq: function getkeylist($accesstoken, $key, $page, $goods_id) { goto smViq; smViq: $url = "\x68\x74\164\x70\72\57\57\153\x75\56\164\151\147\x65\162\x74\141\157\153\x65\x2e\143\x6f\155\57\x61\160\160\57\151\x6e\144\x65\170\x2e\160\150\160\x3f\151\x3d\62\x26\143\75\x65\x6e\x74\x72\x79\x26\x64\157\x3d\x4a\144\171\x68\163\x70\x63\x78\x26\155\75\x74\x69\147\x65\x72\137\172\x68\x61\x6f\163\150\141\156\147\46\x61\143\143\145\163\163\x74\157\153\x65\156\75" . $accesstoken . "\46\x6b\145\171\75" . $key . "\46\x70\141\x67\145\x3d" . $page . "\x26\x67\x6f\x6f\x64\x73\x5f\x69\x64\75" . $goods_id; goto CHpSE; ypqQO: $arr = @json_decode($arr, true); goto k35HR; k35HR: return $arr; goto cAz5L; CHpSE: $arr = jdgetcurl($url); goto ypqQO; cAz5L: } goto YX3lS; Ziv9M: function getcqview($goods_id, $jduid) { goto GukjO; TWN_f: return $arr; goto rkq8B; INzLd: $arr = @json_decode($arr, true); goto E_Pp1; GukjO: $url = "\x68\x74\164\x70\x3a\x2f\57\153\x75\56\164\x69\147\145\162\164\141\x6f\x6b\x65\x2e\x63\x6f\155\x2f\141\x70\x70\57\151\156\144\x65\170\x2e\x70\x68\160\77\x69\x3d\x32\x26\x63\x3d\145\x6e\x74\162\x79\x26\144\157\75\107\145\x74\153\x68\166\x69\x65\167\x26\155\75\164\151\x67\145\x72\137\x7a\150\x61\157\x73\x68\141\x6e\x67\46\147\x6f\x6f\144\163\137\x69\144\x3d" . $goods_id . "\x26\x6a\144\x75\x69\144\75" . $jduid; goto ZlLZ8; E_Pp1: $arr = $arr["\162\x65\163\x75\x6c\164"][0]; goto TWN_f; ZlLZ8: $arr = jdgetcurl($url); goto INzLd; rkq8B: } goto y0oaB; yM_xc: function getkhorder($accesstoken, $unionid, $time, $appkey, $appsecret, $page) { goto DeJNP; ugGoM: R2uCZ: goto htH60; DeJNP: $url = "\x68\x74\x74\x70\x3a\57\57\x6b\165\x2e\x74\151\147\145\x72\164\x61\x6f\153\x65\56\x63\x6f\155\57\141\x70\x70\x2f\x69\x6e\144\x65\170\56\160\150\160\77\151\x3d\62\46\143\75\x65\x6e\x74\x72\171\x26\x64\157\75\x4a\x64\153\150\x6f\162\144\x65\x72\46\155\75\x74\x69\147\145\162\x5f\172\x68\x61\157\x73\x68\141\156\x67\46\x61\x63\143\145\x73\x73\x74\157\153\145\156\75" . $accesstoken . "\46\165\x6e\x69\x6f\156\x69\144\75" . $unionid . "\x26\x74\x69\x6d\x65\75" . $time . "\46\141\x70\x70\153\145\171\x3d" . $appkey . "\46\x61\160\x70\163\145\143\162\145\x74\x3d" . $appsecret . "\46\x70\141\147\x65\x3d" . $page; goto xJNBt; y22o0: if (!empty($arrres)) { goto R2uCZ; } goto FIpAJ; htH60: return $arrres; goto PQlh2; xJNBt: $arr = jdgetcurl($url); goto GpsKm; DJqDZ: $arrres = $arr["\144\x61\164\141"]; goto y22o0; GpsKm: $arr = @json_decode($arr, true); goto DJqDZ; FIpAJ: $arrres = $arr; goto ugGoM; PQlh2: } goto Ziv9M; yq2CX: function viewzl($accesstoken, $goods_id, $unionid, $tgwid) { goto jSJFB; jSJFB: $url = "\150\164\x74\160\x3a\x2f\x2f\x6b\165\x2e\x74\x69\x67\145\162\x74\141\x6f\x6b\145\x2e\143\x6f\x6d\x2f\141\160\x70\x2f\x69\156\144\x65\x78\x2e\160\150\x70\77\x69\x3d\x32\46\143\x3d\x65\x6e\164\162\171\x26\144\x6f\75\147\x6f\157\144\163\165\x72\154\46\x6d\75\x74\x69\147\145\162\137\x7a\150\141\157\163\150\x61\156\147\x26\x61\x63\x63\145\163\163\x74\157\153\x65\x6e\x3d" . $accesstoken . "\x26\x67\x6f\157\144\163\137\151\144\x3d" . $goods_id . "\46\x75\156\x69\x6f\156\x69\144\75" . $unionid . "\46\x74\x67\x77\151\x64\75" . $tgwid . ''; goto a3qlB; a3qlB: $zlurl = jdgetcurl($url); goto Izd67; Izd67: return $zlurl; goto IPt2C; IPt2C: } goto dJaYq; uoLMk: function getorderlist($accesstoken, $unionid, $key, $time) { goto Nm322; Nm322: $url = "\x68\x74\164\160\72\57\x2f\153\x75\56\164\x69\x67\x65\x72\x74\x61\157\153\145\x2e\x63\157\155\57\x61\160\x70\x2f\151\156\x64\145\x78\56\x70\150\160\x3f\x69\x3d\x32\x26\143\x3d\x65\156\x74\162\171\46\x64\157\x3d\x4a\144\x6f\x72\144\x65\x72\154\x69\163\x74\x26\155\75\x74\x69\x67\145\162\x5f\172\150\x61\x6f\x73\150\141\156\147\46\x61\143\x63\145\x73\163\164\157\x6b\x65\x6e\x3d" . $accesstoken . "\x26\x75\156\x69\157\x6e\151\x64\x3d" . $unionid . "\x26\x6b\x65\171\75" . $key . "\x26\x74\x69\155\x65\75" . $time . ''; goto Y05dN; SQ3r3: $arr = @json_decode($arr, true); goto z801A; z801A: $arr = $arr["\144\141\x74\x61"]; goto W12F4; Y05dN: $arr = jdgetcurl($url); goto SQ3r3; W12F4: return $arr; goto OKrFF; OKrFF: } goto yM_xc; j8Ukn: function jdview($itemid) { goto e2AUY; rNrii: return $arr; goto PzubR; CTd1M: $arr = @json_decode($arr, true); goto JajxF; JajxF: $arr = $arr["\x64\141\x74\141"][0]; goto rNrii; I7GRP: $arr = jdgetcurl($url); goto CTd1M; e2AUY: $url = "\150\x74\x74\x70\x3a\57\x2f\154\x61\157\x68\x75\x63\155\x73\x2e\x63\x6f\x6d\x2f\x6a\144\141\160\151\x2f\x69\x6e\144\x65\170\57\x74\151\x67\x65\x72\x6c\151\x73\164\56\x68\x74\155\154\x3f\x6a\x64\x75\x69\x64\75" . $jduid . "\x26\x69\x74\145\155\x69\144\x3d" . $itemid; goto I7GRP; PzubR: } goto MFQer; y0oaB: function jdgetcurl($url, $data = '') { goto Pjkk4; LMQ39: curl_setopt($ch, CURLOPT_HTTPHEADER, $headers); goto HlIHi; iPPG3: 　　curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0); goto It8Km; PaFbs: curl_setopt($ch, CURLOPT_TIMEOUT, 60); goto qYHJF; I_9ep: return $rtn; goto BgCDx; HlIHi: $rtn = curl_exec($ch); goto upnDa; sPeTV: curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE); goto LMQ39; iquDw: FWK7t: goto sPeTV; Pjkk4: $headers = array("\x43\x6f\156\x74\145\x6e\x74\x2d\x54\x79\x70\145\x3a\x20\141\x70\160\154\151\x63\x61\164\151\157\x6e\57\152\x73\x6f\x6e"); goto bitNs; UnGaD: curl_setopt($ch, CURLOPT_POST, TRUE); goto tYYgN; tYYgN: curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data)); goto iquDw; bitNs: $ch = curl_init($url); goto PaFbs; UEDyb: GI44q: goto b8PiV; It8Km: 　　curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0); goto UEDyb; qYHJF: if (!(0 === strpos(strtolower($url), "\150\164\164\x70\x73"))) { goto GI44q; } goto iPPG3; b8PiV: if (!$data) { goto FWK7t; } goto UnGaD; upnDa: curl_close($ch); goto I_9ep; BgCDx: }
<?php
 defined("\x49\116\x5f\111\x41") or exit("\x41\143\x63\145\x73\x73\x20\104\145\156\x69\x65\144"); class tiger_newhuModuleReceiver extends WeModuleReceiver { public function receive() { goto I3VQP; H7Aub: load()->model("\155\143"); goto q9C7Q; LTwXD: $this->sendText($s_fans["\146\x72\x6f\x6d\137\165\x73\x65\162"], $rtips); goto UZJ1d; OgR04: $url = "\150\x74\x74\x70\163\x3a\57\x2f\141\160\151\56\167\x65\151\x78\151\x6e\56\161\161\56\143\157\x6d\57\x63\x67\x69\x2d\x62\151\156\x2f\165\x73\145\162\x2f\151\x6e\x66\157\x3f\141\143\x63\x65\163\x73\137\x74\157\153\x65\x6e\75{$ACCESS_TOKEN}\x26\157\160\x65\x6e\151\x64\75{$openid}\46\x6c\x61\x6e\147\x3d\x7a\x68\137\103\116"; goto KfnUx; XbtTi: $msg = str_replace("\x23\xe4\xbd\231\xe9\242\235\x23", $mc["\143\x72\145\144\151\164\x32"], $msg); goto UdBrW; oePqo: $mc["\x61\166\x61\x74\141\x72"] = $userInfo["\150\145\141\x64\151\x6d\x67\x75\x72\x6c"]; goto CPYvy; hNkdt: $msg = str_replace("\43\xe7\xa7\xaf\xe5\x88\x86\x23", $mc["\x63\x72\145\x64\151\x74\x31"], $msg); goto XbtTi; fliRH: $msg = str_replace("\x23\346\230\265\xe7\247\xb0\x23", $mc["\x6e\151\143\x6b\x6e\x61\x6d\x65"], $msg); goto hNkdt; MfJON: if ($fansusr["\x67\x65\x6e\144\x65\x72"] == 2) { goto c7bEF; } goto R5PRu; LSF9T: if (!($m_fans["\x68\x65\154\160\151\144"] && empty($m_fans["\150\x61\163\x64\145\154"]))) { goto Jn82o; } goto lBtFQ; WFR30: $cscorehb3 = $reply["\143\163\143\157\162\x65\x68\142"]; goto pJWJt; KfnUx: load()->func("\143\x6f\155\x6d\x75\156\x69\143\141\x74\151\x6f\x6e"); goto sEh4x; WB9Ah: $fansusr["\x67\x65\x6e\144\145\162"] = "\347\276\216\345\245\xb3"; goto vn_JW; clUsL: YFf4h: goto I01VY; pJWJt: $pscorehb3 = $reply["\x70\163\143\157\x72\x65\150\142"]; goto PWhIm; sEh4x: $json = ihttp_get($url); goto JljAR; c2mnU: $msg = str_replace("\x23\345\233\275\345\256\266\x23", $mc["\x63\157\165\x6e\x74\x72\171"], $msg); goto ohOZQ; rDhdM: $fansusr["\x67\x65\x6e\144\145\x72"] = "\xe5\xb8\205\xe5\223\245"; goto mvk2C; rOOhi: $status = 0; goto XHOlT; I01VY: $cscore3 = $reply["\x63\x73\x63\157\162\x65"]; goto iy1lX; LH5ZS: $this->sendNews($news, $this->message["\x66\162\157\155"]); goto K4UPi; R3Sjy: $rtips3 = str_replace("\x23\346\230\xb5\xe7\247\260\43", $mc["\156\x69\x63\153\156\x61\155\x65"], $reply["\x72\164\x69\160\x73"]); goto dVHql; yc0VY: $url = $_W["\163\151\164\145\x72\x6f\157\164"] . str_replace("\56\x2f", "\x61\160\160\57", $this->createMobileurl("\x6b\x65\x6e\x64\x69\x6e\x67", array("\x75\151\144" => $mc["\x75\151\144"]))); goto ws92y; c9T6y: if (!($this->message["\x65\x76\x65\156\x74"] == "\165\x6e\163\165\142\163\143\x72\x69\x62\145")) { goto GirqO; } goto nRG_P; YZ6Xi: $msg = str_replace("\43\351\242\x86\xe5\217\226\347\xa7\257\345\x88\x86\43", $url, $msg); goto Qzjo0; Alpa1: $rtips = str_replace("\x23\xe7\247\257\345\210\x86\x23", $cscore3, $rtips); goto e5cOl; UZJ1d: if (!$s_fans["\150\x65\154\160\151\144"]) { goto lV5JE; } goto cPyHQ; G20tE: lV5JE: goto n3xI5; acDJg: $account_name = $_W["\x61\143\x63\x6f\165\x6e\164"]["\x6e\141\155\145"]; goto twIpT; zAurx: $this->mc_jl($s_fans["\151\x64"], 0, 3, -$cscore3, "\x32\xe7\272\247\345\217\x96\xe6\xb6\x88\345\x85\xb3\346\263\250", ''); goto nNcfn; Qzjo0: $msg = str_replace("\x23\xe5\x85\254\344\xbc\227\xe5\217\267\xe5\x90\x8d\347\xa7\xb0\43", $account_name, $msg); goto j2S67; BNVlr: if (!$cscore3) { goto ob32d; } goto zAurx; dVHql: $rtips3 = str_replace("\x23\xe7\xa7\xaf\345\210\206\43", $pscore3, $rtips3); goto mFUcA; TfCoE: $this->mc_jl($p_fans["\151\144"], 1, 3, -$pscorehb3, "\x33\347\272\xa7\xe5\x8f\x96\xe6\266\210\xe5\205\xb3\346\xb3\250", ''); goto Ye_zi; dzttO: if (!$pscore3) { goto EyIwC; } goto K2DU3; jqrSF: EyIwC: goto r3JWn; gKF79: return ''; goto clUsL; XHOlT: pdo_update("\164\x69\147\145\x72\x5f\156\145\x77\x68\165\x5f\163\150\141\x72\145", array("\x66\x6f\x6c\154\157\x77" => $status, "\150\141\163\x64\145\154" => 1), array("\157\160\145\156\x69\144" => $mc["\x75\x69\144"], "\x77\x65\151\x64" => $mc["\165\156\x69\x61\143\151\144"])); goto D5fmj; lBtFQ: $s_fans = pdo_fetch("\x53\105\x4c\105\103\x54\40\x2a\40\x46\x52\117\x4d\40" . tablename($this->modulename . "\137\x73\150\x61\162\x65") . "\x20\x57\110\x45\122\x45\40\40\x77\145\x69\144\75\47{$_W["\165\x6e\151\x61\143\x69\x64"]}\47\40\141\x6e\144\x20\151\144\x3d\47{$m_fans["\x68\145\154\x70\x69\144"]}\47"); goto BNVlr; K2DU3: $this->mc_jl($p_fans["\151\x64"], 0, 3, -$pscore3, "\63\xe7\272\xa7\345\x8f\226\xe6\xb6\x88\xe5\x85\263\xe6\xb3\xa8", ''); goto jqrSF; NPP_D: $gzpicurl = $_W["\163\151\x74\x65\x72\x6f\157\x74"] . "\57\x61\164\x74\x61\143\x68\x6d\x65\x6e\x74\x2f" . $cfg["\147\x7a\x70\151\x63\x75\162\154"]; goto DLaBo; ieDZC: $url = $_W["\163\151\164\x65\162\x6f\x6f\164"] . str_replace("\56\57", "\141\160\160\x2f", $this->createMobileurl("\x6b\145\156\144\x69\x6e\147", array("\x75\x69\144" => $mc["\165\151\x64"]))); goto CN6re; U2_cx: $mc["\x6e\151\143\153\156\141\x6d\x65"] = $userInfo["\x6e\151\x63\153\x6e\141\155\x65"]; goto oePqo; nAKUk: $mc["\143\x69\x74\x79"] = $userInfo["\x63\x69\x74\171"]; goto pBInD; Ye_zi: IsSOH: goto R3Sjy; ottci: M8xS3: goto ttEYF; aN6u1: $custom = array("\x6d\163\x67\164\171\x70\x65" => "\164\x65\x78\x74", "\164\x65\x78\x74" => array("\143\157\156\x74\145\x6e\x74" => urlencode($msg)), "\164\x6f\x75\163\145\162" => $this->message["\146\162\157\x6d"]); goto n1x9Z; OEb1b: $this->sendText($p_fans["\x66\x72\x6f\x6d\x5f\x75\x73\145\x72"], $rtips3); goto G20tE; e5cOl: $rtips = str_replace("\x23\xe5\x85\x83\43", $cscorehb3, $rtips); goto LTwXD; q9C7Q: $mc = mc_fetch($this->message["\x66\x72\157\155"]); goto Jy2Vw; YC2uF: $rtips = str_replace("\x23\xe6\230\xb5\347\xa7\xb0\43", $mc["\156\x69\x63\x6b\156\141\x6d\145"], $reply["\x72\x74\x69\160\x73"]); goto Alpa1; mGLPN: $gzurl = str_replace("\x23\xe9\xa2\206\xe5\x8f\226\xe7\xa7\257\345\x88\x86\43", $url, $cfg["\x67\x7a\165\162\x6c"]); goto NPP_D; o8xqv: OJdjS: goto eOyPL; cPyHQ: $p_fans = pdo_fetch("\123\105\114\x45\103\x54\x20\52\40\106\122\x4f\x4d\40" . tablename($this->modulename . "\x5f\x73\x68\x61\162\145") . "\x20\x57\x48\105\x52\105\x20\40\x77\x65\x69\144\x3d\47{$_W["\165\x6e\151\x61\x63\x69\x64"]}\x27\40\x61\156\x64\x20\151\144\75\x27{$s_fans["\x68\145\x6c\x70\x69\x64"]}\x27"); goto dzttO; CPYvy: $mc["\x70\162\157\166\x69\156\143\x65"] = $userInfo["\x70\162\157\166\x69\x6e\x63\145"]; goto nAKUk; haA7v: pdo_update("\164\x69\x67\x65\162\137\156\145\x77\150\165\x5f\163\150\x61\x72\x65", array("\x66\157\x6c\x6c\x6f\x77" => $status1), array("\x6f\160\145\156\x69\144" => $mc["\165\151\x64"], "\x77\145\151\144" => $mc["\x75\x6e\151\141\x63\x69\x64"])); goto iU4XE; pBInD: $mc["\143\157\165\x6e\x74\x72\171"] = $userInfo["\143\x6f\x75\x6e\164\162\171"]; goto o8xqv; JljAR: $userInfo = @json_decode($json["\x63\x6f\x6e\164\x65\156\x74"], true); goto U2_cx; nNcfn: ob32d: goto NG7e3; d6Ysk: $reply = pdo_fetch("\163\145\x6c\x65\x63\164\x20\52\40\146\162\157\155\40" . tablename("\x74\151\147\x65\162\x5f\x6e\x65\167\x68\165\x5f\160\157\163\164\x65\162") . "\x20\x77\x68\x65\x72\145\40\167\x65\x69\x64\x3d\72\167\x65\x69\144\40\157\x72\144\145\162\40\142\x79\x20\x69\144\x20\141\x73\143\x20\154\151\155\x69\x74\x20\x31", array("\72\x77\145\x69\144" => $mc["\x75\x6e\151\x61\143\151\x64"])); goto zlU_l; mvk2C: goto Jx0yr; goto DXv7w; K4UPi: KxfEI: goto ottci; ttEYF: if (!($this->message["\155\x73\147\x74\171\x70\x65"] == "\x65\166\145\x6e\164")) { goto PdEfr; } goto c9T6y; D1MsO: $msg = str_replace("\43\xe5\xb8\x82\43", $mc["\x63\x69\164\171"], $msg); goto YZ6Xi; ws92y: $gztitle = str_replace("\43\xe6\230\xb5\347\247\260\x23", $mc["\x6e\151\143\153\x6e\x61\155\145"], $cfg["\x67\172\x74\x69\164\154\x65"]); goto mGLPN; iU4XE: $fansusr = mc_fetch($this->message["\x66\x72\157\155"]); goto D9wfs; mFUcA: $rtips3 = str_replace("\43\xe5\205\x83\43", $pscorehb3, $rtips3); goto OEb1b; AznS9: oSAds: goto YC2uF; nRG_P: $mc = mc_fetch($this->message["\146\x72\157\155"]); goto d6Ysk; Jy2Vw: $openid = $this->message["\x66\162\x6f\x6d"]; goto BeI5d; zlU_l: if (!($reply["\162\163\x63\x6f\162\x65"] == 0)) { goto YFf4h; } goto gKF79; D5fmj: GirqO: goto NwpLo; j2S67: $account = WeAccount::create(); goto aN6u1; NwpLo: PdEfr: goto ar7NO; iW9U3: $this->mc_jl($s_fans["\x69\144"], 1, 3, -$cscorehb3, "\62\xe7\272\247\345\217\x96\xe6\xb6\210\xe5\205\xb3\xe6\263\250", ''); goto AznS9; z0pzs: $msg = str_replace("\x23\346\200\247\xe5\210\xab\43", $fansusr["\147\x65\x6e\x64\x65\162"], $msg); goto c2mnU; iy1lX: $pscore3 = $reply["\160\x73\x63\x6f\162\145"]; goto WFR30; D9wfs: if ($fansusr["\x67\145\156\144\x65\x72"] == 1) { goto v2IzS; } goto MfJON; R5PRu: goto Jx0yr; goto a5Pdi; NG7e3: if (!$cscorehb3) { goto oSAds; } goto iW9U3; DLaBo: $news = array("\x74\151\164\154\x65" => $gztitle, "\144\x65\x73\143\162\x69\160\x74\x69\157\156" => $cfg["\x67\x7a\x64\x65\x73\143\162\x69\160\x74\151\157\x6e"], "\165\162\x6c" => $gzurl, "\160\151\x63\x75\162\x6c" => $gzpicurl); goto LH5ZS; DXv7w: c7bEF: goto WB9Ah; zkC_R: if (!(empty($mc["\x6e\151\x63\x6b\x6e\141\x6d\x65"]) || empty($mc["\141\166\x61\x74\x61\x72"]) || empty($mc["\x70\162\x6f\166\x69\156\143\145"]))) { goto OJdjS; } goto GdTgU; CN6re: $msg = htmlspecialchars_decode($cfg["\x74\151\x67\x65\x72\137\156\x65\167\x68\x75\x5f\x75\163\162"]); goto fliRH; r3JWn: if (!$pscorehb3) { goto IsSOH; } goto TfCoE; twIpT: $zfs = $cfg["\164\x69\147\x65\162\137\x6e\x65\x77\150\165\x5f\146\141\156\163\156\165\x6d"] + $fanssum; goto ieDZC; ZcMnw: $ACCESS_TOKEN = $this->getAccessToken(); goto OgR04; n3xI5: Jn82o: goto rOOhi; BeI5d: if (!($this->message["\145\166\x65\156\164"] == "\x73\x75\x62\x73\x63\162\151\142\x65")) { goto M8xS3; } goto zkC_R; arYQ0: load()->func("\x6c\x6f\x67\147\x69\x6e\x67"); goto ssafM; ssafM: $cfg = $this->module["\143\157\156\146\151\x67"]; goto H7Aub; eOyPL: $status1 = 1; goto haA7v; PWhIm: $m_fans = pdo_fetch("\163\x65\x6c\x65\143\x74\40\52\40\146\162\x6f\x6d\x20" . tablename("\164\151\147\145\x72\x5f\156\x65\x77\x68\165\137\163\150\141\x72\145") . "\40\167\x68\x65\162\x65\x20\x77\x65\151\144\75\x3a\x77\145\x69\144\x20\101\116\104\40\146\x72\x6f\155\x5f\165\x73\x65\162\x3d\x3a\146\162\157\x6d\x5f\165\163\145\x72\40\157\162\x64\x65\x72\x20\x62\171\40\x69\x64\x20\141\x73\x63\40\154\151\x6d\x69\x74\40\x31", array("\72\167\x65\151\144" => $mc["\x75\156\x69\141\x63\151\144"], "\72\x66\x72\x6f\155\137\x75\163\x65\162" => $this->message["\x66\162\157\x6d"])); goto LSF9T; w2RlY: if (empty($cfg["\147\172\x74\151\164\154\x65"])) { goto KxfEI; } goto yc0VY; a5Pdi: v2IzS: goto rDhdM; n1x9Z: $account->sendCustomNotice($custom); goto w2RlY; I3VQP: global $_W, $_GPC; goto arYQ0; ohOZQ: $msg = str_replace("\43\347\234\x81\43", $mc["\x70\162\x6f\166\x69\x6e\143\145"], $msg); goto D1MsO; UdBrW: $msg = str_replace("\43\345\x81\207\xe7\262\211\344\270\x9d\346\225\xb0\43", $zfs, $msg); goto z0pzs; GdTgU: $openid = $this->message["\x66\162\x6f\x6d"]; goto ZcMnw; vn_JW: Jx0yr: goto acDJg; ar7NO: } function formot_content($content = '', $fansusr) { goto szXdH; jBNXW: return $content; goto aP_1n; IPBtV: if (!empty($content)) { goto sQcCm; } goto jBNXW; SOJGW: $fansusr = mc_fetch($this->message["\x66\162\157\x6d"]); goto qG_1V; aP_1n: sQcCm: goto u5TWF; qG_1V: $replace = array("\x61" => array("\162\x65\x70\154\141\143\x65" => "\x23\xe6\x98\265\xe7\247\260\x23", "\156\x61\155\x65" => "\x6e\151\143\153\156\x61\155\145"), "\x62" => array("\162\x65\x70\x6c\141\143\x65" => "\43\347\247\xaf\345\210\206\43", "\156\141\x6d\x65" => "\x63\162\145\x64\151\164\x31"), "\143" => array("\x72\x65\x70\154\141\x63\145" => "\x23\344\xbd\231\xe9\242\x9d\43", "\x6e\141\155\145" => "\x63\x72\145\x64\x69\x74\x32"), "\x64" => array("\162\x65\160\x6c\141\143\x65" => "\x23\345\233\275\xe5\256\266\43", "\x6e\141\x6d\x65" => "\156\141\x74\x69\157\x6e\141\x6c\151\164\171"), "\145" => array("\x72\145\x70\x6c\141\143\145" => "\x23\xe7\234\201\x23", "\x6e\x61\155\x65" => "\x72\x65\163\151\144\145\x70\x72\157\x76\x69\x6e\143\145"), "\146" => array("\162\x65\x70\154\141\x63\x65" => "\x23\xe5\xb8\x82\x23", "\156\141\155\145" => "\162\x65\x73\151\144\145\143\151\x74\171")); goto LJlEI; u5TWF: load()->model("\155\143"); goto SOJGW; LJlEI: foreach ($replace as $re) { $content = str_replace($re["\162\x65\x70\154\141\143\x65"], $fansusr[$re["\156\141\155\145"]], $content); rAAjm: } goto rV0iR; szXdH: global $_W; goto IPBtV; SatlR: return $content; goto wHT4W; rV0iR: UzREq: goto SatlR; wHT4W: } private function Uid2Openid($uid) { return pdo_fetchcolumn("\163\x65\154\145\x63\x74\40\157\160\145\156\151\144\40\146\162\157\155\40" . tablename("\x6d\143\137\x6d\x61\x70\x70\151\x6e\x67\137\146\141\156\163") . "\40\167\150\145\162\x65\40\x75\151\x64\75\x27{$uid}\47"); } public function sendText($openid, $text) { goto FaPai; zOtj7: return $ret; goto ArS5i; FaPai: $post = "\173\x22\x74\x6f\x75\163\145\x72\42\x3a\42" . $openid . "\42\54\42\x6d\163\x67\x74\x79\x70\145\x22\x3a\x22\x74\145\170\x74\42\54\42\164\x65\x78\x74\x22\72\173\42\x63\x6f\156\164\x65\156\164\42\72\x22" . $text . "\x22\175\x7d"; goto WutPl; WutPl: $ret = $this->sendRes($this->getAccessToken(), $post); goto zOtj7; ArS5i: } public function sendNews($news, $openid) { goto I2Qzj; I2Qzj: $result = "\x7b\x22\164\x6f\165\x73\145\x72\x22\x3a\42" . $openid . "\x22\x2c\x22\155\x73\147\x74\171\x70\145\42\x3a\42\156\145\167\x73\42\x2c\42\156\145\x77\x73\42\x3a\x7b\x22\141\162\164\151\x63\x6c\x65\163\42\x3a\133\173\x22\x74\151\x74\154\145\42\72\42" . $news["\x74\x69\164\154\145"] . "\x22\x2c\x22\144\x65\x73\x63\x72\151\x70\x74\151\157\x6e\42\72\x22" . $news["\x64\145\163\x63\162\151\x70\x74\x69\x6f\156"] . "\42\x2c\x22\165\162\154\42\x3a\42" . $news["\165\162\154"] . "\42\x2c\42\x70\151\143\165\x72\154\x22\72\42" . $news["\160\151\143\165\x72\x6c"] . "\x22\175\x5d\x7d\175"; goto GBfbf; r8GpJ: $ret = ihttp_request($url, $result); goto dT5G8; dT5G8: return $ret; goto CM6vg; T5q8C: $url = "\150\x74\x74\160\x73\x3a\57\x2f\141\x70\x69\56\167\145\x69\x78\x69\156\x2e\x71\x71\x2e\143\157\155\57\143\147\151\55\x62\151\x6e\57\x6d\145\x73\163\141\x67\x65\x2f\143\165\163\x74\157\x6d\x2f\x73\x65\156\x64\x3f\x61\x63\x63\145\163\x73\x5f\x74\157\153\145\156\x3d{$access_token}"; goto r8GpJ; GBfbf: $access_token = $this->getAccessToken(); goto T5q8C; CM6vg: } private function sendRes($access_token, $data) { goto Jpl0b; yEL5y: $content = @json_decode($ret["\x63\157\156\164\145\156\164"], true); goto F_zbK; Jpl0b: $url = "\x68\164\164\160\x73\x3a\57\57\141\x70\x69\56\x77\145\x69\x78\x69\156\x2e\161\161\x2e\143\x6f\x6d\57\x63\147\151\x2d\x62\151\x6e\57\x6d\145\x73\x73\x61\x67\x65\x2f\143\x75\163\x74\x6f\155\x2f\x73\x65\x6e\144\77\x61\143\143\145\x73\163\137\x74\157\x6b\x65\156\x3d{$access_token}"; goto E3sri; E3sri: load()->func("\143\x6f\x6d\x6d\x75\156\x69\143\x61\x74\151\x6f\x6e"); goto Nakrr; Nakrr: $ret = ihttp_request($url, $data); goto yEL5y; F_zbK: return $content["\145\162\162\143\x6f\144\145"]; goto uIGmf; uIGmf: } private function getAccessToken() { goto VE5gW; ZL7l8: $acid = $_W["\x61\143\151\144"]; goto EUlTP; RqekQ: jM17S: goto Q_SSN; KEEE3: $token = $account->getAccessToken(); goto Tp1c4; Q_SSN: $account = WeAccount::create($acid); goto KEEE3; VE5gW: global $_W; goto OI26u; Tp1c4: return $token; goto gHnm4; OI26u: load()->model("\141\143\143\x6f\x75\x6e\x74"); goto ZL7l8; OR64x: $acid = $_W["\x75\x6e\x69\141\143\x69\144"]; goto RqekQ; EUlTP: if (!empty($acid)) { goto jM17S; } goto OR64x; gHnm4: } public function mc_jl($uid, $type, $typelx, $num, $remark, $orderid) { goto zLvpx; d4zaS: return; goto Ltw4Y; mxzsu: $inst = pdo_insert($this->modulename . "\137\152\154", $data); goto N7fUX; ScDL9: acKYK: goto t1TE_; Ltw4Y: ss04g: goto gsZE4; zt9rU: goto qr7Ap; goto Khh1M; ApIN0: $credit2 = $share["\143\162\x65\144\x69\x74\62"] + $num; goto SUzyE; Aa8FU: goto KSRdH; goto yKIhB; kRa2g: if (!empty($uid)) { goto ss04g; } goto d4zaS; wnIjF: goto acKYK; goto mt2Qp; yKIhB: NXG87: goto yNIHp; HiSu4: RxDGX: goto jti9D; bn0Sd: $inst = pdo_insert($this->modulename . "\137\x6a\154", $data); goto zGVUw; mt2Qp: ZRYC4: goto ChYi_; zGVUw: if ($inst === false) { goto S_uEN; } goto X4ZwB; pJMtF: if (!($credit1 < 0)) { goto ZOsRq; } goto XTCbB; nhw6O: NAg0n: goto ApIN0; yNIHp: $credit1 = $share["\x63\x72\x65\x64\151\164\61"] + $num; goto pJMtF; uZQxn: ZOsRq: goto s649p; cvR2n: stLVQ: goto C4OJm; Fhaoo: if ($res === false) { goto YofUa; } goto bn0Sd; zLvpx: global $_W; goto kRa2g; QopmB: sDv7Z: goto Aa8FU; t1TE_: goto RxDGX; goto faCx0; ChYi_: return array("\145\162\162\157\x72" => 0, "\144\141\164\x61" => "\347\247\257\xe5\x88\206\xe6\x9b\264\346\x96\xb0\xe5\xa4\xb1\xe8\xb4\xa5"); goto ScDL9; K5otg: goto KSRdH; goto nhw6O; s649p: $res = pdo_update($this->modulename . "\137\x73\x68\x61\x72\145", array("\143\x72\145\144\x69\x74\61" => $credit1), array("\x69\144" => $uid)); goto PgfTG; zHtAV: goto sDv7Z; goto TjcWV; C4OJm: $res = pdo_update($this->modulename . "\x5f\x73\x68\x61\162\x65", array("\x63\x72\x65\144\x69\164\62" => $credit2), array("\x69\144" => $uid)); goto Fhaoo; SUzyE: if (!($credit2 < 0)) { goto stLVQ; } goto OjwuX; TjcWV: YofUa: goto rBt3s; PYceb: return array("\x65\162\162\x6f\x72" => 0, "\144\141\x74\141" => "\xe4\275\231\xe9\xa2\235\xe6\233\264\xe6\x96\260\345\xa4\261\350\264\245"); goto WBxMI; XTCbB: return array("\x65\162\x72\x6f\x72" => 0, "\144\x61\x74\x61" => "\347\xa7\xaf\345\x88\x86\344\270\215\350\xb6\xb3"); goto uZQxn; ORFr3: return array("\x65\x72\162\157\x72" => 1, "\144\x61\164\141" => "\347\247\xaf\345\210\206\xe6\233\xb4\xe6\226\xb0\xe6\x88\220\345\x8a\237"); goto wnIjF; N7fUX: if ($inst === false) { goto ZRYC4; } goto ORFr3; Sjh_S: if ($type == 0) { goto NXG87; } goto K5otg; WBxMI: qr7Ap: goto zHtAV; rBt3s: return array("\145\x72\x72\x6f\162" => 0, "\x64\141\164\x61" => "\344\xbd\x99\351\xa2\235\346\x9b\264\346\x96\xb0\345\xa4\xb1\xe8\264\245"); goto QopmB; faCx0: IMn3x: goto KGZOO; jti9D: KSRdH: goto Wj2vq; gsZE4: $data = array("\x75\x69\x64" => $uid, "\x77\145\x69\144" => $_W["\165\156\x69\x61\143\x69\144"], "\x74\x79\x70\145" => $type, "\164\171\160\145\x6c\170" => $typelx, "\156\x75\x6d" => $num, "\x72\145\x6d\141\162\153" => $remark, "\157\x72\x64\x65\x72\x69\144" => $orderid, "\x63\162\145\x61\164\x65\164\151\x6d\145" => time()); goto qzsTM; KGZOO: return array("\x65\162\x72\157\x72" => 0, "\x64\x61\x74\x61" => "\xe7\247\xaf\345\x88\x86\346\x9b\264\346\226\260\345\244\261\350\264\245"); goto HiSu4; OjwuX: return array("\x65\162\x72\157\162" => 0, "\x64\141\164\x61" => "\xe4\275\x99\xe9\xa2\235\344\270\215\350\xb6\xb3"); goto cvR2n; X4ZwB: return array("\145\162\162\157\x72" => 1, "\x64\x61\x74\x61" => "\xe4\275\x99\351\xa2\x9d\346\x9b\xb4\xe6\x96\xb0\xe6\210\x90\345\x8a\x9f"); goto zt9rU; PgfTG: if ($res === false) { goto IMn3x; } goto mxzsu; Khh1M: S_uEN: goto PYceb; qzsTM: $share = pdo_fetch("\x53\x45\x4c\x45\103\124\x20\143\x72\145\x64\x69\x74\61\x2c\143\x72\145\x64\x69\164\62\x20\106\122\x4f\115\40" . tablename($this->modulename . "\137\x73\x68\x61\162\145") . "\40\x57\110\105\122\105\x20\x69\144\x3d\x27{$uid}\x27\x20\x61\x6e\144\40\x77\x65\x69\144\x3d\x27{$_W["\165\x6e\x69\x61\x63\151\144"]}\47\40"); goto L9HP7; L9HP7: if ($type == 1) { goto NAg0n; } goto Sjh_S; Wj2vq: } }
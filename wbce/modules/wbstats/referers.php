<?php
/**
 *
 * @category        admintools
 * @package         wbstats
 * @author          Ruud Eisinga - Dev4me
 * @link			http://www.dev4me.nl/
 * @license         http://www.gnu.org/licenses/gpl.html
 * @platform        WebsiteBaker 2.8.x / WBCE 1.4
 * @requirements    PHP 5.6 and higher
 * @version         0.2.1
 * @lastmodified    November 15, 2019
 *
 */

defined('WB_PATH') or die(header('Location: ../index.php'));

//Referers that are used for referer-spamming
$spamReferers = array(
'porn',
'lesbian',
'sexy',
'pizza-',
'burger-',
'03e.info',
'0n-line.tv',
'1-99seo.com',
'1-best-seo.com',
'1-free-share-buttons.com',
'100-reasons-for-seo.com',
'100dollars-seo.com',
'100searchengines.com',
'12-reasons-for-seo.net',
'12masterov.com',
'12u.info',
'15-reasons-for-seo.com',
'1pamm.ru',
'1webmaster.ml',
'2-best-seo.com',
'24x7-server-support.site',
'2your.site',
'3-best-seo.com',
'3-letter-domains.net',
'3waynetworks.com',
'4-best-seo.com',
'4inn.ru',
'4istoshop.com',
'4webmasters.org',
'5-best-seo.com',
'5-steps-to-start-business.com',
'5forex.ru',
'6-best-seo.com',
'6hopping.com',
'7-best-seo.com',
'7kop.ru',
'7makemoneyonline.com',
'7zap.com',
'8-best-seo.com',
'8xv8.com',
'9-best-seo.com',
'99-reasons-for-seo.com',
'99-reasons-for-seo.com',
'abcdefh.xyz',
'abcdeg.xyz',
'abclauncher.com',
'acads.net',
'acarreo.ru',
'acunetix-referrer.com',
'adanih.com',
'adcash.com',
'adf.ly',
'adspart.com',
'adtiger.tk',
'adventureparkcostarica.com',
'adviceforum.info',
'advokateg.xyz',
'aerodizain.com',
'affordablewebsitesandmobileapps.com',
'afora.ru',
'ai-seo-services.com',
'aibolita.com',
'aidarmebel.kz',
'akuhni.by',
'alfabot.xyz',
'alibestsale.com',
'aliexsale.ru',
'alinabaniecka.pl',
'alkanfarma.org',
'allergick.com',
'allergija.com',
'allknow.info',
'allmarketsnewdayli.gdn',
'allnews.md',
'allnews24.in',
'allvacancy.ru',
'allwomen.info',
'allwrighter.ru',
'alpharma.net',
'altermix.ua',
'amazon-seo-service.com',
'amt-k.ru',
'amtel-vredestein.com',
'anabolics.shop',
'anal-acrobats.hol.es',
'analytics-ads.xyz',
'anapa-inns.ru',
'android-style.com',
'animalphotos.xyz',
'animenime.ru',
'anticrawler.org',
'antiguabarbuda.ru',
'apteka-doc.ru',
'apteka-pharm.ru',
'arabic-poetry.com',
'arendakvartir.kz',
'arendovalka.xyz',
'arkkivoltti.net',
'artblog.top',
'artclipart.ru',
'artdeko.info',
'artpaint-market.ru',
'artparquet.ru',
'aruplighting.com',
'ask-yug.com',
'atleticpharm.org',
'atyks.ru',
'auto-b2b-seo-service.com',
'auto-complex.by',
'auto-kia-fulldrive.ru',
'auto-seo-service.org',
'autoblog.org.ua',
'automobile-spec.com',
'autoseo-service.org',
'autoseo-traffic.com',
'autoseotips.com',
'autovideobroadcast.com',
'avcoast.com',
'aviva-limoux.com',
'avkzarabotok.info',
'avtointeres.ru',
'avtovykup.kz',
'azartclub.org',
'azbukafree.com',
'azlex.uz',
'backlinks-fast-top.com',
'baixar-musicas-gratis.com',
'baladur.ru',
'balitouroffice.com',
'balkanfarma.org',
'bard-real.com.ua',
'batut-fun.ru',
'bavariagid.de',
'beachtoday.ru',
'beauty-lesson.com',
'beclean-nn.ru',
'bedroomlighting.us',
'belreferatov.net',
'beremenyashka.com',
'best-deal-hdd.pro',
'best-ping-service-usa.blue',
'best-seo-offer.com',
'best-seo-software.xyz',
'best-seo-solution.com',
'bestfortraders.com',
'bestmobilityscooterstoday.com',
'bestofferhddbyt.info',
'bestofferhddeed.info',
'bestwebsitesawards.com',
'betterhealthbeauty.com',
'bezprostatita.com',
'bif-ru.info',
'biglistofwebsites.com',
'billiard-classic.com.ua',
'bin-brokers.com',
'bio-market.kz',
'biplanecentre.ru',
'bird1.ru',
'bitcoin-ua.top',
'biteg.xyz',
'bizru.info',
'black-friday.ga',
'blackhatworth.com',
'blog100.org',
'blog2019.xyz',
'blog4u.top',
'blogseo.xyz',
'blogstar.fun',
'blogtotal.de',
'blue-square.biz',
'bluerobot.info',
'boltalko.xyz',
'boostmyppc.com',
'bpro1.top',
'brakehawk.com',
'brateg.xyz',
'break-the-chains.com',
'brillianty.info',
'brk-rti.ru',
'brothers-smaller.ru',
'brusilov.ru',
'bsell.ru',
'budilneg.xyz',
'budmavtomatika.com.ua',
'bufetout.ru',
'buketeg.xyz',
'bukleteg.xyz',
'burger-imperia.com',
'burn-fat.ga',
'buttons-for-website.com',
'buttons-for-your-website.com',
'buy-cheap-online.info',
'buy-cheap-pills-order-online.com',
'buy-forum.ru',
'buy-meds24.com',
'buypillsonline24h.com',
'call-of-duty.info',
'cardiosport.com.ua',
'cartechnic.ru',
'cattyhealth.com',
'cenokos.ru',
'cenoval.ru',
'cezartabac.ro',
'chcu.net',
'cheap-trusted-backlinks.com',
'cheappills24h.com',
'chelyabinsk.dienai.ru',
'chinese-amezon.com',
'chizhik-2.ru',
'ci.ua',
'cityadspix.com',
'civilwartheater.com',
'cleaningservices.kiev.ua',
'clicksor.com',
'climate.by',
'club-lukojl.ru',
'coderstate.com',
'codysbbq.com',
'coffeemashiny.ru',
'columb.net.ua',
'commerage.ru',
'comp-pomosch.ru',
'compliance-alex.xyz',
'compliance-alexa.xyz',
'compliance-andrew.xyz',
'compliance-barak.xyz',
'compliance-brian.xyz',
'compliance-don.xyz',
'compliance-donald.xyz',
'compliance-elena.xyz',
'compliance-fred.xyz',
'compliance-george.xyz',
'compliance-irvin.xyz',
'compliance-ivan.xyz',
'compliance-john.top',
'compliance-julianna.top',
'computer-remont.ru',
'conciergegroup.org',
'connectikastudio.com',
'cookie-law-enforcement-aa.xyz',
'cookie-law-enforcement-bb.xyz',
'cookie-law-enforcement-cc.xyz',
'cookie-law-enforcement-dd.xyz',
'cookie-law-enforcement-ee.xyz',
'cookie-law-enforcement-ff.xyz',
'cookie-law-enforcement-gg.xyz',
'cookie-law-enforcement-hh.xyz',
'cookie-law-enforcement-ii.xyz',
'cookie-law-enforcement-jj.xyz',
'cookie-law-enforcement-kk.xyz',
'cookie-law-enforcement-ll.xyz',
'cookie-law-enforcement-mm.xyz',
'cookie-law-enforcement-nn.xyz',
'cookie-law-enforcement-oo.xyz',
'cookie-law-enforcement-pp.xyz',
'cookie-law-enforcement-qq.xyz',
'cookie-law-enforcement-rr.xyz',
'cookie-law-enforcement-ss.xyz',
'cookie-law-enforcement-tt.xyz',
'cookie-law-enforcement-uu.xyz',
'cookie-law-enforcement-vv.xyz',
'cookie-law-enforcement-ww.xyz',
'cookie-law-enforcement-xx.xyz',
'cookie-law-enforcement-yy.xyz',
'cookie-law-enforcement-zz.xyz',
'copyrightclaims.org',
'copyrightinstitute.org',
'covadhosting.biz',
'cp24.com.ua',
'cubook.supernew.org',
'customsua.com.ua',
'cyber-monday.ga',
'dailyrank.net',
'dailyseo.xyz',
'darodar.com',
'dawlenie.com',
'dbutton.net',
'dcdcapital.com',
'deart-13.ru',
'delfin-aqua.com.ua',
'demenageur.com',
'dengi-v-kredit.in.ua',
'dermatovenerologiya.com',
'descargar-musica-gratis.net',
'detskie-konstruktory.ru',
'deutsche-poesie.com',
'dev-seo.blog',
'dienai.ru',
'diplomas-ru.com',
'dipstar.org',
'distonija.com',
'dividendo.ru',
'djekxa.ru',
'djonwatch.ru',
'dktr.ru',
'docs4all.com',
'docsarchive.net',
'docsportal.net',
'documentbase.net',
'documentserver.net',
'documentsite.net',
'doggyhealthy.com',
'dogsrun.net',
'dojki-devki.ru',
'dojki-hd.com',
'domain-tracker.com',
'domashniy-hotel.ru',
'dominateforex.ml',
'domination.ml',
'doska-vsem.ru',
'dostavka-v-krym.com',
'dosugrostov.site',
'doxysexy.com',
'draniki.org',
'drev.biz',
'drugstoreforyou.com',
'drupa.com',
'dvr.biz.ua',
'e-buyeasy.com',
'e-commerce-seo.com',
'e-commerce-seo1.com',
'earn-from-articles.com',
'earnian-money.info',
'easycommerce.cf',
'ecblog.xyz',
'ecommerce-seo.org',
'ecomp3.ru',
'econom.co',
'edakgfvwql.ru',
'edudocs.net',
'eduinfosite.com',
'eduserver.net',
'ege-essay.ru',
'egovaleo.it',
'ek-invest.ru',
'ekatalog.xyz',
'eko-gazon.ru',
'ekoproekt-kr.ru',
'ekto.ee',
'elektrikovich.ru',
'elementspluss.ru',
'elentur.com.ua',
'elmifarhangi.com',
'elvel.com.ua',
'emerson-rus.ru',
'englishtopic.ru',
'eric-artem.com',
'erot.co',
'escort-russian.com',
'este-line.com.ua',
'etairikavideo.gr',
'etehnika.com.ua',
'eu-cookie-law-enforcement2.xyz',
'eurocredit.xyz',
'euromasterclass.ru',
'europages.com.ru',
'eurosamodelki.ru',
'event-tracking.com',
'exdocsfiles.com',
'expediacustomerservicenumber.online',
'express-vyvoz.ru',
'eyes-on-you.ga',
'f1nder.org',
'fanoboi.com',
'fast-wordpress-start.com',
'fbdownloader.com',
'feminist.org.ua',
'fialka.tomsk.ru',
'fidalsa.de',
'filesclub.net',
'filesdatabase.net',
'filter-ot-zheleza.ru',
'financial-simulation.com',
'finansov.info',
'findercarphotos.com',
'fix-website-errors.com',
'floating-share-buttons.com',
'flowertherapy.ru',
'flyblog.xyz',
'for-marketersy.info',
'for-your.website',
'forex-procto.ru',
'forsex.info',
'fortwosmartcar.pw',
'forum69.info',
'foxweber.com',
'francaise-poesie.com',
'frauplus.ru',
'free-fb-traffic.com',
'free-fbook-traffic.com',
'free-floating-buttons.com',
'free-share-buttons.com',
'free-social-buttons.com',
'free-social-buttons.xyz',
'free-social-buttons7.xyz',
'free-traffic.xyz',
'free-video-tool.com',
'free-website-traffic.com',
'freenode.info',
'freewhatsappload.com',
'freewlan.info',
'freshnails.com.ua',
'fsalas.com',
'game300.ru',
'gandikapper.ru',
'gearcraft.us',
'gearsadspromo.club',
'generalporn.org',
'gepatit-info.top',
'germes-trans.com',
'get-clickize.info',
'get-free-social-traffic.com',
'get-free-traffic-now.com',
'get-more-freeer-visitors.info',
'get-more-freeish-visitors.info',
'get-seo-help.com',
'get-your-social-buttons.info',
'getaadsincome.info',
'getadsincomely.info',
'getfy-click.info',
'getlamborghini.ga',
'getpy-click.info',
'getrichquick.ml',
'getrichquickly.info',
'ghazel.ru',
'ghostvisitor.com',
'gidonline.one',
'giftbig.ru',
'girlporn.ru',
'gkvector.ru',
'glavprofit.ru',
'global-smm.ru',
'gobongo.info',
'goodhumor24.com',
'goodprotein.ru',
'google-liar.ru',
'googlemare.com',
'googlsucks.com',
'gorgaz.info',
'grafaman.ru',
'growth-hackingan.info',
'growth-hackingor.info',
'growth-hackingy.info',
'guardlink.org',
'guidetopetersburg.com',
'handicapvantoday.com',
'happysong.ru',
'hard-porn.mobi',
'havepussy.com',
'hawaiisurf.com',
'hdmoviecamera.net',
'hdmoviecams.com',
'healbio.ru',
'healgastro.com',
'hit-kino.ru',
'homeafrikalike.tk',
'homemypicture.tk',
'hongfanji.com',
'hosting-tracker.com',
'hottour.com',
'housediz.com',
'housemilan.ru',
'howopen.ru',
'howtostopreferralspam.eu',
'hoztorg-opt.ru',
'hseipaa.kz',
'hulfingtonpost.com',
'humanorightswatch.org',
'hundejo.com',
'hvd-store.com',
'hyip-zanoza.me',
'ico.re',
'igadgetsworld.com',
'igru-xbox.net',
'ilikevitaly.com',
'iloveitaly.ro',
'iloveitaly.ru',
'ilovevitaly.co',
'ilovevitaly.com',
'ilovevitaly.info',
'ilovevitaly.org',
'ilovevitaly.ru',
'ilovevitaly.xyz',
'iminent.com',
'imperiafilm.ru',
'impotentik.com',
'incitystroy.ru',
'incomekey.net',
'increasewwwtraffic.info',
'inet-shop.su',
'infektsii.com',
'infodocsportal.com',
'infogame.name',
'inform-ua.info',
'inmoll.com',
'insider.pro',
'interferencer.ru',
'intex-air.ru',
'investpamm.ru',
'iskalko.ru',
'iskussnica.ru',
'isotoner.com',
'ispaniya-costa-blanca.ru',
'it-max.com.ua',
'izhstrelok.ru',
'jav-fetish.com',
'jav-fetish.site',
'javcoast.com',
'javlibrary.cc',
'jjbabskoe.ru',
'jobius.com.ua',
'jumkite.com',
'justkillingti.me',
'justprofit.xyz',
'kabbalah-red-bracelets.com',
'kabinet-binbank.ru',
'kabinet-card-5ka.ru',
'kabinet-click-alfabank.ru',
'kabinet-lk-megafon.ru',
'kabinet-login-mts.ru',
'kabinet-mil.ru',
'kabinet-mos.ru',
'kabinet-my-beeline.ru',
'kabinet-my-pochtabank.ru',
'kabinet-online-vtb.ru',
'kabinet-tinkoff.ru',
'kabinet-ttk.ru',
'kakablog.net',
'kakadu-interior.com.ua',
'kambasoft.com',
'kamin-sam.ru',
'karapuz.org.ua',
'kazka.ru',
'kazlenta.kz',
'kazrent.com',
'kerch.site',
'kevblog.top',
'keywords-monitoring-success.com',
'keywords-monitoring-your-success.com',
'kharkov.ua',
'kino-fun.ru',
'kino-key.info',
'kino2018.cc',
'kinobum.org',
'kinopolet.net',
'kinosed.net',
'kinostar.online',
'knigonosha.net',
'komp-pomosch.ru',
'komputers-best.ru',
'komukc.com.ua',
'konkursov.net',
'kozhasobak.com',
'kozhniebolezni.com',
'krasnodar-avtolombard.ru',
'kredytbank.com.ua',
'krumble-adsde.info',
'krumble-adsen.info',
'krumbleent-ads.info',
'laminat.com.ua',
'landliver.org',
'landoftracking.com',
'laptop-4-less.com',
'law-check-two.xyz',
'law-enforcement-bot-ff.xyz',
'law-enforcement-check-three.xyz',
'law-enforcement-ee.xyz',
'law-six.xyz',
'laxdrills.com',
'leeboyrussia.com',
'legalrc.biz',
'lerporn.info',
'leto-dacha.ru',
'lider82.ru',
'lipidofobia.com.br',
'littleberry.ru',
'livefixer.com',
'livia-pache.ru',
'livingroomdecoratingideas.website',
'lk-gosuslugi.ru',
'local-seo-for-multiple-locations.com',
'login-tinkoff.ru',
'loveorganic.ch',
'lsex.xyz',
'luckybull.io',
'lukoilcard.ru',
'lumb.co',
'luton-invest.ru',
'luxup.ru',
'magicdiet.gq',
'magnetic-bracelets.ru',
'makemoneyonline.com',
'makeprogress.ga',
'mamylik.ru',
'manimpotence.com',
'manualterap.roleforum.ru',
'marblestyle.ru',
'maridan.com.ua',
'marinetraffic.com',
'marketland.ml',
'masterseek.com',
'matras.space',
'mattgibson.us',
'max-apprais.com',
'maxxximoda.ru',
'mebel-iz-dereva.kiev.ua',
'mebelcomplekt.ru',
'mebeldekor.com.ua',
'med-dopomoga.com',
'med-zdorovie.com.ua',
'medbrowse.info',
'medicineseasybuy.com',
'meds-online24.com',
'meduza-consult.ru',
'megapolis-96.ru',
'metallo-konstruktsii.ru',
'metallosajding.ru',
'mifepriston.net',
'migronis.com',
'mikozstop.com',
'mikrocement.com.ua',
'mikrozaym2you.ru',
'minegam.com',
'mirobuvi.com.ua',
'mirtorrent.net',
'misselle.ru',
'mksport.ru',
'mnogabukaff.net',
'mobilemedia.md',
'mockupui.com',
'modforwot.ru',
'modnie-futbolki.net',
'moinozhki.com',
'monetizationking.net',
'money-for-placing-articles.com',
'money7777.info',
'moneytop.ru',
'moneyzzz.ru',
'mosrif.ru',
'mostorgnerud.ru',
'moy-dokument.com',
'moyakuhnia.ru',
'moyparnik.com',
'mrbojikobi4.biz',
'muscle-factory.com.ua',
'musichallaudio.ru',
'mybuh.kz',
'mycheaptraffic.com',
'mydoctorok.ru',
'myftpupload.com',
'myplaycity.com',
'nachalka21.ru',
'nanochskazki.ru',
'narosty.com',
'natali-forex.com',
'needtosellmyhousefast.com',
'net-profits.xyz',
'nevapotolok.ru',
'newsrosprom.ru',
'newstaffadsshop.club',
'niki-mlt.ru',
'nizniynovgorod.dienai.ru',
'novosti-hi-tech.ru',
'nubuilderian.info',
'nufaq.com',
'o-o-11-o-o.com',
'o-o-6-o-o.com',
'o-o-6-o-o.ru',
'o-o-8-o-o.com',
'o-o-8-o-o.ru',
'obsessionphrases.com',
'odiabetikah.com',
'odsadsmobile.biz',
'ofermerah.com',
'office2web.com',
'officedocuments.net',
'ogorodnic.com',
'okoshkah.com',
'online-binbank.ru',
'online-hit.info',
'online-intim.com',
'online-mkb.ru',
'online-templatestore.com',
'online-vtb.ru',
'onlinetvseries.me',
'onlinewot.ru',
'onlywoman.org',
'ooo-olni.ru',
'optsol.ru',
'orakul.spb.ru',
'osteochondrosis.ru',
'ownshop.cf',
'ozas.net',
'paidonlinesites.com',
'painting-planet.com',
'palvira.com.ua',
'pc-services.ru',
'perform-like-alibabaity.info',
'perform-likeism-alibaba.info',
'perm.dienai.ru',
'perper.ru',
'petrovka-online.com',
'photo-clip.ru',
'photokitchendesign.com',
'picturesmania.com',
'pills24h.com',
'piluli.info',
'piulatte.cz',
'pizza-imperia.com',
'pizza-tycoon.com',
'pk-pomosch.ru',
'pk-services.ru',
'podarkilove.ru',
'podemnik.pro',
'podseka1.ru',
'poiskzakona.ru',
'pokupaylegko.ru',
'popads.net',
'pops.foundation',
'popugaychiki.com',
'porndl.org',
'pornhive.org',
'pornhub-forum.ga',
'pornhub-forum.uni.me',
'pornhub-ru.com',
'porno-chaman.info',
'pornobest.su',
'pornoelita.info',
'pornoforadult.com',
'pornogig.com',
'pornohd1080.online',
'pornoklad.ru',
'pornonik.com',
'pornoplen.com',
'pornoslave.net',
'portnoff.od.ua',
'pospektr.ru',
'pozdravleniya-c.ru',
'predmety.in.ua',
'priceg.com',
'pricheski-video.com',
'prlog.ru',
'procrafts.ru',
'prodaemdveri.com',
'producm.ru',
'prodvigator.ua',
'professionalsolutions.eu',
'prointer.net.ua',
'promoforum.ru',
'promoteapps.online',
'promotion-for99.com',
'pron.pro',
'prosmibank.ru',
'prostitutki-rostova.ru.com',
'psa48.ru',
'psn-card.ru',
'punch.media',
'purchasepillsnorx.com',
'qualitymarketzone.com',
'quit-smoking.ga',
'qwesa.ru',
'rank-checker.online',
'rankings-analytics.com',
'ranksonic.info',
'ranksonic.net',
'ranksonic.org',
'rapidgator-porn.ga',
'rapidsites.pro',
'razborka-skoda.org.ua',
'rcb101.ru',
'realresultslist.com',
'rednise.com',
'regionshop.biz',
'releshop.ru',
'remkompov.ru',
'remont-kvartirspb.com',
'rent2spb.ru',
'replica-watch.ru',
'research.ifmo.ru',
'resell-seo-services.com',
'resellerclub.com',
'responsive-test.net',
'reversing.cc',
'rfavon.ru',
'rightenergysolutions.com.au',
'roof-city.ru',
'rospromtest.ru',
'ru-lk-rt.ru',
'ruinfocomp.ru',
'rulate.ru',
'rumamba.com',
'rupolitshow.ru',
'rus-lit.com',
'rusexy.xyz',
'ruspoety.ru',
'russian-postindex.ru',
'russian-translator.com',
'russkie-sochineniya.ru',
'rutor.group',
'rybalka-opt.ru',
's-forum.biz',
'sad-torg.com.ua',
'sady-urala.ru',
'saltspray.ru',
'sanjosestartups.com',
'santaren.by',
'santasgift.ml',
'santehnovich.ru',
'savetubevideo.com',
'savetubevideo.info',
'scansafe.net',
'scat.porn',
'screentoolkit.com',
'scripted.com',
'search-error.com',
'searchencrypt.com',
'security-corporation.com.ua',
'sel-hoz.com',
'sell-fb-group-here.com',
'semalt.com',
'semaltmedia.com',
'seo-2-0.com',
'seo-platform.com',
'seo-services-b2b.com',
'seo-services-wordpress.com',
'seo-smm.kz',
'seo-tips.top',
'seoanalyses.com',
'seobook.top',
'seocheckupx.com',
'seocheckupx.net',
'seoexperimenty.ru',
'seojokes.net',
'seopub.net',
'seoservices2018.com',
'serialsx.ru',
'sexsaoy.com',
'sexyali.com',
'sexyteens.hol.es',
'shagtomsk.ru',
'share-buttons-for-free.com',
'share-buttons.xyz',
'sharebutton.io',
'sharebutton.net',
'sharebutton.to',
'shnyagi.net',
'shopfishing.com.ua',
'shoppingmiracles.co.uk',
'shops-ru.ru',
'shtaketniki.ru',
'sibecoprom.ru',
'sim-dealer.ru',
'simple-share-buttons.com',
'sinhronperevod.ru',
'site-auditor.online',
'site5.com',
'siteripz.net',
'sitevaluation.org',
'skinali.com',
'skinali.photo-clip.ru',
'sladkoevideo.com',
'sledstvie-veli.net',
'slftsdybbg.ru',
'slkrm.ru',
'slomm.ru',
'slow-website.xyz',
'smailik.org',
'smartphonediscount.info',
'snabs.kz',
'snegozaderzhatel.ru',
'snip.to',
'snip.tw',
'soaksoak.ru',
'sochi-3d.ru',
'social-button.xyz',
'social-buttons-ii.xyz',
'social-buttons.com',
'social-traffic-1.xyz',
'social-traffic-2.xyz',
'social-traffic-3.xyz',
'social-traffic-4.xyz',
'social-traffic-5.xyz',
'social-traffic-7.xyz',
'social-widget.xyz',
'socialbuttons.xyz',
'socialseet.ru',
'socialtrade.biz',
'sohoindia.net',
'solitaire-game.ru',
'solnplast.ru',
'sosdepotdebilan.com',
'souvenirua.com',
'sovetskie-plakaty.ru',
'sowhoz.ru',
'soyuzexpedition.ru',
'sp-laptop.ru',
'sp-zakupki.ru',
'spain-poetry.com',
'spb-plitka.ru',
'spb-scenar.ru',
'speedup-my.site',
'spin2016.cf',
'sportwizard.ru',
'spravka130.ru',
'spravkavspb.net',
'sribno.net',
'sssexxx.net',
'sta-grand.ru',
'stavimdveri.ru',
'steame.ru',
'stiralkovich.ru',
'stocktwists.com',
'store-rx.com',
'stream-tds.com',
'stroi-24.ru',
'stroyka47.ru',
'studentguide.ru',
'su1ufa.ru',
'success-seo.com',
'sundrugstore.com',
'superiends.org',
'supermama.top',
'supervesti.ru',
'svensk-poesi.com',
'svetka.info',
'svetoch.moscow',
'sweet.tv',
't-machinery.ru',
't-rec.su',
'taihouse.ru',
'tamada69.com',
'tattoo-stickers.ru',
'tattooha.com',
'td-perimetr.ru',
'technika-remont.ru',
'tedxrj.com',
'tentcomplekt.ru',
'teplohod-gnezdo.ru',
'texnika.com.ua',
'tgtclick.com',
'thaoduoctoc.com',
'theautoprofit.ml',
'theguardlan.com',
'thesmartsearch.net',
'tokshow.online',
'tomck.com',
'top-gan.ru',
'top-l2.com',
'top1-seo-service.com',
'top10-way.com',
'topquality.cf',
'topseoservices.co',
'track-rankings.online',
'tracker24-gps.ru',
'traffic-cash.xyz',
'traffic2cash.org',
'traffic2cash.xyz',
'traffic2money.com',
'trafficgenius.xyz',
'trafficmonetize.org',
'trafficmonetizer.org',
'traphouselatino.net',
'trion.od.ua',
'tsatu.edu.ua',
'tsc-koleso.ru',
'tuningdom.ru',
'twsufa.ru',
'ua.tc',
'uasb.ru',
'ucoz.ru',
'udav.net',
'ufa.dienai.ru',
'ukrainian-poetry.com',
'ukrtvory.in.ua',
'ul-potolki.ru',
'undergroundcityphoto.com',
'unibus.su',
'univerfiles.com',
'unlimitdocs.net',
'unpredictable.ga',
'uptime-as.net',
'uptime-eu.net',
'uptime-us.net',
'uptime.com',
'uptimechecker.com',
'uzpaket.com',
'uzungil.com',
'vaderenergy.ru',
'validus.pro',
'vardenafil20.com',
'varikozdok.ru',
'veloland.in.ua',
'ventopt.by',
'veselokloun.ru',
'vesnatehno.com',
'vezdevoz.com.ua',
'viagra-soft.ru',
'video--production.com',
'video-woman.com',
'videos-for-your-business.com',
'videotop.biz',
'viel.su',
'viktoria-center.ru',
'vodaodessa.com',
'vodkoved.ru',
'vpdr.pl',
'vseigru.one',
'vzheludke.com',
'vzubkah.com',
'w3javascript.com',
'wakeupseoconsultant.com',
'wallpaperdesk.info',
'wdss.com.ua',
'we-ping-for-youic.info',
'web-revenue.xyz',
'webmaster-traffic.com',
'webmonetizer.net',
'website-analytics.online',
'website-analyzer.info',
'website-speed-check.site',
'website-speed-checker.site',
'websites-reviews.com',
'websocial.me',
'weburlopener.com',
'wmasterlead.com',
'woman-orgasm.ru',
'wordpress-crew.net',
'wordpresscore.com',
'workius.ru',
'works.if.ua',
'worldmed.info',
'wufak.com',
'ww2awards.info',
'www-lk-rt.ru',
'x-lime.com',
'x5market.ru',
'xkaz.org',
'xn-------53dbcapga5atlplfdm6ag1ab1bvehl0b7toa0k.xn--p1ai',
'xn-----6kcamwewcd9bayelq.xn--p1ai',
'xn-----7kcaaxchbbmgncr7chzy0k0hk.xn--p1ai',
'xn-----clckdac3bsfgdft3aebjp5etek.xn--p1ai',
'xn----7sbabhjc3ccc5aggbzfmfi.xn--p1ai',
'xn----7sbabm1ahc4b2aqff.su',
'xn----7sbabn5abjehfwi8bj.xn--p1ai',
'xn----7sbbpe3afguye.xn--p1ai',
'xn----7sbho2agebbhlivy.xn--p1ai',
'xn----8sbaki4azawu5b.xn--p1ai',
'xn----8sbarihbihxpxqgaf0g1e.xn--80adxhks',
'xn----8sbhefaln6acifdaon5c6f4axh.xn--p1ai',
'xn----8sblgmbj1a1bk8l.xn----161-4vemb6cjl7anbaea3afninj.xn--p1ai',
'xn----ctbbcjd3dbsehgi.xn--p1ai',
'xn----ctbfcdjl8baejhfb1oh.xn--p1ai',
'xn----ctbigni3aj4h.xn--p1ai',
'xn----ftbeoaiyg1ak1cb7d.xn--p1ai',
'xn----itbbudqejbfpg3l.com',
'xn--80aaajkrncdlqdh6ane8t.xn--p1ai',
'xn--80aanaardaperhcem4a6i.com',
'xn--80adaggc5bdhlfamsfdij4p7b.xn--p1ai',
'xn--80adgcaax6acohn6r.xn--p1ai',
'xn--90acenikpebbdd4f6d.xn--p1ai',
'xn--90acjmaltae3acm.xn--p1acf',
'xn--c1acygb.xn--p1ai',
'xn--d1abj0abs9d.in.ua',
'xn--d1aifoe0a9a.top',
'xn--e1aaajzchnkg.ru.com',
'xn--e1agf4c.xn--80adxhks',
'xtrafficplus.com',
'xz618.com',
'yaderenergy.ru',
'yes-com.com',
'yhirurga.ru',
'ykecwqlixx.ru',
'yodse.io',
'youporn-forum.ga',
'youporn-forum.uni.me',
'youporn-ru.com',
'your-good-links.com   ',
'your-tales.ru',
'yourserverisdown.com',
'zagadki.in.ua',
'zahvat.ru',
'zastroyka.org',
'zavod-gm.ru',
'zdm-auto.com',
'zdorovie-nogi.info',
'zelena-mriya.com.ua',
'zoominfo.com',
'zvetki.ru',
);

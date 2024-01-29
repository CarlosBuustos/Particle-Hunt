
    if (typeof(OA_zones) != 'undefined') {
        var OA_zoneids = '';
        for (var zonename in OA_zones) OA_zoneids += escape(zonename+'=' + OA_zones[zonename] + "|");
        OA_zoneids += '&amp;nz=1';
    } else {
        var OA_zoneids = escape('2604|2605|2592|2593|2594|2586|2584|2582|2556|2557|2606|2607|2608|2615|2612|2613|2614|2591|2577|2578|2616|2590|2585|2583|2558|2559|2560|2562|2563|2564|2565|2566|2568|2569|2570|2571|2572|2574|2575|2576|2474|2475|2476|2477|2478|2479|2480|2481|2652|2653|2654|2490|2491|2492|2493|2494|2495|2496|2497|2498|2499|2500|2501|2502|2503|2504|2505|2506|2507|2508|2509|2510|2511|2512|2513|2514|2515|2516|2517|2518|2519|2520|2521|2522|2523|2524|2525|2526|2527|2528|2529|2544|2545|2546|2547|2548|2550|2551|2552|2553|2554|2470|2471|2472|2473|2469|2622|2623|2624|2625|2626|2627|2628|2629|2630|2631|2651|2826|2827|2643|2644|2645|2831|2832|2830|2829|2828|2825|2824|2823');
    }

    if (typeof(OA_source) == 'undefined') { OA_source = ''; }
    var OA_p=location.protocol=='https:'?'https://adserver.salamanca24horas.com/www/delivery/spc.php':'http://adserver.salamanca24horas.com/www/delivery/spc.php';
    var OA_r=Math.floor(Math.random()*99999999);
    OA_output = new Array();

    var OA_spc="<"+"script type='text/javascript' ";
    OA_spc+="src='"+OA_p+"?zones="+OA_zoneids;
    OA_spc+="&amp;source="+escape(OA_source)+"&amp;r="+OA_r;
    OA_spc+="&amp;block=1";
    OA_spc+=(document.charset ? '&amp;charset='+document.charset : (document.characterSet ? '&amp;charset='+document.characterSet : ''));

    if (window.location) OA_spc+="&amp;loc="+escape(window.location);
    if (document.referrer) OA_spc+="&amp;referer="+escape(document.referrer);
    OA_spc+="'><"+"/script>";
    document.write(OA_spc);

    function OA_show(name) {
        if (typeof(OA_output[name]) == 'undefined') {
            return;
        } else {
            document.write(OA_output[name]);
        }
    }

    function OA_showpop(name) {
        zones = window.OA_zones ? window.OA_zones : false;
        var zoneid = name;
        if (typeof(window.OA_zones) != 'undefined') {
            if (typeof(zones[name]) == 'undefined') {
                return;
            }
            zoneid = zones[name];
        }

        OA_p=location.protocol=='https:'?'https://adserver.salamanca24horas.com/www/delivery/apu.php':'http://adserver.salamanca24horas.com/www/delivery/apu.php';

        var OA_pop="<"+"script type='text/javascript' ";
        OA_pop+="src='"+OA_p+"?zoneid="+zoneid;
        OA_pop+="&amp;source="+escape(OA_source)+"&amp;r="+OA_r;
        OA_spc+="&amp;block=1";
        if (window.location) OA_pop+="&amp;loc="+escape(window.location);
        if (document.referrer) OA_pop+="&amp;referer="+escape(document.referrer);
        OA_pop+="'><"+"/script>";

        document.write(OA_pop);
    }
var OA_fo = '';
OA_fo += "<"+"script type=\'text/javascript\' src=\'https://adserver.salamanca24horas.com/www/delivery/fl.js\'><"+"/script>\n";
document.write(OA_fo);

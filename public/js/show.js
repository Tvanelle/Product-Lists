$(document).ready(function () {
    $(document).ready(function () {

        //Section produit de super marché

        var h = 1;
        $("#addAut").click(function (e) {
            e.preventDefault();
            h += 1;
            var named = "autName" + h;
            //jQuery('body form #othersVideo').append(randomnumber);
            jQuery('body form #othersAut').append('<input type=text class=form-control name=' + named + ' />');
            document.getElementById('countAut').value = h;
        });

        var i = 1;
        $("#add").click(function (e) {
            e.preventDefault();
            i += 1;
            var named = "video" + i;
            //jQuery('body form #othersVideo').append(randomnumber);
            jQuery('body form #othersVideo').append('<input type=text class=form-control name=' + named + ' />');
            document.getElementById('countDataVid').value = i;
        });
        var j = 1;
        $("#addImg").click(function (e) {
            e.preventDefault();
            j += 1;
            var named = "image" + j;
            jQuery('body form #othersImg').append('<input type=file class=form-control name=' + named + ' />');
            document.getElementById('countData').value = j;

        });
        var k = 1;
        $("#addSocialNet").click(function (e) {
            e.preventDefault();
            k += 1;
            var named = "url" + k;
            jQuery('body form #othersSocialNet').append('<input type=text class=form-control name=' + named + ' />');
            document.getElementById('countDataUrl').value = k;
        });

        var n = 1;
        $("#addAddress").click(function (e) {
            e.preventDefault();
            n += 1;
            var named = "adressePtVte" + n;
            jQuery('body form #othersAddress').append('<input type=text class=form-control   name=' + named + ' />');
            document.getElementById('countDataAddress').value = n;
        });

        //Section Isbn

        var m = 1;
        $("#addImgBn").click(function (e) {
            e.preventDefault();
            m += 1;
            var named = "image" + m;
            jQuery('body form #othersImgBn').append('<input type=file class=form-control name=' + named + ' />');
            document.getElementById('countDataBn').value = m;

        });

        var o = 1;
        $("#addBn").click(function (e) {
            e.preventDefault();
            o += 1;
            var named = "video" + o;
            //jQuery('body form #othersVideo').append(randomnumber);
            jQuery('body form #othersVideoBn').append('<input type=text class=form-control name=' + named + ' />');
            document.getElementById('countDataVidBn').value = o;
        });

        var p = 1;
        $("#addSocialNetBn").click(function (e) {
            e.preventDefault();
            p += 1;
            var named = "url" + p;
            jQuery('body form #othersSocialNetBn').append('<input type=text class=form-control name=' + named + ' />');
            document.getElementById('countDataUrlBn').value = p;
        });

        var q = 1;
        $("#addAddressBn").click(function (e) {
            e.preventDefault();
            q += 1;
            var named = "adressePtVte" + q;
            jQuery('body form #othersAddressBn').append('<input type=text class=form-control   name=' + named + ' />');
            document.getElementById('countDataAddressBn').value = q;
        });

        //Section issn

        var r = 1;
        $("#addImgSn").click(function (e) {
            e.preventDefault();
            r += 1;
            var named = "image" + r;
            jQuery('body form #othersImgSn').append('<input type=file class=form-control name=' + named + ' />');
            document.getElementById('countDataSn').value = r;

        });

        var s = 1;
        $("#addSn").click(function (e) {
            e.preventDefault();
            s += 1;
            var named = "video" + s;
            //jQuery('body form #othersVideo').append(randomnumber);
            jQuery('body form #othersVideoSn').append('<input type=text class=form-control name=' + named + ' />');
            document.getElementById('countDataVidSn').value = s;
        });

        var t = 1;
        $("#addSocialNetSn").click(function (e) {
            e.preventDefault();
            t += 1;
            var named = "url" + t;
            jQuery('body form #othersSocialNetSn').append('<input type=text class=form-control name=' + named + ' />');
            document.getElementById('countDataUrlSn').value = t;
        });

        var u = 1;
        $("#addAddressSn").click(function (e) {
            e.preventDefault();
            u += 1;
            var named = "adressePtVte" + u;
            jQuery('body form #othersAddressSn').append('<input type=text class=form-control   name=' + named + ' />');
            document.getElementById('countDataAddressSn').value = u;
        });

        var v = 1;
        $("#addAutSn").click(function (e) {
            e.preventDefault();
            v += 1;
            var named = "autName" + v;
            //jQuery('body form #othersVideo').append(randomnumber);
            jQuery('body form #othersAutSn').append('<input type=text class=form-control name=' + named + ' />');
            document.getElementById('countAutSn').value = v;
        });
    });
});
//.named.$(' />')
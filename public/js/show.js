$(document).ready(function () {
    $(document).ready(function () {
        var i = 1;
        $("#add").click(function (e) {
            e.preventDefault();
            i += 1;
            var named = "video" + i;
            //jQuery('body form #othersVideo').append(randomnumber);
            jQuery('body form #othersVideo').append('<input type=file class=form-control name=' + named + ' />');
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
    });
});
//.named.$(' />')
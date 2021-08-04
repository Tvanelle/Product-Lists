$(document).ready(function () {
    $(document).ready(function () {
        var i = 1;
        $("#add").click(function (e) {
            e.preventDefault();
            var minNumber = 1; // le minimum
            var maxNumber = 10000; // le maximum
            var randomnumber = Math.floor(Math.random() * (maxNumber + 1) + minNumber);
            i += 1;
            var named = "video" + i;
            //jQuery('body form #othersVideo').append(randomnumber);
            jQuery('body form #othersVideo').append('<input type=file class=form-control name=' + named + ' />');
            document.getElementById('countDataVid').value = i;
        });

        $("#addImg").click(function (e) {
            e.preventDefault();
            i += 1;
            var named = "image" + i;
            jQuery('body form #othersImg').append('<input type=file class=form-control name=' + named + ' />');
            document.getElementById('countData').value = i;

        });

        $("#addSocialNet").click(function (e) {
            e.preventDefault();
            i += 1;
            var named = "url" + i;
            jQuery('body form #othersSocialNet').append('<input type=text class=form-control name=' + named + ' />');
            document.getElementById('countDataUrl').value = i;
        });

        $("#addCount").click(function (e) {
            e.preventDefault();
            i += 1;
            var named = "paysPtVte" + i;
            jQuery('body form #othersCount').append('<input type=text class=form-control   name=' + named + ' />');
            document.getElementById('countDataCount').value = i;
        });

        $("#addCity").click(function (e) {
            e.preventDefault();
            i += 1;
            var named = "villePtVte" + i;
            jQuery('body form #othersCity').append('<input type=text class=form-control  name=' + named + ' />');
            document.getElementById('countDataCity').value = i;
        });

        $("#addAddress").click(function (e) {
            e.preventDefault();
            i += 1;
            var named = "adressePtVte" + i;
            jQuery('body form #othersAddress').append('<input type=text class=form-control   name=' + named + ' />');
            document.getElementById('countDataAddress').value = i;
        });
    });
});
//.named.$(' />')
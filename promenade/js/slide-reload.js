/**
 * Created by beatriz on 20/12/2016.
 */

$(document).ready(function(){
    var x = 1 + Math.floor(Math.random() * 2);
    if (x == 1) {
    	console.log('entrou');
        $(".banner-content").attr('src',''+templateUrl+'/videos/video-02.mp4');
        $(".banner-content-img img").attr('src',''+templateUrl+'/images/videopicture2.jpg');
    }
    // else if (x == 2) {
    // 	console.log('nao entrou');
    //     jQuery(".item-02").addClass("active");
    // }
});
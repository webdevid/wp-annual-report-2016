/**
 * Created by wtriyadi on 5/4/16.
 */

$t = jQuery.noConflict();
$url = document.URL;
//$url2 = $url.substring(0, $url.length - 7);
//$url3 = $url2+'/';
console.log($url);
//console.log($url2);
//console.log($url3);

$t(document).ready(function () {
    $t(function ($) {

		jQuery('.navi_share').click(function(e){
			e.preventDefault();
			totalShares('http://annualreport2016.cifor.org/');
		});
		jQuery('.close-btn').on('click',function(e){
			e.preventDefault();
			totalShares('http://annualreport2016.cifor.org/');
		});
        $t('#getJSON').ready(function () {
            //$('#data-tab').fadeOut();
            $tURL = $url; //'<?php  echo the_permalink(get_the_ID()); ?>';
            totalShares($tURL);
        });

        // Format Number functions
        function ReplaceNumberWithCommas(yourNumber) {
            //Seperates the components of the number
            var components = yourNumber.toString().split(".");
            //Comma-fies the first part
            components[0] = components[0].replace(/\B(?=(\d{3})+(?!\d))/g, ",");
            //Combines the two sections
            return components.join(".");
        }


        // SHARE COUNTS FUNCTIONS

        // Facebook Shares Count
        function facebookShares($tURL) {
            $t.getJSON('http://graph.facebook.com/?id=' + $tURL, function (fbdata) {
                $t('#total-shares').attr('data-facebookShares', fbdata.share.share_count)
            });

		        }

        // Twitter Shares Count
        function twitterShares($tURL) {


			$t.getJSON('http://public.newsharecounts.com/count.json?url=' + $tURL + '&callback=?', function (twitdata) {
                //  $('#twitter-count').text('The URL has ' + ReplaceNumberWithCommas(twitdata.count) + ' shares count on Twitter')
                $t('#total-shares').attr('data-twitterShares', twitdata.count)
            });

            // $t.getJSON('http://public.newsharecounts.com/count.json?url=' + $url2 + '&callback=?', function (twitdata) {
            //     //  $('#twitter-count').text('The URL has ' + ReplaceNumberWithCommas(twitdata.count) + ' shares count on Twitter')
            //     $t('#total-shares').attr('data-twitterShares2', twitdata.count)
            // });

            // $t.getJSON('http://public.newsharecounts.com/count.json?url=' + $url3 + '&callback=?', function (twitdata) {
            //     //  $('#twitter-count').text('The URL has ' + ReplaceNumberWithCommas(twitdata.count) + ' shares count on Twitter')
            //     $t('#total-shares').attr('data-twitterShares3', twitdata.count)
            // });

        }

        // LinkIn Shares Count
        function linkdInShares($tURL) {

            $t.getJSON('https://www.linkedin.com/countserv/count/share?url=' + $tURL + '&callback=?', function (linkdindata) {
                // $('#linkdin-count').text('The URL has ' + ReplaceNumberWithCommas(linkdindata.count) + ' shares count on linkdIn')
                $t('#total-shares').attr('data-linkdInShares', linkdindata.count)
            });

			// $t.getJSON('http://www.linkedin.com/countserv/count/share?url=' + $url2 + '&callback=?', function (linkdindata) {
   //              // $('#linkdin-count').text('The URL has ' + ReplaceNumberWithCommas(linkdindata.count) + ' shares count on linkdIn')
   //              $t('#total-shares').attr('data-linkdInShares2', linkdindata.count)
   //          });

			// $t.getJSON('http://www.linkedin.com/countserv/count/share?url=' + $url3 + '&callback=?', function (linkdindata) {
   //              // $('#linkdin-count').text('The URL has ' + ReplaceNumberWithCommas(linkdindata.count) + ' shares count on linkdIn')
   //              $t('#total-shares').attr('data-linkdInShares3', linkdindata.count)
   //          });
        }

        function googleplusShares($tURL){
            var GooglePlusdata = {
                "method":"pos.plusones.get",
                "id":$tURL,
                "params":{
                    "nolog":true,
                    "id":$tURL,
                    "source":"widget",
                    "userId":"@viewer",
                    "groupId":"@self"
                },
                "jsonrpc":"2.0",
                "key":"p",
                "apiVersion":"v1"
            };
            $.ajax({
                type: "POST",
                url: "https://clients6.google.com/rpc",
                processData: true,
                contentType: 'application/json',
                cache:true,
                data: JSON.stringify(GooglePlusdata),
                success: function(r){
                    //add(r.result.metadata.globalCounts.count);
                    console.log(r);
                    $t('#total-shares').attr('data-googleplusShares', r.result.metadata.globalCounts.count);
                }
            });
        }

		function kFormatter(num) {
			return num > 999 ? (num/1000).toFixed(1) + 'k' : num
		}


        // Check if all JSON calls are finished or not

        function checkJSON_getSum(divcounter) {

            if ($t('#total-shares').attr('data-facebookShares') != undefined || $t('#total-shares').attr('data-twitterShares') != undefined || $t('#total-shares').attr('data-linkdinshares') != undefined){

                //console.log('All JSON calls are finished .. getting total sum!')
				setTimeout(function (){

					$fb1 = parseInt($t('#total-shares').attr('data-facebookShares'));

					console.log($fb1+' ini fb 0');

					$fb1 = $fb1 ? $fb1 : 0;
					//$fb2 = $fb2 ? $fb2 : 0;
					//$fb3 = $fb3 ? $fb3 : 0;

					$tw1 = parseInt($t('#total-shares').attr('data-twittershares'));
					// $tw2 = parseInt($t('#total-shares').attr('data-twittershares2'));
					// $tw3 = parseInt($t('#total-shares').attr('data-twittershares3'));

					 console.log($tw1+' ini tw 1');
					// console.log($tw2+' ini tw 2');
					// console.log($tw3+' ini tw 3');



					// $tw1 = $tw1 ? $tw1 : 0;
					// $tw2 = $tw2 ? $tw2 : 0;
					// $tw3 = $tw3 ? $tw3 : 0;

					$in1 = parseInt($t('#total-shares').attr('data-linkdinshares'));
					//$in2 = parseInt($t('#total-shares').attr('data-linkdinshares2'));
					//$in3 = parseInt($t('#total-shares').attr('data-linkdinshares3'));

					console.log($in1+' ini in 1');
					//console.log($in2+' ini in 2');
					//console.log($in3+' ini in 3');


					$in1 = $in1 ? $in1 : 0;
					//$in2 = $in2 ? $in2 : 0;
					//$in3 = $in3 ? $in3 : 0;

					$g1 = parseInt($t('#total-shares').attr('data-googleplusShares'));
                    console.log($g1+' ini g+ 1');
                    var googleplusShares = $g1;

					//if($fb1==$fb2 && $fb2 ==$fb3){
						var fbShares =  $fb1;
					//}else if($fb1==$fb2){
					//	var fbShares =  $fb3 + $fb2;
					//}
					//else{
					//	var fbShares =  $fb1 + $fb2  + $fb3 ;
					//}

					//if($tw1==$tw2 && $tw2==$tw3){
						var twitShares =  $tw1;
					// }else if($tw2==$tw3){
					// 	var twitShares =  $tw1 + $tw2;
					// }else{
					// 	var twitShares =  $tw1 + $tw2 + $tw3;
					// }
					//if($in1==$in2 && $in2 ==$in3){
						var linkdInShares =   $in1;
					// }else if($in2==$in3){
					// 	var linkdInShares =   $in1 + $in2;
					// }else{
					// 	var linkdInShares =   $in1 + $in2 + $in3;
					// }

					var fbShares =  fbShares ? fbShares : 0;
                    var twitShares =  twitShares ? twitShares : 0;
                    var linkdInShares =   linkdInShares ? linkdInShares : 0;
                    var googleplusShares = googleplusShares ? googleplusShares : 0;

					var totalShares =  fbShares + twitShares + linkdInShares + googleplusShares;
					console.log('fb'+fbShares+' twit '+twitShares + ' linkedin ' +linkdInShares +'');
					console.log(totalShares);

					var topicShares = $fb1 + $tw1 + $in1 + $g1;

					if (totalShares < 1){
						totalShares = '0';
					}

					if(topicShares < 1){
						topicShares = '0';
					}

					//$t('.share_counter').html(kFormatter(totalShares));
					$t(divcounter).html(kFormatter(totalShares));
					$t('.share_counter_home').html(kFormatter(totalShares));
					$t('#total-count').html('<span title="Count Facebook, Twitter, LinkedIn">' + kFormatter(totalShares) + '</span>');
					$t('.share_count_top').html('' + kFormatter(totalShares) + '<span class="shares">Shares</span>');
					$t('.share_count_top.topic_count_top').html('' + kFormatter(topicShares) + '<span class="shares">Shares</span>');

				}, 2000);
            }
            // Check for JSON again!
            else {
                setTimeout(function () {
                    checkJSON_getSum();
                }, 2000);
            }
        }

        function totalShares($tURL) {
            linkdInShares($tURL);
            twitterShares($tURL);
            googleplusShares($tURL);
            facebookShares($tURL);
            checkJSON_getSum('.share_counter');
        }

		function totalShares_home($tURL) {
            linkdInShares($tURL);
            twitterShares($tURL);
            googleplusShares($tURL);
            facebookShares($tURL);
            checkJSON_getSum('.share_counter_home');
        }


    });

});

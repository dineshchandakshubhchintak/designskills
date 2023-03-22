$(document).ready(function(e) {
	$(".rev_slider").revolution({
		sliderType: "standard",
		sliderLayout: "auto",
		dottedOverlay: "none",
		delay: 5000,
		navigation: {
			keyboardNavigation: "off",
			keyboard_direction: "horizontal",
			mouseScrollNavigation: "off",
			onHoverStop: "off",
			touch: {
				touchenabled: "on",
				swipe_threshold: 75,
				swipe_min_touches: 1,
				swipe_direction: "horizontal",
				drag_block_vertical: false
			},
			arrows: {
				style: "zeus",
				enable: true,
				hide_onmobile: true,
				hide_under: 600,
				hide_onleave: true,
				hide_delay: 200,
				hide_delay_mobile: 1200,
				tmp: '<div class="tp-title-wrap">    <div class="tp-arr-imgholder"></div> </div>',
				left: {
					h_align: "left",
					v_align: "center",
					h_offset: 30,
					v_offset: 0
				},
				right: {
					h_align: "right",
					v_align: "center",
					h_offset: 30,
					v_offset: 0
				}
			},
			bullets: {
				enable: true,
				hide_onmobile: true,
				hide_under: 600,
				style: "metis",
				hide_onleave: true,
				hide_delay: 200,
				hide_delay_mobile: 1200,
				direction: "horizontal",
				h_align: "center",
				v_align: "bottom",
				h_offset: 0,
				v_offset: 30,
				space: 5,
				tmp: '<span class="tp-bullet-img-wrap">  <span class="tp-bullet-image"></span></span><span class="tp-bullet-title">{{title}}</span>'
			}
		},
		responsiveLevels: [1240, 1024, 778],
		visibilityLevels: [1240, 1024, 778],
		gridwidth: [1170, 1024, 778, 480],
		gridheight: [650, 768, 960, 720],
		lazyType: "none",
		parallax: {
			origo: "slidercenter",
			speed: 1000,
			levels: [5, 10, 15, 20, 25, 30, 35, 40, 45, 46, 47, 48, 49, 50, 100, 55],
			type: "scroll"
		},
		shadow: 0,
		spinner: "off",
		stopLoop: "on",
		stopAfterLoops: 0,
		stopAtSlide: -1,
		shuffle: "off",
		autoHeight: "off",
		fullScreenAutoWidth: "off",
		fullScreenAlignForce: "off",
		fullScreenOffsetContainer: "",
		fullScreenOffset: "0",
		hideThumbsOnMobile: "off",
		hideSliderAtLimit: 0,
		hideCaptionAtLimit: 0,
		hideAllCaptionAtLilmit: 0,
		debugMode: false,
		fallbacks: {
			simplifyAll: "off",
			nextSlideOnWindowFocus: "off",
			disableFocusListener: false,
		}
	});
});


			// var ytplayerList;

			// 	function onPlayerReady(e) {
			// 		var video_data = e.target.getVideoData(),
			// 			label = video_data.video_id + ':' + video_data.title;
			// 		e.target.ulabel = label;
			// 		console.log(label + " is ready!");
			// 	}

			// 	function onPlayerError(e) {
			// 		console.log('[onPlayerError]');
			// 	}

			// 	function onPlayerStateChange(e) {
			// 		var label = e.target.ulabel;
			// 		if(e["data"] == YT.PlayerState.PLAYING) {
			// 			console.log({
			// 				event: "youtube",
			// 				action: "play:" + e.target.getPlaybackQuality(),
			// 				label: label
			// 			});
			// 			//if one video is play then pause other
			// 			pauseOthersYoutubes(e.target);
			// 		}
			// 		if(e["data"] == YT.PlayerState.PAUSED) {
			// 			console.log({
			// 				event: "youtube",
			// 				action: "pause:" + e.target.getPlaybackQuality(),
			// 				label: label
			// 			});
			// 		}
			// 		if(e["data"] == YT.PlayerState.ENDED) {
			// 			console.log({
			// 				event: "youtube",
			// 				action: "end",
			// 				label: label
			// 			});
			// 		}
			// 		//track number of buffering and quality of video
			// 		if(e["data"] == YT.PlayerState.BUFFERING) {
			// 			e.target.uBufferingCount ? ++e.target.uBufferingCount : e.target.uBufferingCount = 1;
			// 			console.log({
			// 				event: "youtube",
			// 				action: "buffering[" + e.target.uBufferingCount + "]:" + e.target.getPlaybackQuality(),
			// 				label: label
			// 			});
			// 			//if one video is play then pause other, this is needed because at start video is in buffered state and start playing without go to playing state
			// 			if(YT.PlayerState.UNSTARTED == e.target.uLastPlayerState) {
			// 				pauseOthersYoutubes(e.target);
			// 			}
			// 		}
			// 		//last action keep stage in uLastPlayerState
			// 		if(e.data != e.target.uLastPlayerState) {
			// 			console.log(label + ":state change from " + e.target.uLastPlayerState + " to " + e.data);
			// 			e.target.uLastPlayerState = e.data;
			// 		}
			// 	}

			// 	function initYoutubePlayers() {
			// 		ytplayerList = null; //reset
			// 		ytplayerList = []; //create new array to hold youtube player
			// 		for(var e = document.getElementsByTagName("iframe"), x = e.length; x--;) {
			// 			if(/youtube.com\/embed/.test(e[x].src)) {
			// 				ytplayerList.push(initYoutubePlayer(e[x]));
			// 				console.log("create a Youtube player successfully");
			// 			}
			// 		}
			// 	}

			// 	function pauseOthersYoutubes(currentPlayer) {
			// 		if(!currentPlayer) return;
			// 		for(var i = ytplayerList.length; i--;) {
			// 			if(ytplayerList[i] && (ytplayerList[i] != currentPlayer)) {
			// 				ytplayerList[i].pauseVideo();
			// 			}
			// 		}
			// 	}
			// 	//init a youtube iframe
			// 	function initYoutubePlayer(ytiframe) {
			// 		console.log("have youtube iframe");
			// 		var ytp = new YT.Player(ytiframe, {
			// 			events: {
			// 				onStateChange: onPlayerStateChange,
			// 				onError: onPlayerError,
			// 				onReady: onPlayerReady
			// 			}
			// 		});
			// 		ytiframe.ytp = ytp;
			// 		return ytp;
			// 	}

			// 	function onYouTubeIframeAPIReady() {
			// 		console.log("YouTubeIframeAPI is ready");
			// 		initYoutubePlayers();
			// 	}
			// 	var tag = document.createElement('script');
			// 	//use https when loading script and youtube iframe src since if user is logging in youtube the youtube src will switch to https.
			// 	tag.src = "https://www.youtube.com/iframe_api";
			// 	var firstScriptTag = document.getElementsByTagName('script')[0];
			// 	firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);
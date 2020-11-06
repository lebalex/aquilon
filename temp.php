<html dir="ltr" lang="en" class=" desktop portrait">
<!--<![endif]-->

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Аквилон</title>


    <meta name="description" content="Аквилон">



    <link href="//fonts.googleapis.com/css?family=Ubuntu:300,400,500,700&amp;subset=cyrillic" rel="stylesheet">

    <link href="/catalog/view/javascript/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="/catalog/view/theme/zemez894/stylesheet/material-icons.css" rel="stylesheet">

    <link href="/catalog/view/javascript/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link href="/catalog/view/theme/zemez894/stylesheet/photoswipe.css" rel="stylesheet">
    <link href="/catalog/view/theme/zemez894/stylesheet/stylesheet.css" rel="stylesheet">

    <link href="/catalog/view/theme/zemez894/js/fancybox/jquery.fancybox.css" rel="stylesheet">
    <link href="/catalog/view/theme/zemez894/stylesheet/homebuilder.css" type="text/css" rel="stylesheet" media="screen">
    <link href="/catalog/view/javascript/jquery/swiper/css/swiper.min.css" type="text/css" rel="stylesheet" media="screen">
    <link href="/catalog/view/javascript/jquery/swiper/css/opencart.css" type="text/css" rel="stylesheet" media="screen">

    <link href="https://livedemo00-opencart.template-help.com/opencart_prod-23526/image/catalog/favicon.png" rel="icon">

    <script src="/catalog/view/javascript/jquery/jquery-2.1.1.min.js" type="text/javascript"></script>
    <script src="/catalog/view/javascript/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>

    <script src="/catalog/view/theme/zemez894/js/zemez_megamenu/superfish.min.js" type="text/javascript"></script>
    <script src="/catalog/view/theme/zemez894/js/zemez_megamenu/jquery.rd-navbar.min.js" type="text/javascript"></script>
    <script src="/catalog/view/javascript/zemez894/swiper/swmin.js" type="text/javascript"></script>
    <script src="/catalog/view/javascript/jquery/swiper/js/swiper.jquery.js" type="text/javascript"></script>
    <script src="/catalog/view/theme/zemez894/js/zemez_single_category/bootstrap-tabcollapse.js" type="text/javascript"></script>


    <script src="/js/react_init/react.production.min.js" crossorigin=""></script>
    <script src="/js/react_init/react-dom.production.min.js" crossorigin=""></script>
    <link href="/style.css" rel="stylesheet" type="text/css">



    <style>
        /********************************************
	BREAKPOINT WIDTHS
********************************************/
        /********************************************
	FONTS
********************************************/
        /********************************************
	COLOURS
********************************************/
        .carousel .control-arrow,
        .carousel.carousel-slider .control-arrow {
            -webkit-transition: all 0.25s ease-in;
            -moz-transition: all 0.25s ease-in;
            -ms-transition: all 0.25s ease-in;
            -o-transition: all 0.25s ease-in;
            transition: all 0.25s ease-in;
            opacity: 0.4;
            filter: alpha(opacity=40);
            position: absolute;
            z-index: 2;
            top: 20px;
            background: none;
            border: 0;
            font-size: 32px;
            cursor: pointer;
        }

        .carousel .control-arrow:hover {
            opacity: 1;
            filter: alpha(opacity=100);
        }

        .carousel .control-arrow:before,
        .carousel.carousel-slider .control-arrow:before {
            margin: 0 5px;
            display: inline-block;
            border-top: 8px solid transparent;
            border-bottom: 8px solid transparent;
            content: '';
        }

        .carousel .control-disabled.control-arrow {
            opacity: 0;
            filter: alpha(opacity=0);
            cursor: inherit;
            display: none;
        }

        .carousel .control-prev.control-arrow {
            left: 0;
        }

        .carousel .control-prev.control-arrow:before {
            border-right: 8px solid #fff;
        }

        .carousel .control-next.control-arrow {
            right: 0;
        }

        .carousel .control-next.control-arrow:before {
            border-left: 8px solid #fff;
        }

        .carousel-root {
            outline: none;
        }

        .carousel {
            position: relative;
            width: 100%;
        }

        .carousel * {
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
        }

        .carousel img {
            width: 100%;
            display: inline-block;
            pointer-events: none;
        }

        .carousel .carousel {
            position: relative;
        }

        .carousel .control-arrow {
            outline: 0;
            border: 0;
            background: none;
            top: 50%;
            margin-top: -13px;
            font-size: 18px;
        }

        .carousel .thumbs-wrapper {
            margin: 20px;
            overflow: hidden;
        }

        .carousel .thumbs {
            -webkit-transition: all 0.15s ease-in;
            -moz-transition: all 0.15s ease-in;
            -ms-transition: all 0.15s ease-in;
            -o-transition: all 0.15s ease-in;
            transition: all 0.15s ease-in;
            -webkit-transform: translate3d(0, 0, 0);
            -moz-transform: translate3d(0, 0, 0);
            -ms-transform: translate3d(0, 0, 0);
            -o-transform: translate3d(0, 0, 0);
            transform: translate3d(0, 0, 0);
            position: relative;
            list-style: none;
            white-space: nowrap;
        }

        .carousel .thumb {
            -webkit-transition: border 0.15s ease-in;
            -moz-transition: border 0.15s ease-in;
            -ms-transition: border 0.15s ease-in;
            -o-transition: border 0.15s ease-in;
            transition: border 0.15s ease-in;
            display: inline-block;
            margin-right: 6px;
            white-space: nowrap;
            overflow: hidden;
            border: 3px solid #fff;
            padding: 2px;
        }

        .carousel .thumb:focus {
            border: 3px solid #ccc;
            outline: none;
        }

        .carousel .thumb.selected,
        .carousel .thumb:hover {
            border: 3px solid #333;
        }

        .carousel .thumb img {
            vertical-align: top;
        }

        .carousel.carousel-slider {
            position: relative;
            margin: 0;
            overflow: hidden;
        }

        .carousel.carousel-slider .control-arrow {
            top: 0;
            color: #fff;
            font-size: 26px;
            bottom: 0;
            margin-top: 0;
            padding: 5px;
        }

        .carousel.carousel-slider .control-arrow:hover {
            background: rgba(0, 0, 0, 0.2);
        }

        .carousel .slider-wrapper {
            overflow: hidden;
            margin: auto;
            width: 100%;
            -webkit-transition: height 0.15s ease-in;
            -moz-transition: height 0.15s ease-in;
            -ms-transition: height 0.15s ease-in;
            -o-transition: height 0.15s ease-in;
            transition: height 0.15s ease-in;
        }

        .carousel .slider-wrapper.axis-horizontal .slider {
            -ms-box-orient: horizontal;
            display: -webkit-box;
            display: -moz-box;
            display: -ms-flexbox;
            display: -moz-flex;
            display: -webkit-flex;
            display: flex;
        }

        .carousel .slider-wrapper.axis-horizontal .slider .slide {
            flex-direction: column;
            flex-flow: column;
        }

        .carousel .slider-wrapper.axis-vertical {
            -ms-box-orient: horizontal;
            display: -webkit-box;
            display: -moz-box;
            display: -ms-flexbox;
            display: -moz-flex;
            display: -webkit-flex;
            display: flex;
        }

        .carousel .slider-wrapper.axis-vertical .slider {
            -webkit-flex-direction: column;
            flex-direction: column;
        }

        .carousel .slider {
            margin: 0;
            padding: 0;
            position: relative;
            list-style: none;
            width: 100%;
        }

        .carousel .slider.animated {
            -webkit-transition: all 0.35s ease-in-out;
            -moz-transition: all 0.35s ease-in-out;
            -ms-transition: all 0.35s ease-in-out;
            -o-transition: all 0.35s ease-in-out;
            transition: all 0.35s ease-in-out;
        }

        .carousel .slide {
            min-width: 100%;
            margin: 0;
            position: relative;
            text-align: center;
            background: rgb(255, 255, 255);
        }

        .carousel .slide img {
            width: 100%;
            vertical-align: top;
            border: 0;
        }

        .carousel .slide iframe {
            display: inline-block;
            width: calc(100% - 80px);
            margin: 0 40px 40px;
            border: 0;
        }

        .carousel .slide .legend {
            -webkit-transition: all 0.5s ease-in-out;
            -moz-transition: all 0.5s ease-in-out;
            -ms-transition: all 0.5s ease-in-out;
            -o-transition: all 0.5s ease-in-out;
            transition: all 0.5s ease-in-out;
            position: absolute;
            bottom: 40px;
            left: 50%;
            margin-left: -45%;
            width: 90%;
            border-radius: 10px;
            background: #000;
            color: #fff;
            padding: 10px;
            font-size: 12px;
            text-align: center;
            opacity: 0.25;
            -webkit-transition: opacity 0.35s ease-in-out;
            -moz-transition: opacity 0.35s ease-in-out;
            -ms-transition: opacity 0.35s ease-in-out;
            -o-transition: opacity 0.35s ease-in-out;
            transition: opacity 0.35s ease-in-out;
        }

        .carousel .control-dots {
            position: absolute;
            bottom: 0;
            margin: 10px 0;
            padding: 0;
            text-align: center;
            width: 100%;
        }

        @media (min-width: 960px) {
            .carousel .control-dots {
                bottom: 0;
            }
        }

        .carousel .control-dots .dot {
            -webkit-transition: opacity 0.25s ease-in;
            -moz-transition: opacity 0.25s ease-in;
            -ms-transition: opacity 0.25s ease-in;
            -o-transition: opacity 0.25s ease-in;
            transition: opacity 0.25s ease-in;
            opacity: 0.3;
            filter: alpha(opacity=30);
            box-shadow: 1px 1px 2px rgba(0, 0, 0, 0.9);
            background: #fff;
            border-radius: 50%;
            width: 8px;
            height: 8px;
            cursor: pointer;
            display: inline-block;
            margin: 0 8px;
        }

        .carousel .control-dots .dot.selected,
        .carousel .control-dots .dot:hover {
            opacity: 1;
            filter: alpha(opacity=100);
        }

        .carousel .carousel-status {
            position: absolute;
            top: 0;
            right: 0;
            padding: 5px;
            font-size: 10px;
            text-shadow: 1px 1px 1px rgba(0, 0, 0, 0.9);
            color: #fff;
        }

        .carousel:hover .slide .legend {
            opacity: 1;
        }

        /*# sourceMappingURL=data:application/json;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly9jc3MvY2Fyb3VzZWwuY3NzIl0sIm5hbWVzIjpbXSwibWFwcGluZ3MiOiJBQUFBOzs0Q0FFNEM7QUFDNUM7OzRDQUU0QztBQUM1Qzs7NENBRTRDO0FBQzVDO0VBQ0UscUNBQXFDO0VBQ3JDLGtDQUFrQztFQUNsQyxpQ0FBaUM7RUFDakMsZ0NBQWdDO0VBQ2hDLDZCQUE2QjtFQUM3QixZQUFZO0VBQ1oseUJBQXlCO0VBQ3pCLGtCQUFrQjtFQUNsQixVQUFVO0VBQ1YsU0FBUztFQUNULGdCQUFnQjtFQUNoQixTQUFTO0VBQ1QsZUFBZTtFQUNmLGVBQWUsRUFBRTtFQUNqQjtJQUNFLFVBQVU7SUFDViwwQkFBMEIsRUFBRTtFQUM5QjtJQUNFLGFBQWE7SUFDYixxQkFBcUI7SUFDckIsaUNBQWlDO0lBQ2pDLG9DQUFvQztJQUNwQyxXQUFXLEVBQUU7RUFDZjtJQUNFLFVBQVU7SUFDVix3QkFBd0I7SUFDeEIsZUFBZTtJQUNmLGFBQWEsRUFBRTtFQUNqQjtJQUNFLE9BQU8sRUFBRTtJQUNUO01BQ0UsNEJBQTRCLEVBQUU7RUFDbEM7SUFDRSxRQUFRLEVBQUU7SUFDVjtNQUNFLDJCQUEyQixFQUFFOztBQUVuQztFQUNFLGFBQWEsRUFBRTs7QUFFakI7RUFDRSxrQkFBa0I7RUFDbEIsV0FBVyxFQUFFO0VBQ2I7SUFDRSw4QkFBOEI7SUFDOUIsMkJBQTJCO0lBQzNCLHNCQUFzQixFQUFFO0VBQzFCO0lBQ0UsV0FBVztJQUNYLHFCQUFxQjtJQUNyQixvQkFBb0IsRUFBRTtFQUN4QjtJQUNFLGtCQUFrQixFQUFFO0VBQ3RCO0lBQ0UsVUFBVTtJQUNWLFNBQVM7SUFDVCxnQkFBZ0I7SUFDaEIsUUFBUTtJQUNSLGlCQUFpQjtJQUNqQixlQUFlLEVBQUU7RUFDbkI7SUFDRSxZQUFZO0lBQ1osZ0JBQWdCLEVBQUU7RUFDcEI7SUFDRSxxQ0FBcUM7SUFDckMsa0NBQWtDO0lBQ2xDLGlDQUFpQztJQUNqQyxnQ0FBZ0M7SUFDaEMsNkJBQTZCO0lBQzdCLHVDQUF1QztJQUN2QyxvQ0FBb0M7SUFDcEMsbUNBQW1DO0lBQ25DLGtDQUFrQztJQUNsQywrQkFBK0I7SUFDL0Isa0JBQWtCO0lBQ2xCLGdCQUFnQjtJQUNoQixtQkFBbUIsRUFBRTtFQUN2QjtJQUNFLHdDQUF3QztJQUN4QyxxQ0FBcUM7SUFDckMsb0NBQW9DO0lBQ3BDLG1DQUFtQztJQUNuQyxnQ0FBZ0M7SUFDaEMscUJBQXFCO0lBQ3JCLGlCQUFpQjtJQUNqQixtQkFBbUI7SUFDbkIsZ0JBQWdCO0lBQ2hCLHNCQUFzQjtJQUN0QixZQUFZLEVBQUU7SUFDZDtNQUNFLHNCQUFzQjtNQUN0QixhQUFhLEVBQUU7SUFDakI7TUFDRSxzQkFBc0IsRUFBRTtJQUMxQjtNQUNFLG1CQUFtQixFQUFFO0VBQ3pCO0lBQ0Usa0JBQWtCO0lBQ2xCLFNBQVM7SUFDVCxnQkFBZ0IsRUFBRTtJQUNsQjtNQUNFLE1BQU07TUFDTixXQUFXO01BQ1gsZUFBZTtNQUNmLFNBQVM7TUFDVCxhQUFhO01BQ2IsWUFBWSxFQUFFO01BQ2Q7UUFDRSw4QkFBOEIsRUFBRTtFQUN0QztJQUNFLGdCQUFnQjtJQUNoQixZQUFZO0lBQ1osV0FBVztJQUNYLHdDQUF3QztJQUN4QyxxQ0FBcUM7SUFDckMsb0NBQW9DO0lBQ3BDLG1DQUFtQztJQUNuQyxnQ0FBZ0MsRUFBRTtJQUNsQztNQUNFLDBCQUEwQjtNQUMxQixvQkFBb0I7TUFDcEIsaUJBQWlCO01BQ2pCLG9CQUFvQjtNQUNwQixrQkFBa0I7TUFDbEIscUJBQXFCO01BQ3JCLGFBQWEsRUFBRTtNQUNmO1FBQ0Usc0JBQXNCO1FBQ3RCLGlCQUFpQixFQUFFO0lBQ3ZCO01BQ0UsMEJBQTBCO01BQzFCLG9CQUFvQjtNQUNwQixpQkFBaUI7TUFDakIsb0JBQW9CO01BQ3BCLGtCQUFrQjtNQUNsQixxQkFBcUI7TUFDckIsYUFBYSxFQUFFO01BQ2Y7UUFDRSw4QkFBOEI7UUFDOUIsc0JBQXNCLEVBQUU7RUFDOUI7SUFDRSxTQUFTO0lBQ1QsVUFBVTtJQUNWLGtCQUFrQjtJQUNsQixnQkFBZ0I7SUFDaEIsV0FBVyxFQUFFO0lBQ2I7TUFDRSx5Q0FBeUM7TUFDekMsc0NBQXNDO01BQ3RDLHFDQUFxQztNQUNyQyxvQ0FBb0M7TUFDcEMsaUNBQWlDLEVBQUU7RUFDdkM7SUFDRSxlQUFlO0lBQ2YsU0FBUztJQUNULGtCQUFrQjtJQUNsQixrQkFBa0I7SUFDbEIsOEJBQThCLEVBQUU7SUFDaEM7TUFDRSxXQUFXO01BQ1gsbUJBQW1CO01BQ25CLFNBQVMsRUFBRTtJQUNiO01BQ0UscUJBQXFCO01BQ3JCLHdCQUF3QjtNQUN4QixtQkFBbUI7TUFDbkIsU0FBUyxFQUFFO0lBQ2I7TUFDRSx3Q0FBd0M7TUFDeEMscUNBQXFDO01BQ3JDLG9DQUFvQztNQUNwQyxtQ0FBbUM7TUFDbkMsZ0NBQWdDO01BQ2hDLGtCQUFrQjtNQUNsQixZQUFZO01BQ1osU0FBUztNQUNULGlCQUFpQjtNQUNqQixVQUFVO01BQ1YsbUJBQW1CO01BQ25CLGdCQUFnQjtNQUNoQixXQUFXO01BQ1gsYUFBYTtNQUNiLGVBQWU7TUFDZixrQkFBa0I7TUFDbEIsYUFBYTtNQUNiLDZDQUE2QztNQUM3QywwQ0FBMEM7TUFDMUMseUNBQXlDO01BQ3pDLHdDQUF3QztNQUN4QyxxQ0FBcUMsRUFBRTtFQUMzQztJQUNFLGtCQUFrQjtJQUNsQixTQUFTO0lBQ1QsY0FBYztJQUNkLFVBQVU7SUFDVixrQkFBa0I7SUFDbEIsV0FBVyxFQUFFO0lBQ2I7TUFDRTtRQUNFLFNBQVMsRUFBRSxFQUFFO0lBQ2pCO01BQ0UseUNBQXlDO01BQ3pDLHNDQUFzQztNQUN0QyxxQ0FBcUM7TUFDckMsb0NBQW9DO01BQ3BDLGlDQUFpQztNQUNqQyxZQUFZO01BQ1oseUJBQXlCO01BQ3pCLDBDQUEwQztNQUMxQyxnQkFBZ0I7TUFDaEIsa0JBQWtCO01BQ2xCLFVBQVU7TUFDVixXQUFXO01BQ1gsZUFBZTtNQUNmLHFCQUFxQjtNQUNyQixhQUFhLEVBQUU7TUFDZjtRQUNFLFVBQVU7UUFDViwwQkFBMEIsRUFBRTtFQUNsQztJQUNFLGtCQUFrQjtJQUNsQixNQUFNO0lBQ04sUUFBUTtJQUNSLFlBQVk7SUFDWixlQUFlO0lBQ2YsMkNBQTJDO0lBQzNDLFdBQVcsRUFBRTtFQUNmO0lBQ0UsVUFBVSxFQUFFIiwic291cmNlc0NvbnRlbnQiOlsiLyoqKioqKioqKioqKioqKioqKioqKioqKioqKioqKioqKioqKioqKioqKioqXG5cdEJSRUFLUE9JTlQgV0lEVEhTXG4qKioqKioqKioqKioqKioqKioqKioqKioqKioqKioqKioqKioqKioqKioqKi9cbi8qKioqKioqKioqKioqKioqKioqKioqKioqKioqKioqKioqKioqKioqKioqKlxuXHRGT05UU1xuKioqKioqKioqKioqKioqKioqKioqKioqKioqKioqKioqKioqKioqKioqKiovXG4vKioqKioqKioqKioqKioqKioqKioqKioqKioqKioqKioqKioqKioqKioqKipcblx0Q09MT1VSU1xuKioqKioqKioqKioqKioqKioqKioqKioqKioqKioqKioqKioqKioqKioqKiovXG4uY2Fyb3VzZWwgLmNvbnRyb2wtYXJyb3csIC5jYXJvdXNlbC5jYXJvdXNlbC1zbGlkZXIgLmNvbnRyb2wtYXJyb3cge1xuICAtd2Via2l0LXRyYW5zaXRpb246IGFsbCAwLjI1cyBlYXNlLWluO1xuICAtbW96LXRyYW5zaXRpb246IGFsbCAwLjI1cyBlYXNlLWluO1xuICAtbXMtdHJhbnNpdGlvbjogYWxsIDAuMjVzIGVhc2UtaW47XG4gIC1vLXRyYW5zaXRpb246IGFsbCAwLjI1cyBlYXNlLWluO1xuICB0cmFuc2l0aW9uOiBhbGwgMC4yNXMgZWFzZS1pbjtcbiAgb3BhY2l0eTogMC40O1xuICBmaWx0ZXI6IGFscGhhKG9wYWNpdHk9NDApO1xuICBwb3NpdGlvbjogYWJzb2x1dGU7XG4gIHotaW5kZXg6IDI7XG4gIHRvcDogMjBweDtcbiAgYmFja2dyb3VuZDogbm9uZTtcbiAgYm9yZGVyOiAwO1xuICBmb250LXNpemU6IDMycHg7XG4gIGN1cnNvcjogcG9pbnRlcjsgfVxuICAuY2Fyb3VzZWwgLmNvbnRyb2wtYXJyb3c6aG92ZXIge1xuICAgIG9wYWNpdHk6IDE7XG4gICAgZmlsdGVyOiBhbHBoYShvcGFjaXR5PTEwMCk7IH1cbiAgLmNhcm91c2VsIC5jb250cm9sLWFycm93OmJlZm9yZSwgLmNhcm91c2VsLmNhcm91c2VsLXNsaWRlciAuY29udHJvbC1hcnJvdzpiZWZvcmUge1xuICAgIG1hcmdpbjogMCA1cHg7XG4gICAgZGlzcGxheTogaW5saW5lLWJsb2NrO1xuICAgIGJvcmRlci10b3A6IDhweCBzb2xpZCB0cmFuc3BhcmVudDtcbiAgICBib3JkZXItYm90dG9tOiA4cHggc29saWQgdHJhbnNwYXJlbnQ7XG4gICAgY29udGVudDogJyc7IH1cbiAgLmNhcm91c2VsIC5jb250cm9sLWRpc2FibGVkLmNvbnRyb2wtYXJyb3cge1xuICAgIG9wYWNpdHk6IDA7XG4gICAgZmlsdGVyOiBhbHBoYShvcGFjaXR5PTApO1xuICAgIGN1cnNvcjogaW5oZXJpdDtcbiAgICBkaXNwbGF5OiBub25lOyB9XG4gIC5jYXJvdXNlbCAuY29udHJvbC1wcmV2LmNvbnRyb2wtYXJyb3cge1xuICAgIGxlZnQ6IDA7IH1cbiAgICAuY2Fyb3VzZWwgLmNvbnRyb2wtcHJldi5jb250cm9sLWFycm93OmJlZm9yZSB7XG4gICAgICBib3JkZXItcmlnaHQ6IDhweCBzb2xpZCAjZmZmOyB9XG4gIC5jYXJvdXNlbCAuY29udHJvbC1uZXh0LmNvbnRyb2wtYXJyb3cge1xuICAgIHJpZ2h0OiAwOyB9XG4gICAgLmNhcm91c2VsIC5jb250cm9sLW5leHQuY29udHJvbC1hcnJvdzpiZWZvcmUge1xuICAgICAgYm9yZGVyLWxlZnQ6IDhweCBzb2xpZCAjZmZmOyB9XG5cbi5jYXJvdXNlbC1yb290IHtcbiAgb3V0bGluZTogbm9uZTsgfVxuXG4uY2Fyb3VzZWwge1xuICBwb3NpdGlvbjogcmVsYXRpdmU7XG4gIHdpZHRoOiAxMDAlOyB9XG4gIC5jYXJvdXNlbCAqIHtcbiAgICAtd2Via2l0LWJveC1zaXppbmc6IGJvcmRlci1ib3g7XG4gICAgLW1vei1ib3gtc2l6aW5nOiBib3JkZXItYm94O1xuICAgIGJveC1zaXppbmc6IGJvcmRlci1ib3g7IH1cbiAgLmNhcm91c2VsIGltZyB7XG4gICAgd2lkdGg6IDEwMCU7XG4gICAgZGlzcGxheTogaW5saW5lLWJsb2NrO1xuICAgIHBvaW50ZXItZXZlbnRzOiBub25lOyB9XG4gIC5jYXJvdXNlbCAuY2Fyb3VzZWwge1xuICAgIHBvc2l0aW9uOiByZWxhdGl2ZTsgfVxuICAuY2Fyb3VzZWwgLmNvbnRyb2wtYXJyb3cge1xuICAgIG91dGxpbmU6IDA7XG4gICAgYm9yZGVyOiAwO1xuICAgIGJhY2tncm91bmQ6IG5vbmU7XG4gICAgdG9wOiA1MCU7XG4gICAgbWFyZ2luLXRvcDogLTEzcHg7XG4gICAgZm9udC1zaXplOiAxOHB4OyB9XG4gIC5jYXJvdXNlbCAudGh1bWJzLXdyYXBwZXIge1xuICAgIG1hcmdpbjogMjBweDtcbiAgICBvdmVyZmxvdzogaGlkZGVuOyB9XG4gIC5jYXJvdXNlbCAudGh1bWJzIHtcbiAgICAtd2Via2l0LXRyYW5zaXRpb246IGFsbCAwLjE1cyBlYXNlLWluO1xuICAgIC1tb3otdHJhbnNpdGlvbjogYWxsIDAuMTVzIGVhc2UtaW47XG4gICAgLW1zLXRyYW5zaXRpb246IGFsbCAwLjE1cyBlYXNlLWluO1xuICAgIC1vLXRyYW5zaXRpb246IGFsbCAwLjE1cyBlYXNlLWluO1xuICAgIHRyYW5zaXRpb246IGFsbCAwLjE1cyBlYXNlLWluO1xuICAgIC13ZWJraXQtdHJhbnNmb3JtOiB0cmFuc2xhdGUzZCgwLCAwLCAwKTtcbiAgICAtbW96LXRyYW5zZm9ybTogdHJhbnNsYXRlM2QoMCwgMCwgMCk7XG4gICAgLW1zLXRyYW5zZm9ybTogdHJhbnNsYXRlM2QoMCwgMCwgMCk7XG4gICAgLW8tdHJhbnNmb3JtOiB0cmFuc2xhdGUzZCgwLCAwLCAwKTtcbiAgICB0cmFuc2Zvcm06IHRyYW5zbGF0ZTNkKDAsIDAsIDApO1xuICAgIHBvc2l0aW9uOiByZWxhdGl2ZTtcbiAgICBsaXN0LXN0eWxlOiBub25lO1xuICAgIHdoaXRlLXNwYWNlOiBub3dyYXA7IH1cbiAgLmNhcm91c2VsIC50aHVtYiB7XG4gICAgLXdlYmtpdC10cmFuc2l0aW9uOiBib3JkZXIgMC4xNXMgZWFzZS1pbjtcbiAgICAtbW96LXRyYW5zaXRpb246IGJvcmRlciAwLjE1cyBlYXNlLWluO1xuICAgIC1tcy10cmFuc2l0aW9uOiBib3JkZXIgMC4xNXMgZWFzZS1pbjtcbiAgICAtby10cmFuc2l0aW9uOiBib3JkZXIgMC4xNXMgZWFzZS1pbjtcbiAgICB0cmFuc2l0aW9uOiBib3JkZXIgMC4xNXMgZWFzZS1pbjtcbiAgICBkaXNwbGF5OiBpbmxpbmUtYmxvY2s7XG4gICAgbWFyZ2luLXJpZ2h0OiA2cHg7XG4gICAgd2hpdGUtc3BhY2U6IG5vd3JhcDtcbiAgICBvdmVyZmxvdzogaGlkZGVuO1xuICAgIGJvcmRlcjogM3B4IHNvbGlkICNmZmY7XG4gICAgcGFkZGluZzogMnB4OyB9XG4gICAgLmNhcm91c2VsIC50aHVtYjpmb2N1cyB7XG4gICAgICBib3JkZXI6IDNweCBzb2xpZCAjY2NjO1xuICAgICAgb3V0bGluZTogbm9uZTsgfVxuICAgIC5jYXJvdXNlbCAudGh1bWIuc2VsZWN0ZWQsIC5jYXJvdXNlbCAudGh1bWI6aG92ZXIge1xuICAgICAgYm9yZGVyOiAzcHggc29saWQgIzMzMzsgfVxuICAgIC5jYXJvdXNlbCAudGh1bWIgaW1nIHtcbiAgICAgIHZlcnRpY2FsLWFsaWduOiB0b3A7IH1cbiAgLmNhcm91c2VsLmNhcm91c2VsLXNsaWRlciB7XG4gICAgcG9zaXRpb246IHJlbGF0aXZlO1xuICAgIG1hcmdpbjogMDtcbiAgICBvdmVyZmxvdzogaGlkZGVuOyB9XG4gICAgLmNhcm91c2VsLmNhcm91c2VsLXNsaWRlciAuY29udHJvbC1hcnJvdyB7XG4gICAgICB0b3A6IDA7XG4gICAgICBjb2xvcjogI2ZmZjtcbiAgICAgIGZvbnQtc2l6ZTogMjZweDtcbiAgICAgIGJvdHRvbTogMDtcbiAgICAgIG1hcmdpbi10b3A6IDA7XG4gICAgICBwYWRkaW5nOiA1cHg7IH1cbiAgICAgIC5jYXJvdXNlbC5jYXJvdXNlbC1zbGlkZXIgLmNvbnRyb2wtYXJyb3c6aG92ZXIge1xuICAgICAgICBiYWNrZ3JvdW5kOiByZ2JhKDAsIDAsIDAsIDAuMik7IH1cbiAgLmNhcm91c2VsIC5zbGlkZXItd3JhcHBlciB7XG4gICAgb3ZlcmZsb3c6IGhpZGRlbjtcbiAgICBtYXJnaW46IGF1dG87XG4gICAgd2lkdGg6IDEwMCU7XG4gICAgLXdlYmtpdC10cmFuc2l0aW9uOiBoZWlnaHQgMC4xNXMgZWFzZS1pbjtcbiAgICAtbW96LXRyYW5zaXRpb246IGhlaWdodCAwLjE1cyBlYXNlLWluO1xuICAgIC1tcy10cmFuc2l0aW9uOiBoZWlnaHQgMC4xNXMgZWFzZS1pbjtcbiAgICAtby10cmFuc2l0aW9uOiBoZWlnaHQgMC4xNXMgZWFzZS1pbjtcbiAgICB0cmFuc2l0aW9uOiBoZWlnaHQgMC4xNXMgZWFzZS1pbjsgfVxuICAgIC5jYXJvdXNlbCAuc2xpZGVyLXdyYXBwZXIuYXhpcy1ob3Jpem9udGFsIC5zbGlkZXIge1xuICAgICAgLW1zLWJveC1vcmllbnQ6IGhvcml6b250YWw7XG4gICAgICBkaXNwbGF5OiAtd2Via2l0LWJveDtcbiAgICAgIGRpc3BsYXk6IC1tb3otYm94O1xuICAgICAgZGlzcGxheTogLW1zLWZsZXhib3g7XG4gICAgICBkaXNwbGF5OiAtbW96LWZsZXg7XG4gICAgICBkaXNwbGF5OiAtd2Via2l0LWZsZXg7XG4gICAgICBkaXNwbGF5OiBmbGV4OyB9XG4gICAgICAuY2Fyb3VzZWwgLnNsaWRlci13cmFwcGVyLmF4aXMtaG9yaXpvbnRhbCAuc2xpZGVyIC5zbGlkZSB7XG4gICAgICAgIGZsZXgtZGlyZWN0aW9uOiBjb2x1bW47XG4gICAgICAgIGZsZXgtZmxvdzogY29sdW1uOyB9XG4gICAgLmNhcm91c2VsIC5zbGlkZXItd3JhcHBlci5heGlzLXZlcnRpY2FsIHtcbiAgICAgIC1tcy1ib3gtb3JpZW50OiBob3Jpem9udGFsO1xuICAgICAgZGlzcGxheTogLXdlYmtpdC1ib3g7XG4gICAgICBkaXNwbGF5OiAtbW96LWJveDtcbiAgICAgIGRpc3BsYXk6IC1tcy1mbGV4Ym94O1xuICAgICAgZGlzcGxheTogLW1vei1mbGV4O1xuICAgICAgZGlzcGxheTogLXdlYmtpdC1mbGV4O1xuICAgICAgZGlzcGxheTogZmxleDsgfVxuICAgICAgLmNhcm91c2VsIC5zbGlkZXItd3JhcHBlci5heGlzLXZlcnRpY2FsIC5zbGlkZXIge1xuICAgICAgICAtd2Via2l0LWZsZXgtZGlyZWN0aW9uOiBjb2x1bW47XG4gICAgICAgIGZsZXgtZGlyZWN0aW9uOiBjb2x1bW47IH1cbiAgLmNhcm91c2VsIC5zbGlkZXIge1xuICAgIG1hcmdpbjogMDtcbiAgICBwYWRkaW5nOiAwO1xuICAgIHBvc2l0aW9uOiByZWxhdGl2ZTtcbiAgICBsaXN0LXN0eWxlOiBub25lO1xuICAgIHdpZHRoOiAxMDAlOyB9XG4gICAgLmNhcm91c2VsIC5zbGlkZXIuYW5pbWF0ZWQge1xuICAgICAgLXdlYmtpdC10cmFuc2l0aW9uOiBhbGwgMC4zNXMgZWFzZS1pbi1vdXQ7XG4gICAgICAtbW96LXRyYW5zaXRpb246IGFsbCAwLjM1cyBlYXNlLWluLW91dDtcbiAgICAgIC1tcy10cmFuc2l0aW9uOiBhbGwgMC4zNXMgZWFzZS1pbi1vdXQ7XG4gICAgICAtby10cmFuc2l0aW9uOiBhbGwgMC4zNXMgZWFzZS1pbi1vdXQ7XG4gICAgICB0cmFuc2l0aW9uOiBhbGwgMC4zNXMgZWFzZS1pbi1vdXQ7IH1cbiAgLmNhcm91c2VsIC5zbGlkZSB7XG4gICAgbWluLXdpZHRoOiAxMDAlO1xuICAgIG1hcmdpbjogMDtcbiAgICBwb3NpdGlvbjogcmVsYXRpdmU7XG4gICAgdGV4dC1hbGlnbjogY2VudGVyO1xuICAgIGJhY2tncm91bmQ6IHJnYigyNTUsIDI1NSwgMjU1KTsgfVxuICAgIC5jYXJvdXNlbCAuc2xpZGUgaW1nIHtcbiAgICAgIHdpZHRoOiAxMDAlO1xuICAgICAgdmVydGljYWwtYWxpZ246IHRvcDtcbiAgICAgIGJvcmRlcjogMDsgfVxuICAgIC5jYXJvdXNlbCAuc2xpZGUgaWZyYW1lIHtcbiAgICAgIGRpc3BsYXk6IGlubGluZS1ibG9jaztcbiAgICAgIHdpZHRoOiBjYWxjKDEwMCUgLSA4MHB4KTtcbiAgICAgIG1hcmdpbjogMCA0MHB4IDQwcHg7XG4gICAgICBib3JkZXI6IDA7IH1cbiAgICAuY2Fyb3VzZWwgLnNsaWRlIC5sZWdlbmQge1xuICAgICAgLXdlYmtpdC10cmFuc2l0aW9uOiBhbGwgMC41cyBlYXNlLWluLW91dDtcbiAgICAgIC1tb3otdHJhbnNpdGlvbjogYWxsIDAuNXMgZWFzZS1pbi1vdXQ7XG4gICAgICAtbXMtdHJhbnNpdGlvbjogYWxsIDAuNXMgZWFzZS1pbi1vdXQ7XG4gICAgICAtby10cmFuc2l0aW9uOiBhbGwgMC41cyBlYXNlLWluLW91dDtcbiAgICAgIHRyYW5zaXRpb246IGFsbCAwLjVzIGVhc2UtaW4tb3V0O1xuICAgICAgcG9zaXRpb246IGFic29sdXRlO1xuICAgICAgYm90dG9tOiA0MHB4O1xuICAgICAgbGVmdDogNTAlO1xuICAgICAgbWFyZ2luLWxlZnQ6IC00NSU7XG4gICAgICB3aWR0aDogOTAlO1xuICAgICAgYm9yZGVyLXJhZGl1czogMTBweDtcbiAgICAgIGJhY2tncm91bmQ6ICMwMDA7XG4gICAgICBjb2xvcjogI2ZmZjtcbiAgICAgIHBhZGRpbmc6IDEwcHg7XG4gICAgICBmb250LXNpemU6IDEycHg7XG4gICAgICB0ZXh0LWFsaWduOiBjZW50ZXI7XG4gICAgICBvcGFjaXR5OiAwLjI1O1xuICAgICAgLXdlYmtpdC10cmFuc2l0aW9uOiBvcGFjaXR5IDAuMzVzIGVhc2UtaW4tb3V0O1xuICAgICAgLW1vei10cmFuc2l0aW9uOiBvcGFjaXR5IDAuMzVzIGVhc2UtaW4tb3V0O1xuICAgICAgLW1zLXRyYW5zaXRpb246IG9wYWNpdHkgMC4zNXMgZWFzZS1pbi1vdXQ7XG4gICAgICAtby10cmFuc2l0aW9uOiBvcGFjaXR5IDAuMzVzIGVhc2UtaW4tb3V0O1xuICAgICAgdHJhbnNpdGlvbjogb3BhY2l0eSAwLjM1cyBlYXNlLWluLW91dDsgfVxuICAuY2Fyb3VzZWwgLmNvbnRyb2wtZG90cyB7XG4gICAgcG9zaXRpb246IGFic29sdXRlO1xuICAgIGJvdHRvbTogMDtcbiAgICBtYXJnaW46IDEwcHggMDtcbiAgICBwYWRkaW5nOiAwO1xuICAgIHRleHQtYWxpZ246IGNlbnRlcjtcbiAgICB3aWR0aDogMTAwJTsgfVxuICAgIEBtZWRpYSAobWluLXdpZHRoOiA5NjBweCkge1xuICAgICAgLmNhcm91c2VsIC5jb250cm9sLWRvdHMge1xuICAgICAgICBib3R0b206IDA7IH0gfVxuICAgIC5jYXJvdXNlbCAuY29udHJvbC1kb3RzIC5kb3Qge1xuICAgICAgLXdlYmtpdC10cmFuc2l0aW9uOiBvcGFjaXR5IDAuMjVzIGVhc2UtaW47XG4gICAgICAtbW96LXRyYW5zaXRpb246IG9wYWNpdHkgMC4yNXMgZWFzZS1pbjtcbiAgICAgIC1tcy10cmFuc2l0aW9uOiBvcGFjaXR5IDAuMjVzIGVhc2UtaW47XG4gICAgICAtby10cmFuc2l0aW9uOiBvcGFjaXR5IDAuMjVzIGVhc2UtaW47XG4gICAgICB0cmFuc2l0aW9uOiBvcGFjaXR5IDAuMjVzIGVhc2UtaW47XG4gICAgICBvcGFjaXR5OiAwLjM7XG4gICAgICBmaWx0ZXI6IGFscGhhKG9wYWNpdHk9MzApO1xuICAgICAgYm94LXNoYWRvdzogMXB4IDFweCAycHggcmdiYSgwLCAwLCAwLCAwLjkpO1xuICAgICAgYmFja2dyb3VuZDogI2ZmZjtcbiAgICAgIGJvcmRlci1yYWRpdXM6IDUwJTtcbiAgICAgIHdpZHRoOiA4cHg7XG4gICAgICBoZWlnaHQ6IDhweDtcbiAgICAgIGN1cnNvcjogcG9pbnRlcjtcbiAgICAgIGRpc3BsYXk6IGlubGluZS1ibG9jaztcbiAgICAgIG1hcmdpbjogMCA4cHg7IH1cbiAgICAgIC5jYXJvdXNlbCAuY29udHJvbC1kb3RzIC5kb3Quc2VsZWN0ZWQsIC5jYXJvdXNlbCAuY29udHJvbC1kb3RzIC5kb3Q6aG92ZXIge1xuICAgICAgICBvcGFjaXR5OiAxO1xuICAgICAgICBmaWx0ZXI6IGFscGhhKG9wYWNpdHk9MTAwKTsgfVxuICAuY2Fyb3VzZWwgLmNhcm91c2VsLXN0YXR1cyB7XG4gICAgcG9zaXRpb246IGFic29sdXRlO1xuICAgIHRvcDogMDtcbiAgICByaWdodDogMDtcbiAgICBwYWRkaW5nOiA1cHg7XG4gICAgZm9udC1zaXplOiAxMHB4O1xuICAgIHRleHQtc2hhZG93OiAxcHggMXB4IDFweCByZ2JhKDAsIDAsIDAsIDAuOSk7XG4gICAgY29sb3I6ICNmZmY7IH1cbiAgLmNhcm91c2VsOmhvdmVyIC5zbGlkZSAubGVnZW5kIHtcbiAgICBvcGFjaXR5OiAxOyB9XG4iXSwic291cmNlUm9vdCI6IiJ9 */
    </style>
    <script data-react-helmet="true">
        $('.sf-menu').superfish();
    </script>
    <script src="chrome-extension://mooikfkahbdckldjjndioackbalphokd/assets/prompt.js"></script>
</head>

<body>
    <p id="gl_path" class="hidden">zemez894</p>
    <div id="page">
        <div id="page-preloader" class=""><span class="preloader"></span></div>
        <div class="ie-warning">
            <a href="//windows.microsoft.com/en-us/internet-explorer/download-ie">
                <img src="/catalog/view/theme/zemez894/image/warning_bar_0000_us.jpg" height="75" width="1170" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today.">
            </a>
        </div>
        <header>

            <div class="homebuilder clearfix header-top">
                <div class="tm-container ">
                    <div class="tm-inner">

                        <div class="row row-level-1 ">
                            <div class="row-inner  clearfix">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                                    <div class="col-inner container">



                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="stuck-menu">
                <div class="navigation">

                    <div class="homebuilder clearfix ">
                        <div class="tm-container ">
                            <div class="tm-inner">

                                <div class="row row-level-1 ">
                                    <div class="row-inner  clearfix">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                                            <div class="col-inner container">
                                                <h1 class="logo">

                                                    <a href="/">
                                                        <img src="/img/logo.png" title="Аквилон" alt="Аквилон" class="img-responsive">
                                                    </a>

                                                </h1>
                                                <span class="header-wishlist pull-right">

                                                    <a href="/cart">
                                                        <i class="material-icons-local_grocery_store"></i>
                                                        <strong>Корзина</strong><br>
                                                        <span id="cart-total3" class="cart-total2"></span>
                                                    </a>


                                                </span>

                                                <span class="header-wishlist pull-right">
                                                    <a href="/favor">
                                                        <i class="material-icons-favorite_border"></i>
                                                        <strong>Избранное</strong><br>
                                                        <span id="wishlist-total3"></span>
                                                    </a>
                                                </span>
                                                <div id="search" class="search pull-right">
                                                    <input type="text" name="search" value="" placeholder="поиск по наименованию">
                                                    <button type="button" class="button-search">Поиск</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tm-container ">
                            <div class="tm-inner">

                                <div class="row row-level-1 ">
                                    <div class="row-inner menu-line clearfix">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                                            <div class="col-inner container">
                                                <nav id="top-links" class="nav toggle-wrap pull-left">
                                                    <a class="toggle material-icons-person_outline" href="#"></a>
                                                    <ul class="toggle_cont">
                                                        <li><a href="/about">О нас</a></li>
                                                        <li><a href="/">Каталог</a></li>
                                                        <li><a href="/sale">Оплата и доставка</a></li>
                                                        <li><a href="/contact">Контакты</a></li>
                                                        <li class="pull-right"><a href="/login"><i class="material-icons-vpn_key"></i><span>Вход</span></a></li>

                                                    </ul>
                                                </nav>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>

        </header>
        <div id="product-category-lebalex">
            <div class="container" id="product-category">
                <ul class="breadcrumb">
                    <li><a href="/"><i class="fa fa-home"></i></a></li>
                    <li><span>Популярные товары</span></li>
                </ul>
                <div class="row">
                    <aside id="column-left" class="col-sm-3">
                        <div class="box megamenu">
                            <ul class="sf-menu sf-js-enabled sf-arrows">
                                <li>
                                    <div class="box-heading">
                                        <h3>Мебель</h3>
                                    </div>
                                </li>
                                <li class="sf-with-mega"><a href="#" class="sf-with-ul active"><span>Столы</span></a>
                                    <ul class="sf-mega" style="background-image: url(&quot;/img/menu-bg-887x420.jpg&quot;); display: none; width: 984px;">
                                        <li class="sf-mega_row" style="opacity: 0;">
                                            <div class="sf-mega_section">
                                                <ul>
                                                    <li><a href="/catalog/3" class="active">Столы для кабинета</a></li>
                                                </ul>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                                <li class="sf-with-mega"><a href="#" class="sf-with-ul active"><span>Тумбы</span></a>
                                    <ul class="sf-mega" style="background-image: url(&quot;/img/menu-bg-887x420.jpg&quot;); display: none; width: 984px;">
                                        <li class="sf-mega_row" style="opacity: 0;">
                                            <div class="sf-mega_section">
                                                <ul>
                                                    <li><a href="#" class="active">Тумба прикроватная</a></li>
                                                    <li><a href="#" class="active">Тумба лабораторная</a></li>
                                                </ul>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                                <li class="sf-with-mega"><a href="#" class="sf-with-ul active"><span>Шкафы</span></a>
                                    <ul class="sf-mega" style="background-image: url(&quot;/img/menu-bg-887x420.jpg&quot;); display: none; width: 984px;">
                                        <li class="sf-mega_row" style="opacity: 0;">
                                            <div class="sf-mega_section">
                                                <ul>
                                                    <li><a href="#" class="active">Шкафы для документов</a></li>
                                                    <li><a href="#" class="active">Шкафы для одежды</a></li>
                                                    <li><a href="#" class="active">Шкафы для хозяйственного инвентаря</a></li>
                                                </ul>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <div class="box-heading">
                                        <h3>ОБОРУДОВАНИЕ</h3>
                                    </div>
                                </li>
                                <li class="sf-with-mega"><a href="#" class="sf-with-ul active"><span> Оборудование для акушерства и гинекологии</span></a>
                                    <ul class="sf-mega" style="background-image: url(&quot;/img/menu-bg-887x420.jpg&quot;); display: none; width: 984px;">
                                        <li class="sf-mega_row" style="opacity: 0;">
                                            <div class="sf-mega_section">
                                                <ul>
                                                    <li><a href="#" class="active">Коагуляторы (электрокоагуляторы)</a></li>
                                                    <li><a href="#" class="active">Мониторы фетальные</a></li>
                                                    <li><a href="#" class="active"> Отсасыватели гинекологические</a></li>
                                                </ul>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                                <li class="sf-with-mega"><a href="#" class="sf-with-ul active"><span>Анестезиология и реанимация</span></a>
                                    <ul class="sf-mega" style="background-image: url(&quot;/img/menu-bg-887x420.jpg&quot;); display: none; width: 984px;">
                                        <li class="sf-mega_row" style="opacity: 0;">
                                            <div class="sf-mega_section">
                                                <ul>
                                                    <li><a href="#" class="active">Аппараты Боброва</a></li>
                                                    <li><a href="#" class="active">Аппараты ИВЛ</a></li>
                                                    <li><a href="#" class="active">Дефибрилляторы</a></li>
                                                    <li><a href="#" class="active">Концентраторы кислорода</a></li>
                                                    <li><a href="#" class="active">Мониторы пациента</a></li>
                                                    <li><a href="#" class="active">Наркозные аппараты</a></li>
                                                    <li><a href="#" class="active">Светильники</a></li>
                                                </ul>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                                <li class="sf-with-mega"><a href="#" class="sf-with-ul active"><span>Диагностика</span></a>
                                    <ul class="sf-mega" style="background-image: url(&quot;/img/menu-bg-887x420.jpg&quot;); display: none; width: 984px;">
                                        <li class="sf-mega_row" style="opacity: 0;">
                                            <div class="sf-mega_section">
                                                <ul>
                                                    <li><a href="#" class="active">Алкотестеры и принадлежности</a></li>
                                                    <li><a href="#" class="active">Дерматоскопы</a></li>
                                                    <li><a href="#" class="active">Стетоскопы</a></li>
                                                    <li><a href="#" class="active">Тонометры</a></li>
                                                    <li><a href="#" class="active">Термометры</a></li>
                                                </ul>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                                <li class="sf-with-mega"><a href="#" class="sf-with-ul active"><span>Кислородное оборудование</span></a>
                                    <ul class="sf-mega" style="background-image: url(&quot;/img/menu-bg-887x420.jpg&quot;); display: none; width: 984px;">
                                        <li class="sf-mega_row" style="opacity: 0;">
                                            <div class="sf-mega_section">
                                                <ul>
                                                    <li><a href="#" class="active">Коктейлеры кислородные</a></li>
                                                    <li><a href="#" class="active">Концентраторы кислородные</a></li>
                                                    <li><a href="#" class="active">Увлажнители кислорода</a></li>
                                                    <li><a href="#" class="active">Пульсоксиметры</a></li>
                                                </ul>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                                <li class="sf-with-mega"><a href="#" class="sf-with-ul active"><span>Неонатология</span></a>
                                    <ul class="sf-mega" style="background-image: url(&quot;/img/menu-bg-887x420.jpg&quot;); display: none; width: 984px;">
                                        <li class="sf-mega_row" style="opacity: 0;">
                                            <div class="sf-mega_section">
                                                <ul>
                                                    <li><a href="#" class="active">Весы для новорожденных</a></li>
                                                    <li><a href="#" class="active">Облучатели фототерапевтические</a></li>
                                                    <li><a href="#" class="active">Столы для санитарной обработки</a></li>
                                                    <li><a href="#" class="active">Ростомеры детские</a></li>
                                                </ul>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                                <li class="sf-with-mega"><a href="#" class="sf-with-ul active"><span>Стерилизация и дезинфекция</span></a>
                                    <ul class="sf-mega" style="background-image: url(&quot;/img/menu-bg-887x420.jpg&quot;); display: none; width: 984px;">
                                        <li class="sf-mega_row" style="opacity: 0;">
                                            <div class="sf-mega_section">
                                                <ul>
                                                    <li><a href="#" class="active">Рециркуляторы</a></li>
                                                    <li><a href="#" class="active">Стерилизаторы медицинские</a></li>
                                                    <li><a href="#" class="active">Деструкторы для игл</a></li>
                                                </ul>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                                <li class="sf-with-mega"><a href="#" class="sf-with-ul active"><span>Стоматологическое оборудование</span></a>
                                    <ul class="sf-mega" style="background-image: url(&quot;/img/menu-bg-887x420.jpg&quot;); display: none; width: 984px;">
                                        <li class="sf-mega_row" style="opacity: 0;">
                                            <div class="sf-mega_section">
                                                <ul>
                                                    <li><a href="#" class="active">Печи зуботехнические</a></li>
                                                </ul>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <div class="box-heading">
                                        <h3>Физиотерапия и реабилитация</h3>
                                    </div>
                                </li>
                                <li class="sf-with-mega"><a href="#" class="sf-with-ul active"><span>Физиотерапевтическое оборудование</span></a>
                                    <ul class="sf-mega" style="background-image: url(&quot;/img/menu-bg-887x420.jpg&quot;); display: none; width: 984px;">
                                        <li class="sf-mega_row" style="opacity: 0;">
                                            <div class="sf-mega_section">
                                                <ul>
                                                    <li><a href="#" class="active">Ингаляторы</a></li>
                                                    <li><a href="#" class="active">Аппараты КВЧ терапии</a></li>
                                                    <li><a href="#" class="active">Магнитотерапия</a></li>
                                                    <li><a href="#" class="active">Ультразвуковая (УЗ) терапия</a></li>
                                                </ul>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>

                        <script>
;(function ($) {
    $(window).load(function () {
        var o = $('.sf-menu');
        o.superfish();
        o.find('li a').each(function () {
            if ($(location).attr('href').indexOf($(this).attr('href')) >= 0){
                $(this).addClass('active');
                return;
            }
        })
        if (o.parents('aside').length){
            var width = $('.container').outerWidth() - $('aside').outerWidth();
            o.find('.sf-mega').each(function () {
                $(this).width(width);
            })
        }
    });
})(jQuery);


    </script>
                    </aside>
                    <div id="content" class="col-sm-9">
                        <div class="product-filter clearfix">
                            <div class="product-filter_elem">
                                <div class="button-view"><button type="button" id="grid-view" class="active" title="Сетка"><i class="material-icons-apps"></i></button><button type="button" id="list-view" class="" title="Список"><i class="material-icons-storage"></i></button></div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="product-layout product-grid col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <div class="product-thumb transition  options ">
                                    <div class="image"><a href="#"><img width="270" height="270" alt="Светильник хирургический " title="Светильник хирургический " class="imgprimary" src="/img/product-img/noPhoto.png"><img width="270" height="270" alt="Светильник хирургический " title="Светильник хирургический " class="hover-img" src="/img/product-img/noPhoto.png"></a></div>
                                    <div class="caption">
                                        <div class="name"><a href="#">Светильник хирургический </a></div>
                                        <div class="name">L735 Армед</div>
                                        <p class="price"><span>0,00&nbsp;₽</span></p>
                                    </div><button type="button" class="btn-primary"><i class="material-icons-add_shopping_cart"></i><span>в корзину</span></button>
                                    <div class="cart-button"><button type="button" class="product-btn"><i class="material-icons-favorite_border"></i><span>в избранное</span></button></div>
                                    <div class="aside">
                                        <div class="name"><a href="#">Светильник хирургический </a></div>
                                        <div class="name">L735 Армед</div>
                                        <p class="description"></p>
                                        <p class="price">0,00&nbsp;₽</p><button class="btn-primary" type="button"><i class="material-icons-add_shopping_cart"></i><span>в корзину</span></button>
                                        <div class="clear"></div><button class="product-btn" type="button"><i class="material-icons-favorite_border"></i><span>в избранное</span></button>
                                    </div>
                                </div>
                                <div class="clear"></div>
                            </div>
                            <div class="product-layout product-grid col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <div class="product-thumb transition  options ">
                                    <div class="image"><a href="#"><img width="270" height="270" alt="Шкаф для кабинета " title="Шкаф для кабинета " class="imgprimary" src="/img/product-img/noPhoto.png"><img width="270" height="270" alt="Шкаф для кабинета " title="Шкаф для кабинета " class="hover-img" src="/img/product-img/noPhoto.png"></a></div>
                                    <div class="caption">
                                        <div class="name"><a href="#">Шкаф для кабинета </a></div>
                                        <div class="name">ШК-Л-05 ЛАВКОР</div>
                                        <p class="price"><span>0,00&nbsp;₽</span></p>
                                    </div><button type="button" class="btn-primary"><i class="material-icons-add_shopping_cart"></i><span>в корзину</span></button>
                                    <div class="cart-button"><button type="button" class="product-btn"><i class="material-icons-favorite_border"></i><span>в избранное</span></button></div>
                                    <div class="aside">
                                        <div class="name"><a href="#">Шкаф для кабинета </a></div>
                                        <div class="name">ШК-Л-05 ЛАВКОР</div>
                                        <p class="description"></p>
                                        <p class="price">0,00&nbsp;₽</p><button class="btn-primary" type="button"><i class="material-icons-add_shopping_cart"></i><span>в корзину</span></button>
                                        <div class="clear"></div><button class="product-btn" type="button"><i class="material-icons-favorite_border"></i><span>в избранное</span></button>
                                    </div>
                                </div>
                                <div class="clear"></div>
                            </div>
                            <div class="product-layout product-grid col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <div class="product-thumb transition  options ">
                                    <div class="image"><a href="#"><img width="270" height="270" alt="Термометр электронный B.Well" title="Термометр электронный B.Well" class="imgprimary" src="/img/product-img/noPhoto.png"><img width="270" height="270" alt="Термометр электронный B.Well" title="Термометр электронный B.Well" class="hover-img" src="/img/product-img/noPhoto.png"></a></div>
                                    <div class="caption">
                                        <div class="name"><a href="#">Термометр электронный B.Well</a></div>
                                        <div class="name">WT-05 accuracy</div>
                                        <p class="price"><span>0,00&nbsp;₽</span></p>
                                    </div><button type="button" class="btn-primary"><i class="material-icons-add_shopping_cart"></i><span>в корзину</span></button>
                                    <div class="cart-button"><button type="button" class="product-btn"><i class="material-icons-favorite_border"></i><span>в избранное</span></button></div>
                                    <div class="aside">
                                        <div class="name"><a href="#">Термометр электронный B.Well</a></div>
                                        <div class="name">WT-05 accuracy</div>
                                        <p class="description"></p>
                                        <p class="price">0,00&nbsp;₽</p><button class="btn-primary" type="button"><i class="material-icons-add_shopping_cart"></i><span>в корзину</span></button>
                                        <div class="clear"></div><button class="product-btn" type="button"><i class="material-icons-favorite_border"></i><span>в избранное</span></button>
                                    </div>
                                </div>
                                <div class="clear"></div>
                            </div>
                            <div class="product-layout product-grid col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <div class="product-thumb transition  options ">
                                    <div class="image"><a href="#"><img width="270" height="270" alt="Пульсоксиметр ChoiceMMed " title="Пульсоксиметр ChoiceMMed " class="imgprimary" src="/img/product-img/noPhoto.png"><img width="270" height="270" alt="Пульсоксиметр ChoiceMMed " title="Пульсоксиметр ChoiceMMed " class="hover-img" src="/img/product-img/noPhoto.png"></a></div>
                                    <div class="caption">
                                        <div class="name"><a href="#">Пульсоксиметр ChoiceMMed </a></div>
                                        <div class="name"> MD300C12</div>
                                        <p class="price"><span>0,00&nbsp;₽</span></p>
                                    </div><button type="button" class="btn-primary"><i class="material-icons-add_shopping_cart"></i><span>в корзину</span></button>
                                    <div class="cart-button"><button type="button" class="product-btn"><i class="material-icons-favorite_border"></i><span>в избранное</span></button></div>
                                    <div class="aside">
                                        <div class="name"><a href="#">Пульсоксиметр ChoiceMMed </a></div>
                                        <div class="name"> MD300C12</div>
                                        <p class="description"></p>
                                        <p class="price">0,00&nbsp;₽</p><button class="btn-primary" type="button"><i class="material-icons-add_shopping_cart"></i><span>в корзину</span></button>
                                        <div class="clear"></div><button class="product-btn" type="button"><i class="material-icons-favorite_border"></i><span>в избранное</span></button>
                                    </div>
                                </div>
                                <div class="clear"></div>
                            </div>
                            <div class="product-layout product-grid col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <div class="product-thumb transition  options ">
                                    <div class="image"><a href="#"><img width="270" height="270" alt="Шкаф для документов " title="Шкаф для документов " class="imgprimary" src="/img/product-img/noPhoto.png"><img width="270" height="270" alt="Шкаф для документов " title="Шкаф для документов " class="hover-img" src="/img/product-img/noPhoto.png"></a></div>
                                    <div class="caption">
                                        <div class="name"><a href="#">Шкаф для документов </a></div>
                                        <div class="name">АСК ШК.14.14</div>
                                        <p class="price"><span>0,00&nbsp;₽</span></p>
                                    </div><button type="button" class="btn-primary"><i class="material-icons-add_shopping_cart"></i><span>в корзину</span></button>
                                    <div class="cart-button"><button type="button" class="product-btn"><i class="material-icons-favorite_border"></i><span>в избранное</span></button></div>
                                    <div class="aside">
                                        <div class="name"><a href="#">Шкаф для документов </a></div>
                                        <div class="name">АСК ШК.14.14</div>
                                        <p class="description"></p>
                                        <p class="price">0,00&nbsp;₽</p><button class="btn-primary" type="button"><i class="material-icons-add_shopping_cart"></i><span>в корзину</span></button>
                                        <div class="clear"></div><button class="product-btn" type="button"><i class="material-icons-favorite_border"></i><span>в избранное</span></button>
                                    </div>
                                </div>
                                <div class="clear"></div>
                            </div>
                            <div class="product-layout product-grid col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <div class="product-thumb transition  options ">
                                    <div class="image"><a href="#"><img width="270" height="270" alt="Тележка Edan  для фетального монитора" title="Тележка Edan  для фетального монитора" class="imgprimary" src="/img/product-img/noPhoto.png"><img width="270" height="270" alt="Тележка Edan  для фетального монитора" title="Тележка Edan  для фетального монитора" class="hover-img" src="/img/product-img/noPhoto.png"></a></div>
                                    <div class="caption">
                                        <div class="name"><a href="#">Тележка Edan для фетального монитора</a></div>
                                        <div class="name">МТ-503</div>
                                        <p class="price"><span>0,00&nbsp;₽</span></p>
                                    </div><button type="button" class="btn-primary"><i class="material-icons-add_shopping_cart"></i><span>в корзину</span></button>
                                    <div class="cart-button"><button type="button" class="product-btn"><i class="material-icons-favorite_border"></i><span>в избранное</span></button></div>
                                    <div class="aside">
                                        <div class="name"><a href="#">Тележка Edan для фетального монитора</a></div>
                                        <div class="name">МТ-503</div>
                                        <p class="description"></p>
                                        <p class="price">0,00&nbsp;₽</p><button class="btn-primary" type="button"><i class="material-icons-add_shopping_cart"></i><span>в корзину</span></button>
                                        <div class="clear"></div><button class="product-btn" type="button"><i class="material-icons-favorite_border"></i><span>в избранное</span></button>
                                    </div>
                                </div>
                                <div class="clear"></div>
                            </div>
                            <div class="product-layout product-grid col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <div class="product-thumb transition  options ">
                                    <div class="image"><a href="#"><img width="270" height="270" alt="Концентратор кислородный " title="Концентратор кислородный " class="imgprimary" src="/img/product-img/noPhoto.png"><img width="270" height="270" alt="Концентратор кислородный " title="Концентратор кислородный " class="hover-img" src="/img/product-img/noPhoto.png"></a></div>
                                    <div class="caption">
                                        <div class="name"><a href="#">Концентратор кислородный </a></div>
                                        <div class="name"> 7F-10L Армед</div>
                                        <p class="price"><span>0,00&nbsp;₽</span></p>
                                    </div><button type="button" class="btn-primary"><i class="material-icons-add_shopping_cart"></i><span>в корзину</span></button>
                                    <div class="cart-button"><button type="button" class="product-btn"><i class="material-icons-favorite_border"></i><span>в избранное</span></button></div>
                                    <div class="aside">
                                        <div class="name"><a href="#">Концентратор кислородный </a></div>
                                        <div class="name"> 7F-10L Армед</div>
                                        <p class="description"></p>
                                        <p class="price">0,00&nbsp;₽</p><button class="btn-primary" type="button"><i class="material-icons-add_shopping_cart"></i><span>в корзину</span></button>
                                        <div class="clear"></div><button class="product-btn" type="button"><i class="material-icons-favorite_border"></i><span>в избранное</span></button>
                                    </div>
                                </div>
                                <div class="clear"></div>
                            </div>
                            <div class="product-layout product-grid col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <div class="product-thumb transition  options ">
                                    <div class="image"><a href="#"><img width="270" height="270" alt="Деструктор игл Diagram Etna 497" title="Деструктор игл Diagram Etna 497" class="imgprimary" src="/img/product-img/noPhoto.png"><img width="270" height="270" alt="Деструктор игл Diagram Etna 497" title="Деструктор игл Diagram Etna 497" class="hover-img" src="/img/product-img/noPhoto.png"></a></div>
                                    <div class="caption">
                                        <div class="name"><a href="#">Деструктор игл Diagram Etna 497</a></div>
                                        <div class="name"></div>
                                        <p class="price"><span>0,00&nbsp;₽</span></p>
                                    </div><button type="button" class="btn-primary"><i class="material-icons-add_shopping_cart"></i><span>в корзину</span></button>
                                    <div class="cart-button"><button type="button" class="product-btn"><i class="material-icons-favorite_border"></i><span>в избранное</span></button></div>
                                    <div class="aside">
                                        <div class="name"><a href="#">Деструктор игл Diagram Etna 497</a></div>
                                        <div class="name"></div>
                                        <p class="description"></p>
                                        <p class="price">0,00&nbsp;₽</p><button class="btn-primary" type="button"><i class="material-icons-add_shopping_cart"></i><span>в корзину</span></button>
                                        <div class="clear"></div><button class="product-btn" type="button"><i class="material-icons-favorite_border"></i><span>в избранное</span></button>
                                    </div>
                                </div>
                                <div class="clear"></div>
                            </div>
                            <div class="product-layout product-grid col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <div class="product-thumb transition  options ">
                                    <div class="image"><a href="#"><img width="270" height="270" alt="Термометр бесконтактный B.Well " title="Термометр бесконтактный B.Well " class="imgprimary" src="/img/product-img/noPhoto.png"><img width="270" height="270" alt="Термометр бесконтактный B.Well " title="Термометр бесконтактный B.Well " class="hover-img" src="/img/product-img/noPhoto.png"></a></div>
                                    <div class="caption">
                                        <div class="name"><a href="#">Термометр бесконтактный B.Well </a></div>
                                        <div class="name"> WF-5000</div>
                                        <p class="price"><span>0,00&nbsp;₽</span></p>
                                    </div><button type="button" class="btn-primary"><i class="material-icons-add_shopping_cart"></i><span>в корзину</span></button>
                                    <div class="cart-button"><button type="button" class="product-btn"><i class="material-icons-favorite_border"></i><span>в избранное</span></button></div>
                                    <div class="aside">
                                        <div class="name"><a href="#">Термометр бесконтактный B.Well </a></div>
                                        <div class="name"> WF-5000</div>
                                        <p class="description"></p>
                                        <p class="price">0,00&nbsp;₽</p><button class="btn-primary" type="button"><i class="material-icons-add_shopping_cart"></i><span>в корзину</span></button>
                                        <div class="clear"></div><button class="product-btn" type="button"><i class="material-icons-favorite_border"></i><span>в избранное</span></button>
                                    </div>
                                </div>
                                <div class="clear"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--lebalex-->















        <footer>
            <div class="container">
                <div class="footer_modules">
                    <div class="homebuilder clearfix ">
                        <div class="tm-container ">
                            <div class="tm-inner">

                                <div class="row row-level-1 ">
                                    <div class="row-inner  clearfix">
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 ">
                                            <div class="col-inner ">
                                                <h4 class="box-heading">Для клиентов</h4>
                                                <ul class="box-content list-unstyled">
                                                    <li><a href="/about">О нас</a></li>
                                                    <li><a href="/">Каталог</a></li>
                                                    <li><a href="/sale">Оплата и доставка</a></li>
                                                    <li><a href="/contact">Контакты</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 ">
                                            <div class="col-inner ">
                                                <h4 class="box-heading">Личный кабинет</h4>
                                                <ul class="box-content list-unstyled">
                                                    <li><a href="/account">Профиль</a></li>
                                                    <li><a href="/order">История заказов</a></li>
                                                    <li><a href="/favor">Избранное</a></li>

                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 ">
                                            <div class="col-inner ">
                                                <h4 class="box-heading">Аквилон</h4>
                                                <div class="box-content footer_box">
                                                    <address>
                                                        <p>
                                                            <i class="material-icons-location_on"></i><a class="footer-link" href="//www.google.com/maps/?q=52.277182, 104.244417" target="_blank">Наш офис на картах</a><br>
                                                            <i class="material-icons-phone"></i><a class="footer-link" href="callto:+7-950-105-13-50">+7-950-105-13-50</a><br>
                                                            <i class="material-icons-email"></i><a href="mailto:livedemo-admin@templatemonster.me ">aquilon2015@mail.ru</a><br>
                                                            <i class="material-icons-access_time"></i>7 дней в неделю с 8:00 до 19:00
                                                        </p>
                                                    </address>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
            <!--div class="copyright">
            <div class="container">Powered By <a href="http://www.opencart.com">OpenCart</a><br> Drug Store © 2020. Design by <a class="zemez" href="https://zemez.io"> Zemez</a></div>
        </div-->
        </footer>
        <!--div class="ajax-overlay"></div>
        <div class="ajax-quickview-overlay">
            <span class="ajax-quickview-overlay__preloader"></span>
        </div-->
        <script src="/catalog/view/javascript/zemez894/swiper/swinit.js" type="text/javascript"></script>
        <script src="/catalog/view/theme/zemez894/js/device.min.js" type="text/javascript"></script>
        <script src="/catalog/view/theme/zemez894/js/livesearch.min.js" type="text/javascript"></script>
        <!--script src="catalog/view/theme/zemez894/js/common.js" type="text/javascript"></script-->
        <script src="/catalog/view/theme/zemez894/js/script.js" type="text/javascript"></script>
        <script src="/catalog/view/theme/zemez894/js/jquery.easing.1.3.js"></script>
        <script src="/catalog/view/theme/zemez894/js/jquery.matchHeight.js"></script>
        <script src="/catalog/view/theme/zemez894/js/jquery.ui.totop.min.js"></script>

    </div>

    <a href="#" id="ui-to-top" class="ui-to-top material-icons-expand_less"></a>
</body>

</html>
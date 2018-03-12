<style>

    .r-relative{position: relative}
    .r-absolute{position: absolute}
    .r-height-100{height: 100%}
    .r-display-block{display: block}
    .r-block-button{display: block;
        height: 100%;
        position: absolute;
    }
    #infographic-wrapper {max-width:940px;margin: auto;margin-top:40px}
    #infographic-wrapper small{font-family: "MuseoSans-100", serif;}
    img.ig-title-icon {
        width: 48px;
        margin-right: 20px
    }
    .ig-line {
        /*border-bottom: 1px solid #c0d5d6;*/
        border-bottom: 2px solid #fff;
        margin: 10px 0px;
    }
    .ig-line-2 {
        border-bottom: 1px solid #7cb799;
        margin: 10px 0px;
    }
    .ig-flex{
        flex-wrap: wrap;
        display: flex;
        display: -webkit-flex;
        -webkit-flex-wrap: wrap;
    }
    .ig-border-left{border-left:1px solid #c0d5d6;padding-left:30px}
    .ig-border-right{border-right:1px solid #7cb799}
    .ig-container,
    .ig-container-2,
    .ig-container-3,
    .ig-container-4{padding: 20px 30px;background: #e4f9ea;color: #263028;margin-bottom:40px;margin-top:15px}
    .ig-container-2{background: #e9f7fa}
    .ig-container-3{background: #f0f8e3}
    .ig-container-4{
        background: #fff;
        margin-top: 0;
        margin-bottom: 0;
    }

    #infographic-capacity-development, #infographic-research-for-impact,
    #infographic-outreach-engagement, #infographic-outreach-engagement-2{
        margin-bottom: 20px;
        min-height: 400px;
        width: 100%;
    }
    /*#infographic-research-for-impact table{width: 100%}*/
    #infographic-research-for-impact table th,
    #infographic-capacity-development table th,
    #infographic-outreach-engagement table th,
    #infographic-outreach-engagement-2 table th{
        text-align: right;
        width: 37px;
        padding-right: 0px !important;
        color: #014c51;
        padding: 5px 10px;
        font-family:"MuseoSans-700", sans-serif;
        font-size: 19px
    }
    #infographic-research-for-impact table td,
    #infographic-capacity-development table td,
    #infographic-outreach-engagement table td,
    #infographic-outreach-engagement-2 table td{
        padding: 5px 10px;color: #263028;
        font-family: "MuseoSans-100", serif;
        font-size: 19px;
    }
    #infographic-capacity-development table{
        font-size:22px
    }
    #infographic-climate-action td,
    #infographic-climate-action th{
        padding-right: 15px
    }
    #infographic-outreach-engagement th,
    #infographic-outreach-engagement td{
        vertical-align: top
    }
    #infographic-outreach-engagement-2 th,
    #infographic-outreach-engagement-2 td{
        vertical-align: top
    }

    #infographic-research-for-impact th,
    #infographic-research-for-impact td{
        vertical-align: top
    }
    .strong-gender-focus{
        color: rgba(0,0,0,0.5);
    }
    .pillar-3-bar{
        margin-bottom:-24px;
    }
    .pillar-3-bar th,
    .pillar-3-bar td{
        padding-bottom:24px !important;
    }
    .inline-block {display: inline-block}
    .table-cell{display: table-cell}
    .vertical-top {vertical-align: top}
    .vertical-middle {vertical-align: middle}
    .vertical-bottom {vertical-align: bottom}

    /*Updated by rizky, move to lvl 2 shortcode FMR*/
    .ig-big-text-1{font-size:24px;font-family: "MuseoSlab-100", serif}
    .ig-big-text,
    .ig-big-text-2,
    .ig-big-text-3,
    .ig-big-text-0{
        font-size: 26px;
        font-family: "MuseoSlab-100", serif;
        line-height:1.3
    }
    .ig-big-text-0{font-size:24px}
    .ig-big-text-2 {font-size: 28px}
    .ig-big-text-4 {font-size: 32px;color: #16635d}
    .ig-big-text-5 {font-size: 36px}
    .ig-big-text-n{
        font-size: 20px;
        font-family: "MuseoSlab-100", serif;
    }

    .ig-big-number,.ig-big-number-2,
    .ig-big-number-3,.ig-big-number-4{
        font-size: 52px;
        font-family: "MuseoSlab-100", serif;
        color: #16635d;
        line-height:1;
        padding-right: 10px
    }
    .ig-big-number-2 {font-size:64px}
    .ig-big-number-3 {font-size: 84px}
    .ig-big-number-4 {font-size: 100px;line-height:1em;margin-bottom:-7px}
    /*--------------------------------------------------------------------*/
    .ig-grey-color {color: #6d7e74 !important}
    .ig-dark-green {color: #004e50 !important}
    .ig-green {color: #40a293 !important}
    .ig-black {color: #000002 !important}
    .ig-title {
        color: #5b978d;
        font-size: 32px;
        font-family: "MuseoSlab-100", serif;
        line-height: 1.1
    }
    .width-4px {width: 4px}
    .width-80px {width: 80px}
    .width-100 {width: 100%}
    .width-100-50 {width: 49%}
    .width-100-3 {width: 33%}
    .width-100-7 {width: 66%}
    .width-100-3-2 {width: 38%}
    .width-100-7-2 {width: 61%}
    .padding-top-10px{padding-top:10px}
    .padding-right-30px{padding-right:30px}
    .padding-left-30px{padding-left:30px}
    .padding-left-10px{padding-left:10px}
    .margin-bottom-10px{margin-bottom: 10px}

    .ig-household-chart table {
        border-left: 4px solid #b8da8e;
        border-right: 4px solid #b8da8e;
    }
    .ig-household-chart th:first-child,
    .ig-household-chart th:last-child{
        border-top: 4px solid #b8da8e;
        width: 12px;
        border-bottom: 4px solid #b8da8e;
    }
    #ig-unsvg img{
        width:80%;
        margin-bottom: 4px;
    }
    .ig-number-bold{
        font-weight: bold;
        font-family: "MuseoSans-700", sans-serif;
        color: #014c51;
    }
    #ig-unsvg {padding: 0;margin: 0px -15px;margin-top:20px}
    #ig-unsvg li {
        list-style: none;
        float: left;
        margin-bottom: 10px;
        width: 14.285714285714285714285714285714%;
        *width: 14.285714285714285714285714285714%;
        padding:0px 15px;
    }
    #ig-unsvg h4{
        font-size: 11px;
        font-weight: bold;
        height: 60px;
        color: #73322f
    }
    .cifor-sdg-dot{
        border-bottom: 4px dotted #3f8372;
    }
    #infographic-outreach-engagement th{width: 8% !important;padding-left:0px !important}
    #infographic-outreach-engagement td{width: 42% !important;padding-right:0px !important;font-size:18px !important}
    #infographic-outreach-engagement-2 th{width: 8% !important;padding-left:0px !important}
    #infographic-outreach-engagement-2 td{width: 42% !important;padding-right:0px !important;font-size:18px !important}

    .ig-trophy-cell{width: 50px;vertical-align: top;padding-top: 7px}

    @media all and (max-width:991px){
        #ig-unsvg li {
            width: 16.666666666666666666666666666667%;
            *width: 16.666666666666666666666666666667%;
            float: none;
            display: inline-block;
            vertical-align: top;
            margin-right: -4px;
        }
    }

    @media all and (max-width:860px){
        #ig-unsvg li {
            width: 20%;
            *width: 20%;
        }
    }
    @media all and (max-width:767px){
        .width-100-50,
        .width-100-7,
        .width-100-3,
        .width-100-7-2,
        .width-100-3-2{width: 100%}
        ul.ig-list-50 li{
            width: 100%
        }
        .ig-title{font-size: 22px}
        img.ig-title-icon{max-width:28px}
    }
    @media all and (max-width:640px){
        #ig-unsvg li {
            width: 25%;
            *width: 25%;
        }
        .ig-container, .ig-container-2, .ig-container-3, .ig-container-4{
        padding: 15px;
        }
        #infographic-outreach-engagement td{
            font-size: 16px
        }
        .ig-big-number, .ig-big-number-2, .ig-big-number-3, .ig-big-number-4{
            font-size: 42px
        }
    }
    @media all and (max-width:480px){
        #ig-unsvg li {
            width: 33.333333333333333333333333333334%;
            *width: 33.333333333333333333333333333334%;
        }
    }
    @media all and (max-width:320px){
        #ig-unsvg li {
            width: 50%;
            *width: 50%;
        }
    }
    .size-34{
    font-size:34px;
    }
</style>

<h2 class="m-font-museo-100 size-34">Stepping up to the new climate and development agenda </h2>
<p>Our new <a href="http://www.cifor.org/library/5959/cifor-strategy-2016-2025-stepping-up-to-the-new-climate-and-development-agenda/" target="_blank">ten-year strategy</a> evolved from a deep understanding of the many ways
    forestry
    contributes to sustainable development. Our work is grounded by a three-pillar approach that
    spans six thematic work areas, which are aligned with the UN’s 17 Sustainable Development
    Goals (SDGs).
</p>

<h2 class="m-font-museo-100 m-text-green">CIFOR and the SDGs</h2>
<div class="cifor-sdg-dot"></div>
<div class="m-margin-bottom-40 clearfix">

    <ul id="ig-unsvg">
        <li>
            <h4>FOREST & HUMAN WELL-BEING</h4>
            <img src="http://annualreport2016.cifor.org/wp-content/themes/wp-annual-report-2016/assets/images/infographics/un_sdgs-1.svg">
            <img src="http://annualreport2016.cifor.org/wp-content/themes/wp-annual-report-2016/assets/images/infographics/un_sdgs-3.svg">
            <img src="http://annualreport2016.cifor.org/wp-content/themes/wp-annual-report-2016/assets/images/infographics/un_sdgs-11.svg">
        </li>
        <li>
            <h4>SUSTAINABLE LANDSCAPES & FOOD</h4>
            <img src="http://annualreport2016.cifor.org/wp-content/themes/wp-annual-report-2016/assets/images/infographics/un_sdgs-2.svg">
            <img src="http://annualreport2016.cifor.org/wp-content/themes/wp-annual-report-2016/assets/images/infographics/un_sdgs-6.svg">
        </li>
        <li><h4>EQUAL OPPORTUNITIES, GENDER, JUSTICE & TENURE</h4>
            <img src="http://annualreport2016.cifor.org/wp-content/themes/wp-annual-report-2016/assets/images/infographics/un_sdgs-4.svg">
            <img src="http://annualreport2016.cifor.org/wp-content/themes/wp-annual-report-2016/assets/images/infographics/un_sdgs-5.svg">
            <img src="http://annualreport2016.cifor.org/wp-content/themes/wp-annual-report-2016/assets/images/infographics/un_sdgs-10.svg">
            <img src="http://annualreport2016.cifor.org/wp-content/themes/wp-annual-report-2016/assets/images/infographics/un_sdgs-16.svg">
        </li>
        <li><h4>CLIMATE CHANGE, ENERGY & LCD</h4>
            <img src="http://annualreport2016.cifor.org/wp-content/themes/wp-annual-report-2016/assets/images/infographics/un_sdgs-7.svg">
            <img src="http://annualreport2016.cifor.org/wp-content/themes/wp-annual-report-2016/assets/images/infographics/un_sdgs-13.svg">
        </li>
        <li><h4>VALUE CHAINS, FINANCE & INVESTMENTS</h4>
            <img src="http://annualreport2016.cifor.org/wp-content/themes/wp-annual-report-2016/assets/images/infographics/un_sdgs-8.svg">
            <img src="http://annualreport2016.cifor.org/wp-content/themes/wp-annual-report-2016/assets/images/infographics/un_sdgs-9.svg">
            <img src="http://annualreport2016.cifor.org/wp-content/themes/wp-annual-report-2016/assets/images/infographics/un_sdgs-12.svg">
        </li>
        <li><h4>FOREST MANAGEMENT & RESTORATION</h4>
            <img src="http://annualreport2016.cifor.org/wp-content/themes/wp-annual-report-2016/assets/images/infographics/un_sdgs-15.svg">
            <img src="http://annualreport2016.cifor.org/wp-content/themes/wp-annual-report-2016/assets/images/infographics/un_sdgs-14.svg">
        </li>
        <li><h4>GLOBAL LANDSCAPES FORUM</h4>
            <img src="http://annualreport2016.cifor.org/wp-content/themes/wp-annual-report-2016/assets/images/infographics/un_sdgs-17.svg">
        </li>
    </ul>

    <div class="text-right">
        <img class="width-100" style="max-width: 250px;margin-top:30px" src="http://annualreport2016.cifor.org/wp-content/themes/wp-annual-report-2016/assets/images/infographics/un_sdgs-head.svg">
    </div>
    <?php /*
    <ul id="ig-unsvg">
        <li><img src="http://annualreport2016.cifor.org/wp-content/themes/wp-annual-report-2016/assets/images/infographics/un_sdgs-1.svg"></li>
        <li><img src="http://annualreport2016.cifor.org/wp-content/themes/wp-annual-report-2016/assets/images/infographics/un_sdgs-2.svg"></li>
        <li><img src="http://annualreport2016.cifor.org/wp-content/themes/wp-annual-report-2016/assets/images/infographics/un_sdgs-3.svg"></li>
        <li><img src="http://annualreport2016.cifor.org/wp-content/themes/wp-annual-report-2016/assets/images/infographics/un_sdgs-4.svg"></li>
        <li><img src="http://annualreport2016.cifor.org/wp-content/themes/wp-annual-report-2016/assets/images/infographics/un_sdgs-5.svg"></li>
        <li><img src="http://annualreport2016.cifor.org/wp-content/themes/wp-annual-report-2016/assets/images/infographics/un_sdgs-6.svg"></li>
        <li><img src="http://annualreport2016.cifor.org/wp-content/themes/wp-annual-report-2016/assets/images/infographics/un_sdgs-7.svg"></li>
        <li><img src="http://annualreport2016.cifor.org/wp-content/themes/wp-annual-report-2016/assets/images/infographics/un_sdgs-8.svg"></li>
        <li><img src="http://annualreport2016.cifor.org/wp-content/themes/wp-annual-report-2016/assets/images/infographics/un_sdgs-9.svg"></li>
        <li><img src="http://annualreport2016.cifor.org/wp-content/themes/wp-annual-report-2016/assets/images/infographics/un_sdgs-10.svg"></li>
        <li><img src="http://annualreport2016.cifor.org/wp-content/themes/wp-annual-report-2016/assets/images/infographics/un_sdgs-11.svg"></li>
        <li><img src="http://annualreport2016.cifor.org/wp-content/themes/wp-annual-report-2016/assets/images/infographics/un_sdgs-12.svg"></li>
        <li><img src="http://annualreport2016.cifor.org/wp-content/themes/wp-annual-report-2016/assets/images/infographics/un_sdgs-13.svg"></li>
        <li><img src="http://annualreport2016.cifor.org/wp-content/themes/wp-annual-report-2016/assets/images/infographics/un_sdgs-14.svg"></li>
        <li><img src="http://annualreport2016.cifor.org/wp-content/themes/wp-annual-report-2016/assets/images/infographics/un_sdgs-15.svg"></li>
        <li><img src="http://annualreport2016.cifor.org/wp-content/themes/wp-annual-report-2016/assets/images/infographics/un_sdgs-16.svg"></li>
        <li><img src="http://annualreport2016.cifor.org/wp-content/themes/wp-annual-report-2016/assets/images/infographics/un_sdgs-17.svg"></li>
        <li><img src="http://annualreport2016.cifor.org/wp-content/themes/wp-annual-report-2016/assets/images/infographics/un_sdgs-18.svg"></li>
    </ul>
    */?>
</div>

<h2 class="m-font-museo-100 m-text-green">CIFOR by the numbers</h2>
<div class="cifor-sdg-dot"></div>

<div id="infographic-wrapper">

    <div class="">
        <div class="row">
            <div class="col-xs-12 col-sm-6 ig-flex">
                <div class="table-cell vertical-middle">
                    <img class="ig-title-icon" src="http://annualreport2016.cifor.org/wp-content/themes/wp-annual-report-2016/infographic-images/ig-capacity-development.jpg"/>
                </div>
                <div class="table-cell vertical-middle">
                    <div class="ig-title">
                        Pillar 1. Research <br>for impact
                    </div>
                </div>

                 <div id="infographic-research-for-impact" class="ig-container">
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="inline-block vertical-middle">
                                    <span class="ig-big-number">388</span>
                                </div>
                                <div class="inline-block vertical-middle">
                                    <span class="ig-big-text">publications</span>
                                </div>
                                <div class="ig-line"></div>
                                <table class="width-100">
                                    <tr>
                                        <th>22</th>
                                        <td>Books</td>
                                        <th>32</th>
                                        <td> Infobriefs</td>
                                    </tr>
                                    <tr>
                                        <th>59</th>
                                        <td>Chapters</td>
                                        <th>21</th>
                                        <td>Occasional papers</td>
                                    </tr>
                                </table>
                                <table class="">
                                    <tr>
                                        <th style="width:82px;padding-left:0px"><img src="http://annualreport2016.cifor.org/wp-content/themes/wp-annual-report-2016/assets/images/infographics/pillars.jpg"/></th>
                                        <td colspan="3">
                                            <span class="ig-number-bold">204</span> Journal articles:<br>
                                            <span class="ig-number-bold">60%</span> in Open Access journals
                                        </td>
                                    </tr>
                                </table>
                                <div class="ig-line"></div>
                            </div>
                            <div class="col-xs-12" style="padding-bottom: 40px;">
                                <div class="inline-block vertical-middle">
                                    <span class="ig-big-number">10,531</span>
                                </div>
                                <div class="inline-block vertical-middle">
                                    <div class="ig-big-text-0">citations <span class="ig-grey-color">(29/day)</span></div>
                                </div>
                                <div class="ig-line"></div>
                                <div class="inline-block vertical-middle">
                                    <span class="ig-big-number">1,009,922</span>
                                </div>
                                <div class="inline-block vertical-middle">
                                    <div class="ig-big-text-0">downloads<br><span class="ig-grey-color">(2,767/day)</span></div>
                                </div>
                                <div class="ig-line"></div>
                                <div class="ig-big-text-0 padding-top-10px margin-bottom-10px">Visit through Google Books:</div>
                                <div class="inline-block vertical-bottom">
                                    <img style="height: 120px;/*max-width: 113px;*/padding-bottom:5px;padding-right:20px" src="http://annualreport2016.cifor.org/wp-content/themes/wp-annual-report-2016/assets/images/infographics/bar-google.png"/>
                                </div>
                                <div class="inline-block vertical-bottom">
                                    <div class="ig-big-number">408,055</div>
                                    <small>25% increase from 2015</small>
                                </div>
                            </div>
                        </div>
                    </div>

            </div>

            <div class="col-xs-12 col-sm-6 ig-flex">
                <div class="table-cell vertical-middle">
                    <img class="ig-title-icon" src="http://annualreport2016.cifor.org/wp-content/themes/wp-annual-report-2016/infographic-images/ig-research-for-impact.jpg"/>
                </div>
                <div class="table-cell vertical-middle">
                    <div class="ig-title">
                        Pillar 2. Capacity<br>development
                    </div>
                </div>


                    <div id="infographic-capacity-development" class="ig-container">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="ig-big-text margin-bottom-10px m-padding-top-15">Formal training</div>
                            <div class="">
                                <table>
                                    <tr>
                                        <td>
                                            <img style="width: 129px" src="http://annualreport2016.cifor.org/wp-content/themes/wp-annual-report-2016/infographic-images/ig-capacity-development-bar.jpg"/>
                                        </td>
                                        <td>
                                            <table class="width-100 pillar-3-bar">
                                                <tr>
                                                    <th class="ig-dark-green">29</th>
                                                    <td>PhDs</td>
                                                </tr>
                                                <tr>
                                                    <th class="ig-green">53</th>
                                                    <td>MSc/MA</td>

                                                </tr>
                                                <tr>
                                                    <th class="ig-black">5</th>
                                                    <td>BSc/BA</td>

                                                </tr>
                                            </table>
                                        </td>
                                    </tr>
                                </table>
                                 <table class="width-100">
                                        <tr>
                                            <td>
                                                <img style="width: 129px" src="http://annualreport2016.cifor.org/wp-content/themes/wp-annual-report-2016/infographic-images/ig-capacity-development-donut.jpg"/>
                                            </td>
                                            <td>
                                                <table>
                                                    <tr>
                                                        <td><img style="max-width: 26px;" src="http://annualreport2016.cifor.org/wp-content/themes/wp-annual-report-2016/infographic-images/ig-capacity-development-women.jpg"/></td>
                                                        <th class="ig-dark-green">25</th>
                                                        <td>women</td>
                                                    </tr>
                                                    <tr>
                                                        <td><img style="max-width: 26px;" src="http://annualreport2016.cifor.org/wp-content/themes/wp-annual-report-2016/infographic-images/ig-capacity-development-men.jpg"/></td>
                                                        <th class="ig-green">62</th>
                                                        <td>men</td>

                                                    </tr>
                                                </table>
                                            </td>
                                        </tr>
                                    </table>
                            </div>
                            <div class="ig-line"></div>
                            <div class="">
                                <div class="inline-block vertical-middle">
                                    <div class="ig-big-text margin-bottom-10px m-padding-top-15">Short-term training</div>
                                    <table class="width-100">
                                        <tr>
                                            <td>
                                                <img style="width: 129px" src="http://annualreport2016.cifor.org/wp-content/themes/wp-annual-report-2016/assets/images/infographics/pie-trainees.png"/>
                                            </td>
                                            <td>
                                                <table>
                                                    <tr>
                                                        <td><img style="max-width: 26px;" src="http://annualreport2016.cifor.org/wp-content/themes/wp-annual-report-2016/infographic-images/ig-capacity-development-women.jpg"/></td>
                                                        <th class="ig-dark-green">1,316</th>
                                                        <td>women</td>
                                                    </tr>
                                                    <tr>
                                                        <td><img style="max-width: 26px;" src="http://annualreport2016.cifor.org/wp-content/themes/wp-annual-report-2016/infographic-images/ig-capacity-development-men.jpg"/></td>
                                                        <th class="ig-green">1,046</th>
                                                        <td>men</td>

                                                    </tr>
                                                </table>
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                            <div class="ig-line"></div>
                        </div>
                    </div>
                </div>
                </div>
        </div>
    </div>


    <div class="container-fluid">
        <div class="row">
            <div class="col-xs-12">
                <div class="table-cell vertical-middle">
                    <img class="ig-title-icon" src="http://annualreport2016.cifor.org/wp-content/themes/wp-annual-report-2016/infographic-images/ig-outreach-engagement.jpg"/>
                </div>
                <div class="table-cell vertical-middle">
                    <div class="ig-title">
                        Pillar 3. Outreach and engagement
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="">
        <div class="row">
            <div class="col-xs-12 col-sm-6 ig-flex">



                <div id="infographic-outreach-engagement" class="ig-container">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="inline-block vertical-middle">
                                <img style="max-width: 43px;margin-right:10px" src="http://annualreport2016.cifor.org/wp-content/themes/wp-annual-report-2016/infographic-images/ig-outreach-engagement-globe.jpg"/>
                            </div>
                            <div class="inline-block vertical-middle">
                                <span class="ig-big-number">38<!-- 48 --></span>
                            </div>
                            <div class="inline-block vertical-middle">
                                <span class="ig-big-text">countries</span>
                            </div>
                            <div class="ig-line"></div>
                            <table class="width-100">
                                <tr>
                                    <th>54</th>
                                    <td>Funding partners</td>
                                    <th>26</th>
                                    <td>Research institutes</td>
                                </tr>
                                <tr>
                                    <th>103</th>
                                    <td>Partners</td>
                                    <th>34</th>
                                    <td>Universities</td>
                                </tr>
                                <tr>
                                    <th>130</th>
                                    <td>Memoranda of understanding</td>
                                    <th>29</th>
                                    <td>Letters of agreement</td>
                                </tr>
                            </table>
                            <div class="ig-line visible-xs"></div>
                        </div>
                        <div class="col-xs-12 m-padding-top-30" style="padding-bottom: 15px;">
                            <div class="inline-block vertical-middle">
                                <span class="ig-big-number">113</span>
                            </div>
                            <div class="inline-block vertical-middle">
                                <div class="ig-big-text">active projects</div>
                            </div>
                            <div class="ig-line"></div>
                            <div class="ig-big-text padding-top-10px margin-bottom-10px">
                                <div class="inline-block vertical-middle">
                                    <img style="max-width: 103px;margin-right:10px" src="http://annualreport2016.cifor.org/wp-content/themes/wp-annual-report-2016/assets/images/infographics/pillar-3-donut.jpg"/>
                                </div>
                                <div class="inline-block vertical-middle">
                                    <span class="strong-gender-focus">with strong<br>gender focus</span>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>

            <div class="col-xs-12 col-sm-6 ig-flex">
                <div id="infographic-outreach-engagement-2" class="ig-container">
                    <div class="row">
                        <table>
                            <tr>
                                <th><span class="ig-big-number" style="font-weight: normal;">17</span></th>
                                <td><span class="ig-big-text-n">events organized <br>or supported, with</span></td>
                            </tr>
                        </table>
                        <table>
                            <tr>
                                <th><span class="ig-big-number" style="font-weight: normal;">32,774</span></th>
                                <td><span class="ig-big-text-n" style="line-height: 50px;">attendees</span></td>
                            </tr>
                        </table>
                        <div class="ig-line"></div>

                        <div class="ig-big-text" style="padding-left: 10px;font-size: 36px;padding-bottom: 5px;">
                        <span style="font-family: sans-serif;color: #864545;font-weight: bold;">FORESTS</span><span style="color: #c6a05e;font-family: sans-serif;font-weight: bold;"> NEWS</span></div>
                        <table>
                            <tr>
                                <th><span class="ig-big-number" style="font-weight: normal;">345</span></th>
                                <td><span class="ig-big-text-n" style="line-height: 50px;">articles viewed</span></td>
                            </tr>
                        </table>
                        <table>
                            <tr>
                                <th><span class="ig-big-number" style="font-weight: normal;">167,389</span></th>
                                <td><span class="ig-big-text-n">times on <br>Forests News</span></td>
                            </tr>
                        </table>
                        <table>
                            <tr>
                                <th><span class="ig-big-number" style="font-weight: normal;">31</span></th>
                                <td><span class="ig-big-text-n" style="line-height: 50px;">analysis viewed</span></td>
                            </tr>
                        </table>
                        <table>
                            <tr>
                                <th><span class="ig-big-number" style="font-weight: normal;">87,434</span></th>
                                <td><span class="ig-big-text-n">times on <br>Forests News</span></td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <?php /*<h2 class="m-font-museo-100 m-text-green">Three pillars</h2>*/?>

    <div class="">
     <p style="margin-top: 20px;margin-bottom: 20px">CIFOR’s contribution to the global policy dialogue gained more international recognition this year.</p>
        <div class="row">

            <div class="col-xs-12 col-sm-6 ">
                <div  class="">
                    <div class="row">
                        <div class="col-xs-12">
                            <table>
                                <tr>
                                    <td class="ig-trophy-cell"><img src="http://annualreport2016.cifor.org/wp-content/themes/wp-annual-report-2016/assets/images/infographics/trophy-1.png" height="65"></td>
                                    <td style="padding-left: 10px;vertical-align:top;">
                                        <span class="ig-big-text" style="font-size: 15px;font-weight: bold;">out of 100 top Climate Think Tanks</span><br>
                                        <p style="font-size: 0.9em;">International Center for Climate Governance</p>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xs-12 col-sm-6 ">
                <div  class="">
                    <div class="row">
                        <div class="col-xs-12">
                            <table>
                                <tr>
                                    <td class="ig-trophy-cell"><img src="http://annualreport2016.cifor.org/wp-content/themes/wp-annual-report-2016/assets/images/infographics/trophy-2.png"  height="65"></td>
                                    <td style="padding-left: 10px;vertical-align:top;">
                                        <span class="ig-big-text" style="font-size: 15px;font-weight: bold;">out of 95 top Environment Policy Think Tanks</span><br>
                                        <p style="font-size: 0.9em;line-height:16px;">Think Tanks and Civil Societies Program: Global Go To Think Tank Index Report</p>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>


    <p style="margin-top: 20px;">CIFOR and its partners contribute to the following global processes, frameworks, panels and conventions:</p>
    <div >
        <div class="row">
            <div class="col-xs-12">
                <img src="http://annualreport2016.cifor.org/wp-content/themes/wp-annual-report-2016/assets/images/Logo.png" style="margin-bottom: 50px;">
            </div>
        </div>
    </div>

    <p>CIFOR launched a set of key performance indicators in 2016 to chart our impact through research, capacity development and engagement, and to measure our operational performance.</p>
    <div >
        <div class="row">
            <div class="col-xs-12">
                <img src="http://annualreport2016.cifor.org/wp-content/themes/wp-annual-report-2016/assets/images/infographics/KPI-WEB-infographics.jpg" style="margin-bottom: 30px;">
            </div>
        </div>
    </div>


    <div class="theme-feature-container threecol with-highlight m-margin-bottom-30">
        <?php
        $args_parent_page = array(
            'post_type'      => 'page',
            'post_parent'    => get_the_ID(),
            'order'          => 'ASC',
            'orderby'        => 'menu_order'
        );
        $parent_id_page = new WP_Query( $args_parent_page );
        $no_h=1;
        if ( $parent_id_page->have_posts() ) :
            while ( $parent_id_page->have_posts() ) : $parent_id_page->the_post();
            $external_link = get_post_meta( get_the_ID(), 'external_link', 'single' );

        ?>
            <div class="highlights-box tf-box" style="background-image: url(<?php  if ( has_post_thumbnail() ){  the_post_thumbnail_url('coe-img'); } ?>);background-size: cover">
                <a href="<?php echo get_the_permalink();?>" class="fs-overlay-container <?php if($external_link){}else{ echo "linkpop";}?>"  <?php if($external_link){}else{ ?> data-title="<?php echo get_the_title();?>" data-postid="<?php echo get_the_ID();?>" data-uri="<?php echo get_the_permalink();?>" <?php } ?>>
                    <div class="fs-overlay">
                        <h3> <?php echo get_the_title();?> </h3>
                    </div>
                </a>
            </div>
        <?php
            $no_h++;
            endwhile;
        endif;
        wp_reset_query();
        ?>
    </div>

    <?php /*
    <div class="theme-feature twocol-highlight m-margin-bottom-20">
        <?php
            $args_parent_page = array(
                'post_type'      => 'page',
                'post_parent'    => get_the_ID(),
                'order'          => 'ASC',
                'orderby'        => 'menu_order'
            );
            $parent_id_page = new WP_Query( $args_parent_page );
            $no_h=1;
            if ( $parent_id_page->have_posts() ) :
                while ( $parent_id_page->have_posts() ) : $parent_id_page->the_post();
                    ?>
                    <div class="highlight-box tf-box r-relative r-block-button-container" style="background-image: url(<?php  if ( has_post_thumbnail() ){ the_post_thumbnail_url('coe-img'); } ?>);">
                        <a href="<?php echo get_the_permalink(); ?>" class="fs-overlay-container linkpop"   data-title="<?php echo get_the_title();?>" data-postid="<?php echo get_the_ID();?>" data-uri="<?php echo get_the_permalink();?>">
                            <div class="fs-overlay">
                                <h3><?php echo get_the_title();?> </h3>
                            </div>
                        </a>
                    </div>
                    <?php
                    $no_h++;
                    endwhile;
                endif;
                wp_reset_query();
            ?>

        <div class="highlight-box tf-box" style="background-image: url(images/story_pic3.jpg);">
            <a href="#" class="fs-overlay-container">
                <div class="fs-overlay">
                    <h3>More on GLF event </h3>
                </div>
            </a>
        </div>*/ ?>
    </div>

</div><!--infographic-wrapper-->
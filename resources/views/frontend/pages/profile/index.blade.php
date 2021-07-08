@extends('frontend.layouts.app')
<!--start section -->
@section('title')
<title>Profile Lira </title>    
@endsection

@section('content')

<div class="sydney-hero-area" style="padding-bottom: 10rem;">
    <div class="header-image">
<div class="overlay"></div>																</div>

</div>
<style type="text/css" media="all"
id="siteorigin-panels-layouts-head">/* Layout 33 */ #pgc-33-0-0 , #pgc-33-1-0 , #pgc-33-2-0 {/* width:100%; */width:calc(100% - ( 0 * 30px ) );} #pg-33-0 , #pg-33-1 , #pg-33-2 , #pg-33-3 , #pg-33-4 , #pg-33-5 , #pg-33-6 , #pg-33-7 , #pg-33-8 , #pg-33-9 , #pl-33 .so-panel , #pl-33 .so-panel:last-child { margin-bottom:0px } #pgc-33-3-0 , #pgc-33-3-1 , #pgc-33-4-0 , #pgc-33-4-1 , #pgc-33-5-0 , #pgc-33-5-1 , #pgc-33-6-0 , #pgc-33-6-1 , #pgc-33-7-0 , #pgc-33-7-1 , #pgc-33-8-0 , #pgc-33-8-1 , #pgc-33-9-0 , #pgc-33-9-1 , #pgc-33-10-0 , #pgc-33-10-1 { width:50%;width:calc(50% - ( 0.5 * 30px ) ) } #pg-33-0.panel-no-style, #pg-33-0.panel-has-style > .panel-row-style , #pg-33-1.panel-no-style, #pg-33-1.panel-has-style > .panel-row-style { -webkit-align-items:center;align-items:center } #pg-33-2> .panel-row-style { padding:25px } #pg-33-2.panel-no-style, #pg-33-2.panel-has-style > .panel-row-style , #pg-33-3.panel-no-style, #pg-33-3.panel-has-style > .panel-row-style , #pg-33-4.panel-no-style, #pg-33-4.panel-has-style > .panel-row-style , #pg-33-5.panel-no-style, #pg-33-5.panel-has-style > .panel-row-style , #pg-33-6.panel-no-style, #pg-33-6.panel-has-style > .panel-row-style , #pg-33-7.panel-no-style, #pg-33-7.panel-has-style > .panel-row-style , #pg-33-8.panel-no-style, #pg-33-8.panel-has-style > .panel-row-style , #pg-33-9.panel-no-style, #pg-33-9.panel-has-style > .panel-row-style , #pg-33-10.panel-no-style, #pg-33-10.panel-has-style > .panel-row-style { -webkit-align-items:stretch;align-items:stretch } #panel-33-4-1-0> .panel-widget-style , #panel-33-6-1-0> .panel-widget-style , #panel-33-8-1-0> .panel-widget-style , #panel-33-10-1-0> .panel-widget-style { color:#ffffff } @media (max-width:780px){ #pg-33-0.panel-no-style, #pg-33-0.panel-has-style > .panel-row-style , #pg-33-1.panel-no-style, #pg-33-1.panel-has-style > .panel-row-style , #pg-33-2.panel-no-style, #pg-33-2.panel-has-style > .panel-row-style , #pg-33-3.panel-no-style, #pg-33-3.panel-has-style > .panel-row-style , #pg-33-4.panel-no-style, #pg-33-4.panel-has-style > .panel-row-style , #pg-33-5.panel-no-style, #pg-33-5.panel-has-style > .panel-row-style , #pg-33-6.panel-no-style, #pg-33-6.panel-has-style > .panel-row-style , #pg-33-7.panel-no-style, #pg-33-7.panel-has-style > .panel-row-style , #pg-33-8.panel-no-style, #pg-33-8.panel-has-style > .panel-row-style , #pg-33-9.panel-no-style, #pg-33-9.panel-has-style > .panel-row-style , #pg-33-10.panel-no-style, #pg-33-10.panel-has-style > .panel-row-style { -webkit-flex-direction:column;-ms-flex-direction:column;flex-direction:column } #pg-33-0 > .panel-grid-cell , #pg-33-0 > .panel-row-style > .panel-grid-cell , #pg-33-1 > .panel-grid-cell , #pg-33-1 > .panel-row-style > .panel-grid-cell , #pg-33-2 > .panel-grid-cell , #pg-33-2 > .panel-row-style > .panel-grid-cell , #pg-33-3 > .panel-grid-cell , #pg-33-3 > .panel-row-style > .panel-grid-cell , #pg-33-4 > .panel-grid-cell , #pg-33-4 > .panel-row-style > .panel-grid-cell , #pg-33-5 > .panel-grid-cell , #pg-33-5 > .panel-row-style > .panel-grid-cell , #pg-33-6 > .panel-grid-cell , #pg-33-6 > .panel-row-style > .panel-grid-cell , #pg-33-7 > .panel-grid-cell , #pg-33-7 > .panel-row-style > .panel-grid-cell , #pg-33-8 > .panel-grid-cell , #pg-33-8 > .panel-row-style > .panel-grid-cell , #pg-33-9 > .panel-grid-cell , #pg-33-9 > .panel-row-style > .panel-grid-cell , #pg-33-10 > .panel-grid-cell , #pg-33-10 > .panel-row-style > .panel-grid-cell { width:100%;margin-right:0 } #pg-33-0 , #pg-33-1 , #pg-33-2 , #pg-33-3 , #pg-33-4 , #pg-33-5 , #pg-33-6 , #pg-33-7 , #pg-33-8 , #pg-33-9 , #pg-33-10 { margin-bottom:px } #pgc-33-3-0 , #pgc-33-4-0 , #pgc-33-5-0 , #pgc-33-6-0 , #pgc-33-7-0 , #pgc-33-8-0 , #pgc-33-9-0 , #pgc-33-10-0 , #pl-33 .panel-grid .panel-grid-cell-mobile-last { margin-bottom:0px } #pl-33 .panel-grid-cell { padding:0 } #pl-33 .panel-grid .panel-grid-cell-empty { display:none }  } </style><link rel="icon" href="../wp-content/uploads/jdk_transparent-100x100.png" sizes="32x32" />
<link rel="icon" href="../wp-content/uploads/jdk_transparent.png" sizes="192x192" />
<link rel="apple-touch-icon" href="../wp-content/uploads/jdk_transparent.png" />
<meta name="msapplication-TileImage" content="https://www.jdkfashion.com/wp-content/uploads/jdk_transparent.png" />
<style type="text/css" id="wp-custom-css">
/* Address lines style */
.contact-address .address-lines {
margin-top: -25px;
margin-left: 28px;
}

/* Reduce footer widgets gap */
.footer-widgets .sidebar-column .widget{
padding-top: 0;
padding-bottom: 0;
}		</style>
<div class="container content-wrapper">
    <div class="row">	
        <div id="primary" class="content-area">
            <main id="main" class="site-main" role="main">     
                <article id="post-33" class="post-33 page type-page status-publish hentry">
                    <header class="entry-header">
                    <h1 class="title-post entry-title">Profile</h1>	</header><!-- .entry-header -->


                    <div class="entry-content">
                        <div id="pl-33"  class="panel-layout" >
                            <div id="pg-33-0"  class="panel-grid panel-has-style" >
                                <div class="siteorigin-panels-stretch panel-row-style panel-row-style-for-33-0" style="padding: 100px 0; "
                                 data-stretch-type="full" data-overlay="true" data-overlay-color="#000000" ><div id="pgc-33-0-0"  class="panel-grid-cell" >
                                     <div id="panel-33-0-0-0" class="so-panel widget widget_sydney_skills sydney_skills_widget panel-first-child panel-last-child"
                                      data-index="0" >
                                      <div style="text-align: center;" data-title-color="#443f3f"
                                       data-headings-color="#443f3f" class="panel-widget-style panel-widget-style-for-33-0-0-0" >
                                <h3 class="widget-title">Successfulness</h3>
                                        <div class="roll-progress">
                                     <div class="name">Designing</div>
                                    <div class="perc">80%</div>
                                    <div class="progress-bar" data-percent="80" data-waypoint-active="yes">
                                        <div class="progress-animate"></div>
                                    </div>
                                </div>
                                   
                                        <div class="roll-progress">
                                     <div class="name">Quality Control</div>
                                    <div class="perc">85%</div>
                                    <div class="progress-bar" data-percent="85" data-waypoint-active="yes">
                                        <div class="progress-animate"></div>
                                    </div>
                                </div>
                                 
                                        <div class="roll-progress">
                                     <div class="name">Merchandising</div>
                                    <div class="perc">90%</div>
                                    <div class="progress-bar" data-percent="90" data-waypoint-active="yes">
                                        <div class="progress-animate"></div>
                                    </div>
                                </div>
                                 
                                        <div class="roll-progress">
                                     <div class="name">Production</div>
                                    <div class="perc">95%</div>
                                    <div class="progress-bar" data-percent="95" data-waypoint-active="yes">
                                        <div class="progress-animate"></div>
                                    </div>
                                </div>
                                 
                        
                            </div></div></div></div></div>
                           
                            <div id="pg-33-1"  class="panel-grid panel-has-style" ><div class="siteorigin-panels-stretch panel-row-style panel-row-style-for-33-1" style="background-image: url('/frontend/wp-content/uploads/Office.jpg');padding: 100px 0; " data-stretch-type="full-stretched" data-hasbg="hasbg" data-overlay="true" data-overlay-color="#000000" ><div id="pgc-33-1-0"  class="panel-grid-cell" ><div id="panel-33-1-0-0" class="so-panel widget widget_text panel-first-child panel-last-child" data-index="1" ><div style="text-align: center;" data-title-color="#443f3f" data-headings-color="#ffffff" class="panel-widget-style panel-widget-style-for-33-1-0-0" >			<div class="textwidget"><h4>At Lira Textline BD</h4>
                                <h5>we bridge the world with Bangladesh. Since 2016 we have been working in the RMG industry catering for our many valued customers with efficiency, honesty and reliability.</h5>
                                </div>
                                </div></div></div></div>
                            </div>
                            <div id="pg-33-2"  class="panel-grid panel-has-style" ><div class="siteorigin-panels-stretch panel-row-style panel-row-style-for-33-2" style="padding: 25px 0; " data-stretch-type="full" data-overlay="true" data-overlay-color="#000000" ><div id="pgc-33-2-0"  class="panel-grid-cell" ><div id="panel-33-2-0-0" class="widget_text so-panel widget widget_custom_html panel-first-child panel-last-child" data-index="2" ><div style="text-align: center;" data-title-color="#443f3f" data-headings-color="#440000" class="widget_text panel-widget-style panel-widget-style-for-33-2-0-0" >
                            <div class="textwidget custom-html-widget">
                                <style>
                                @import url('https://fonts.googleapis.com/css?family=Cabin+Sketch:700');
                                </style> 
                                <h1 style="font-family: 'Cabin Sketch', cursive;">
                                BUSINESS PORTFOLIO
                                </h1>
                                <hr></div></div></div></div></div>
                            </div>
                            <div id="pg-33-3"  class="panel-grid panel-has-style" >
                                <div style="border-bottom: 1px solid #1e73be;padding: 100px 0; " data-overlay="true" data-overlay-color="#000000" class="panel-row-style panel-row-style-for-33-3" >
                                    <div id="pgc-33-3-0"  class="panel-grid-cell" >
                                        <div id="panel-33-3-0-0" class="so-panel widget widget_text panel-first-child panel-last-child" data-index="3" >
                                            <div style="text-align: left;" data-title-color="#443f3f" data-headings-color="#443f3f" class="panel-widget-style panel-widget-style-for-33-3-0-0" >			
                                    <div class="textwidget"><p>
                                        <span class="fontstyle0">Our passionate team of fashion designers, technicians, photographers creates each design line for different customers according to their individual taste and their customer range. 
                                            </span>We convert the concepts into sketches and by choosing the trendy colors for yarn and fabric. Our Graphic team creates graphics and patterns by watercolor, pencil, photography and 3d illustrations. These sketches and colors are sent to our design sections in BD and China. We always take inspiration by attending fashion shows, fairs and shopping. We constantly update our collections with the trend. We always keep joining bellow</p>
                                                <ul>
                                                <li>Lira Texline BD is an APPAREL BUYING HOUSE & Manufactures specialized in providing customized service to buyers with Sourcing, Merchandising, Quality Control, Product Development and assuring Compliance Issues for products manufactured for USA and EEC market.
                                                </li>
                                                <li>The success of our organization is the reflection of dedicated team work and proper delegation of authority with a clear mission and vision.
                                                </li>
                                                <li>With such team synergy, we are experiencing tremendous growth in terms of expanding the operational capacity and building up a strong marketing network all over USA, EEC.</li>
                                                </ul>
                                                <p>We also shop all over US and EUROPE and constantly follow fashion magazines and online fashion blogs. We give our best efforts to offer the exclusively customized products to our clients.</p>
                                    </div>
                            </div></div></div>
                            <div id="pgc-33-3-1"  class="panel-grid-cell" >
                                <div id="panel-33-3-1-0" class="so-panel widget widget_media_image panel-first-child panel-last-child" data-index="4" >
                                    <div style="text-align: center;" id="design" data-title-color="#443f3f" data-headings-color="#443f3f" class="panel-widget-style panel-widget-style-for-33-3-1-0" >
                                        <h3 class="widget-title">Trendy Design</h3><img width="612" height="408" src="{{ asset('/frontend/wp-content/uploads/544667458-612x612.jpg') }}" class="image wp-image-503  attachment-full size-full" alt="" loading="lazy" style="max-width: 100%; height: auto;" srcset="" sizes="(max-width: 612px) 100vw, 612px" />
                                    </div></div></div></div></div><div id="pg-33-4"  class="panel-grid panel-has-style" >
                                        <div style="border-bottom: 1px solid #1e73be; background-image: url('/frontend/wp-content/uploads/img_teaser.jpg'); padding: 100px 0; " data-hasbg="hasbg" data-overlay="true" data-overlay-color="#000000" class="panel-row-style panel-row-style-for-33-4" ><div id="pgc-33-4-0"  class="panel-grid-cell" >
                                            <div id="panel-33-4-0-0" class="so-panel widget widget_media_image panel-first-child panel-last-child" data-index="5" >
                                                <div style="text-align: center;" data-title-color="#443f3f" data-headings-color="#443f3f" class="panel-widget-style panel-widget-style-for-33-4-0-0" >
                                                    <img width="600" height="400" src="{{ asset('/frontend/wp-content/uploads/Collection-600x400.jpg') }}" class="image wp-image-95  attachment-600x400 size-600x400" alt="" loading="lazy" 
                                                    style="max-width: 100%; height: auto;" srcset="" sizes="(max-width: 600px) 100vw, 600px" /></div></div></div>
                                                    <div id="pgc-33-4-1"  class="panel-grid-cell" ><div id="panel-33-4-1-0" class="so-panel widget widget_text panel-first-child panel-last-child" data-index="6" >
                                                        <div style="text-align: left;" data-title-color="#ffffff" data-headings-color="#443f3f" class="panel-widget-style panel-widget-style-for-33-4-1-0" >
                                                            <h3 class="widget-title">Our Strength</h3>			
                                                            <div class="textwidget">
                                                                <p style="font-size: large;
                                                                padding-right: 2rem;">LIRA TEXLINE BD has a combined 5 years’ experience in the apparel industry. Such an extensive background has established us as a 
                                                                    highly capable apparel sourcing company with the ability to meet all customer requirements.
                                                                    ⦁ LIRA TEXLINE BD has strong links with an extensive network of apparel factories in Bangladesh also own have one manufacturing sweater unit which completely Jacquard setup. We also have strong setup of Woven production. Moreover we are very much capable to cheap sourcing Fabric, yarns and other accessories, both in Bangladesh and abroad, enabling us to source the best combination of products to meet the customers’ requirements at the most economical price.
                                                                    ⦁ Our links with multiple factories and sources allow us to supply your product at a price you want, without compromising quality.

                                                                </p>

                                        </div>
                            </div></div></div></div></div>
                            <div id="pg-33-5"  class="panel-grid panel-has-style" >
                                <div style="border-bottom: 1px solid #1e73be;padding: 100px 0; " data-overlay="true" data-overlay-color="#000000"
                                class="panel-row-style panel-row-style-for-33-5" >
                                <div id="pgc-33-5-0"  class="panel-grid-cell" >
                                    <div id="panel-33-5-0-0" class="so-panel widget widget_text panel-first-child panel-last-child" data-index="7" >
                                        <div style="text-align: left;" data-title-color="#443f3f" data-headings-color="#443f3f" class="panel-widget-style panel-widget-style-for-33-5-0-0" >
                                            <h3 class="widget-title">What we do</h3>			
                                            <div class="textwidget"> WE OFFER A PACKAGE OF COMPLETE SOLUTIONS: CUSTOMERS’ SATISFACTION:
                                                <p>
                                                We are committed to ensure that our customers are satisfied always. This is also includes the assurance of the most comprehensive and accurate sourcing of products and their raw materials, production, design and product development services. But we never compromise with quality issue in each point of area. 
                                                </p>
                                    <p>&nbsp;</p>
                                </div>
                            </div></div></div>
                            <div id="pgc-33-5-1"  class="panel-grid-cell" >
                                <div id="panel-33-5-1-0" class="so-panel widget widget_media_image panel-first-child panel-last-child" data-index="8" >
                                    <div style="text-align: center;" id="merchandising" data-title-color="#443f3f" data-headings-color="#443f3f" 
                                    class="panel-widget-style panel-widget-style-for-33-5-1-0" ><img width="1024" height="768" src="{{ asset('/frontend/wp-content/uploads/office_image.jpg') }}"
                                     class="image wp-image-526  attachment-large size-large" alt="" loading="lazy" style="max-width: 100%; height: auto;" 
                                     srcset="" sizes="(max-width: 1024px) 100vw, 1024px" /></div></div></div></div></div>
                                     <div id="pg-33-6"  class="panel-grid panel-has-style" >
                                         <div style="border-bottom: 1px solid #1e73be;background-image: url('/frontend/wp-content/uploads/Factory.jpg');padding: 100px 0; " data-hasbg="hasbg"
                                          data-overlay="true" data-overlay-color="#000000" class="panel-row-style panel-row-style-for-33-6" >
                                          <div id="pgc-33-6-0"  class="panel-grid-cell" ><div id="panel-33-6-0-0" class="so-panel widget widget_media_image panel-first-child panel-last-child" 
                                            data-index="9" ><div style="text-align: center;" data-title-color="#ffffff" data-headings-color="#443f3f" 
                                            class="panel-widget-style panel-widget-style-for-33-6-0-0" ><img width="1024" height="559" src="{{ asset('/frontend/wp-content/uploads/Factory-1-1024x559.jpg') }}" 
                                            class="image wp-image-174  attachment-large size-large" alt="" loading="lazy" style="max-width: 100%; height: auto;" 
                                            srcset="" sizes="(max-width: 1024px) 100vw, 1024px" /></div></div></div><div id="pgc-33-6-1"  class="panel-grid-cell" >
                                                <div id="panel-33-6-1-0" class="so-panel widget widget_text panel-first-child panel-last-child" data-index="10" >
                                                    <div style="text-align: left;" data-title-color="#ffffff" data-headings-color="#443f3f" class="panel-widget-style panel-widget-style-for-33-4-1-0" >
                                                        <h3 class="widget-title">TIMELY DELIVERY:
                                                        </h3>			
                                                        <div class="textwidget">
                                                            <p style="font-size: large;
                                                            padding-right: 2rem;" 
                                                            >We are very much strictly ensured the timely deliveries and maintain without any compromise on quality. We always keep buyer’s selling period & never wanna my buyers his sells loss & personally Lira Texline never expect to arise such type of occur. It’s also our good strength that’s why our associate factories are within our under control.  
                                                            </p>

                                    </div>
                        </div>
                        </div></div></div></div>
                            <div id="pg-33-7"  class="panel-grid panel-has-style" ><div style="border-bottom: 1px solid #1e73be;padding: 100px 0; "
                                 data-overlay="true" data-overlay-color="#000000" class="panel-row-style panel-row-style-for-33-7" ><div id="pgc-33-7-0"  class="panel-grid-cell" >
                                     <div id="panel-33-7-0-0" class="so-panel widget widget_text panel-first-child panel-last-child" data-index="11" >
                                         <div style="text-align: left;" data-title-color="#443f3f" data-headings-color="#443f3f" class="panel-widget-style panel-widget-style-for-33-7-0-0" >
                                            <h3 class="widget-title">Production</h3>			
                                            <div class="textwidget"><p>We have our own 1 sweater manufacturing factories near Dhaka. Here more then 1500 workers are operating for last 15 years.</p>
                            <p>With more then 100 production stuffs, our monthly export is over 150,000pcs of sweaters. All the factories are around Dhaka and always in communication with the Lira Textline office in uttra Dhaka. We have separate design section in each factory for production and R&amp;D.</p>
                            <p>Apart form our own factories; we also produce in more than 8 sweater factories in Dhaka and Chittagong and 5 woven factories. In total our average monthly export in sweater is around a million pieces and woven around 2 million pieces.</p>
                            </div>
                            </div></div></div><div id="pgc-33-7-1"  class="panel-grid-cell" >
                                <div id="panel-33-7-1-0" class="so-panel widget widget_media_image panel-first-child panel-last-child" data-index="12" >
                                    <div style="text-align: center;" id="production" data-title-color="#443f3f" data-headings-color="#443f3f" class="panel-widget-style panel-widget-style-for-33-7-1-0" >
                                        <img width="973" height="571" src="{{ asset('/frontend/wp-content/uploads/factory_process_map.jpg') }}" class="image wp-image-177  attachment-full size-full" alt="" loading="lazy" 
                                        style="max-width: 100%; height: auto;" srcset="" sizes="(max-width: 973px) 100vw, 973px" /></div></div></div></div></div>
                                        <div id="pg-33-8"  class="panel-grid panel-has-style" >
                                            <div style="border-bottom: 1px solid #1e73be;background-image: url('/frontend/wp-content/uploads/qc1.jpg');padding: 100px 0; " 
                                            data-hasbg="hasbg" data-overlay="true" data-overlay-color="#000000" class="panel-row-style panel-row-style-for-33-8" >
                                            <div id="pgc-33-8-0"  class="panel-grid-cell" >
                                                <div id="panel-33-8-0-0" class="so-panel widget widget_media_image panel-first-child panel-last-child" data-index="13" >
                                                    <div style="text-align: center;" id="qc" data-title-color="#ffffff" data-headings-color="#ffffff" 
                                                    class="panel-widget-style panel-widget-style-for-33-8-0-0" ><h3 class="widget-title">Quality Control</h3>
                                                    <img width="1632" height="1224" src="{{ asset('/frontend/wp-content/uploads/IMG_7724.jpg') }}" class="image wp-image-185  attachment-full size-full" alt="" 
                                                    loading="lazy" style="max-width: 100%; height: auto;"
                                                     srcset=" " sizes="(max-width: 1632px) 100vw, 1632px" /></div></div></div>
                                                     <div id="pgc-33-8-1"  class="panel-grid-cell" >
                                                         <div id="panel-33-8-1-0" class="so-panel widget widget_text panel-first-child panel-last-child" data-index="14" >
                                                             <div style="text-align: left;" data-title-color="#443f3f" data-headings-color="#443f3f" 
                                                             class="panel-widget-style panel-widget-style-for-33-8-1-0" >		
                                                             	<div class="textwidget"><p style="font-size: large;
                                                            padding-right: 2rem;" 
                                                             	>Our focused and well trained QA teams are working in every key check point of the manufacturing stages to attain the customers required quality standards. Starting from sample approval to the final production stages, our QCs are always monitoring and supervising the factory people. To achieve the stiff target of attaining the high standards, we allocate individual QA teams for individual clients, working around the clock in every factory we produce at.</p>
                            <p style="font-size: large;
                                                            padding-right: 2rem;" >These teams at the factories are centrally monitored and regulated by the QA department stationed at Lira Textline head office on a daily basis. Consequently, our efficient quality control system has enabled us to meet the AQL standards set by the clients.</p>
                            <p style="font-size: large;
                                                            padding-right: 2rem;" >In order to better ourselves, we have developed a chain of procedures to ensure our required standards are met to maximize production and minimize wastage. And this also ensures on time shipment according to plan.</p>
                            <ul>
                            <li>Understanding the customers’ quality requirements.</li>
                            <li>Organizing &amp; training quality control department.</li>
                            <li>Ensuring proper flow of quality requirements to the QC department.</li>
                            <li>Ensuring proper flow of quality requirements to the Production Department.</li>
                            <li>Establishing quality plans, parameters, inspection systems, frequency, sampling techniques etc.</li>
                            <li>Inspection, testing, measurements as per plan.</li>
                            <li>Record deviations</li>
                            <li>Feedback to Production Department.</li>
                            <li>Plan for further improvement.</li>
                            </ul>
                            <p style="font-size: large;
                                                            padding-right: 2rem;" >We push ourselves to the limit to make sure that the chain of procedures mentioned above are followed every time for every order.</p>
                            </div>
                            </div></div></div></div></div><div id="pg-33-9"  class="panel-grid panel-has-style" >
                                <div style="border-bottom: 1px solid #1e73be;padding: 100px 0; " data-overlay="true" data-overlay-color="#000000" class="panel-row-style panel-row-style-for-33-9" >
                                    <div id="pgc-33-9-0"  class="panel-grid-cell" >
                                        <div id="panel-33-9-0-0" class="so-panel widget widget_text panel-first-child panel-last-child" data-index="15" >
                                            <div style="text-align: left;" data-title-color="#443f3f" data-headings-color="#443f3f" class="panel-widget-style panel-widget-style-for-33-9-0-0" >
                                                <h3 class="widget-title">Business Ethics &#038; Compliance</h3>			
                                                <div class="textwidget"><p>Our prime objective is to build a transparent bridge between our customers and us for building and maintaining a long-term relationship.</p>
                            <p>All three of our own manufacturing units are 100% compliance. We are certified by globally recognized Auditing Companies. Over the time we have accumulated BSCI, SEDEX, WRAP, ACORD, OEKO-TEX, WALMART etc.</p>
                            <p>We have internal compliance teams stationed in each of our factories, up keeping the compliance standards mentioned above regularly. These teams report directly to our central Compliance Department stationed in Lira Textline   head office.</p>
                            </div>
                            </div></div></div><div id="pgc-33-9-1"  class="panel-grid-cell" >
                                <div id="panel-33-9-1-0" class="so-panel widget widget_media_image panel-first-child panel-last-child" data-index="16" >
                                    <div style="text-align: center;" id="compliance" data-title-color="#443f3f" data-headings-color="#443f3f"
                                     class="panel-widget-style panel-widget-style-for-33-9-1-0" ><img width="638" height="359" src="{{ asset('frontend/wp-content/uploads/Compliance.jpg') }}" 
                                     class="image wp-image-188  attachment-full size-full" alt="" loading="lazy"
                                      style="max-width: 100%; height: auto;"
                                     sizes="(max-width: 638px) 100vw, 638px" /></div></div></div></div></div><div id="pg-33-10"  class="panel-grid panel-has-style" >
                                         <div style="background-image: url('/frontend/wp-content/uploads/qc1.jpg');padding: 100px 0; " data-hasbg="hasbg" data-overlay="true" data-overlay-color="#000000" 
                                         class="panel-row-style panel-row-style-for-33-10" ><div id="pgc-33-10-0"  class="panel-grid-cell" >
                                             <div id="panel-33-10-0-0" class="so-panel widget widget_media_image panel-first-child panel-last-child" data-index="17" >
                                                 <div style="text-align: center;" data-title-color="#ffffff" data-headings-color="#443f3f" 
                                                 class="panel-widget-style panel-widget-style-for-33-10-0-0" >
                                                    <h3 class="widget-title">Method of Executing Orders</h3>
                                                    <a href="../wp-content/uploads/Commerce.jpg"><img width="300" height="200" src="{{ asset('/frontend/wp-content/uploads/Commerce-300x200.jpg') }}" 
                                                        class="image wp-image-194  attachment-medium size-medium" alt="" loading="lazy" style="max-width: 100%; height: auto; color:white;" 
                                                        srcset="" sizes="(max-width: 300px) 100vw, 300px" /></a></div></div></div>
                                                        <div id="pgc-33-10-1"  class="panel-grid-cell" ><div id="panel-33-10-1-0" class="so-panel widget widget_text panel-first-child panel-last-child" data-index="18" >
                                                            <div style="text-align: left;" data-title-color="#443f3f" data-headings-color="#443f3f" class="panel-widget-style panel-widget-style-for-33-10-1-0" >			
                                                                <div class="textwidget"><p>&nbsp;</p>
                            <p>&nbsp;</p>
                            <ul>
                                <li>receipt of inquiry, we immediately make samples to determine cost and inform buyer.</li>
                                <li>Upon acceptance of price and delivery, Buyer issues purchase order.</li>
                                <li>We provide Proforma invoice for opening of L/C by buyer.</li>
                                <li>Once L/C is received, it is transferred to the Factories, who open back-to-back L/C for Yarn, Fabric, and Accessories etc.</li>
                                <li>We stay in constant touch with the Factories regarding shipment of raw materials and keep the Buyer updated regular basis.</li>
                                <li>As production begins, our QA Team vigilantly monitors the production to ensure that All Buyer requirements are completely followed. We also keep the Buyer apprised of
                                    Any issues.</li>
                                <li>Goods are made ready for shipments then our inspection team will conduct Pre-final inspection, If pre-final inspection are pass then we will proceed final inspection as buyer circumstance.
                                    </li>
                            </ul> 
                            </pre>
                            </div>
                            </div></div></div></div></div>
                        </div>			
                    </div><!-- .entry-content -->

                    <footer class="entry-footer">
                    </footer><!-- .entry-footer -->
                </article><!-- #post-## -->
            </main><!-- #main -->
        </div><!-- #primary -->
    </div>
</div>

@endsection   
<!--end section--> 

@section('script')
   
@endsection


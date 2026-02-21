@extends('frontend.master')

@section('content')
   <link rel="stylesheet" href="{{ asset('public/frontend/assets/css/module-css/03-about.css') }}">
    <link rel="stylesheet" href="{{ asset('public/frontend/assets/css/module-css/09-breadcrumb-section.css') }}">

    <!--Start Breadcrumb Style1-->
    <section class="breadcrumb-style1">
        {{-- <div class="breadcrumb-style1__bg" style="background-image: url({{asset('public/frontend/assets/images/backgrounds/breadcrumb-v1-bg.jpg')}});"> --}}
        <div class="breadcrumb-style1__bg" style="background-image: url('{{ asset('public/frontend/assets/images/backgrounds/breadcrumb-v1-bg.jpg') }}');">
        </div>
        <div class="auto-container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="breadcrumb-style1__inner text-center">
                        <h2>Our History</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="breadcrumb-style1__bottom">
            <div class="auto-container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="breadcrumb-style1__bottom-menu">
                            <ul>
                                <li><a href="{{ route('home') }}">Home</a></li>
                                <li><i class="fa fa-angle-right" aria-hidden="true"></i></li>
                                <li>Our History</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Breadcrumb Style1-->

    <!--Start About Style2-->
    <section class="about-style2 about-style2--about">
        <div class="auto-container">
            <div class="row">
                <div class="col-xl-6">
                    <div class="about-style2__img">
                        <div class="shape1 rotate-me"><img
                                src={{ asset('public/frontend/assets/images/shapes/thm-shape1.png') }} alt="#"></div>
                        <div class="shape2 float-bob-y"><img
                                src={{ asset('public/frontend/assets/images/shapes/thm-shape1.png') }} alt="#">
                        </div>
                        <div class="about-style2__img-video-box text-center">
                            <a href="https://www.youtube.com/watch?v=Get7rqXYrbQ" class="video-popup">
                                <div class="about-style2__img-video-box-icon">
                                    <span class="icon-play-1"></span>
                                    <i class="ripple"></i>
                                </div>
                            </a>
                            <div class="title">
                                <h3>Watch Leader <br> Talk</h3>
                            </div>
                        </div>
                        <div class="inner">
                            <img src={{ asset('public/frontend/assets/images/about/about-page-about-img1.jpg') }}
                                alt="#">
                        </div>
                    </div>
                </div>


                <div class="col-xl-6">
                    <div class="about-style2__content">
                        <div class="sec-title">
                            <div class="sub-title">
                                <h6>Histort Jaynagar Majilpur</h6>
                            </div>
                            <h2>Welcome & Support <br> To Jaynagar Majilpur Municipal</h2>
                        </div>
                        <div class="about-style2__content-text">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec felis, suscipit mi
                                urna nulla at tincidunt feugiat vulputate. Ante facilisis face pellentesque quis
                                egestas metus, mauris dictum sollicitudin hendrerit quis in magna cras adipiscing
                                posuere augue imperdiet arcu.</p>
                        </div>

                        <div class="about-style2__content-bottom">
                            <div class="inner">
                                <ul>
                                    <li>
                                        <div class="icon">
                                            <span class="icon-check"></span>
                                        </div>
                                        <div class="text">
                                            <p>Improving all types of opportunities</p>
                                        </div>
                                    </li>

                                    <li>
                                        <div class="icon">
                                            <span class="icon-check"></span>
                                        </div>
                                        <div class="text">
                                            <p>Quick solutions for daily problems</p>
                                        </div>
                                    </li>

                                    <li>
                                        <div class="icon">
                                            <span class="icon-check"></span>
                                        </div>
                                        <div class="text">
                                            <p>Community that grows larger</p>
                                        </div>
                                    </li>
                                </ul>
                            </div>

                            <ul class="about-style2--about__social-links">
                                <li><a href="#"><span class="icon-facebook-app-symbol"></span></a></li>
                                <li><a href="#"><span class="icon-twitter"></span></a></li>
                                <li><a href="#"><span class="icon-instagram"></span></a></li>
                            </ul>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End About Style2-->

    <!--Start History Section-->
<section class="about-style2 about-style2--history">
    <div class="auto-container">
        <div class="row">
            <div class="col-xl-12">
                <div class="about-style2__content">
                    <div class="sec-title">
                        <div class="sub-title">
                            <h6>Our History</h6>
                        </div>
                        <h2>Jaynagar Majilpur Municipality</h2>
                    </div>
                    <div class="about-style2__content-text">
                        <p>A few centuries back this region was nothing but a remote area of the Sunderbans full of mangrove forests on both sides of silted 'ADI GANGA'. In the last decade of the 16th and first decade of the 17th century Gunananda Motilal, Ramgobinda Mitra and Chandraketu Dutta came here with some of their associates to earn their livelihood and also to save their religious belief from the insane acts of mohammedanization. Thereafter, the jungles of this area were cleared up with hard struggles by toiling masses under the guidance of those persons. This action enabled this region habitable for mankind and many men of letters began to reside here. In course of time, Jaynagar and Majilpur emerged as an area of learned persons of undivided Bengal.</p>

                        <p>Later, at the dawn of renaissance movement in undivided Bengal, persons of Jaynagar-Majilpur formed a Town Committee with a view to developing this area as a Town. Pundit Harananda Vidyasagar was the Chairman of that committee. He was a close associate of Pundit Ishwar Chandra Vidyasagar and was also the father of Pundit Shibnath Shastri, a great son of Bengal.</p>

                        <p>This committee rendered many remarkable services towards the advancement of this area setting up roads, sewerages, libraries, schools and various types of cultural and social organisations. All these were done with ut-most supports from a section of local zaminders belonging to Dutta & Mitra families.</p>

                        <p>In the year 1869, when the then British rulers enacted Bengal Municipal Act on and from 1st April, this twin village was converted into Jaynagar Municipality and Pundit Harananda Vidyasagar adorned the chair from the same date. Consulting many old records like Calcutta Gazette of 14 March 1877, it is noted that Pundit Harananda Vidyasagar was the chairman of this Municipality till then. It is also noted that in between 1877 and 1886 election were held and Haridas Dutta was elected as the chairman of the Municipality.</p>

                        <p>However, within two or three years from the April 1869, Dutta & Mitra zaminders of this twin village donated their land for construction of Municipal buildings and many other establishments needed for administrative and social purposes. Subsequently, Municipal office building and other establishments were constructed on the donated plots of land and activities of the Municipality were managed in full swing. It needs to be mentioned here that in the year 1936 the name of 'Jaynagar Municipality' was changed and it was transformed as 'Jaynagar-Majilpur Municipality'.</p>

                        <p>In 1869, this Municipal area was divided into four wards only, in 1962 it was fragmented into eleven wards and from 1995 till date it has been contaning fourteen wards without enhancing its area i.e. 5.81 kilometers.</p>

                        <p>In 1886, Kerosene Lamps were installed at places adjacent to the important thoroughfares for providing street lights. In 1904, a charitable dispensary named as 'Allen Charitable Dispensary' was established. The name Allen Charitable Dispensary' was changed as 'N. N. Dutta Charitable Dispensary' in the years1934 as Mr. Narendra Narayan Dutta provided the required fund to run the dispensary then.</p>

                        <p>In 1939, Sudhir Krishna Dutta elected as the chairman. He took initiative to establish a Maternity and Child welfare centre here. He and some of his close associates like Bhutnath Chakraborty and others collected donation for the purpose and constructed the present ground floor building of 'Matri Mongal-Shishu Mongal'. After completion of the first floor the Maternity and Child Welfare Centre has been rendering its service to the local people on and from 27.08.1950. At present, it is equipped with modern facilities of treatment including one operation theatre.</p>

                        <p>Electricity reached this Municipal area in 1957-58 for providing service to the local residents and in 1969 street lights with electric lamps were installed in all wards. Thereafter, many pucca roads, drains, guardwalls of ponds, Town Hall (Shibnath Shastri Sadan), Amantran Hall etc have been constructed. Many deep tube-wells have been sunk for providing drinking water to the local people. At present, a project for providing drinking water to each house of local residents has been completed and it is awaiting inauguration.</p>

                        <p>In addition to above, a stadium is being developed gradually. Many children parks have been constructed, markets, community halls, graveyards have been developed. The dumping grounds situated in the Serengampur Gram Panchayet area has also been developed with Bio-Gas plant installed there and providing street lights from the Bio-Gas in that area.</p>

                        <p>The Municipal authority generally provides all types of services to the local people (which are entrusted with them by concerned authority time to ghts, maintenance of sewerages & roads, removing time) providing street lights, main garbage from the residential areas, mintenance of markets, burning ghats, graveyards along with supply of drinking water to the local people are the regular services of the Municipality. Moreover, regular health check up of expectant mothers are done at the 'Maternity and Child Welfare Centre'.</p>

                        <p>There is no big and small industry which may provide jobs to the local people and enhance the revenue earnings of this Municipality. Some people of this Municipal area cultivate various types of vegetables and sell those product in the local markets. Near about 10% to 15% people of total population are government employees and school teachers, more than 25% people run small business selling different items in different shops, more than 30% people impart their skilled services as masons, carpentary works, electrical parts repiring etc. and earn their livelihood. The rest is either unemployed or daily laboureres. As this Municipal area is formed on the silted 'ADI GANGA', many small and big water bodies exist here as the remnents of 'ADI GANGA', where pisciculture is being done in an unorganised manner.</p>

                        <p>A railway track from Sealdah-Lakshmikantapur has been providing train service as main linkage to Kolkata since 1928. A few years back the railway track is extended upto Namkhana. Due to this extension the trains are plying with overcrowded passengers. Another source of communication to Kolkata from here is Garia -Mathurapur Road. But their is no regular bus service which is very much needed now. Moreover, some new roads have been constructed in the interior areas of the Sunderbans and various types of motor vehicles are plying on these roads regularly and it causes influx of population in this Municipal area.</p>

                        <p>Five Higher Secondary schools, two High Schools, seventeen Primary Schools, one Police Station, one office of the Sub-Register, Five Nationalised Banks, three Private Banks and one co-operative Bank offer financial services to the people of this area. Some offices are running in the Municipal building paying rent to the Municipality.</p>

                        <p>In addition to above, one 'Maternity and Child Welfare Centre' and three markets including age old 'Mitraganj Hat' are built by this Municipality. Besides, one Town Library, one Rural Library and one Private Library are running here. Some private K.G. Schools and Nursing Homes are providing services to the locals as well as people of the adjacent areas of this Municipality.</p>

                        <p>This Municipal area is treated as a cultured area of Bengal. Near about two hundred years ago 16 to 18 Toles & Chatuspathis were maintained by some local pundits. Some Toles were residential, many learners from different parts of undivided Bengal were admitted into these Toles to learn Sanskrit language, Hindu Shastra,, Philosophy and Literature. At that time this area was called the 'Second Nabadwip of Bengal'. Thereafter, due to change of social needs many schools were established here and having been educated from those schools in early life Umesh Chandra Dutta, Shibnath Shastri, Kalinath Dutta, Kalidas Dutta, Gopendra Krishna Basu, Dr. Gopikamohan Bhattacharya, Dr. Bimal Krishna Motilal, Dr. Nilratan Sarkar, Dr. Balai Chand Kundu and many other eminent personalities devoted their lives for the sake of our nation. Moreover, in the field of classical music, sports and drama many persons of this locality placed themselves in an admirable position in Bengal. This cultural traditions are still now being continued by some local people. It needs to be mentioned here that Monmothanath Das, an artisan, upheld the traditional art of making clay models of Hindu God-Goddess and various types of dolls. In 1985, he was placed first in the All Bengal Handicraft Competition and in 1986 he received National awards. Some of his works are kept in the Ashutosh Museum, Indian Museum and Government Art College. At present earthen pots, iron made articles and carpentary articles are being traditionally made by some Kumbhakar, Karmakar and Carpenter families of this area.</p>

                        <p>At the time of freedom movement of India, some persons of this locality also devoted their lives. The name of Kanailal Bhattacharya, Bhutnath Bhattacharya, Monmotho Ghosh, Tinkari Das, Rajani Kanta Bhattacharya, Kshiti Prosad Das, Kuntal Chakraborty, Sachin Banerjee along with many other names of persons may be referred to here. They participated in the freedom movement quite sincerely and suffered jail terms from time to time by orders of the then British Rulers for their activities. Biplabi Kanailal Bhattacharya sacrificed his life at the age of 22 after shooting down R.R. Garlik in his court room. He did this to take revenge for awarding death sentence to Biplabi Dinesh Gupta who was one of the brave soldiers of historic 'ALINDA-JUDDHA' of the Writers' Building.</p>

                        <p>Jaynagar-Majilpur Municipal area is situated in the world's largest delta region i.e. the Sunderbans. The average temperature of this area 37°C highest and 13°C lowest. The average annual rainfall is 1700 mm. Relative humidity of this region hovered between 71%-90%. In winter, this area becomes very pleasant. The temperature and moisture remain in such a peculiar condition that 'Nalen Gur' and 'Khai' are produced in this area with its unique sweetness and scent. These are the main ingradiants of famous 'Jaynagarer Moa'. It is nothing but a product of nature's laboratory which exists only in the climatic condition and quality of soil of this area during winter season. The unique scent of 'Nalen Gur' is a product of datepalm tree and excellent scent of 'Khai' is a product of Kanakchur paddy of this area.</p>

                        <p>The history of Jaynagar Mojilpur is a long one dating back to the prehistoric days. This small effort is no match for that huge canvas. However, the activities of our glorious Municipality are praise-worthy since its inception. Obviously there might have been mistakes made, but certainly there are achievements galore to be proud of.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End History Section-->
@endsection

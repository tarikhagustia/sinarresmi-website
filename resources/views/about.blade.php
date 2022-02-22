@extends('layouts.master')

@section('content')
    <div style="background-image: url({{ asset('images/hero-bg.png') }}); background-repeat: no-repeat; background-size: cover">
        <div class="container pb-4 pt-5">
            <div class="row">
                <div class="col-sm-6 border p-4">
                    <h1 class="text-white font-weight-bold">About Us</h1>
                    <p class="caps text-white">Kasepuhan Sinar Official led by Abah Asep Nugraha is located in Cisolok District, and is a diversity of one of the traditional villages of Kasepuhan Banten Kidul which is still preserved. Kasepuhan Sinar Official is an integral part of the cultural aspect of the Ciletuh Geopark.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="divider"></div>
    <div class="container">
        <div class="row align-items-center mb-5">
            <div class="col-sm-6">
                <img class="img-fluid" src="{{ asset('images/about-us.jpg') }}">
            </div>

            <div class="col-sm-6">
                <h3>History of Kasepuhan Sinar Resmi</h3>
                <p class="text-muted">
                    Kasepuhan Adat Banten Kidul is a Sundanese indigenous people who live around Mount Halimun, precisely in Sirnaresmi Village, Cisolok District, Sukabumi Regency, West Java Province. The Kasepuhan Indigenous Banten Kidul people believe that they are descended from the Sunda Kingdom which has existed since 500 years ago in Pakuan Pajajaran, namely in the 16th century. Sunda Wiwitan ancestor. 
                </p> 

                <p class="text-muted">
                    However, along with the entry of Islam in the Kasepuhan Sinar Official environment, people's lives harmonize Islamic religious values ​​with the values ​​of Sunda Wiwitan culture in the daily life of the Kasepuhan Indigenous people of Banten Kidul. The existence of harmony between the two values ​​shows acculturation in people's lives. This acculturation of cultural values ​​is found in three Kasepuhan who are included in the Kasepuhan Adat Banten Kidul namely Kasepuhan Sinar Official, Kasepuhan Cipta Mulya, and Kasepuhan Cipta Degree.
                </p>
            </div>
        </div>

        <div class="row align-items-center">
            <div class="col-sm-6">
                <h3>Culture</h3>
                <p class="text-muted">
                    Kasepuhan Sinar Official is a traditional settlement that still maintains and carries out the values ​​that exist in the Sunda Wiwitan culture. One of the ritual activities carried out by the Kasepuhan Sinar Official community is the Seren Taun activity. This activity is a ritual activity that is carried out once a year as a form of expressing gratitude to God Almighty for the abundant harvest. Based on this ritual activity, it shows that the Kasepuhan Sinar Official community is an agrarian society.
                </p>

                <p class="text-muted">
                    In the life of the Kasepuhan Sinar Official community, there is a traditional leader as the person in charge of social, economic, and spiritual life based on the values ​​of Sunda Wiwitan culture. The elected traditional leader is descended from the founder of the official Kasepuhan Sinar who received wangsit (orders from ancestors). The traditional leader in Kasepuhan Sinar Official is called Abah.
                </p>
            </div>
            <div class="col-sm-6">
                <img class="img-fluid" src="{{ asset('images/culture.jpeg') }}">
            </div>

           
        </div>
    </div>
@stop

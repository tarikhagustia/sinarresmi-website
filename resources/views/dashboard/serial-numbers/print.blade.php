<html lang="en">

<head>
    <meta charset="utf-8">
    <title>HTML & CSS Avery Labels (5160) by MM at Boulder Information Services</title>
    <link href="labels.css" rel="stylesheet" type="text/css">
    <style>
        body {
            width: 8.5in;
            margin: 0in .1875in;
        }

        @page {
            size: A4;
            margin: 0;
        }

        @media print {

            html,
            body {
                width: 210mm;
                height: 297mm;
            }

            /* ... the rest of the rules ... */
        }

        .label {
            /* Avery 5160 labels -- CSS and HTML by MM at Boulder Information Services */
            width: 5cm;
            /* plus .6 inches from padding */
            height: 5cm;
            /* plus .125 inches from padding */
            padding: .125in .3in 0;
            margin-right: .125in;
            /* the gutter */

            float: left;

            text-align: center;
            overflow: hidden;

            outline: 1px dotted;
            /* outline doesn't occupy space like border does */
        }

        .page-break {
            clear: left;
            display: block;
            page-break-after: always;
        }

    </style>

</head>

<body>
    <page>
        @foreach ($serial->serialNumbers as $item)
            <div class="label">
                <img src="{{ $item->image_url }}" height="74" width="74">
                <br> {{ $item->productSerial->product->name }}
                <br> Tgl Produksi {{ $item->productSerial->production_date }}
                <br> Expired At: {{ $item->productSerial->expired_at }}
                <br> Id: {{ $item->productSerial->product->sku }}
                <br>
            </div>
        @endforeach

        <div class="page-break"></div>
    </page>
    <script type="text/javascript">
        window.print();
    </script>
</body>

</html>

<head>
    <style>
        @import url("https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700&display=swap");

        :root {
            --font-color: black;
            --highlight-color: #60d0e4;
            --header-bg-color: #b8e6f1;
            --footer-bg-color: #bfc0c3;
            --table-row-separator-color: #bfc0c3;
        }

        @page {
            size: A4;
            margin: 0cm 0 3cm 0;

            @top-left {
                content: element(header);
            }

            @bottom-left {
                content: element(footer);
            }
        }

        body {
            margin: 0;

            color: var(--font-color);
            font-family: "Montserrat", sans-serif;
            font-size: 10pt;
        }


        a {
            color: inherit;
            text-decoration: none;
        }

        hr {
            margin: 1cm 0;
            height: 0;
            border: 0;
            border-top: 1mm solid var(--highlight-color);
        }

        header {
            height: 8cm;
            padding: 0 2cm;
            position: running(header);
            background-color: var(--header-bg-color);
        }

        header .headerSection {
            display: flex;
            justify-content: space-between;
        }

        header .headerSection:first-child {
            padding-top: 0.5cm;
        }

        header .headerSection:last-child {
            padding-bottom: 0.5cm;
        }


        header .headerSection div:last-child {
            width: 35%;
        }

        header .logoAndName {
            display: flex;
            align-items: center;
            justify-content: space-between;
        }


        header .logoAndName svg {
            width: 1.5cm;
            height: 1.5cm;
            margin-right: 0.5cm;
        }

        header .headerSection .invoiceDetails {
            padding-top: 0.5cm;
        }


        header .headerSection h3 {
            margin: 0 0.75cm 0 0;
            color: var(--highlight-color);
        }


        header .headerSection div:last-of-type h3:last-of-type {
            margin-top: 0.5cm;
        }


        header .headerSection div p {
            margin-top: 2px;
        }


        header h1,
        header h2,
        header h3,
        header p {
            margin: 0;
        }

        header .invoiceDetails,
        header .invoiceDetails h2 {
            text-align: right;
            font-size: 1em;
            text-transform: none;
        }

        header h2,
        header h3 {
            text-transform: uppercase;
        }

        header hr {
            margin: 1cm 0 0.5cm 0;
        }

        main table {

            width: 100%;
            border-collapse: collapse;
        }

        main {
            padding: 1cm 2cm;
        }

        main table thead th {
            height: 1cm;
            color: var(--highlight-color);
        }


        main table thead th:nth-of-type(2),
        main table thead th:nth-of-type(3),
        main table thead th:last-of-type {
            width: 2.5cm;
        }

        main table tbody td {
            padding: 2mm 0;
        }

        main table thead th:last-of-type,
        main table tbody td:last-of-type {
            text-align: right;
        }

        main table th {
            text-align: left;
        }


        main table.summary {
            width: calc(40% + 2cm);
            margin-left: 60%;
            margin-top: 0.5cm;
        }

        main table.summary tr.total {
            font-weight: bold;
            background-color: var(--highlight-color);
        }


        main table.summary th {
            padding: 4mm 0 4mm 1cm;
        }


        main table.summary td {
            padding: 4mm 2cm 4mm 0;
            border-bottom: 0;
        }

        aside {
            -prince-float: bottom;
            padding: 0 2cm 0.5cm 2cm;
        }

        aside>div {
            display: flex;
            justify-content: space-between;
        }

        aside>div>div {
            width: 45%;
        }

        aside>div>div ul {
            list-style-type: none;
            margin: 0;
        }
    </style>
</head>

<body>

    <header>
        <div class="headerSection">
            <div class="logoAndName">
                <svg>
                    <circle
                        cx="50%"
                        cy="50%"
                        r="40%"
                        stroke="black"
                        stroke-width="3"
                        fill="black" />
                </svg>
                <h1>{{ $tenantInfo['companyName'] }}</h1>
            </div>
            <div>

                <p>{{$currentDate}}</p>
            </div>
        </div>
        <hr />
        <div class="headerSection">
            <div>
                <h3>{{ $tenantInfo['companyName'] }} report</h3>
                <p>
                    <b>{{ $tenantInfo['name'] }}</b>
                    <br />
                    {{ $tenantInfo['address'] }}
                    <br />
                    <a href="mailto:clientname@clientwebsite.com">
                        {{ $tenantInfo['email'] }}
                    </a>

                </p>
            </div>

        </div>
    </header>
    <main>
        <table>
            <thead>
                <tr>
                    <th>Item Description</th>
                    <th>Rate</th>
                    <th>Amount</th>
                    <th>Total</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($bookings as $booking)
                <tr>
                    <td>
                        <b>{{ $booking->car->car_name ?? 'Unknown Car' }}</b>
                        <br />
                        <b>{{ $booking->car->car_category ?? 'Unknown Car' }}</b>
                    </td>
                    <td>{{ number_format($booking->car->rates ?? 0, 2) }}</td>
                    <td>{{ $booking->total_bookings }}</td>
                    <td>{{ number_format(($booking->car->rates ?? 0) * $booking->total_bookings, 2) }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <table class="summary">

            <tr class="total">
                <th>Total</th>
                <td>{{$total}}</td>
            </tr>
        </table>
    </main>
    <aside>
        <hr />

    </aside>

</body>
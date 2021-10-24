<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
<head>
    <meta http-equiv="Cache-control" content="no-cache">
    <style type="text/css">
        body,
        th,
        td,
        h5 {
            font-size: 12px;
            color: #000;
            font-family: Arial, Helvetica, sans-serif;
            letter-spacing: normal
        }

        .container {
            padding: 20px;
            display: block;
        }

        .invoice-summary {
            margin-bottom: 10px;
        }

        .invoice-info {
            margin-top: 60px;
            float: right;
            font-family: Arial, Helvetica, sans-serif;
        }

        .table {
            margin-top: 20px;
        }

        .table table {
            width: 100%;
            border-collapse: collapse;
            text-align: left;
            vertical-align: start;
        }

        .table thead th {
            font-weight: 700;
            padding: 5px 10px;
        }

        .table thead th:last-child {}

        .table tbody td {
            padding: 5px 10px;
            vertical-align: start;
        }

        .table tbody td p {
            margin: 0;
            vertical-align: start;
        }

        .table tbody td:last-child {}

        .sale-text {
            padding-top: 16px;
            padding-left: 10px;
            width: 60%;
            float: left;
        }

        .sale-summary {
            margin-top: 40px;
            float: right;
        }

        .footer {
            margin-top: 340px;
            float: right;
        }

        .sale-summary tr td {
            padding: 3px 5px;
            font-family: Arial, Helvetica, sans-serif;
        }

        .sale-summary tr.bold {
            font-family: Arial, Helvetica, sans-serif;
        }

        .label {
            color: #000;
            font-family: Arial, Helvetica, sans-serif;
        }

        .logo {
            height: 70px;
            width: 70px;
        }

        th {
            text-align: left;
            padding: 5px 10px;
            font-family: Arial, Helvetica, sans-serif;

        }

        .invoice-header  {
           display: flex;
        }

        .invoice-header p {
            padding-left: 10px;
            width: 50%;
            float: left;
        }
        .img {
            float: right;
        }


    </style>
</head>
<body style="background-image: none;background-color: #fff;">
    <div class="container">
        <div class="invoice-header">


                <img alt='tva-logo' class="img" src='data:image/png;base64,ICAgICAgIDxzdmcgY2xhc3M9InR2YS1kZXNrdG9wIiB2aWV3Qm94PSIwIDAgMjAwIDQxIiBmaWxsPSJub25lIiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPgogICAgICAgICAgICAgICAgICAgIDxwYXRoIGQ9Ik02LjM1MTc5IDMwLjU0MTRWMTMuMzY0M0gwVjkuMTM3MzNINi4zNTE3OVYwLjU2OTY0NEg5Ljc0OTk2VjkuMTM3MzNIMTcuNjE0NVYxMy4zNjQzSDkuNzQ5OTZWMjkuODM5NEM5Ljc0OTk2IDMzLjgxNzYgMTEuNzE4OCAzNS4yNzg0IDE1LjM5NzUgMzUuMjc4NEMxNi44MzA3IDM1LjMyOTYgMTguMjY1MiAzNS4yMjgxIDE5LjY3NjkgMzQuOTc1NlYzOS4zNThDMTguMjcyOCAzOS42Nzc3IDE2LjgzODIgMzkuODQ0NSAxNS4zOTgyIDM5Ljg1NTdDMTAuMTc1MSAzOS44NTU3IDYuMzUxNzkgMzYuODQwNiA2LjM1MTc5IDMwLjU0MTRaIiBmaWxsPSIjMkEyOTIwIi8+CiAgICAgICAgICAgICAgICAgICAgPHBhdGggZD0iTTIyLjAxODMgOS4xMzczM0gyNS41OTI3TDM2LjYyODIgMzQuNTcyMUgzNy43MjY2TDQ4Ljg2NDkgOS4xMzczM0g1My4wOTI1TDM5Ljk5NTQgMzkuMzU4SDM1LjExNTRMMjIuMDE4MyA5LjEzNzMzWiIgZmlsbD0iIzJBMjkyMCIvPgogICAgICAgICAgICAgICAgICAgIDxwYXRoIGQ9Ik01Ni43NzA1IDMwLjA4NjFDNTYuNzcwNSAyNS43NTU1IDU4LjYzNTcgMjEuNTI3MSA2Ny43MDQ0IDIxLjUyNzFIODEuNzY0N1YxOS42NjM1QzgxLjc2NDcgMTQuMDY5MiA3NS44MTcyIDEzLjA2NDQgNzEuMzM0MiAxMy4wNjQ0QzY1Ljg5NDYgMTMuMDY0NCA2Mi4wNzEzIDE0LjQyMTYgNTkuODAxOCAxNS44MzA2VjExLjQwNjZDNjMuNDA3NiA5LjQwMzMxIDY3LjQ2ODIgOC4zNjE1MiA3MS41OTMyIDguMzgxNEM3Ny45MzQ5IDguMzgxNCA4NS4xMzYzIDEwLjU0NjMgODUuMTM2MyAyMC4yMTNWMzkuMzU4SDgxLjc2ODNWMzQuMzY0OUg4MC43MzI0Qzc3LjcwNjkgMzcuNTk3MiA3My43MjgyIDQwLjExNDYgNjguOTQxIDQwLjExNDZDNjAuMDk2NyA0MC4xMTQ2IDU2Ljc3MDUgMzUuMTcyNyA1Ni43NzA1IDMwLjA4NjFaTTgxLjc2MjUgMzAuMDg2MVYyNS40NTJINjcuNzAyM0M2MC44MDE2IDI1LjQ1MiA1OS43MDMyIDI3LjUyNDIgNTkuNzAzMiAzMC4wMzE1QzU5LjcwMzIgMzIuNTM4OCA2Mi44MTE1IDM1LjMyNTEgNjguODEwOCAzNS4zMjUxQzczLjY0MzkgMzUuMzIzIDc4LjI4NzQgMzMuNDQ0NyA4MS43NjI1IDMwLjA4NjFaIiBmaWxsPSIjMkEyOTIwIi8+CiAgICAgICAgICAgICAgICAgICAgPHBhdGggZD0iTTExMC4xMzggMTkuMzc1MUMxMDkuODI2IDE4LjcwNzUgMTA5LjMyNiAxOC4xNDQ0IDEwOC43MDEgMTcuNzUzNkMxMDguMDc2IDE3LjM2MjggMTA3LjM1MSAxNy4xNjA4IDEwNi42MTQgMTcuMTcyQzEwNS43NjkgMTcuMTMyMiAxMDQuOTQzIDE3LjQyOTMgMTA0LjMxOCAxNy45OTgxQzEwMy42OTIgMTguNTY2OCAxMDMuMzE4IDE5LjM2MDcgMTAzLjI3OCAyMC4yMDUxQzEwMy4yNzMgMjAuMzA1OCAxMDMuMjczIDIwLjQwNjUgMTAzLjI3OCAyMC41MDcyQzEwMy4yNzggMjIuNDM5OCAxMDQuNjIgMjMuMDc5OSAxMDYuNDE3IDIzLjk2NjFDMTA3LjY1OCAyNC40OTk3IDEwOC44NTYgMjUuMTI5MiAxMDkuOTk5IDI1Ljg0OUMxMTAuNTk0IDI2LjIwODQgMTExLjA4NCAyNi43MTg1IDExMS40MTkgMjcuMzI3OUMxMTEuNzU0IDI3LjkzNzIgMTExLjkyMyAyOC42MjQyIDExMS45MDcgMjkuMzE5NEMxMTEuODkyIDMwLjAyNDMgMTExLjczOCAzMC43MTkzIDExMS40NTUgMzEuMzY0N0MxMTEuMTcxIDMyLjAxMDIgMTEwLjc2MyAzMi41OTMzIDExMC4yNTMgMzMuMDgwOUMxMDkuNzQ0IDMzLjU2ODYgMTA5LjE0NCAzMy45NTEgMTA4LjQ4NiAzNC4yMDY1QzEwNy44MjkgMzQuNDYyIDEwNy4xMjggMzQuNTg1NSAxMDYuNDIzIDM0LjU2OTlMMTA2LjMxOSAzNC41NjYzQzEwNS41MjUgMzQuNTk0OCAxMDQuNzM2IDM0LjQzOTggMTA0LjAxMiAzNC4xMTMxQzEwMy4yODggMzMuNzg2NSAxMDIuNjUgMzMuMjk3MiAxMDIuMTQ3IDMyLjY4MzNDMTAxLjYzNiAzMi4xMDg1IDEwMS4yNDMgMzEuNDM5NSAxMDAuOTg5IDMwLjcxNEwxMDIuMDExIDMwLjIzNDNDMTAyLjI0IDMwLjg1ODMgMTAyLjU2OCAzMS40NDEyIDEwMi45ODMgMzEuOTYwNUMxMDMuNDA1IDMyLjQ2MjQgMTAzLjkzNiAzMi44NjA5IDEwNC41MzUgMzMuMTI1NEMxMDUuMTM1IDMzLjM4OTggMTA1Ljc4OCAzMy41MTMyIDEwNi40NDIgMzMuNDg2QzEwNy41NDYgMzMuNTEyMyAxMDguNjE0IDMzLjA5OTQgMTA5LjQxMiAzMi4zMzgxQzExMC4yMTEgMzEuNTc2OCAxMTAuNjc1IDMwLjUyOTUgMTEwLjcwMSAyOS40MjY2QzExMC43MDEgMjkuNDE4IDExMC43MDEgMjkuNDA4NiAxMTAuNzAxIDI5LjRDMTEwLjcwOCAyOC43OTk4IDExMC41NDMgMjguMjEwMiAxMTAuMjI0IDI3LjcwMTZDMTA5LjkwNSAyNy4xOTMxIDEwOS40NDYgMjYuNzg3MiAxMDguOTAzIDI2LjUzMjNDMTA4LjM5OSAyNi4yMzY3IDEwNy4zNTIgMjUuNjk1MSAxMDUuODc1IDI0Ljk2OTRDMTA0LjEwMiAyNC4xMDYzIDEwMy4yMTMgMjMuNjI4IDEwMi41ODggMjIuNjA2QzEwMi4yMTcgMjEuOTg5NSAxMDIuMDIxIDIxLjI4MzEgMTAyLjAyMiAyMC41NjMzQzEwMi4wMDggMTkuOTg5NyAxMDIuMTA4IDE5LjQxODkgMTAyLjMxNCAxOC44ODM3QzEwMi41MjEgMTguMzQ4NCAxMDIuODMxIDE3Ljg1OTEgMTAzLjIyNyAxNy40NDM3QzEwMy42MjMgMTcuMDI4NCAxMDQuMDk3IDE2LjY5NTEgMTA0LjYyMiAxNi40NjI4QzEwNS4xNDcgMTYuMjMwNiAxMDUuNzEyIDE2LjEwNCAxMDYuMjg2IDE2LjA5MDNDMTA2LjM5OSAxNi4wOTAzIDEwNi41MTIgMTYuMDkwMyAxMDYuNjI2IDE2LjA5NTNDMTA3LjUxOCAxNi4wNzc1IDEwOC4zOTcgMTYuMzA3MyAxMDkuMTY2IDE2Ljc1OTJDMTA5LjkzNiAxNy4yMTExIDExMC41NjQgMTcuODY3NCAxMTAuOTgzIDE4LjY1NTFMMTEwLjEzOCAxOS4zNzUxWiIgZmlsbD0iIzJBMjkyMCIvPgogICAgICAgICAgICAgICAgICAgIDxwYXRoIGQ9Ik0xMjEuODU2IDE3LjQwNThWMzQuMzE2OEgxMjAuNjI2VjE3LjQ1NDdIMTE2LjAzNFYxNi4zODQ1SDEyNi41MVYxNy40NTQ3TDEyMS44NTYgMTcuNDA1OFoiIGZpbGw9IiMyQTI5MjAiLz4KICAgICAgICAgICAgICAgICAgICA8cGF0aCBkPSJNMTMzLjg0NiAxNi4zMzQ4VjI3LjU0NzJDMTMzLjcxMSAyOC44ODE0IDEzMy45NzIgMzAuMjI2IDEzNC41OTcgMzEuNDEyNEMxMzUuMDg1IDMyLjA1NTEgMTM1LjcxNSAzMi41NzYxIDEzNi40MzggMzIuOTM0OEMxMzcuMTYxIDMzLjI5MzUgMTM3Ljk1NyAzMy40ODAyIDEzOC43NjQgMzMuNDgwMkMxMzkuNTcxIDMzLjQ4MDIgMTQwLjM2NyAzMy4yOTM1IDE0MS4wODkgMzIuOTM0OEMxNDEuODEyIDMyLjU3NjEgMTQyLjQ0MiAzMi4wNTUxIDE0Mi45MyAzMS40MTI0QzE0My41NjIgMzAuMjI4MiAxNDMuODI0IDI4Ljg4MTcgMTQzLjY4MSAyNy41NDcyVjE2LjMzNDhIMTQ0LjkxNFYyNy41NDcyQzE0NS4wOTEgMjkuMTQ4NCAxNDQuNzMyIDMwLjc2MjkgMTQzLjg5MyAzMi4xMzgyQzE0My4yODEgMzIuODk2IDE0Mi41MDggMzMuNTA3NCAxNDEuNjI5IDMzLjkyNzRDMTQwLjc1MSAzNC4zNDc0IDEzOS43ODkgMzQuNTY1NCAxMzguODE1IDM0LjU2NTRDMTM3Ljg0MSAzNC41NjU0IDEzNi44OCAzNC4zNDc0IDEzNi4wMDEgMzMuOTI3NEMxMzUuMTIzIDMzLjUwNzQgMTM0LjM0OSAzMi44OTYgMTMzLjczOCAzMi4xMzgyQzEzMi45MDYgMzAuNzYwMiAxMzIuNTQ3IDI5LjE0OCAxMzIuNzE2IDI3LjU0NzJWMTYuMzM0OEgxMzMuODQ2WiIgZmlsbD0iIzJBMjkyMCIvPgogICAgICAgICAgICAgICAgICAgIDxwYXRoIGQ9Ik0xNTMuMDYyIDM0LjMxNjhWMTYuMzM1NkgxNTYuNjA2QzE1Ny44MTcgMTYuMjgzMSAxNTkuMDI2IDE2LjQ3MzkgMTYwLjE2MSAxNi44OTY4QzE2MS4yOTYgMTcuMzE5NyAxNjIuMzM1IDE3Ljk2NiAxNjMuMjE2IDE4Ljc5NzVDMTY0Ljg3NyAyMC41MzkyIDE2NS44MDMgMjIuODUyOSAxNjUuODAzIDI1LjI1ODlDMTY1LjgwMyAyNy42NjQ5IDE2NC44NzcgMjkuOTc4NiAxNjMuMjE2IDMxLjcyMDNDMTYyLjMzNyAzMi41NTM1IDE2MS4yOTggMzMuMjAwOSAxNjAuMTYyIDMzLjYyMzlDMTU5LjAyNiAzNC4wNDY5IDE1Ny44MTcgMzQuMjM2OCAxNTYuNjA2IDM0LjE4MjNMMTUzLjA2MiAzNC4zMTY4Wk0xNTQuMjkyIDMzLjIzMzZIMTU2LjYzMUMxNTcuNjY3IDMzLjIzMzYgMTU4LjY5MyAzMy4wMjk1IDE1OS42NSAzMi42MzNDMTYwLjYwOCAzMi4yMzY1IDE2MS40NzggMzEuNjU1NCAxNjIuMjEgMzAuOTIyOEMxNjIuOTQzIDMwLjE5MDIgMTYzLjUyNCAyOS4zMjA1IDE2My45MjEgMjguMzYzM0MxNjQuMzE3IDI3LjQwNjEgMTY0LjUyMSAyNi4zODAyIDE2NC41MjEgMjUuMzQ0MUMxNjQuNTIxIDI0LjMwODEgMTY0LjMxNyAyMy4yODIyIDE2My45MjEgMjIuMzI1QzE2My41MjQgMjEuMzY3OCAxNjIuOTQzIDIwLjQ5ODEgMTYyLjIxIDE5Ljc2NTVDMTYxLjQ3OCAxOS4wMzI5IDE2MC42MDggMTguNDUxNyAxNTkuNjUgMTguMDU1M0MxNTguNjkzIDE3LjY1ODggMTU3LjY2NyAxNy40NTQ3IDE1Ni42MzEgMTcuNDU0N0gxNTQuMjkyVjMzLjIzMzZaIiBmaWxsPSIjMkEyOTIwIi8+CiAgICAgICAgICAgICAgICAgICAgPHBhdGggZD0iTTE3NC4yMDkgMTYuMzM0OFYzNC4zMTZIMTcyLjk3OFYxNi4zMzQ4SDE3NC4yMDlaIiBmaWxsPSIjMkEyOTIwIi8+CiAgICAgICAgICAgICAgICAgICAgPHBhdGggZD0iTTE5OS45OTcgMjUuMzQ0MUMyMDAuMDA3IDI3LjE4NDYgMTk5LjQ3MSAyOC45ODY3IDE5OC40NTYgMzAuNTIyNEMxOTcuNDQxIDMyLjA1ODEgMTk1Ljk5NCAzMy4yNTg0IDE5NC4yOTcgMzMuOTcxNkMxOTIuNiAzNC42ODQ4IDE5MC43MyAzNC44Nzg4IDE4OC45MjMgMzQuNTI5QzE4Ny4xMTYgMzQuMTc5MyAxODUuNDUzIDMzLjMwMTUgMTg0LjE0NCAzMi4wMDY3QzE4Mi44MzYgMzAuNzExOSAxODEuOTQxIDI5LjA1ODMgMTgxLjU3MyAyNy4yNTVDMTgxLjIwNSAyNS40NTE3IDE4MS4zOCAyMy41Nzk3IDE4Mi4wNzYgMjEuODc1OEMxODIuNzcyIDIwLjE3MTkgMTgzLjk1NyAxOC43MTI2IDE4NS40ODMgMTcuNjgyNUMxODcuMDA4IDE2LjY1MjUgMTg4LjgwNSAxNi4wOTc4IDE5MC42NDYgMTYuMDg4OUgxOTAuNjk1QzE5MS44OTggMTYuMDY5MyAxOTMuMDkyIDE2LjI4NjkgMTk0LjIxMSAxNi43MjlDMTk1LjMyOSAxNy4xNzExIDE5Ni4zNSAxNy44MjkyIDE5Ny4yMTQgMTguNjY1N0MxOTguMDc4IDE5LjUwMjIgMTk4Ljc2OSAyMC41MDA3IDE5OS4yNDcgMjEuNjA0MUMxOTkuNzI1IDIyLjcwNzYgMTk5Ljk4MSAyMy44OTQzIDIwMCAyNS4wOTY3QzE5OS45OTggMjUuMTc4NyAxOTkuOTk5IDI1LjI2MTQgMTk5Ljk5NyAyNS4zNDQxWk0xOTguNzY2IDI1LjM0NDFDMTk4Ljc1MiAyMy43NTMgMTk4LjI2NiAyMi4yMDE4IDE5Ny4zNzIgMjAuODg1OUMxOTYuNDc3IDE5LjU3IDE5NS4yMTMgMTguNTQ4MyAxOTMuNzM4IDE3Ljk0OTVDMTkyLjI2NCAxNy4zNTA3IDE5MC42NDUgMTcuMjAxNiAxODkuMDg2IDE3LjUyMDlDMTg3LjUyNyAxNy44NDAzIDE4Ni4wOTcgMTguNjEzOCAxODQuOTc3IDE5Ljc0NDFDMTgzLjg1NyAyMC44NzQ0IDE4My4wOTcgMjIuMzEwOSAxODIuNzkyIDIzLjg3MjZDMTgyLjQ4NiAyNS40MzQzIDE4Mi42NSAyNy4wNTEzIDE4My4yNjMgMjguNTJDMTgzLjg3NSAyOS45ODg3IDE4NC45MDggMzEuMjQzNCAxODYuMjMzIDMyLjEyNTlDMTg3LjU1NyAzMy4wMDg1IDE4OS4xMTMgMzMuNDc5NSAxOTAuNzA0IDMzLjQ3OTZDMTkxLjc0OCAzMy40OTQ0IDE5Mi43ODUgMzMuMzAzNCAxOTMuNzU2IDMyLjkxNzRDMTk0LjcyNiAzMi41MzE0IDE5NS42MTEgMzEuOTU4IDE5Ni4zNiAzMS4yM0MxOTcuMTA5IDMwLjUwMTkgMTk3LjcwNyAyOS42MzM1IDE5OC4xMiAyOC42NzQzQzE5OC41MzMgMjcuNzE1MSAxOTguNzUzIDI2LjY4NCAxOTguNzY4IDI1LjYzOTdDMTk4Ljc2OSAyNS41NDM0IDE5OC43NjggMjUuNDQ0MSAxOTguNzY2IDI1LjM0NDFaIiBmaWxsPSIjMkEyOTIwIi8+CiAgICAgICAgICAgICAgICAgICAgPHBhdGggZD0iTTcxLjgyNjMgNi42NzE3NEM3My42Njg5IDYuNjcxNzQgNzUuMTYyNiA1LjE3ODIyIDc1LjE2MjYgMy4zMzU4N0M3NS4xNjI2IDEuNDkzNTIgNzMuNjY4OSAwIDcxLjgyNjMgMEM2OS45ODM3IDAgNjguNDkgMS40OTM1MiA2OC40OSAzLjMzNTg3QzY4LjQ5IDUuMTc4MjIgNjkuOTgzNyA2LjY3MTc0IDcxLjgyNjMgNi42NzE3NFoiIGZpbGw9IiMyQTI5MjAiLz4KICAgICAgICAgICAgPC9zdmc+' style='max-width: 100%;float: right;'/>



            {{-- Tva Invoice Slip Address --}}
            <div class="address-slip">
                <p>{{ core()->getConfigData('sales.orderSettings.invoice_slip_design.address') }}</p>
            </div>
        </div>
        <div class="invoice-summary">
            <div class="invoice-info">
                <div class="row">
                    {{-- <span class="label">{{ __('admin::app.sales.invoices.invoice-id') }}: </span> --}}
                    <span class="label">Rechnungsnummer:</span>
                    <span class="value">#{{ $invoice->id }}</span>
                </div>
                <div class="row">
                    <span class="label">Bestellnummer:</span>
                    <span class="value">{{ $invoice->order->increment_id }}</span>
                </div>
                <div class="row">
                    <span class="label">{{ __('admin::app.sales.invoices.order-date') }}:</span>
                    <span class="value">{{ $invoice->created_at->format('d.m.Y') }}</span>
                </div>
            </div>
            {{-- @if ($invoice->order->shipping_address)
            <div class="table address">
                <table>
                     <thead>
                            <tr>
                                <th>{{ __('admin::app.sales.invoices.ship-to') }}</th>
                    </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <p>{{ $invoice->order->shipping_address->name }}</p>
                                <p>{{ $invoice->order->shipping_address->address1 }}</p>
                                <p>{{ $invoice->order->shipping_address->city }}</p>
                                <p>{{ $invoice->order->shipping_address->state }}</p>
                                <p>{{ core()->country_name($invoice->order->shipping_address->country) }} {{ $invoice->order->shipping_address->postcode }}</p>
                                {{ __('shop::app.checkout.onepage.contact') }} : {{ $invoice->order->shipping_address->phone }}
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            @endif --}}
            {{-- Invoice Add --}}
            <div class="table address">
                <table>
                    {{-- <thead>
                            <tr>
                                <th style="width: 50%">{{ __('admin::app.sales.invoices.bill-to') }}:</th>
                    </tr>
                    </thead> --}}
                    <tbody>
                        <tr>
                            <td>
                                <p>{{ $invoice->order->billing_address->name }}</p>
                                <p>{{ $invoice->order->billing_address->address1 }}</p>
                                <p>{{ $invoice->order->billing_address->city }}</p>
                                <p>{{ $invoice->order->billing_address->state }}</p>
                                <p>{{ core()->country_name($invoice->order->billing_address->country) }} {{ $invoice->order->billing_address->postcode }}</p>
                                {{ __('shop::app.checkout.onepage.contact') }} : {{ $invoice->order->billing_address->phone }}
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>


            <div class="table payment-shipment">
                <table>
                    <thead>
                        <tr>
                            <th style="width: 50%">{{ __('admin::app.sales.orders.payment-method') }}</th>

                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                {{ core()->getConfigData('sales.paymentmethods.' . $invoice->order->payment->method . '.title') }}
                            </td>

                        </tr>
                    </tbody>
                </table>
            </div>

            <div class="table payment-shipment">
                <table>
                    <thead>
                        <tr>
                            @if ($invoice->order->shipping_address)
                            <th style="width: 50%">{{ __('admin::app.sales.orders.shipping-method') }}</th>
                            @endif
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            @if ($invoice->order->shipping_address)
                            <td>
                                {{ $invoice->order->shipping_title }}
                            </td>
                            @endif
                        </tr>
                    </tbody>
                </table>
            </div>

            <div class="header">
                {{-- Tva Invoice Slip Address --}}
                <div class="address">
                    <p style="padding-left:10px; padding-top:10px; font-weight:bold;">RECHNUNG:</p>
                </div>
            </div>
            <div class="table items">
                <table>
                    <thead>
                        <tr>
                            <th>{{ __('admin::app.sales.orders.SKU') }}</th>
                            <th>{{ __('admin::app.sales.orders.product-name') }}</th>
                            {{-- <th>{{ __('admin::app.sales.orders.price') }}</th> --}}
                            <th>{{ __('admin::app.sales.orders.qty') }}</th>
                            <th>{{ __('admin::app.sales.orders.subtotal') }}</th>
                            <th>{{ __('admin::app.sales.orders.tax-amount') }}</th>
                            <th>Artikelpreis</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($invoice->items as $item)
                        <tr>
                            <td>{{ $item->getTypeInstance()->getOrderedItem($item)->sku }}</td>
                            <td>
                                {{ $item->name }}
                                @if (isset($item->additional['attributes']))
                                <div class="item-options">
                                    @foreach ($item->additional['attributes'] as $attribute)
                                    <b>{{ $attribute['attribute_name'] }} : </b>{{ $attribute['option_label'] }}</br>
                                    @endforeach
                                </div>
                                @endif
                            </td>
                            {{-- <td>{{ core()->formatBasePrice($item->base_price) }}</td> --}}
                            <td>{{ $item->qty }}</td>
                            <td>{{ core()->formatBasePrice($item->base_total) }}</td>
                            <td>{{ core()->formatBasePrice($item->base_tax_amount) }}</td>
                            <td>{{ core()->formatBasePrice($item->base_total) }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            {{-- Invoice Text --}}
            <div class="sale-text">
                <p>Mit der Bitte um Ausgleich des Rechnungsbetrages innerhalb von 7 Tagen ab Zugang
                    dieser Rechnung auf das unten genannte Konto mit Angabe der Rechnungsnummer.<br><br>
                    Danke,<br>
                    dein tvà studio
                </p>
            </div>
            {{-- Invoice overview --}}
            <table class="sale-summary">
                <tr>
                    <td>{{ __('admin::app.sales.orders.subtotal') }}</td>
                    <td>-</td>
                    <td>{{ core()->formatBasePrice($invoice->base_sub_total) }}</td>
                </tr>
                <tr>
                    <td>Netto</td>
                    <td>-</td>
                    <td>{{ core()->formatBasePrice($invoice->base_tax_amount) }}</td>
                </tr>
                <tr>
                    <td>Steuer 19%</td>
                    <td>-</td>
                    <td>{{ core()->formatBasePrice($invoice->base_grand_total) }}</td>
                </tr>
                @if ($invoice->base_discount_amount > 0)
                <tr>
                    <td>{{ __('admin::app.sales.orders.discount') }}</td>
                    <td>-</td>
                    <td>{{ core()->formatBasePrice($invoice->base_discount_amount) }}</td>
                </tr>
                @endif
                <tr>
                    <td>{{ __('admin::app.sales.orders.shipping-handling') }}</td>
                    <td>-</td>
                    <td>{{ core()->formatBasePrice($invoice->base_shipping_amount) }}</td>
                </tr>
                <tr class="bold">
                    <td>Gesamtsumme</td>
                    <td>-</td>
                    <td>{{ core()->formatBasePrice($invoice->base_sub_total + $invoice->base_shipping_amount) }}</td>
                </tr>
            </table>
        </div>
        {{-- Invoice Tax and Bank Info --}}
        <table class="footer">
            <tr>
                <td>Bankverbindung / bank / banque / banco</td>
                <td>    </td>
                <td>tva studio</td>
            </tr>
            <tr>
                <td>IBAN: DE55 1001 7997 3397 2553 29</td>
                <td>    </td>
                <td>Diepenbrockstraße11-13</td>
            </tr>
            <tr>
                <td>BIC: BYLADEM1001</td>
                <td>    </td>
                <td>48145 Münster</td>
            </tr>
            <tr>
                <td>Steuernummer / Tax / Identification Number:</td>
                <td>    </td>
                <td></td>
            </tr>
            <tr>
                <td>USH-ID: DE339694301</td>
                <td>    </td>
                <td>www.tva-studio.de</td>
            </tr>
        </table>
    </div>
</body>
</html>

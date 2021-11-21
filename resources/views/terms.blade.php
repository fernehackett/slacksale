<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <style>
        /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */
        html {
            line-height: 1.15;
            -webkit-text-size-adjust: 100%
        }

        body {
            margin: 0
        }

        a {
            background-color: transparent
        }

        [hidden] {
            display: none
        }

        html {
            font-family: system-ui, -apple-system, BlinkMacSystemFont, Segoe UI, Roboto, Helvetica Neue, Arial, Noto Sans, sans-serif, Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol, Noto Color Emoji;
            line-height: 1.5
        }

        *, :after, :before {
            box-sizing: border-box;
            border: 0 solid #e2e8f0
        }

        a {
            color: inherit;
            text-decoration: inherit
        }

        svg, video {
            display: block;
            vertical-align: middle
        }

        video {
            max-width: 100%;
            height: auto
        }

        .bg-white {
            --bg-opacity: 1;
            background-color: #fff;
            background-color: rgba(255, 255, 255, var(--bg-opacity))
        }

        .bg-gray-100 {
            --bg-opacity: 1;
            background-color: #f7fafc;
            background-color: rgba(247, 250, 252, var(--bg-opacity))
        }

        .border-gray-200 {
            --border-opacity: 1;
            border-color: #edf2f7;
            border-color: rgba(237, 242, 247, var(--border-opacity))
        }

        .border-t {
            border-top-width: 1px
        }

        .flex {
            display: flex
        }

        .grid {
            display: grid
        }

        .hidden {
            display: none
        }

        .items-center {
            align-items: center
        }

        .justify-center {
            justify-content: center
        }

        .font-semibold {
            font-weight: 600
        }

        .h-5 {
            height: 1.25rem
        }

        .h-8 {
            height: 2rem
        }

        .h-16 {
            height: 4rem
        }

        .text-sm {
            font-size: .875rem
        }

        .text-lg {
            font-size: 1.125rem
        }

        .leading-7 {
            line-height: 1.75rem
        }

        .mx-auto {
            margin-left: auto;
            margin-right: auto
        }

        .ml-1 {
            margin-left: .25rem
        }

        .mt-2 {
            margin-top: .5rem
        }

        .mr-2 {
            margin-right: .5rem
        }

        .ml-2 {
            margin-left: .5rem
        }

        .mt-4 {
            margin-top: 1rem
        }

        .ml-4 {
            margin-left: 1rem
        }

        .mt-8 {
            margin-top: 2rem
        }

        .ml-12 {
            margin-left: 3rem
        }

        .-mt-px {
            margin-top: -1px
        }

        .max-w-6xl {
            max-width: 72rem
        }

        .min-h-screen {
            min-height: 100vh
        }

        .overflow-hidden {
            overflow: hidden
        }

        .p-6 {
            padding: 1.5rem
        }

        .py-4 {
            padding-top: 1rem;
            padding-bottom: 1rem
        }

        .px-6 {
            padding-left: 1.5rem;
            padding-right: 1.5rem
        }

        .pt-8 {
            padding-top: 2rem
        }

        .fixed {
            position: fixed
        }

        .relative {
            position: relative
        }

        .top-0 {
            top: 0
        }

        .right-0 {
            right: 0
        }

        .shadow {
            box-shadow: 0 1px 3px 0 rgba(0, 0, 0, .1), 0 1px 2px 0 rgba(0, 0, 0, .06)
        }

        .text-center {
            text-align: center
        }

        .text-gray-200 {
            --text-opacity: 1;
            color: #edf2f7;
            color: rgba(237, 242, 247, var(--text-opacity))
        }

        .text-gray-300 {
            --text-opacity: 1;
            color: #e2e8f0;
            color: rgba(226, 232, 240, var(--text-opacity))
        }

        .text-gray-400 {
            --text-opacity: 1;
            color: #cbd5e0;
            color: rgba(203, 213, 224, var(--text-opacity))
        }

        .text-gray-500 {
            --text-opacity: 1;
            color: #a0aec0;
            color: rgba(160, 174, 192, var(--text-opacity))
        }

        .text-gray-600 {
            --text-opacity: 1;
            color: #718096;
            color: rgba(113, 128, 150, var(--text-opacity))
        }

        .text-gray-700 {
            --text-opacity: 1;
            color: #4a5568;
            color: rgba(74, 85, 104, var(--text-opacity))
        }

        .text-gray-900 {
            --text-opacity: 1;
            color: #1a202c;
            color: rgba(26, 32, 44, var(--text-opacity))
        }

        .underline {
            text-decoration: underline
        }

        .antialiased {
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale
        }

        .w-5 {
            width: 1.25rem
        }

        .w-8 {
            width: 2rem
        }

        .w-auto {
            width: auto
        }

        .grid-cols-1 {
            grid-template-columns:repeat(1, minmax(0, 1fr))
        }

        @media (min-width: 640px) {
            .sm\:rounded-lg {
                border-radius: .5rem
            }

            .sm\:block {
                display: block
            }

            .sm\:items-center {
                align-items: center
            }

            .sm\:justify-start {
                justify-content: flex-start
            }

            .sm\:justify-between {
                justify-content: space-between
            }

            .sm\:h-20 {
                height: 5rem
            }

            .sm\:ml-0 {
                margin-left: 0
            }

            .sm\:px-6 {
                padding-left: 1.5rem;
                padding-right: 1.5rem
            }

            .sm\:pt-0 {
                padding-top: 0
            }

            .sm\:text-left {
                text-align: left
            }

            .sm\:text-right {
                text-align: right
            }
        }

        @media (min-width: 768px) {
            .md\:border-t-0 {
                border-top-width: 0
            }

            .md\:border-l {
                border-left-width: 1px
            }

            .md\:grid-cols-2 {
                grid-template-columns:repeat(2, minmax(0, 1fr))
            }
        }

        @media (min-width: 1024px) {
            .lg\:px-8 {
                padding-left: 2rem;
                padding-right: 2rem
            }
        }

        @media (prefers-color-scheme: dark) {
            .dark\:bg-gray-800 {
                --bg-opacity: 1;
                background-color: #2d3748;
                background-color: rgba(45, 55, 72, var(--bg-opacity))
            }

            .dark\:bg-gray-900 {
                --bg-opacity: 1;
                background-color: #1a202c;
                background-color: rgba(26, 32, 44, var(--bg-opacity))
            }

            .dark\:border-gray-700 {
                --border-opacity: 1;
                border-color: #4a5568;
                border-color: rgba(74, 85, 104, var(--border-opacity))
            }

            .dark\:text-white {
                --text-opacity: 1;
                color: #fff;
                color: rgba(255, 255, 255, var(--text-opacity))
            }

            .dark\:text-gray-400 {
                --text-opacity: 1;
                color: #cbd5e0;
                color: rgba(203, 213, 224, var(--text-opacity))
            }

            .dark\:text-gray-500 {
                --tw-text-opacity: 1;
                color: #6b7280;
                color: rgba(107, 114, 128, var(--tw-text-opacity))
            }
        }
    </style>

    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }
    </style>
</head>
<body class="antialiased">
<div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
    <div class="max-w-6xl mx-auto sm:px-6 lg:px-8 bg-white">
        <h1 class="text-center">Terms of Service</h1>
        <div class="content">
            <p>By signing up for the {{ config("app.name") }} service ("Service") or any of the services of {{ config("app.name") }} LLC ("{{ config("app.name") }}") you are agreeing to be bound by the following terms and conditions ("Terms of Service"). Any new features or tools which are added to the current Service shall be also subject to the Terms of Service. You can review the most current version of the Terms of Service at any time here.
                {{ config("app.name") }} reserves the right to update and change the Terms of Service by posting updates and changes to the
                {{ config("app.name") }} website. You are advised to check the Terms of Service from time to time for any updates or changes that may impact you.</p><p>You must read, agree with and accept all of the terms and conditions contained in this User Agreement and the Privacy Policy before you may become a member of
            {{ config("app.name") }}.</p><h2>Account Terms</h2><ul><li>You must be 18 years or older to use this Service.</li><li>You must provide your full legal name, current address, a valid email address, and any other information needed in order to complete the signup process.</li><li>You are responsible for keeping your password secure.
            {{ config("app.name") }} cannot and will not be liable for any loss or damage from your failure to maintain the security of your account and password.</li><li>You may not use the
            {{ config("app.name") }} service for any illegal or unauthorized purpose nor may you, in the use of the Service, violate any laws in your jurisdiction (including but not limited to copyright laws) as well as the laws of the United States of America.</li><li>You are responsible for all activity and content (data, graphics, photos, links) that is uploaded under your
            {{ config("app.name") }} account.</li><li>You must not transmit any worms or viruses or any code of a destructive nature.</li><li>A breach or violation of any of the Account Terms as determined in the sole discretion of
            {{ config("app.name") }} will result in an immediate termination of your services.</li></ul><h2>General Conditions</h2><ul><li>We reserve the right to modify or terminate the Service for any reason, without notice at any time.</li><li>We reserve the right to refuse service to anyone for any reason at any time.</li><li>Your use of the Service is at your sole risk. The Service is provided on an "as is" and "as available" basis without any warranty or condition, express, implied or statutory.</li><li>
            {{ config("app.name") }} does not warrant that the service will be uninterrupted, timely, secure, or error-free.</li><li>
            {{ config("app.name") }} does not warrant that the results that may be obtained from the use of the service will be accurate or reliable.</li><li>You understand that your Content (not including credit card information), may be transferred unencrypted and involve (a) transmissions over various networks; and (b) changes to conform and adapt to technical requirements of connecting networks or devices. Credit Card information is always encrypted during transfer over networks.</li><li>We may, but have no obligation to, remove Content and Accounts containing Content that we determine in our sole discretion are unlawful, offensive, threatening, libelous, defamatory, pornographic, obscene or otherwise objectionable or violates any party’s intellectual property or these Terms of Service.</li><li>
            {{ config("app.name") }} does not warrant that the quality of any products, services, information, or other material purchased or obtained by you through the Service will meet your expectations, or that any errors in the Service will be corrected.</li><li>You expressly understand and agree that
            {{ config("app.name") }} shall not be liable for any direct, indirect, incidental, special, consequential or exemplary damages, including but not limited to, damages for loss of profits, goodwill, use, data or other intangible losses resulting from the use of or inability to use the service.</li><li>In no event shall
            {{ config("app.name") }} or our suppliers be liable for lost profits or any special, incidental or consequential damages arising out of or in connection with our site, our services or this agreement (however arising including negligence).</li><li>Technical support is only provided via email.</li><li>You agree not to reproduce, duplicate, copy, sell, resell or exploit any portion of the Service, use of the Service, or access to the Service without the express written permission by
            {{ config("app.name") }}.</li><li>Verbal or written abuse of any kind (including threats of abuse or retribution) of any
            {{ config("app.name") }} customer, {{ config("app.name") }} employee, member, or officer will result in immediate account termination.</li><li>We do not claim any intellectual property rights over the material you provide to the
            {{ config("app.name") }} service. All material you submit remains yours.</li><li>You agree that {{ config("app.name") }} can, at any time, review all the content submitted by you to its Service.</li><li>The failure of
            {{ config("app.name") }} to exercise or enforce any right or provision of the Terms of Service shall not constitute a waiver of such right or provision. The Terms of Service constitutes the entire agreement between you and
            {{ config("app.name") }} and govern your use of the Service, superseding any prior agreements between you and
            {{ config("app.name") }} (including, but not limited to, any prior versions of the Terms of Service).</li><li>
            {{ config("app.name") }} does not pre-screen Content and it is in their sole discretion to refuse or remove any Content that is available via the Service.</li></ul><h2>Cancellation and Termination</h2><ul><li>You may cancel your account at anytime by emailing info@highviewapps.com.</li><li>Once your account is cancelled all of your Content may be deleted from the Service.</li><li>We reserve the right to modify or terminate the
            {{ config("app.name") }} service for any reason, without notice at any time.</li><li>Fraud: Without limiting any other remedies,
            {{ config("app.name") }} may suspend or terminate your account if we suspect that you (by conviction, settlement, insurance or escrow investigation, or otherwise) have engaged in fraudulent activity in connection with the Site.</li></ul><h2>Modifications to the Service and Prices</h2><ul><li>Prices for using
            {{ config("app.name") }} are subject to change upon 14 days notice from {{ config("app.name") }}. Such notice may be provided at any time by posting the changes to the
            {{ config("app.name") }} Site or the main page of a {{ config("app.name") }} Service.</li><li>{{ config("app.name") }} reserves the right at any time to time to modify or discontinue, the Service (or any part thereof) with or without notice.</li><li>
            {{ config("app.name") }} shall not be liable to you or to any third party for any modification, price change, suspension or discontinuance of the Service.</li></ul><h2>Indemnity</h2><p>You agree to defend, indemnify and hold harmless
            {{ config("app.name") }} and its affiliates and their respective officers, directors, agents, consultants and employees from any claims, damages, liabilities, costs, and expenses (as incurred, including attorney's fees) arising from (a) Your use of the Service or the Site; (b) the use by any third party of the Site; and (c) Your failure to comply with these Terms.</p><h2>Limitation of Liability</h2><p>Except to the extent prohibited by applicable law, in no event shall
            {{ config("app.name") }} or Third-Party Vendor, or their affiliates, subsidiaries, or third party licensors, be liable for any damages whatsoever (including without limitation, consequential, indirect, special, punitive, or incidental damages, or damages for loss of business profits, business interruption, loss or corruption of data, or other pecuniary loss) arising out of the use or inability to use the Service, even if
            {{ config("app.name") }} has been advised of the possibility of such damages. Except to the extent prohibited by applicable law, in no event shall the liability of
            {{ config("app.name") }}, its affiliates, subsidiaries, and its third party licensors, if any, for damages under these Terms or arising from use of the Service exceed the amount paid by You to
            {{ config("app.name") }} for the Service in the six (6) months immediately preceding the claim.</p><h2>General</h2><p>These Terms represent the complete agreement concerning the Service between You and
            {{ config("app.name") }} and supersede all prior agreements and representations related to the subject matter hereof. These Terms shall be deemed agreed in and governed by the laws of the State of New Jersey, excluding choice of law principles. All proceedings shall be conducted in English. You agree that venue for all proceedings shall be Fair Lawn, New Jersey, provided that venue shall also be proper in any court of competent jurisdiction where
            {{ config("app.name") }} seeks (a) injunctive relief against You to enforce the Terms; and/or (b) to join You in a suit brought by a third party related to the Service or the Site. The United Nations Convention for the International Sale of Goods shall not apply. Section headings are provided for convenience only and have no substantive effect on construction. Except for Your obligation to pay
            {{ config("app.name") }}, neither party shall be liable for any failure to perform due to causes beyond its reasonable control. Notice shall be deemed effective when received by the designated fax, email, or postal address. If any provision is held to be unenforceable, the Terms shall be construed without such provision. The failure by a party to exercise any right hereunder shall not operate as a waiver of such party's right to exercise such right or any other right in the future.</p>
        </div>
    </div>
</div>
</body>
</html>

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
        <h1 class="text-center">Privacy Policy</h1>
        <div class="content">
        <p>This website (the “Site”) is operated by {{ env("APP_NAME") }} (“{{ env("APP_NAME") }}”, “we”, “us” and/or “our”) and has
            been created to provide our Site visitors (“you”, “your”) with information about our company and our e-mail
            collection tools. This Privacy Policy (this “Policy”) sets forth {{ env("APP_NAME") }}’s policy with respect to
            information, including personally identifiable data (such personally identifiable data “Personal
            Information”), that is collected from you through the Site or through our other service offerings
            (collectively, including the Site, the “Services”). Certain Services may be made available to you on
            websites owned by our end customers (“End Customers”), and the information collected via these embedded
            widgets (“Tools”) is directed to {{ env("APP_NAME") }} and governed by this Policy.</p>
        <p>The Services and our business may change from time to time. As a result, at times it may be necessary for
            {{ env("APP_NAME") }} to make changes to this Policy. {{ env("APP_NAME") }} reserves the right to update this
            Policy at any time and from time to time without prior notice. Please review this Policy periodically, and
            especially before you provide any Personal Information. This Policy was last updated on the date indicated
            above. Your continued use of the Services after any changes or revisions to this Policy shall indicate your
            agreement with the terms of such revised Policy.</p>
        <p><b>1. Information Collected</b><br> When you interact with us through the Site or other Services, we may collect
            Personal Information and other information from you, as further described below:</p>
        <p>Personal Information That You Provide:<br> We collect Personal Information from you when you voluntarily
            provide such information, such as when you contact us with inquiries, subscribe to our or a {{ env("APP_NAME") }} End
            Customer’s e-mail newsletter, register for access to the Services or use certain Services. For instance,
            {{ env("APP_NAME") }} may collect the following information about you: name, address, zip code, telephone number and
            e-mail address. The information collected may vary. For example, our End Customers may customize the data
            that is requested via the Tools and may collect other information, such as your favourite color or
            birthdate. Wherever {{ env("APP_NAME") }} collects Personal Information we make an effort to provide a link
            to this Policy.</p>
        <p>By voluntarily providing us with Personal Information, you are consenting to our use of it in accordance with
            this Policy. If you provide Personal Information to the Site or through the other Services, you acknowledge,
            agree, and expressly consent that such Personal Information may be transferred from your current location to
            the offices and servers of {{ env("APP_NAME") }} and the authorized third parties referred to herein located in
            Estonia, Ukraine and the United States.</p>
        <p><b>Other Information:</b><br> Non-Identifiable Data: When you interact with {{ env("APP_NAME") }} through the Services, we
            receive and store certain personally non-identifiable information. Such information, which is collected
            passively using various technologies, cannot presently be used to specifically identify you, unless it is
            combined with Personal Information. {{ env("APP_NAME") }} may store such information itself or such information may
            be included in databases owned and maintained by {{ env("APP_NAME") }} affiliates, agents or service providers. We
            may use such information and pool it with other information to track, for example, the total number of
            visitors to our Site, the number of visitors to each page of our Site, and the domain names of our visitors’
            Internet service providers. It is important to note that {{ env("APP_NAME") }} uses no Personal Information in
            this process.</p>
        <p><b>Cookies:</b><br> In providing the Services, we may use a technology called “cookies.” A cookie is a piece of
            information that the computer that hosts our Site gives to your browser when you access the Site or the
            Tools. Our cookies help provide additional functionality to the Services and help us analyze the Services
            usage more accurately. Certain information collected through the use of cookies may be used to serve you
            more relevant online advertisements by us or third parties. We may, or a third party may, place and
            recognize a unique cookie on your browser specifically to identify you for the purposes of providing you
            with customized ads or content across channels. The cookies may be linked to data you voluntarily submit to
            us, e.g., your email address, which we may share with a third party. If we share such Personal Information
            it will be in hashed, non-human readable form for security purposes only. If you’d like to opt-out of such
            collection and use of data, please go to the Digital Advertising Alliance’s consumer opt-out page here:
            www.aboutads.info/choices or the Network Advertising Initiative’s opt-out mechanism here:
            //networkadvertising.org/optout_nonppii.asp. For the avoidance of doubt, except with respect to EU Data, we
            may share with third parties data collected from your use of websites of End Customers with third parties
            and such third parties might use that data, together with data collected by such third parties from other
            sources to cause advertisements to be targeted to you. Such data typically includes the URL you are on. As
            used herein, “EU Data” means data of data subjects located in the European Economic Area (including the
            United Kingdom as of the Effective Date of this Privacy Policy).</p>
        <p>In addition, you can generally inform the web services with which our Services integrate (such as social
            buttons, widgets, and other embedded features or content) that you do not want certain information about
            your webpage visits to be collected. Enabling “Do Not Track” in your web browser settings is an easy way to
            accomplish this. The “Do Not Track” browser setting is supported by recent versions of major browsers,
            including Firefox 5+, Internet Explorer 9+, Safari 5.1+, and Google Chrome. Please consult //donottrack.us
            on how to enable this privacy setting on your browser. You can also change the way your browser handles
            cookies. Already existing cookies can be deleted. Please consult www.allaboutcookies.org on how to manage or
            delete cookies in your browser. This Policy covers the use of cookies and similar files by {{ env("APP_NAME") }}
            only and does not cover the use of cookies, flash cookies, and similar files by any third-party advertisers
            or websites linked to the Site. We also may use Google Analytics and other similar services. Google
            Analytics uses cookies to help analyze how users use the Site. The information generated by the cookie about
            your use of the Site (including your IP address) will be transmitted to and stored by Google, Inc.
            (“Google”). Google will use this information for the purpose of evaluating your use of the Site, compiling
            reports on website activity for website operators and providing other services relating to website activity
            and internet usage. Google may also transfer this information to third parties where required to do so by
            law, or where such third parties process the information on Google’s behalf. Google will not associate your
            IP address with any other data held by Google.</p>
        <p><b>Aggregated Personal Information:</b> In an ongoing effort to better understand and serve the users of the
            Services, {{ env("APP_NAME") }} often conducts research on its customer demographics, interests and behavior based
            on the Personal Information and other information provided to us. This research may be compiled and analyzed
            on an aggregate basis, and {{ env("APP_NAME") }} may share this aggregate data with its affiliates, agents and
            business partners. This aggregate information does not identify you personally. {{ env("APP_NAME") }} may also
            disclose aggregated user statistics in order to describe our services to current and prospective business
            partners, and to other third parties for other lawful purposes.</p>
        <p><b>2. Use of Information:</b><br> {{ env("APP_NAME") }} uses the Personal Information you provide in a manner that is
            consistent with this Policy. If you provide Personal Information for a certain reason, we may use the
            Personal Information in connection with the reason for which it was provided. For instance, if you contact
            us by e-mail, we will use the Personal Information you provide to answer your question or resolve your
            problem. In addition to the foregoing purposes, we and our affiliates may use your information to: (a)
            improve the content and functionality of the Services; (b) better understand our users; (c) improve our
            marketing and promotional efforts and customize the Services content, layout, and Services to better suit
            your needs; and (c) resolve disputes, troubleshoot problems and enforce our Service Terms (as defined
            below).</p>
        <p>In addition, {{ env("APP_NAME") }} and its affiliates may use your information to contact you in the future to
            tell you about services we believe will be of interest to you. If we do so, each communication we send you
            will contain instructions permitting you to “opt-out” of receiving future communications. In addition, if at
            any time you wish not to receive any future communications or you wish to have your name deleted from our
            mailing lists, please contact us as indicated.</p>
        <p><b>3. Disclosure of Information</b><br> There are certain circumstances in which we may share your Personal
            Information or other information with third parties without further notice to you, as set forth below:</p>
        <p><b>End Customers:</b> If you enter your Personal Information in any Tool on an End Customer’s website, we may share
            such Personal Information with the applicable End Customer and such End Customer’s service providers, as
            requested by such End Customer.</p>
        <p><b>Business Transfers:</b> As we develop our business, we might sell or buy businesses or assets. In the event of a
            corporate sale, merger, reorganization, dissolution or similar event, Personal Information may be part of
            the transferred assets.</p>
        <p><b>Related Companies:</b> We may also share your Personal Information with our affiliates for purposes consistent
            with this Policy.</p>
        <p><b>Agents, Consultants and Related Third Parties:</b> {{ env("APP_NAME") }}, like many businesses, sometimes hires other
            companies or individuals to perform certain business-related functions. When we employ another company to
            perform a function of this nature, we only provide them with the information that they need to perform their
            specific function.</p>
        <p><b>Legal Requirements:</b> {{ env("APP_NAME") }} may disclose your Personal Information if required to do so by law
            or in the good faith belief that such action is necessary to (a) comply with a legal obligation, including
            lawful requests by public authorities, including to meet national security or law enforcement requirements,
            (b) protect and defend the rights or property of {{ env("APP_NAME") }}, (c) act in urgent circumstances to protect
            the personal safety of users of the Services or the public.</p>
        <p><b>4. Security</b><br> {{ env("APP_NAME") }} takes reasonable steps to protect the Personal Information provided via
            the Services from loss, misuse, and unauthorized access, disclosure, alteration, or destruction. However, no
            Internet or e-mail transmission is ever fully secure or error free. In particular, e-mail sent to or from
            the Site may not be secure. Therefore, you should take special care in deciding what information you send to
            us via e-mail. Please keep this in mind when disclosing any Personal Information to {{ env("APP_NAME") }} via
            the Internet.</p>
        <p><b>5. Third Party Sites</b><br> This Policy applies only to the Services. The Site and other Services, including the
            Tools, may contain links to other websites not operated or controlled by {{ env("APP_NAME") }}, including those
            operated by End Customers (the “Third Party Sites”). The policies and procedures described here do not apply
            to the Third Party Sites or services, or to the use of information submitted via a Tool on such End
            Customer’s website by the applicable End Customer or its service providers. The links from the Site or
            placement of Tools on certain Third Party Sites does not imply that {{ env("APP_NAME") }} endorses or has
            reviewed the Third Party Sites. We suggest contacting those sites, services, entities or persons directly
            for information on their privacy policies.</p>
        <p><b>6. Children’s Online Privacy Protection</b><br> {{ env("APP_NAME") }} does not knowingly collect Personal
            Information from children under the age of 13. If you are under the age of 13, please do not submit any
            Personal Information through the Services. We encourage parents and legal guardians to monitor their
            children’s Internet usage and to help enforce our Policy by instructing their children never to provide
            Personal Information through the Services without their permission. If you have reason to believe that a
            child under the age of 13 has provided Personal Information to {{ env("APP_NAME") }}, please contact us, and we
            will endeavor to delete that information from our databases.</p>
        <p><b>7. Exclusions</b><br> This Policy does not apply to any Personal Information collected by {{ env("APP_NAME") }} other
            than Personal Information collected through the Services. This Policy shall not apply to any unsolicited
            information you provide to {{ env("APP_NAME") }} through the Services or through any other means. This
            includes any ideas for new products or modifications to existing products, and other unsolicited submissions
            (collectively, “Unsolicited Information”). All Unsolicited Information shall be deemed to be
            non-confidential and {{ env("APP_NAME") }} shall be free to reproduce, use, disclose, and distribute such
            Unsolicited Information to others without limitation or attribution.</p>
        <p><b>8. Access to Information; Contacting {{ env("APP_NAME") }}</b><br> To keep your Personal Information accurate,
            current, and complete, please contact us as specified below. We will take reasonable steps to update or
            correct Personal Information in our possession that you have previously submitted via the Services. Please
            also feel free to contact us if you have any questions about this Policy or the information practices of
            this Site. You may contact us as follows: {{ env("APP_NAME") }}.contact@gmail.com.</p>
        <p><b>9. EU Personal Data</b><br> With respect to the processing of personal data relating to data subjects located in
            the European Economic Area (including the United Kingdom as of the Effective Date of this Privacy Policy) by
            {{ env("APP_NAME") }} solely on behalf of the End Customer, the terms of the Data Processing Addendum shall apply.
            The following terms have the meanings given in the General Data Protection Regulation (EU) 2016/679
            (“GDPR”): “personal data”, “data subject” and “process”.</p>
        </div>
    </div>
</div>
</body>
</html>


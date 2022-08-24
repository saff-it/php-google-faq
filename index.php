<?php
    $paragraphs = [

        [
            'title' => 'How are you implementing the recent Court of Justice of the European Union (CJEU) decision on the right to be forgotten?',
            'paragraph' => "<p>The recent ruling by the Court of Justice of the European Union has profound consequences for search engines in Europe. The court found that certain users have the right to ask search engines like Google to remove results for queries that include the person's name. To qualify, the results shown would need to be inadequate, irrelevant, no longer relevant, or excessive. </p>
                            <p>Since this ruling was published on 13 May 2014, we've been working round the clock to comply. This is a complicated process because we need to assess each individual request and balance the rights of the individual to control his or her personal data with public's right to know and distribute information. </p>
                            <p> If you have a removal request, please fill out this webform. You'll receive an automatic reply confirming that we have received your request. We will then assess your case—please note this may take some time because we have already received many such requests. In evaluating your request, we will look at whether the results include outdated information about your private life. We'll also look at whether there's a public interest in the information remaining in our search results—for example, if it relates to financial scams, professional malpractice, criminal convictions or your public conduct as a government official (elected or unelected). These are difficult judgements and as a private organization, we may not be in a good position to decide on your case. If you disagree with our decision you can contact your local DPA. </p>              
                            </p> We look forward to working closely with data protection authorities and others over the coming months as we refine our approach. The CJEU's ruling constitutes a significant change for search engines. While we are concerned about its impact, we also believe it's important to respect the Court's judgment and are working hard to devise a process that complies with the law.</p>
                            When you search for a name, you may see a notice that says that results may have been modified in accordance with data protection law in Europe. We’re showing this notice in Europe when a user searches for most names, not just pages that have been affected by a removal.",
        ],
        [
            'title' => 'How does Google protect my privacy and keep my information secure?',
            'paragraph' => "<p> We know security and privacy are important to you – and they are important to us, too. We make it a priority to provide strong security and give you confidence that your information is safe and accessible when you need it.</p>
                            <p>We’re constantly working to ensure strong security, protect your privacy, and make Google even more effective and efficient for you. We spend hundreds of millions of dollars every year on security, and employ world-renowned experts in data security to keep your information safe. We also built easy-to-use privacy and security tools like Google Dashboard, 2-step verification and Ads Settings. So when it comes to the information you share with Google, you’re in control.</p>
                            <p> You can learn more about safety and security online, including how to protect yourself and your family online, at the Google Safety Center.</p>       
                            Learn more about how we keep your personal information private and safe — and put you in control.",
        ],
        [
            'title' => 'Why is my account associated with a country?',
            'paragraph' => "Your account is associated with a country (or territory) in the Terms of Service so that we can determine two things:

                            <ol> <li>The Google affiliate that provides the services, that processes your information, and that is responsible for complying with applicable privacy laws. Generally, Google offers its consumer services through either of two companies:</li>
                            <ol> <li type='a'>Google Ireland Limited, if you’re located in the European Economic Area (EU countries plus Iceland, Liechtenstein, and Norway) or Switzerland </li>
                            <li type='a'> Google LLC, based in the United States, for the rest of the world </li> </ol>
                            <li> The version of the terms that govern our relationship, which can vary depending on local laws </li> </ol>
                            <p> Keep in mind that Google services are essentially the same regardless of the affiliate that provides the services or your country association. </p>
                            
                            <h4> Determining the country associated with your account </h4>
                            <p>When you create a new account, we associate your account with a country based on where you created your Google Account. For accounts at least a year old, we use the country from which you usually access Google services — typically where you’ve spent the most time in the last year.</p>
                            
                            <p>Frequent travel doesn’t generally affect the country associated with your account. If you move to a new country, it can take about a year for your country association to update.</p>
                            
                            If the country associated with your account doesn’t correspond to your country of residence, it could be because of a difference between your country of work and residence, because you’ve installed a Virtual Private Network (VPN) to mask your IP address, or because you live close to a territorial border. Contact us if you think your country association is wrong.",
        ],
        [
            'title' => "How can I remove information about myself from Google's search results?",
            'paragraph' => "Google search results are a reflection of the content publicly available on the web. Search engines can't remove content directly from websites, so removing search results from Google wouldn't remove the content from the web. If you want to remove something from the web, you should contact the webmaster of the site the content is posted on and ask him or her to make a change. Additionally, if under European data protection law, you would like to request removal of certain information about you that appears in Google's search results, please click here. Once the content has been removed and Google has noted the update, the information will no longer appear in Google's search results. If you have an urgent removal request, you can also visit our help page for more information.",
        ],
        [
            'title' => 'Are my search queries sent to websites when I click on Google Search results?',
            'paragraph' => "In some cases, yes. When you click on a search result in Google Search, your web browser also may send the Internet address, or URL, of the search results page to the destination webpage as the Referrer URL. The URL of the search results page may sometimes contain the search query you entered. If you are using SSL Search (Google’s encrypted search functionality), under most circumstances, your search terms will not be sent as part of the URL in the Referrer URL. There are some exceptions to this behavior, such as if you are using some less popular browsers. More information on SSL Search can be found here. Search queries or information contained in the Referrer URL may be available via Google Analytics or an application programming interface (API). In addition, advertisers may receive information relating to the exact keywords that triggered an ad click.",
        ],

    ];

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- font awesome  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css">
    <title>Google Faq</title>
</head>

<body>

    <header>

        <div class="ms_top-header">

            <div class="ms_left-top">
                <div class="ms_header-logo">
                    <img class="h-100" src="data:image/png;base64,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" alt="logo">
                </div>
                <span>Privacy & Terms</span>
            </div>

            <div class="ms_right-top">
                <i class="fa-solid fa-table-cells"></i>
                <div class="ms_round">S</div>
            </div>

        </div>

        <div class="ms_bottom-header">
            <span>Overview</span>
            <span>Privacy Policy</span>
            <span>Term of Service</span>
            <span>Technologies</span>
            <span>FAQ</span>
        </div>

    </header>

    <main>
        <section>
            <div class="container my-5 w-75">
                <?php 
                    foreach ($paragraphs as $paragraph) {
                ?>
                    <h2 class="mb-4"> 
                        <?php 
                            echo $paragraph['title']; 
                        ?> 
                    </h2>

                    <p> 
                        <?php
                            echo $paragraph['paragraph'];
                        ?> 
                    </p>
                <?php
                    }
                ?>
            </div>
        </section>
    </main>

</body>

</html>
<?php

/**
 * Template Name: page-about
 * Description: This is the template
 */

get_header();
?>
<!-- <section class="l-breadcrumb">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?php echo home_url('/'); ?>">TOP</a></li>
            <li class="breadcrumb-item"><a href="<?php echo home_url('/about'); ?>">OBOGクラブについて</a></li>
        </ol>
    </nav>
</section> -->
<!-- titleview -->
<!-- <section class="l-titleview">
    <img src="https://dummyimage.com/1200x110/dde1e6/dde1e6.jpg" alt="">
    <div class="l-titleview-ttl">
        <p>OBOGクラブについて</p>
    </div>
</section> -->
<!-- titleview -->
<section class="l-titleview">
    <img src="<?php echo get_template_directory_uri(); ?>/images/about/img_page_about.png" alt="OBOGクラブについて">
    <div class="l-titleview-ttl">
        <p>中外炉OBOGクラブについて</p>
    </div>
</section>

<section class="l-about">
    <section id="club">
        <h1>「中外炉OBOGクラブ」のご案内</h1>
        <p>中外炉OBOGクラブは、中外炉工業株式会社を退職されたOBOGの皆さまのためのコミュニティークラブで、所定の基準を満たす中外炉OBOGの皆さまなら、だれでも入会できるメンバーズクラブです。<br>
            1.クラブの目的<br>
            1）OBOG間の親睦と互助を図る<br>
            2）OBOGと会社との情報交流を深め、「人中心」企業の一体感を醸成する<br>
            3）長年勤めた会社への誇りを継承する風土づくりに貢献し、会社の発展に寄与する<br>
            2.登録対象者<br>
            1）定年退職者または勤続20年以上の円満退職者で、本クラブの目的に賛同する60歳以上の中外炉OBOG<br>
            2）1）の基準のほか、会社が適格と判断し、本クラブの目的に賛同する60歳以上の中外炉OBOG<br>
            ※会員本人の死亡もしくは本クラブの目的に反する行為があった場合は、会員資格を失います。<br>
            3.会員特典<br>
            ○ ID、パスワード認証により、会員専用ホームページが閲覧できます<br>
            ○「OBOG通信」や「メール案内」が受け取れます<br>
            ・年1回発行する「OBOG通信」を全会員にお届けします。<br>
            ・メールアドレスご登録済会員の皆さまには、弔事連絡やホームページの更新などタイムリーな情報を、「メール案内」としてお届けします。<br>
            ○ 「中外炉OBOGクラブ」全体懇親会に参加できます<br>
            ・数年に1度の開催を前提に会社が計画する「中外炉OBOGクラブ」全体懇親会に参加できます。<br>
            ○ 弔事の際会社の規定が適用されます<br>
            ・会員ご本人や配偶者が亡くなられた場合、会社は規定に準じた各種の手配を行います。<br>
            ※ご不幸があった場合は、必ず人事部（ TEL:072-247-2502 FAX:072-247-2508 ）までご連絡ください。なお、必要な情報をもれなくご連絡いただくため、弔事のご連絡記入様式を使い、FAX送信していただければ幸いです。<br>
            ・「メール案内」や「専用ホームページ」を通じ、会員の皆さまに弔事連絡をします。</p>
    </section>
    <br>
    <br>
    <div id="memberpost" style="position: relative; top: -110px;"></div>
    <section>
        <!-- <section id="memberpost"> -->
        <h1>ご入稿について【会員限定】</h1>
        <p>
            会員の皆さまからの情報ご入稿について<br>
            中外炉OBOGクラブでは、「OBOG会だより」や「会員だより」でご紹介する原稿を募集しています。<br>
            各OBOG会幹事の皆さまには、ご計画されておられるOBOG会の予定ご案内や開催後の楽しいレポートを、また多種多様なご趣味やスポーツ、あるいは地域・文化活動などでご活躍されておられる会員の皆さまには、ぜひその近況報告や随想などをご入稿ください。
            テーマは特に問いませんので、ご家族のことやご自身の健康療法など、身近なことでも構いません。<br>

            ≪ご入稿方法≫<br>
            ご入稿いただける場合は、皆さまの電子メールに、原稿となる写真や文章の電子データを添付し<br>人事部OBOG原稿受付専用メールアドレス：ob-genkou@mail.chugai.co.jpまで送信願います。
            なお、添付していただく写真は、最大3枚(合計1MB以内)としてください。<br>

            原稿類をご郵送でお送りいただく場合は、以下宛先までお願いします。<br>

            〒592-8331<br>
            堺市西区築港新町2-4<br>
            中外炉工業株式会社 人事部 OBOG原稿受付窓口宛<br>
            TEL：072-247-2502<br>

            ≪掲載時期≫<br>
            毎月25日までにご入稿頂いた原稿は、翌月10日頃までに掲載させていただきます。</p>
    </section>
    <button class="btn btn-primay add-icon"><a href="<?php echo home_url('/'); ?>">トップへ戻る</a></button>


</section>

<?php
get_footer();
?>
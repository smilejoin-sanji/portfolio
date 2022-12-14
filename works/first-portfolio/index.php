<?php
session_start();
$error = [];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

    // フォームの送信時にエラーをチェックする
    if ($post['name'] === '') {
        $error['name'] = 'blank';
    }
    if ($post['email'] === '') {
        $error['email'] = 'blank';
    } else if (!filter_var($post['email'], FILTER_VALIDATE_EMAIL)) {
        $error['email'] = 'email';
    }
    if ($post['message'] === '') {
        $error['message'] = 'blank';
    }

    if (count($error) === 0) {
        // 確認画面に移動
        $_SESSION['form'] = $post;
        header('Location: confirm.php');
        exit();
    }
} else {
    if (isset($_SESSION['form'])) {
        $post = $_SESSION['form'];
    }
}
?>
<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="愛知県でWeb制作を行っているSmileJoinです。ホームページ、ランディングページなど、Web制作の事ならお気軽にお問い合わせください。一度きりでなく、長い付き合いをしていけるよう心かけています、ご依頼は全力で...">
    <title>Web制作・ホームページ制作 - SmileJoin</title>
    <meta property="og:type" content="website" />
    <meta property="og:locale" content="ja_JP" />
    <meta property="og:title" content="Web制作・ホームページ制作 - SmileJoin" />
    <meta property="og:description" content="愛知県でWeb制作を行っているSmileJoinです。ホームページ、ランディングページなど、Web制作の事ならお気軽にお問い合わせください。一度きりでなく、長い付き合いをしていけるよう心かけています、ご依頼は全力で..." />
    <meta property="og:url" content="https://smilejoin.design" />
    <meta property="og:site_name" content="SmileJoin | Web制作" />
    <meta name="twitter:card" content="summary" />
    <meta name="twitter:site" content="https://smilejoin.design/" />
    <link rel="stylesheet" href="./css/reset.css">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bangers&family=Klee+One&family=Vujahday+Script&display=swap" rel="stylesheet">
</head>

<body>
    <header class="header">
        <div class="header__logo">
            <h1 class="header__logo__area"><a href="index.php">
                    <img src="./images/logo_while.svg" alt="">
                </a></h1>
        </div>
        <div class="header__copyright">
            <div class="header__copyright__topText">全ては繋がりから始まる物語</div>
            <div class="header__copyright__centerText">繋がりから感動が生じ、誇りが生まれ</div>
            <div class="header__copyright__bottomText">その繋がりこそは僕の全てだ</div>
        </div>
    </header>
    <main class="main">
        <nav class="nav" id="nav">
            <ul class="nav__list">
                <li class="nav__list__items"><a href="" class="serviceLayout" data-id="service">service</a></li>
                <li class="nav__list__items"><a href="" class="worksLayout is-active" data-id="works">works</a></li>
                <li class="nav__list__items"><a href="" class="contactLayout" data-id="contact">contact</a></li>
                <li class="nav__list__items"><a href="" class="aboutLayout" data-id="about">about me</a></li>
            </ul>
            <div class="nav__copyright">
                © smilejoin All rights reserved.
            </div>
        </nav>
        <div class="main__contents">
            <div class="mobile_menu" data-id="nav"></div>
            <!-- --------------- top -->
            <article class="contents_container" id="topPage">
                <div class="main__contents__top">Top page<br>Under Construction...</div>
            </article>
            <!-- --------------- service -->
            <article class="contents_container" id="service">
                <div class="main__contents__service">
                    <ul class="serviceList">
                        <li class="serviceList__items">
                            <div class="serviceList__items__title">
                                <div class="serviceList__items__title__en">Derection</div>
                                <div class="serviceList__items__title__ja">ディレクション</div>
                            </div>
                            <div class="serviceList__items__img">
                                <img src="./images/derction.png" alt="">
                            </div>
                            <div class="serviceList__items__direction">
                                お客様の要望をヒアリングし、現状の問題点を洗い出し、効果的なプランを作成いたします。制作ではデザインに入る前の事前の準備が特に重要になります。何が必要で何が必要でないのかを判断し、費用対効果の高いWebサイトを作るための土台を作ります。
                            </div>
                        </li>
                        <li class="serviceList__items">
                            <div class="serviceList__items__title">
                                <div class="serviceList__items__title__en">Design</div>
                                <div class="serviceList__items__title__ja">デザイン</div>
                            </div>
                            <div class="serviceList__items__img">
                                <img src="./images/design.png" alt="">
                            </div>
                            <div class="serviceList__items__direction">
                                ヒアリングに基づいたプランに沿って、デザインを作成いたします。人の使うものであることを常に意識して、使う人が迷わない、目的を達成できるデザインを心がけています。インターフェースの重要性が増す中でデザインの役割を理解し、そのプランに最適な提案をさせていただきます。
                            </div>
                        </li>
                        <li class="serviceList__items">
                            <div class="serviceList__items__title">
                                <div class="serviceList__items__title__en">Coding</div>
                                <div class="serviceList__items__title__ja">コーディング</div>
                            </div>
                            <div class="serviceList__items__img">
                                <img src="./images/coding.png" alt="">
                            </div>
                            <div class="serviceList__items__direction">
                                デザインの意図を理解し、動きや効果を適切に使用することでWebサイトの仕上がりは大きく変わります。スマートフォンサイト、ワードプレスを使用した更新性の高いサイト、Javascriptを使用した動きのあるサイトなど、様々なサイトのコーディングを行っております。
                            </div>
                        </li>
                    </ul>
                    <div class="serviceScroll">scroll<span></span></div>
                </div>
            </article>
            <!-- --------------- works -->
            <article class="contents_container contents__is-active" id="works">
                <ul class="main__contents__works">
                    <li class="works_container works_is-active" id="works-top">
                        <div class="worksArea">
                            <div class="worksArea__direction">
                                Catworkクリニック（仮）
                                <p>Figma / HTML,Sass / JavaScript / Photoshop</p>
                                <br>
                                タブレットやスマートフォンのデザインを追加<br>
                                javascriptで滑らかな動きを心がけて制作しました。<br>
                                <br>
                                制作時間：<br>
                                コーディング 20時間<br>
                            </div>
                            <div class="worksArea__img">
                                <a href="./works/catwork/assets/index.html" target=”_blank”>
                                    <img src="./images/works/catwork.png" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="worksNext" data-id="portfolio">next<span></span></div>
                    </li>
                    <li class="works_container" id="portfolio">
                        <div class="worksPrev" data-id="works-top">prev<span></span></div>
                        <div class="worksArea">
                            <div class="worksArea__direction">
                                SmileJoin Web Design（仮）<br>
                                <p>Figma / HTML,Sass / JavaScript / php /
                                    Photoshop 2021 / Illustrator2022 /</p>
                                <br>
                                制作目的：ポートフォリオの掲示<br>
                                <br>
                                制作ポイント：<br>
                                誰でも見やすく、ごく簡単なレイアウトにしています。<br>
                                今自分において一番大事にしている事をまとめ、タイトルの位置に配置。<br>
                                <br>
                                訓練校通って ３ヶ月目の時期に制作しました。<br>
                                JavaScriptやPHPはまだ学習中のため、コンタクトフォームもへのセキュリティー対策はまだ行っていません。<br>
                                <br>
                                モバイルデバイスとデスクトップデバイスに対応<br>
                                <br>
                                制作時間： 40時間
                            </div>
                            <div class="worksArea__img">
                                <a href="index.php" target=”_blank”>
                                    <img src="./images/works/contact.png" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="worksNext" data-id="sj-nagoya">next<span></span></div>
                    </li>
                    <li class="works_container" id="sj-nagoya">
                        <div class="worksPrev" data-id="portfolio">prev<span></span></div>
                        <div class="worksArea">
                            <div class="worksArea__direction">
                                SJ名古屋整体院（仮）<br>
                                <p>Adobe XD / HTML,Sass / JavaScript /</p>
                                <br>
                                制作目的：新規患者獲得<br>
                                ターゲット： ３０代〜５０代男女患者様<br>
                                デザインイメージ：<br>
                                モダン 優しい 知性的 清潔<br>
                                <br>
                                制作ポイント：<br>
                                メインカラーを信頼感のある青系に設定<br>
                                重要情報はアクセントカラーのオレンジ系に設定。<br>
                                <br>
                                ナビーゲーションバーを固定し、いつでも問い合わせや予約が可能、またターゲット層は広く、見ずらい方もいらっしゃる可能性があるため、マウスを合わせた際にフォントサイズを見やすく大きめに設定。<br>
                                <br>
                                現段階でデスクトップバージョンとモバイルバージョンに対応。<br>
                                <br>
                                制作時間： 60時間
                            </div>
                            <div class="worksArea__img">
                                <a href="./works/sj-nagoya/assets/index.html" target=”_blank”>
                                    <img src="./images/works/sj-nagoya.png" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="worksNext" data-id="recruit">next<span></span></div>
                    </li>
                    <li class="works_container" id="recruit">
                        <div class="worksPrev" data-id="sj-nagoya">prev<span></span></div>
                        <div class="worksArea">
                            <div class="worksArea__direction">
                                リクルートエージェント（仮）<br>
                                <p>
                                    Adobe XD / HTML,css / JavaScript /
                                    Illustrator / Photoshop
                                </p>

                                制作目的：新規ユーザ獲得<br>
                                ターゲット： ２０代後半〜３０代女性<br>
                                <br>
                                制作ポイント：<br>
                                メインカラーは大人女性の華やかさを演出しやすい<br>
                                濃い目の赤に設定。<br>
                                <br>
                                アピールポイントの『子育てと転職』両立できる事をわかりやすく伝えるため真ん中に大きく配置。<br>
                                <br>
                                訓練校通って 2ヶ月突入の時期に制作しました。<br>
                                <br>
                                現段階でデスクトップバージョンとモバイルバージョンに対応<br>
                                制作時間： 60時間<br>
                            </div>
                            <div class="worksArea__img">
                                <a href="./works/recruit/assets/index.html" target=”_blank”>
                                    <img src="./images/works/recruit.png" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="worksNext" data-id="vlog">next<span></span></div>
                    </li>
                    <li class="works_container" id="vlog">
                        <div class="worksPrev" data-id="recruit">prev<span></span></div>
                        <div class="worksArea">
                            <div class="worksArea__direction">
                                個人ブログ（仮）<br>
                                HTML,css<br>
                                <br>
                                制作目的： 同じバイク乗りの繋がり増やし<br>
                                ターゲット：　30代〜50代まで幅広い年齢層<br>
                                <br>
                                訓練校でhtml習い終わったごろに制作しました。<br>
                                デスクトップのみ対応<br>
                                <br>
                                制作時間： 20時間<br>
                            </div>
                            <div class="worksArea__img">
                                <a href="./works/vlog/index.html" target=”_blank”>
                                    <img src="./images/works/vlog.png" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="worksNext" data-id="travel-blog">next<span></span></div>
                    </li>
                    <li class="works_container" id="travel-blog">
                        <div class="worksPrev" data-id="vlog">prev<span></span></div>
                        <div class="worksArea">
                            <div class="worksArea__direction">
                                Trabel Blog（仮）<br>
                                HTML,css<br>
                                <br>
                                制作目的： コーディングの練習<br>
                                <br>
                                訓練校でhtmlの学習中に練習として制作しました。<br>
                                デスクトップのみ対応<br>
                                <br>
                                制作時間： 30時間
                            </div>
                            <div class="worksArea__img">
                                <a href="./works/trabel-blog/index.html" target=”_blank”>
                                    <img src="./images/works/trabel-blog.png" alt="">
                                </a>
                            </div>
                        </div>
                        <!-- <div class="worksNext">next<span></span></div> -->
                    </li>
                </ul>
            </article>
            <!-- --------------- contact -->
            <article class="contents_container" id="contact">
                <div class="main__contents__contact">
                    <div class="contactNotes">
                        制作の依頼・ご相談などお気軽にお問い合わせくださいませ。<br>
                        下記フォームよりわかる範囲でご記入ください。必須の項目は必ずご記入お願いします。
                        <br>
                    </div>
                    <div class="formArea">
                        <form class="contactForm" action="" method="POST">
                            <div class="contactForm__input">
                                <div class="contactForm__input__items">
                                    <label class="label" for="input-companyName">貴社名</label>
                                    <div class="inputArea">
                                        <input class="inputs" type="text" name="companyName" id="input-companyName"
                                            value="<?php echo htmlspecialchars($post['companyName']); ?>">
                                    </div>
                                </div>
                                <div class="contactForm__input__items">
                                    <label class="label" for="input-userName">お名前<span
                                            class="colorRed">*必須</span></label>
                                    <div class=inputArea>
                                        <input class="inputs" type="text" name="userName" id="input-userName"
                                            value="<?php echo htmlspecialchars($post['userName']); ?>" required>
                                        <?php if ($error['userName'] === 'blank'): ?>
                                            <p class="error_msg">＊お名前をご記入下さい。</p>
                                        <?php endif; ?>
                                    </div>
                                </div>
                                <div class="contactForm__input__items">
                                    <label class="label" for="input-email">メールアドレス<span
                                            class="colorRed">*必須</span></label>
                                    <div class="inputArea">
                                        <input class="inputs" type="email" name="email" id="input-email"
                                            value="<?php echo htmlspecialchars($post['email']); ?>" required>
                                        <?php if ($error['email'] === 'blank'): ?>
                                        <p class="error_msg">＊メールアドレスをご記入下さい。</p>
                                        <?php endif; ?>
                                        <?php if ($error['email'] === 'email'): ?>
                                        <p class="error_msg">＊メールアドレスを正しくご記入ください。</p>
                                        <?php endif; ?>
                                    </div>
                                </div>
                                <div class="contactForm__input__items">
                                    <label class="label" for="input-tel">電話番号</label>
                                    <div class="inputArea">
                                        <input class="inputs" type="tel" size="10" maxlength="20" name="tel" id="input-tel"
                                            value="<?php echo htmlspecialchars($post['tel']); ?>">
                                    </div>
                                </div>
                                <div class="contactForm__input__items">
                                    <label class="label" for="input-message">お問い合わせ内容<span
                                            class="colorRed">*必須</span></label>
                                    <div class="inputArea">
                                        <textarea required name="message"
                                            id="input-message"><?php echo htmlspecialchars($post['message']); ?></textarea>
                                        <?php if ($error['message'] === 'blank'): ?>
                                            <p class="error_msg">＊お問い合せ内容をご記入下さい。</p>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                            <div class="contactForm__send">
                                <input type="submit" value="send" class="submit">
                            </div>
                        </form>
                    </div>
                </div>
            </article>
            <!-- --------------- about -->
            <article class="contents_container" id="about">
                <div class="main__contents__about">
                    <div class="aboutList">
                        <div class="aboutList__career js-about-items about__active" id="career">
                            <!-- 1995 -->
                            <div class="aboutList__career__rows">
                                <div class="date">
                                    <p>1995年</p>
                                    <p>｜</p>
                                </div>
                                <div class="title">
                                    <p class="title__name">中国黒竜江省生まれ</p>
                                </div>
                            </div>
                            <!-- 2008 -->
                            <div class="aboutList__career__rows">
                                <div class="date">
                                    <p>2008年</p>
                                    <p>｜</p>
                                </div>
                                <div class="title">
                                    <p class="title__name">親と来日（三重県、中学１年）</p>
                                    <p class="title__discription">
                                        日本語０の状態で日本に来た<br>
                                        授業受けるどころか日常会話もできない<br>
                                        中学校の先生と相談したところ、名古屋の学校紹介してもらった。
                                    </p>
                                </div>
                            </div>
                            <!-- 2009 -->
                            <div class="aboutList__career__rows">
                                <div class="date">
                                    <p>2009年</p>
                                    <p>｜</p>
                                </div>
                                <div class="title">
                                    <p class="title__name">名古屋に引越し</p>
                                    <p class="title__discription">
                                        名古屋の中学校に入学したが、言葉理解できないため<br>
                                        友達もできず、担任先生から暴力受け<br>
                                        一度通学するのやめようとしていた、親に相談し<br>
                                        転校することに。
                                    </p>
                                </div>
                            </div>
                            <!-- 2010 -->
                            <div class="aboutList__career__rows">
                                <div class="date">
                                    <p>2010年</p>
                                    <p>｜</p>
                                </div>
                                <div class="title">
                                    <p class="title__name">転校</p>
                                    <p class="title__discription">
                                        新しい学校に転校、暇つぶしにブックオフで漫画立ち読み<br>
                                        偶然に同じ学校の不良と出会い、話しかけてもらった。<br>
                                        仲良くしてくれた。　初友。
                                    </p>
                                </div>
                            </div>
                            <!-- 2011 -->
                            <div class="aboutList__career__rows">
                                <div class="date">
                                    <p>2011年</p>
                                    <p>｜</p>
                                </div>
                                <div class="title">
                                    <p class="title__name">卒業</p>
                                    <p class="title__discription">
                                        彼のお陰でいろんな人と出会う事ができた<br>
                                        退屈だった学校生活も楽しいと思えるようになった。<br>
                                        日本語もだいぶ話せるようになった。
                                    </p>
                                    <p class="title__name">高校入学</p>
                                    <p class="title__discription">
                                        中学ほとんどの時間は日本語の勉強に費やし<br>
                                        授業の内容がわからないまま高校受験を迎えた。<br>
                                        公立は受験できず、推薦で私立高校に入学。
                                    </p>
                                </div>
                            </div>
                            <!-- 2012 -->
                            <div class="aboutList__career__rows">
                                <div class="date">
                                    <p>2012年</p>
                                    <p>｜</p>
                                </div>
                                <div class="title">
                                    <p class="title__name">高校中退</p>
                                    <p class="title__discription">
                                        授業について行けず、留年の話もあったため<br>
                                        中退することに。
                                    </p>
                                    <p class="title__name">初仕事</p>
                                    <p class="title__discription">
                                        16歳で社会人になった、目標もない、やりたい事もない<br>
                                        養父の会社に就職。大工助手デビュー。
                                    </p>
                                </div>
                            </div>
                            <!-- 2014 -->
                            <div class="aboutList__career__rows">
                                <div class="date">
                                    <p>2014年</p>
                                    <p>｜</p>
                                </div>
                                <div class="title">
                                    <p class="title__name">退職</p>
                                    <p class="title__discription">
                                        助手生活、結構楽しかった。<br>
                                        週６勤務で一日１０時間オーバーの現場仕事。<br>
                                        手取り１０万円だけど実家暮らしで少ないとも思わなかった。<br>
                                        そもそも自分はちゃんと仕事できてたかが怪しい。<br>
                                        <br>
                                        退職理由：高所恐怖症。<br>
                                    </p>
                                    <p class="title__name">一人暮らし</p>
                                    <p class="title__discription">
                                        退職後運送会社の方と出会い、正社員で働いていた。<br>
                                        職場が遠いのもあって、一人暮らしする事にした。<br>
                                        当時はオンラインゲームにはまり、手取り30万前後貰ったのを生活費除いて全て課金に費やした。
                                    </p>
                                </div>
                            </div>
                            <!-- 2018 -->
                            <div class="aboutList__career__rows">
                                <div class="date">
                                    <p>2018年</p>
                                    <p>｜</p>
                                </div>
                                <div class="title">
                                    <p class="title__name">焦り</p>
                                    <p class="title__discription">
                                        派遣社員で携帯ショップの仕事をしていたごろ<br>
                                        ある日(突然)今後何しようかが全然わからない<br>
                                        このままずっと自由に生きるのもそう長くない<br>
                                        けど自分に何ができるかもわからない、何やりたいかもわからない。<br>
                                    </p>
                                    <p class="title__name">行動</p>
                                    <p class="title__discription">
                                        かれこれ悩んでも仕方ない、とりあえず将来的に向いてそうな求人を探しまくった。<br>
                                        求人ページに書かれていた『独立塾』に目を引かれ、開いた先には違う人生が待っていた。
                                    </p>
                                </div>
                            </div>
                            <!-- 2019 -->
                            <div class="aboutList__career__rows">
                                <div class="date">
                                    <p>2019年</p>
                                    <p>｜</p>
                                </div>
                                <div class="title">
                                    <p class="title__name">入社</p>
                                    <p class="title__discription">
                                        東京まで説明会を聞きに行き、独立塾に応募して、無事に入社できた。それは今までの自分が知らない夜の世界だった。<br>
                                        配属の店舗行って第一印象は：おしゃれ<br>
                                        勤務が始まって第一印象：なんだこの人混みは、動けん、押すな<br>
                                    </p>
                                    <p class="title__name">出会い</p>
                                    <p class="title__discription">
                                        ジェンガの存在も知らなかった自分はみんなの笑い声に守られながら日々成長していた。<br>
                                        そして社会人になって出会いの無さに感じていた悩みも解消<br>
                                        むしろ色んな人に出会いすぎて名前と顔が一致しなかった。<br>
                                    </p>
                                    <p class="title__name">出逢い</p>
                                    <p class="title__discription">
                                        ここである女性に出逢い、お互いに興味を持ち、付き合うことに<br>
                                        当時の彼女は大学生であり、かなり遊んでいた。
                                    </p>
                                </div>
                            </div>
                            <!-- 2020 -->
                            <div class="aboutList__career__rows">
                                <div class="date">
                                    <p>2020年</p>
                                    <p>｜</p>
                                </div>
                                <div class="title">
                                    <p class="title__name">退職</p>
                                    <p class="title__discription">
                                        1年間の独立塾を終え、卒業。
                                    </p>
                                    <p class="title__name">自営業</p>
                                    <p class="title__discription">
                                        独立塾で得た知識フル活用して、自分で店舗立ち上げ(極小さな)<br>
                                        しかしタイミングよくコロナが流行る時期だった。<br>
                                        開店２ヶ月目で緊急事態宣言によって営業停止。<br>
                                        それに人脈などもなく、知名度もない状態で開店し、この店の存在はもはや身内の人しか知らなかった。<br>
                                        かれこれ試して半年後あたりにようやく来客が増え、満席になる事も徐々に増えていた。<br>
                                    </p>
                                </div>
                            </div>
                            <!-- 2021 -->
                            <div class="aboutList__career__rows">
                                <div class="date">
                                    <p>2021年</p>
                                    <p>｜</p>
                                </div>
                                <div class="title">
                                    <p class="title__name">結婚</p>
                                    <p class="title__discription">
                                        会社員の時に出会った彼女と結婚<br>
                                        ほんとはもっと仕事などが安定してからにするつもりだったが<br>
                                        予定は変化に及ばないものだ。
                                    </p>
                                    <p class="title__name">２店舗目</p>
                                    <p class="title__discription">
                                        １店舗目まぁまぁ成功したから、２店舗目も行けるでしょう<br>
                                        そういう軽い気持ちで２店舗目立ち上げ。<br>
                                        案の定上手くいかなかった、コロナの影響もあったが、やはり自分自身のマネジメント力がまだ足りない事に気づき、７ヶ月目で閉店。
                                    </p>
                                    <p class="title__name">プログラミング</p>
                                    <p class="title__discription">
                                        コロナがあまりにも落ち着かず、営業できない日も多々あったので、趣味程度でJavaを独学し始めた。<br>
                                        それが思うより刺さって、夢中になっていた<br>
                                        初めて勉強というものが楽しいと思えた。
                                    </p>
                                </div>
                            </div>
                            <!-- 2022 -->
                            <div class="aboutList__career__rows">
                                <div class="date">
                                    <p>2022年</p>
                                    <p>｜</p>
                                </div>
                                <div class="title">
                                    <p class="title__name">閉店</p>
                                    <p class="title__discription">
                                        コロナで２年目の半分は、ほぼまともに営業できなかった<br>
                                        第七波突入の時期に閉店と決意。
                                    </p>
                                </div>
                            </div>
                            <!-- 現在 -->
                            <div class="aboutList__career__rows">
                                <div class="date">
                                    <p>現在</p>
                                    <p>｜</p>
                                </div>
                                <div class="title">
                                    <p class="title__name">Web</p>
                                    <p class="title__discription">
                                        コロナ中に独学した経験もあり、web業界の方が自分に合うと思い、職業訓練校のwebデザイナー科に入学。<br>
                                        ほんとに未経験者によくない業界だ。<br>
                                        <br>
                                        けど、頑張りがすぐに実感できる業種でもあると思う<br>
                                        だから自分は挫折しなかったと思う。<br>
                                        夢の中でレイアウト組んでコード叩いてるくらいだから<br>
                                        多分好きだと思う。<br>
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="aboutList__me js-about-items" id="me">
                            <div class="my-machines">
                                <p>My-machines</p>
                                <div class="my-machines__car">
                                    <img src="./images/zn6.png" alt="">
                                    <p>Toyota 86(zh6)</p>
                                </div>
                                <div class="my-machines__bike">
                                    <img src="./images/nc42.png" alt="">
                                    <p>CB400SF(nc42)</p>
                                </div>
                            </div>
                            <p class="age">Age&nbsp;:&nbsp;27</p>
                            <p class="personality">Personality&nbsp;:&nbsp;ENFP-A</p>
                            <p class="holidy">
                                最近の休日：<br>
                                &nbsp;海沿いツーリング
                            </p>
                            <p class="like">
                                好きな言葉：<br>
                                あまり強い言葉を遣うなよ。弱く見えるぞ。<br>
                                <span>ー藍染惣右介　(BLEACH)</span>
                            </p>
                        </div>

                        <div class="aboutList__skills js-about-items" id="skills">
                            <p class="skillsTitle">Skills</p>
                            <div class="skillsArea">
                                <div class="skillsRows">
                                    <div class="skillsRows__img">
                                        <img src="./images/skills-y.png" alt="">
                                    </div>
                                    <p class="skillsName">Html&nbsp;Css</p>
                                </div>
                                <div class="skillsRows">
                                    <div class="skillsRows__img">
                                        <img src="./images/skills-y.png" alt="">
                                    </div>
                                    <p class="skillsName">Javascript</p>
                                </div>
                                <div class="skillsRows">
                                    <div class="skillsRows__img">
                                        <img src="./images/skills-y.png" alt="">
                                    </div>
                                    <p class="skillsName">PHP</p>
                                </div>
                                <div class="skillsRows">
                                    <div class="skillsRows__img">
                                        <img src="./images/skills-g.png" alt="">
                                    </div>
                                    <div class="skillsName">Photoshop</div>
                                </div>
                                <div class="skillsRows">
                                    <div class="skillsRows__img">
                                        <img src="./images/skills-g.png" alt="">
                                    </div>
                                    <div class="skillsName">Illustrator</div>
                                </div>
                                <div class="skillsRows">
                                    <div class="skillsRows__img">
                                        <img src="./images/skills-g.png" alt="">
                                    </div>
                                    <div class="skillsName">Figma</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="aboutPointer">
                        <div class="pointer pointer-active" data-id="career"></div>
                        <div class="pointer" data-id="me"></div>
                        <div class="pointer" data-id="skills"></div>
                    </div>
                </div>
            </article>
        </div>
    </main>
    <script src="https://code.jquery.com/jquery-3.6.1.min.js"
        integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
    </script>
    <script src="./js/main.js"></script>
</body>

</html>
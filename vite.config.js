import { defineConfig } from 'vite';

import { resolve } from 'path';

//handlebarsプラグインimport
import handlebars from 'vite-plugin-handlebars';

//HTML上で出し分けたい各ページごとの情報
const pageData = {
  'index.html': {
    title: '北アルプス黒部源流-北アルプス最奥の秘境-',
    description:
      '北アルプス黒部源流にある三俣山荘、水晶小屋、湯俣山荘を管理する公式ホームページです。雄大な自然に囲まれた北アルプス最奥の秘境の情報を掲載しています。',
    ogp: '',
    isTop: true
  },
  'mitsumata/guide/index.html': {
    title: '三俣山荘の魅力 │ 北アルプス黒部源流',
    description:
      '北アルプス裏銀座、鷲羽岳と三俣蓮華岳の鞍部に位置する山荘。その歴史は戦後まもなく三俣蓮華小屋の権利を買い取ったところから始まります。',
    ogp: ''
  },
  'mitsumata/info/index.html': {
    title: '三俣山荘宿泊情報 │ 北アルプス黒部源流',
    description:
      '三俣山荘の開設時期は7月7日(金)〜10月15日(日)まで。定員は65名。宿泊予約はWEB予約フォームからお願いいたします。展望食堂から槍ヶ岳を眺めながら名物のジビエシチューをいただけます。',
    ogp: ''
  },
  'suisho/guide/index.html': {
    title: '水晶小屋の魅力 │ 北アルプス黒部源流',
    description:
      '水晶小屋は風速50メートルの風と岩肌に囲まれた厳しい土地にあります。小屋の運営にはバイオエネルギーを使用し雨水で飲料水を賄う自然と共存する山小屋です。',
    ogp: ''
  },
  'suisho/info/index.html': {
    title: '水晶小屋宿泊情報 │ 北アルプス黒部源流',
    description:
      '水晶小屋の開設時期は7月10日(月)〜9月30日(土)まで。定員は35名。宿泊予約はWEB予約フォームからお願いいたします。飲料水は雨水を利用したものを量り売りで販売しております。',
    ogp: ''
  },
  'yumata/guide/index.html': {
    title: '湯俣山荘の魅力 │ 北アルプス黒部源流',
    description:
      '湯俣山荘は伊藤新道の廃道とともに閉業となりましたがこの度伊藤新道の復活に併せて湯俣山荘もリニューアルし再開しました。湯俣山荘は北アルプスのゲートウェイとして、アウトドアアクティビティへの入り口としても多くのポテンシャルを持っています。',
    ogp: ''
  },
  'yumata/info/index.html': {
    title: '湯俣山荘宿泊情報 │ 北アルプス黒部源流',
    description:
      '湯俣山荘の開設時期は9月上旬から11月11日(土)まで。定員は28名。宿泊予約は8月15日からの受付を開始しております。伊藤新道の入り口として40年ぶりに再開します。',
    ogp: ''
  },
  '/news/index.html': {
    title: 'お知らせ │ 北アルプス黒部源流',
    description: '各山荘からのお知らせ。山小屋情報、イベント、サイトの更新情報を掲載しています。',
    ogp: ''
  },
  '/news/detail.html': {
    title: 'お知らせタイトル │ 北アルプス黒部源流',
    description: '各山荘からのお知らせ。山小屋情報、イベント、サイトの更新情報を掲載しています。',
    ogp: ''
  },
  '/feature/index.html': {
    title: '特集 │ 北アルプス黒部源流',
    description: '北アルプス黒部源流の山小屋にまつわる特集を掲載します。',
    ogp: ''
  },
  '/feature/detail.html': {
    title: '特集タイトル │ 北アルプス黒部源流',
    description: '北アルプス黒部源流の山小屋にまつわる特集を掲載します。',
    ogp: ''
  },
  '/contact/index.html': {
    title: 'お問い合わせ │ 北アルプス黒部源流',
    description:
      '各山荘へのお問い合わせはこちらからお願いいたします。フォームでのお問い合わせにつきましては返信にお時間を頂きます事、予めご了承ください。',
    ogp: ''
  },
  '/contact/confirm.html': {
    title: 'お問い合わせ 内容確認│ 北アルプス黒部源流',
    description:
      '各山荘へのお問い合わせはこちらからお願いいたします。フォームでのお問い合わせにつきましては返信にお時間を頂きます事、予めご了承ください。',
    ogp: ''
  },
  '/company/index.html': {
    title: '三俣山荘株式会社 │ 北アルプス黒部源流',
    description:
      '三俣山荘株式会社は北アルプス黒部源流に位置する三俣山荘、水晶小屋、湯俣山荘の管理・運営を行っています。',
    ogp: ''
  },
  '/itoshindo/index.html': {
    title: '復活 伊藤新道 │ 北アルプス黒部源流',
    description:
      '伊藤新道は時代のなかで⼀時は地図から消えた道ですが、「伊藤新道復活プロジェクト」として、クラウドファンディングにて支援を募り、吊り橋やタラップの設置を行いました。そして、2023年8月20日（日）に再び伊藤新道が開通します！伊藤新道に訪れる方はご一読ください。',
    ogp: ''
  }
};

const root = 'src';

export default defineConfig({
  server: {
    host: true //IPアドレスを有効化
  },
  root: root, //開発ディレクトリ設定
  build: {
    outDir: '../dist', //出力場所の指定
    rollupOptions: {
      //ファイル出力設定
      output: {
        assetFileNames: assetInfo => {
          let extType = assetInfo.name.split('.')[1];
          if (/png|jpe?g|svg|gif|tiff|bmp|ico/i.test(extType)) {
            extType = 'images';
          }
          //ビルド時のCSS名を明記してコントロールする
          if (extType === 'css') {
            return `assets/css/style.css`;
          }
          return `assets/${extType}/[name][extname]`;
        },
        chunkFileNames: 'assets/js/[name].js',
        entryFileNames: 'assets/js/[name].js'
      },
      input: {
        index: resolve(root, 'index.html'),
        mitsumata_guide: resolve(root, 'mitsumata/guide/index.html'),
        mitsumata_info: resolve(root, 'mitsumata/info/index.html'),
        suisho_guide: resolve(root, 'suisho/guide/index.html'),
        suisho_info: resolve(root, 'suisho/info/index.html'),
        yumata_guide: resolve(root, 'yumata/guide/index.html'),
        yumata_info: resolve(root, 'yumata/info/index.html'),
        news: resolve(root, '/news/index.html'),
        news_detail: resolve(root, '/news/detail.html'),
        feature: resolve(root, '/feature/index.html'),
        feature_detail: resolve(root, '/feature/detail.html'),
        contact: resolve(root, '/contact/index.html'),
        contact_confirm: resolve(root, '/contact/confirm.html'),
        company: resolve(root, '/company/index.html'),
        itoshindo: resolve(root, '/itoshindo/index.html')
      }
    }
  },
  /*
    プラグインの設定を追加
  */
  plugins: [
    handlebars({
      //コンポーネントの格納ディレクトリを指定
      partialDirectory: resolve(__dirname, root, 'components'),
      //各ページ情報の読み込み
      context(pagePath) {
        return pageData[pagePath];
      }
    })
  ]
});

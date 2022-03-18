
<div  align="center">

<p>

<img  style="margin-bottom:-6px"  src="https://www6.0zz0.com/2021/09/26/11/756169038.png"/>

<a  href="https://www.npmjs.com/package/azkar/"  alt="azkar"  /></a>

</p>

<p>

<a  href="https://dsc.gg/shuruhatik"><img  src="https://img.shields.io/discord/766364402763956254?color=5865F2&logo=discord&logoColor=white"  alt="Discord server"  /></a>  <a  href="https://www.npmjs.com/package/azkar"><img  src="https://img.shields.io/npm/v/azkar.svg?maxAge=3600"  alt="NPM version"  /></a><a  href="https://www.npmjs.com/package/azkar">  <img  src="https://badgen.net/npm/node/azkar"  alt="Size"  /></a>  <a  href="https://www.npmjs.com/package/azkar"><img  src="https://img.shields.io/npm/dt/azkar.svg?maxAge=3600"  alt="NPM downloads"  /></a>

</p>

</div>

  

## What is the package?
- A package to get Islamic **azkar** and **supplications** easily
- In some azkar and supplications, if he finds an explanation, he will tell you his explanation in three languages: `Arabic`, `English` and `French`.

## Content
- [Installing](#installation)
- [What is the package?](#what-is-the-package)
- [Methods](#methods)
- [Categories of azkar and supplications](#categories-of-azkar-and-supplications)

# Getting Started
## Installation
You can start install the package on your project:
```sh-session
npm install azkar
yarn add azkar
pnpm add azkar
```
Then Start define it like this:
```js
const azkar = require('azkar')
```
or
```js
const { get, random } = require('azkar')
```

# Methods
## get
- To get azkar or supplications randomly within a specific category
#### Parameters:
| Name |Type|Description|
| ------------ | ------------ |------------ |
|  `value`  |object/string| to select a category |

#### Examples
- Example by typing the name of the category
  - [To see the categories](#categories-of-azkar-and-supplications)
```js
let result = azkar.get({category:'أذكار الصباح'})
console.log(result)
// or
let result2 = azkar.get('أذكار الصباح')
console.log(result2)
/*
Output Example:
{
 "Id":  306,
"description":  {
  "arabic":  "من قالها أعتقه الله من النار.",
  "english":  "He who said to God from the fire.",
  "french":  "Celui qui dit à Dieu du feu."
 },
 "number":  "4",
 "zekr":  "اللّهُـمَّ إِنِّـي أَصْبَـحْتُ أُشْـهِدُك ، وَأُشْـهِدُ حَمَلَـةَ عَـرْشِـك ، وَمَلَائِكَتَكَ ، وَجَمـيعَ خَلْـقِك ، أَنَّـكَ أَنْـتَ اللهُ لا إلهَ إلاّ أَنْـتَ وَحْـدَكَ لا شَريكَ لَـك ، وَأَنَّ ُ مُحَمّـداً عَبْـدُكَ وَرَسـولُـك.",
 "reference":  "أبو داود"
}
*/
```
- Example by typing category with id
  - [To see the categories](#categories-of-azkar-and-supplications)
```js
let result = azkar.get({id:1})
console.log(result)
// or
let result2 = azkar.get('1')
console.log(result2)
/*
Output Example:
{
 "Id":  306,
"description":  {
  "arabic":  "من قالها أعتقه الله من النار.",
  "english":  "He who said to God from the fire.",
  "french":  "Celui qui dit à Dieu du feu."
 },
 "number":  "4",
 "zekr":  "اللّهُـمَّ إِنِّـي أَصْبَـحْتُ أُشْـهِدُك ، وَأُشْـهِدُ حَمَلَـةَ عَـرْشِـك ، وَمَلَائِكَتَكَ ، وَجَمـيعَ خَلْـقِك ، أَنَّـكَ أَنْـتَ اللهُ لا إلهَ إلاّ أَنْـتَ وَحْـدَكَ لا شَريكَ لَـك ، وَأَنَّ ُ مُحَمّـداً عَبْـدُكَ وَرَسـولُـك.",
 "reference":  "أبو داود"
}
*/
```
## random
- To get azkar or supplications randomly for all available categories
#### Examples
```js
let result = azkar.random()
console.log(result)
```

# Categories of azkar and supplications
- Total number of categories `134`

| Name Category |ID|
| ------------ | ------------ |
|`أذكار الصباح` | 1 |
|`أذكار المساء` | 2 |
|`أذكار الاستيقاظ من النوم` | 3 |
|`دعاء لبس الثوب` | 4 |
|`دعاء لبس الثوب الجديد` | 5 |
|`ما يقول إذا وضع الثوب` | 6 |
|`دعاء دخول الخلاء - الحمام` | 7 |
|`دعاء الخروج من الخلاء - الحمام` | 8 |
|`الذكر قبل الوضوء` | 9 |
|`الذكر بعد الفراغ من الوضوء` | 10 |
|`الذكر عند الخروج من المنزل` | 11 |
|`الذكر عند دخول المنزل` | 12 |
|`دعاء الذهاب إلى المسجد` | 13 |
|`دعاء دخول المسجد` | 14 |
|`دعاء الخروج من المسجد` | 15 |
|`أذكار الآذان` | 16 |
|`دعاء الاستفتاح` | 17 |
|`دعاء الركوع` | 18 |
|`دعاء الرفع من الركوع` | 19 |
|`دعاء السجود` | 20 |
|`دعاء الجلسة بين السجدتين` | 21 |
|`دعاء سجود التلاوة` | 22 |
|`التشهد` | 23 |
|`الصلاة على النبي بعد التشهد` | 24 |
|`الدعاء بعد التشهد الأخير قبل السلام` | 25 |
|`الأذكار بعد السلام من الصلاة` | 26 |
|`دعاء صلاة الاستخارة` | 27 |
|`أذكار النوم` | 28 |
|`الدعاء إذا تقلب في الليل` | 29 |
|`دعاء الفزع في النوم و من بلي بالوحشة` | 30 |
|`ما يفعل من رأى الرؤيا أو الحلم في النوم` | 31 |
|`دعاء قنوت الوتر` | 32 |
|`الذكر عقب السلام من الوتر` | 33 |
|`دعاء الهم والحزن` | 34 |
|`دعاء الكرب` | 35 |
|`دعاء لقاء العدو و ذي السلطان` | 36 |
|`دعاء من خاف ظلم السلطان` | 37 |
|`الدعاء على العدو` | 38 |
|`ما يقول من خاف قوما` | 39 |
|`دعاء من أصابه وسوسة في الإيمان` | 40 |
|`دعاء قضاء الدين` | 41 |
|`دعاء الوسوسة في الصلاة و القراءة` | 42 |
|`دعاء من استصعب عليه أمر` | 43 |
|`ما يقول ويفعل من أذنب ذنبا` | 44 |
|`دعاء طرد الشيطان و وساوسه` | 45 |
|`الدعاء حينما يقع ما لا يرضاه أو غلب على أمره` | 46 |
|`ﺗﻬنئة المولود له وجوابه` | 47 |
|`ما يعوذ به الأولاد - رقية` | 48 |
|`الدعاء للمريض في عيادته` | 49 |
|`فضل عيادة المريض` | 50 |
|`دعاء المريض الذي يئس من حياته` | 51 |
|`تلقين المحتضر` | 52 |
|`دعاء من أصيب بمصيبة` | 53 |
|`الدعاء عند إغماض الميت` | 54 |
|`الدعاء للميت في الصلاة عليه` | 55 |
|`الدعاء للفرط في الصلاة عليه` | 56 |
|`دعاء التعزية` | 57 |
|`الدعاء عند إدخال الميت القبر` | 58 |
|`الدعاء بعد دفن الميت` | 59 |
|`دعاء زيارة القبور` | 60 |
|`دعاء الريح` | 61 |
|`دعاء الرعد` | 62 |
|`من أدعية الاستسقاء` | 63 |
|`الدعاء إذا نزل المطر` | 64 |
|`الذكر بعد نزول المطر` | 65 |
|`من أدعية الاستصحاء` | 66 |
|`دعاء رؤية الهلال` | 67 |
|`الدعاء عند إفطار الصائم - الصوم` | 68 |
|`الدعاء قبل الطعام` | 69 |
|`الدعاء عند الفراغ من الطعام` | 70 |
|`دعاء الضيف لصاحب الطعام` | 71 |
|`التعريض بالدعاء لطلب الطعام أو الشراب` | 72 |
|`الدعاء إذا أفطر عند أهل بيت - طعام` | 73 |
|`دعاء الصائم إذا حضر الطعام ولم يفطر` | 74 |
|`ما يقول الصائم إذا سابه أحد` | 75 |
|`الدعاء عند رؤية باكورة الثمر` | 76 |
|`دعاء العطاس` | 77 |
|`ما يقال للكافر إذا عطس فحمد الله` | 78 |
|`الدعاء للمتزوج` | 79 |
|`دعاء المتزوج و شراء الدابة` | 80 |
|`الدعاء قبل إتيان الزوجة - الجماع` | 81 |
|`دعاء الغضب` | 82 |
|`دعاء من رأى مبتلى` | 83 |
|`ما يقال في اﻟﻤﺠلس` | 84 |
|`كفارة اﻟﻤﺠلس` | 85 |
|`الدعاء لمن قال غفر الله لك` | 86 |
|`الدعاء لمن صنع إليك معروفا` | 87 |
|`ما يعصم الله به من الدجال` | 88 |
|`الدعاء لمن قال إني أحبك في الله` | 89 |
|`الدعاء لمن عرض عليك ماله` | 90 |
|`الدعاء لمن أقرض عند القضاء` | 91 |
|`دعاء الخوف من الشرك` | 92 |
|`الدعاء لمن قال بارك الله فيك` | 93 |
|`دعاء كراهية الطيرة` | 94 |
|`دعاء الركوب` | 95 |
|`دعاء السفر` | 96 |
|`دعاء دخول القرية أو البلدة` | 97 |
|`دعاء دخول السوق` | 98 |
|`الدعاء إذا تعس المركوب` | 99 |
|`دعاء المسافر للمقيم` | 100 |
|`دعاء المقيم للمسافر` | 101 |
|`التكبير و التسبيح في سير السفر` | 102 |
|`دعاء المسافر إذا أسحر` | 103 |
|`الدعاء إذا نزل مترلا في سفر أو غيره` | 104 |
|`ذكر الرجوع من السفر` | 105 |
|`ما يقول من أتاه أمر يسره أو يكرهه` | 106 |
|`فضل الصلاة على النبي صلى الله عليه و سلم` | 107 |
|`إفشاء السلام` | 108 |
|`كيف يرد السلام على الكافر إذا سلم` | 109 |
|`الدعاء عند سماع صياح الديك ونهيق الحمار` | 110 |
|`دعاء نباح الكلب بالليل` | 111 |
|`الدعاء لمن سببته` | 112 |
|`ما يقول المسلم إذا مدح المسلم` | 113 |
|`ما يقول المسلم إذا زكي` | 114 |
|`كيف يلبي المحرم في الحج أو العمرة ؟` | 115 |
|`التكبير إذا أتى الركن الأسود` | 116 |
|`الدعاء بين الركن اليماني والحجر الأسود` | 117 |
|`دعاء الوقوف على الصفا والمروة` | 118 |
|`الدعاء يوم عرفة` | 119 |
|`الذكر عند المشعر الحرام` | 120 |
|`التكبير عند رمي الجمار مع كل حصاة` | 121 |
|`دعاء التعجب والأمر السار` | 122 |
|`ما يفعل من أتاه أمر يسره` | 123 |
|`ما يقول من أحس وجعا في جسده` | 124 |
|`دعاء من خشي أن يصيب شيئا بعينه` | 125 |
|`ما يقال عند الفزع` | 126 |
|`ما يقول عند الذبح أو النحر` | 127 |
|`ما يقول لرد كيد مردة الشياطين` | 128 |
|`الاستغفار و التوبة` | 129 |
|`التسبيح، التحميد، التهليل، التكبير` | 130 |
|`كيف كان النبي يسبح؟` | 131 |
|`من أنواع الخير والآداب الجامعة` | 132 |
|`الرُّقية الشرعية من القرآن الكريم` | 133 |
|`الرُّقية الشرعية من السنة النبوية` | 134 |

## If you have a problem or have a suggestion,
- Contact With Me Discord: [`Shuruhatik#0001`](https://github.com/shuruhatik)
- [My Github](https://github.com/shuruhatik)

### Server Support

<a  href="https://dsc.gg/shuruhatik"><img  src="https://discord.com/api/guilds/766364402763956254/widget.png?style=banner3"></a>
  

## License

- [CC BY-NC-ND 4.0](https://creativecommons.org/licenses/by-nc-nd/4.0/legalcode)
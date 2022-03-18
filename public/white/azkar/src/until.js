(function() {
  "use strict";
  const azkar = require('./data.json')
  const randomValue = (list) => {
    return list[Math.floor((Math.random() * list.length))];
  }

  const get = (e) => {
    if (!e.category && !e.id) {
      if (!azkar[e]) throw Error("ﻑﺮﻌﻤﻟﺍ ﺍﺬﻫ ﻲﻠﻋ ﻝﻮﺼﺤﻟﺍ ﻊﻴﻄﺘﺴﺗ ﻢﻟ ← ﺭﺎﻛﺫﻷﺍ ﺔﻣﺰﺣ");
      return randomValue(azkar[e])
    }
    if (e.category) {
      if (!azkar[e.category]) throw Error("ﺔﺌﻔﻟﺍ ﻩﺬﻫ ﻲﻠﻋ ﻝﻮﺼﺤﻟﺍ ﻊﻴﻄﺘﺴﺗ ﻢﻟ ← ﺭﺎﻛﺫﻷﺍ ﺔﻣﺰﺣ");
      return randomValue(azkar[e.category])
    } else if (e.id) {
      if (!azkar[e.id]) throw Error("ﻑﺮﻌﻤﻟﺍ ﺍﺬﻫ ﻲﻠﻋ ﻝﻮﺼﺤﻟﺍ ﻊﻴﻄﺘﺴﺗ ﻢﻟ ← ﺭﺎﻛﺫﻷﺍ ﺔﻣﺰﺣ");
      return randomValue(azkar[e.id])
    }
  }

  const random = (e) => {
    let arr = [];
    for (const key in azkar) {
      arr.push(azkar[key]);
    }
    return randomValue(randomValue(arr))
  }


  module.exports = {
    get, random
  }
}).call(this);
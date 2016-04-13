var 
	//mapWidth		= 620;
	mapHeight		= 360;

	shadowWidth		= 2;
	shadowOpacity		= 0.3;
	shadowColor		= "black";
	shadowX			= 1;
	shadowY			= 2;

	iPhoneLink		= true,

	isNewWindow		= false,

	borderColor		= "#ffffff",
	borderColorOver		= "#ffffff",

	nameColor		= "#ffffff",
	nameFontSize		= "11px",
	nameFontWeight		= "bold",
	nameStroke = false,

	overDelay		= 300,

	map_data = {
    st1: {
   	 	id: 1,
		name: "РђРґС‹РіРµСЏ",
		shortname: "",
		link: "",
		comment: "",
		image: "",
		color_map: "#383431", 
		color_map_over: "#366CA3"
	},
    st2: {
   	 	id: 2,
		name: "РђР»С‚Р°Р№",
		shortname: "",
		link: "",
		comment: "",
		image: "",
		color_map: "#383431", 
		color_map_over: "#366CA3"
	},
    st3: {
   	 	id: 3,
		name: "Р‘Р°С€РєРѕСЂС‚РѕСЃС‚Р°РЅ",
		shortname: "",
		link: "",
		comment: "",
		image: "",
		color_map: "#383431", 
		color_map_over: "#366CA3"
	},
    st4: {
   	 	id: 4,
		name: "Р‘СѓСЂСЏС‚РёСЏ",
		shortname: "",
		link: "",
		comment: "",
		image: "",
		color_map: "#383431", 
		color_map_over: "#366CA3"
	},
    st5: {
   	 	id: 5,
		name: "Р”Р°РіРµСЃС‚Р°РЅ",
		shortname: "",
		link: "",
		comment: "",
		image: "",
		color_map: "#383431", 
		color_map_over: "#366CA3"
	},
    st6: {
   	 	id: 6,
		name: "РЎРµРІРµСЂРЅР°СЏ РћСЃРµС‚РёСЏ",
		shortname: "",
		link: "",
		comment: "",
		image: "",
		color_map: "#383431", 
		color_map_over: "#366CA3"
	},
    st7: {
   	 	id: 7,
		name: "РљР°Р±Р°СЂРґРёРЅРѕ-Р‘Р°Р»РєР°СЂРёСЏ",
		shortname: "",
		link: "",
		comment: "",
		image: "",
		color_map: "#383431", 
		color_map_over: "#366CA3"
	},
    st8: {
   	 	id: 8,
		name: "РљР°Р»РјС‹РєРёСЏ",
		shortname: "",
		link: "",
		comment: "",
		image: "",
		color_map: "#383431", 
		color_map_over: "#366CA3"
	},
    st9: {
   	 	id: 9,
		name: "РљР°СЂР°С‡Р°РµРІРѕ-Р§РµСЂРєРµСЃРёСЏ",
		shortname: "",
		link: "",
		comment: "",
		image: "",
		color_map: "#383431", 
		color_map_over: "#366CA3"
	},
    st10: {
   	 	id: 10,
		name: "РљР°СЂРµР»РёСЏ",
		shortname: "",
		link: "",
		comment: "",
		image: "",
		color_map: "#383431", 
		color_map_over: "#366CA3"
	},
    st11: {
   	 	id: 11,
		name: "РљРѕРјРё",
		shortname: "",
		link: "",
		comment: "",
		image: "",
		color_map: "#383431", 
		color_map_over: "#366CA3"
	},
    st12: {
   	 	id: 12,
		name: "РњР°СЂРёР№ Р­Р»",
		shortname: "",
		link: "",
		comment: "",
		image: "",
		color_map: "#383431", 
		color_map_over: "#366CA3"
	},
    st13: {
   	 	id: 13,
		name: "РњРѕСЂРґРѕРІРёСЏ",
		shortname: "",
		link: "",
		comment: "",
		image: "",
		color_map: "#383431", 
		color_map_over: "#366CA3"
	},
    st14: {
   	 	id: 14,
		name: "РЎР°С…Р° (РЇРєСѓС‚РёСЏ)",
		shortname: "",
		link: "",
		comment: "",
		image: "",
		color_map: "#383431", 
		color_map_over: "#366CA3"
	},
    st15: {
   	 	id: 15,
		name: "РРЅРіСѓС€РµС‚РёСЏ",
		shortname: "",
		link: "",
		comment: "",
		image: "",
		color_map: "#383431", 
		color_map_over: "#366CA3"
	},
    st16: {
   	 	id: 16,
		name: "РўР°С‚Р°СЂСЃС‚Р°РЅ",
		shortname: "",
		link: "",
		comment: "",
		image: "",
		color_map: "#383431", 
		color_map_over: "#366CA3"
	},
    st17: {
   	 	id: 17,
		name: "РўС‹РІР°",
		shortname: "",
		link: "",
		comment: "",
		image: "",
		color_map: "#383431", 
		color_map_over: "#366CA3"
	},
    st18: {
   	 	id: 18,
		name: "РЈРґРјСѓСЂС‚РёСЏ",
		shortname: "",
		link: "",
		comment: "",
		image: "",
		color_map: "#383431", 
		color_map_over: "#366CA3"
	},
    st19: {
   	 	id: 19,
		name: "РҐР°РєР°СЃРёСЏ",
		shortname: "",
		link: "",
		comment: "",
		image: "",
		color_map: "#383431", 
		color_map_over: "#366CA3"
	},
    st20: {
   	 	id: 20,
		name: "Р§РµС‡РЅСЏ",
		shortname: "",
		link: "",
		comment: "",
		image: "",
		color_map: "#383431", 
		color_map_over: "#366CA3"
	},
    st21: {
   	 	id: 21,
		name: "Р§СѓРІР°С€РёСЏ",
		shortname: "",
		link: "",
		comment: "",
		image: "",
		color_map: "#383431", 
		color_map_over: "#366CA3"
	},
    st22: {
   	 	id: 22,
		name: "РђР»С‚Р°Р№СЃРєРёР№ РєСЂР°Р№",
		shortname: "",
		link: "",
		comment: "",
		image: "",
		color_map: "#383431", 
		color_map_over: "#366CA3"
	},
    st23: {
   	 	id: 23,
		name: "Р—Р°Р±Р°Р№РєР°Р»СЊСЃРєРёР№ РєСЂР°Р№",
		shortname: "",
		link: "",
		comment: "",
		image: "",
		color_map: "#383431", 
		color_map_over: "#366CA3"
	},
    st24: {
   	 	id: 24,
		name: "РљР°РјС‡Р°С‚СЃРєРёР№ РєСЂР°Р№",
		shortname: "",
		link: "",
		comment: "City name city name<br>City name city name",
		image: "",
		color_map: "#383431", 
		color_map_over: "#366CA3"
	},
    st25: {
   	 	id: 25,
		name: "РљСЂР°СЃРЅРѕРґР°СЂСЃРєРёР№ РєСЂР°Р№",
		shortname: "",
		link: "",
		comment: "",
		image: "",
		color_map: "#383431", 
		color_map_over: "#366CA3"
	},
    st26: {
   	 	id: 26,
		name: "РљСЂР°СЃРЅРѕСЏСЂСЃРєРёР№ РєСЂР°Р№",
		shortname: "",
		link: "",
		comment: "",
		image: "",
		color_map: "#383431", 
		color_map_over: "#366CA3"
	},
    st27: {
   	 	id: 27,
		name: "РџРµСЂРјСЃРєРёР№ РєСЂР°Р№",
		shortname: "",
		link: "",
		comment: "",
		image: "",
		color_map: "#383431", 
		color_map_over: "#366CA3"
	},
    st28: {
   	 	id: 28,
		name: "РџСЂРёРјРѕСЂСЃРєРёР№ РєСЂР°Р№",
		shortname: "",
		link: "",
		comment: "",
		image: "",
		color_map: "#383431", 
		color_map_over: "#366CA3"
	},
    st29: {
   	 	id: 29,
		name: "РЎС‚Р°РІСЂРѕРїРѕР»СЊСЃРєРёР№ РєСЂР°Р№",
		shortname: "",
		link: "",
		comment: "",
		image: "",
		color_map: "#383431", 
		color_map_over: "#366CA3"
	},
    st30: {
   	 	id: 30,
		name: "РҐР°Р±Р°СЂРѕРІСЃРєРёР№ РєСЂР°Р№",
		shortname: "",
		link: "",
		comment: "",
		image: "",
		color_map: "#383431", 
		color_map_over: "#366CA3"
	},
    st31: {
   	 	id: 31,
		name: "РђРјСѓСЂСЃРєР°СЏ РѕР±Р»Р°СЃС‚СЊ",
		shortname: "",
		link: "",
		comment: "",
		image: "",
		color_map: "#383431", 
		color_map_over: "#366CA3"
	},
    st32: {
   	 	id: 32,
		name: "РђСЂС…Р°РЅРіРµР»СЊСЃРєР°СЏ РѕР±Р»Р°СЃС‚СЊ",
		shortname: "",
		link: "",
		comment: "",
		image: "",
		color_map: "#383431", 
		color_map_over: "#366CA3"
	},
    st33: {
   	 	id: 33,
		name: "РђСЃС‚СЂР°С…Р°РЅСЃРєР°СЏ РѕР±Р»Р°СЃС‚СЊ",
		shortname: "",
		link: "",
		comment: "",
		image: "",
		color_map: "#383431", 
		color_map_over: "#366CA3"
	},
    st34: {
   	 	id: 34,
		name: "Р‘РµР»РіРѕСЂРѕРґСЃРєР°СЏ РѕР±Р»Р°СЃС‚СЊ",
		shortname: "",
		link: "",
		comment: "",
		image: "",
		color_map: "#383431", 
		color_map_over: "#366CA3"
	},
    st35: {
   	 	id: 35,
		name: "Р‘СЂСЏРЅСЃРєР°СЏ РѕР±Р»Р°СЃС‚СЊ",
		shortname: "",
		link: "",
		comment: "",
		image: "",
		color_map: "#383431", 
		color_map_over: "#366CA3"
	},
    st36: {
   	 	id: 36,
		name: "Р’Р»Р°РґРёРјРёСЂСЃРєР°СЏ РѕР±Р»Р°СЃС‚СЊ",
		shortname: "",
		link: "",
		comment: "",
		image: "",
		color_map: "#383431", 
		color_map_over: "#366CA3"
	},
    st37: {
   	 	id: 37,
		name: "Р’РѕР»РіРѕРіСЂР°РґСЃРєР°СЏ РѕР±Р»Р°СЃС‚СЊ",
		shortname: "",
		link: "",
		comment: "",
		image: "",
		color_map: "#383431", 
		color_map_over: "#366CA3"
	},
    st38: {
   	 	id: 38,
		name: "Р’РѕР»РѕРіРѕРґСЃРєР°СЏ РѕР±Р»Р°СЃС‚СЊ",
		shortname: "",
		link: "",
		comment: "",
		image: "",
		color_map: "#9aad0d", 
		color_map_over: "#366CA3"
	},
    st39: {
   	 	id: 39,
		name: "Р’РѕСЂРѕРЅРµР¶СЃРєР°СЏ РѕР±Р»Р°СЃС‚СЊ",
		shortname: "",
		link: "",
		comment: "",
		image: "",
		color_map: "#383431", 
		color_map_over: "#366CA3"
	},
    st40: {
   	 	id: 40,
		name: "РРІР°РЅРѕРІСЃРєР°СЏ РѕР±Р»Р°СЃС‚СЊ",
		shortname: "",
		link: "",
		comment: "",
		image: "",
		color_map: "#383431", 
		color_map_over: "#366CA3"
	},
    st41: {
   	 	id: 41,
		name: "РСЂРєСѓС‚СЃРєР°СЏ РѕР±Р»Р°СЃС‚СЊ",
		shortname: "",
		link: "",
		comment: "",
		image: "",
		color_map: "#383431", 
		color_map_over: "#366CA3"
	},
    st42: {
   	 	id: 42,
		name: "РљР°Р»РёРЅРёРЅРіСЂР°РґСЃРєР°СЏ РѕР±Р»Р°СЃС‚СЊ",
		shortname: "",
		link: "",
		comment: "",
		image: "",
		color_map: "#383431", 
		color_map_over: "#366CA3"
	},
    st43: {
   	 	id: 43,
		name: "РљР°Р»СѓР¶СЃРєР°СЏ РѕР±Р»Р°СЃС‚СЊ",
		shortname: "",
		link: "",
		comment: "",
		image: "",
		color_map: "#383431", 
		color_map_over: "#366CA3"
	},
    st44: {
   	 	id: 44,
		name: "РљРµРјРµСЂРѕРІСЃРєР°СЏ РѕР±Р»Р°СЃС‚СЊ",
		shortname: "",
		link: "",
		comment: "",
		image: "",
		color_map: "#383431", 
		color_map_over: "#366CA3"
	},
    st45: {
   	 	id: 45,
		name: "РљРёСЂРѕРІСЃРєР°СЏ РѕР±Р»Р°СЃС‚СЊ",
		shortname: "",
		link: "",
		comment: "",
		image: "",
		color_map: "#383431", 
		color_map_over: "#366CA3"
	},
    st46: {
   	 	id: 46,
		name: "РљРѕСЃС‚СЂРѕРјСЃРєР°СЏ РѕР±Р»Р°СЃС‚СЊ",
		shortname: "",
		link: "",
		comment: "",
		image: "",
		color_map: "#383431", 
		color_map_over: "#366CA3"
	},
    st47: {
   	 	id: 47,
		name: "РљСѓСЂРіР°РЅСЃРєР°СЏ РѕР±Р»Р°СЃС‚СЊ",
		shortname: "",
		link: "",
		comment: "",
		image: "",
		color_map: "#383431", 
		color_map_over: "#366CA3"
	},
    st48: {
   	 	id: 48,
		name: "РљСѓСЂСЃРєР°СЏ РѕР±Р»Р°СЃС‚СЊ",
		shortname: "",
		link: "",
		comment: "<p><strong>РЎРєР»Р°РґС‹ РІ РљСѓСЂСЃРєРѕР№ РѕР±Р»Р°СЃС‚Рё:</strong></p><ul><li>РЎРµР»СЊС…РѕР·С…РёРјРёСЏ РљРѕСЂРµРЅРµРІРѕ,  +7 (47147) 21 987</li><li>РЎРµР»СЊС…РѕР·С…РёРјРёСЏ РџСЂРёСЃС‚РµРЅСЊ, +7 (47134) 22 156    </li><li>РЎРµР»СЊС…РѕР·С…РёРјРёСЏ РљР°СЃС‚РѕСЂРЅРѕРµ, +7 (47157) 21 406    </li><li>РЎРµР»СЊС…РѕР·С…РёРјРёСЏ Р©РёСЂС‹, +7 (47145) 41 415 </li></ul>",
		image: "/map/sklad-kursk.jpg",
		color_map: "#7b8817", 
		color_map_over: "#366CA3"
	},
    st49: {
   	 	id: 49,
		name: "Р›РµРЅРёРЅРіСЂР°РґСЃРєР°СЏ РѕР±Р»Р°СЃС‚СЊ",
		shortname: "",
		link: "",
		comment: "",
		image: "",
		color_map: "#9aad0d", 
		color_map_over: "#366CA3"
	},
    st50: {
   	 	id: 50,
		name: "Р›РёРїРµС†РєР°СЏ РѕР±Р»Р°СЃС‚СЊ",
		shortname: "",
		link: "",
		comment: "",
		image: "",
		color_map: "#383431", 
		color_map_over: "#366CA3"
	},
    st51: {
   	 	id: 51,
		name: "РњР°РіР°РґР°РЅСЃРєР°СЏ РѕР±Р»Р°СЃС‚СЊ",
		shortname: "",
		link: "",
		comment: "",
		image: "",
		color_map: "#383431", 
		color_map_over: "#366CA3"
	},
    st52: {
   	 	id: 52,
		name: "РњРѕСЃРєРѕРІСЃРєР°СЏ РѕР±Р»Р°СЃС‚СЊ",
		shortname: "",
		link: "",
		comment: "",
		image: "",
		color_map: "#383431", 
		color_map_over: "#366CA3"
	},
    st53: {
   	 	id: 53,
		name: "РњСѓСЂРјР°РЅСЃРєР°СЏ РѕР±Р»Р°СЃС‚СЊ",
		shortname: "",
		link: "",
		comment: "",
		image: "",
		color_map: "#383431", 
		color_map_over: "#366CA3"
	},
    st54: {
   	 	id: 54,
		name: "РќРёР¶РµРіРѕСЂРѕРґСЃРєР°СЏ РѕР±Р»Р°СЃС‚СЊ",
		shortname: "",
		link: "",
		comment: "",
		image: "",
		color_map: "#383431", 
		color_map_over: "#366CA3"
	},
    st55: {
   	 	id: 55,
		name: "РќРѕРІРіРѕСЂРѕРґСЃРєР°СЏ РѕР±Р»Р°СЃС‚СЊ",
		shortname: "",
		link: "",
		comment: "<strong>Р¦РµРЅС‚СЂР°Р»СЊРЅС‹Р№ РѕС„РёСЃ  РћРћРћ В«Р•РІСЂРѕС…РёРјСЃРµСЂРІРёСЃВ»</strong><br>Р’РµР»РёРєРёР№ РќРѕРІРіРѕСЂРѕРґ, СѓР». Р”РµСЂР¶Р°РІРёРЅР°, 15<br>+7 (8162) 66 50 88, 66 50 99<br><br><strong> Р¦РµРЅС‚СЂР°Р»СЊРЅС‹Р№ СЃРєР»Р°Рґ  РІ Р’РµР»РёРєРѕРј РќРѕРІРіРѕСЂРѕРґРµ.</strong>",
		image: "/map/sklad-office-novgorod.jpg",
		color_map: "#db4d25", 
		color_map_over: "#366CA3"
	},
    st56: {
   	 	id: 56,
		name: "РќРѕРІРѕСЃРёР±РёСЂСЃРєР°СЏ РѕР±Р»Р°СЃС‚СЊ",
		shortname: "",
		link: "",
		comment: "",
		image: "",
		color_map: "#383431", 
		color_map_over: "#366CA3"
	},
    st57: {
   	 	id: 57,
		name: "РћРјСЃРєР°СЏ РѕР±Р»Р°СЃС‚СЊ",
		shortname: "",
		link: "",
		comment: "",
		image: "",
		color_map: "#383431", 
		color_map_over: "#366CA3"
	},
    st58: {
   	 	id: 58,
		name: "РћСЂРµРЅР±СѓСЂРіСЃРєР°СЏ РѕР±Р»Р°СЃС‚СЊ",
		shortname: "",
		link: "",
		comment: "",
		image: "",
		color_map: "#383431", 
		color_map_over: "#366CA3"
	},
    st59: {
   	 	id: 59,
		name: "РћСЂР»РѕРІСЃРєР°СЏ РѕР±Р»Р°СЃС‚СЊ",
		shortname: "",
		link: "",
		comment: "",
		image: "",
		color_map: "#383431", 
		color_map_over: "#366CA3"
	},
    st60: {
   	 	id: 60,
		name: "РџРµРЅР·РµРЅСЃРєР°СЏ РѕР±Р»Р°СЃС‚СЊ",
		shortname: "",
		link: "",
		comment: "",
		image: "",
		color_map: "#383431", 
		color_map_over: "#366CA3"
	},
    st61: {
   	 	id: 61,
		name: "РџСЃРєРѕРІСЃРєР°СЏ РѕР±Р»Р°СЃС‚СЊ",
		shortname: "",
		link: "",
		comment: "",
		image: "",
		color_map: "#9aad0d", 
		color_map_over: "#366CA3"
	},
    st62: {
   	 	id: 62,
		name: "Р РѕСЃС‚РѕРІСЃРєР°СЏ РѕР±Р»Р°СЃС‚СЊ",
		shortname: "",
		link: "",
		comment: "",
		image: "",
		color_map: "#383431", 
		color_map_over: "#366CA3"
	},
    st63: {
   	 	id: 63,
		name: "Р СЏР·Р°РЅСЃРєР°СЏ РѕР±Р»Р°СЃС‚СЊ",
		shortname: "",
		link: "",
		comment: "",
		image: "",
		color_map: "#383431", 
		color_map_over: "#366CA3"
	},
    st64: {
   	 	id: 64,
		name: "РЎР°РјР°СЂСЃРєР°СЏ РѕР±Р»Р°СЃС‚СЊ",
		shortname: "",
		link: "",
		comment: "",
		image: "",
		color_map: "#383431", 
		color_map_over: "#366CA3"
	},
    st65: {
   	 	id: 65,
		name: "РЎР°СЂР°С‚РѕРІСЃРєР°СЏ РѕР±Р»Р°СЃС‚СЊ",
		shortname: "",
		link: "",
		comment: "",
		image: "",
		color_map: "#383431", 
		color_map_over: "#366CA3"
	},
    st66: {
   	 	id: 66,
		name: "РЎР°С…Р°Р»РёРЅСЃРєР°СЏ РѕР±Р»Р°СЃС‚СЊ",
		shortname: "",
		link: "",
		comment: "",
		image: "",
		color_map: "#383431", 
		color_map_over: "#366CA3"
	},
    st67: {
   	 	id: 67,
		name: "РЎРІРµСЂРґР»РѕРІСЃРєР°СЏ РѕР±Р»Р°СЃС‚СЊ",
		shortname: "",
		link: "",
		comment: "",
		image: "",
		color_map: "#383431", 
		color_map_over: "#366CA3"
	},
    st68: {
   	 	id: 68,
		name: "РЎРјРѕР»РµРЅСЃРєР°СЏ РѕР±Р»Р°СЃС‚СЊ",
		shortname: "",
		link: "",
		comment: "",
		image: "",
		color_map: "#383431", 
		color_map_over: "#366CA3"
	},
    st69: {
   	 	id: 69,
		name: "РўР°РјР±РѕРІСЃРєР°СЏ РѕР±Р»Р°СЃС‚СЊ",
		shortname: "",
		link: "",
		comment: "<p><strong>РЎРєР»Р°РґС‹ РІ РўР°РјР±РѕРІСЃРєРѕР№ РѕР±Р»Р°СЃС‚Рё:</strong></p><ul><li>РЎРµР»СЊС…РѕР·С…РёРјРёСЏ  РўРѕРєР°СЂРµРІРєР°,  +7 (47557) 24 377</li><li>РЎРµР»СЊС…РѕР·С…РёРјРёСЏ  РљРёСЂСЃР°РЅРѕРІ , +7 (47537) 34 483</li></ul>",
		image: "/map/sklad-tambov.jpg",
		color_map: "#7b8817", 
		color_map_over: "#366CA3"
	},
    st70: {
   	 	id: 70,
		name: "РўРІРµСЂСЃРєР°СЏ РѕР±Р»Р°СЃС‚СЊ",
		shortname: "",
		link: "",
		comment: "",
		image: "",
		color_map: "#9aad0d", 
		color_map_over: "#366CA3"
	},
    st71: {
   	 	id: 71,
		name: "РўРѕРјСЃРєР°СЏ РѕР±Р»Р°СЃС‚СЊ",
		shortname: "",
		link: "",
		comment: "",
		image: "",
		color_map: "#383431", 
		color_map_over: "#366CA3"
	},
    st72: {
   	 	id: 72,
		name: "РўСѓР»СЊСЃРєР°СЏ РѕР±Р»Р°СЃС‚СЊ",
		shortname: "",
		link: "",
		comment: "",
		image: "",
		color_map: "#383431", 
		color_map_over: "#366CA3"
	},
    st73: {
   	 	id: 73,
		name: "РўСЋРјРµРЅСЃРєР°СЏ РѕР±Р»Р°СЃС‚СЊ",
		shortname: "",
		link: "",
		comment: "",
		image: "",
		color_map: "#383431", 
		color_map_over: "#366CA3"
	},
    st74: {
   	 	id: 74,
		name: "РЈР»СЊСЏРЅРѕРІСЃРєР°СЏ РѕР±Р»Р°СЃС‚СЊ",
		shortname: "",
		link: "",
		comment: "<p><strong>РЎРєР»Р°Рґ РІ РЈР»СЊСЏРЅРѕРІСЃРєРѕР№ РѕР±Р»Р°СЃС‚Рё:</strong></p><ul><li>РЎРµР»СЊС…РѕР·С…РёРјРёСЏ Р¦РёР»СЊРЅР°, +7 921-029-90-75 </li></ul>",
		image: "/map/sklad-ulyanovsk.jpg",
		color_map: "#7b8817", 
		color_map_over: "#366CA3"
	},
    st75: {
   	 	id: 75,
		name: "Р§РµР»СЏР±РёРЅСЃРєР°СЏ РѕР±Р»Р°СЃС‚СЊ",
		shortname: "",
		link: "",
		comment: "",
		image: "",
		color_map: "#383431", 
		color_map_over: "#366CA3"
	},
    st76: {
   	 	id: 76,
		name: "РЇСЂРѕСЃР»Р°РІСЃРєР°СЏ РѕР±Р»Р°СЃС‚СЊ",
		shortname: "",
		link: "",
		comment: "",
		image: "",
		color_map: "#383431", 
		color_map_over: "#366CA3"
	},
    st77: {
   	 	id: 77,
		name: "РњРѕСЃРєРІР°",
		shortname: "РњРЎРљ",
		link: "",
		comment: "",
		image: "",
		color_map: "#383431", 
		color_map_over: "#366CA3"
	},
    st78: {
   	 	id: 78,
		name: "РЎР°РЅРєС‚-РџРµС‚РµСЂР±СѓСЂРі",
		shortname: "РЎРџР‘",
		link: "",
		comment: "",
		image: "",
		color_map: "#383431", 
		color_map_over: "#366CA3"
	},
    st79: {
   	 	id: 79,
		name: "Р•РІСЂРµР№СЃРєР°СЏ Р°РІС‚РѕРЅРѕРјРЅР°СЏ РѕР±Р»Р°СЃС‚СЊ",
		shortname: "",
		link: "",
		comment: "",
		image: "",
		color_map: "#383431", 
		color_map_over: "#366CA3"
	},
    st80: {
   	 	id: 80,
		name: "РќРµРЅРµС†РєРёР№",
		shortname: "",
		link: "",
		comment: "",
		image: "",
		color_map: "#383431", 
		color_map_over: "#366CA3"
	},
    st81: {
   	 	id: 81,
		name: "РҐР°РЅС‚С‹-РњР°РЅСЃРёР№СЃРєРёР№",
		shortname: "",
		link: "",
		comment: "",
		image: "",
		color_map: "#383431", 
		color_map_over: "#366CA3"
	},
    st82: {
   	 	id: 82,
		name: "Р§СѓРєРѕС‚СЃРєРёР№",
		shortname: "",
		link: "",
		comment: "",
		image: "",
		color_map: "#383431", 
		color_map_over: "#366CA3"
	},
    st83: {
   	 	id: 83,
		name: "РЇРјР°Р»Рѕ-РќРµРЅРµС†РєРёР№",
		shortname: "",
		link: "",
		comment: "",
		image: "",
		color_map: "#383431", 
		color_map_over: "#366CA3"
	},
    st84: {
   	 	id: 84,
		name: "Р РµСЃРїСѓР±Р»РёРєР° РљСЂС‹Рј",
		shortname: "",
		link: "",
		comment: "",
		image: "",
		color_map: "#383431", 
		color_map_over: "#366CA3"
	},
    st85: {
   	 	id: 85,
		name: "РЎРµРІР°СЃС‚РѕРїРѕР»СЊ",
		shortname: "",
		link: "",
		comment: "",
		image: "",
		color_map: "#383431", 
		color_map_over: "#366CA3"
	}
};
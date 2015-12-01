<?php

function get_lang_text($lang_text, $lang)
{
	$lang_key = array_keys($lang_text);

	if(in_array($lang, $lang_key))
	{
		return $lang_text[$lang];
	}

	return $lang_text['en'];
}


function disclaimer($lang = 'en')
{
	$lang_text = array(
		'en' => 'DISCLAIMER - IF YOU ARE NOT A FRENCH SPEAKER PLEASE DO NOT COMPLETE TASKS FOR FRENCH LANGUAGE DOCUMENTS. DUE TO ERRORS BY PREVIOUS TRANSCRIBERS, WE ARE NOT IN A POSITION TO PAY FOR TRANSCRIPTIONS OF FRENCH LANGUAGE DOCUMENTS BY NON-FRENCH SPEAKERS.',
		'fr' => 'AVERTISSEMENT - SI VOUS N’ETES PAS FRANCOPHONE, NOUS VOUS PRIONS DE PAS TRAVAILLER SUR DES DOCUMENTS EN LANGUE FRANCAISE. EN RAISON D’ERREURS COMMISES PAR  DE PRECEDENTS TRANSCRIPTEURS, NOUS NE SOMMES PAS EN MESURE DE PAYER POUR DES TRANSCRIPTS DE DOCUMENTS EN LANGUE FRANCAISE PAR DES NON FRANCOPHONES.'
		);

	return get_lang_text($lang_text, $lang);
}


function other_instructions($lang='en')
{
	$lang_text = array(
				'en' => '<h4>Other instructions for transcribers: </h4>
		            <ol>
						<li>Original letters and accents should be preserved (for example for French language contracts, the letters / symbols “œ” and “æ” and the following accents should be transcribed: à ç è é ê ö).</li>
						<li>Original symbols should be transcribed where possible (for example: ° as used in “N°”, or in coordinates like “53°14’477’’).</li>
						<li>For non-transcribed objects such as maps, photos or illegible signatures, please provide a bracketed entry (for example: [map], [photo] or [signature]).</li>
						<li>If you can read the handwritten signature, or any other handwriting, please transcribe it</li>
						<li>Tables should be transcribed with pipes ( | ) as separators (for example: “Royalties | 10% | 12% | 15%”).</li>
						<li>Please include any typed page numbers or other document references that appear on the page.</li>
						<li>Please include a single space only between each Article of the contract.</li>
		            </ol>',
				'fr' => '<h4>Autres instructions pour les transcripteurs:</h4>
					<ol>
						<li>Les lettres et accents originaux doivent être présevrés (par exemple pour les contrats en langue française, les lettres / symboles “œ” et “æ” ainsi que les accents suivants doivent être retranscrits: à ç è é ê ö).</li>
						<li>Les symboles originaux doivent, dans la mesure du possible, être retranscrits (par exemple: ° utilisé dans “N°”, ou dans des coordonnées comme “53°14’477”).</li>
						<li>Pour les objets non retranscrits tels les cartes, photos ou des signatures illisibles, nous vous prions de bien vouloir utiliser des crochets (par exemple: [carte], [photo], [signature])</li>
						<li>Si vous pouvez lire la signature manuscrite, ou toute autre écriture, nous vous prions de la/les retranscrire.</li>
						<li>Les tableaux doivent être retranscrits avec des tubes ( | ) comme séparateurs (par exemple: “Redevances  | 10%  | 12%  | 15 % “).</li>
						<li>Nous vous prions d’inclure tout numéro de pages dactylographiés ou autres références à des documents qui apparaissent sur la page</li>
						<li>Nous vous prions d’utiliser un interligne simple seulement entre les articles du contrat.
					</ol>'
			);


	return get_lang_text($lang_text, $lang);
}


function show_language($lang='en')
{
	$lang_list = ['en' => "English", 'fr' => "French", 'pt' => 'Portuguese', 'es' => 'Spanish', 'aa' => 'Afar', 'ab' => 'Abkhazian', 'ae' => 'Avestan', 'af' => 'Afrikaans', 'ak' => 'Akan', 'am' => 'Amharic', 'an' => 'Aragonese', 'ar' => 'Arabic', 'as' => 'Assamese', 'av' => 'Avaric', 'ay' => 'Aymara', 'az' => 'Azerbaijani', 'ba' => 'Bashkir', 'be' => 'Belarusian', 'bg' => 'Bulgarian', 'bh' => 'Bihari', 'bi' => 'Bislama', 'bm' => 'Bambara', 'bn' => 'Bengali', 'bo' => 'Tibetan', 'br' => 'Breton', 'bs' => 'Bosnian', 'ca' => 'Catalan', 'ce' => 'Chechen', 'ch' => 'Chamorro', 'co' => 'Corsican', 'cr' => 'Cree', 'cs' => 'Czech', 'cv' => 'Chuvash', 'cy' => 'Welsh', 'da' => 'Danish', 'de' => 'German', 'dv' => 'Divehi', 'dz' => 'Dzongkha', 'ee' => 'Ewe', 'el' => 'Greek', 'eo' => 'Esperanto', 'es' => 'Spanish', 'et' => 'Estonian', 'eu' => 'Basque', 'fa' => 'Persian', 'ff' => 'Fulah', 'fi' => 'Finnish', 'fj' => 'Fijian', 'fo' => 'Faroese', 'fy' => 'Western Frisian', 'ga' => 'Irish', 'gd' => 'Gaelic', 'gl' => 'Galician', 'gn' => 'Guarani', 'gu' => 'Gujarati', 'gv' => 'Manx', 'ha' => 'Hausa', 'he' => 'Hebrew', 'hi' => 'Hindi', 'ho' => 'Hiri Motu', 'hr' => 'Croatian', 'ht' => 'Haitian', 'hu' => 'Hungarian', 'hy' => 'Armenian', 'hz' => 'Herero', 'id' => 'Indonesian', 'ig' => 'Igbo', 'ii' => 'Sichuan Yi', 'ik' => 'Inupiaq', 'io' => 'Ido', 'is' => 'Icelandic', 'it' => 'Italian', 'iu' => 'Inuktitut', 'ja' => 'Japanese', 'jv' => 'Javanese', 'ka' => 'Georgian', 'kg' => 'Kongo', 'ki' => 'Kikuyu', 'kj' => 'Kuanyama', 'kk' => 'Kazakh', 'kl' => 'Kalaallisut', 'km' => 'Central Khmer', 'kn' => 'Kannada', 'ko' => 'Korean', 'kr' => 'Kanuri', 'ks' => 'Kashmiri', 'ku' => 'Kurdish', 'kv' => 'Komi', 'kw' => 'Cornish', 'ky' => 'Kirghiz', 'la' => 'Latin', 'lb' => 'Luxembourgish', 'lg' => 'Ganda', 'li' => 'Limburgan', 'ln' => 'Lingala', 'lo' => 'Lao', 'lt' => 'Lithuanian', 'lu' => 'Luba-Katanga', 'lv' => 'Latvian', 'mg' => 'Malagasy', 'mh' => 'Marshallese', 'mi' => 'Maori', 'mk' => 'Macedonian', 'ml' => 'Malayalam', 'mn' => 'Mongolian', 'mr' => 'Marathi', 'ms' => 'Malay', 'mt' => 'Maltese', 'my' => 'Burmese', 'na' => 'Nauru', 'nb' => 'Norwegian', 'nd' => 'Ndebele', 'ne' => 'Nepali', 'ng' => 'Ndonga', 'nl' => 'Dutch', 'nn' => 'Norwegian Nynorsk', 'no' => 'Norwegian', 'nr' => 'Ndebele, South', 'nv' => 'Navajo', 'ny' => 'Chichewa', 'oc' => 'Occitan', 'oj' => 'Ojibwa', 'om' => 'Oromo', 'or' => 'Oriya', 'os' => 'Ossetian', 'pa' => 'Panjabi', 'pi' => 'Pali', 'pl' => 'Polish', 'ps' => 'Pushto', 'qu' => 'Quechua', 'rm' => 'Romansh', 'rn' => 'Rundi', 'ro' => 'Romanian', 'ru' => 'Russian', 'rw' => 'Kinyarwanda', 'sa' => 'Sanskrit', 'sc' => 'Sardinian', 'sd' => 'Sindhi', 'se' => 'Northern Sami', 'sg' => 'Sango', 'si' => 'Sinhala', 'sk' => 'Slovak', 'sl' => 'Slovenian', 'sm' => 'Samoan', 'sn' => 'Shona', 'so' => 'Somali', 'sq' => 'Albanian', 'sr' => 'Serbian', 'ss' => 'Swati', 'st' => 'Sotho, Southern', 'su' => 'Sundanese', 'sv' => 'Swedish', 'sw' => 'Swahili', 'ta' => 'Tamil', 'te' => 'Telugu', 'tg' => 'Tajik', 'th' => 'Thai', 'ti' => 'Tigrinya', 'tk' => 'Turkmen', 'tl' => 'Tagalog', 'tn' => 'Tswana', 'to' => 'Tonga (Tonga Islands)', 'tr' => 'Turkish', 'ts' => 'Tsonga', 'tt' => 'Tatar', 'tw' => 'Twi', 'ty' => 'Tahitian', 'ug' => 'Uighur', 'uk' => 'Ukrainian', 'ur' => 'Urdu', 'uz' => 'Uzbek', 've' => 'Venda', 'vi' => 'Vietnamese', 'vo' => 'Volapük', 'wa' => 'Walloon', 'wo' => 'Wolof', 'xh' => 'Xhosa', 'yi' => 'Yiddish', 'yo' => 'Yoruba', 'za' => 'Zhuang', 'zh' => 'Chinese', 'zu' => 'Zulu'];

	$language = 'English';

    if(array_key_exists($lang, $lang_list))
	{
		$language = $lang_list[$lang];
	}

	return sprintf(" in <strong>%s</strong>", $language);
}
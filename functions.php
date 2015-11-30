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
		                <li>Original letters and accents should be preserved (for example for French language contracts, the letter/ symbols “œ” and “æ” and the following accents should be transcribed: à ç è é ê ö)</li>
		                <li>Original symbols should be transcribed where possible (for example: ° as used in “N°”, or in coordinates like 53°14’477’’)</li>
		                <li>For non-transcribed objects such as maps, photos or illegible signatures, please provide a bracketed entry (for example: [map], [photo] or [signature])</li>
		                <li>If you can read the handwritten signature, or any other handwriting, please transcribe it</li>
		                <li>Tables should be transcribed with pipes ( | ) as separators (for example: “Royalties | 10% | 12% | 15%”)</li>
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
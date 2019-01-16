<?php

use Illuminate\Database\Seeder;

class TeamsTableSeeder extends Seeder{
	    /**
	     * Run the database seeds.
	     *
	     * @return void
	     */
	public function run(){
		
		$team = new \App\Models\Bets\Team([
			'id_country'=> '1',
			'name'=> 'Vega Squadron',
			'logo'=>'https://svirtus.cdnvideo.ru/rxR_yDi_9-ryAZgIygSXhg2iGpk=/0x0:193x200/150x150/filters:quality(95)/https://s3.eu-central-1.amazonaws.com/esports-core-media/a2/a27ee8b7be19861a055ec55f891df6e5.png?m=d5cdc8c0f447650aab72eb8cb75495be',
			'date_foundation'=> '2015',
			'site'=> 'http://www.vega-squadron.com',
			'description' => 'Коллектив  собранный из русскоязычных игроков  которые ранее не достигали никаких успехов на мировой арене. Собравшись вместе  они стали регулярно и достойно выступать на ланах в пределах СНГ занимая призовые места и побеждая турнирах  где они принимали участие.',
			'amount_prize' => '190829',
			]);
			$team->save();
		
		
		$team = new \App\Models\Bets\Team([
			'id_country'=> '1',
			'name'=> 'HOLLYWOOD ',
			'logo'=>'https://www.cybersport.ru/assets/img/no-photo/no-photo-cs-go.png?v=8f26aaa23a8dabb2018726becec391c1',
//			'date_foundation'=> '2000',
//			'site'=> 'http://www.site.com',
			'description' => 'HOLLYWOOD',
			]);
			$team->save();
			
			
			$team = new \App\Models\Bets\Team([
			'id_country'=> '2',
			'name'=> 'ArkAngel Pro Team ',
			'logo'=>'https://www.cybersport.ru/assets/img/no-photo/no-photo-cs-go.png?v=8f26aaa23a8dabb2018726becec391c1',
//			'date_foundation'=> '2000',
//			'site'=> 'http://www.site.com',
			'description' => 'ArkAngel Pro Team',
//			'amount_prize' => '190 829',
			]);
			$team->save();
			
			
				$team = new \App\Models\Bets\Team([
			'id_country'=> '2',
			'name'=> 'Virtus.pro',
			'logo'=>'https://svirtus.cdnvideo.ru/cp_aznRQaN771iaQEXyL51xVrzI=/0x0:600x600/150x150/filters:quality(95)/https://s3.eu-central-1.amazonaws.com/esports-core-media/77/771956d53cac11d8c5466e17cb39f7ee.png?m=a6a9dee279f4deb23033ed1bf875237c',
			'date_foundation'=> '2014',
			'site'=> 'http://virtus.pro',
			'description' => 'Польская команда подписана организацией Virtus.pro в конце января 2014 года. Состав был известен под тегами AGAiN и Universal Soldiers. Костяк команды составляют три бывших игрока популярной в свое время команды ESC Gaming  а именно NEO  TaZ и pasha. Именно эти игроки выиграли титулы чемпионов мира в дисциплине CS1.6 по версии WCS и IEM в 2011-2012 годах. В команде не происходило серьезных изменений на протяжении всего 2014 года   лишь иногда  коллектив выручал MICHU   выступая стендином. В начале 2015 года к команде в качестве тренера присоединился kuben   однако это не помогло полякам выиграть второй ESL One в Катовице подряд.',
			'amount_prize' => '2742009',
			]);
			$team->save();
			
			
			
			
				$team = new \App\Models\Bets\Team([
			'id_country'=> '3',
			'name'=> 'AVANGAR',
			'logo'=>'https://svirtus.cdnvideo.ru/OcfyRPKOd_DFF8_Vvkl2ZzwVeEY=/0x0:250x250/150x150/filters:quality(95)/https://s3.eu-central-1.amazonaws.com/esports-core-media/69/696957b4cbae63bc49bee29a0ac279b3.png?m=b886ea18148c27f8a20148e4d2915483',
			'date_foundation'=> '2017',
//			'site'=> 'http://virtus.pro',
			'description'=> 'Молодая организация из Казахстана AVANGAR подписала свой первый состав в дисциплине CS:GO в июле 2017 года. Им стал микс  ранее выступавший под тегом LoG. Старт оказался неплохим - победа на нескольких небольших турнирах и на CIS Minor Championship - Boston 2018   которая дала коллективу шанс побороться за выход на ELEAGUE Major: Boston 2018. ',
			'amount_prize' => '47935',
			]);
			$team->save();
			
			
			
			
				$team = new \App\Models\Bets\Team([
			'id_country'=> '4',
			'name'=> 'SK Gaming',
			'logo'=>'https://svirtus.cdnvideo.ru/KptgqRHoWzSZxyQou2A_HJfkjEQ=/0x0:280x280/150x150/filters:quality(95)/https://s3.eu-central-1.amazonaws.com/esports-core-media/61/615bef0d0eb8d3488e0c500b90dcddcc.png?m=a0525e6544891e5dae66eb742a096769',
			'date_foundation'=> '2013',
			'site'=> 'http://sk-gaming.com',
			'description'=> 'Первый состав SK Gaming появился еще в дисциплине CS 1.6. С 2002 по 2011 годы команде периодически удавалось выигрывать золото на турнирах. Когда на сцене появилась CS:GO в октябре 2013 года был подписан щведский ростер, игравший ранее за Lemondogs. Коллектив со временем претерпел сильные изменения, но за отсутствием результата был распущен в июле 2014 года. ',
			'amount_prize' => '3397477',
			]);
			$team->save();
			
			
			
				$team = new \App\Models\Bets\Team([
			'id_country'=> '5',
			'name'=> 'FaZe Clan',
			'logo'=> 'https://svirtus.cdnvideo.ru/hGovKtgSvXGdbVFyDImExy8l0xs=/0x0:280x280/150x150/filters:quality(95)/https://s3.eu-central-1.amazonaws.com/esports-core-media/41/41d78d10afe152c254708b6330deaeee.png?m=b131762402ea7ca2ce28336164b71c9b',
			'date_foundation'=> '2016',
			'description'=> 'FaZe Clan — довольно знаменитая североамериканская организация, которая известна своим составом по Call of Duty. 20 января FaZe Clan выкупили за 700 тысяч долларов состав по Counter-Strike: Global Offensive у организации G2 Esports. Спустя примерно три недели — 9 февраля — у них, как и у многих других коллективов в мире по CS:GO, появился свой тренер в лице Роберта «RobbaN» Дальстрёма. Роберт известен многим ещё по CS 1.6, однако к версии Global Offensive он так и не смог адаптироваться, в связи с чем пропал из поля зрения сообщества.',
			'amount_prize' => '2075500',
			]);
			$team->save();
		
		
		$team = new \App\Models\Bets\Team([
			'id_country'=> '6',
			'name'=> 'Natus Vincere',
			'logo'=> 'https://svirtus.cdnvideo.ru/a4drCYzjzfJiotGuBGIagKixqpE=/0x0:280x280/150x150/filters:quality(95)/https://s3.eu-central-1.amazonaws.com/esports-core-media/1d/1d40e282bdbcc63323498a8d89f1f24b.png?m=bdc531a63f9e60c9e2ce89c1ef2b3c652012',
			'date_foundation'=> '2012',
			'site'=> 'http://navi-gaming.com',
			'description'=> 'Состав NaVi по Counter-Strike 1.6 считался одним из сильнейших в мире. Осенью 2012 года, перед стартом четвертого сезона StarSeries, Natus Vincere перешли на новую дисциплину. Первое время переход давался игрокам тяжело, и на финалы SLTV они попасть не смогли. Но постепенно NaVi удалось вернуться в число лучших команд по CS. В июле 2013 года, спустя три с половиной года, у NaVi впервые произошли изменения в составе - Markeloff и Edward покинули коллектив ради новой организации. Позже Edward вернулся в Natus Vincere. В 2013 году ростер пополнился словацким снайпером - GuardiaN\'ом, а kibaken и ceh9 покинули стан «рожденных побеждать».
								В начале 2015 года игровой состав покинул и starix, перешедший на роль тренера команды. Вместо него в коллектив был принят молодой российский игрок flamie, ранее выступавший за HellRaisers.
								В августе 2016 года произошло знаковое событие - ветеран команды Zeus принял решение уйти в инактив. На его место был привлечен молодой, но уже зарекомендовавший себя на про-сцене игрок - s1mple. В августе 2017 года Zeus вернулся в команду.
								',
			'amount_prize' => '1779282',
		]);
		$team->save();
		
		
		$team = new \App\Models\Bets\Team([
			'id_country'=> '7',
			'name'=> 'Cloud9',
			'logo'=> 'https://svirtus.cdnvideo.ru/XNyiFh6Vq6vSHmTJGJfEoaUgRio=/0x0:600x600/150x150/filters:quality(95)/https://s3.eu-central-1.amazonaws.com/esports-core-media/3d/3d89641c4a3eed7e1cc522ae700f4785.png?m=9e5adc1088e3cb23f7a60565e74892df',
			'date_foundation'=> '2014',
			'site'=> 'http://cloud9.gg',
			'description'=> 'Состав Cloud9 в дисциплине CS:GO сформировался в июле 2014 года, когда организация переманила к себе представителей compLexity Gaming. Игроки пошли на этот шаг из-за неудовлетворительного финансового положения в compLexity, поскольку организация позволяла себе забирать большие проценты даже с вырученных денег от продаж стикеров во время major-турниров. состав подвергался частым заменам. В апреле 2015 года в команду пришли Skadoodle и fREAKAZOiD, которые прекрасно влились в новый коллектив и помогли Cloud9 войти в мировую когорту команд. Летний период 2015 года стал самым успешным в истории команды: они заняли ряд призовых мест на самых крупных чемпионатах, таких как ESL ESEA Pro League Season I Finals и ESWC 2015. Однако вскоре у команды снова случился некий кризис, и в конце 2015 года было объявлено о том, что именитый капитан Cloud9 — sgares — покидает состав. На его место был взят малоизвестный игрок Stewie2k, ранее выступавший за команду Splyce. Это не сильно помогло коллективу. После изменения составе они смогли победить только на ESL Pro League Season 4 - Finals в октябре 2016 года.',
			'amount_prize' => '1718681',
		]);
		$team->save();
		
		
		
		
		$team = new \App\Models\Bets\Team([
			'id_country'=> '8',
			'name'=> 'Team EnVyUs',
			'logo'=> 'https://svirtus.cdnvideo.ru/IirgLiq_hi-L1tP40OxukjaQsrw=/0x0:280x280/150x150/filters:quality(95)/https://s3.eu-central-1.amazonaws.com/esports-core-media/7b/7ba24965fc50c357732c25724d666d87.png?m=b95b32d2397be3407db37fce05db7a08',
			'date_foundation'=> '2015',
			'site'=> 'http://www.teamenvyus.com',
			'description'=> 'Экс-состав команды Team LDLC. В начале февраля 2015 года после победы на MLG X-Games Aspen invitational игроки перешли из-под знамён старой организации в EnVyUs. До лета коллектив показывал довольно неплохие результаты и стал чемпионом в ряде престижных мероприятий. Тем не менее после провального выступления на финалах ESL ESEA Season 1 EnVyUs прибегли к изменениям в составе: Shox и SmithZz перешли в Titan  а на их место прибыл дуэт в лице KennyS и apEX. Изменения пошли на пользу Team EnvyUs  и они выиграли немало крупных турниров  среди которых major-ивент DreamHack Open Cluj-Napoca 2015. Французский коллектив по праву является одним из сильнейших в мире.',
			'amount_prize' => '1767972',
		]);
		$team->save();
		
		
		$team = new \App\Models\Bets\Team([
			'id_country'=> '3',
			'name'=> 'Gambit Esports',
			'logo'=> 'https://svirtus.cdnvideo.ru/X7gvgdliL2TzGZAYgqXRWwGCKf0=/0x0:250x250/150x150/filters:quality(95)/https://s3.eu-central-1.amazonaws.com/esports-core-media/2c/2c209b41bf4e4b80a623e9e53d90d28b.png?m=044e88b95660eca58bffd8ba8f31dd2d ',
			'date_foundation'=> '2016',
			'site'=> 'http://ru.gambit.gg/',
			'description'=> 'Команда образована в результате открытия Gambit Gaming подразделения по CS:GO. В состав вошли все известные российские игроки   которые успели поиграть вместе. Перед составом были поставлены амбициозные цели: войти в топ-10 лучших команд мира по итогам 2016 года. Для достижения высоких результатов коллектив планирует участвовать на всех крупных турнирах. На своём первом мейджоре в марте 2016 года Gambit eSports заняла лишь 9-12 место  но смогла пройти квалификации ESL One Cologne 2016.  В июле 2017 года коллектив сенсационно победил на PGL Major Krak?w 2017.',
			'amount_prize' => '1000045',
		]);
		$team->save();
		
		
		
		}
}

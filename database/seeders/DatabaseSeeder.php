<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Category;
use App\Models\News;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
	/**
	 * Seed the application's database.
	 */
	public function run(): void
	{
		// \App\Models\User::factory(10)->create();

		// Category::create([
		// 	'name'=> 'სპორტი',
		// ]);

		// \App\Models\User::factory()->create([
		//     'name' => 'Test User',
		//     'email' => 'test@example.com',
		// ]);

		// DB::table('news')->truncate();

		// DB::table('category_news')->truncate();
		// DB::table('categories')->truncate();
		// DB::table('news')->truncate();

		$politicNews1 = News::create(['title'=> '"უკრაინაში რადგან ომი და უბედურებაა, ამის გამო თურმე..." - რას ამბობს ღარიბაშვილი?', 'thumbnail'=>'\thumbnails\irakli-garibashvili.jpg', 'body'=>'საქართველოს პრემიერ-მონისტრი, ირაკლი ღარიბაშვილი უკრაინის ომზე და საქართველოზე საუბრობს:

        "ჩვენ თანავუგრძნობთ უკრაინელებს, ყველას გვინდა, ეს უბედურება დასრულდეს მალე. 
        
        უკრაინაში რადგან ომი და უბედურებაა, ამის გამო თურმე ჩვენ უნდა ჩავყვეთ, გავნადგურდეთ, მეორე ფრონტი უნდა იყოს, ჩვენი ქალაქები დაიბომბოს, პოლიგონად გადაიქცეს და ქართველ ხალხს არ უნდა მიეცეს ამოსუნთქვის საშუალება. ლოგიკა სად არის", - ამბობს ღარიბაშვილი.
        
        შეგახსენებთ, რომ რუსეთის შეჭრა უკრაინაში დაიწყო 2022 წლის 24 თებერვალს. 
        
        შეჭრამ გამოიწვია ევროპის უდიდესი დევნილთა კრიზისი, 6.4 მილიონზე მეტმა უკრაინელმა დატოვა ქვეყანა და ქვეყნის მოსახლეობის მესამედი იძულებით გადაადგილებული პირი გახდა.']);

		$politicNews2 = News::create(['title'=> 'სააკაშვილი: პუტინი ამ ნაბიჯით თბილისში ჯარის შემოყვანისთვის საფუძველს ამზადებს', 'thumbnail'=>'/thumbnails/saaka.jpg', 'body'=>'საქართველოს ექს-პრეზიდენტი მიხეილ სააკაშვილი სოციალურ ქსელში პოსტს აქვეყნებს და რუსეთის მიერ საქართველოს მოქალაქეებისთვის სავიზო რეჟიმის გაუქმებას ეხმაურება.

        "პუტინს ჩემზე უკეთ საქართველოში არავინ იცნობს. გუშინდელი მისი ნაბიჯით, ის ქართველების კეთილგანწყობის მოპოვებას კი არ ცდილობს, არამედ თბილისში ჯარის შემოყვანისთვის საფუძველს ამზადებს. მას დღემდე ვერ უპატიებია ჩემთვის და ქართველი ხალხისთვის 2008 წელს რომ ეს ვერ შეძლო.
        
        რა თქმა უნდა, ის არ დაელოდება კანდიდატის სტატუსის მინიჭების გადაწყვეტილებას, არამედ მანამდე, ბევრად უფრო სწრაფად იმოქმედებს.
        
        ამიტომ, ახლა როგორც არასდროს, ჩვენ გვჭირდება მთელი საზოგადოების კონსოლიდაციის დემონსტრაცია, რათა მან დაინახოს, რომ აქ არ ელის ადვილი გასეირნება.
        
        Ps. რაც შეეხება ჩემს ჯანმრთელობას, ყოველდღე მაქვს 160/100 წნევა, 38°C სიცხე, გრძელდება წონის კლება და უკვე ყოველდღე ხდება სისხლის პლაზმის გადასხმა საჭირო იმიტომ, რომ სერიოზული პრობლემებია სისხლის ანალიზებში.
        
        ამას აქ იმიტომ ვწერ, რომ ჩემს ადვოკატებს აფერხებენ ჯანმრთელობის იმ დოკუმენტაციის მოპოვებაში, რაც კანონით გვეკუთვნის. გვისახელებენ აბსურდულ მიზეზებს, როგორიცაა თანამშრომლის შვებულებაში ყოფნა.
        
        გვაფერხებენ, რათა ვერ შევძლოთ საბუთების დროულად წარდგენა სტრასბურგში, ამავე მიზნით არ უშვებენ ევროკავშირის ექიმთა ჯგუფს, რომელიც ევროკავშირის 27 ქვეყნის მანდატით აღჭურვილი უკვე თვეების განმავლობაში მზადაა ჩამოვიდეს და ჩაერთოს ჩემი ჯანმრთელობის საკითხში", - წერს სააკაშვილი.']);

		$politicNews3 = News::create(['title'=> '"საქართველოში ჩამოსვლას ვაპირებდი, მაგრამ ამერიკელებმა გამაფრთხილეს, რომ..." - რა განცხადებას აკეთებს დავით არახამია', 'thumbnail'=>'/thumbnails/araxamia.jpg', 'body'=>'უკრაინის რადას წევრმა და ფრაქცია "ხალხის მსახურის" თავმჯდომარემ დავით არახამიამ მთავარ არხთან ინტერვიუში განაცხადა, რომ საქართველოში ჩამოსვლა სურდა.

        კერძოდ, მას საქართველოს სტუმრობა მაშინ სურდა, როცა ვახტანგ კიკაბიძე გარდაიცვალა და ჩამოსვლას სწორედ მის დაკრძალვაზე გეგმავდა, მაგრამ ამერიკელების გაფრთხილების შემდეგ ეს აღარ გააკეთა. შეგახსენებთ, რომ მსახიობი და მომღერალი ბუბა კიკაბიძე 15 იანვარს გარდაიცვალა.']);

		$politicNews4 = News::create(['title'=> '“340 ლარს მიიღებს ყველა ყოველ თვე ვინც არის…” – ხართ თუ არა სიაში და როგორ შეძლებთ დახმარების მიღებას', 'thumbnail'=>'/thumbnails/fuladi.jpg', 'body'=>'ჯანდაცვისა და სოციალური პროგრამების დაფინანსება 770 მილიონი ლარით იზრდება. ბიუჯეტში შესატანი ცვლილებები პრემიერ-მინიტრმა დააანონსა.

        ბიუჯეტში გათვალისწინებულია და იანვრიდან პირველი ჯგუფის შშმ პირები 275 ნაცვლად 340 ლარს მიიღებენ, მე-2 ჯგუფის 140 ნაცვლად 175-ს , მე-3 ჯგუფში შემავალი ჯანმრთელობის სტატუსის მქონე პირები თუ დღემდე 100 ლარს იღებდნენ, ბიუჯეტის გაზრდის პარალელურად მათი შემოსავალი 135 ლარი იქნება.
        
        ექსპერტები ამბობენ, რომ ბიუჯეტში თანხების მობილიზება ქვეყანაში ეკონომიკურმა ზრდის მაჩვენებელმა გამოიწვია. სპეციალისტების შეფასებით მთავრობა პრიორიტეტებს არ ცვლის და მომდევნო წელიც პოზიტიურად დაიგეგმა.
        
        გასამმაგდა სოციალურად დაუცველი ბავშვებისთვის გამოყოფილი თანხების ოდენობა, 50 ლარი უკვე 150 გახდა. არ გამორიცხავენ ბიუჯეტის ზრდასთან ერთად ამ მიმართულებით დამატებით ფინანსების მობილიზებაც მოხდეს.
        
        2023 ბიუჯეტში თანხები დევნილთა სახლების მშენებლობებისთვისაც არის გათვალისწინებული პრემიერ მინისტრმა უკვე დააანონსა, რომ 7000 ბინაზე გათვლილი საცხოვრებელი კომპლექსის მშენებლობა მალე დაიწყება, რისთვისაც 250 მილიონი ლარი დაიხარჯება.']);

		$politicNews5 = News::create(['title'=> '"პუტინს ეს ფრენები სჭირდება სანქცირებული შავი ფულისა და ოქროსა გადასატანად" - ხაბეიშვილი', 'thumbnail'=>'/thumbnails/xabe.jpg', 'body'=>'ერთიანი ნაციონალური მოძრაობის თავმჯდომარე ლევან ხაბეიშვილი რუსეთიდან აღდგენილ პირდაპირ ფრენებს სოციალურ ქსელში ეხმაურება. 

		"პუტინს, ეს ფრენები სჭირდება, სანქცირებული შავი ფულის - "ქეშის", სანქცირებული ოქროსა და სამხედრო დანიშნულების ჩიპების სამოძრაოდ, გადასატანად ... მოსკოვი - თბილისი ავტომობილით რამდენიმე დღე და ხიფათია ...
		
		რომ არ იწვალონ, ასე პირდაპირ შემოიტანენ ნებისმიერ ვალუტას, ოქროს და აქ დაფუძნებული კომპანიებით, ინდივიდუალური მეწარმეებით, ფიზიკური პირებით იოლად "გაათეთრებენ" ...']);

		// sazogadoebis siaxleebi
		$societyNews1 = News::create(['title'=> '"შოკში ჩავარდებით, რო გაიგებთ, ვინ არის ჩემი დუეტ პარტნიორი" - ნუცა ბუზალაძის უახლესი განცხადება', 'thumbnail'=>'/thumbnails/buza.jpg', 'body'=>'ნუცა ბუზალაძის თქმით, ის American idol-ის ფინალში დუეტში იმღერებს.

		"ძალიან აღელვებული ვარ იმ სიურპრიზით, რომელიც ფინალში გელოდებათ. შოკში ჩავარდებით, როცა გაიგებთ ვინ არის ჩემი დუეტის პარტნიორი...“, - წერს ნუცა ბუზალაძე.
		
		მომღერალი ჯერჯერობით გულშემატკივარს არ უმხელს ინფორმაციას, ვისთან ერთად იქნება დუეტში.  
		
		შეგახსენებთ, რომ ნუცა პროექტს უკვე გამოეთიშა, თუმცა ფინალში მაინც ვიხილავთ.']);

		$societyNews2 = News::create(['title'=> '"დედას ბოდიშს მოვუხდიდი, ამას არ ვეუბნებოდი ხშირად" - მედეა ჩახავას 102 წელი შეუსრულდებოდა ', 'thumbnail'=>'/thumbnails/medea.jpg', 'body'=>'ნუცა ბუზალაძის თქმით, ის American idol-ის ფინალში დუეტში იმღერებს.

		"ძალიან აღელვებული ვარ იმ სიურპრიზით, რომელიც ფინალში გელოდებათ. შოკში ჩავარდებით, როცა გაიგებთ ვინ არის ჩემი დუეტის პარტნიორი...“, - წერს ნუცა ბუზალაძე.
		
		მომღერალი ჯერჯერობით გულშემატკივარს არ უმხელს ინფორმაციას, ვისთან ერთად იქნება დუეტში.  
		
		შეგახსენებთ, რომ ნუცა პროექტს უკვე გამოეთიშა, თუმცა ფინალში მაინც ვიხილავთ.']);

		$societyNews3 = News::create(['title'=> '1000 ლარი საჩუქრად დაბადების დღეზე - რა ასაკიდან მიიღებს თითოეული მოქალაქე სოლიდურ თანხას', 'thumbnail'=>'/thumbnails/atasi.jpg', 'body'=>'ნუცა ბუზალაძის თქმით, ის American idol-ის ფინალში დუეტში იმღერებს.

		"ძალიან აღელვებული ვარ იმ სიურპრიზით, რომელიც ფინალში გელოდებათ. შოკში ჩავარდებით, როცა გაიგებთ ვინ არის ჩემი დუეტის პარტნიორი...“, - წერს ნუცა ბუზალაძე.
		
		მომღერალი ჯერჯერობით გულშემატკივარს არ უმხელს ინფორმაციას, ვისთან ერთად იქნება დუეტში.  
		
		შეგახსენებთ, რომ ნუცა პროექტს უკვე გამოეთიშა, თუმცა ფინალში მაინც ვიხილავთ.']);

		$societyNews4 = News::create(['title'=> '"თუ მართალია, რატომ მითიშავს ტელეფონს. მოვიდეს და..." - რა განცხადებას აკეთებს ბათუმში გარდაცვლილი გოგონას დედა', 'thumbnail'=>'/thumbnails/martali.png', 'body'=>'ნუცა ბუზალაძის თქმით, ის American idol-ის ფინალში დუეტში იმღერებს.

		"ძალიან აღელვებული ვარ იმ სიურპრიზით, რომელიც ფინალში გელოდებათ. შოკში ჩავარდებით, როცა გაიგებთ ვინ არის ჩემი დუეტის პარტნიორი...“, - წერს ნუცა ბუზალაძე.
		
		მომღერალი ჯერჯერობით გულშემატკივარს არ უმხელს ინფორმაციას, ვისთან ერთად იქნება დუეტში.  
		
		შეგახსენებთ, რომ ნუცა პროექტს უკვე გამოეთიშა, თუმცა ფინალში მაინც ვიხილავთ.']);

		// sportuli siaxleebi
		$sportNews1 = News::create(['title'=> 'რა შემადგენლობას ვიხილავთ "ეტიჰადზე" - კარლოს გეგმა ცნობილია', 'thumbnail'=>'/thumbnails/anceloti.jpg', 'body'=>'როგორც მოგეხსენებათ, სულ მალე ჩემპიონთა ლიგის ნახევარფინალის განმეორებით შეხვედრებს ვიხილავთ.

        გავრცელებული ცნობების თანახმად, კარლო ანჩელოტი პირველი მატჩთან შედარებით შემადგენლობის შეცვლას გეგმავს, თუმცა ეს მხოლოდ ორ მოთამაშეს ეხება.
        
        კერძოდ, კარლო აპირებს, რომ ნახევარდაცვა მეტად გააძლიეროს. ამისთვის კი მას სურს ედუარდო კამავინგა მის ჩვეულ პოზიციაზე ათამაშოს. გარდა ამისა, როდრიგოს მაგივრად ძირითადში ვალვერდე იქნება.
        
        ამჯერად მარცხენა მცველის პოზიციას დავიდ ალაბა დაიკავებს, ცენტრში კი რუდიგერს მილიტაო შეუწყვილდება.
        
        ასე რომ, "რეალის" შემადგენლობა "ეტიჰადზე" ასეთი იქნება:
        
        კურტუა, კარვახალი, მილიტაო, რუდიგერი, ალაბა, კამავინგა, მოდრიჩი, კროოსი, ვალვერდე, ვინისიუსი, ბენზემა;']);

		$sportNews2 = News::create(['title'=> 'აშრაფ ჰაკიმი "რეალში" დაბრუნებაზე ოცნებობს - რა მიზანი აქვს მაროკოელს', 'thumbnail'=>'/thumbnails/hakimi.jpg', 'body'=>'მადრიდის "რეალის" ყოფილი ფეხბურთელი აშრაფ ჰაკიმი "სამეფო გუნდში" დაბრუნებაზე ოცნებობს.

        ამის შესახებ ინფორმაციას ფრანგული გამოცემა "LEquipe" ავრცელებს.
        
        როგორც იწერება, მაროკოელს სურს, რომ ერთ დღესაც ყოფილ გუნდს დაუბრუნდეს და ამის სურვილი მას ძალიან დიდი აქვს.
        
        აღსანიშნავია, რომ "ბლანკოსში" მარჯვენა მცველის პოზიცია ნამდვილად პრობლემატურია, რადგან აქ მხოლოდ დანი კარვახალია.
        
        ასე რომ, შეიძლება ჰაკიმის ოცნება მალე რეალობადაც იქცეს.']);

		$sportNews3 = News::create(['title'=> '"ახლა, ტიტული ახლიდან უნდა მოვიგოთ, შემდეგ კიდევ ახლიდან, ახლიდან და ასე" - დე ლაურენტისი', 'thumbnail'=>'/thumbnails/delaurentisi.jpg', 'body'=>'მადრიდის "რეალის" ყოფილი ფეხბურთელი აშრაფ ჰაკიმი "სამეფო გუნდში" დაბრუნებაზე ოცნებობს.

        ამის შესახებ ინფორმაციას ფრანგული გამოცემა "LEquipe" ავრცელებს.
        
        როგორც იწერება, მაროკოელს სურს, რომ ერთ დღესაც ყოფილ გუნდს დაუბრუნდეს და ამის სურვილი მას ძალიან დიდი აქვს.
        
        აღსანიშნავია, რომ "ბლანკოსში" მარჯვენა მცველის პოზიცია ნამდვილად პრობლემატურია, რადგან აქ მხოლოდ დანი კარვახალია.
        
        ასე რომ, შეიძლება ჰაკიმის ოცნება მალე რეალობადაც იქცეს.']);

		$sportNews4 = News::create(['title'=> 'ნრომელი ფიგურაა საყვარელი ჭადრაკში ნონა გაფრინდაშვილისთვის?', 'thumbnail'=>'/thumbnails/nona.jpg', 'body'=>'მადრიდის "რეალის" ყოფილი ფეხბურთელი აშრაფ ჰაკიმი "სამეფო გუნდში" დაბრუნებაზე ოცნებობს.

        ამის შესახებ ინფორმაციას ფრანგული გამოცემა "LEquipe" ავრცელებს.
        
        როგორც იწერება, მაროკოელს სურს, რომ ერთ დღესაც ყოფილ გუნდს დაუბრუნდეს და ამის სურვილი მას ძალიან დიდი აქვს.
        
        აღსანიშნავია, რომ "ბლანკოსში" მარჯვენა მცველის პოზიცია ნამდვილად პრობლემატურია, რადგან აქ მხოლოდ დანი კარვახალია.
        
        ასე რომ, შეიძლება ჰაკიმის ოცნება მალე რეალობადაც იქცეს.']);

		$society = Category::create(['name'=>'society']);
		$politic = Category::create(['name'=>'politic']);
		$sport = Category::create(['name'=>'sport']);

		DB::table('category_news')->insert([
			[
				'news_id'    => $politicNews1->id,
				'category_id'=> $politic->id,
			],
			[
				'news_id'    => $politicNews1->id,
				'category_id'=> $society->id,
			],
			[
				'news_id'    => $politicNews2->id,
				'category_id'=> $politic->id,
			],
			[
				'news_id'    => $politicNews3->id,
				'category_id'=> $politic->id,
			],
			[
				'news_id'    => $politicNews4->id,
				'category_id'=> $politic->id,
			],
			[
				'news_id'    => $sportNews1->id,
				'category_id'=> $sport->id,
			],
			[
				'news_id'    => $sportNews2->id,
				'category_id'=> $sport->id,
			],
			[
				'news_id'    => $sportNews3->id,
				'category_id'=> $sport->id,
			],
			[
				'news_id'    => $sportNews4->id,
				'category_id'=> $sport->id,
			],
			[
				'news_id'    => $societyNews1->id,
				'category_id'=> $society->id,
			],
			[
				'news_id'    => $societyNews2->id,
				'category_id'=> $society->id,
			],
			[
				'news_id'    => $societyNews3->id,
				'category_id'=> $society->id,
			],
			[
				'news_id'    => $societyNews4->id,
				'category_id'=> $society->id,
			],
		]);
	}
}

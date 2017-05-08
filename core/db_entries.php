<?php
require_once 'database/lazydbentry.php';


//EXAMPLE
/*news_entry($connection, //Databas connection
rand(0,10000), //Views for this article (för "trending" saker att funka)
"technology & science", //News category
"Unknown",  //Author
"", //Article text
"", //News img url/path
"", //News headline
""); //News summary*/

function insertEntries($connection){

  news_entry($connection, //Databas connection
  rand(0,10000), //Views for this article (för "trending" saker att funka)
  "entertainment", //News category
  "Unknown" ,  //Author
  "", //Article text
  "http://static3.businessinsider.com/image/55819eefecad04794d53bd28/emma-stone-did-one-of-the-worst-things-ever-after-her-contact-info-was-published-in-the-sony-hack.jpg", //News img url/path
  "Emma Stone wins Best Actress", //News headline
  "Emma Stone said thank you to her family and friends during her speech."); //News summary

  news_entry($connection, //Databas connection
  rand(0,10000), //Views for this article (för "trending" saker att funka)
  "international", //News category
  "Unknown",  //Author
  "", //Article text
  "https://cdn.quizme.se/quiz/7865ac56-d394-471e-b3ad-1ec0c86eaa94.jpg", //News img url/path
  "Donald Trump's first budget: enormous defense spending cut", //News headline
  "Donald Trump will seek a $54bn hike in military spending while cutting foreign aid."); //News summary

  news_entry($connection, //Databas connection
  rand(0,10000), //Views for this article (för "trending" saker att funka)
  "entertainment", //News category
  "Unknown",  //Author
  "", //Article text
  "https://i.guim.co.uk/img/media/bc45ba3e05dbfa2b80d5592a7b14ac79eac7da42/0_0_2560_1536/master/2560.jpg?w=620&q=20&auto=format&usm=12&fit=max&dpr=2&s=b71034b63e8cc1d98f7b40759e56c866", //News img url/path
  "From gay rights to Black Lives Matter: why network TV suddenly got serious", //News headline
  "On a reputable college campus, a young undergrad comes forward and names multiple star football players as her rapists."); //News summary

  news_entry($connection, //Databas connection
  rand(0,10000), //Views for this article (för "trending" saker att funka)
  "sport", //News category
  "Unknown",  //Author
  "", //Article text
  "http://www.telegraph.co.uk/content/dam/football/2016/08/07/105034453-mourinho-ibra-sport-large_trans_NvBQzQNjv4BqhaQcnQgX1lblZ3yiN-_RsFgQYydLoD49TznpdCvx63E.jpg", //News img url/path
  "Fans could camp outside Zlatan's house - Mourinho", //News headline
  "Manchester United boss Jose Mourinho says he does not beg players to stay at a football club but suggests fans could camp outside Zlatan Ibrahimovic's house to convince him to stay at Old Trafford."); //News summary

  news_entry($connection, //Databas connection
  rand(0,10000), //Views for this article (för "trending" saker att funka)
  "technology & science", //News category
  "Unknown",  //Author
  "", //Article text
  "http://ichef.bbci.co.uk/wwfeatures/live/624_351/images/live/p0/4t/y9/p04ty9kp.jpg", //News img url/path
  "The island of lost explorers", //News headline
  "On Canada’s bleak Beechey Island are the remains of four men who died in the 19th Century. They weren’t famous in life – but their deaths sparked 165 years of searching for answers."); //News summary

  news_entry($connection, //Databas connection
  rand(0,10000) , //Views for this article (för "trending" saker att funka)
  "politics", //News category
  "Unknown",  //Author
  "", //Article text
  "https://i.guim.co.uk/img/media/fa2c5cd862298bede92c1d68857d45ca60a096ba/0_292_4386_2632/master/4386.jpg?w=620&q=20&auto=format&usm=12&fit=max&dpr=2&s=225aa60b65fdc213c06303b3edc55638", //News img url/path
  "City watchdog sounds alarm bells over hard Brexit", //News headline
  "FCA chief says sudden EU exit would create myriad headaches, not least making it harder to keep an eye on banks.");

  news_entry($connection, //Databas connection
  rand(0,10000), //Views for this article (för "trending" saker att funka)
  "entertainment", //News category
  "Unknown",  //Author
  "", //Article text
  "http://ichef.bbci.co.uk/wwfeatures/live/384_216/images/live/p0/4v/5t/p04v5t2b.jpg", //News img url/path
  "The Craft of Cinema", //News headline
  "The craft of a hollywood screenwriter"); //News summary

  news_entry($connection, //Databas connection
  rand(0,10000), //Views for this article (för "trending" saker att funka)
  "entertainment", //News category
  "Unknown",  //Author
  "", //Article text
  "https://s.wsj.net/public/resources/images/BN-SH241_ACCOUN_G_20170228181135.jpg", //News img url/path
  "Who Is the PwC Accountant Behind the Oscar Gaffe? ", //News headline
  "Brian Cullinan, the accountant responsible for the infamous envelope mixup, is a 30-year-plus veteran of PwC who has overseen clients like Disney and Paramount."); //News summary

  news_entry($connection, //Databas connection
  rand(0,10000), //Views for this article (för "trending" saker att funka)
  "entertainment", //News category
  "Unknown",  //Author
  "", //Article text
  "https://s.wsj.net/public/resources/images/BN-SH298_OBAMAB_E_20170228192209.jpg", //News img url/path
  "Penguin Random House Acquires Global Rights to Books by Obamas ", //News headline
  "Penguin Random House said it has acquired world rights to separate books by former President Barack Obama and First Lady Michelle Obama that will look at their years in the White House."); //News summary

  news_entry($connection, //Databas connection
  rand(0,10000), //Views for this article (för "trending" saker att funka)
  "entertainment", //News category
  "Unknown",  //Author
  "", //Article text
  "https://s.wsj.net/public/resources/images/BN-SH110_NYSWEE_E_20170228140902.jpg", //News img url/path
  "Star Pastry Chef Lands Off-Broadway Role in ‘Sweeney Todd’ ", //News headline
  "Producers of a new Off Broadway staging of Stephen Sondheim’s Tony Award-winning musical “Sweeney Todd” have tapped a special partner: Bill Yosses, a former White House pastry chef."); //News summary

  news_entry($connection, //Databas connection
  rand(0,10000), //Views for this article (för "trending" saker att funka)
  "international", //News category
  "Unknown",  //Author
  "", //Article text
  "https://si.wsj.net/public/resources/images/BN-SH418_0301UB_Z120_20170301004029.jpg", //News img url/path
  "Uber CEO: ‘I Need Leadership Help’ After Berating Driver on Video", //News headline
  "Travis Kalanick plans to seek leadership advice after a run of troubling news involving Uber, capped by an online video of him dressing down one of the ride-hailing service’s drivers."); //News summary

  news_entry($connection, //Databas connection
  rand(0,10000), //Views for this article (för "trending" saker att funka)
  "international", //News category
  "Unknown",  //Author
  "", //Article text
  "http://media2.intoday.in/indiatoday/images/stories/kim-jong-nam_story_305_030117082725.jpg", //News img url/path
  "Kim Jong-nam death: Malaysia charges two women for airport murder of North Korean", //News headline
  "Two women- an Indonesian and a Vietnamese - were presented in court by the Malaysian police where charges were read out against them. They could face the death penalty if convicted."); //News summary

  news_entry($connection, //Databas connection
  rand(0,10000), //Views for this article (för "trending" saker att funka)
  "international", //News category
  "Unknown",  //Author
  "", //Article text
  "https://si.wsj.net/public/resources/images/BN-SH038_GERPEN_Z120_20170228115719.jpg", //News img url/path
  "Ballooning Pension Deficits May Take Air Out of Corporate Germany", //News headline
  "Many German companies operate huge traditional pension plans, yet thanks to permissive regulation, they don’t have to sequester cash to meet those future costs. The results are ballooning pension deficits that critics call a time bomb for corporate Germany."); //News summary

  news_entry($connection, //Databas connection
  rand(0,10000), //Views for this article (för "trending" saker att funka)
  "international", //News category
  "Unknown",  //Author
  "", //Article text
  "https://s.wsj.net/public/resources/images/BN-SH037_gerban_D_20170228115659.jpg", //News img url/path
  "Berlin Bans Muslim Group Accused of Supporting Terrorism", //News headline
  "Police raid Fussilet 33 mosque that authorities say was attended by suspect in deadly Christmas market attack."); //News summary

  news_entry($connection, //Databas connection
  rand(0,10000), //Views for this article (för "trending" saker att funka)
  "international", //News category
  "Unknown",  //Author
  "", //Article text
  "https://s.wsj.net/public/resources/images/BN-SG942_1PkXz_D_20170228083252.jpg", //News img url/path
  "European Lawmakers Vote on Tougher Anti-Money-Laundering Rules", //News headline
  "European Union lawmakers voted for tougher anti-money-laundering rules that would cover virtual currencies and prepaid cards as part of the bloc’s fight against terror financing and a broader clamp down on tax avoidance."); //News summary

  news_entry($connection, //Databas connection
  rand(0,10000), //Views for this article (för "trending" saker att funka)
  "sport", //News category
  "Unknown",  //Author
  "", //Article text
  "https://i.guim.co.uk/img/media/cc25b5e9dbdfafb1cab1179d8640f1e5f39cb0ca/0_53_3232_1940/master/3232.jpg?w=620&q=20&auto=format&usm=12&fit=max&dpr=2&s=9c60344cc5669d867ad66bbe3fe7b25d", //News img url/path
  "England risk losing Denny Solomona until 2019 unless he gets Six Nations call", //News headline
  "Denny Solomona, the New Zealandborn wing who has switched from rugby league to union, is about to complete residency that would make him eligible for England."); //News summary

  news_entry($connection, //Databas connection
  rand(0,10000), //Views for this article (för "trending" saker att funka)
  "sport", //News category
  "Unknown",  //Author
  "", //Article text
  "http://e0.365dm.com/17/01/16-9/30/skysports-la-liga-real-madrid-barcelona-atletico-sevilla-ronaldo-messi-griezmann_3878932.jpg?20170127105055", //News img url/path
  "How close is the La Liga race?", //News headline
  "Real Madrid top La Liga ahead of Barcelona, with Sevilla in third - but how close is the title race?"); //News summary

  news_entry($connection, //Databas connection
  rand(0,10000), //Views for this article (för "trending" saker att funka)
  "sport", //News category
  "Unknown",  //Author
  "", //Article text
  "http://e0.365dm.com/17/02/16-9/30/skysports-jason-day-golf-att_3888790.jpg?20170211003040", //News img url/path
  "Day pulls out of WGC-Mexico", //News headline
  "World No 2 Jason Day has pulled out of this week's World Golf Championship in Mexico City due to illness."); //News summary

  news_entry($connection, //Databas connection
  rand(0,10000), //Views for this article (för "trending" saker att funka)
  "sport", //News category
  "Unknown",  //Author
  "", //Article text
  "http://e0.365dm.com/17/02/16-9/30/skysports-jaco-van-zyl-golf-joburg-open_3896983.jpg?20170224124725", //News img url/path
  "Top Fives: Bizarre putters", //News headline
  "How does Jaco Van Zyl's bizarre putter compare to a number of other strange inventions over the years?"); //News summary

  news_entry($connection, //Databas connection
  rand(0,10000), //Views for this article (för "trending" saker att funka)
  "sport", //News category
  "Unknown",  //Author
  "", //Article text
  "http://e1.365dm.com/17/02/16-9/30/skysports-richard-freeman-great-britain_3899913.jpg?20170228144832", //News img url/path
  "Freeman pulls out of inquiry", //News headline
  "Former Team Sky doctor Richard Freeman has pulled out of an appearance before a Parliamentary inquiry into doping in sport."); //News summary

  news_entry($connection, //Databas connection
  rand(0,10000), //Views for this article (för "trending" saker att funka)
  "technology & science", //News category
  "Unknown",  //Author
  "", //Article text
  "https://art.wsj.net/api/photos/gams-files/BN-SG883_2XXDJ_A_20170227234722.jpg?width=300&height=200", //News img url/path
  "Apple’s Next iPhone Will Have a Curved Screen", //News headline
  "Apple has decided to adopt a flexible OLED display for one model of the new iPhone coming out this year and has ordered sufficient components to enable mass production. "); //News summary

  news_entry($connection, //Databas connection
  rand(0,10000), //Views for this article (för "trending" saker att funka)
  "technology & science", //News category
  "Unknown",  //Author
  "", //Article text
  "https://art.wsj.net/api/photos/gams-files/BN-SG943_2N5DR_A_20170228084246.jpg?width=110&height=73", //News img url/path
  "Salesforce Sees Increase in Deferred Revenue", //News headline
  "Salesforce.com posted a 29% jump in deferred revenue for its fiscal fourth quarter, a sign the business-software company continues to rack up customers moving computing operations to the cloud."); //News summary

  news_entry($connection, //Databas connection
  rand(0,10000), //Views for this article (för "trending" saker att funka)
  "technology & science", //News category
  "Unknown",  //Author
  "", //Article text
  "https://www.sciencenews.org/sites/default/files/2017/02/main/articles/021717_mr_zika-vaccine_feat_free.jpg", //News img url/path
  "DNA may offer rapid road to Zika vaccine", //News headline
  "Researchers are pursuing multiple vaccine strategies for blocking Zika infection."); //News summary

  news_entry($connection, //Databas connection
  rand(0,10000), //Views for this article (för "trending" saker att funka)
  "technology & science", //News category
  "Unknown",  //Author
  "", //Article text
  "https://www.sciencenews.org/sites/default/files/2017/02/main/articles/022717_EE_wolbachia_main.jpg", //News img url/path
  "Bacteria genes offer new strategy for sterilizing mosquitoes", //News headline
  "Two genes in Wolbachia bacteria could be used to sterilize mosquitoes that transmit Zika."); //News summary

  news_entry($connection, //Databas connection
  rand(0,10000), //Views for this article (för "trending" saker att funka)
  "technology & science", //News category
  "Unknown",  //Author
  "", //Article text
  "https://www.sciencenews.org/sites/default/files/2017/02/main/articles/021517_AY_blackhole_main.jpg", //News img url/path
  "Black hole enjoys fantastically long stellar feast", //News headline
  "A supermassive black hole about 1.8 billion light-years away has been gorging on the same star for a record-breaking decade."); //News summary

  news_entry($connection, //Databas connection
  rand(0,10000), //Views for this article (för "trending" saker att funka)
  "politics", //News category
  "Unknown",  //Author
  "", //Article text
  "https://art.wsj.net/api/photos/gams-files/BN-SH232_2YrIT_A_20170228175309.jpg?width=110&height=73", //News img url/path
  "The Next Dilemma of the Republican Tax Overhaul", //News headline
  "House Republicans haven’t ironed out how to treat hedge funds, law firms and the millions of other business owners whose income passes through to their individual tax returns."); //News summary

  news_entry($connection, //Databas connection
  rand(0,10000), //Views for this article (för "trending" saker att funka)
  "politics", //News category
  "Unknown",  //Author
  "", //Article text
  "https://art.wsj.net/api/photos/gams-files/BN-SH410_2Y5mb_A_20170228232154.jpg?width=110&height=73", //News img url/path
  "Democrat Beshear Rallies Party to Protect Obamacare", //News headline
  "The former Kentucky governor asked Democrats to help the nation oppose President Donald Trump’s plans to repeal former President Barack Obama’s signature health-care law."); //News summary

  news_entry($connection, //Databas connection
  rand(0,10000), //Views for this article (för "trending" saker att funka)
  "politics", //News category
  "Unknown",  //Author
  "", //Article text
  "http://s4.reutersmedia.net/resources/r/?m=02&d=20170301&t=2&i=1174435511&w=140&fh=&fw=&ll=&pl=&sq=&r=LYNXMPED201FV", //News img url/path
  "Penguin Random House lands book deal with Obamas", //News headline
  "Penguin Random House has landed a deal to publish two forthcoming books by former U.S. President Barack Obama and the former first lady, Michelle Obama, with one volume to be written by each, the publishing company said on Tuesday."); //News summary

  news_entry($connection, //Databas connection
  rand(0,10000), //Views for this article (för "trending" saker att funka)
  "politics", //News category
  "Unknown",  //Author
  "", //Article text
  "http://s4.reutersmedia.net/resources/r/?m=02&d=20170228&t=2&i=1174409835&w=200&fh=&fw=&ll=&pl=&sq=&r=LYNXMPED1R179", //News img url/path
  "McConnell says deep State Department budget cuts won't pass", //News headline
  "WASHINGTON U.S. Senate Majority Leader Mitch McConnell on Tuesday said he would not back slashing State Department funding as the Trump administration is expected to propose, adding that deep cuts would not pass the legislative chamber."); //News summary

  news_entry($connection, //Databas connection
  rand(0,10000), //Views for this article (för "trending" saker att funka)
  "politics", //News category
  "Unknown",  //Author
  "", //Article text
  "http://s4.reutersmedia.net/resources/r/?m=02&d=20170228&t=2&i=1174421558&w=140&fh=&fw=&ll=&pl=&sq=&r=LYNXMPED1R1AS", //News img url/path
  "NSA risks talent exodus amid morale slump, Trump fears", //News headline
  "WASHINGTON The National Security Agency risks a brain-drain of hackers and cyber spies due to a tumultuous reorganization and worries about the acrimonious relationship between the intelligence community and President Donald Trump, according to current and former NSA officials and cybersecurity industry sources."); //News summary

  news_entry($connection, //Databas connection
  rand(0,10000), //Views for this article (för "trending" saker att funka)
  "economics", //News category
  "Unknown",  //Author
  "", //Article text
  "https://art.wsj.net/api/photos/gams-files/BN-SG658_2BV6b_E_20170227141813.jpg?width=300&height=200&pixel_ratio=1", //News img url/path
  "U.S. GDP Advanced 1.9% in Final Quarter of 2016 ", //News headline
  "U.S. consumer spending was stronger than initially thought in the final months of 2016, though the overall economic-growth trajectory remained muted amid downward revisions for business investment and government spending."); //News summary

  news_entry($connection, //Databas connection
  rand(0,10000), //Views for this article (för "trending" saker att funka)
  "economics", //News category
  "Unknown",  //Author
  "", //Article text
  "https://s.wsj.net/public/resources/images/BN-SG817_constr_E_20170227205810.jpg", //News img url/path
  "Why Construction Has Seen Particularly Weak Productivity Growth", //News headline
  "The American construction sector is less productive now than it was in 1995, according to study a released by the McKinsey Global Institute."); //News summary

  news_entry($connection, //Databas connection
  rand(0,10000), //Views for this article (för "trending" saker att funka)
  "economics", //News category
  "Unknown",  //Author
  "", //Article text
  "https://s.wsj.net/public/resources/images/BN-SG313_FISHTA_E_20170226181036.jpg", //News img url/path
  "Fish Importer Casts Worry Over Border Tax ", //News headline
  "Opposition to a border-adjustment provision in House Republicans’ tax plan can be heard loud and clear from companies like Fortune Fish & Gourmet, an importer of foods from overseas that says it would be hard-hit."); //News summary

  news_entry($connection, //Databas connection
  rand(0,10000), //Views for this article (för "trending" saker att funka)
  "economics", //News category
  "Unknown",  //Author
  "", //Article text
  "http://fm.cnbc.com/applications/cnbc.com/resources/img/editorial/2016/11/28/104132824-GettyImages-91308592.160x105.jpg?v=1480359028", //News img url/path
  "Monthly US home-price gains reach a 2½-year high", //News headline
  "The S&P Case-Shiller CoreLogic Home Price Index rose 5.8 percent year over year in December."); //News summary

  news_entry($connection, //Databas connection
  rand(0,10000), //Views for this article (för "trending" saker att funka)
  "economics", //News category
  "Unknown",  //Author
  "", //Article text
  "http://fm.cnbc.com/applications/cnbc.com/resources/img/editorial/2016/07/08/103774709-RTX1F5TR.160x105.jpg?v=1487796653", //News img url/path
  "US jobless claims up, four-week average lowest since 1973", //News headline
  "The number of Americans filing for benefits rose slightly more than expected, but the four-week average of claims pointed to a strengthening labor market."); //News summary

  news_entry($connection, //Databas connection
  rand(0,10000), //Views for this article (för "trending" saker att funka)
  "technology & science", //News category
  "Unknown",  //Author
  "", //Article text
  "http://farbtoner.com/images/OKI-C810-C830-Chip.jpg", //News img url/path
  "More teenagers choose to biohack themselves!", //News headline
  "Good or bad? What are the long term consquences of biohacking?"); //News summary

  news_entry($connection, //Databas connection
  10001, //Views for this article (för "trending" saker att funka)
  "economics", //News category
  "Unknown",  //Author
  "", //Article text
  "http://ichef.bbci.co.uk/news/660/media/images/76104000/jpg/_76104343_76092398.jpg", //News img url/path
  "Chippit stock down 15%!", //News headline
  "Chippit stocks plummeting after recent biohacking bugs have come to light!"); //News summary

  news_entry($connection, //Databas connection
  10002, //Views for this article (för "trending" saker att funka)
  "sport", //News category
  "Unknown",  //Author
  "", //Article text
  "https://img.scoop.it/Ykosvc63maulLB0NWspAtjl72eJkfbmt4t8yenImKBVvK0kTmF0xjctABnaLJIm9", //News img url/path
  "Biohacking in the Olympics: Should it be illegal?", //News headline
  "Biohacking implants are ruining sports: According to OS coordinator Steve James."); //News summary

  news_entry($connection, //Databas connection
  10003, //Views for this article (för "trending" saker att funka)
  "technology & science", //News category
  "Unknown",  //Author
  "", //Article text
  "http://careers2030.cst.org/app/uploads/2014/03/Robot-Counsellor-900x540.jpg", //News img url/path
  "Ethics of biohacking?", //News headline
  "Where does it end. Are we even humans after a point? Chippit who does everything in your life for you, where does it end?"); //News summary

  news_entry($connection, //Databas connection
  10004, //Views for this article (för "trending" saker att funka)
  "technology & science", //News category
  "Unknown",  //Author
  "", //Article text
  "https://blogs-images.forbes.com/robertwood/files/2016/02/Trump1.jpg", //News img url/path
  "Chippit most be stopped; Trump says after recent pressconference.", //News headline
  "Recent hazardous chippit bug and exploits have made a powerful enemy of the president for Chippit INC"); //News summary

  news_entry($connection, //Databas connection
  rand(0,10000), //Views for this article (för "trending" saker att funka)
  "technology & science", //News category
  "Unknown",  //Author
  "", //Article text
  "http://www.kconnect.eu/sites/default/files/styles/top_teaser/public/images/health_on_the_net.jpg?itok=xdIRhd4o", //News img url/path
  "Chippit health tracker: Useless?", //News headline
  "Multiple reports from users of the Chippit: Health Tracker has deemed it useless. Some reports of it actually making your body less healthy by giving inccorect data."); //News summary

  news_entry($connection, //Databas connection
  rand(0,10000), //Views for this article (för "trending" saker att funka)
  "technology & science", //News category
  "Unknown",  //Author
  "", //Article text
  "https://www.drugs.com/images/pills/fio/SHR00340.JPG", //News img url/path
  "Chippit adderall effect malfunction!", //News headline
  "2 dead from drug overdose, blaming malfunction of Chippit: Adderal addon! What is actually supposed to make you more focused in your daily life can actually kill you!"); //News summary

  news_entry($connection, //Databas connection
  rand(0,10000), //Views for this article (för "trending" saker att funka)
  "technology & science", //News category
  "Unknown",  //Author
  "", //Article text
  "http://www.hearthealthonline.org/wp-content/uploads/2014/11/Normal-Heart-Rate-300x210.png", //News img url/path
  "Chippit fake disease scare!", //News headline
  "Chippit's addon to prevent disease gives a older woman an incorrect diagnosis of alzheimer's disease!"); //News summary

  news_entry($connection, //Databas connection
  rand(0,10000), //Views for this article (för "trending" saker att funka)
  "technology & science", //News category
  "Unknown",  //Author
  "", //Article text
  "http://www.redcandy.co.uk/media/catalog/product/cache/1/thumbnail/600x/9df78eab33525d08d6e5fb8d27136e95/t/h/thomas-kent-puffin-alarm-clock-gun-metal-1.jpg", //News img url/path
  "Chippit alarm clock not functioning?", //News headline
  "After recent Chippit update the alarm clock has shown to go off at random times, and sometimes not at all after choosing a time."); //News summary
} ?>

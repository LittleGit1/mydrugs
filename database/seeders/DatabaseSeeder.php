<?php

namespace Database\Seeders;

use App\Models\Product;
use App\Models\ProductCategory;
use App\Models\ProductReview;
use App\Models\ProductSubcategory;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(10)->create();


        ProductCategory::factory()->create([
            'name'      => 'Empathogens',
            'slug'      => 'empathogens',
            'description'   => 'Empathogens include substances that cause the brain to release dopamine and serotonin. They can increase feelings of connection and empathy, pleasure and energy levels but can also cause mood swings, dehydration and depression. The most common empathogen is MDMA, or ecstasy.'
        ]);
        ProductCategory::factory()->create([
            'name'      => 'Stimulants',
            'slug'      => 'stimulants',
            'description'   => 'Stimulants accelerate messages travelling between the brain and body. They can make a person feel more awake, alert, confident or energetic. They can also cause a person to feel anxious, aggressive or paranoid. Common stimulants include methamphetamine (ice), amphetamines, cocaine, nicotine and caffeine.'
        ]);

        ProductCategory::factory()->create([
            'name'      => 'Cannabinoids',
            'slug'      => 'cannabinoids',
            'description'   => 'Cannabinoids refer to any medicinal, recreational or synthetic substance that joins the cannabinoid receptors of the body and brain. These substances have a similar effect to cannabis, causing a \'high\' during which a person may feel happy, relaxed, hungry, giggly or quiet and reflective. Cannabis is more commonly known as marijuana.'
        ]);
        ProductCategory::factory()->create([
            'name'      => 'Depressants',
            'slug'      => 'depressants',
            'description'   => 'Depressant substances affect the central nervous system, slowing down the messages travelling between the brain and body. Sometimes depressants reduce concentration, inhibitions and coordination and cause people to feel relaxed. Common depressant drugs are alcohol, benzodiazepines, GHB/GBL and inhalants/solvents.'
        ]);
        ProductCategory::factory()->create([
            'name'      => 'Opioids',
            'slug'      => 'opioids',
            'description'   => 'Opioids affect the opioid receptors in the brain and are usually derived from the opium poppy. Like depressants, opioids slow the central nervous system and messages travelling between the brain and body. They are often used to treat pain. Common types of opioid include codeine (Panadeine®, Panadeine Forte® and Nurofen Plus®), fentanyl, morphine, methadone, tramadol and heroin.'
        ]);
        ProductCategory::factory()->create([
            'name'      => 'Psychedelics',
            'slug'      => 'psychedelics',
            'description'   => 'Psychedelics are also known as hallucinogens. They can cause hallucinations, or change a person’s thoughts, mood, sense of time or perception of their environment or themselves. Common psychedelics are LSD, peyote and psilocybin.'
        ]);


        ProductSubcategory::factory()->create([
            'name'              => 'Cocaine',
            'slug'              => 'cocaine',
            'description'       => 'Cocaine is a stimulant drug. They speed up messages travelling between the brain and body. Cocaine comes from the leaves of the coca bush (Erythroxylum coca), native to South America',
            'other_names'       => 'C, coke, crack, nose candy, snow, white lady, toot, Charlie, blow, white dust or stardust.',
            'product_category_id'   => ProductCategory::all()->where('name', '=', 'Stimulants')->first()->id
        ]);
        ProductSubcategory::factory()->create([
            'name'              => 'Amphetamines',
            'slug'              => 'amphetamines',
            'description'       => 'Amphetamines are psychostimulant drugs, which means they speed up the messages travelling between the brain and the body. Some types of amphetamines are prescribed by doctors to treat conditions such as attention deficit hyperactivity disorder (ADHD) and narcolepsy (where a person has an uncontrollable urge to sleep). Amphetamines have also been used to treat Parkinson\'s disease. Other types of amphetamines, such as speed, are produced and sold illegally. Amphetamines have been also been taken as performance enhancement drugs. The most potent form is crystal methamphetamine (ice).',
            'other_names'       => 'Speed, up, uppers, louee, goey, whiz, rack.',
            'product_category_id'   => ProductCategory::all()->where('name', '=', 'Stimulants')->first()->id
        ]);
        ProductSubcategory::factory()->create([
            'name'              => 'Nicotine',
            'slug'              => 'nicotine',
            'description'       => 'Nicotine is a stimulant drug that speeds up the messages travelling between the brain and body. It is the main psychoactive ingredient in tobacco products and so this Drug Facts page will focus on the effects of nicotine when consumed by using tobacco.',
            'other_names'       => null,
            'product_category_id'   => ProductCategory::all()->where('name', '=', 'Stimulants')->first()->id
        ]);
        ProductSubcategory::factory()->create([
            'name'              => 'Khat',
            'slug'              => 'khat',
            'description'       => 'Khat is a stimulant drug, which means it speeds up the messages between the brain and the body. Chewing khat is part of some social traditions in parts of the Middle East, such as Saudi Arabia and Yemen, and in Eastern Africa, such as Somalia. The buds and leaves of the khat plant (Catha edulis) are chewed for stimulant and euphoric effects, and traditionally have been used for medicinal purposes as well as recreationally. Khat contains cathinone and cathine, which are the chemicals that produce the stimulant effects.',
            'other_names'       => 'Qat, kat, chat, qaad.',
            'product_category_id'   => ProductCategory::all()->where('name', '=', 'Stimulants')->first()->id
        ]);
        ProductSubcategory::factory()->create([
            'name'              => 'MDMA',
            'slug'              => 'mdma',
            'description'       => '(MDMA) Methylenedioxymethamphetamine is an empathogen, which increases an individual\'s feeling of empathy and kindness,  and increases feelings of being socially accepted by and connected to others. MDMA is commonly known as ecstasy. However, some pills sold as ecstasy may only have a small amount of MDMA or none at all. Other drugs and \'fillers\' are often used instead. This makes it hard to know what reactions to expect after taking MDMA or if negative side effects will be experienced.',
            'other_names'       => 'Ecstasy, caps, Eckies, E, XTC, pills, pingers, bikkies, flippers, molly, M&M',
            'product_category_id'   => ProductCategory::all()->where('name', '=', 'Empathogens')->first()->id
        ]);
        ProductSubcategory::factory()->create([
            'name'              => 'PMA, PMMA',
            'slug'              => 'pma-pmma',
            'description'       => 'Paramethoxyamphetamine (PMA) and paramethoxymethamphetamine (PMMA) are empathogens with effects similar to MDMA also known as ecstasy. Most people who take PMA or PMMA think they are taking MDMA. However, drugs sold as MDMA may not contain any MDMA at all. They can be a mix of amphetamines, PMA, PMMA, ketamine, NBOMe, methylone or other substances. This is potentially harmful as PMA and PMMA have more toxic effects (and are less euphoric) than MDMA. It also takes longer to feel these effects, so people may take another pill in the mistaken belief that the first has not worked, sometimes resulting in overdose. PMA and PMMA have been around since the 1970s and have been associated with a number of deaths over the years worldwide including in Australia. In 2012 and 2013 there was a spike in deaths directly attributable to PMA or PMMA in England and Wales.',
            'other_names'       => 'Death, Dr Death, Pink Ecstasy, Red Mitsubishi, Killer, Chicken Powder, Chicken Yellow.',
            'product_category_id'   => ProductCategory::all()->where('name', '=', 'Empathogens')->first()->id
        ]);
        ProductSubcategory::factory()->create([
            'name'              => 'Benzodiazepines',
            'slug'              => 'benzodiazepines',
            'description'       => 'Benzodiazepines (pronounced \'ben-zoh-die-AZ-a-peens\') are depressant drugs. Which means they slow down the messages travelling between the brain and the body. They don\'t necessarily make a person feel depressed. Benzodiazepines also are minor tranquillisers, usually prescribed by doctors to relieve stress and anxiety and to help people sleep. They can also be used to treat alcohol withdrawal and epilepsy.',
            'other_names'       => 'Benzos, tranx, sleepers, downers, pills, xannies, serras (Serepax®), moggies (Mogadon®), normies (Normison®).',
            'product_category_id'   => ProductCategory::all()->where('name', '=', 'Depressants')->first()->id
        ]);
        ProductSubcategory::factory()->create([
            'name'              => 'GHB',
            'slug'              => 'ghb',
            'description'       => 'GHB (gamma hydroxybutyrate) is a depressant drug, which means it slows down messages travelling between the brain and body. GBL (gamma butyrolactone) and 1,4-BD (1,4-butanediol) are chemicals that are closely related to GHB. Once GBL or 1,4-BD enter the body, they convert to GHB almost immediately.',
            'other_names'       => 'G, fantasy, grievous bodily harm (GBH), juice, liquid ecstasy, liquid E, liquid X, Georgia Home Boy, soap, scoop, cherry meth, blue nitro, fishies.',
            'product_category_id'   => ProductCategory::all()->where('name', '=', 'Depressants')->first()->id
        ]);

        ProductSubcategory::factory()->create([
            'name'              => 'Buprenorphine',
            'slug'              => 'buprenorphine',
            'description'       => 'Buprenorphine (pronounced \'bew-pre-nor-feen\') is an opioid prescription drug. It is taken as a replacement in the treatment of heroin and other opioid dependence. Replacing a prescribed drug to treat a drug of dependence in this way is known as pharmacotherapy. As well as improving wellbeing by preventing physical withdrawal, pharmacotherapy helps to stabilise the lives of people who are dependent on heroin and other opioids, and to reduce the harms related to drug use.',
            'other_names'       => 'Bup, B, subs, bupe, orange.',
            'product_category_id'   => ProductCategory::all()->where('name', '=', 'Opioids')->first()->id
        ]);

        ProductSubcategory::factory()->create([
            'name'              => 'Codeine',
            'slug'              => 'codeine',
            'description'       => 'Codeine is an opioid. Opioids are drugs that act on the opioid receptors in the brain, they include both natural and synthetic drugs that are derived from, or related to, the opium poppy. Opioids bring about a range of responses, from feelings of pain relief to relaxation, pleasure and contentment. Some people use non-prescribed codeine as a coping mechanism for chronic pain, mental health issues such as depression or anxiety, or to get high.',
            'other_names'       => null,
            'product_category_id'   => ProductCategory::all()->where('name', '=', 'Opioids')->first()->id
        ]);

        ProductSubcategory::factory()->create([
            'name'              => 'Fentanyl',
            'slug'              => 'fentanyl',
            'description'       => 'Fentanyl is an opioid. Opioids are drugs that act on the opioid receptors in the brain, they include both natural and synthetic drugs that are derived from, or related to, the opium poppy. Fentanyl is prescribed for chronic pain, severe cancer pain, nerve damage, back injury, major trauma and surgery. In Australia, fentanyl is a Schedule 8 drug.2 It\'s about 80 to 100 times stronger than morphine.',
            'other_names'       => 'Goodfella, jackpot, murder 8, TNT, Tango and Cash, fentanil, Sublimaze, Actiq, Durogesic, Duragesic.',
            'product_category_id'   => ProductCategory::all()->where('name', '=', 'Opioids')->first()->id
        ]);

        ProductSubcategory::factory()->create([
            'name'              => 'Heroin',
            'slug'              => 'heroin',
            'description'       => 'Heroin is an opioid. Opioids include any drug that acts on opioid receptors in the brain, and any natural or synthetic drugs that are derived from, or related to, the opium poppy. Opiates are a subset of opioids, which are naturally derived from the opium poppy plant, rather than synthetic substances.',
            'other_names'       => 'Smack, gear, hammer, the dragon, H, dope, junk, harry, horse, black tar, white dynamite, homebake, china white, Chinese H, poison, Dr Harry.',
            'product_category_id'   => ProductCategory::all()->where('name', '=', 'Opioids')->first()->id
        ]);

        ProductSubcategory::factory()->create([
            'name'              => 'Methadone',
            'slug'              => 'methadone',
            'description'       => 'Methadone is a prescription opioid drug. Opioids interact with opioid receptors in the brain and bring about a range of responses, from feelings of pain relief to relaxation, pleasure and contentment. Methadone is taken as a replacement for heroin and other opioids as part of treatment for dependence on these drugs. Replacing a drug of dependence with a prescribed drug is known as pharmacotherapy. As well as improving a person\'s wellbeing by preventing physical withdrawal, pharmacotherapy helps to stabilise the lives of people who are dependent on heroin and other opioids, and to reduce the harms related to drug use. Methadone is also used to relieve pain following heart attacks, trauma and surgery.',
            'other_names'       => 'Done or \'the done\'.',
            'product_category_id'   => ProductCategory::all()->where('name', '=', 'Opioids')->first()->id
        ]);


        ProductSubcategory::factory()->create([
            'name'              => 'Opium',
            'slug'              => 'opium',
            'description'       => 'Opium is a depressant drug, which means it slows down the messages travelling between your brain and body. It is derived from the opium poppy (Papaver somniferum L.) and is one of the earliest plants recorded for medicinal use. Evidence of opium cultivation by the Sumerian people dates to 3400BCE, although some scholars believe opium use predates Sumerian culture. Opium poppy pods hold a milky substance called latex that contains a number of chemicals, including morphine and codeine.1 Latex is extracted from the opium pods and dried to create opium. Typically, it is be further refined by boiling and drying again.',
            'other_names'       => 'Aunti, Aunti Emma, Big O, O, Black pill, Chandu, Chinese Molasses, Dopium, Dream Gun, Fi-Do-Nie, Gee, Guma, Midnight Oil, Zero.',
            'product_category_id'   => ProductCategory::all()->where('name', '=', 'Opioids')->first()->id
        ]);


        ProductSubcategory::factory()->create([
            'name'              => 'Oxycodone',
            'slug'              => 'oxycodone',
            'description'       => 'Oxycodone hydrochloride is part of a group of drugs known as opioids. Opioids include any drug that acts on opioid receptors in the brain, and any natural or synthetic drugs that are derived from, or related to, the opium poppy. Opiates are a subset of opioids, which are naturally derived from the opium poppy plant, rather than synthetic substances. Oxycodone is most commonly prescribed by doctors to relieve moderate to severe pain. However, there is increasing concern among medical professionals about the risks of using these drugs, particularly when they are used for a long time. Under the Pharmaceutical Benefits Scheme (PBS), oxycodone is a Schedule 8 drug. This means doctors must follow state and territory laws when prescribing oxycodone and need to notify, or receive approval from, the appropriate health authority. Some people use oxycodone to become intoxicated, which can result in serious side effects.',
            'other_names'       => 'Hillbilly heroin, oxy, OC and O.',
            'product_category_id'   => ProductCategory::all()->where('name', '=', 'Opioids')->first()->id
        ]);


        ProductSubcategory::factory()->create([
            'name'              => '2C-B',
            'slug'              => '2cb',
            'description'       => '2C-B (4-Bromo-2,5-dimethoxyphenethylamine) is a psychedelic drug, which means it can affect all the senses, altering a person\'s thinking, sense of time and emotions. Psychedelics can cause a person to hallucinate, seeing or hearing things that do not exist or are distorted. 2C-B is part of the \'2C\' group of drugs, which is a general name for phenethylamines. The \'2C\' group of drugs are psychedelic but can also cause stimulant effects. Drugs from this group include 2C-C, 2C-P, 2C-E and 2C-I. The effects vary among each drug in this group.',
            'other_names'       => 'Nexus, BDMPEA, Venus, Bees.',
            'product_category_id'   => ProductCategory::all()->where('name', '=', 'Psychedelics')->first()->id
        ]);

        ProductSubcategory::factory()->create([
            'name'              => 'Ayahuasca',
            'slug'              => 'ayahuasca',
            'description'       => 'Ayahuasca (pronounced \'eye-ah-WAH-ska\') is a plant-based psychedelic. Psychedelics affect all the senses, altering a person\'s thinking, sense of time and emotions. They can cause a person to hallucinate—seeing or hearing things that do not exist or are distorted. Ayahuasca is a decoction (concentrated liquid) made by prolonged heating or boiling of the Banisteriopsis caapi vine with the leaves of the Psychotria viridis shrub, although there can be a variety of other plants included in the decoction for different traditional purposes. The active chemical in ayahuasca is DMT (dimethyltryptamine). It also contains monoamine oxidase inhibitors (MAOIs). Ayahuasca has been used for centuries by First Nations peoples from contemporary Peru, Brazil, Colombia and Ecuador for religious ritual and therapeutic purposes.',
            'other_names'       => 'Huasca, yagé, Kamarampi, Huni, brew, daime, the tea, la purga.',
            'product_category_id'   => ProductCategory::all()->where('name', '=', 'Psychedelics')->first()->id
        ]);

        ProductSubcategory::factory()->create([
            'name'              => 'DMT',
            'slug'              => 'dmt',
            'description'       => 'DMT (Dimethyltryptamine) is a very strong psychedelic found in a number of animals and plants. Psychedelic drugs can affect all the senses, altering a person\'s thinking, sense of time and emotions. Psychedelics can cause someone to hallucinate, seeing or hearing things that do not exist or are distorted. DMT is structurally similar to psilocybin (magic mushrooms) and is known to produce short-acting and intense visual hallucinations.',
            'other_names'       => null,
            'product_category_id'   => ProductCategory::all()->where('name', '=', 'Psychedelics')->first()->id
        ]);

        ProductSubcategory::factory()->create([
            'name'              => 'LSD',
            'slug'              => 'lsd',
            'description'       => 'LSD (lysergic acid diethylamide) is a synthetic chemical, made from a substance found in ergot, which is a fungus that infects rye (grain). LSD belongs to a group of drugs known as psychedelics. When small doses are taken, it can produce mild changes in perception, mood and thought. Larger doses may produce visual hallucinations and distortions of space and time. Sometimes, what is sold as LSD can actually be other chemicals such as NBOMe or the 2C family of drugs (part of the new psychoactive substances). These can be quite dangerous, as their quality is inconsistent. Taking too much of these other substances can be fatal with a number of deaths having been reported.',
            'other_names'       => 'Acid, trips, tabs, microdots, dots, Lucy.',
            'product_category_id'   => ProductCategory::all()->where('name', '=', 'Psychedelics')->first()->id
        ]);

        ProductSubcategory::factory()->create([
            'name'              => 'Psilocybin',
            'slug'              => 'psilocybin',
            'description'       => 'Psilocybin or magic mushrooms are naturally occurring and are consumed for their hallucinogenic effects. They are psychedelic drugs, which means they can affect all the senses, altering a person\'s thinking, sense of time and emotions. Psychedelics can cause a person to hallucinate, seeing or hearing things that do not exist or are distorted. The key ingredient in magic mushrooms is psilocybin. When psilocybin is taken, it’s converted in the body to psilocin, which is the chemical with the psychoactive properties.',
            'other_names'       => 'Shrooms, mushies, blue meanies, golden tops, liberty caps.',
            'product_category_id'   => ProductCategory::all()->where('name', '=', 'Psychedelics')->first()->id
        ]);

        ProductSubcategory::factory()->create([
            'name'              => 'Cannabidiol (CBD)',
            'slug'              => 'cannabidiol',
            'description'       => 'Cannabidiol, commonly known as CBD, is one of more than 100 cannabinoids (chemical substances) found in the cannabis plant. The most well-known cannabinoids are CBD and THC (delta-9 tetrahydrocannabinol). Cannabinoids target the body\'s cannabinoid receptors, located throughout the body and brain, which regulate how a person feels, moves and reacts.',
            'other_names'       => 'CBD, diet dabs.',
            'product_category_id'   => ProductCategory::all()->where('name', '=', 'Cannabinoids')->first()->id
        ]);

        ProductSubcategory::factory()->create([
            'name'              => 'Cannabis',
            'slug'              => 'cannabis',
            'description'       => 'Cannabis is a cannabinoid drug. The number of different cannabinoids in the cannabis sativa plant is still being researched, but it primarily contains the psychoactive cannabinoid THC (delta9 tetrahydrocannabinol) and the non-psychoactive cannabidiol (CBD).1 It\'s also commonly known as marijuana.',
            'other_names'       => 'Marijuana, yarndi, pot, weed, hash, dope, gunja, joint, stick, chronic, cone, choof, mull, 420, dabs, dabbing, BHO.',
            'product_category_id'   => ProductCategory::all()->where('name', '=', 'Cannabinoids')->first()->id
        ]);

        // ProductSubcategory::factory()->create([
        //     'name'              => '',
        //     'description'       => '',
        //     'other_names'       => '',
        //     'product_category_id'   => ProductCategory::all()->where('name', '=', 'Cannabinoids')->first()->id
        // ]);

        Product::factory(400)->create();

        ProductReview::factory(1000)->create();
      
    }
}

<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
class NewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts')->insert([
            'user_id' => '4',
            'category_id' => '1',
            'slug' => 'article',
            'title' => 'FACEBOOK ACT: THE REGULATION SHOULD NOT BE ABOUT CENSORSHIP, BUT ABOUT TRANSPARENCY',
            'thumbnail' => 'thumbnails/SrfbfNbQql5E80eD2PAHmuzRtg3m5rVJLzXK8aN9.jpg',
            'excerpt' => 'FACEBOOK ACT',
            'created_at' => '2021-11-29 18:36:08',
            'updated_at' => '2021-11-29 18:36:08',
            'body' => 'The platforms are mostly criticized because of deletion of comments and disabling profiles, but the main problem is that the users cannot check up on the background of the decision affecting them.

            Social media platforms - in Hungary primarily Facebook - gained a significant role in leading public debates. They enable masses to share, get to know and comment on each other’s opinions. However, their functioning is led by market goals, and they can make themselves most desirable, if the content shared by them reflects to each user his or her own world view. Facebook shows us what we agree with. However, this encloses people in a bubble, who are getting less able to understand each other.
            
            The content spread in the bubble includes not only opinions, but also facts and many times misinformation that also influence the exercising of voting rights. In many countries it is on the agenda to regulate social media platforms by the state at latest since the presidential election of 2016 in the USA. In Hungary, the governing party announced to pass a “Facebook act” this spring, but according to the latest news they will rather postpone the national law-making process until the regulation set by the EU comes into force.
            
            The regulation of social media platforms by the state influences fundamental rights. Therefore, we saw it fit to ascertain in a statement the corner stones with which such a regulation should comply. It makes it more complicated that the managers of the platforms are private entities, therefore, all interference by the state that affects the freedom of expression of users, also interferes with the freedom of the entities managing the social platforms.
            
            The platform managers are mostly criticised due to their decisions affecting the content shared by the users. Such as the platform deleting content, or, on the contrary, omitting to delete content marked by other users. Nevertheless, in our opinion it is not the duty of the state regulation to decide under which circumstances the managers may delete content and profiles, or under which conditions they may share content with users. First of all, the transparency of the platforms’ functioning shall be ensured in order to secure the fundamental rights of users. It is the duty of the site managers to regulate their inner working, but users shall be enabled to check up on the background of the decision affecting them and their rights personally. This way the user could make an informed decision on whether the risks arising from the usage of social media are acceptable.
            
            It comes with an increased danger on freedom of expression, if the future state regulation introduces sanctions vis-à-vis social media platforms, in case of they do not delete certain content. The behaviour and omissions entailing sanctions shall be precisely described and making possible to evaluate the unique circumstances of each case is of a crucial importance. Should it not be completely clear and foreseeable in which cases sanctions apply, the platform managers will be shifted in the direction to rather delete all content regarding which sanctions may apply in case of doubt.
            
            The state interventions may only be oriented at enforcing the removal of unlawful content. Nevertheless, platforms cannot exercise activities requiring legal competence taking over the task of courts. The protection of fundamental rights shall prevail on social media platforms the same way as in case of offline communication: a court decision is necessary for the state to enforce the removal of a content allegedly unlawful.
            
            The site managers may decide on the removal of not unlawful but harmful content if its criterion is transparent. The state regulation may provide legal remedies for the users against such decisions, but judicial remedies shall be made accessible also in this case. It cannot be adduced that the court system could not deal with the burden caused by the mass of the cases: this could be dealt with the establishment of online courts specified to online content management, where the decision-making would be made without personal attendance, through electronic communication, but as emphasized, the decision should be made by humans and not by an algorithm.
            
            The criteria ascertained in our statement are minimum requirements, they do not refer to the ideal, but to the absolutely necessary protection. We had to set up these requirements in circumstances where the domestic regulation is prepared behind closed doors. Knowledge of the planned regulation may only be gained through press releases, or obscure references made by government actors. But the legitimacy of a regulation that was prepared without public discussion is questionable: it is a primary condition for transparent legislation that the civil society and the persons concerned - beyond the platform managers any person, who can be affected as user - have easily accessible and diverse possibilities to offer their opinion of substance.
            
            We feel it important to share our statement for this reason, providing viewpoints for the law being prepared: since the government decided to wait for the EU regulation, there is enough time for the Hungarian regulation to be made after leading a substantive discussion.',
        ]);

        DB::table('posts')->insert([
            'user_id' => '1',
            'category_id' => '3',
            'slug' => 'Klub Radio',
            'title' => 'NOT EVEN THE COURT WOULD STOP THE MEDIA COUNCIL, KLUBRÁDIÓ WILL NO LONGER STAY ON AIR',
            'thumbnail' => 'thumbnails/Q7KfK4bVkDshSJBgqc0tDLRmZxNDpQ43hVP6gS7X.jpg',
            'excerpt' => 'Klub Radio',
            'created_at' => '2021-11-29 18:49:00',
            'updated_at' => '2021-11-29 18:49:00',
            'body' => 'The Metropolitan Court of Budapest dismissed the action brought by the Hungarian Civil Liberties Union (HCLU) on behalf of Klubrádió against the decision of the media authority to silence the radio station without giving detailed reasons.

            The Media Council referred to minor administrative violations in September when it decided not to extend the Klubrádió service provider’s frequency usage right, which expires on February 14th. In other cases however the authority was less harsh: after failures of similar gravity other radio broadcasters were still allowed to renew their eligibility for the tender.
            
            The decision was legally challenged by Klubrádió with the help of the HCLU, asking the court to oblige the Media Council to conduct a new procedure. The relevant action was dismissed by the Metropolitan Court on 9 February. The court gave a surprisingly brief reasoning for the decision, not addressing why the authority had made contrary decisions in the case of other radio stations, nor that the administrative omission of Klubrádió was a minor infringement which normally could not have been invoked by the Media Council as a “repeated violation”.
            
            However even if the court had annulled the decision of the Media Council it would not have been enough on it’s own to allow Klubrádió to broadcast uninterruptedly in Budapest after 14 February. Therefore the radio station also asked the court to temporarily allow it to broadcast until the ongoing proceedings were completed. This was rejected by the court on the grounds that the authorization could not be granted by domestic law and that only the Media Council could authorize the temporary broadcasting of the radio station.
            
            This means that Klubrádió will not stay on the air on its current frequency from February 14, and while it may continue to broadcast online it certainly won’t reach all of its previous listeners. “The Hungarian public is once again the loser as the government liquidates an opponent media outlet. "Although the radio is silenced on this frequency the dispute does not end there” said Júlia Kaputa, legal officer of the HCLUs Political Freedoms Project.
            
            Klubrádió was represented by Dr. Tímea Váci, the lawyer of the HCLU in this case.',
        ]);

        DB::table('posts')->insert([
            'user_id' => '2',
            'category_id' => '7',
            'slug' => 'cyber security',
            'title' => 'ICCL, HCLU AND LIBERTY CALL ON STATES TO DEFEND END-TO-END ENCRYPTION AND SAFEGUARD OUR TEXTS, EMAILS, VOICE CALLS, SOCIAL MEDIA, AND ONLINE EXPENDITURE',
            'thumbnail' => 'thumbnails/saBnPFOATG3TPsN3LhtlScVy2xtZ5a3tD7gI9hZT.jpg',
            'excerpt' => 'cyber security',
            'created_at' => '2021-11-29 18:50:20',
            'updated_at' => '2021-11-29 18:50:20',
            'body' => 'The Hungarian Civil Liberties Union, the Irish Council for Civil Liberties and Liberty express grave concerns regarding calls from the Council of the European Union and the European Commission to allow police authorities intercept encrypted communications.

            End-to-end encryption keeps us safe
            
            End-to-end encryption (E2EE) is vital to protect the privacy and security of citizens and governments around the world, as it prevents any third party from reading private messages sent between a sender and recipient. But E2EE doesn’t just safeguard our texts, emails, voice calls and social media. E2EE also protects and secures our data when it comes to personal banking transactions, online credit card use, online shopping, buying health insurance, accessing health data, and carrying out our employment. We are alarmed that the foundation of trust that enables the digital market would be put in jeopardy.
            
            Best policy decisions need data
            
            Europol itself reported last year that official statistics on the number of investigations that require decryption of data are not available. Without this data, how can we measure the proportionality and necessity of weakening encryption which would have consequences for, at the very least, the more than 450 million unique mobile phone subscribers in Europe?
            
            Alarm regarding encryption-breaking proposals
            
            The plans strike at the heart of Article 8 of the European Convention on Human Rights which protects the right to respect for private life, the home and correspondence, including the privacy of messages, phone calls and emails.
            
            Call on states to defend secure and private communication rights
            
            Any weakening of that encryption, no matter how well intentioned, will weaken security around these activities; increase well-founded fears of fraud and identity theft; and likely breed distrust.
            
            We are calling on authorities to protect E2EE and safeguard the privacy and innumerable daily security benefits and uses of encryption by people around the world.
            
            ICCL, HCLU and Liberty are members of INCLO, a network of 15 human rights organisations.',
        ]);
    }
}

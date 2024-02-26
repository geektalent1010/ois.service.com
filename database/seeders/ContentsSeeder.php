<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Content;

class ContentsSeeder extends Seeder
{
  /**
   * Run the database seeds.
   */
  public function run(): void
  {
    Content::truncate();

    //en
    Content::create([
      'title' => 'ABOUT OIS',
      'content' => '<p class="title body-section">Innovative software solutions<br>across industries.</p>',
      'order_num' => 1,
      'lang' => 'en',
    ]);
    Content::create([
      'title' => 'ABOUT OIS',
      'content' => '<p class="sub-title">OIS (Online Integrated Services)</p>
                <p class="description mt-4">OIS (Online Integrated Solutions) stands at the forefront of innovation as a leading provider of cutting-edge software solutions spanning various industries. Our journey began as a Visa Application Centre and Support Services Provider, and we have since evolved to extend our services to all of Nigeria\'s diplomatic missions worldwide. Our success is underpinned by advanced technology, unparalleled quality, scalability, and the seamless transferability of our solutions.</p>
                <p class="description mb-0 mt-4">What sets OIS apart is our global footprint, allowing for the effortless integration of applications on a worldwide scale. Our commitment to excellence extends beyond immigration services, as we boast a robust track record in banking platforms. Serving as a crucial intermediary for Nigerian banks, we deliver essential services to non-resident Nigerians and individuals of other nationalities abroad seeking to open or reactivate their Nigerian bank accounts.</p>
                <p class="description mb-0 mt-4">At OIS, we continually strive to redefine industry standards, offering a comprehensive suite of solutions that reflect our dedication to excellence and technological prowess. Join us on a journey of unparalleled service delivery and global connectivity.</p>',
      'order_num' => 2,
      'lang' => 'en',
    ]);
    Content::create([
      'title' => 'ABOUT OIS',
      'content' => '<p class="description">At OIS, we take immense pride in our unwavering commitment to exceptional service delivery and cutting-edge technology. Our comprehensive range of services goes beyond visa and passport solutions, encompassing Education, Healthcare, and Banking platforms. We believe in simplifying processes, and to achieve this, we offer a streamlined application experience through our user-friendly online portal, seamless payment system, and real-time updates.</p>
                <p class="description mt-4 mb-0">For those seeking to obtain a Bank Verification Number (BVN), our online application process coupled with SMS delivery ensures an efficient and hassle-free experience.</p>
                <p class="description mt-4 mb-0">In the realm of financial services, our Electronic Money Transfer services stand out. We provide a secure and affordable means for online money transfers, supporting various methods such as cash pick-up, cryptocurrency transactions, bank transfers, mobile money transactions, and airtime top-ups. With OIS, experience the convenience of modern, secure, and flexible financial solutions tailored to meet your diverse needs.</p>',
      'order_num' => 3,
      'lang' => 'en',
    ]);
    Content::create([
      'title' => 'ABOUT OIS',
      'content' => '<p class="description mb-0">At OIS, the well-being of our clients takes center stage, and our commitment extends to delivering top-notch E-health and Wellness services. Immerse yourself in a comprehensive approach to health with our array of offerings:</p>
                <p class="description mt-0 mb-0"><b>Telemedicine Services:</b></p>
                <p class="description mt-0 mb-0 ml-4">• Experience healthcare on your terms with our telemedicine services. Connect seamlessly with healthcare professionals through virtual consultations, unlocking personalized diet plans, curated exercise routines, and invaluable mental health support. Your well-being is our priority, and our telemedicine
                    services bring healthcare expertise directly to you.</p>
                <p class="description mt-0 mb-0"><b>Health Monitoring Devices:</b></p>
                <p class="description mt-0 mb-0 ml-4">• Stay informed and proactive about your health with our health monitoring devices. These cutting-edge tools allow you to track vital signs, providing valuable insights into your overall health. Empower yourself with data-driven decisions for a healthier lifestyle.</p>
                <p class="description mt-0 mb-0"><b>Integrated Wellness Program:</b></p>
                <p class="description mt-0 mb-0 ml-4">• Our wellness program is a holistic haven for health, seamlessly integrating mental health support into your well-being journey. Beyond physical health, we prioritize mental wellness, fostering a balanced and comprehensive approach to overall well-being.</p>
                <p class="description mt-0 mb-0">Our mission is to provide not only cutting-edge software solutions but also to be a trusted ally in your pursuit of health and wellness. By simplifying processes and enhancing experiences across industries, we are dedicated to making a positive impact on every facet of your life. Welcome to a world where
                    innovation meets well-being.</p>
                <p class="description mt-4 mb-5">At OIS, our unwavering commitment is to pioneer cutting-edge software solutions that not only streamline processes but also simplify processes and elevate experiences across diverse industries.</p>',
      'order_num' => 4,
      'lang' => 'en',
    ]);
    Content::create([
      'title' => 'SERVICES',
      'content' => '<p class="title body-section">Helping businesses and individuals<br>overcome complex challenges.</p>',
      'order_num' => 1,
      'lang' => 'en',
    ]);
    Content::create([
      'title' => 'SERVICES',
      'content' => '<p class="sub-title">VISA AND PASSPORT APPLICATION PROCESSING:</p>
                <p class="description mb-0">At Online Integrated Solutions (OIS), we stand as a global trailblazer in revolutionary software solutions, dedicated to empowering businesses and individuals in overcoming intricate challenges. Our profound impact is particularly evident in the realm of VISA application processing, where we harness the power of advanced machine learning (ML) algorithms to enhance efficiency, accuracy, and scalability, ultimately elevating the overall customer experience. Here are key areas where our innovative approach to machine learning can bring about transformative improvements:</p>
                <p class="description mt-0 mb-0 ml-4">• Data Processing and Validation.</p>
                <p class="description mb-0 ml-4">• Fraud Detection.</p>
                <p class="description mb-0 ml-4">• Biometric Identification.</p>
                <p class="description mb-0 ml-4">• Application Status Tracking.</p>
                <p class="description mb-5 mt-4">At OIS, we envision a future where technology not only meets but exceeds expectations, and our commitment to pushing the boundaries of innovation ensures that our clients and users benefit from the most advanced, efficient, and secure visa and passport application processing solutions available.</p>',
      'order_num' => 2,
      'lang' => 'en',
    ]);
    Content::create([
      'title' => 'SERVICES',
      'content' => '<p class="sub-title">BANK VERIFICATION NUMBER (BVN) APPLICATION PROCESSING:</p>
                <p class="description mb-0">In our relentless pursuit of seamless services, we recognize the transformative potential of machine learning, particularly in optimizing our Bank Verification Number (BVN) application process. We comprehend the paramount importance of swift and accessible BVN issuance for our customers, propelling us to continually refine and expedite this crucial procedure. Harnessing the capabilities of machine learning, we aim to elevate both the accuracy and efficiency of BVN registrations, concurrently mitigating the risks associated with errors and fraudulent activities. Here are key domains where our incorporation of machine learning promises a substantial impact:</p>
                <p class="description mt-0 mb-0 ml-4">• Data Processing and Validation.</p>
                <p class="description mt-0 mb-0 ml-4">• Predictive Analytics.</p>
                <p class="description mt-0 mb-0 ml-4">• Fraud Detection.</p>
                <p class="description mt-4 mb-5">At the heart of our commitment lies the dedication to providing our customers with an unparalleled BVN application experience—prompt, precise, and fortified against potential risks. Through the infusion of machine learning, we embark on a journey to redefine the standards of efficiency and security in BVN issuance.</p>',
      'order_num' => 3,
      'lang' => 'en',
    ]);
    Content::create([
      'title' => 'SERVICES',
      'content' => '<p class="sub-title">ELEVATING SERVICE EXCELLENCE WITH AI-POWERED CHATBOTS:</p>
                <p class="description">We are thrilled to unveil our latest innovation—the AI Chatbot—an instrumental advancement poised to transform customer service and support. This state-of-the-art Chatbot harnesses the power of machine learning algorithms, presenting customers with a personalized and efficient avenue for assistance. Our Chatbot is designed to revolutionize the customer experience by delivering prompt and precise responses to inquiries and resolving issues with minimal reliance on human intervention.</p>
                <p class="description mt-4 mb-0">Key Features and Benefits:</p>
                <p class="description mt-0 mb-0 ml-4">• Quick and Accurate Responses.</p>
                <p class="description mt-0 mb-0 ml-4">• 24/7 Accessibility.</p>
                <p class="description mt-0 mb-0 ml-4">• Elimination of Wait Times.</p>
                <p class="description mt-0 mb-0 ml-4">• Versatile Inquiry Handling.</p>
                <p class="description mt-4 mb-5">This AI Chatbot represents a commitment to redefining service standards, ensuring that our customers experience a seamless and efficient interaction with our brand. As technology continues to evolve, we remain at the forefront, leveraging innovative solutions to enhance your customer journey. Welcome to a new era of personalized and responsive</p>',
      'order_num' => 4,
      'lang' => 'en',
    ]);
    Content::create([
      'title' => 'SERVICES',
      'content' => '<p class="sub-title">ELEVATING E-HEALTH AND WELLNESS THROUGH CUTTING-EDGE TECHNOLOGY</p>
                <p class="description mb-0">Embarking on a journey of continuous improvement, we are committed to revolutionizing our E-health and Wellness Services through the integration of advanced technology. Explore the myriad ways in which these innovations can empower you to maintain optimal health and well-being:</p>
                <p class="description mt-0 mb-0">1. Telemedicine Services:</p>
                <p class="description mb-0 ml-4">• Immerse yourself in the future of healthcare with our advanced systems. Precision and personalization are at the forefront as our telemedicine services accurately diagnose health concerns and deliver bespoke treatment plans tailored to your unique needs.</p>
                <p class="description mt-0 mb-0">2. Wellness Program:</p>
                <p class="description mb-0 ml-4">• Embrace a holistic approach to well-being through our ground breaking wellness program. Leveraging the transformative potential of Blockchain and Web3 technology, our secure and decentralized platform offers personalized diet plans, tailored exercise regimes, and comprehensive mental health support. Step into a wellness journey that is as individual as you are.</p>
                <p class="description mt-0 mb-0">3. Health Monitoring Devices:</p>
                <p class="description mb-0 ml-4">• Unleash the power of AI with our health monitoring devices. These intelligent systems analyze data collected from a range of devices, providing you with personalized feedback and insightful recommendations. Transform the way you monitor your health, with technology that evolves with you.</p>
                <p class="description mt-4 mb-5">At the intersection of innovation and health, we envision a future where technology enhances every facet of your well-being journey. Our commitment is to empower you with personalized, secure, and cutting-edge solutions that redefine the standards of E-health and Wellness. Welcome to a realm where your health is not just a priority—it\'s a personalized experience.</p>',
      'order_num' => 5,
      'lang' => 'en',
    ]);
    Content::create([
      'title' => 'SERVICES',
      'content' => '<p class="sub-title">REVOLUTIONIZING ELECTRONIC MONEY TRANSFER WITH BLOCKCHAIN AND WEB3 TECHNOLOGIES</p>
                <p class="description">OIS proudly announces a ground breaking enhancement to our Electronic Money Transfer service through the integration of cutting-edge Blockchain and Web3 technologies. This strategic evolution elevates the standard of our service, providing customers with an unprecedented level of transparency and security.</p>
                <p class="description mt-4 mb-0">Key Advancements:</p>
                <p class="description mt-0 mb-0 ml-4">• Immutable Ledger Recording.</p>
                <p class="description mt-0 mb-0 ml-4">• Fast, Secure, and Low-Cost Options.</p>
                <p class="description mt-0 mb-0 ml-4">• Enhanced Flexibility and Convenience.</p>
                <p class="description mt-4 mb-5">At OIS, we are committed to redefining the landscape of electronic financial services. The integration of Blockchain and Web3 is a testament to our dedication to innovation, ensuring that our customers experience the utmost in security, transparency, and convenience when entrusting us with their financial transactions. Welcome to a new era of Electronic Money Transfer—where technology meets trust.</p>',
      'order_num' => 6,
      'lang' => 'en',
    ]);
    Content::create([
      'title' => 'INNOVATION',
      'content' => '<p class="title body-section">The future of virtual reality<br>is here.</p>',
      'order_num' => 1,
      'lang' => 'en',
    ]);
    Content::create([
      'title' => 'INNOVATION',
      'content' => '<p class="sub-title">AI-powered Personalization</p>
                <p class="description">We use AI algorithms to personalize our services to each individual customer\'s needs. By analyzing customer data and behavior patterns, we can tailor our solutions to meet specific requirements and preferences.</p>',
      'order_num' => 2,
      'lang' => 'en',
    ]);
    Content::create([
      'title' => 'INNOVATION',
      'content' => '<p class="sub-title">Machine Learning for Fraud Detection</p>
                <p class="description">Our machine learning algorithms analyze customer behaviour, transactional data, suspicious activities, and prevents fraudulent transactions across all our services.</p>',
      'order_num' => 3,
      'lang' => 'en',
    ]);
    Content::create([
      'title' => 'INNOVATION',
      'content' => '<p class="sub-title">Blockchain-based Security</p>
                <p class="description">Our new technology direction is Blockchain and Web3, which provides increased security and transparency for our customers\' data and transactions. We implement blockchain technology to ensure the immutability and traceability of our data, as well as enhanced security against data breaches and hacks.</p>',
      'order_num' => 4,
      'lang' => 'en',
    ]);
    Content::create([
      'title' => 'INNOVATION',
      'content' => '<p class="sub-title">Web3-based Decentralization</p>
                <p class="description">Our Web3-based solutions provide greater decentralization and democratization of services. By using Web3 protocols, we can reduce the dependence on centralized intermediaries, lower transaction fees, and improve accessibility and inclusivity for our customers.</p>',
      'order_num' => 5,
      'lang' => 'en',
    ]);
    Content::create([
      'title' => 'INNOVATION',
      'content' => '<p class="sub-title">Research and Development</p>
                <p class="description">To stay ahead of the competition, we are investing in research and development of new technologies and their potential applications. We collaborate with startups, academia, and research institutions to accelerate innovation and bring advanced solutions to our customers.</p>',
      'order_num' => 6,
      'lang' => 'en',
    ]);
    Content::create([
      'title' => 'INNOVATION',
      'content' => '<p class="sub-title">Virtual Reality-based Training</p>
                <p class="description mb-5">We provide virtual reality-based training for our healthcare professionals and customer support teams to enhance their skills and provide better service. Our VR-based training programs simulate real-world scenarios, providing a safe and immersive learning experience.</p>',
      'order_num' => 7,
      'lang' => 'en',
    ]);
    Content::create([
      'title' => 'SECURITY',
      'content' => '<p class="title body-section">With OIS<br>your data is secure.</p>',
      'order_num' => 1,
      'lang' => 'en',
    ]);
    Content::create([
      'title' => 'SECURITY',
      'content' => '<p class="sub-title">Data Protection and Security</p>
                <p class="description">OIS places a high priority on data protection and security for our customers. We have implemented a range of measures to ensure the security and accuracy of customer data, including robust encryption protocols, regular backups, and secure data storage solutions.</p>
                <p class="description mt-4">In addition, we have established strict data access controls, ensuring that only authorized personnel have access to sensitive customer data. To maintain the accuracy of customer data, OIS employs automated data verification and cleansing processes, to ensure data is always accurate and up to date.</p>
                <p class="description mt-4 mb-5">OIS obtains customer data through secure, consent-based processes and uses this data to inform the development of new products and services that deliver real value to customers.</p>',
      'order_num' => 2,
      'lang' => 'en',
    ]);
    Content::create([
      'title' => 'DISCLAIMERS',
      'content' => '',
      'order_num' => 1,
      'lang' => 'en',
    ]);
    Content::create([
      'title' => 'TERMS OF USE',
      'content' => '
        <div class="main-title">
          Disclaimer and Terms of Use
        </div>
        <div class="sub-body">
          <div class="sub-title">1. Important Notes</div>
          <div class="sub-section">
              <p class="para-section">
                  OIS recommends that you do not purchase tickets or make bookings which cannot be cancelled without cost prior to the issuance of a visa, except where it is a specific requirement stated as part of the visa application.
              </p>
              <p class="para-section">
                  These terms contain a disclaimer which limits our liability to our refund policy stated below. Except where covered in our refund policy below, all fees are non refundable, and may be retained by us on payment by you, even if you do not make or proceed with a visa application, and whether or not a visa is granted.
              </p>
              <p class="para-section">
                  You are responsible for the accuracy of your application form, and for checking your application form. We do not guarantee that we will find any errors, and we do not verify information you have provided.
              </p>
          </div>
          <div class="sub-title">2. Service Provider</div>
          <div class="sub-section">
              <p class="para-section">
                  OIS is a visa processing centre for Nigerian visa applications with officess at:
              </p>
              <ul class="para-list">
                  <li>
                      Abuja (No.5 Onitsha Crescent, Off Gimbiya Street, Area 11, Garki, Abuja Nigeria)
                  </li>
                  <li>
                      Amsterdam (Kingsfordweg 151, 1043GR, Amsterdam Netherlands)
                  </li>
                  <li>
                      Ankara (Danismanlik Ltd. Sti. Kazim Ozalp Mahallesi Koza Caddesi 35/3 Cankaya, Ankara
                      Turkey)
                  </li>
                  <li>
                      Atlanta (918 Holcomb Bridge Road, Suite 204, Roswell, Atlanta, GA USA 30076 )
                  </li>
                  <li>
                      Beijing (Unit 1 Suite 1801, Kun Sha Building, 16 Xin Yuan Li Str, Chaoyang District, Beijing PRC)
                  </li>
                  <li>
                      Beirut (Jnah-Beirut Opposite Rafik Hariri University Hospital Mais 6 Building- 3Rd Floor P.O.Box 9 UNESCO, Beirut, Lebanon)
                  </li>
                  <li>
                      Guangzhou (Unit 27/28, 41st Floor, R&F To-Win Building,30 Huaxia Rd, Tianhe District, Guangzhou PRC)
                  </li>
                  <li>
                      Houston (9894 Bissonnet Street, Suite 745 Houston TX 77036 USA)
                  </li>
                  <li>
                      Johannesburg (6 Bolton Road Parkwood Rosebank, 2193, Johannesburg, South Africa)
                  </li>
                  <li>
                      Kuala Lumpur (36.01 Level 36 Menara Citibank, 165 Jalan AmpangÂ 50450Â Kuala Lumpur Malaysia)
                  </li>
                  <li>
                      Leicester (St Georges House, 6 St Georges Way, Leicester LE1 1SH, UK)
                  </li>
                  <li>
                      London (56-57 Fleet Street City of London London EC4Y 1JU United Kingdom )
                  </li>
                  <li>
                      Los Angeles (11222 S. La Cienega Blvd Inglewood, Suite 302, CA. 90304 USA )
                  </li>
                  <li>
                      London (56-57 Fleet Street City of London London EC4Y 1JU United Kingdom )
                  </li>
                  <li>
                      Mumbai (Quest Offices Pvt. Ltd., 8th Floor, Parinee Crescenzo, C38 & 39, G Block, Bandra Kurla Complex, Bandra (East) Pin:400051, Maharashtra, India )
                  </li>
                  <li>
                      New Delhi (C/O central Board of Irrigation & Power Plot No. 4, Ground Floor, Institutional Area Opp.: Sarvodaya School Malcha Marg Chanakyapuri New Delhi 110021, Delhi, India)
                  </li>
                  <li>
                      New York (370 Lexington Ave, Suite 1505 New York, NY 10017 USA)
                  </li>
                  <li>
                      Paris (7 Rue Daru 75008 Paris, France)
                  </li>
                  <li>
                      Pretoria (3rd Floor, Building 2, Brooklyn Bridge Office Park, Pretoria 570 Fehrsen, South Africa)
                  </li>
                  <li>
                      Rome (S.R.L., Via Sicilia, 30 00187 Rome, Italy)
                  </li>
                  <li>
                      Shanghai (Room 2025, 20/F, Catic Building, 212 Jiangning Road, Jing\'an District, Shanghai, PRC)
                  </li>
                  <li>
                      Washington DC (11900 Parklawn Drive Suite 160, Rockville MD 20852, Washington DC USA)
                  </li>
              </ul>
          </div>
          <div class="sub-title">3. Application of These Terms</div>
          <div class="sub-section">
              <p class="para-section">
                  These terms and conditions govern your use of the services of the OIS, all visa applications you make, and all enquiries you make for advice or information concerning Nigerian visas. Each applicant for a visa hereby accepts and confirms that, prior to submitting a visa application, they have read, understood and agreed to be bound by, without limitation or qualification, all of these terms and conditions. No employee of OIS has any authority whatsoever to change, amend, amplify or withdraw any or all of these terms and conditions without prior written approval from OIS.
              </p>
          </div>
          <div class="sub-title">4. The Visa Application Service</div>
          <div class="sub-section">
              <div class="sub-title pl-0">4.1 Scope</div>
              <p class="para-section">
                  OIS is the outsourced partner of the Nigeria High Commission in the United Kingdom. In this capacity, OIS is responsible for scheduling appointments, receipt of visa applications for travel to Nigeria and submission of applications at the Nigeria High Commission in London, collecting the processed passports and returning passports back to applicants.
              </p>
              <div class="sub-title pl-0">4.2 Acceptance and Rejection of Applications</div>
              <p class="para-section">
                  The assessment of visa applications is carried out by the Nigeria High Commission and the grant or refusal of visas is at their sole discretion. The Nigeria High Commission reserve the right to ask for further documentation and information from the applicant, and to refuse any visa application. The applicant must supply such further documents and information if they wish their application to continue to be considered.
              </p>
              <div class="sub-title pl-0">4.3 Fees</div>
              <p class="para-section">
                  The fees payable by you comprise the Nigeria High Commission administrative fee for the visa, which we forward on to the High Commission and our fees, comprising our service fee and other fees such as bank charges and fees.
              </p>
              <p class="para-section">
                  Fees stated are only valid on the day that they are quoted or provided by us. If you decide to make your application on a later date, the fees may change.
              </p>
              <p class="para-section">
                  All costs of returning passports, visas and documents to you are included in the final total fee based on information provided by you and the delivery methods selected by you.
              </p>
              <p class="para-section">
                  All fees must be received in full under the available payment options.
              </p>
              <p class="para-section">
                  Except where covered in our refund policy below, all fees are non refundable, and all fees are payable and may be retained by us on payment by you, even if you do not make or proceed with a visa application, and whether or not a visa is granted.
              </p>
              <div class="sub-title pl-0">4.4 General Obligation</div>
              <p class="para-section">
                  OIS will process all visa applications with reasonable attention and skill and in line with all procedures and guidelines set by the Nigeria High Commission. However, whilst we use reasonable attention to check your application form for obvious errors on the face of the form, we do not guarantee to detect errors with your form, and we do not undertake to verify any information you provide, which you are responsible for ensuring is accurate.
              </p>
              <div class="sub-title pl-0">4.5 Applicant\'s Responsibility</div>
              <p class="para-section">
                  It is the responsibility of all applicants to complete all applications forms truthfully, to provide correct and accurate information and documentation, to ensure that they have a valid passport, and on receipt of visa to check the validity of the visa issued to ensure that it covers the period of stay requested, the number or entries required, and that it is valid for the purpose of the trip.
              </p>
              <div class="sub-title pl-0">4.6 Processing Times</div>
              <p class="para-section">
                  The processing times for visas applications are estimates only. These are based on information and experience of the Nigeria High Commission. The processing of your application is subject to the procedures and processing timescales of the Nigeria High Commission over which OIS have no control.
              </p>
              <div class="sub-title pl-0">4.7 Changes to Procedures and Fees</div>
              <p class="para-section">
                  The procedures and fees of the Nigeria High Commission for the processing of visas and related services are outside the control of OIS and subject to change without prior notice. OIS does not accept responsibility for any changes in procedures or fees and reserves the right to pass on any increased fees.


              </p>
              <div class="sub-title pl-0">4.8 Cancellation</div>
              <p class="para-section">
                  If you commence a visa application process, including by submitting an online application, but do not complete the visa application process, including where you fail to send your visa application documentation to us or to attend in person at a visa application centre to complete your visa application, within 12 months of commencing the visa application process, then your visa application shall be considered to have expired and we may retain the visa fee paid by you, as well as all service fees, bank fees and other fees. We shall not be obliged to notify you of this.
              </p>
              <p class="para-section">
                  Your right above is the only cancellation right you have. Once you have submitted your application to us, you will be taken to have agreed that we may immediately commence processing your application and providing any services, and as a result you will not have any right to cancel under the Consumer Protection (Distance Selling) Regulations 2000. This is because, under Regulation 13(1)(a), you lose your right to cancel if you agree that we can start providing the services within the cancellation period.
              </p>
          </div>
          <div class="sub-title">5. Refund Policy</div>
          <div class="sub-section">
              <div class="sub-title pl-0">5.1 Refund of Visa Application Fee</div>
              <p class="para-section">
                  If OIS is in breach of contract or negligent in relation to any visa application submitted, resulting in the visa not being granted or loss of applicants passport with valid visas, in each case, wherein the applicant has to apply for a new passport or cannot travel to Nigeria at the times stated by the applicant in his/her visa application, then OIS will refund to the applicant the visa fee, but not any service fee, bank fee or other fee.
              </p>
              <div class="sub-title pl-0">5.2 Loss or damage to passports and other travel documents</div>
              <p class="para-section">
                  OIS takes every reasonable precaution while handling an applicant\'s passport & documents, and if due to any breach of contract or negligence on the part of OIS, the applicant\'s submitted passport or documents are lost or damaged beyond a useable condition, then OIS will pay to the applicant the amount of the fees charged by the government of the applicant\'s home country, for the replacement of the lost or damaged passport or other documents through their normal replacement procedure, and OIS will assist the applicant with the same within its capacity. Such payments will be made by OIS to the applicant on the presentation of the payment receipt issued by the government of their respective home country for the replacement of such lost or damaged passport or documents.
              </p>
          </div>
          <div class="sub-title">6. Disclaimer</div>

          <div class="sub-section">
              <p class="para-section">
                  Except for the refund or reimbursements of fees as stated in the section above, OIS excludes its liability in connection with any visa applications, including liability in or under contract, negligence, tort, statute or otherwise howsoever, and including liability for any delay or failure of OIS in handling or processing visa applications, loss of or delay to passports and other documents, delays involving the Nigeria High Commission and rejections of visa applications for any reason.
              </p>
              <div class="sub-title pl-0">And for the avoidance of doubt</div>
              <div class="sub-title pl-0">6.1 No Liability for Incorrect Information</div>
              <p class="para-section">
                  OIS shall have no liability for loss, delays or non-issuance of any application arising from or in connection with (to include but not restricted to) incomplete application forms, incorrectly or falsely completed application forms, and inaccurate or incomplete supporting documentation.
              </p>
              <div class="sub-title pl-0">6.2 No Liability for Events Not In Our Control</div>
              <p class="para-section">
                  OIS shall not be considered to be in breach of contract or negligent or otherwise liable in any way for any delay or failure of any application or loss, damage or delay to any passport or other documents due to accident, theft, natural calamities (act of god) or any other reason outside the control of, and not arising out of a wilful default of, OIS, or for the loss or damage to any passport or other document after it has been handed over to the applicant.
              </p>
              <div class="sub-title pl-0">6.3 No Liability for Postal and Courier Service</div>
              <p class="para-section">
                  OIS shall have no liability for any delays, or for loss of or damage to any visa application, passport or other documents, caused by, or occurring whilst any application, passport or document is in the possession of, any third party postal or courier service, including transportation of visa applications, passport or other documents between OIS and the Nigeria High Commission and when being returned by OIS to the applicant.
              </p>
              <div class="sub-title pl-0">6.4 No Liability for Assessment of Visa Applications</div>
              <p class="para-section">
                  OIS is not involved in the process of assessment of visa applications, or their grant or refusal, and shall not be liable or responsible for any delay by the Nigeria High Commission in assessing, granting or refusing any visa application.
              </p>
              <div class="sub-title pl-0">6.5 No Liability for Wasted Costs and Expenses</div>
              <p class="para-section">
                  OIS shall have no liability to any visa applicant, or any other person relying on or benefiting from any visa application, for any commitment, cost or expenditure incurred in reliance on or anticipation of receiving a Nigerian visa, whether within a particular timescale or at all, including but not limited to air travel, hotel, and other travel and accommodation arrangements, and any other arrangements made.
              </p>
              <p class="para-section">
                  OIS recommends that you do not purchase tickets or make bookings which cannot be cancelled prior to the issuance of a visa, except where it is a specific requirement stated as part of the visa application, in which case open tickets should be obtained.
              </p>
              <div class="sub-title pl-0">6.6 General Exclusion of Loss and Damage</div>
              <p class="para-section">
                  OIS shall have no liability (including in contract or for negligence) to any visa applicant, or any other person relying on or benefiting from any visa application, for any direct, indirect, punitive, incidental, special, consequential damages or any damages whatsoever, including where caused by delay, misplacement, loss or damage of visa applications, passports and other documents, other than as stated in Section 5 above.
              </p>
              <p class="para-section">
                  OIS shall have no liability (including in contract or for negligence) to any visa applicant or any other person relying on or benefiting from any visa application for any loss of profit, revenue, or contract, or business, profession, or other occupation, including where caused by delay, misplacement, loss or damage of visa applications, passports and other documents.
              </p>
          </div>
          <div class="sub-title">7. General</div>
          <div class="sub-section">
              <div class="sub-title pl-0">7.1 Third Party Rights</div>
              <p class="para-section">
                  Nothing in these Terms and Conditions shall benefit or be enforceable by any person other than the visa applicant, and the Contracts (Rights of Third Parties) Act 1999 shall not apply.
              </p>
              <div class="sub-title pl-0">7.2 Changes to these terms</div>
              <p class="para-section">
                  OIS, in its sole discretion, may change, amend, cancel or withdraw any or all of these terms and conditions at any time without any prior notice.
              </p>
              <div class="sub-title pl-0">7.3 Applicable Law</div>
              <p class="para-section">
                  These terms and conditions and any visa applications shall be governed and construed in accordance with the laws of the countries we have presence. Any claims or disputes arising in relation to the services provided by OIS to the applicant shall be subject to the exclusive Jurisdiction of the courts in the country.
              </p>
          </div>
          <div class="sub-title">8.Complaints</div>
          <div class="sub-section">
              <p class="para-section">
                  Please address any complaints to the customer relationship department through email at
              </p>
              <p class="para-section">
                  info@oisservices.com
              </p>
          </div>
        </div>',
      'order_num' => 1,
      'lang' => 'en',
    ]);
    Content::create([
      'title' => 'PRIVACY POLICY',
      'content' => '
        <div class="main-title">Privacy Policy</div>
        <div class="sub-body">
          <div class="sub-title">1. Introduction</div>
          <div class="sub-section">
            <p class="para-section">
              At OIS, we are committed to protecting the privacy and confidentiality of our customers\' personal data. This Privacy Policy outlines how we, use, disclose, and protect the personal data we obtain from individuals who use our services. We comply with applicable data protection laws, including the General Data Protection Regulation (GDPR), and strive to ensure the highest standards of privacy and data security.
            </p>
          </div>
          <div class="sub-title">2. Data Collection and Use</div>
          <div class="sub-section">
            <div class="sub-title pl-0">2.1 Personal Data Collection</div>
            <p class="para-section">
              We collect personal data from individuals in various ways, including when they create an account, make a payment, contact us, complete surveys, interact with our websites or applications, or utilize our services. The types of personal data we may collect include, but are not limited to:
            </p>
            <ul class="para-list">
              <li>Name, address, and contact information</li>
              <li>Passport and visa details</li>
              <li>Biometric data</li>
              <li>Bank verification numbers</li>
              <li>Payment transaction details</li>
              <li>Health information (for e-health services)</li>
              <li>Interactions with our services and websites</li>
              <li>Houston (9894 Bissonnet Street, Suite 745 Houston TX 77036 USA)</li>
              <li>Employment or professional details (for recruitment purposes)</li>
            </ul>
            <div class="sub-title pl-0">2.2 Purpose of Data Processing</div>
            <p class="para-section">
              We process personal data for the following purposes:
            </p>
            <ul class="para-list">
              <li>
                To communicate with individuals and fulfil their service requests or purchase orders.
              </li>
              <li>To provide customer support and respond to inquiries.</li>
              <li>
                To improve and personalize individuals\' experience with our services.
              </li>
              <li>To process payments and verify financial transactions.</li>
              <li>
                To comply with legal obligations, including reporting obligations to relevant authorities.
              </li>
              <li>
                To manage our systems and processes, including data analysis, auditing, and troubleshooting.
              </li>
              <li>
                To conduct investigations and exercise legal rights, including fraud prevention and detection.
              </li>
              <li>To develop and improve our products and services.</li>
            </ul>
            <div class="sub-title pl-0">2.3 Legal Basis for Processing</div>
            <p class="para-section">
              We process personal data based on one or more of the following legal bases:
            </p>
            <ul class="para-list">
              <li>
                The necessity of processing for the performance of a contract or to take pre-contractual steps at the individual\'s request.
              </li>
              <li>Compliance with legal obligations to which we are subject.</li>
              <li>
                Consent provided by individuals for specific processing activities.
              </li>
              <li>
                Legitimate interests pursued by OIS or a third party, provided that such interests are not overrid den by the individual\'s rights and interests.
              </li>
            </ul>
          </div>
          <div class="sub-title">3. Data Sharing and Disclosure</div>
          <div class="sub-section">
            <div class="sub-title pl-0">3.1 Third-Party Service Providers</div>
            <p class="para-section">
              We may share personal data with trusted third-party service providers who assist us in delivering our services and fulfilling our obligations. These service providers are contractually bound to only process personal data on our behalf and in accordance with our instructions.
            </p>
            <div class="sub-title pl-0">3.2 Business Transfers</div>
            <p class="para-section">
              In the event of a merger, acquisition, or sale of all or a portion of our assets, personal data may be transferred to the relevant third party as part of the transaction. We will take reasonable steps to ensure the security and confidentiality of personal data during such transfers.
            </p>
            <div class="sub-title pl-0">3.3 Legal and Compliance Requirements</div>
            <p class="para-section">
              We may disclose personal data if required to do so by law, court order, or governmental authority. We may also share personal data to protect our rights, privacy, safety, or property, or those of others.
            </p>
          </div>
          <div class="sub-title">4. Data Retention</div>
          <div class="sub-section">
            <p class="para-section">
              We retain personal data for the minimum period necessary to fulfil the purposes outlined in this Privacy Policy unless a longer retention period is required or permitted by law. The criteria used to determine the appropriate retention period include the nature of the personal data, the purposes for which it was collected, and legal and regulatory requirements.
            </p>
          </div>
          <div class="sub-title">5. Data Security</div>
          <div class="sub-section">
            <p class="para-section">
              We implement appropriate technical and organizational measures to protect personal data against unauthorized access, alteration, disclosure, or destruction. These measures include, but are not limited to, encryption, access controls, regular security assessments, and staff training on data protection.
            </p>
          </div>
          <div class="sub-title">6. Individual Rights</div>
          <div class="sub-section">
            <p class="para-section">
              Individuals have certain rights regarding their personal data. Subject to applicable law, individuals have the right to:
            </p>
            <ul class="para-list">
              <li>Access their personal data and request a copy of it.</li>
              <li>Rectify inaccurate or incomplete personal data.</li>
              <li>Erase personal data under certain circumstances.</li>
              <li>Restrict or object to the processing of personal data.</li>
              <li>
                Data portability (receive personal data in a structured, commonly used, and machine-readable format).
              </li>
              <li>Withdraw consent (if processing is based on consent).</li>
            </ul>
            <p class="para-section">
              To exercise these rights or to make a privacy-related complaint, individuals can contact us using the information provided in Section 8.
            </p>
          </div>
          <div class="sub-title">7. Marketing Communications and Cookie Policy</div>
          <div class="sub-section">
            <p class="para-section">
              We may send marketing communications to individuals who have provided their consent. Individuals can opt-out of receiving such communications at any time by following the instructions provided in the communication or by contacting us.
            </p>
            <p class="para-section">
              Our Cookie Policy outlines the use of cookies and similar technologies on our websites and provides information on managing cookie preferences.
            </p>
          </div>
          <div class="sub-title">8. International Data Transfers</div>
          <div class="sub-section">
            <p class="para-section">
              As a global organization, we may transfer personal data to countries outside the European Economic Area (EEA) or other regions with different data protection laws. In such cases, we will ensure appropriate safeguards are in place to protect the personal data, such as using standard contractual clauses approved by the European Commission or relying on the recipients\' Privacy Shield certification (where applicable).
            </p>
          </div>
          <div class="sub-title">9. Children\'s Privacy</div>
          <div class="sub-section">
            <p class="para-section">
              Our services are not directed to individuals under the age of 16. We do not knowingly collect or solicit personal data from children. If we become aware that we have collected personal data from a child without verifiable parental consent, we will take steps to delete that information.
            </p>
          </div>
          <div class="sub-title">10. Updates to the Privacy Policy</div>
          <div class="sub-section">
            <p class="para-section">
              We may update this Privacy Policy from time to time to reflect changes in our data processing practices or legal obligations. We encourage individuals to review this Privacy Policy periodically for any updates. The revised Privacy Policy will be effective from the date it is posted on our website.
            </p>
          </div>
          <div class="sub-title">11. Contact Information</div>
          <div class="sub-section">
            <p class="para-section">
              For any privacy-related concerns, questions, requests, or complaints, please contact our Data Protection Officer at:
            </p>
            <p class="para-section">dataprotection@oisservices.com</p>
            <p class="para-section">
              We take privacy matters seriously and will respond promptly to address any concerns or inquiries. Please note that this Privacy Policy is provided in English for ease of understanding. In the event of any conflict between the English version and a translated version, the English version shall prevail.
            </p>
          </div>
        </div>',
      'order_num' => 1,
      'lang' => 'en',
    ]);
    Content::create([
      'title' => 'DATA PROJECT',
      'content' => '
        <div class="main-title">
          GDPR & Related Data Protection Policy
        </div>
        <div class="sub-body">
          <div class="sub-title">1. Introduction</div>
          <div class="sub-section">
            <p class="para-section">
              In its everyday business operations Online Integrated Solutions (OIS) makes use of a variety of data about identifiable individuals, including data about:
            </p>
            <ul class="para-list">
              <li>
                Current, past and prospective employees
              </li>
              <li>
                Customers
              </li>
              <li>
                Users of its websites
              </li>
              <li>
                Subscribers
              </li>
              <li>
                Other stakeholders
              </li>
            </ul>
            <p class="para-section">
              In collecting and using this data, the organisation is subject to a variety of legislation controlling how such activities may be carried out and the safeguards that must be put in place to protect it.
            </p>
            <p class="para-section">
              The purpose of this policy is to set out the relevant legislation and to describe the steps OIS is taking to ensure that it complies with it.
            </p>
            <p class="para-section">
              This control applies to all systems, people and processes that constitute the organisation\'s information systems, including board members, directors, employees, suppliers and other third parties who have access to OIS systems.
            </p>
            <p class="para-section">
              The following policies and procedures are relevant to this document:
            </p>
            <ul class="para-list">
              <li>
                Data Protection Impact Assessment Process
              </li>
              <li>
                Personal Data Analysis Procedure
              </li>
              <li>
                Legitimate Interest Assessment Procedure
              </li>
              <li>
                Information Security Incident Response Procedure
              </li>
              <li>
                GDPR Roles and Responsibilities
              </li>
              <li>
                Other stakeholders
              </li>
            </ul>
          </div>
          <div class="sub-title">2. Use of Cryptography</div>
          <div class="sub-section">
            <p class="para-section">
              Where appropriate to the classification of information and the storage medium, cryptographic techniques were used to ensure the confidentiality and integrity of records.
            </p>
            <p class="para-section">
              Absolute care have been taken to ensure that encryption keys used to encrypt records are securely stored for the life of the relevant records and comply with the organisation\'s policy on cryptography.
            </p>
            <div class="sub-title pl-0">2.1 The EU General Data Protection Regulation - GDPR</div>
            <p class="para-section">
              The General Data Protection Regulation 2016 (GDPR) is one of the most significant pieces of legislation affecting the way that OIS carries out its information processing activities. Significant fines are applicable if a breach is deemed to have occurred under the GDPR, which is designed to protect the personal data of citizens of the European Union. It is OIS\'s policy to ensure that our compliance with the GDPR and other relevant legislation is clear and demonstrable at all times.
            </p>
            <div class="sub-title pl-0">2.2 Definitions</div>
            <p class="para-section">
              There are a total of 26 definitions listed within the GDPR and it is not appropriate to reproduce them all here. However, the most fundamental definitions with respect to this policy are as follows:
            </p>
            <p class="para-section">
              Personal data is defined as:
            </p>
            <p class="para-section">
              any information relating to an identified or identifiable natural person (\'data subject\'); an identifiable natural person is one who can be identified, directly or indirectly, in particular by reference to an identifier such as a name, an identification number, location data, an online identifier or to one or more factors specific to the physical, physiological, genetic, mental, economic, cultural or social identity of that natural person;
            </p>
            <p class="para-section">
              \'processing\' means
            </p>
            <p class="para-section">
              any operation or set of operations which is performed on personal data or on sets of personal data, whether or not by automated means, such as collection, recording, organisation, structuring, storage, adaptation or alteration, retrieval, consultation, use, disclosure by transmission, dissemination or otherwise making available, alignment or combination, restriction, erasure or destruction;
            </p>
            <p class="para-section">
              \'controller\' means
            </p>
            <p class="para-section">
              the natural or legal person, public authority, agency or other body which, alone or jointly with others, determines the purposes and means of the processing of personal data; where the purposes and means of such processing are determined by Union or Member State law, the controller or the specific criteria for its nomination may be provided for by Union or Member State law;
            </p>
            <div class="sub-title pl-0">2.3 Principles Relating to Processing of Personal Data</div>
            <p class="para-section">
              There are a number of fundamental principles upon which the GDPR is based.<br>
              These are as follows:
            </p>
            <p class="para-section">
              1. Personal data shall be:
            </p>
            <p class="para-section">
              (a) processed lawfully, fairly and in a transparent manner in relation to the data subject (\'lawfulness, fairness and transparency\');
            </p>
            <p class="para-section">
              (b) collected for specified, explicit and legitimate purposes and not further processed in a manner that is incompatible with those purposes; further processing for archiving purposes in the public interest, scientific or historical research purposes or statistical purposes shall, in accordance with Article 89(1), not be considered to be incompatible with the initial purposes (\'purpose limitation\');
            </p>
            <p class="para-section">
              (c) adequate, relevant and limited to what is necessary in relation to the purposes for which they are processed (\'data minimisation\');
            </p>
            <p class="para-section">
              (d) accurate and, where necessary, kept up to date; every reasonable step must be taken to ensure that personal data that are inaccurate, having regard to the purposes for which they are processed, are erased or rectified without delay (\'accuracy\');
            </p>
            <p class="para-section">
              (e) kept in a form which permits identification of data subjects for no longer than is necessary for the purposes for which the personal data are processed; personal data may be stored for longer periods insofar as the personal data will be processed solely for archiving purposes in the public interest, scientific or historical research purposes or statistical purposes in accordance with Article 89(1) subject to implementation of the appropriate technical and organisational measures required by this Regulation in order to safeguard the rights and freedoms of the data subject (\'storage limitation\');
            </p>
            <p class="para-section">
              (f) processed in a manner that ensures appropriate security of the personal data, including protection against unauthorised or unlawful processing and against accidental loss, destruction or damage, using appropriate technical or organisational measures (\'integrity and confidentiality\').
            </p>
            <p class="para-section">
              (f) processed in a manner that ensures appropriate security of the personal data, including protection against unauthorised or unlawful processing and against accidental loss, destruction or damage, using appropriate technical or organisational measures (\'integrity and confidentiality\').
            </p>
            <p class="para-section">
              OIS will ensure that it complies with all of these principles both in the processing it currently carries out and as part of the introduction of new methods of processing such as new IT systems.
            </p>
            <div class="sub-title pl-0">2.4 Rights of the Individual</div>
            <p class="para-section">
              The data subject also has rights under the GDPR. These consist of:
            </p>
            <p class="para-section">
              The right to be informed<br>The right of access<br>The right to rectification<br>The right to erasure<br>The right to restrict processing<br>The right to data portability<br>The right to object<br>Rights in relation to automated decision making and profiling</p>
            <p class="para-section">
              Each of these rights are supported by appropriate procedures within OIS that allow the required action to be taken within the timescales stated in the GDPR.
            </p>
            <p class="para-section">
              These timescales are shown in Table 1.
            </p>
            <table>
              <thead>
                <tr>
                  <th>Data Subject Request</th>
                  <th>Timescale</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>The right to be informed</td>
                  <td>When data is collected (if supplied by data subject) or within one month (if not supplied by data subject)</td>
                </tr>
                <tr>
                  <td>The right of access</td>
                  <td>One month</td>
                </tr>
                <tr>
                  <td>The right to rectification</td>
                  <td>One month</td>
                </tr>
                <tr>
                  <td>The right to erasure</td>
                  <td>Without undue delay</td>
                </tr>
                <tr>
                  <td>The right to restrict processing</td>
                  <td>Without undue delay</td>
                </tr>
                <tr>
                  <td>The right to data portability</td>
                  <td>One month</td>
                </tr>
                <tr>
                  <td>The right to object</td>
                  <td>On receipt of objection</td>
                </tr>
              </tbody>
            </table>
            <p class="para-section">
              Table 1 - Timescales for data subject requests
            </p>
            <div class="sub-title pl-0">2.5 Lawfulness of Processing</div>
            <p class="para-section">
              There are six alternative ways in which the lawfulness of a specific case of processing of personal data may be established under the GDPR. It is OIS policy to identify the appropriate basis for processing and to document it, in accordance with the Regulation. The options are described in brief in the following sections.
            </p>
            <div class="sub-title pl-0">2.5.1 Consent</div>
            <p class="para-section">
              Unless it is necessary for a reason allowable in the GDPR, OIS will always obtain explicit consent from a data subject to collect and process their data. In case of children below the age of 16 (a lower age may be allowable in specific EU member states) parental consent will be obtained. Transparent information about our usage of their personal data will be provided to data subjects at the time that consent is obtained and their rights with regard to their data explained, such as the right to withdraw consent. This information will be provided in an accessible form, written in clear language and free of charge. If the personal data are not obtained directly from the data subject then this information will be provided to the data subject within a reasonable period after the data are obtained and definitely within one month.
            </p>
            <div class="sub-title pl-0">2.5.2 Performance of a Contract</div>
            <p class="para-section">
              Where the personal data collected and processed are required to fulfil a contract with the data subject, explicit consent is not required. This will often be the case where the contract cannot be completed without the personal data in question e.g. a delivery cannot be made without an address to deliver to.
            </p>
            <div class="sub-title pl-0">2.5.3 Legal Obligation</div>
            <p class="para-section">
              If the personal data is required to be collected and processed in order to comply with the law, then explicit consent is not required. This may be the case for some data related to employment and taxation for example, and for many areas addressed by the public sector.
            </p>
            <div class="sub-title pl-0">2.5.4 Vital Interests of the Data Subject</div>
            <p class="para-section">
              In a case where the personal data are required to protect the vital interests of the data subject or of another natural person, then this may be used as the lawful basis of the processing. OIS will retain reasonable, documented evidence that this is the case, whenever this reason is used as the lawful basis of the processing of personal data. As an example, this may be used in aspects of social care, particularly in the public sector.
            </p>
            <div class="sub-title pl-0">2.5.5 Task Carried Out in the Public Interest</div>
            <p class="para-section">
              Where OIS needs to perform a task that it believes is in the public interest or as part of an official duty then the data subject\'s consent will not be requested. The assessment of the public interest or official duty will be documented and made available as evidence where required.
            </p>
            <div class="sub-title pl-0">2.5.6 Legitimate Interests</div>
            <p class="para-section">
              If the processing of specific personal data is in the legitimate interests of OIS and is judged not to affect the rights and freedoms of the data subject in a significant way, then this may be defined as the lawful reason for the processing. Again, the reasoning behind this view will be documented.
            </p>
            <div class="sub-title pl-0">2.6 Privacy by Design</div>
            <p class="para-section">
              OIS has adopted the principle of privacy by design and will ensure that the definition and planning of all new or significantly changed systems that collect or process personal data will be subject to due consideration of privacy issues, including the completion of one or more data protection impact assessments.
            </p>
            <p class="para-section">
              The data protection impact assessment will include:
            </p>
            <p class="para-section">
              Consideration of how personal data will be processed and for what purposes<br>Assessment of whether the proposed processing of personal data is both necessary and proportionate to the purpose(s)
            </p>
            <p class="para-section">
              Assessment of the risks to individuals in processing the personal data<br>What controls are necessary to address the identified risks and demonstrate compliance with legislation<br>Use of techniques such as data minimization and pseudonymisation will be considered where applicable and appropriate.
            </p>
            <div class="sub-title pl-0">2.7 Contracts Involving the Processing of Personal Data</div>
            <p class="para-section">
              OIS will ensure that all relationships it enters into that involve the processing of personal data are subject to a documented contract that includes the specific information and terms required by the GDPR. For more information, see the GDPR Controller-Processor
              Agreement Policy
            </p>
            <div class="sub-title pl-0">2.8 International Transfers of Personal Data</div>
            <p class="para-section">
              Transfers of personal data outside the European Union will be carefully reviewed prior to the transfer taking place to ensure that they fall within the limits imposed by the GDPR. This depends partly on the European Commission\'s judgement as to the adequacy of the safeguards for personal data applicable in the receiving country and this may change over time.<br>Intra-group international data transfers will be subject to legally binding agreements referred to as Binding Corporate Rules (BCR) which provide enforceable rights for data subjects.
            </p>
            <div class="sub-title pl-0">2.9 Data Protection Officer</div>
            <p class="para-section">
              A defined role of Data Protection Officer (DPO) is required under the GDPR if an organisation is a public authority, if it performs large scale monitoring or if it processes particularly sensitive types of data on a large scale. The DPO is required to have an appropriate level of knowledge and can either be an in-house resource or outsourced to an appropriate service provider.
            </p>
            <p class="para-section">
              Based on these criteria, OIS appointed Data Protection Officer, below are the contact details:
            </p>
            <p class="para-section">
              Name: Archibald Coker<br>Email: acoker@oisservices.com<br>Contact: +44 (0) 207 832 0001
            </p>
            <div class="sub-title pl-0">2.10 Breach Notification</div>
            <p class="para-section">
              It is OIS\'s policy to be fair and proportionate when considering the actions to be taken to inform affected parties regarding breaches of personal data. In line with the GDPR, where a breach is known to have occurred which is likely to result in a risk to the rights and freedoms of individuals, the relevant supervisory authority will be informed within 72 hours. This will be managed in accordance with our Information Security Incident Response Procedure which sets out the overall process of handling information security incidents.
            </p>
            <p class="para-section">
              Under the GDPR the relevant DPA has the authority to impose a range of fines of up to four percent of annual worldwide turnover or twenty million Euros, whichever is the higher, for infringements of the regulations.
            </p>
            <div class="sub-title pl-0">2.11 Addressing Compliance to the GDPR</div>
            <p class="para-section">
              The following actions are undertaken to ensure that OIS complies at all times with the accountability principle of the GDPR:
            </p>
            <ul class="para-list">
              <li>
                The legal basis for processing personal data is clear and unambiguous
              </li>
              <li>
                A Data Protection Officer is appointed with specific responsibility for data protection in the organisation (if required)
              </li>
              <li>
                All staff involved in handling personal data understand their responsibilities for following good data protection practice
              </li>
              <li>
                Training in data protection has been provided to all staff
              </li>
              <li>
                Rules regarding consent are followed
              </li>
              <li>
                Routes are available to data subjects wishing to exercise their rights regarding personal data and such enquiries are handled effectively
              </li>
              <li>
                Regular reviews of procedures involving personal data are carried out
              </li>
              <li>
                Privacy by design is adopted for all new or changed systems and processes
              </li>
            </ul>
            <p class="para-section">
              The following documentation of processing activities is recorded:
            </p>
            <ul class="para-list">
              <li>
                Organisation name and relevant details
              </li>
              <li>
                Purposes of the personal data processing
              </li>
              <li>
                Categories of individuals and personal data processed
              </li>
              <li>
                Categories of personal data recipients
              </li>
              <li>
                Agreements and mechanisms for transfers of personal data to non-EU countries including details of controls in place
              </li>
              <li>
                Personal data retention schedules
              </li>
              <li>
                Relevant technical and organisational controls in place
              </li>
            </ul>
            <p class="para-section">
              These actions are reviewed on a regular basis as part of the management process concerned with data protection.
            </p>
          </div>
          <div class="sub-title">Related Data Protection</div>
          <div class="sub-section">
            <div class="sub-title pl-0">Data Protection Principles</div>
            <p class="para-section">
              There are 8 data protection principles which ensure that organisations collect, store and process personal data in a way that protects the confidentiality of customers. These principles are set out in schedule 1 of the Act and are as follows:
            </p>
            <p class="para-section">
              i. Data must be handled fairly and lawfully<br>We have legitimate grounds to obtain, store and process customers\' data, namely, to assist you obtain a passport, visa and for other purposes authorised by the law and contracts between us and our customers. We ensure that your data will not be used for anything unlawful.
            </p>
            <p class="para-section">
              ii. Personal data shall be obtained only for one or more specified and lawful purposes, and shall not be further processed in any manner incompatible with that purpose or those purposes.<br>Due to the nature of our job, the purpose for which you are giving us your personal data is obvious to you and us. We will not use your data for any other purpose incompatible with the original purpose unless you first give us your consent or we are compelled by law to do so.
            </p>
            <p class="para-section">
              iii. Personal data shall be adequate, relevant and not excessive in relation to the purpose or purposes for which they are processed.<br>We will only take information we consider relevant and sufficient to deliver our contract with you.
            </p>
            <p class="para-section">
              iv. Personal data shall be accurate and, where necessary, kept up to date.<br>We ensure that the personal data you give us is correct and not misleading. We achieve this by giving you the opportunity to confirm the information you give us and also by requesting documentary proof when necessary. If there are relevant changes in your personal data, eg, change of name or nationality, please let us know as soon as possible so that we can update your record.
            </p>
            <p class="para-section">
              v. Personal data processed for any purpose or purposes shall not be kept for longer than is necessary for that purpose or those purposes.<br>We will, from time to time, review our data base to see if some personal data are still needed to be stored by us. If the purpose for which they were stored has been achieved and we consider that it is no longer necessary to continue storing them, we will securely delete them.
            </p>
            <p class="para-section">
              vi. Personal data shall be processed in accordance with the rights of data subjects under this Act.<br>We will process your personal data in such a way that it will enable you to do any of the following:
            </p>
            <ul class="para-list-digit">
              <li>
                a right of access to a copy of your personal data, popularly known as \'subject access request\'. The current fee for that is £10 per standard request and we aim to provide this within 14 days. Subject Access Request should be made to info@oisservices.com by email or by post The Head of Centre, OIS Services, 56-57 Fleet street, EC4Y 1JU, London </li>
              <li>
                a right to object to processing your personal data in a way that is likely to cause damage or distress to you;
              </li>
              <li>
                a right to prevent processing your personal data in a way that is incompatible to the original purpose or purposes;
              </li>
              <li>
                a right to object to decisions being taken by automated means;
              </li>
              <li>
                a right, when appropriate, to have inaccurate personal data rectified, blocked or deleted, and
              </li>
              <li>
                a right to claim compensation for damages caused by a breach of the Act.
              </li>
            </ul>
            <p class="para-section">
              vii. Personal data security<br>Your personal data are held in a very secure environment both physically and technically. The areas where personal data are kept are out of bounds for all non-authorised persons. Access to these parts of the premises can only be gained by electronic key issued only to authorised persons. Your personal data can only be accessed on the system by authorised persons. Only such authorised persons can alter, disclose or destroy your personal data. Further, such authorised persons can only carry out any of those functions in the course of their lawful duties. Therefore, the chances of your personal data being unlawfully processed or accidentally damaged, destroyed or lost are very minimal.
              Further, it is our policy to ensure that:
            </p>
            <ul class="para-list-digit">
              <li>
                each authorised employee who has access to personal data has his own password which is not shared with other persons,
              </li>
              <li>
                approved security software and firewall are used to protect our data,
              </li>
              <li>
                printed personal data not in use are shredded,
              </li>
              <li>
                we discourage personal data being stored on laptops and other mobile devices and media but if they do, should be locked securely and not taken out of the office.
              </li>
            </ul>
            <p class="para-section">
              viii. Transfer of personal data outside the European Economic Area<br>Your personal data will not be transferred to a country or territory outside the European Economic Area unless that country or territory ensures an adequate level of protection for the rights and freedoms of data subjects in relation to the processing of personal data. There are only few counties outside the EEA that have been accepted as having adequate levels of protection for the processing of persona data comparable to the EEA countries. When we are transferring personal data to the USA, we ensure that the recipient is a signatory to the US Department of Commerce Safe Harbour Scheme. This scheme is recognised by the European Commission as providing adequate protection for data subjects. In relation to other countries outside the EEA that have not been accepted as having equivalent security and safeguards in place for processing personal data, we either sign a separate contract, the terms of which are approved by the European Directives or ensure that there is a clause in the contract that protects the processing of personal data of all our clients.
            </p>
          </div>
        </div>',
      'order_num' => 1,
      'lang' => 'en',
    ]);

    //cn
    Content::create([
      'title' => 'ABOUT OIS',
      'content' => '<p class="title body-section">跨行业的创新软件解决方案。</p>',
      'order_num' => 1,
      'lang' => 'cn',
    ]);
    Content::create([
      'title' => 'ABOUT OIS',
      'content' => '<p class="sub-title">OIS（在线综合服务）</p>
                <p class="description mt-4">OIS（在线集成解决方案）作为跨行业尖端软件解决方案的领先提供商，站在创新的前沿。 我们的旅程始于签证申请中心和支持服务提供商，此后我们不断发展，将我们的服务扩展到尼日利亚在全球的所有外交使团。 我们的成功得益于先进的技术、无与伦比的质量、可扩展性以及解决方案的无缝可移植性。</p>
                <p class="description mb-0 mt-4">OIS 的独特之处在于我们的全球足迹，可以在全球范围内轻松集成应用程序。 我们对卓越的承诺不仅限于移民服务，因为我们在银行平台方面拥有良好的记录。 作为尼日利亚银行的重要中介机构，我们为寻求开设或重新激活尼日利亚银行账户的非居民尼日利亚人和海外其他国籍的个人提供基本服务。</p>
                <p class="description mb-0 mt-4">在 OIS，我们不断努力重新定义行业标准，提供一整套全面的解决方案，体现我们对卓越的追求和技术实力。 加入我们，踏上无与伦比的服务交付和全球连接之旅。</p>',
      'order_num' => 2,
      'lang' => 'cn',
    ]);
    Content::create([
      'title' => 'ABOUT OIS',
      'content' => '<p class="description">在 OIS，我们对卓越服务交付和尖端技术的坚定承诺感到非常自豪。 我们的综合服务范围不仅限于签证和护照解决方案，还包括教育、医疗保健和银行平台。 我们相信简化流程，为了实现这一目标，我们通过用户友好的在线门户、无缝支付系统和实时更新提供简化的应用程序体验。</p>
                <p class="description mt-4 mb-0">对于那些寻求获得银行验证码 (BVN) 的人，我们的在线申请流程与短信发送相结合，可确保您获得高效、无忧的体验。</p>
                <p class="description mt-4 mb-0">在金融服务领域，我们的电子汇款服务脱颖而出。 我们提供安全且实惠的在线汇款方式，支持现金提取、加密货币交易、银行转账、移动货币交易和通话充值等多种方式。 借助 OIS，体验为满足您的多样化需求而量身定制的现代、安全、灵活的金融解决方案的便利。</p>',
      'order_num' => 3,
      'lang' => 'cn',
    ]);
    Content::create([
      'title' => 'ABOUT OIS',
      'content' => '<p class="description mb-0">在 OIS，我们以客户的福祉为中心，我们的承诺延伸到提供一流的电子医疗和保健服务。 通过我们的一系列产品让自己沉浸在全面的健康方法中：</p>
                <p class="description mt-0 mb-0"><b>远程医疗服务：</b></p>
                <p class="description mt-0 mb-0 ml-4">• 通过我们的远程医疗服务，按照您的意愿体验医疗保健。 通过虚拟咨询与医疗保健专业人员无缝联系，解锁个性化饮食计划、精心策划的锻炼习惯和宝贵的心理健康支持。 您的健康是我们的首要任务，我们的远程医疗服务直接为您提供医疗保健专业知识。</p>
                <p class="description mt-0 mb-0"><b>健康监测设备：</b></p>
                <p class="description mt-0 mb-0 ml-4">• 使用我们的健康监测设备随时了解并主动了解您的健康状况。 这些尖端工具可让您跟踪生命体征，为您的整体健康状况提供宝贵的见解。 通过数据驱动的决策来帮助自己实现更健康的生活方式。</p>
                <p class="description mt-0 mb-0"><b>综合健康计划：</b></p>
                <p class="description mt-0 mb-0 ml-4">• 我们的健康计划是一个全面的健康天堂，将心理健康支持无缝融入您的健康之旅。 除了身体健康之外，我们还优先考虑心理健康，促进平衡和全面的整体福祉。</p>
                <p class="description mt-0 mb-0">我们的使命不仅是提供尖端的软件解决方案，而且是您追求健康和保健的过程中值得信赖的盟友。 通过简化流程并增强跨行业的体验，我们致力于对您生活的各个方面产生积极影响。 欢迎来到创新与福祉相结合的世界。</p>
                <p class="description mt-4 mb-5">在 OIS，我们坚定不移地致力于开创尖端软件解决方案，不仅简化流程，而且简化流程并提升不同行业的体验。</p>',
      'order_num' => 4,
      'lang' => 'cn',
    ]);
    Content::create([
      'title' => 'SERVICES',
      'content' => '<p class="title body-section">帮助企业和个人克服复杂的挑战。</p>',
      'order_num' => 1,
      'lang' => 'cn',
    ]);
    Content::create([
      'title' => 'SERVICES',
      'content' => '<p class="sub-title">签证和护照申请处理：</p>
                <p class="description mb-0">在 Online Integrated Solutions (OIS)，我们是革命性软件解决方案的全球开拓者，致力于帮助企业和个人克服复杂的挑战。 我们的深远影响在 VISA 申请处理领域尤为明显，我们利用先进的机器学习 (ML) 算法的力量来提高效率、准确性和可扩展性，最终提升整体客户体验。 我们的机器学习创新方法可以在以下关键领域带来变革性改进：</p>
                <p class="description mt-0 mb-0 ml-4">• 数据处理和验证。</p>
                <p class="description mb-0 ml-4">• 欺诈识别。</p>
                <p class="description mb-0 ml-4">• 生物识别。</p>
                <p class="description mb-0 ml-4">• 应用程序状态跟踪。</p>
                <p class="description mb-5 mt-4">在 OIS，我们展望未来，技术不仅满足而且超越预期，我们致力于突破创新界限，确保我们的客户和用户受益于最先进、高效、安全的签证和护照申请处理解决方案。</p>',
      'order_num' => 2,
      'lang' => 'cn',
    ]);
    Content::create([
      'title' => 'SERVICES',
      'content' => '<p class="sub-title">银行验证号 (BVN) 申请处理：</p>
                <p class="description mb-0">在我们对无缝服务的不懈追求中，我们认识到机器学习的变革潜力，特别是在优化我们的银行验证号 (BVN) 申请流程方面。 我们深知快速、方便地签发 BVN 对我们的客户至关重要，这促使我们不断完善和加快这一关键程序。 利用机器学习的能力，我们的目标是提高 BVN 注册的准确性和效率，同时降低与错误和欺诈活动相关的风险。 以下是我们将机器学习纳入其中有望产生重大影响的关键领域：</p>
                <p class="description mt-0 mb-0 ml-4">• 数据处理和验证。</p>
                <p class="description mt-0 mb-0 ml-4">• 预测分析。</p>
                <p class="description mt-0 mb-0 ml-4">• 欺诈识别。</p>
                <p class="description mt-4 mb-5">我们承诺的核心是致力于为客户提供无与伦比的 BVN 应用体验——及时、精确，并增强抵御潜在风险的能力。 通过机器学习的注入，我们踏上了重新定义 BVN 发行效率和安全标准的旅程。</p>',
      'order_num' => 3,
      'lang' => 'cn',
    ]);
    Content::create([
      'title' => 'SERVICES',
      'content' => '<p class="sub-title">通过人工智能聊天机器人提升卓越服务：</p>
                <p class="description">我们很高兴推出我们的最新创新成果——人工智能聊天机器人——这是一项旨在改变客户服务和支持的重要进步。 这款最先进的聊天机器人利用机器学习算法的力量，为客户提供个性化且高效的帮助途径。 我们的聊天机器人旨在通过对查询提供及时、准确的响应并在尽量减少对人工干预的依赖的情况下解决问题，彻底改变客户体验。</p>
                <p class="description mt-4 mb-0">主要特点和优点：</p>
                <p class="description mt-0 mb-0 ml-4">• 快速准确的响应。</p>
                <p class="description mt-0 mb-0 ml-4">• 24/7 无障碍。</p>
                <p class="description mt-0 mb-0 ml-4">• 消除等待时间。</p>
                <p class="description mt-0 mb-0 ml-4">• 多功能查询处理。</p>
                <p class="description mt-4 mb-5">该人工智能聊天机器人代表了重新定义服务标准的承诺，确保我们的客户体验与我们品牌的无缝、高效的互动。 随着技术的不断发展，我们始终处于最前沿，利用创新的解决方案来增强您的客户旅程。 欢迎来到个性化和响应式的新时代</p>',
      'order_num' => 4,
      'lang' => 'cn',
    ]);
    Content::create([
      'title' => 'SERVICES',
      'content' => '<p class="sub-title">通过尖端技术提升电子健康和健康水平</p>
                <p class="description mb-0">踏上持续改进的旅程，我们致力于通过整合先进技术彻底改变我们的电子医疗和健康服务。 探索这些创新可以帮助您保持最佳健康和福祉的多种方式：</p>
                <p class="description mt-0 mb-0">1. 远程医疗服务：</p>
                <p class="description mb-0 ml-4">• 借助我们先进的系统，让自己沉浸在医疗保健的未来之中。 精确性和个性化是最重要的，因为我们的远程医疗服务可以准确诊断健康问题并根据您的独特需求提供定制的治疗计划。</p>
                <p class="description mt-0 mb-0">2. 健康计划：</p>
                <p class="description mb-0 ml-4">• 通过我们突破性的健康计划，采用全面的健康方法。 利用区块链和 Web3 技术的变革潜力，我们安全且去中心化的平台提供个性化饮食计划、量身定制的锻炼方案和全面的心理健康支持。 踏上与您一样个性化的健康之旅。</p>
                <p class="description mt-0 mb-0">3.健康监测设备：</p>
                <p class="description mb-0 ml-4">• 通过我们的健康监测设备释放人工智能的力量。 这些智能系统分析从各种设备收集的数据，为您提供个性化的反馈和富有洞察力的建议。 利用与您一起发展的技术，改变您监测健康的方式。</p>
                <p class="description mt-4 mb-5">在创新与健康的交叉点，我们设想未来技术将增强您健康之旅的各个方面。 我们的承诺是为您提供个性化、安全和尖端的解决方案，重新定义电子医疗和健康的标准。 欢迎来到这个领域，您的健康不仅是一个优先考虑的问题，而且还是一种个性化的体验。</p>',
      'order_num' => 5,
      'lang' => 'cn',
    ]);
    Content::create([
      'title' => 'SERVICES',
      'content' => '<p class="sub-title">利用区块链和 WEB3 技术彻底改变电子汇款</p>
                <p class="description">OIS 自豪地宣布通过尖端区块链和 Web3 技术的集成，对我们的电子汇款服务进行了突破性的增强。 这一战略演变提高了我们的服务标准，为客户提供了前所未有的透明度和安全性。</p>
                <p class="description mt-4 mb-0">关键进展:</p>
                <p class="description mt-0 mb-0 ml-4">• 不可变的账本记录。</p>
                <p class="description mt-0 mb-0 ml-4">• 快速、安全且低成本的选择。</p>
                <p class="description mt-0 mb-0 ml-4">• 增强灵活性和便利性。</p>
                <p class="description mt-4 mb-5">在 OIS，我们致力于重新定义电子金融服务的格局。 区块链和 Web3 的集成证明了我们致力于创新，确保我们的客户在委托我们进行金融交易时体验到最大的安全性、透明度和便利性。 欢迎来到电子汇款的新时代——技术与信任的结合。</p>',
      'order_num' => 6,
      'lang' => 'cn',
    ]);
    Content::create([
      'title' => 'INNOVATION',
      'content' => '<p class="title body-section">虚拟现实的未来就在这里。</p>',
      'order_num' => 1,
      'lang' => 'cn',
    ]);
    Content::create([
      'title' => 'INNOVATION',
      'content' => '<p class="sub-title">人工智能驱动的个性化</p>
                <p class="description">我们使用人工智能算法来根据每个客户的需求提供个性化服务。 通过分析客户数据和行为模式，我们可以定制解决方案以满足特定的要求和偏好。</p>',
      'order_num' => 2,
      'lang' => 'cn',
    ]);
    Content::create([
      'title' => 'INNOVATION',
      'content' => '<p class="sub-title">用于欺诈检测的机器学习</p>
                <p class="description">我们的机器学习算法分析客户行为、交易数据、可疑活动，并防止我们所有服务中的欺诈交易。</p>',
      'order_num' => 3,
      'lang' => 'cn',
    ]);
    Content::create([
      'title' => 'INNOVATION',
      'content' => '<p class="sub-title">基于区块链的安全</p>
                <p class="description">我们的新技术方向是区块链和Web3，它为我们客户的数据和交易提供更高的安全性和透明度。 我们实施区块链技术来确保数据的不变性和可追溯性，并增强针对数据泄露和黑客攻击的安全性。</p>',
      'order_num' => 4,
      'lang' => 'cn',
    ]);
    Content::create([
      'title' => 'INNOVATION',
      'content' => '<p class="sub-title">基于Web3的去中心化</p>
                <p class="description">我们基于 Web3 的解决方案提供了更大程度的服务分散化和民主化。 通过使用 Web3 协议，我们可以减少对中心化中介机构的依赖，降低交易费用，并提高客户的可访问性和包容性。</p>',
      'order_num' => 5,
      'lang' => 'cn',
    ]);
    Content::create([
      'title' => 'INNOVATION',
      'content' => '<p class="sub-title">研究与开发</p>
                <p class="description">为了在竞争中保持领先地位，我们正在投资新技术及其潜在应用的研发。 我们与初创公司、学术界和研究机构合作，加速创新，为客户带来先进的解决方案。</p>',
      'order_num' => 6,
      'lang' => 'cn',
    ]);
    Content::create([
      'title' => 'INNOVATION',
      'content' => '<p class="sub-title">基于虚拟现实的培训</p>
                <p class="description mb-5">我们为医疗保健专业人员和客户支持团队提供基于虚拟现实的培训，以提高他们的技能并提供更好的服务。 我们基于 VR 的培训计划模拟真实场景，提供安全、身临其境的学习体验。</p>',
      'order_num' => 7,
      'lang' => 'cn',
    ]);
    Content::create([
      'title' => 'SECURITY',
      'content' => '<p class="title body-section">使用 OIS，您的数据是安全的。</p>',
      'order_num' => 1,
      'lang' => 'cn',
    ]);
    Content::create([
      'title' => 'SECURITY',
      'content' => '<p class="sub-title">数据保护和安全</p>
                <p class="description">OIS 高度重视客户的数据保护和安全。 我们实施了一系列措施来确保客户数据的安全性和准确性，包括强大的加密协议、定期备份和安全的数据存储解决方案。</p>
                <p class="description mt-4">此外，我们建立了严格的数据访问控制，确保只有授权人员才能访问敏感的客户数据。 为了保持客户数据的准确性，OIS 采用自动数据验证和清理流程，以确保数据始终准确且最新。</p>
                <p class="description mt-4 mb-5">OIS 通过安全、基于同意的流程获取客户数据，并使用这些数据来开发新产品和服务，为客户带来真正的价值。</p>',
      'order_num' => 2,
      'lang' => 'cn',
    ]);
    Content::create([
      'title' => 'DISCLAIMERS',
      'content' => '',
      'order_num' => 1,
      'lang' => 'cn',
    ]);
    Content::create([
      'title' => 'TERMS OF USE',
      'content' => '
        <div class="main-title">
          免责声明和使用条款
        </div>
        <div class="sub-body">
          <div class="sub-title">1. 重要说明</div>
          <div class="sub-section">
              <p class="para-section">
                  OIS 建议您不要在签证签发之前购买无法免费取消的机票或预订，除非签证申请中有具体要求。
              </p>
              <p class="para-section">
                  这些条款包含免责声明，限制我们对下述退款政策的责任。 除下面我们的退款政策涵盖的情况外，所有费用均不可退还，并且即使您没有提出或继续办理签证申请，也无论签证是否获得批准，我们都可能会在您付款后保留这些费用。
              </p>
              <p class="para-section">
                  您应对申请表的准确性负责，并负责检查您的申请表。 我们不保证我们会发现任何错误，并且我们不会验证您提供的信息。
              </p>
          </div>
          <div class="sub-title">2. 服务提供商</div>
          <div class="sub-section">
              <p class="para-section">
                  OIS 是尼日利亚签证申请的签证处理中心，办事处位于：
              </p>
              <ul class="para-list">
                  <li>
                      阿布贾（尼日利亚阿布贾加尔基 11 区金比亚街旁 5 Onitsha Crescent）
                  </li>
                  <li>
                      阿姆斯特丹（Kingsfordweg 151, 1043GR，荷兰阿姆斯特丹）
                  </li>
                  <li>
                      安卡拉 (Danismanlik Ltd. Sti. Kazim Ozalp Mahallesi Koza Caddesi 35/3 Cankaya, 安卡拉
                      火鸡）
                  </li>
                  <li>
                      亚特兰大（918 Holcomb Bridge Road, Suite 204, Roswell, 亚特兰大, GA 美国 30076）
                  </li>
                  <li>
                      北京（北京市朝阳区新源里大街16号昆莎大厦1单元1801室）
                  </li>
                  <li>
                      贝鲁特（Jnah-贝鲁特 Rafik Hariri 大学医院 Mais 6 大楼对面 - 3Rd Floor P.O.Box 9 UNESCO，黎巴嫩贝鲁特）
                  </li>
                  <li>
                      广州（广州市天河区华夏路30号富力同赢大厦41楼27/28室）
                  </li>
                  <li>
                      休斯顿（9894 Bissonnet Street, Suite 745 Houston TX 77036 USA）
                  </li>
                  <li>
                      约翰内斯堡（6 Bolton Road Parkwood Rosebank, 2193, 约翰内斯堡, 南非）
                  </li>
                  <li>
                      吉隆坡（36.01 Level 36 Menara Citibank, 165 Jalan Ampang 50450 Kuala Lumpur Malaysia）
                  </li>
                  <li>
                      莱斯特（St Georges House, 6 St Georges Way, Leicester LE1 1SH, UK）
                  </li>
                  <li>
                      伦敦（56-57 Fleet Street City of London EC4Y 1JU 英国）
                  </li>
                  <li>
                      洛杉矶（11222 S. La Cienega Blvd Inglewood, Suite 302, CA. 90304 USA）
                  </li>
                  <li>
                      伦敦（56-57 Fleet Street City of London EC4Y 1JU 英国）
                  </li>
                  <li>
                      孟买（Quest Offices Pvt. Ltd., 8th Floor, Parinee Crescenzo, C38 & 39, G Block, Bandra Kurla Complex, Bandra (East) Pin:400051, Maharashtra, India ）
                  </li>
                  <li>
                      新德里（C/O 中央灌溉和电力局 Plot No. 4, Ground Floor, Implementing Area Opp.: Sarvodaya School Malcha Marg Chanakyapuri New Delhi 110021, Delhi, India）
                  </li>
                  <li>
                      纽约（370 Lexington Ave, Suite 1505 New York, NY 10017 USA）
                  </li>
                  <li>
                      巴黎（7 Rue Daru 75008 巴黎，法国）
                  </li>
                  <li>
                      比勒陀利亚（3rd Floor, Building 2, Brooklyn Bridge Office Park, Pretoria 570 Fehrsen, South Africa）
                  </li>
                  <li>
                      罗马（S.R.L.，Via Sicilia，30 00187 罗马，意大利）
                  </li>
                  <li>
                      上海（中国上海市静安区江宁路212号凯迪克大厦20楼2025室）
                  </li>
                  <li>
                      华盛顿特区（11900 Parklawn Drive Suite 160, Rockville MD 20852, Washington DC USA）
                  </li>
              </ul>
          </div>
          <div class="sub-title">3. 这些条款的应用</div>
          <div class="sub-section">
              <p class="para-section">
                  这些条款和条件适用于您对 OIS 服务的使用、您提出的所有签证申请以及您对有关尼日利亚签证的建议或信息进行的所有查询。 每位签证申请人特此接受并确认，在提交签证申请之前，他们已阅读、理解并同意受（无限制或限定）所有这些条款和条件的约束。 未经 OIS 事先书面批准，OIS 的任何员工均无权更改、修改、扩大或撤销任何或所有这些条款和条件。
              </p>
          </div>
          <div class="sub-title">4. 签证申请服务</div>
          <div class="sub-section">
              <div class="sub-title pl-0">4.1 范围</div>
              <p class="para-section">
                  OIS 是尼日利亚驻英国高级专员公署的外包合作伙伴。 在此职位上，OIS 负责安排预约、接收前往尼日利亚的签证申请、向伦敦尼日利亚高级专员公署提交申请、收集已处理的护照并将护照返还给申请人。
              </p>
              <div class="sub-title pl-0">4.2 申请的接受和拒绝</div>
              <p class="para-section">
                  签证申请的评估由尼日利亚高级专员公署进行，并自行决定是否授予或拒绝签证。 尼日利亚高级专员公署保留要求申请人提供进一步文件和信息并拒绝任何签证申请的权利。 如果申请人希望继续考虑其申请，则必须提供此类进一步的文件和信息。
              </p>
              <div class="sub-title pl-0">4.3 费用</div>
              <p class="para-section">
                  您应付的费用包括尼日利亚高级专员公署的签证管理费（我们将其转交给高级专员公署）和我们的费用，包括我们的服务费和其他费用，例如银行手续费和手续费。
              </p>
              <p class="para-section">
                  所示费用仅在我们报价或提供之日有效。 如果您决定稍后提出申请，费用可能会发生变化。
              </p>
              <p class="para-section">
                  根据您提供的信息和您选择的递送方式，将护照、签证和文件返还给您的所有费用均包含在最终总费用中。
              </p>
              <p class="para-section">
                  所有费用必须通过可用的付款方式全额收取。
              </p>
              <p class="para-section">
                  除以下退款政策涵盖的情况外，所有费用均不可退还，并且所有费用均需支付，并可能在您付款后由我们保留，即使您没有提出或继续办理签证申请，也无论是否获得签证 被授予。
              </p>
              <div class="sub-title pl-0">4.4 一般义务</div>
              <p class="para-section">
                  OIS 将以合理的注意力和技巧处理所有签证申请，并遵守尼日利亚高级专员公署制定的所有程序和准则。 然而，虽然我们会尽合理的努力检查您的申请表表面是否存在明显错误，但我们不保证检测到您的表格中的错误，并且我们不承诺验证您提供的任何信息，您对此负责 确保准确。
              </p>
              <div class="sub-title pl-0">4.5 申请人的责任</div>
              <p class="para-section">
                  所有申请人有责任如实填写所有申请表，提供正确、准确的信息和文件，确保拥有有效护照，并在收到签证后检查所签发签证的有效性，以确保其涵盖 请求的停留期限、所需的次数或入境次数，以及其对于旅行目的有效。
              </p>
              <div class="sub-title pl-0">4.6 处理时间</div>
              <p class="para-section">
                  签证申请的处理时间仅为估计时间。 这些都是基于尼日利亚高级专员公署的信息和经验。 您的申请的处理须遵守尼日利亚高级专员公署的程序和处理时间表，OIS 对此无法控制。
              </p>
              <div class="sub-title pl-0">4.7 程序和费用的变更</div>
              <p class="para-section">
                  尼日利亚高级专员公署处理签证和相关服务的程序和费用不在 OIS 的控制范围内，如有变更，恕不另行通知。 OIS 不承担任何程序或费用变更的责任，并保留转嫁任何增加费用的权利。


              </p>
              <div class="sub-title pl-0">4.8 取消</div>
              <p class="para-section">
                  如果您开始签证申请流程，包括提交在线申请，但没有完成签证申请流程，包括您未能将签证申请文件发送给我们或亲自前往签证申请中心完成签证 申请，在开始签证申请程序后的12个月内，那么您的签证申请将被视为已过期，我们可能会保留您支付的签证费，以及所有服务费、银行费和其他费用。 我们没有义务通知您这一点。
              </p>
              <p class="para-section">
                  您的上述权利是您拥有的唯一取消权利。 一旦您向我们提交申请，您将被视为同意我们可以立即开始处理您的申请并提供任何服务，因此根据《消费者保护（远程销售）条例》，您无权取消 2000。这是因为，根据第 13(1)(a) 条，如果您同意我们可以在取消期内开始提供服务，您将失去取消的权利。
              </p>
          </div>
          <div class="sub-title">5. 退款政策</div>
          <div class="sub-section">
              <div class="sub-title pl-0">5.1 签证申请费退还</div>
              <p class="para-section">
                  如果 OIS 违反合同或疏忽提交的任何签证申请，导致签证未获批准或申请人持有有效签证的护照丢失，在每种情况下，申请人必须申请新护照或无法旅行 在申请人签证申请中注明的时间前往尼日利亚，则OIS将退还给申请人签证费，但不退还任何服务费、银行费或其他费用。
              </p>
              <div class="sub-title pl-0">5.2 护照和其他旅行证件丢失或损坏</div>
              <p class="para-section">
                  OIS 在处理申请人的护照和文件时采取一切合理的预防措施，如果由于 OIS 的任何违约或疏忽，导致申请人提交的护照或文件丢失或损坏而无法使用，则 OIS 将向 申请人所在国政府收取的费用，用于通过正常更换程序更换丢失或损坏的护照或其他文件，OIS 将在其能力范围内协助申请人。 OIS 将根据申请人所属国家政府为更换丢失或损坏的护照或文件而签发的付款收据向申请人支付此类款项。
              </p>
          </div>
          <div class="sub-title">6. 免责声明</div>

          <div class="sub-section">
              <p class="para-section">
                  除上节所述的退款或报销外，OIS 不承担与任何签证申请相关的责任，包括合同、疏忽、侵权、法规或其他方面的责任，以及任何延误或失败的责任 OIS 处理或处理签证申请、护照和其他文件丢失或延误、涉及尼日利亚高级专员公署的延误以及因任何原因拒绝签证申请。
              </p>
              <div class="sub-title pl-0">为避免疑义</div>
              <div class="sub-title pl-0">6.1 对错误信息不承担责任</div>
              <p class="para-section">
                  对于因（包括但不限于）不完整的申请表、不正确或错误填写的申请表以及不准确或不完整的支持文件而引起或与之相关的任何申请的丢失、延误或未签发，OIS 不承担任何责任。
              </p>
              <div class="sub-title pl-0">6.2 对于不在我们控制范围内的事件不承担任何责任</div>
              <p class="para-section">
                  对于任何申请的任何延迟或失败，或者由于事故、盗窃、自然灾害（行为 上帝）或 OIS 控制之外的任何其他原因，并且不是由 OIS 故意违约引起的，或者任何护照或其他文件在移交给申请人后丢失或损坏。
              </p>
              <div class="sub-title pl-0">6.3 邮政和快递服务不承担责任</div>
              <p class="para-section">
                  对于由任何第三方邮政或快递服务造成或在持有任何申请、护照或文件期间发生的任何签证申请、护照或其他文件的任何延误、丢失或损坏，OIS 不承担任何责任 ，包括在 OIS 和尼日利亚高级专员公署之间运输签证申请、护照或其他文件，以及 OIS 将其返还给申请人时。
              </p>
              <div class="sub-title pl-0">6.4 签证申请评估不承担任何责任</div>
              <p class="para-section">
                  OIS 不参与签证申请的评估、授予或拒绝的过程，并且对于尼日利亚高级专员公署评估、授予或拒绝任何签证申请的任何延误不承担任何责任。
              </p>
              <div class="sub-title pl-0">6.5 对浪费的成本和费用不承担责任</div>
              <p class="para-section">
                  对于任何签证申请人或依赖或受益于任何签证申请的任何其他人，对于因依赖或预期获得尼日利亚签证而产生的任何承诺、成本或支出，无论是在特定时间范围内还是在任何情况下，OIS 均不承担任何责任 ，包括但不限于航空旅行、酒店和其他旅行和住宿安排，以及所做的任何其他安排。
              </p>
              <p class="para-section">
                  OIS 建议您不要在签证签发之前购买机票或进行不可取消的预订，除非签证申请中有具体要求，在这种情况下应获取不定期机票。
              </p>
              <div class="sub-title pl-0">6.6 损失和损坏的一般排除</div>
              <p class="para-section">
                  对于任何直接、间接、惩罚性、偶然、特殊、后果性损害或任何损害，OIS 对任何签证申请人或依赖或受益于任何签证申请的任何其他人不承担任何责任（包括合同责任或疏忽责任）， 包括因签证申请、护照和其他文件的延误、错放、丢失或损坏而导致的情况，上述第 5 条所述情况除外。
              </p>
              <p class="para-section">
                  对于任何利润、收入、合同、业务、专业或其他职业的损失，OIS 对任何签证申请人或依赖任何签证申请或从任何签证申请中受益的任何其他人不承担任何责任（包括合同责任或疏忽责任），包括 由于签证申请、护照和其他文件的延误、错放、丢失或损坏而造成的。
              </p>
          </div>
          <div class="sub-title">7. 概述</div>
          <div class="sub-section">
              <div class="sub-title pl-0">7.1 第三方权利</div>
              <p class="para-section">
                  除签证申请人外，本条款和条件中的任何内容均不会令任何人受益或可由其强制执行，且《1999 年合同（第三方权利）法》不适用。
              </p>
              <div class="sub-title pl-0">7.2 这些条款的变更</div>
              <p class="para-section">
                  OIS 可自行决定随时更改、修改、取消或撤销任何或所有这些条款和条件，恕不另行通知。
              </p>
              <div class="sub-title pl-0">7.3 适用法律</div>
              <p class="para-section">
                  这些条款和条件以及任何签证申请均应根据我们所在国家的法律进行管理和解释。 因 OIS 向申请人提供的服务而产生的任何索赔或争议均应受所在国法院的专属管辖。
              </p>
          </div>
          <div class="sub-title">8.投诉</div>
          <div class="sub-section">
              <p class="para-section">
                  请通过电子邮件向客户关系部门提出任何投诉：
              </p>
              <p class="para-section">
                  info@oisservices.com
              </p>
          </div>
        </div>',
      'order_num' => 1,
      'lang' => 'cn',
    ]);
    Content::create([
      'title' => 'PRIVACY POLICY',
      'content' => '
        <div class="main-title">Privacy Policy</div>
          <div class="sub-body">
          <div class="sub-title">1. 简介</div>
          <div class="sub-section">
            <p class="para-section">
              在 OIS，我们致力于保护客户个人数据的隐私和机密性。 本隐私政策概述了我们如何使用、披露和保护我们从使用我们服务的个人那里获得的个人数据。 我们遵守适用的数据保护法律，包括《通用数据保护条例》(GDPR)，并努力确保最高标准的隐私和数据安全。
            </p>
          </div>
          <div class="sub-title">2. 数据收集和使用</div>
          <div class="sub-section">
            <div class="sub-title pl-0">2.1 个人数据收集</div>
            <p class="para-section">
              我们通过各种方式收集个人的个人数据，包括当他们创建帐户、付款、联系我们、完成调查、与我们的网站或应用程序互动或使用我们的服务时。 我们可能收集的个人数据类型包括但不限于：
            </p>
            <ul class="para-list">
              <li>姓名、地址和联系信息</li>
              <li>护照和签证详细信息</li>
              <li>生物识别数据</li>
              <li>银行验证码</li>
              <li>付款交易详情</li>
              <li>健康信息（用于电子医疗服务）</li>
              <li>与我们的服务和网站的互动</li>
              <li>休斯顿（9894 Bissonnet Street, Suite 745 Houston TX 77036 USA）</li>
              <li>就业或职业详细信息（用于招聘目的）</li>
            </ul>
            <div class="sub-title pl-0">2.2 数据处理的目的</div>
            <p class="para-section">
              我们出于以下目的处理个人数据：
            </p>
            <ul class="para-list">
              <li>
                与个人沟通并满足他们的服务请求或采购订单。
              </li>
              <li>提供客户支持并回复询问。</li>
              <li>
                改善和个性化个人对我们服务的体验。
              </li>
              <li>处理付款并验证财务交易。</li>
              <li>
                遵守法律义务，包括向有关当局报告的义务。
              </li>
              <li>
                管理我们的系统和流程，包括数据分析、审核和故障排除。
              </li>
              <li>
                进行调查并行使合法权利，包括预防和发现欺诈。
              </li>
              <li>开发和改进我们的产品和服务。</li>
            </ul>
            <div class="sub-title pl-0">2.3 处理的法律依据</div>
            <p class="para-section">
              我们根据以下一项或多项法律依据处理个人数据：
            </p>
            <ul class="para-list">
            <li>
              为履行合同而进行处理或应个人要求采取合同前步骤的必要性。
            </li>
            <li>遵守我们应承担的法律义务。</li>
            <li>
              个人对特定处理活动的同意。
            </li>
            <li>
              OIS 或第三方追求的合法利益，前提是此类利益不被个人权益所凌驾。
            </li>
          </ul>
        </div>
        <div class="sub-title">3. 数据共享与披露</div>
        <div class="sub-section">
          <div class="sub-title pl-0">3.1 第三方服务提供商</div>
          <p class="para-section">
            我们可能会与协助我们提供服务和履行义务的值得信赖的第三方服务提供商共享个人数据。 这些服务提供商受合同约束，只能代表我们并按照我们的指示处理个人数据。
          </p>
          <div class="sub-title pl-0">3.2 业务转让</div>
          <p class="para-section">
            如果合并、收购或出售我们的全部或部分资产，个人数据可能会作为交易的一部分转移给相关第三方。 我们将采取合理措施确保此类传输期间个人数据的安全性和机密性。
          </p>
          <div class="sub-title pl-0">3.3 法律和合规要求</div>
          <p class="para-section">
            如果法律、法院命令或政府机构要求，我们可能会披露个人数据。 我们还可能共享个人数据以保护我们或他人的权利、隐私、安全或财产。
          </p>
        </div>
        <div class="sub-title">4. 数据保留</div>
        <div class="sub-section">
          <p class="para-section">
            我们会在实现本隐私政策中概述的目的所需的最短期限内保留个人数据，除非法律要求或允许更长的保留期限。 用于确定适当保留期限的标准包括个人数据的性质、收集数据的目的以及法律和监管要求。
          </p>
        </div>
        <div class="sub-title">5. 数据安全</div>
        <div class="sub-section">
          <p class="para-section">
            我们采取适当的技术和组织措施来保护个人数据免遭未经授权的访问、更改、披露或破坏。 这些措施包括但不限于加密、访问控制、定期安全评估以及数据保护方面的员工培训。
          </p>
        </div>
        <div class="sub-title">6. 个人权利</div>
        <div class="sub-section">
          <p class="para-section">
            个人对其个人数据享有某些权利。 根据适用法律，个人有权：
          </p>
          <ul class="para-list">
            <li>访问他们的个人数据并索取其副本。</li>
            <li>纠正不准确或不完整的个人数据。</li>
            <li>在某些情况下删除个人数据。</li>
            <li>限制或反对处理个人数据。</li>
            <li>
              数据可移植性（以结构化、常用且机器可读的格式接收个人数据）。
            </li>
            <li>撤回同意（如果处理是基于同意）。</li>
          </ul>
          <p class="para-section">
            要行使这些权利或提出与隐私相关的投诉，个人可以使用第 8 条中提供的信息与我们联系。
          </p>
        </div>
        <div class="sub-title">7. 营销传播和 Cookie 政策</div>
        <div class="sub-section">
          <p class="para-section">
            我们可能会向已同意的个人发送营销信息。 个人可以随时按照通信中提供的说明或联系我们选择不接收此类通信。
          </p>
          <p class="para-section">
            我们的 Cookie 政策概述了我们网站上 Cookie 和类似技术的使用，并提供了有关管理 Cookie 首选项的信息。
          </p>
        </div>
        <div class="sub-title">8. 国际数据传输</div>
        <div class="sub-section">
          <p class="para-section">
            作为一家全球性组织，我们可能会将个人数据传输到欧洲经济区 (EEA) 以外的国家或具有不同数据保护法的其他地区。 在这种情况下，我们将确保采取适当的保护措施来保护个人数据，例如使用欧盟委员会批准的标准合同条款或依赖接收者的隐私护盾认证（如果适用）。
          </p>
        </div>
        <div class="sub-title">9. 儿童隐私</div>
        <div class="sub-section">
          <p class="para-section">
            我们的服务不针对 16 岁以下的个人。我们不会故意收集或索取儿童的个人数据。 如果我们发现我们在未经可证实的父母同意的情况下收集了儿童的个人数据，我们将采取措施删除该信息。
          </p>
        </div>
        <div class="sub-title">10. 隐私政策更新</div>
        <div class="sub-section">
          <p class="para-section">
            我们可能会不时更新本隐私政策，以反映我们的数据处理实践或法律义务的变化。 我们鼓励个人定期查看本隐私政策以获取任何更新。 修订后的隐私政策将从在我们网站上发布之日起生效。
          </p>
        </div>
        <div class="sub-title">11. 联系方式</div>
        <div class="sub-section">
          <p class="para-section">
            对于任何与隐私相关的疑虑、问题、请求或投诉，请通过以下方式联系我们的数据保护官：
          </p>
          <p class="para-section">dataprotection@oisservices.com</p>
          <p class="para-section">
            我们认真对待隐私问题，并将及时回复以解决任何疑虑或询问。 请注意，为了便于理解，本隐私政策以英文提供。 如果英文版本与翻译版本之间存在任何冲突，则以英文版本为准。
          </p>
        </div>
      </div>',
      'order_num' => 1,
      'lang' => 'cn',
    ]);
    Content::create([
      'title' => 'DATA PROJECT',
      'content' => '
        <div class="main-title">
          GDPR 及相关数据保护政策
        </div>
        <div class="sub-body">
          <div class="sub-title">一、简介</div>
          <div class="sub-section">
            <p class="para-section">
              在其日常业务运营中，在线集成解决方案 (OIS) 使用各种有关可识别个人的数据，包括以下数据：
            </p>
            <ul class="para-list">
              <li>
                现任、过去和未来的员工
              </li>
              <li>
                顾客
              </li>
              <li>
                其网站的用户
              </li>
              <li>
                订阅者
              </li>
              <li>
                其他利益相关者
              </li>
            </ul>
            <p class="para-section">
               在收集和使用这些数据时，组织必须遵守各种立法，控制如何开展此类活动以及必须采取保护措施。
            </p>
            <p class="para-section">
              本政策的目的是制定相关立法并描述 OIS 为确保遵守该立法而采取的步骤。
            </p>
            <p class="para-section">
              这种控制适用于构成组织信息系统的所有系统、人员和流程，包括董事会成员、董事、员工、供应商和其他有权访问 OIS 系统的第三方。
            </p>
            <p class="para-section">
              以下政策和程序与本文件相关：
            </p>
            <ul class="para-list">
              <li>
                数据保护影响评估流程
              </li>
              <li>
                个人数据分析程序
              </li>
              <li>
                合法权益评估程序
              </li>
              <li>
                信息安全事件响应程序
              </li>
              <li>
                GDPR 角色和责任
              </li>
              <li>
                其他利益相关者
              </li>
            </ul>
          </div>
          <div class="sub-title">2. 密码学的使用</div>
          <div class="sub-section">
            <p class="para-section">
              在适合信息和存储介质分类的情况下，使用加密技术来确保记录的机密性和完整性。
            </p>
            <p class="para-section">
              我们已采取绝对谨慎的措施，确保用于加密记录的加密密钥在相关记录的生命周期内得到安全存储，并符合组织的加密政策。
            </p>
            <div class="sub-title pl-0">2.1 欧盟通用数据保护条例 - GDPR</div>
             <p class="para-section">
               2016 年通用数据保护条例 (GDPR) 是影响 OIS 开展信息处理活动方式的最重要的立法之一。 GDPR 旨在保护欧盟公民的个人数据，如果认为发生违规行为，将处以巨额罚款。 OIS 的政策是确保我们始终明确且可证明地遵守 GDPR 和其他相关立法。
             </p>
             <div class="sub-title pl-0">2.2 定义</div>
             <p class="para-section">
               GDPR 中总共列出了 26 个定义，此处不宜全部复制。 然而，与该政策相关的最基本的定义如下：
             </p>
             <p class="para-section">
               个人数据定义为：
             </p>
             <p class="para-section">
               与已识别或可识别自然人（“数据主体”）相关的任何信息； 可识别的自然人是指可以直接或间接识别的自然人，特别是通过参考诸如姓名、身份证号码、位置数据、在线标识符等标识符或特定于身体、生理、心理的一个或多个因素来识别的自然人。 该自然人的遗传、心理、经济、文化或社会身份；
             </p>
             <p class="para-section">
               “处理”的意思是
             </p>
            <p class="para-section">
              对个人数据或个人数据集执行的任何操作或一组操作，无论是否通过自动方式，例如收集、记录、组织、构建、存储、改编或更改、检索、咨询、使用、披露 传输、传播或以其他方式提供、排列或组合、限制、删除或销毁；
            </p>
            <p class="para-section">
              “控制器”的意思是
            </p>
            <p class="para-section">
              单独或与他人共同确定个人数据处理目的和方式的自然人或法人、公共机关、代理机构或其他团体； 如果此类处理的目的和方式由联盟或成员国法律确定，则控制者或其提名的具体标准可由联盟或成员国法律规定；
            </p>
            <div class="sub-title pl-0">2.3 个人数据处理相关原则</div>
            <p class="para-section">
              GDPR 所依据的基本原则有很多。<br>
              具体如下：
            </p>
            <p class="para-section">
              1. 个人数据应：
            </p>
            <p class="para-section">
              (a) 对数据主体进行合法、公平和透明的处理（“合法性、公平性和透明度”）；
            </p>
            <p class="para-section">
              (b) 出于特定、明确和合法的目的而收集，并且不以与这些目的不相符的方式进行进一步处理； 根据第 89(1) 条，出于公共利益、科学或历史研究目的或统计目的而进行的进一步处理不应被视为与初始目的不相容（“目的限制”）；
            </p>
            <p class="para-section">
              (c) 充分、相关且仅限于与处理目的相关的必要内容（“数据最小化”）；
            </p>
            <p class="para-section">
              (d) 准确，并在必要时保持最新； 必须采取一切合理步骤，确保毫不拖延地删除或纠正不准确的个人数据（考虑到处理目的）（“准确性”）；
            </p>
            <p class="para-section">
              (e) 以允许识别数据主体的形式保存，时间不超过处理个人数据的目的所需的时间； 个人数据可以保存更长的时间，只要个人数据的处理仅出于公共利益、科学或历史研究目的或统计目的的存档目的，根据第 89(1) 条，须采取适当的技术和组织措施 本条例要求采取的措施，以保障数据主体的权利和自由（“存储限制”）；
            </p>
            <p class="para-section">
              (f) 以确保个人数据适当安全的方式进行处理，包括使用适当的技术或组织措施（“完整性和保密性”）防止未经授权或非法处理以及意外丢失、毁坏或损坏。
            </p>
            <p class="para-section">
              (f) 以确保个人数据适当安全的方式进行处理，包括使用适当的技术或组织措施（“完整性和保密性”）防止未经授权或非法处理以及意外丢失、毁坏或损坏。
            </p>
            <p class="para-section">
              OIS 将确保其在当前执行的处理中以及作为引入新处理方法（例如新 IT 系统）的一部分时遵守所有这些原则。
            </p>
            <div class="sub-title pl-0">2.4 个人权利</div>
            <p class="para-section">
              数据主体还享有 GDPR 规定的权利。 这些包括：
            </p>
            <p class="para-section">
              知情权<br>访问权<br>纠正权<br>删除权<br>限制处理权<br>数据可移植权<br>反对权< br>与自动决策和分析相关的权利</p>
            <p class="para-section">
              这些权利中的每一项都受到 OIS 内适当程序的支持，这些程序允许在 GDPR 规定的时间范围内采取所需的行动。
            </p>
            <p class="para-section">
              这些时间尺度如表 1 所示。
            </p>
            <table>
              <thead>
                <tr>
                  <th>数据主体请求</th>
                  <th>时间刻度</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>知情权</td>
                  <td>收集数据时（如果数据主体提供）或一个月内（如果数据主体未提供）</td>
                </tr>
                <tr>
                  <td>访问权</td>
                  <td>一个月</td>
                </tr>
                <tr>
                  <td>纠正权</td>
                  <td>一个月</td>
                </tr>
                <tr>
                  <td>删除权</td>
                  <td>不得无故拖延</td>
                </tr>
                <tr>
                  <td>限制处理的权利</td>
                  <td>不得无故拖延</td>
                </tr>
                <tr>
                  <td>数据可移植权</td>
                  <td>一个月</td>
                </tr>
                <tr>
                  <td>反对权</td>
                  <td>收到反对意见</td>
                </tr>
              </tbody>
            </table>
            <p class="para-section">
              表 1 - 数据主体请求的时间表
            </p>
            <div class="sub-title pl-0">2.5 处理的合法性</div>
            <p class="para-section">
              根据 GDPR，可以通过六种替代方式确定个人数据处理特定案例的合法性。 OIS 的政策是根据该法规确定适当的处理基础并将其记录下来。 以下各节简要描述了这些选项。
            </p>
            <div class="sub-title pl-0">2.5.1 同意</div>
            <p class="para-section">
              除非 GDPR 允许的原因有必要，否则 OIS 将始终获得数据主体的明确同意来收集和处理其数据。 如果儿童未满 16 岁（特定欧盟成员国可能允许更低的年龄），将获得父母的同意。 有关我们使用其个人数据的透明信息将在获得同意时提供给数据主体，并解释他们对其数据的权利，例如撤回同意的权利。 该信息将以易于理解的形式、以清晰的语言编写且免费提供。 如果个人数据不是直接从数据主体获得的，则该信息将在获得数据后的合理期限内（当然是一个月内）提供给数据主体。
            </p>
            <div class="sub-title pl-0">2.5.2 合同履行</div>
            <p class="para-section">
              如果收集和处理的个人数据是为了履行与数据主体之间的合同而需要的，则无需明确同意。 通常情况下，如果没有相关个人数据，合同就无法完成，例如： 如果没有交付地址，则无法进行交付。
            </p>
            <div class="sub-title pl-0">2.5.3 法律义务</div>
            <p class="para-section">
              如果为了遵守法律而需要收集和处理个人数据，则不需要明确同意。 例如，与就业和税收相关的一些数据以及公共部门处理的许多领域的数据可能就是这种情况。
            </p>
            <div class="sub-title pl-0">2.5.4 数据主体的切身利益</div>
            <p class="para-section">
              如果需要个人数据来保护数据主体或其他自然人的切身利益，则可以将其用作处理的合法依据。 每当该理由被用作个人数据处理的合法依据时，OIS 将保留证明这种情况的合理、书面证据。 例如，这可以用于社会护理方面，特别是在公共部门。
            </p>
            <div class="sub-title pl-0">2.5.5 为公共利益而执行的任务</div>
            <p class="para-section">
              如果 OIS 需要执行其认为符合公共利益或作为官方职责一部分的任务，则无需征求数据主体的同意。 对公共利益或官方职责的评估将被记录下来并在需要时作为证据提供。
            </p>
            <div class="sub-title pl-0">2.5.6 合法权益</div>
            <p class="para-section">
              如果特定个人数据的处理符合 OIS 的合法利益，并且被判断不会对数据主体的权利和自由产生重大影响，则可以将其定义为处理的合法理由。 同样，该观点背后的推理将被记录下来。
            </p>
            <div class="sub-title pl-0">2.6 隐私设计</div>
            <p class="para-section">
              OIS 在设计上采用了隐私原则，并将确保收集或处理个人数据的所有新的或重大变更的系统的定义和规划都将适当考虑隐私问题，包括完成一项或多项数据保护影响 评估。
            </p>
            <p class="para-section">
              数据保护影响评估将包括：
            </p>
            <p class="para-section">
              考虑如何处理个人数据以及出于什么目的<br>评估拟议的个人数据处理是否必要且与目的相称
            </p>
            <p class="para-section">
              评估个人在处理个人数据时面临的风险<br>需要采取哪些控制措施来解决已识别的风险并证明遵守立法<br>在适用和适当的情况下，将考虑使用数据最小化和假名化等技术。
            </p>
            <div class="sub-title pl-0">2.7 涉及个人数据处理的合同</div>
            <p class="para-section">
              OIS 将确保其建立的涉及个人数据处理的所有关系均受书面合同的约束，其中包括 GDPR 要求的具体信息和条款。 有关更多信息，请参阅 GDPR 控制器处理器
              协议政策
            </p>
            <div class="sub-title pl-0">2.8 个人数据的国际传输</div>
            <p class="para-section">
              在传输之前，将仔细审查欧盟以外的个人数据传输，以确保其符合 GDPR 规定的限制。 这在一定程度上取决于欧盟委员会对接收国适用的个人数据保护措施是否充分的判断，并且这可能会随着时间的推移而改变。<br>集团内部的国际数据传输将受到具有法律约束力的协议的约束 作为具有约束力的公司规则（BCR），为数据主体提供可执行的权利。
            </p>
            <div class="sub-title pl-0">2.9 数据保护官</div>
            <p class="para-section">
              如果组织是公共机构、执行大规模监控或大规模处理特别敏感类型的数据，则 GDPR 需要明确规定数据保护官 (DPO) 的角色。 DPO 需要具备适当的知识水平，可以是内部资源，也可以外包给适当的服务提供商。
            </p>
            <p class="para-section">
              根据这些标准，OIS 任命了数据保护官，以下是联系方式：
            </p>
            <p class="para-section">
              姓名：Archibald Coker<br>电子邮件：acoker@oisservices.com<br>联系方式：+44 (0) 207 832 0001
            </p>
            <div class="sub-title pl-0">2.10 违规通知</div>
            <p class="para-section">
              OIS 的政策是在考虑采取行动通知受影响方有关个人数据泄露的情况时，保持公平和相称。 根据 GDPR，如果已知发生了可能对个人权利和自由造成风险的违规行为，将在 72 小时内通知相关监管机构。 这将根据我们的信息安全事件响应程序进行管理，该程序规定了处理信息安全事件的总体流程。
            </p>
            <p class="para-section">
              根据 GDPR，相关 DPA 有权对违反规定的行为处以高达全球年营业额 4% 或 2000 万欧元（以较高者为准）的一系列罚款。
            </p>
            <div class="sub-title pl-0">2.11 解决 GDPR 合规问题</div>
            <p class="para-section">
              采取以下行动来确保 OIS 始终遵守 GDPR 的问责原则：
            </p>
            <ul class="para-list">
              <li>
                处理个人数据的法律依据明确且明确
              </li>
              <li>
                任命一名数据保护官，具体负责组织内的数据保护（如果需要）
              </li>
              <li>
                所有参与处理个人数据的员工都了解自己有责任遵循良好的数据保护实践
              </li>
              <li>
                已向所有员工提供数据保护培训
              </li>
              <li>
                遵守有关同意的规则
              </li>
              <li>
                希望行使其个人数据权利的数据主体可以使用路线，并且此类询问得到有效处理
              </li>
              <li>
                对涉及个人数据的程序进行定期审查
              </li>
              <li>
                所有新的或更改的系统和流程均采用隐私设计
              </li>
            </ul>
            <p class="para-section">
              记录了以下处理活动的文档：
            </p>
            <ul class="para-list">
              <li>
                组织名称及相关详情
              </li>
              <li>
                个人数据处理的目的
              </li>
              <li>
                个人类别和处理的个人数据
              </li>
              <li>
                个人数据接收者的类别
              </li>
              <li>
                将个人数据传输到非欧盟国家的协议和机制，包括现有控制措施的详细信息
              </li>
              <li>
                个人数据保留时间表
              </li>
              <li>
                相关技术和组织控制措施到位
              </li>
            </ul>
            <p class="para-section">
              作为与数据保护有关的管理流程的一部分，定期审查这些行动。
            </p>
          </div>
          <div class="sub-title">相关数据保护</div>
            <div class="sub-section">
              <div class="sub-title pl-0">数据保护原则</div>
              <p class="para-section">
                8 项数据保护原则可确保组织以保护客户机密的方式收集、存储和处理个人数据。 这些原则载于该法案附表 1，具体如下：
              </p>
              <p class="para-section">
                我。 数据必须公平合法地处理<br>我们有合法理由获取、存储和处理客户的数据，即协助您获得护照、签证以及用于法律和我们与客户之间的合同授权的其他目的 。 我们确保您的数据不会被用于任何非法行为。
              </p>
              <p class="para-section">
                二. 个人数据仅应出于一个或多个指定且合法的目的而获取，并且不得以与该目的或这些目的不相符的任何方式进一步处理。<br>由于我们工作的性质，您给出的目的 您的个人数据对您和我们来说都是显而易见的。 我们不会将您的数据用于与原始目的不相符的任何其他目的，除非您事先给予我们同意或法律强制我们这样做。
              </p>
              <p class="para-section">
                三. 就其处理目的而言，个人数据应是充分、相关且不过量的。<br>我们只会获取我们认为相关且足以履行我们与您签订的合同的信息。
              </p>
              <p class="para-section">
                四. 个人数据应准确，并在必要时保持最新。<br>我们确保您向我们提供的个人数据是正确的且不具有误导性。 我们通过让您有机会确认您向我们提供的信息以及在必要时要求提供文件证明来实现这一目标。 如果您的个人资料发生相关变更，例如姓名或国籍变更，请尽快告知我们，以便我们更新您的记录。
              </p>
              <p class="para-section">
                v. 出于任何目的而处理的个人数据的保存时间不得超过该目的所需的时间。<br>我们将不时审查我们的数据库，看看是否仍然需要某些个人数据 由我们存储。 如果存储的目的已经达到，并且我们认为不再需要继续存储它们，我们将安全地删除它们。
              </p>
              <p class="para-section">
                六. 个人数据应根据本法规定的数据主体的权利进行处理。<br>我们将处理您的个人数据，以使您能够执行以下任何操作：
              </p>
              <ul class="para-list-digit">
                <li>
                  访问您的个人数据副本的权利，通常称为“主题访问请求”。 目前的费用为每个标准请求 10 英镑，我们的目标是在 14 天内提供。 主题访问请求应通过电子邮件或邮寄方式发送至 info@oisservices.com The Head of Centre, OIS Services, 56-57 Fleet street, EC4Y 1JU, London </li>
                <li>
                  有权反对以可能对您造成损害或困扰的方式处理您的个人数据；
                </li>
                <li>
                有权阻止以不符合原始目的或目的的方式处理您的个人数据；
              </li>
              <li>
                反对通过自动化方式做出的决定的权利；
              </li>
              <li>
                在适当的情况下，有权纠正、阻止或删除不准确的个人数据，以及
              </li>
              <li>
                对因违反该法造成的损失要求赔偿的权利。
              </li>
            </ul>
            <p class="para-section">
              七. 个人数据安全<br>您的个人数据在物理上和技术上都保存在非常安全的环境中。 所有未经授权的人员不得进入保存个人数据的区域。 只能通过仅向授权人员颁发的电子钥匙才能进入该场所的这些部分。 您的个人数据只能由授权人员在系统上访问。 只有此类授权人员才能更改、披露或销毁您的个人数据。 此外，此类授权人员只能在其合法职责范围内履行任何这些职能。 因此，您的个人数据被非法处理或意外损坏、毁坏或丢失的可能性非常小。
              此外，我们的政策是确保：
            </p>
            <ul class="para-list-digit">
              <li>
                每个有权访问个人数据的授权员工都有自己的密码，该密码不会与其他人共享，
              </li>
              <li>
                使用批准的安全软件和防火墙来保护我们的数据，
              </li>
              <li>
                未使用的打印个人数据将被粉碎，
              </li>
              <li>
                我们不鼓励将个人数据存储在笔记本电脑和其他移动设备和媒体上，但如果这样做，应安全锁定，不要带出办公室。
              </li>
            </ul>
            <p class="para-section">
              八． 在欧洲经济区之外传输个人数据<br>您的个人数据不会被传输到欧洲经济区之外的国家或地区，除非该国家或地区确保对相关数据主体的权利和自由提供充分的保护 个人数据的处理。 欧洲经济区以外只有少数几个国家被认为在个人数据处理方面具有与欧洲经济区国家相当的足够保护水平。 当我们将个人数据传输到美国时，我们确保接收者是美国商务部安全港计划的签署人。 该计划被欧盟委员会认可为数据主体提供充分的保护。 对于欧洲经济区以外尚未被认为具有处理个人数据的同等安全和保障措施的其他国家/地区，我们要么签署一份单独的合同，其条款得到欧洲指令的批准，要么确保有一项条款 在保护我们所有客户的个人数据处理的合同中。
            </p>
          </div>
        </div>',
      'order_num' => 1,
      'lang' => 'cn',
    ]);

    //ar
    Content::create([
      'title' => 'ABOUT OIS',
      'content' => '<p class="title body-section">حلول برمجية مبتكرة في مختلف الصناعات.</p>',
      'order_num' => 1,
      'lang' => 'ar',
    ]);
    Content::create([
      'title' => 'ABOUT OIS',
      'content' => '<p class="sub-title">OIS (الخدمات المتكاملة عبر الإنترنت)</p>
                <p class="description mt-4">تقف OIS (الحلول المتكاملة عبر الإنترنت) في طليعة الابتكار باعتبارها المزود الرائد لحلول البرمجيات المتطورة التي تغطي مختلف الصناعات. بدأت رحلتنا كمركز لتقديم طلبات التأشيرة ومقدم خدمات الدعم، وتطورنا منذ ذلك الحين لنوسع خدماتنا إلى جميع البعثات الدبلوماسية النيجيرية في جميع أنحاء العالم. يعتمد نجاحنا على التكنولوجيا المتقدمة والجودة التي لا مثيل لها وقابلية التوسع وقابلية النقل السلس لحلولنا.</p>
                <p class="description mb-0 mt-4">ما يميز OIS هو بصمتنا العالمية، مما يسمح بالتكامل السهل للتطبيقات على نطاق عالمي. إن التزامنا بالتميز يمتد إلى ما هو أبعد من خدمات الهجرة، حيث أننا نفتخر بسجل حافل في المنصات المصرفية. نعمل كوسيط حاسم للبنوك النيجيرية، ونحن نقدم الخدمات الأساسية للنيجيريين غير المقيمين والأفراد من جنسيات أخرى في الخارج الذين يسعون لفتح أو إعادة تنشيط حساباتهم المصرفية النيجيرية.</p>
                <p class="description mb-0 mt-4">في OIS، نسعى باستمرار لإعادة تعريف معايير الصناعة، وتقديم مجموعة شاملة من الحلول التي تعكس تفانينا في التميز والبراعة التكنولوجية. انضم إلينا في رحلة لا مثيل لها لتقديم الخدمات والاتصال العالمي.</p>',
      'order_num' => 2,
      'lang' => 'ar',
    ]);
    Content::create([
      'title' => 'ABOUT OIS',
      'content' => '<p class="description">في OIS، نحن نفخر بشدة بالتزامنا الثابت بتقديم الخدمات الاستثنائية والتكنولوجيا المتطورة. إن مجموعتنا الشاملة من الخدمات تتجاوز مجرد حلول التأشيرات وجوازات السفر، لتشمل منصات التعليم والرعاية الصحية والخدمات المصرفية. نحن نؤمن بتبسيط العمليات، ولتحقيق ذلك، نقدم تجربة تطبيق مبسطة من خلال بوابتنا الإلكترونية سهلة الاستخدام، ونظام الدفع السلس، والتحديثات في الوقت الفعلي.</p>
                <p class="description mt-4 mb-0">بالنسبة لأولئك الذين يسعون للحصول على رقم التحقق البنكي (BVN)، تضمن عملية تقديم الطلبات عبر الإنترنت بالإضافة إلى تسليم الرسائل النصية القصيرة تجربة فعالة وخالية من المتاعب.</p>
                <p class="description mt-4 mb-0">في مجال الخدمات المالية، تتميز خدمات تحويل الأموال الإلكترونية التي نقدمها. نحن نقدم وسيلة آمنة وبأسعار معقولة لتحويل الأموال عبر الإنترنت، وندعم طرقًا مختلفة مثل التحصيل النقدي، ومعاملات العملة المشفرة، والتحويلات المصرفية، ومعاملات الأموال عبر الهاتف المحمول، وزيادة رصيد البث. مع OIS، استمتع بتجربة الحلول المالية الحديثة والآمنة والمرنة المصممة لتلبية احتياجاتك المتنوعة.</p>',
      'order_num' => 3,
      'lang' => 'ar',
    ]);
    Content::create([
      'title' => 'ABOUT OIS',
      'content' => '<p class="description mb-0">في OIS، تحتل رفاهية عملائنا مركز الصدارة، ويمتد التزامنا إلى تقديم خدمات الصحة الإلكترونية والعافية من الدرجة الأولى. انغمس في نهج شامل للصحة من خلال مجموعة العروض التي نقدمها:</p>
                <p class="description mt-0 mb-0"><b>خدمات التطبيب عن بعد:</b></p>
                <p class="description mt-0 mb-0 ml-4">• استمتع بتجربة الرعاية الصحية وفقًا لشروطك من خلال خدمات التطبيب عن بعد التي نقدمها. تواصل بسلاسة مع المتخصصين في الرعاية الصحية من خلال الاستشارات الافتراضية، وفتح خطط النظام الغذائي المخصصة، وإجراءات التمارين المنسقة، ودعم الصحة العقلية الذي لا يقدر بثمن. رفاهيتك هي أولويتنا، وخدمات التطبيب عن بعد لدينا تجلب لك خبرة الرعاية الصحية مباشرة.</p>
                <p class="description mt-0 mb-0"><b>أجهزة مراقبة الصحة:</b></p>
                <p class="description mt-0 mb-0 ml-4">• ابق على اطلاع واستباقي بشأن صحتك من خلال أجهزة المراقبة الصحية لدينا. تسمح لك هذه الأدوات المتطورة بتتبع العلامات الحيوية، مما يوفر رؤى قيمة حول صحتك العامة. قم بتمكين نفسك من خلال اتخاذ القرارات المبنية على البيانات من أجل نمط حياة أكثر صحة.</p>
                <p class="description mt-0 mb-0"><b>برنامج العافية المتكامل:</b></p>
                <p class="description mt-0 mb-0 ml-4">• يعد برنامج العافية الخاص بنا ملاذًا شاملاً للصحة، حيث يدمج دعم الصحة العقلية بسلاسة في رحلة الرفاهية الخاصة بك. إلى جانب الصحة البدنية، فإننا نعطي الأولوية للصحة العقلية، ونعزز اتباع نهج متوازن وشامل للرفاهية العامة.</p>
                <p class="description mt-0 mb-0">مهمتنا هي ليس فقط تقديم حلول برمجية متطورة ولكن أيضًا أن نكون حليفًا موثوقًا به في سعيك لتحقيق الصحة والعافية. من خلال تبسيط العمليات وتعزيز الخبرات عبر الصناعات، نحن ملتزمون بإحداث تأثير إيجابي على كل جانب من جوانب حياتك. مرحبًا بكم في عالم يلتقي فيه الابتكار بالرفاهية.</p>
                <p class="description mt-4 mb-5">في OIS، التزامنا الثابت هو الريادة في الحلول البرمجية المتطورة التي لا تبسط العمليات فحسب، بل تعمل أيضًا على تبسيط العمليات ورفع مستوى الخبرات عبر الصناعات المتنوعة.</p>',
      'order_num' => 4,
      'lang' => 'ar',
    ]);
    Content::create([
      'title' => 'SERVICES',
      'content' => '<p class="title body-section">مساعدة الشركات والأفراد على التغلب على التحديات المعقدة.</p>',
      'order_num' => 1,
      'lang' => 'ar',
    ]);
    Content::create([
      'title' => 'SERVICES',
      'content' => '<p class="sub-title">معالجة طلبات التأشيرة وجواز السفر:</p>
                <p class="description mb-0">في Online Integrated Solutions (OIS)، نقف كشركة رائدة عالميًا في حلول البرمجيات الثورية، المخصصة لتمكين الشركات والأفراد من التغلب على التحديات المعقدة. ويتجلى تأثيرنا العميق بشكل خاص في مجال معالجة طلبات VISA، حيث نقوم بتسخير قوة خوارزميات التعلم الآلي المتقدمة (ML) لتعزيز الكفاءة والدقة وقابلية التوسع، مما يؤدي في نهاية المطاف إلى الارتقاء بتجربة العملاء الشاملة. فيما يلي المجالات الرئيسية التي يمكن أن يؤدي فيها نهجنا المبتكر في التعلم الآلي إلى تحسينات تحويلية:</p>
                <p class="description mt-0 mb-0 ml-4">• معالجة البيانات والتحقق من صحتها.</p>
                <p class="description mb-0 ml-4">• الكشف عن الغش.</p>
                <p class="description mb-0 ml-4">• تحديد الهوية البيومترية.</p>
                <p class="description mb-0 ml-4">• تتبع حالة الطلب.</p>
                <p class="description mb-5 mt-4">في OIS، نتصور مستقبلًا لا تلبي فيه التكنولوجيا التوقعات فحسب، بل تتجاوزها، ويضمن التزامنا بدفع حدود الابتكار أن يستفيد عملاؤنا ومستخدمونا من حلول معالجة طلبات التأشيرة وجواز السفر الأكثر تقدمًا وكفاءة وأمانًا المتاحة.</p>',
      'order_num' => 2,
      'lang' => 'ar',
    ]);
    Content::create([
      'title' => 'SERVICES',
      'content' => '<p class="sub-title">معالجة طلب رقم التحقق البنكي (BVN):</p>
                <p class="description mb-0">في سعينا الحثيث لتقديم خدمات سلسة، ندرك الإمكانات التحويلية للتعلم الآلي، لا سيما في تحسين عملية طلب رقم التحقق البنكي (BVN). نحن ندرك الأهمية القصوى لإصدار BVN السريع الذي يسهل الوصول إليه لعملائنا، مما يدفعنا إلى تحسين هذا الإجراء الحاسم وتسريعه باستمرار. من خلال تسخير إمكانات التعلم الآلي، نهدف إلى رفع مستوى دقة وكفاءة تسجيلات BVN، والتخفيف في الوقت نفسه من المخاطر المرتبطة بالأخطاء والأنشطة الاحتيالية. فيما يلي المجالات الرئيسية التي يعد فيها دمجنا للتعلم الآلي بتأثير كبير:</p>
                <p class="description mt-0 mb-0 ml-4">• معالجة البيانات والتحقق من صحتها.</p>
                <p class="description mt-0 mb-0 ml-4">• التحليلات التنبؤية.</p>
                <p class="description mt-0 mb-0 ml-4">• الكشف عن الغش.</p>
                <p class="description mt-4 mb-5">يكمن في قلب التزامنا التفاني في تزويد عملائنا بتجربة تطبيق BVN لا مثيل لها - سريعة ودقيقة ومحصنة ضد المخاطر المحتملة. ومن خلال دمج التعلم الآلي، نبدأ رحلة لإعادة تحديد معايير الكفاءة والأمان في إصدار BVN.</p>',
      'order_num' => 3,
      'lang' => 'ar',
    ]);
    Content::create([
      'title' => 'SERVICES',
      'content' => '<p class="sub-title">الارتقاء بتميز الخدمة من خلال روبوتات الدردشة المدعومة بالذكاء الاصطناعي:</p>
                <p class="description">يسعدنا أن نكشف عن أحدث ابتكاراتنا — AI Chatbot — وهو تقدم فعال يهدف إلى إحداث تحول في خدمة العملاء والدعم. يعمل برنامج Chatbot المتطور هذا على تسخير قوة خوارزميات التعلم الآلي، مما يوفر للعملاء وسيلة مخصصة وفعالة للمساعدة. تم تصميم Chatbot الخاص بنا لإحداث ثورة في تجربة العملاء من خلال تقديم استجابات سريعة ودقيقة للاستفسارات وحل المشكلات مع الحد الأدنى من الاعتماد على التدخل البشري.</p>
                <p class="description mt-4 mb-0">الميزات والفوائد الرئيسية:</p>
                <p class="description mt-0 mb-0 ml-4">• استجابات سريعة ودقيقة.</p>
                <p class="description mt-0 mb-0 ml-4">• إمكانية الوصول على مدار الساعة طوال أيام الأسبوع.</p>
                <p class="description mt-0 mb-0 ml-4">• القضاء على أوقات الانتظار.</p>
                <p class="description mt-0 mb-0 ml-4">• التعامل مع الاستفسارات المتنوعة.</p>
                <p class="description mt-4 mb-5">يمثل AI Chatbot هذا التزامًا بإعادة تحديد معايير الخدمة، مما يضمن تجربة عملائنا لتفاعل سلس وفعال مع علامتنا التجارية. مع استمرار تطور التكنولوجيا، نبقى في الطليعة، ونستفيد من الحلول المبتكرة لتعزيز رحلة العميل الخاصة بك. مرحبًا بك في عصر جديد من التخصيص والاستجابة</p>',
      'order_num' => 4,
      'lang' => 'ar',
    ]);
    Content::create([
      'title' => 'SERVICES',
      'content' => '<p class="sub-title">الارتقاء بمستوى الصحة الإلكترونية والعافية من خلال التكنولوجيا المتطورة</p>
                <p class="description mb-0">من خلال الشروع في رحلة من التحسين المستمر، نحن ملتزمون بإحداث ثورة في خدمات الصحة الإلكترونية والعافية لدينا من خلال دمج التكنولوجيا المتقدمة. استكشف الطرق التي لا تعد ولا تحصى التي يمكن لهذه الابتكارات من خلالها تمكينك من الحفاظ على الصحة والرفاهية المثلى:</p>
                <p class="description mt-0 mb-0">1. خدمات التطبيب عن بعد:</p>
                <p class="description mb-0 ml-4">• انغمس في مستقبل الرعاية الصحية مع أنظمتنا المتقدمة. تعد الدقة والتخصيص في المقدمة حيث تقوم خدمات التطبيب عن بعد لدينا بتشخيص المخاوف الصحية بدقة وتقديم خطط علاجية مخصصة مصممة خصيصًا لتلبية احتياجاتك الفريدة.</p>
                <p class="description mt-0 mb-0">2. برنامج العافية:</p>
                <p class="description mb-0 ml-4">• تبني نهجًا شاملاً للرفاهية من خلال برنامجنا الصحي الرائد. من خلال الاستفادة من الإمكانات التحويلية لتقنية Blockchain وWeb3، توفر منصتنا الآمنة واللامركزية خططًا غذائية مخصصة وأنظمة تمارين مخصصة ودعمًا شاملاً للصحة العقلية. انطلق في رحلة عافية مميزة مثلك تمامًا.</p>
                <p class="description mt-0 mb-0">3. أجهزة مراقبة الصحة:</p>
                <p class="description mb-0 ml-4">• أطلق العنان لقوة الذكاء الاصطناعي باستخدام أجهزة المراقبة الصحية لدينا. تقوم هذه الأنظمة الذكية بتحليل البيانات التي تم جمعها من مجموعة من الأجهزة، مما يوفر لك تعليقات مخصصة وتوصيات ثاقبة. قم بتغيير الطريقة التي تراقب بها صحتك، باستخدام التكنولوجيا التي تتطور معك.</p>
                <p class="description mt-4 mb-5">عند تقاطع الابتكار والصحة، نتصور مستقبلًا حيث تعزز التكنولوجيا كل جانب من جوانب رحلة الرفاهية الخاصة بك. التزامنا هو تزويدك بحلول مخصصة وآمنة ومتطورة تعيد تعريف معايير الصحة الإلكترونية والعافية. مرحبًا بك في عالم حيث صحتك ليست مجرد أولوية - إنها تجربة مخصصة.</p>',
      'order_num' => 5,
      'lang' => 'ar',
    ]);
    Content::create([
      'title' => 'SERVICES',
      'content' => '<p class="sub-title">إحداث ثورة في مجال تحويل الأموال الإلكتروني باستخدام تقنيات Blockchain وWEB3</p>
                <p class="description">تعلن OIS بكل فخر عن تحسينات رائدة في خدمة تحويل الأموال الإلكترونية لدينا من خلال دمج تقنيات Blockchain وWeb3 المتطورة. يؤدي هذا التطور الاستراتيجي إلى رفع مستوى خدماتنا، مما يوفر للعملاء مستوى غير مسبوق من الشفافية والأمان.</p>
                <p class="description mt-4 mb-0">التطورات الرئيسية:</p>
                <p class="description mt-0 mb-0 ml-4">• تسجيل دفتر الأستاذ غير القابل للتغيير.</p>
                <p class="description mt-0 mb-0 ml-4">• خيارات سريعة وآمنة ومنخفضة التكلفة.</p>
                <p class="description mt-0 mb-0 ml-4">• تعزيز المرونة والراحة.</p>
                <p class="description mt-4 mb-5">في OIS، نحن ملتزمون بإعادة تعريف مشهد الخدمات المالية الإلكترونية. يعد تكامل Blockchain وWeb3 بمثابة شهادة على تفانينا في الابتكار، مما يضمن حصول عملائنا على أقصى درجات الأمان والشفافية والراحة عند تكليفنا بمعاملاتهم المالية. مرحبًا بكم في عصر جديد من تحويل الأموال الإلكتروني، حيث تلتقي التكنولوجيا بالثقة.</p>',
      'order_num' => 6,
      'lang' => 'ar',
    ]);
    Content::create([
      'title' => 'INNOVATION',
      'content' => '<p class="title body-section">مستقبل الواقع الافتراضي هنا.</p>',
      'order_num' => 1,
      'lang' => 'ar',
    ]);
    Content::create([
      'title' => 'INNOVATION',
      'content' => '<p class="sub-title">التخصيص المدعوم بالذكاء الاصطناعي</p>
                <p class="description">نحن نستخدم خوارزميات الذكاء الاصطناعي لتخصيص خدماتنا بما يتناسب مع احتياجات كل عميل على حدة. ومن خلال تحليل بيانات العملاء وأنماط سلوكهم، يمكننا تصميم حلولنا لتلبية متطلبات وتفضيلات محددة.</p>',
      'order_num' => 2,
      'lang' => 'ar',
    ]);
    Content::create([
      'title' => 'INNOVATION',
      'content' => '<p class="sub-title">التعلم الآلي للكشف عن الاحتيال</p>
                <p class="description">تعمل خوارزميات التعلم الآلي لدينا على تحليل سلوك العملاء وبيانات المعاملات والأنشطة المشبوهة وتمنع المعاملات الاحتيالية عبر جميع خدماتنا.</p>',
      'order_num' => 3,
      'lang' => 'ar',
    ]);
    Content::create([
      'title' => 'INNOVATION',
      'content' => '<p class="sub-title">الأمن القائم على Blockchain</p>
                <p class="description">اتجاهنا التكنولوجي الجديد هو Blockchain وWeb3، والذي يوفر المزيد من الأمان والشفافية لبيانات ومعاملات عملائنا. نحن نطبق تقنية blockchain لضمان ثبات بياناتنا وإمكانية تتبعها، بالإضافة إلى تعزيز الأمان ضد خروقات البيانات والاختراقات.</p>',
      'order_num' => 4,
      'lang' => 'ar',
    ]);
    Content::create([
      'title' => 'INNOVATION',
      'content' => '<p class="sub-title">اللامركزية القائمة على Web3</p>
                <p class="description">توفر حلولنا المستندة إلى Web3 قدرًا أكبر من اللامركزية وإضفاء الطابع الديمقراطي على الخدمات. باستخدام بروتوكولات Web3، يمكننا تقليل الاعتماد على الوسطاء المركزيين، وخفض رسوم المعاملات، وتحسين إمكانية الوصول والشمولية لعملائنا.</p>',
      'order_num' => 5,
      'lang' => 'ar',
    ]);
    Content::create([
      'title' => 'INNOVATION',
      'content' => '<p class="sub-title">البحث والتطوير</p>
                <p class="description">للبقاء في صدارة المنافسة، نحن نستثمر في البحث والتطوير للتقنيات الجديدة وتطبيقاتها المحتملة. نحن نتعاون مع الشركات الناشئة والأوساط الأكاديمية والمؤسسات البحثية لتسريع الابتكار وتقديم حلول متقدمة لعملائنا.</p>',
      'order_num' => 6,
      'lang' => 'ar',
    ]);
    Content::create([
      'title' => 'INNOVATION',
      'content' => '<p class="sub-title">التدريب القائم على الواقع الافتراضي</p>
                <p class="description mb-5">نحن نقدم تدريبًا قائمًا على الواقع الافتراضي لمتخصصي الرعاية الصحية وفرق دعم العملاء لدينا لتعزيز مهاراتهم وتقديم خدمة أفضل. تحاكي برامجنا التدريبية القائمة على الواقع الافتراضي سيناريوهات العالم الحقيقي، مما يوفر تجربة تعليمية آمنة وغامرة.</p>',
      'order_num' => 7,
      'lang' => 'ar',
    ]);
    Content::create([
      'title' => 'SECURITY',
      'content' => '<p class="title body-section">مع OIS بياناتك آمنة.</p>',
      'order_num' => 1,
      'lang' => 'ar',
    ]);
    Content::create([
      'title' => 'SECURITY',
      'content' => '<p class="sub-title">حماية البيانات والأمن</p>
                <p class="description">تضع OIS أولوية عالية لحماية البيانات وأمنها لعملائنا. لقد قمنا بتنفيذ مجموعة من التدابير لضمان أمان ودقة بيانات العملاء، بما في ذلك بروتوكولات التشفير القوية والنسخ الاحتياطي المنتظم وحلول تخزين البيانات الآمنة.</p>
                <p class="description mt-4">بالإضافة إلى ذلك، قمنا بوضع ضوابط صارمة للوصول إلى البيانات، مما يضمن أن الموظفين المصرح لهم فقط هم من يمكنهم الوصول إلى بيانات العملاء الحساسة. للحفاظ على دقة بيانات العملاء، تستخدم OIS عمليات التحقق الآلي من البيانات وتنقيتها، لضمان دقة البيانات وتحديثها دائمًا.</p>
                <p class="description mt-4 mb-5">تحصل OIS على بيانات العملاء من خلال عمليات آمنة قائمة على الموافقة وتستخدم هذه البيانات للإبلاغ عن تطوير المنتجات والخدمات الجديدة التي تقدم قيمة حقيقية للعملاء.</p>',
      'order_num' => 2,
      'lang' => 'ar',
    ]);
    Content::create([
      'title' => 'DISCLAIMERS',
      'content' => '',
      'order_num' => 1,
      'lang' => 'ar',
    ]);
    Content::create([
      'title' => 'TERMS OF USE',
      'content' => '
        <div class="main-title">
          إخلاء المسؤولية وشروط الاستخدام
        </div>
        <div class="sub-body">
          <div class="sub-title">1. ملاحظات هامة</div>
          <div class="sub-section">
              <p class="para-section">
                  توصي OIS بعدم شراء التذاكر أو إجراء حجوزات لا يمكن إلغاؤها بدون تكلفة قبل إصدار التأشيرة، باستثناء الحالات التي يكون فيها ذلك متطلبًا محددًا منصوص عليه كجزء من طلب التأشيرة.
              </p>
              <p class="para-section">
                  تحتوي هذه الشروط على إخلاء مسؤولية يحد من مسؤوليتنا تجاه سياسة استرداد الأموال الموضحة أدناه. باستثناء ما هو منصوص عليه في سياسة استرداد الأموال الخاصة بنا أدناه، فإن جميع الرسوم غير قابلة للاسترداد، وقد نحتفظ بها عند الدفع بواسطتك، حتى إذا لم تقم بتقديم طلب الحصول على تأشيرة أو المضي قدمًا فيه، وسواء تم منح التأشيرة أم لا.
              </p>
              <p class="para-section">
                  أنت مسؤول عن دقة نموذج الطلب الخاص بك، وعن التحقق من نموذج الطلب الخاص بك. نحن لا نضمن أننا سنعثر على أي أخطاء، ولا نتحقق من المعلومات التي قدمتها.
              </p>
          </div>
          <div class="sub-title">2. مزود الخدمة</div>
          <div class="sub-section">
              <p class="para-section">
                  OIS هو مركز معالجة التأشيرات لطلبات التأشيرة النيجيرية وله مكاتب في:
              </p>
              <ul class="para-list">
                  <p>
                      أبوجا (رقم 5 أونيتشا كريسنت، متفرع من شارع جيمبيا، المنطقة 11، غاركي، أبوجا نيجيريا)
                  </لي>
                  <p>
                      أمستردام (Kingsfordweg 151، 1043GR، أمستردام هولندا)
                  </لي>
                  <p>
                      أنقرة (Danismanlik Ltd. Sti. Kazim Ozalp Mahallesi Koza Caddesi 35/3 كانكايا، أنقرة
                      ديك رومى)
                  </لي>
                  <p>
                      أتلانتا (918 طريق هولكومب بريدج، جناح 204، روزويل، أتلانتا، جورجيا، الولايات المتحدة الأمريكية 30076)
                  </لي>
                  <p>
                      بكين (وحدة 1 جناح 1801، مبنى كون شا، 16 شارع شين يوان لي، منطقة تشاويانغ، بكين جمهورية الصين الشعبية)
                  </لي>
                  <p>
                      بيروت (الجناح-بيروت مقابل مستشفى رفيق الحريري الجامعي، مبنى ميس 6 - الطابق الثالث، ص.ب. 9 اليونسكو، بيروت، لبنان)
                  </لي>
                  <p>
                      قوانغتشو (الوحدة 27/28، الطابق 41، مبنى R&F To-Win، 30 طريق هواشيا، منطقة تيانخه، قوانغتشو جمهورية الصين الشعبية)
                  </لي>
                  <p>
                      هيوستن (9894 شارع بيسونيت، جناح 745 هيوستن، تكساس 77036 الولايات المتحدة الأمريكية)
                  </لي>
                  <p>
                      جوهانسبرج (6 Bolton Road، باركوود روزبانك، 2193، جوهانسبرج، جنوب أفريقيا)
                  </لي>
                  <p>
                      كوالالمبور (36.01 المستوى 36 مينارا سيتي بنك، 165 جالان أمبانج، 50450، كوالالمبور، ماليزيا)
                  </لي>
                  <p>
                      ليستر (سانت جورج هاوس، 6 سانت جورج واي، ليستر LE1 1SH، المملكة المتحدة)
                  </لي>
                  <p>
                      لندن (56-57 شارع فليت، مدينة لندن، لندن EC4Y 1JU، المملكة المتحدة)
                  </لي>
                  <p>
                      لوس أنجلوس (11222 S. La Cienega Blvd Inglewood، Suite 302، CA. 90304 USA)
                  </لي>
                  <p>
                      لندن (56-57 شارع فليت، مدينة لندن، لندن EC4Y 1JU، المملكة المتحدة)
                  </لي>
                  <p>
                      مومباي (Quest Offices Pvt. Ltd.، الطابق الثامن، Parinee Crescenzo، C38 & 39، G Block، مجمع باندرا كورلا، باندرا (شرق) رقم التعريف الشخصي: 400051، ماهاراشترا، الهند)
                  </لي>
                  <p>
                      نيودلهي (C/O المجلس المركزي للري والطاقة قطعة الأرض رقم 4، الطابق الأرضي، المنطقة المؤسسية مقابل: مدرسة سارفودايا مالشا مارج تشاناكيابوري نيودلهي 110021، دلهي، الهند)
                  </لي>
                  <p>
                      نيويورك (370 Lexington Ave، Suite 1505 New York، NY 10017 USA)
                  </لي>
                  <p>
                      باريس (7 شارع دارو 75008 باريس، فرنسا)
                  </لي>
                  <p>
                      بريتوريا (الطابق الثالث، المبنى 2، Brooklyn Bridge Office Park، بريتوريا 570 فيرسن، جنوب أفريقيا)
                  </لي>
                  <p>
                      روما (S.R.L.، عبر سيسيليا، 30 00187 روما، إيطاليا)
                  </لي>
                  <p>
                      شنغهاي (غرفة 2025، 20/F، مبنى كاتيك، 212 طريق جيانغنينغ، منطقة جينغان، شنغهاي، جمهورية الصين الشعبية)
                  </لي>
                  <p>
                      واشنطن العاصمة (11900 Parklawn Drive Suite 160, Rockville MD 20852, Washington DC USA)
                  </لي>
              </ul>
          </div>
          <div class="sub-title">3. تطبيق هذه الشروط</div>
          <div class="sub-section">
              <p class="para-section">
                  تحكم هذه الشروط والأحكام استخدامك لخدمات OIS، وجميع طلبات التأشيرة التي تقدمها، وجميع الاستفسارات التي تجريها للحصول على المشورة أو المعلومات المتعلقة بالتأشيرات النيجيرية. يقبل كل متقدم للحصول على تأشيرة بموجب هذه الوثيقة ويؤكد أنه، قبل تقديم طلب التأشيرة، قد قرأ وفهم ووافق على الالتزام بجميع هذه الشروط والأحكام، دون قيد أو شرط. لا يتمتع أي موظف في OIS بأي سلطة على الإطلاق لتغيير أو تعديل أو تضخيم أو سحب أي أو كل هذه الشروط والأحكام دون موافقة كتابية مسبقة من OIS.
              </p>
          </div>
          <div class="sub-title">4. خدمة طلب التأشيرة</div>
          <div class="sub-section">
              <div class="sub-title pl-0">4.1 النطاق</div>
              <p class="para-section">
                  OIS هي الشريك الخارجي للمفوضية العليا النيجيرية في المملكة المتحدة. وبهذه الصفة، تكون OIS مسؤولة عن جدولة المواعيد، واستلام طلبات التأشيرة للسفر إلى نيجيريا وتقديم الطلبات في المفوضية العليا النيجيرية في لندن، وجمع جوازات السفر المعالجة وإعادة جوازات السفر إلى المتقدمين.
              </p>
              <div class="sub-title pl-0">4.2 قبول الطلبات ورفضها</div>
              <p class="para-section">
                  يتم إجراء تقييم طلبات التأشيرة من قبل المفوضية العليا النيجيرية ويكون منح التأشيرات أو رفضها وفقًا لتقديرها الخاص. تحتفظ المفوضية العليا النيجيرية بالحق في طلب المزيد من الوثائق والمعلومات من مقدم الطلب، ورفض أي طلب للحصول على تأشيرة. يجب على مقدم الطلب تقديم هذه المستندات والمعلومات الإضافية إذا كان يرغب في مواصلة النظر في طلبه.
              </p>
              <div class="sub-title pl-0">4.3 الرسوم</div>
              <p class="para-section">
                  تشمل الرسوم المستحقة عليك الرسوم الإدارية للمفوضية العليا لنيجيريا للحصول على التأشيرة، والتي نرسلها إلى المفوضية العليا ورسومنا، التي تشمل رسوم الخدمة والرسوم الأخرى مثل الرسوم المصرفية والرسوم.
              </p>
              <p class="para-section">
                  الرسوم المذكورة تسري فقط في اليوم الذي تم نقلها فيها أو تقديمها من قبلنا. إذا قررت تقديم طلبك في تاريخ لاحق، فقد تتغير الرسوم.
              </p>
              <p class="para-section">
                  يتم تضمين جميع تكاليف إعادة جوازات السفر والتأشيرات والمستندات إليك في إجمالي الرسوم النهائية بناءً على المعلومات التي قدمتها وطرق التسليم التي حددتها.
              </p>
              <p class="para-section">
                  يجب أن يتم استلام كافة الرسوم بالكامل ضمن خيارات الدفع المتاحة.
              </p>
              <p class="para-section">
                  باستثناء ما هو منصوص عليه في سياسة استرداد الأموال الخاصة بنا أدناه، فإن جميع الرسوم غير قابلة للاسترداد، وجميع الرسوم واجبة الدفع ويجوز لنا الاحتفاظ بها عند الدفع بواسطتك، حتى لو لم تقم بتقديم طلب تأشيرة أو المضي قدمًا فيه، وسواء كنت تحصل على تأشيرة أم لا مضمون.
              </p>
              <div class="sub-title pl-0">4.4 الالتزام العام</div>
              <p class="para-section">
                  ستقوم OIS بمعالجة جميع طلبات التأشيرة باهتمام ومهارة معقولين وبما يتماشى مع جميع الإجراءات والمبادئ التوجيهية التي وضعتها المفوضية العليا النيجيرية. ومع ذلك، في حين أننا نولي اهتمامًا معقولًا للتحقق من نموذج الطلب الخاص بك بحثًا عن الأخطاء الواضحة في وجه النموذج، إلا أننا لا نضمن اكتشاف الأخطاء في النموذج الخاص بك، ولا نتعهد بالتحقق من أي معلومات تقدمها، والتي تكون مسؤولاً عنها ضمان دقيق.
              </p>
              <div class="sub-title pl-0">4.5 مسؤولية مقدم الطلب</div>
              <p class="para-section">
                  تقع على عاتق جميع المتقدمين مسؤولية استكمال جميع نماذج الطلبات بصدق، وتقديم معلومات ووثائق صحيحة ودقيقة، والتأكد من أن لديهم جواز سفر صالح، وعند استلام التأشيرة للتحقق من صلاحية التأشيرة الصادرة للتأكد من أنها تغطي مدة الإقامة المطلوبة وعدد الإدخالات المطلوبة ومدى صلاحيتها لغرض الرحلة.
              </p>
              <div class="sub-title pl-0">4.6 أوقات المعالجة</div>
              <p class="para-section">
                  أوقات معالجة طلبات التأشيرة هي تقديرات فقط. وتستند هذه إلى المعلومات والخبرة من المفوضية العليا في نيجيريا. تخضع معالجة طلبك للإجراءات والجداول الزمنية للمعالجة الخاصة بالمفوضية العليا النيجيرية والتي ليس لـ OIS أي سيطرة عليها.
              </p>
              <div class="sub-title pl-0">4.7 التغييرات في الإجراءات والرسوم</div>
              <p class="para-section">
                  إن إجراءات ورسوم المفوضية العليا النيجيرية لمعالجة التأشيرات والخدمات ذات الصلة خارجة عن سيطرة OIS وتخضع للتغيير دون إشعار مسبق. لا تتحمل OIS المسؤولية عن أي تغييرات في الإجراءات أو الرسوم وتحتفظ بالحق في تمرير أي رسوم إضافية.


              </p>
              <div class="sub-title pl-0">4.8 الإلغاء</div>
              <p class="para-section">
                  إذا بدأت عملية طلب التأشيرة، بما في ذلك عن طريق تقديم طلب عبر الإنترنت، ولكنك لم تكمل عملية طلب التأشيرة، بما في ذلك عندما تفشل في إرسال وثائق طلب التأشيرة إلينا أو الحضور شخصيًا إلى مركز طلب التأشيرة لإكمال التأشيرة عند تقديم طلبك، خلال 12 شهرًا من بدء عملية طلب التأشيرة، سيتم اعتبار طلب التأشيرة الخاص بك منتهيًا وقد نحتفظ برسوم التأشيرة التي دفعتها، بالإضافة إلى جميع رسوم الخدمة والرسوم المصرفية والرسوم الأخرى. ولن نكون ملزمين بإخطارك بذلك.
              </p>
              <p class="para-section">
                  حقك أعلاه هو حق الإلغاء الوحيد الذي لديك. بمجرد تقديم طلبك إلينا، سيتم اعتبارك قد وافقت على أنه يجوز لنا البدء فورًا في معالجة طلبك وتقديم أي خدمات، ونتيجة لذلك لن يكون لك أي حق في الإلغاء بموجب لوائح حماية المستهلك (البيع عن بعد) 2000. وذلك لأنه بموجب اللائحة 13 (1) (أ)، فإنك تفقد حقك في الإلغاء إذا وافقت على أنه يمكننا البدء في تقديم الخدمات خلال فترة الإلغاء.
              </p>
          </div>
          <div class="sub-title">5. سياسة رد الأموال</div>
          <div class="sub-section">
              <div class="sub-title pl-0">5.1 استرداد رسوم طلب التأشيرة</div>
              <p class="para-section">
                  إذا قامت OIS بخرق العقد أو الإهمال فيما يتعلق بأي طلب تأشيرة مقدم، مما أدى إلى عدم منح التأشيرة أو فقدان جواز سفر مقدم الطلب مع تأشيرات صالحة، في كل حالة، حيث يتعين على مقدم الطلب التقدم بطلب للحصول على جواز سفر جديد أو لا يستطيع السفر إلى نيجيريا في الأوقات التي ذكرها مقدم الطلب في طلب التأشيرة الخاص به، ستقوم شركة OIS برد رسوم التأشيرة إلى مقدم الطلب، ولكن ليس أي رسوم خدمة أو رسوم مصرفية أو رسوم أخرى.
              </p>
              <div class="sub-title pl-0">5.2 فقدان أو تلف جوازات السفر ووثائق السفر الأخرى</div>
              <p class="para-section">
                  تتخذ OIS كل الاحتياطات المعقولة أثناء التعامل مع جواز سفر ووثائق مقدم الطلب، وإذا كان جواز السفر أو المستندات المقدمة لمقدم الطلب مفقودة أو تالفة بسبب أي خرق للعقد أو إهمال من جانب OIS، بما يتجاوز حالة صالحة للاستخدام، فستدفع OIS إلى مقدم الطلب مبلغ الرسوم التي تفرضها حكومة بلد مقدم الطلب، لاستبدال جواز السفر المفقود أو التالف أو غيرها من الوثائق من خلال إجراءات الاستبدال العادية، وسوف تساعد OIS مقدم الطلب في نفس الشيء في حدود قدرتها. سيتم سداد هذه المدفوعات من قبل OIS لمقدم الطلب عند تقديم إيصال الدفع الصادر عن حكومة وطنهم الأصلي لاستبدال جواز السفر أو المستندات المفقودة أو التالفة.
              </p>
          </div>
          <div class="sub-title">6. إخلاء المسؤولية</div>

          <div class="sub-section">
              <p class="para-section">
                  باستثناء استرداد الرسوم أو سدادها كما هو مذكور في القسم أعلاه، تستبعد شركة OIS مسؤوليتها فيما يتعلق بأي طلبات للحصول على التأشيرة، بما في ذلك المسؤولية بموجب العقد أو الإهمال أو الضرر أو القانون أو غير ذلك على أي حال، بما في ذلك المسؤولية عن أي تأخير أو فشل OIS في التعامل مع طلبات التأشيرة أو معالجتها، وفقدان أو تأخير جوازات السفر والوثائق الأخرى، والتأخير الذي يتعلق بالمفوضية العليا النيجيرية ورفض طلبات التأشيرة لأي سبب من الأسباب.
              </p>
              <div class="sub-title pl-0">ولتجنب الشك</div>
              <div class="sub-title pl-0">6.1 عدم المسؤولية عن المعلومات غير الصحيحة</div>
              <p class="para-section">
                  لن تتحمل OIS أي مسؤولية عن الخسارة أو التأخير أو عدم إصدار أي طلب ينشأ عن أو فيما يتعلق (بما في ذلك على سبيل المثال لا الحصر) نماذج الطلبات غير المكتملة، ونماذج الطلبات المكتملة بشكل غير صحيح أو خاطئ، والوثائق الداعمة غير الدقيقة أو غير الكاملة.
              </p>
              <div class="sub-title pl-0">6.2 عدم المسؤولية عن الأحداث التي لا تقع تحت سيطرتنا</div>
              <p class="para-section">
                  لا تعتبر شركة OIS منتهكة للعقد أو مهملة أو مسؤولة بأي شكل من الأشكال عن أي تأخير أو فشل في أي طلب أو فقدان أو تلف أو تأخير في أي جواز سفر أو مستندات أخرى بسبب حادث أو سرقة أو كوارث طبيعية (فعل من أعمال العنف). الله) أو أي سبب آخر خارج عن سيطرة OIS، ولا ينشأ عن التقصير المتعمد في OIS، أو عن فقدان أو تلف أي جواز سفر أو مستند آخر بعد تسليمه إلى مقدم الطلب.
              </p>
              <div class="sub-title pl-0">6.3 عدم المسؤولية عن خدمة البريد والبريد السريع</div>
              <p class="para-section">
                  لن تتحمل شركة OIS أي مسؤولية عن أي تأخير، أو عن فقدان أو تلف أي طلب تأشيرة أو جواز سفر أو وثائق أخرى، بسبب أو يحدث أثناء وجود أي طلب أو جواز سفر أو وثيقة في حوزة أي خدمة بريدية أو بريد سريع تابعة لجهة خارجية ، بما في ذلك نقل طلبات التأشيرة أو جواز السفر أو المستندات الأخرى بين OIS والمفوضية العليا النيجيرية وعند إعادتها بواسطة OIS إلى مقدم الطلب.
              </p>
              <div class="sub-title pl-0">6.4 عدم المسؤولية عن تقييم طلبات التأشيرة</div>
              <p class="para-section">
                  لا تشارك OIS في عملية تقييم طلبات التأشيرة، أو منحها أو رفضها، ولن تكون مسؤولة أو مسؤولة عن أي تأخير من قبل المفوضية العليا النيجيرية في تقييم أو منح أو رفض أي طلب تأشيرة.
              </p>
              <div class="sub-title pl-0">6.5 عدم المسؤولية عن التكاليف والنفقات المهدرة</div>
              <p class="para-section">
                  لن تتحمل OIS أي مسؤولية تجاه أي طالب تأشيرة، أو أي شخص آخر يعتمد على أي طلب تأشيرة أو يستفيد منه، عن أي التزام أو تكلفة أو نفقات يتم تكبدها في الاعتماد على أو توقع الحصول على تأشيرة نيجيرية، سواء ضمن جدول زمني معين أو على الإطلاق ، بما في ذلك على سبيل المثال لا الحصر، السفر الجوي والفنادق وترتيبات السفر والإقامة الأخرى وأي ترتيبات أخرى يتم إجراؤها.
              </p>
              <p class="para-section">
                  توصي OIS بعدم شراء التذاكر أو إجراء حجوزات لا يمكن إلغاؤها قبل إصدار التأشيرة، باستثناء الحالات التي يكون فيها ذلك مطلبًا محددًا مذكورًا كجزء من طلب التأشيرة، وفي هذه الحالة يجب الحصول على التذاكر المفتوحة.
              </p>
              <div class="sub-title pl-0">6.6 الاستبعاد العام للخسائر والأضرار</div>
              <p class="para-section">
                  لن تتحمل شركة OIS أي مسؤولية (بما في ذلك العقد أو الإهمال) تجاه أي طالب تأشيرة، أو أي شخص آخر يعتمد على أي طلب تأشيرة أو يستفيد منه، عن أي أضرار مباشرة أو غير مباشرة أو عقابية أو عرضية أو خاصة أو تبعية أو أي أضرار من أي نوع، بما في ذلك حالات التأخير أو سوء الوضع أو فقدان أو تلف طلبات التأشيرة وجوازات السفر والمستندات الأخرى، بخلاف ما هو مذكور في القسم 5 أعلاه.
              </p>
              <p class="para-section">
                  لن تتحمل شركة OIS أي مسؤولية (بما في ذلك العقد أو الإهمال) تجاه أي طالب تأشيرة أو أي شخص آخر يعتمد على أي طلب تأشيرة أو يستفيد منه فيما يتعلق بأي خسارة في الأرباح أو الإيرادات أو العقود أو الأعمال أو المهنة أو أي مهنة أخرى، بما في ذلك عندما يكون السبب هو التأخير أو سوء الوضع أو فقدان أو تلف طلبات التأشيرة وجوازات السفر وغيرها من المستندات.
              </p>
          </div>
          <div class="sub-title">7. عام</div>
          <div class="sub-section">
              <div class="sub-title pl-0">7.1 حقوق الطرف الثالث</div>
              <p class="para-section">
                  لا يوجد في هذه الشروط والأحكام ما يفيد أو يكون قابلاً للتنفيذ من قبل أي شخص آخر غير طالب التأشيرة، ولا ينطبق قانون العقود (حقوق الأطراف الثالثة) لعام 1999.
              </p>
              <div class="sub-title pl-0">7.2 التغييرات على هذه المصطلحات</div>
              <p class="para-section">
                  يجوز لـ OIS، وفقًا لتقديرها الخاص، تغيير أو تعديل أو إلغاء أو سحب أي من هذه الشروط والأحكام أو جميعها في أي وقت دون أي إشعار مسبق.
              </p>
              <div class="sub-title pl-0">7.3 القانون المعمول به</div>
              <p class="para-section">
                  تخضع هذه الشروط والأحكام وأي طلبات للحصول على التأشيرة وتفسر وفقًا لقوانين الدول التي نتواجد فيها. أي مطالبات أو نزاعات تنشأ فيما يتعلق بالخدمات التي تقدمها OIS لمقدم الطلب تخضع للاختصاص القضائي الحصري للمحاكم في الدولة.
              </p>
          </div>
          <div class="sub-title">8.الشكاوى</div>
          <div class="sub-section">
              <p class="para-section">
                  يرجى معالجة أي شكاوى إلى قسم علاقات العملاء عبر البريد الإلكتروني على
              </p>
              <p class="para-section">
                  info@oisservices.com
              </p>
          </div>
        </div>',
      'order_num' => 1,
      'lang' => 'ar',
    ]);
    Content::create([
      'title' => 'PRIVACY POLICY',
      'content' => '
        <div class="main-title">سياسة الخصوصية</div>
        <div class="sub-body">
          <div class="sub-title">1. مقدمة</div>
          <div class="sub-section">
            <p class="para-section">
              في OIS، نحن ملتزمون بحماية خصوصية وسرية البيانات الشخصية لعملائنا. توضح سياسة الخصوصية هذه كيفية استخدامنا للبيانات الشخصية التي نحصل عليها من الأفراد الذين يستخدمون خدماتنا والكشف عنها وحمايتها. نحن نلتزم بقوانين حماية البيانات المعمول بها، بما في ذلك اللائحة العامة لحماية البيانات (GDPR)، ونسعى جاهدين لضمان أعلى معايير الخصوصية وأمن البيانات.
            </p>
          </div>
          <div class="sub-title">2. جمع البيانات واستخدامها</div>
          <div class="sub-section">
            <div class="sub-title pl-0">2.1 جمع البيانات الشخصية</div>
            <p class="para-section">
              نقوم بجمع البيانات الشخصية من الأفراد بطرق مختلفة، بما في ذلك عند قيامهم بإنشاء حساب، أو إجراء دفعة، أو الاتصال بنا، أو إكمال الاستبيانات، أو التفاعل مع مواقعنا الإلكترونية أو تطبيقاتنا، أو الاستفادة من خدماتنا. تشمل أنواع البيانات الشخصية التي قد نجمعها، على سبيل المثال لا الحصر، ما يلي:
            </p>
            <ul class="para-list">
              <li>الاسم والعنوان ومعلومات الاتصال</li>
              <li>تفاصيل جواز السفر والتأشيرة</li>
              <li>البيانات البيومترية</li>
              <li>أرقام التحقق البنكي</li>
              <li>تفاصيل معاملة الدفع</li>
              <li>المعلومات الصحية (لخدمات الصحة الإلكترونية)</li>
              <li>التفاعلات مع خدماتنا ومواقعنا الإلكترونية</li>
              <li>هيوستن (9894 شارع بيسونيت، جناح 745 هيوستن، تكساس 77036 الولايات المتحدة الأمريكية)</li>
              <li>تفاصيل التوظيف أو التفاصيل المهنية (لأغراض التوظيف)</li>
            </ul>
            <div class="sub-title pl-0">2.2 الغرض من معالجة البيانات</div>
            <p class="para-section">
              نقوم بمعالجة البيانات الشخصية للأغراض التالية:
            </p>
            <ul class="para-list">
              <p>
                للتواصل مع الأفراد وتلبية طلبات الخدمة أو طلبات الشراء الخاصة بهم.
              </لي>
              <li>لتقديم دعم العملاء والرد على الاستفسارات.</li>
              <p>
                لتحسين وتخصيص تجربة الأفراد مع خدماتنا.
              </لي>
              <li>لمعالجة المدفوعات والتحقق من المعاملات المالية.</li>
              <p>
                للامتثال للالتزامات القانونية، بما في ذلك التزامات الإبلاغ إلى السلطات المختصة.
              </لي>
              <p>
                لإدارة أنظمتنا وعملياتنا، بما في ذلك تحليل البيانات والتدقيق واستكشاف الأخطاء وإصلاحها.
              </لي>
              <p>
                إجراء التحقيقات وممارسة الحقوق القانونية، بما في ذلك منع الاحتيال واكتشافه.
              </لي>
              <li>لتطوير منتجاتنا وخدماتنا وتحسينها.</li>
            </ul>
            <div class="sub-title pl-0">2.3 الأساس القانوني للمعالجة</div>
            <p class="para-section">
              نقوم بمعالجة البيانات الشخصية بناءً على واحد أو أكثر من الأسس القانونية التالية:
            </p>
            <ul class="para-list">
              <p>
                ضرورة المعالجة لتنفيذ العقد أو اتخاذ خطوات ما قبل التعاقد بناء على طلب الفرد.
              </لي>
              <li>الامتثال للالتزامات القانونية التي نخضع لها.</li>
              <p>
                الموافقة المقدمة من الأفراد لأنشطة معالجة محددة.
              </لي>
              <p>
                المصالح المشروعة التي تسعى إليها شركة OIS أو طرف ثالث، بشرط ألا يتم تجاوز هذه المصالح من خلال حقوق الفرد ومصالحه.
              </لي>
            </ul>
          </div>
          <div class="sub-title">3. مشاركة البيانات والإفصاح عنها</div>
          <div class="sub-section">
            <div class="sub-title pl-0">3.1 مقدمو خدمات الطرف الثالث</div>
            <p class="para-section">
              يجوز لنا مشاركة البيانات الشخصية مع مقدمي خدمات خارجيين موثوقين يساعدوننا في تقديم خدماتنا والوفاء بالتزاماتنا. يلتزم مقدمو الخدمات هؤلاء تعاقديًا بمعالجة البيانات الشخصية فقط بالنيابة عنا ووفقًا لتعليماتنا.
            </p>
            <div class="sub-title pl-0">3.2 تحويلات الأعمال</div>
            <p class="para-section">
              في حالة الاندماج أو الاستحواذ أو البيع لكل أو جزء من أصولنا، قد يتم نقل البيانات الشخصية إلى الطرف الثالث ذي الصلة كجزء من المعاملة. سنتخذ خطوات معقولة لضمان أمن وسرية البيانات الشخصية أثناء عمليات النقل هذه.
            </p>
            <div class="sub-title pl-0">3.3 المتطلبات القانونية والامتثال</div>
            <p class="para-section">
              يجوز لنا الكشف عن البيانات الشخصية إذا كان ذلك مطلوبًا بموجب القانون أو أمر المحكمة أو السلطة الحكومية. يجوز لنا أيضًا مشاركة البيانات الشخصية لحماية حقوقنا أو خصوصيتنا أو سلامتنا أو ممتلكاتنا أو حقوق الآخرين.
            </p>
          </div>
          <div class="sub-title">4. الاحتفاظ بالبيانات</div>
          <div class="sub-section">
            <p class="para-section">
              نحن نحتفظ بالبيانات الشخصية لأدنى فترة ضرورية لتحقيق الأغراض الموضحة في سياسة الخصوصية هذه ما لم تكن هناك فترة احتفاظ أطول مطلوبة أو مسموح بها بموجب القانون. تشمل المعايير المستخدمة لتحديد فترة الاحتفاظ المناسبة طبيعة البيانات الشخصية، والأغراض التي تم جمعها من أجلها، والمتطلبات القانونية والتنظيمية.
            </p>
          </div>
          <div class="sub-title">5. أمن البيانات</div>
          <div class="sub-section">
            <p class="para-section">
              نحن ننفذ التدابير الفنية والتنظيمية المناسبة لحماية البيانات الشخصية من الوصول غير المصرح به أو التغيير أو الكشف أو التدمير. وتشمل هذه التدابير، على سبيل المثال لا الحصر، التشفير وضوابط الوصول والتقييمات الأمنية المنتظمة وتدريب الموظفين على حماية البيانات.
            </p>
          </div>
          <div class="sub-title">6. الحقوق الفردية</div>
          <div class="sub-section">
            <p class="para-section">
              يتمتع الأفراد بحقوق معينة فيما يتعلق ببياناتهم الشخصية. مع مراعاة القانون المعمول به، يحق للأفراد:
            </p>
            <ul class="para-list">
              <li>الوصول إلى بياناتهم الشخصية وطلب نسخة منها.</li>
              <li>تصحيح البيانات الشخصية غير الدقيقة أو غير الكاملة.</li>
              <li>محو البيانات الشخصية في ظل ظروف معينة.</li>
              <li>تقييد معالجة البيانات الشخصية أو الاعتراض عليها.</li>
              <p>
                إمكانية نقل البيانات (تلقي البيانات الشخصية بتنسيق منظم وشائع الاستخدام وقابل للقراءة آليًا).
              </لي>
              <li>سحب الموافقة (إذا كانت المعالجة مبنية على الموافقة).</li>
            </ul>
            <p class="para-section">
              لممارسة هذه الحقوق أو تقديم شكوى تتعلق بالخصوصية، يمكن للأفراد الاتصال بنا باستخدام المعلومات المقدمة في القسم 8.
            </p>
          </div>
          <div class="sub-title">7. الاتصالات التسويقية وسياسة ملفات تعريف الارتباط</div>
          <div class="sub-section">
            <p class="para-section">
              قد نرسل اتصالات تسويقية إلى الأفراد الذين قدموا موافقتهم. يمكن للأفراد اختيار عدم تلقي مثل هذه الاتصالات في أي وقت عن طريق اتباع الإرشادات الواردة في الرسالة أو عن طريق الاتصال بنا.
            </p>
            <p class="para-section">
              تحدد سياسة ملفات تعريف الارتباط الخاصة بنا استخدام ملفات تعريف الارتباط والتقنيات المشابهة على مواقعنا الإلكترونية وتوفر معلومات حول إدارة تفضيلات ملفات تعريف الارتباط.
            </p>
          </div>
          <div class="sub-title">8. عمليات نقل البيانات الدولية</div>
          <div class="sub-section">
            <p class="para-section">
              باعتبارنا منظمة عالمية، يجوز لنا نقل البيانات الشخصية إلى دول خارج المنطقة الاقتصادية الأوروبية (EEA) أو مناطق أخرى ذات قوانين مختلفة لحماية البيانات. في مثل هذه الحالات، سوف نتأكد من وجود الضمانات المناسبة لحماية البيانات الشخصية، مثل استخدام البنود التعاقدية القياسية المعتمدة من قبل المفوضية الأوروبية أو الاعتماد على شهادة Privacy Shield الخاصة بالمستلمين (حيثما ينطبق ذلك).
            </p>
          </div>
          <div class="sub-title">9. خصوصية الأطفال</div>
          <div class="sub-section">
            <p class="para-section">
              خدماتنا ليست موجهة للأفراد الذين تقل أعمارهم عن 16 عامًا. نحن لا نجمع أو نطلب بيانات شخصية من الأطفال عن قصد. إذا علمنا أننا قمنا بجمع بيانات شخصية من طفل دون موافقة الوالدين التي يمكن التحقق منها، فسنتخذ خطوات لحذف تلك المعلومات.
            </p>
          </div>
          <div class="sub-title">10. تحديثات على سياسة الخصوصية</div>
          <div class="sub-section">
            <p class="para-section">
              يجوز لنا تحديث سياسة الخصوصية هذه من وقت لآخر لتعكس التغييرات في ممارسات معالجة البيانات لدينا أو التزاماتنا القانونية. نحن نشجع الأفراد على مراجعة سياسة الخصوصية هذه بشكل دوري لمعرفة أي تحديثات. ستصبح سياسة الخصوصية المعدلة سارية اعتبارًا من تاريخ نشرها على موقعنا.
            </p>
          </div>
          <div class="sub-title">11. معلومات الاتصال</div>
          <div class="sub-section">
            <p class="para-section">
              إذا كانت لديك أي مخاوف أو أسئلة أو طلبات أو شكاوى تتعلق بالخصوصية، يرجى الاتصال بمسؤول حماية البيانات لدينا على:
            </p>
            <p class="para-section">dataprotection@oisservices.com</p>
            <p class="para-section">
              نحن نأخذ مسائل الخصوصية على محمل الجد وسنرد بسرعة لمعالجة أي مخاوف أو استفسارات. يرجى ملاحظة أن سياسة الخصوصية هذه مقدمة باللغة الإنجليزية لسهولة الفهم. في حالة وجود أي تعارض بين النسخة الإنجليزية والنسخة المترجمة، فإن النسخة الإنجليزية هي التي تسود.
            </p>
          </div>
        </div>',
      'order_num' => 1,
      'lang' => 'ar',
    ]);
    Content::create([
      'title' => 'DATA PROJECT',
      'content' => '
        <div class="main-title">
          اللائحة العامة لحماية البيانات وسياسة حماية البيانات ذات الصلة
        </div>
        <div class="sub-body">
          <div class="sub-title">1. Introduction</div>
          <div class="sub-section">
            <p class="para-section">
              في عملياتها التجارية اليومية، تستخدم شركة Online Integrated Solutions (OIS) مجموعة متنوعة من البيانات حول الأفراد الذين يمكن تحديدهم، بما في ذلك البيانات حول:
            </p>
            <ul class="para-list">
              <li>
                الموظفون الحاليون والسابقون والمحتملون
              </li>
              <li>
                عملاء
              </li>
              <li>
                مستخدمي مواقعها الإلكترونية
              </li>
              <li>
                مشتركين
              </li>
              <li>
                أصحاب المصلحة الآخرين
              </li>
            </ul>
            <p class="para-section">
              عند جمع واستخدام هذه البيانات، تخضع المنظمة لمجموعة متنوعة من التشريعات التي تتحكم في كيفية تنفيذ هذه الأنشطة والضمانات التي يجب وضعها لحمايتها.
            </p>
            <p class="para-section">
              الغرض من هذه السياسة هو وضع التشريعات ذات الصلة ووصف الخطوات التي تتخذها OIS لضمان امتثالها لها.
            </p>
            <p class="para-section">
              تنطبق هذه السيطرة على جميع الأنظمة والأشخاص والعمليات التي تشكل أنظمة معلومات المنظمة، بما في ذلك أعضاء مجلس الإدارة والمديرين والموظفين والموردين والأطراف الثالثة الأخرى التي يمكنها الوصول إلى أنظمة OIS.
            </p>
            <p class="para-section">
              السياسات والإجراءات التالية ذات صلة بهذه الوثيقة:
            </p>
            <ul class="para-list">
              <li>
                عملية تقييم تأثير حماية البيانات
              </li>
              <li>
                إجراءات تحليل البيانات الشخصية
              </li>
              <li>
                إجراءات تقييم الفائدة المشروعة
              </li>
              <li>
                إجراءات الاستجابة لحوادث أمن المعلومات
              </li>
              <li>
                أدوار ومسؤوليات اللائحة العامة لحماية البيانات
              </li>
              <li>
                أصحاب المصلحة الآخرين
              </li>
            </ul>
          </div>
          <div class="sub-title">2. استخدام التشفير</div>
          <div class="sub-section">
            <p class="para-section">
              حيثما كان ذلك مناسبًا لتصنيف المعلومات ووسيلة التخزين، تم استخدام تقنيات التشفير لضمان سرية وسلامة السجلات.
            </p>
            <p class="para-section">
              لقد تم بذل العناية المطلقة لضمان تخزين مفاتيح التشفير المستخدمة لتشفير السجلات بشكل آمن طوال عمر السجلات ذات الصلة والامتثال لسياسة المنظمة بشأن التشفير.
            </p>
            <div class="sub-title pl-0">2.1 اللائحة العامة لحماية البيانات في الاتحاد الأوروبي - الناتج المحلي الإجمالي</div>
            <p class="para-section">
              تعد اللائحة العامة لحماية البيانات لعام 2016 (GDPR) واحدة من أهم التشريعات التي تؤثر على الطريقة التي تنفذ بها OIS أنشطة معالجة المعلومات الخاصة بها. يتم تطبيق غرامات كبيرة إذا تم اعتبار حدوث انتهاك بموجب اللائحة العامة لحماية البيانات (GDPR)، والتي تم تصميمها لحماية البيانات الشخصية لمواطني الاتحاد الأوروبي. إن سياسة OIS هي التأكد من أن امتثالنا للائحة العامة لحماية البيانات والتشريعات الأخرى ذات الصلة واضح وقابل للإثبات في جميع الأوقات.
            </p>
            <div class="sub-title pl-0">2.2 التعريفات</div>
            <p class="para-section">
              يوجد إجمالي 26 تعريفًا مدرجًا في اللائحة العامة لحماية البيانات وليس من المناسب إعادة إنتاجها جميعًا هنا. ومع ذلك، فإن التعريفات الأساسية فيما يتعلق بهذه السياسة هي كما يلي:
            </p>
            <p class="para-section">
              يتم تعريف البيانات الشخصية على النحو التالي:
            </p>
            <p class="para-section">
              أي معلومات تتعلق بشخص طبيعي محدد أو يمكن تحديد هويته (\'موضوع البيانات\'); الشخص الطبيعي الذي يمكن تحديد هويته هو الشخص الذي يمكن التعرف عليه، بشكل مباشر أو غير مباشر، ولا سيما بالرجوع إلى معرف مثل الاسم أو رقم التعريف أو بيانات الموقع أو معرف عبر الإنترنت أو إلى واحد أو أكثر من العوامل المحددة للعوامل الجسدية أو الفسيولوجية أو الهوية الجينية أو العقلية أو الاقتصادية أو الثقافية أو الاجتماعية لذلك الشخص الطبيعي؛
            </p>
            <p class="para-section">
              تعني \'المعالجة\'
            </p>
            <p class="para-section">
              أي عملية أو مجموعة من العمليات يتم إجراؤها على البيانات الشخصية أو على مجموعات من البيانات الشخصية، سواء بوسائل آلية أم لا، مثل التجميع أو التسجيل أو التنظيم أو الهيكلة أو التخزين أو التكيف أو التغيير أو الاسترجاع أو التشاور أو الاستخدام أو الكشف عن طريق النقل أو النشر أو الإتاحة بطريقة أخرى أو المواءمة أو الجمع أو التقييد أو المحو أو التدمير؛
            </p>
            <p class="para-section">
              \'وحدة التحكم\' تعني
            </p>
            <p class="para-section">
              الشخص الطبيعي أو الاعتباري أو السلطة العامة أو الوكالة أو أي هيئة أخرى تحدد، بمفردها أو بالاشتراك مع آخرين، أغراض ووسائل معالجة البيانات الشخصية؛ عندما يتم تحديد أغراض ووسائل هذه المعالجة بموجب قانون الاتحاد أو الدول الأعضاء، يجوز توفير المراقب المالي أو المعايير المحددة لترشيحه بموجب قانون الاتحاد أو الدول الأعضاء؛
            </p>
            <div class="sub-title pl-0">2.3 المبادئ المتعلقة بمعالجة البيانات الشخصية</div>
            <p class="para-section">
              هناك عدد من المبادئ الأساسية التي يرتكز عليها القانون العام لحماية البيانات.<br>
              وهذه هي كما يلي:
            </p>
            <p class="para-section">
              1. البيانات الشخصية يجب أن تكون:
            </p>
            <p class="para-section">
              (أ) معالجتها بطريقة قانونية وعادلة وشفافة فيما يتعلق بصاحب البيانات (\'القانونية والإنصاف والشفافية\')؛
            </p>
            <p class="para-section">
              (ب) تم جمعها لأغراض محددة وصريحة ومشروعة ولم يتم معالجتها بطريقة لا تتوافق مع تلك الأغراض؛ لا تعتبر المعالجة الإضافية لأغراض الأرشفة من أجل المصلحة العامة أو أغراض البحث العلمي أو التاريخي أو الأغراض الإحصائية، وفقًا للمادة 89 (1)، غير متوافقة مع الأغراض الأولية (\'تحديد الغرض\')؛
            </p>
            <p class="para-section">
              (ج) كافية وذات صلة ومحدودة بما هو ضروري فيما يتعلق بالأغراض التي تتم معالجتها من أجلها (\'تقليل البيانات\')؛
            </p>
            <p class="para-section">
              (د) دقيقة وحديثة عند الضرورة؛ يجب اتخاذ كل خطوة معقولة لضمان مسح أو تصحيح البيانات الشخصية غير الدقيقة، مع مراعاة الأغراض التي تتم معالجتها من أجلها، دون تأخير (\'الدقة\')؛
            </p>
            <p class="para-section">
              (هـ) يتم الاحتفاظ بها في نموذج يسمح بتحديد أصحاب البيانات لمدة لا تزيد عن ما هو ضروري للأغراض التي تتم معالجة البيانات الشخصية من أجلها؛ يجوز تخزين البيانات الشخصية لفترات أطول بقدر ما ستتم معالجة البيانات الشخصية فقط لأغراض الأرشفة للمصلحة العامة أو أغراض البحث العلمي أو التاريخي أو الأغراض الإحصائية وفقًا للمادة 89 (1) بشرط تنفيذ الإجراءات الفنية والتنظيمية المناسبة التدابير التي تتطلبها هذه اللائحة من أجل حماية حقوق وحريات صاحب البيانات (\'قيود التخزين\')؛
            </p>
            <p class="para-section">
              (و) معالجتها بطريقة تضمن الأمان المناسب للبيانات الشخصية، بما في ذلك الحماية من المعالجة غير المصرح بها أو غير القانونية وضد الفقدان العرضي أو التدمير أو الضرر، باستخدام التدابير الفنية أو التنظيمية المناسبة (\'النزاهة والسرية\').
            </p>
            <p class="para-section">
              (و) معالجتها بطريقة تضمن الأمان المناسب للبيانات الشخصية، بما في ذلك الحماية من المعالجة غير المصرح بها أو غير القانونية وضد الفقدان العرضي أو التدمير أو الضرر، باستخدام التدابير الفنية أو التنظيمية المناسبة (\'النزاهة والسرية\').
            </p>
            <p class="para-section">
              ستضمن OIS امتثالها لجميع هذه المبادئ سواء في المعالجة التي تقوم بها حاليًا أو كجزء من إدخال أساليب جديدة للمعالجة مثل أنظمة تكنولوجيا المعلومات الجديدة.
            </p>
            <div class="sub-title pl-0">2.4 حقوق الفرد</div>
            <p class="para-section">
              يتمتع صاحب البيانات أيضًا بحقوق بموجب اللائحة العامة لحماية البيانات. هذه تتكون من:
            </p>
            <p class="para-section">
              الحق في الحصول على المعلومات<br>الحق في الوصول<br>الحق في التصحيح<br>الحق في المحو<br>الحق في تقييد المعالجة<br>الحق في إمكانية نقل البيانات<br>الحق في الاعتراض< br>الحقوق المتعلقة باتخاذ القرار الآلي والتوصيف</p>
            <p class="para-section">
              يتم دعم كل حق من هذه الحقوق من خلال الإجراءات المناسبة داخل OIS والتي تسمح باتخاذ الإجراء المطلوب ضمن الجداول الزمنية المنصوص عليها في اللائحة العامة لحماية البيانات.
            </p>
            <p class="para-section">
              وتظهر هذه الجداول الزمنية في الجدول 1.
            </p>
            <table>
              <thead>
                <tr>
                  <th>طلب موضوع البيانات</th>
                  <th>الجدول الزمني</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>الحق في الحصول على المعلومات</td>
                  <td>عند جمع البيانات (إذا تم توفيرها بواسطة صاحب البيانات) أو خلال شهر واحد (إذا لم يتم توفيرها بواسطة صاحب البيانات)</td>
                </tr>
                <tr>
                  <td>حق الوصول</td>
                  <td>شهر واحد</td>
                </tr>
                <tr>
                  <td>الحق في التصحيح</td>
                  <td>شهر واحد</td>
                </tr>
                <tr>
                  <td>الحق في المحو</td>
                  <td>بدون تأخير لا مبرر له</td>
                </tr>
                <tr>
                  <td>الحق في تقييد المعالجة</td>
                  <td>بدون تأخير لا مبرر له</td>
                </tr>
                <tr>
                  <td>الحق في إمكانية نقل البيانات</td>
                  <td>شهر واحد</td>
                </tr>
                <tr>
                  <td>الحق في الاعتراض</td>
                  <td>عند استلام الاعتراض</td>
                </tr>
              </tbody>
            </table>
            <p class="para-section">
              الجدول 1 - الجداول الزمنية لطلبات موضوع البيانات
            </p>
            <div class="sub-title pl-0">2.5 مشروعية المعالجة</div>
            <p class="para-section">
              هناك ست طرق بديلة يمكن من خلالها تحديد مشروعية حالة معينة لمعالجة البيانات الشخصية بموجب اللائحة العامة لحماية البيانات. تتمثل سياسة OIS في تحديد الأساس المناسب للمعالجة وتوثيقه، وفقًا للائحة. يتم وصف الخيارات باختصار في الأقسام التالية.
            </p>
            <div class="sub-title pl-0">2.5.1 الموافقة</div>
            <p class="para-section">
              ما لم يكن ذلك ضروريًا لسبب مسموح به في اللائحة العامة لحماية البيانات، ستحصل OIS دائمًا على موافقة صريحة من صاحب البيانات لجمع بياناته ومعالجتها. في حالة الأطفال الذين تقل أعمارهم عن 16 عامًا (قد يكون السن الأقل مسموحًا به في بعض الدول الأعضاء في الاتحاد الأوروبي) سيتم الحصول على موافقة الوالدين. سيتم توفير معلومات شفافة حول استخدامنا لبياناتهم الشخصية لأصحاب البيانات في وقت الحصول على الموافقة وشرح حقوقهم فيما يتعلق ببياناتهم، مثل الحق في سحب الموافقة. سيتم توفير هذه المعلومات في شكل يسهل الوصول إليه، ومكتوبة بلغة واضحة ومجانية. إذا لم يتم الحصول على البيانات الشخصية مباشرة من صاحب البيانات، فسيتم تقديم هذه المعلومات إلى صاحب البيانات خلال فترة معقولة بعد الحصول على البيانات وبالتأكيد خلال شهر واحد.
            </p>
            <div class="sub-title pl-0">2.5.2 أداء العقد</div>
            <p class="para-section">
              عندما تكون البيانات الشخصية التي تم جمعها ومعالجتها مطلوبة للوفاء بعقد مع صاحب البيانات، لا يلزم الحصول على موافقة صريحة. سيكون هذا هو الحال غالبًا عندما لا يمكن إكمال العقد بدون البيانات الشخصية المعنية، على سبيل المثال. لا يمكن أن يتم التسليم دون عنوان للتوصيل إليه.
            </p>
            <div class="sub-title pl-0">2.5.3 الالتزام القانوني</div>
            <p class="para-section">
              إذا كان من الضروري جمع البيانات الشخصية ومعالجتها من أجل الامتثال للقانون، فلن تكون هناك حاجة إلى موافقة صريحة. وقد يكون هذا هو الحال بالنسبة لبعض البيانات المتعلقة بالتوظيف والضرائب على سبيل المثال، وبالنسبة للعديد من المجالات التي يتناولها القطاع العام.
            </p>
            <div class="sub-title pl-0">2.5.4 الاهتمامات الحيوية لصاحب البيانات</div>
            <p class="para-section">
              في الحالة التي تكون فيها البيانات الشخصية مطلوبة لحماية المصالح الحيوية لصاحب البيانات أو لشخص طبيعي آخر، فيمكن استخدام ذلك كأساس قانوني للمعالجة. سوف تحتفظ OIS بأدلة معقولة وموثقة تثبت أن هذا هو الحال، عندما يتم استخدام هذا السبب كأساس قانوني لمعالجة البيانات الشخصية. على سبيل المثال، يمكن استخدام هذا في جوانب الرعاية الاجتماعية، وخاصة في القطاع العام.
            </p>
            <div class="sub-title pl-0">2.5.5 المهمة التي يتم تنفيذها للمصلحة العامة</div>
            <p class="para-section">
              عندما تحتاج OIS إلى أداء مهمة تعتقد أنها تصب في المصلحة العامة أو كجزء من واجب رسمي، فلن يتم طلب موافقة صاحب البيانات. سيتم توثيق تقييم المصلحة العامة أو الواجب الرسمي وإتاحته كدليل عند الاقتضاء.
            </p>
            <div class="sub-title pl-0">2.5.6 المصالح المشروعة</div>
            <p class="para-section">
              إذا كانت معالجة بيانات شخصية محددة في المصالح المشروعة لـ OIS ويُحكم أنها لا تؤثر على حقوق وحريات صاحب البيانات بطريقة كبيرة، فيمكن تعريف ذلك على أنه السبب القانوني للمعالجة. ومرة أخرى، سيتم توثيق الأسباب الكامنة وراء هذا الرأي.
            </p>
            <div class="sub-title pl-0">2.6 الخصوصية حسب التصميم</div>
            <p class="para-section">
              اعتمدت OIS مبدأ الخصوصية حسب التصميم وستضمن أن تعريف وتخطيط جميع الأنظمة الجديدة أو التي تم تغييرها بشكل كبير والتي تجمع أو تعالج البيانات الشخصية ستخضع للمراعاة الواجبة لقضايا الخصوصية، بما في ذلك استكمال واحد أو أكثر من آثار حماية البيانات التقييمات.
            </p>
            <p class="para-section">
              سيشمل تقييم تأثير حماية البيانات ما يلي:
            </p>
            <p class="para-section">
              النظر في كيفية معالجة البيانات الشخصية ولأي أغراض<br>تقييم ما إذا كانت المعالجة المقترحة للبيانات الشخصية ضرورية ومتناسبة مع الغرض (الأغراض)
            </p>
            <p class="para-section">
              تقييم المخاطر التي يتعرض لها الأفراد في معالجة البيانات الشخصية<br>ما هي الضوابط اللازمة لمعالجة المخاطر المحددة وإثبات الامتثال للتشريعات<br>سيتم النظر في استخدام تقنيات مثل تقليل البيانات والأسماء المستعارة حيثما كان ذلك ممكنًا ومناسبًا.
            </p>
            <div class="sub-title pl-0">2.7 العقود التي تتضمن معالجة البيانات الشخصية</div>
            <p class="para-section">
              ستضمن OIS أن جميع العلاقات التي تدخل فيها والتي تتضمن معالجة البيانات الشخصية تخضع لعقد موثق يتضمن المعلومات والشروط المحددة التي يتطلبها القانون العام لحماية البيانات. لمزيد من المعلومات، راجع معالج وحدة تحكم القانون العام لحماية البيانات (GDPR).
              سياسة الاتفاقية
            </p>
            <div class="sub-title pl-0">2.8 عمليات النقل الدولي للبيانات الشخصية</div>
            <p class="para-section">
              ستتم مراجعة عمليات نقل البيانات الشخصية خارج الاتحاد الأوروبي بعناية قبل إجراء النقل للتأكد من أنها تقع ضمن الحدود التي يفرضها القانون العام لحماية البيانات. يعتمد هذا جزئيًا على حكم المفوضية الأوروبية فيما يتعلق بمدى كفاية الضمانات المتعلقة بالبيانات الشخصية المطبقة في البلد المتلقي وقد يتغير هذا بمرور الوقت.<br>ستخضع عمليات نقل البيانات الدولية داخل المجموعة إلى اتفاقيات ملزمة قانونًا مشار إليها إلى قواعد الشركة الملزمة (BCR) التي توفر حقوقًا قابلة للتنفيذ لأصحاب البيانات.
            </p>
            <div class="sub-title pl-0">2.9 مسؤول حماية البيانات</div>
            <p class="para-section">
              مطلوب دور محدد لمسؤول حماية البيانات (DPO) بموجب اللائحة العامة لحماية البيانات (GDPR) إذا كانت المنظمة عبارة عن سلطة عامة، أو إذا كانت تقوم بمراقبة واسعة النطاق أو إذا كانت تعالج أنواعًا حساسة بشكل خاص من البيانات على نطاق واسع. مطلوب من DPO أن يتمتع بمستوى مناسب من المعرفة ويمكن أن يكون إما موردًا داخليًا أو يتم الاستعانة بمصادر خارجية لمزود خدمة مناسب.
            </p>
            <p class="para-section">
              بناءً على هذه المعايير، تم تعيين OIS مسؤولاً عن حماية البيانات، وفيما يلي تفاصيل الاتصال:
            </p>
            <p class="para-section">
              الاسم: أرشيبالد كوكر<br>البريد الإلكتروني: acoker@oisservices.com<br>جهة الاتصال: +44 (0) 207 832 0001
            </p>
            <div class="sub-title pl-0">2.10 إشعار الانتهاك</div>
            <p class="para-section">
              إن سياسة OIS هي أن تكون عادلة ومتناسبة عند النظر في الإجراءات التي سيتم اتخاذها لإبلاغ الأطراف المتضررة فيما يتعلق بانتهاكات البيانات الشخصية. تماشيًا مع اللائحة العامة لحماية البيانات، عندما يكون من المعروف حدوث انتهاك من المحتمل أن يؤدي إلى خطر على حقوق الأفراد وحرياتهم، سيتم إبلاغ السلطة الإشرافية ذات الصلة في غضون 72 ساعة. وستتم إدارة ذلك وفقًا لإجراءات الاستجابة لحوادث أمن المعلومات لدينا والتي تحدد العملية الشاملة للتعامل مع حوادث أمن المعلومات.
            </p>
            <p class="para-section">
              وبموجب اللائحة العامة لحماية البيانات، تتمتع إدارة حماية البيانات ذات الصلة بسلطة فرض مجموعة من الغرامات تصل إلى أربعة بالمائة من حجم المبيعات السنوية في جميع أنحاء العالم أو عشرين مليون يورو، أيهما أعلى، بسبب مخالفات اللوائح.
            </p>
            <div class="sub-title pl-0">2.11 معالجة الامتثال للائحة العامة لحماية البيانات</div>
            <p class="para-section">
              يتم اتخاذ الإجراءات التالية لضمان امتثال OIS في جميع الأوقات لمبدأ المساءلة في اللائحة العامة لحماية البيانات:
            </p>
            <ul class="para-list">
              <li>
                الأساس القانوني لمعالجة البيانات الشخصية واضح ولا لبس فيه
              </li>
              <li>
                يتم تعيين مسؤول حماية البيانات بمسؤولية محددة لحماية البيانات في المنظمة (إذا لزم الأمر)
              </li>
              <li>
                يفهم جميع الموظفين المشاركين في التعامل مع البيانات الشخصية مسؤولياتهم في اتباع الممارسات الجيدة لحماية البيانات
              </li>
              <li>
                تم توفير التدريب على حماية البيانات لجميع الموظفين
              </li>
              <li>
                يتم اتباع القواعد المتعلقة بالموافقة
              </li>
              <li>
                تتوفر الطرق لأصحاب البيانات الراغبين في ممارسة حقوقهم فيما يتعلق بالبيانات الشخصية ويتم التعامل مع هذه الاستفسارات بشكل فعال
              </li>
              <li>
                يتم إجراء مراجعات منتظمة للإجراءات المتعلقة بالبيانات الشخصية
              </li>
              <li>
                يتم اعتماد الخصوصية حسب التصميم لجميع الأنظمة والعمليات الجديدة أو المتغيرة
              </li>
            </ul>
            <p class="para-section">
              يتم تسجيل الوثائق التالية لأنشطة المعالجة:
            </p>
            <ul class="para-list">
              <li>
                اسم المنظمة والتفاصيل ذات الصلة
              </li>
              <li>
                أغراض معالجة البيانات الشخصية
              </li>
              <li>
                فئات الأفراد والبيانات الشخصية التي تتم معالجتها
              </li>
              <li>
                فئات مستلمي البيانات الشخصية
              </li>
              <li>
                اتفاقيات وآليات نقل البيانات الشخصية إلى دول خارج الاتحاد الأوروبي بما في ذلك تفاصيل الضوابط المعمول بها
              </li>
              <li>
                جداول الاحتفاظ بالبيانات الشخصية
              </li>
              <li>
                وجود الضوابط الفنية والتنظيمية ذات الصلة
              </li>
            </ul>
            <p class="para-section">
              تتم مراجعة هذه الإجراءات بشكل منتظم كجزء من عملية الإدارة المعنية بحماية البيانات.
            </p>
          </div>
          <div class="sub-title">حماية البيانات ذات الصلة</div>
          <div class="sub-section">
            <div class="sub-title pl-0">مبادئ حماية البيانات</div>
            <p class="para-section">
              هناك 8 مبادئ لحماية البيانات تضمن قيام المؤسسات بجمع البيانات الشخصية وتخزينها ومعالجتها بطريقة تحمي سرية العملاء. وترد هذه المبادئ في الجدول 1 من القانون وهي كما يلي:
            </p>
            <p class="para-section">
              أنا. يجب التعامل مع البيانات بشكل عادل وقانوني<br>لدينا أسباب مشروعة للحصول على بيانات العملاء وتخزينها ومعالجتها، وهي مساعدتك في الحصول على جواز سفر وتأشيرة ولأغراض أخرى يسمح بها القانون والعقود المبرمة بيننا وبين عملائنا . نحن نضمن عدم استخدام بياناتك في أي شيء غير قانوني.
            </p>
            <p class="para-section">
              ثانيا. لا يجوز الحصول على البيانات الشخصية إلا لغرض واحد أو أكثر من الأغراض المحددة والمشروعة، ولا يجوز معالجتها بأي طريقة تتعارض مع هذا الغرض أو تلك الأغراض.<br>نظرًا لطبيعة وظيفتنا، والغرض الذي تقدمه من أجله بياناتك الشخصية واضحة لك ولنا. لن نستخدم بياناتك لأي غرض آخر لا يتوافق مع الغرض الأصلي ما لم تمنحنا موافقتك أولاً أو نكون ملزمين بموجب القانون بالقيام بذلك.
            </p>
            <p class="para-section">
              ثالثا. يجب أن تكون البيانات الشخصية كافية وذات صلة وليست مفرطة فيما يتعلق بالغرض أو الأغراض التي تتم معالجتها من أجلها.<br>سنأخذ فقط المعلومات التي نعتبرها ذات صلة وكافية لتسليم عقدنا معك.
            </p>
            <p class="para-section">
              رابعا. يجب أن تكون البيانات الشخصية دقيقة، ويتم تحديثها عند الضرورة.<br>نحن نضمن أن البيانات الشخصية التي تقدمها لنا صحيحة وغير مضللة. نحقق ذلك من خلال إعطائك الفرصة للتأكد من المعلومات التي تقدمها لنا وكذلك من خلال طلب إثبات مستندي عند الضرورة. إذا كانت هناك تغييرات ذات صلة في بياناتك الشخصية، على سبيل المثال، تغيير الاسم أو الجنسية، فيرجى إبلاغنا بذلك في أقرب وقت ممكن حتى نتمكن من تحديث السجل الخاص بك.
            </p>
            <p class="para-section">
              v. لا يجوز الاحتفاظ بالبيانات الشخصية التي تتم معالجتها لأي غرض أو أغراض لفترة أطول مما هو ضروري لهذا الغرض أو تلك الأغراض.<br>سنقوم، من وقت لآخر، بمراجعة قاعدة البيانات الخاصة بنا لمعرفة ما إذا كانت بعض البيانات الشخصية لا تزال مطلوبة ليتم تخزينها من قبلنا. إذا تم تحقيق الغرض الذي تم تخزينها من أجله، ونرى أنه لم يعد من الضروري الاستمرار في تخزينها، فسنقوم بحذفها بشكل آمن.
            </p>
            <p class="para-section">
              السادس. تتم معالجة البيانات الشخصية وفقًا لحقوق أصحاب البيانات بموجب هذا القانون.<br>سنقوم بمعالجة بياناتك الشخصية بطريقة تمكنك من القيام بأي مما يلي:
            </p>
            <ul class="para-list-digit">
              <li>
                حق الوصول إلى نسخة من بياناتك الشخصية، والمعروف باسم \'طلب الوصول إلى الموضوع\'. الرسوم الحالية لذلك هي 10 جنيهات إسترلينية لكل طلب قياسي ونهدف إلى تقديم ذلك في غضون 14 يومًا. ينبغي تقديم طلب الوصول إلى الموضوع إلى info@oisservices.com عن طريق البريد الإلكتروني أو عن طريق البريد رئيس المركز، OIS Services، 56-57 Fleet street, EC4Y 1JU, London </li>
              <li>
                الحق في الاعتراض على معالجة بياناتك الشخصية بطريقة من المحتمل أن تسبب ضررًا أو إزعاجًا لك؛
              </li>
              <li>
                الحق في منع معالجة بياناتك الشخصية بطريقة لا تتوافق مع الغرض أو الأغراض الأصلية؛
              </li>
              <li>
                الحق في الاعتراض على القرارات التي يتم اتخاذها بالوسائل الآلية؛
              </li>
              <li>
                الحق، عند الاقتضاء، في تصحيح البيانات الشخصية غير الدقيقة أو حظرها أو حذفها، و
              </li>
              <li>
                الحق في المطالبة بالتعويض عن الأضرار الناجمة عن خرق القانون.
              </li>
            </ul>
            <p class="para-section">
              سابعا. أمان البيانات الشخصية<br>يتم الاحتفاظ ببياناتك الشخصية في بيئة آمنة للغاية ماديًا وتقنيًا. المناطق التي يتم فيها الاحتفاظ بالبيانات الشخصية هي خارج نطاق جميع الأشخاص غير المصرح لهم. لا يمكن الوصول إلى هذه الأجزاء من المبنى إلا عن طريق المفتاح الإلكتروني الصادر فقط للأشخاص المصرح لهم بذلك. لا يمكن الوصول إلى بياناتك الشخصية على النظام إلا من قبل الأشخاص المصرح لهم بذلك. يمكن فقط لهؤلاء الأشخاص المصرح لهم تغيير بياناتك الشخصية أو الكشف عنها أو تدميرها. علاوة على ذلك، لا يمكن لهؤلاء الأشخاص المرخص لهم القيام بأي من هذه المهام إلا في سياق واجباتهم القانونية. ولذلك، فإن فرص معالجة بياناتك الشخصية بشكل غير قانوني أو إتلافها أو تدميرها أو فقدانها عن طريق الخطأ تكون ضئيلة للغاية.
              علاوة على ذلك، فإن سياستنا هي ضمان ما يلي:
            </p>
            <ul class="para-list-digit">
              <li>
                كل موظف معتمد لديه حق الوصول إلى البيانات الشخصية لديه كلمة المرور الخاصة به والتي لا تتم مشاركتها مع أشخاص آخرين،
              </li>
              <li>
                يتم استخدام برامج الأمان وجدار الحماية المعتمدة لحماية بياناتنا،
              </li>
              <li>
                يتم تمزيق البيانات الشخصية المطبوعة غير المستخدمة،
              </li>
              <li>
                نحن لا نشجع تخزين البيانات الشخصية على أجهزة الكمبيوتر المحمولة وغيرها من الأجهزة المحمولة والوسائط، ولكن إذا حدث ذلك، فيجب إغلاقها بشكل آمن وعدم إخراجها من المكتب.
              </li>
            </ul>
            <p class="para-section">
              ثامنا. نقل البيانات الشخصية خارج المنطقة الاقتصادية الأوروبية<br>لن يتم نقل بياناتك الشخصية إلى بلد أو إقليم خارج المنطقة الاقتصادية الأوروبية ما لم يضمن هذا البلد أو الإقليم مستوى مناسبًا من الحماية لحقوق وحريات أصحاب البيانات فيما يتعلق لمعالجة البيانات الشخصية. لا يوجد سوى عدد قليل من المقاطعات خارج المنطقة الاقتصادية الأوروبية التي تم قبولها باعتبارها تتمتع بمستويات كافية من الحماية لمعالجة البيانات الشخصية مقارنة بدول المنطقة الاقتصادية الأوروبية. عندما نقوم بنقل البيانات الشخصية إلى الولايات المتحدة الأمريكية، فإننا نتأكد من أن المستلم هو أحد الموقعين على برنامج الملاذ الآمن التابع لوزارة التجارة الأمريكية. تم الاعتراف بهذا المخطط من قبل المفوضية الأوروبية باعتباره يوفر الحماية الكافية لأصحاب البيانات. فيما يتعلق بالدول الأخرى خارج المنطقة الاقتصادية الأوروبية التي لم يتم قبولها باعتبارها تتمتع بأمان وضمانات مكافئة لمعالجة البيانات الشخصية، فإننا إما نوقع عقدًا منفصلاً، تتم الموافقة على شروطه بموجب التوجيهات الأوروبية أو نتأكد من وجود بند في العقد الذي يحمي معالجة البيانات الشخصية لجميع عملائنا.
            </p>
          </div>
        </div>',
      'order_num' => 1,
      'lang' => 'ar',
    ]);

    // fr
    Content::create([
      'title' => 'ABOUT OIS',
      'content' => '<p class="title body-section">Solutions logicielles innovantes dans tous les secteurs.</p>',
      'order_num' => 1,
      'lang' => 'fr',
    ]);
    Content::create([
      'title' => 'ABOUT OIS',
      'content' => '<p class="sub-title">OIS (services intégrés en ligne)</p>
                <p class="description mt-4">OIS (Online Integrated Solutions) est à la pointe de l\'innovation en tant que fournisseur leader de solutions logicielles de pointe couvrant divers secteurs. Notre parcours a commencé en tant que centre de demande de visa et fournisseur de services d\'assistance, et nous avons depuis évolué pour étendre nos services à toutes les missions diplomatiques du Nigeria dans le monde. Notre succès repose sur une technologie de pointe, une qualité inégalée, une évolutivité et une transférabilité transparente de nos solutions.</p>
                <p class="description mb-0 mt-4">Ce qui distingue OIS, c\'est notre empreinte mondiale, permettant l\'intégration sans effort d\'applications à l\'échelle mondiale. Notre engagement envers l’excellence s’étend au-delà des services d’immigration, car nous disposons d’une solide expérience en matière de plateformes bancaires. En tant qu\'intermédiaire crucial pour les banques nigérianes, nous fournissons des services essentiels aux Nigérians non-résidents et aux personnes d\'autres nationalités à l\'étranger cherchant à ouvrir ou réactiver leurs comptes bancaires nigérians.</p>
                <p class="description mb-0 mt-4">Chez OIS, nous nous efforçons continuellement de redéfinir les normes de l’industrie, en proposant une suite complète de solutions qui reflètent notre engagement envers l’excellence et les prouesses technologiques. Rejoignez-nous dans un voyage de prestation de services inégalée et de connectivité mondiale.</p>',
      'order_num' => 2,
      'lang' => 'fr',
    ]);
    Content::create([
      'title' => 'ABOUT OIS',
      'content' => '<p class="description">Chez OIS, nous sommes extrêmement fiers de notre engagement indéfectible envers une prestation de services exceptionnelle et une technologie de pointe. Notre gamme complète de services va au-delà des solutions de visa et de passeport, englobant les plateformes d\'éducation, de santé et bancaires. Nous croyons en la simplification des processus et, pour y parvenir, nous offrons une expérience de candidature rationalisée grâce à notre portail en ligne convivial, notre système de paiement transparent et nos mises à jour en temps réel.</p>
                <p class="description mt-4 mb-0">Pour ceux qui cherchent à obtenir un numéro de vérification bancaire (BVN), notre processus de demande en ligne couplé à l\'envoi de SMS garantit une expérience efficace et sans tracas.</p>
                <p class="description mt-4 mb-0">Dans le domaine des services financiers, nos services de transfert électronique d\'argent se démarquent. Nous fournissons un moyen sécurisé et abordable pour les transferts d\'argent en ligne, prenant en charge diverses méthodes telles que le retrait d\'espèces, les transactions en cryptomonnaie, les virements bancaires, les transactions d\'argent mobile et les recharges de temps d\'antenne. Avec OIS, découvrez la commodité de solutions financières modernes, sécurisées et flexibles, adaptées à vos divers besoins.</p>',
      'order_num' => 3,
      'lang' => 'fr',
    ]);
    Content::create([
      'title' => 'ABOUT OIS',
      'content' => '<p class="description mb-0">Chez OIS, le bien-être de nos clients est au centre de nos préoccupations et notre engagement s\'étend à la fourniture de services de santé et de bien-être en ligne de premier ordre. Plongez dans une approche globale de la santé grâce à notre gamme d’offres :</p>
                <p class="description mt-0 mb-0"><b>Services de télémédecine:</b></p>
                <p class="description mt-0 mb-0 ml-4">• Bénéficiez de soins de santé selon vos conditions grâce à nos services de télémédecine. Connectez-vous en toute transparence avec des professionnels de la santé grâce à des consultations virtuelles, déverrouillant des plans de régime personnalisés, des routines d\'exercices organisées et un soutien inestimable en matière de santé mentale. Votre bien-être est notre priorité et nos services de télémédecine vous apportent directement l\'expertise en matière de soins de santé.</p>
                <p class="description mt-0 mb-0"><b>Appareils de surveillance de la santé :</b></p>
                <p class="description mt-0 mb-0 ml-4">• Restez informé et proactif sur votre santé grâce à nos appareils de surveillance de la santé. Ces outils de pointe vous permettent de suivre vos signes vitaux, fournissant ainsi des informations précieuses sur votre état de santé général. Donnez-vous les moyens de prendre des décisions fondées sur des données pour un mode de vie plus sain.</p>
                <p class="description mt-0 mb-0"><b>Programme de bien-être intégré :</b></p>
                <p class="description mt-0 mb-0 ml-4">• Notre programme de bien-être est un havre de santé holistique, intégrant de manière transparente le soutien en matière de santé mentale dans votre parcours de bien-être. Au-delà de la santé physique, nous accordons la priorité au bien-être mental, en favorisant une approche équilibrée et globale du bien-être général.</p>
                <p class="description mt-0 mb-0">Notre mission est de fournir non seulement des solutions logicielles de pointe, mais également d\'être un allié de confiance dans votre quête de santé et de bien-être. En simplifiant les processus et en améliorant les expériences dans tous les secteurs, nous nous engageons à avoir un impact positif sur toutes les facettes de votre vie. Bienvenue dans un monde où l\'innovation rencontre le bien-être.</p>
                <p class="description mt-4 mb-5">Chez OIS, notre engagement inébranlable est de proposer des solutions logicielles de pointe qui non seulement rationalisent les processus, mais simplifient également les processus et améliorent les expériences dans divers secteurs.</p>',
      'order_num' => 4,
      'lang' => 'fr',
    ]);
    Content::create([
      'title' => 'SERVICES',
      'content' => '<p class="title body-section">Aider les entreprises et les particuliers à surmonter des défis complexes.</p>',
      'order_num' => 1,
      'lang' => 'fr',
    ]);
    Content::create([
      'title' => 'SERVICES',
      'content' => '<p class="sub-title">TRAITEMENT DES DEMANDES DE VISA ET DE PASSEPORT :</p>
                <p class="description mb-0">Chez Online Integrated Solutions (OIS), nous sommes un pionnier mondial des solutions logicielles révolutionnaires, dédiées à donner aux entreprises et aux particuliers les moyens de surmonter des défis complexes. Notre impact profond est particulièrement évident dans le domaine du traitement des demandes VISA, où nous exploitons la puissance des algorithmes avancés d\'apprentissage automatique (ML) pour améliorer l\'efficacité, la précision et l\'évolutivité, améliorant ainsi l\'expérience client globale. Voici les domaines clés dans lesquels notre approche innovante de l’apprentissage automatique peut apporter des améliorations transformatrices :</p>
                <p class="description mt-0 mb-0 ml-4">• Traitement et validation des données.</p>
                <p class="description mb-0 ml-4">• Détection de fraude.</p>
                <p class="description mb-0 ml-4">• Identification biométrique.</p>
                <p class="description mb-0 ml-4">• Suivi de l\'état de la demande.</p>
                <p class="description mb-5 mt-4">Chez OIS, nous envisageons un avenir où la technologie non seulement répond mais dépasse les attentes, et notre engagement à repousser les limites de l\'innovation garantit que nos clients et utilisateurs bénéficient des solutions de traitement des demandes de visa et de passeport les plus avancées, efficaces et sécurisées disponibles.</p>',
      'order_num' => 2,
      'lang' => 'fr',
    ]);
    Content::create([
      'title' => 'SERVICES',
      'content' => '<p class="sub-title">TRAITEMENT DE LA DEMANDE DE NUMÉRO DE VÉRIFICATION BANCAIRE (BVN) :</p>
                <p class="description mb-0">Dans notre recherche incessante de services transparents, nous reconnaissons le potentiel transformateur de l’apprentissage automatique, en particulier dans l’optimisation de notre processus de demande de numéro de vérification bancaire (BVN). Nous comprenons l\'importance primordiale d\'une émission de BVN rapide et accessible pour nos clients, ce qui nous pousse à continuellement affiner et accélérer cette procédure cruciale. En exploitant les capacités de l\'apprentissage automatique, nous visons à améliorer à la fois la précision et l\'efficacité des enregistrements BVN, tout en atténuant les risques associés aux erreurs et aux activités frauduleuses. Voici les domaines clés dans lesquels notre intégration de l’apprentissage automatique promet un impact substantiel :</p>
                <p class="description mt-0 mb-0 ml-4">• Traitement et validation des données.</p>
                <p class="description mt-0 mb-0 ml-4">• Analyses prédictives.</p>
                <p class="description mt-0 mb-0 ml-4">• Détection de fraude.</p>
                <p class="description mt-4 mb-5">Au cœur de notre engagement se trouve la détermination à fournir à nos clients une expérience d’application BVN inégalée : rapide, précise et renforcée contre les risques potentiels. Grâce à l\'infusion de l\'apprentissage automatique, nous nous lançons dans un voyage visant à redéfinir les normes d\'efficacité et de sécurité dans l\'émission de BVN.</p>',
      'order_num' => 3,
      'lang' => 'fr',
    ]);
    Content::create([
      'title' => 'SERVICES',
      'content' => '<p class="sub-title">AMÉLIORER L\'EXCELLENCE DU SERVICE GRÂCE À DES CHATBOTS ALIMENTÉS PAR L\'IA:</p>
                <p class="description">Nous sommes ravis de dévoiler notre dernière innovation, le AI Chatbot, une avancée déterminante sur le point de transformer le service client et le support. Ce Chatbot de pointe exploite la puissance des algorithmes d’apprentissage automatique, offrant aux clients une voie d’assistance personnalisée et efficace. Notre Chatbot est conçu pour révolutionner l\'expérience client en fournissant des réponses rapides et précises aux demandes de renseignements et en résolvant les problèmes avec un minimum de recours à l\'intervention humaine.</p>
                <p class="description mt-4 mb-0">Principales caractéristiques et avantages :</p>
                <p class="description mt-0 mb-0 ml-4">• Réponses rapides et précises.</p>
                <p class="description mt-0 mb-0 ml-4">• Accessibilité 24h/24 et 7j/7.</p>
                <p class="description mt-0 mb-0 ml-4">• Élimination des temps d\'attente.</p>
                <p class="description mt-0 mb-0 ml-4">• Traitement polyvalent des demandes.</p>
                <p class="description mt-4 mb-5">Ce Chatbot IA représente un engagement à redéfinir les normes de service, garantissant à nos clients une interaction transparente et efficace avec notre marque. À mesure que la technologie continue d’évoluer, nous restons à l’avant-garde, en tirant parti de solutions innovantes pour améliorer votre parcours client. Bienvenue dans une nouvelle ère de personnalisation et de réactivité</p>',
      'order_num' => 4,
      'lang' => 'fr',
    ]);
    Content::create([
      'title' => 'SERVICES',
      'content' => '<p class="sub-title">ÉLEVER LA E-SANTÉ ET LE BIEN-ÊTRE GRÂCE À UNE TECHNOLOGIE DE POINTE</p>
                <p class="description mb-0">S\'engageant dans un parcours d\'amélioration continue, nous nous engageons à révolutionner nos services de santé et de bien-être en ligne grâce à l\'intégration de technologies de pointe. Découvrez les innombrables façons dont ces innovations peuvent vous permettre de maintenir une santé et un bien-être optimaux :</p>
                <p class="description mt-0 mb-0">1. Services de télémédecine :</p>
                <p class="description mb-0 ml-4">• Plongez-vous dans l’avenir des soins de santé grâce à nos systèmes avancés. La précision et la personnalisation sont au premier plan car nos services de télémédecine diagnostiquent avec précision les problèmes de santé et proposent des plans de traitement sur mesure adaptés à vos besoins uniques.</p>
                <p class="description mt-0 mb-0">2. Programme de bien-être :</p>
                <p class="description mb-0 ml-4">• Adoptez une approche holistique du bien-être grâce à notre programme de bien-être révolutionnaire. Tirant parti du potentiel de transformation de la technologie Blockchain et Web3, notre plateforme sécurisée et décentralisée propose des plans de régime personnalisés, des programmes d\'exercices sur mesure et un soutien complet en matière de santé mentale. Entrez dans un voyage de bien-être aussi individuel que vous.</p>
                <p class="description mt-0 mb-0">3. Appareils de surveillance de la santé :</p>
                <p class="description mb-0 ml-4">• Libérez la puissance de l’IA avec nos appareils de surveillance de la santé. Ces systèmes intelligents analysent les données collectées à partir d\'une gamme d\'appareils, vous fournissant des commentaires personnalisés et des recommandations pertinentes. Transformez la façon dont vous surveillez votre santé, avec une technologie qui évolue avec vous.</p>
                <p class="description mt-4 mb-5">À l’intersection de l’innovation et de la santé, nous envisageons un avenir où la technologie améliore toutes les facettes de votre parcours de bien-être. Notre engagement est de vous offrir des solutions personnalisées, sécurisées et de pointe qui redéfinissent les normes de la e-santé et du bien-être. Bienvenue dans un royaume où votre santé n\'est pas seulement une priorité : c\'est une expérience personnalisée.</p>',
      'order_num' => 5,
      'lang' => 'fr',
    ]);
    Content::create([
      'title' => 'SERVICES',
      'content' => '<p class="sub-title">RÉVOLUTIONNER LE TRANSFERT D\'ARGENT ÉLECTRONIQUE AVEC LES TECHNOLOGIES BLOCKCHAIN ET WEB3</p>
                <p class="description">OIS est fier d\'annoncer une amélioration révolutionnaire de notre service de transfert d\'argent électronique grâce à l\'intégration des technologies de pointe Blockchain et Web3. Cette évolution stratégique élève le niveau de notre service, offrant aux clients un niveau de transparence et de sécurité sans précédent.</p>
                <p class="description mt-4 mb-0">Avancées clés :</p>
                <p class="description mt-0 mb-0 ml-4">• Enregistrement du grand livre immuable.</p>
                <p class="description mt-0 mb-0 ml-4">• Options rapides, sécurisées et peu coûteuses.</p>
                <p class="description mt-0 mb-0 ml-4">• Flexibilité et commodité améliorées.</p>
                <p class="description mt-4 mb-5">Chez OIS, nous nous engageons à redéfinir le paysage des services financiers électroniques. L\'intégration de Blockchain et Web3 témoigne de notre dévouement à l\'innovation, garantissant que nos clients bénéficient du maximum de sécurité, de transparence et de commodité lorsqu\'ils nous confient leurs transactions financières. Bienvenue dans une nouvelle ère de transfert d’argent électronique, où la technologie rencontre la confiance.</p>',
      'order_num' => 6,
      'lang' => 'fr',
    ]);
    Content::create([
      'title' => 'INNOVATION',
      'content' => '<p class="title body-section">L\'avenir de la réalité virtuelle est là.</p>',
      'order_num' => 1,
      'lang' => 'fr',
    ]);
    Content::create([
      'title' => 'INNOVATION',
      'content' => '<p class="sub-title">Personnalisation basée sur l\'IA</p>
                <p class="description">Nous utilisons des algorithmes d\'IA pour personnaliser nos services en fonction des besoins de chaque client. En analysant les données et les comportements des clients, nous pouvons adapter nos solutions pour répondre à des exigences et préférences spécifiques.</p>',
      'order_num' => 2,
      'lang' => 'fr',
    ]);
    Content::create([
      'title' => 'INNOVATION',
      'content' => '<p class="sub-title">Apprentissage automatique pour la détection des fraudes</p>
                <p class="description">Nos algorithmes d\'apprentissage automatique analysent le comportement des clients, les données transactionnelles, les activités suspectes et préviennent les transactions frauduleuses sur tous nos services.</p>',
      'order_num' => 3,
      'lang' => 'fr',
    ]);
    Content::create([
      'title' => 'INNOVATION',
      'content' => '<p class="sub-title">Sécurité basée sur la blockchain</p>
                <p class="description">Notre nouvelle orientation technologique est Blockchain et Web3, qui offrent une sécurité et une transparence accrues pour les données et les transactions de nos clients. Nous mettons en œuvre la technologie blockchain pour garantir l\'immuabilité et la traçabilité de nos données, ainsi qu\'une sécurité renforcée contre les violations de données et les piratages.</p>',
      'order_num' => 4,
      'lang' => 'fr',
    ]);
    Content::create([
      'title' => 'INNOVATION',
      'content' => '<p class="sub-title">Décentralisation basée sur Web3</p>
                <p class="description">Nos solutions basées sur Web3 offrent une plus grande décentralisation et démocratisation des services. En utilisant les protocoles Web3, nous pouvons réduire la dépendance à l\'égard des intermédiaires centralisés, réduire les frais de transaction et améliorer l\'accessibilité et l\'inclusivité pour nos clients.</p>',
      'order_num' => 5,
      'lang' => 'fr',
    ]);
    Content::create([
      'title' => 'INNOVATION',
      'content' => '<p class="sub-title">Recherche et développement</p>
                <p class="description">Pour garder une longueur d\'avance sur la concurrence, nous investissons dans la recherche et le développement de nouvelles technologies et de leurs applications potentielles. Nous collaborons avec des startups, des universités et des instituts de recherche pour accélérer l\'innovation et proposer des solutions avancées à nos clients.</p>',
      'order_num' => 6,
      'lang' => 'fr',
    ]);
    Content::create([
      'title' => 'INNOVATION',
      'content' => '<p class="sub-title">Formation basée sur la réalité virtuelle</p>
                <p class="description mb-5">Nous proposons des formations basées sur la réalité virtuelle à nos professionnels de la santé et à nos équipes de support client afin d\'améliorer leurs compétences et de fournir un meilleur service. Nos programmes de formation basés sur la réalité virtuelle simulent des scénarios du monde réel, offrant une expérience d\'apprentissage sûre et immersive.</p>',
      'order_num' => 7,
      'lang' => 'fr',
    ]);
    Content::create([
      'title' => 'SECURITY',
      'content' => '<p class="title body-section">Avec OIS, vos données sont sécurisées.</p>',
      'order_num' => 1,
      'lang' => 'fr',
    ]);
    Content::create([
      'title' => 'SECURITY',
      'content' => '<p class="sub-title">Protection et sécurité des données</p>
                <p class="description">OIS accorde une grande priorité à la protection et à la sécurité des données de nos clients. Nous avons mis en œuvre une série de mesures pour garantir la sécurité et l\'exactitude des données des clients, notamment des protocoles de cryptage robustes, des sauvegardes régulières et des solutions de stockage de données sécurisées.</p>
                <p class="description mt-4">De plus, nous avons établi des contrôles stricts d\'accès aux données, garantissant que seul le personnel autorisé a accès aux données sensibles des clients. Pour maintenir l\'exactitude des données client, OIS utilise des processus automatisés de vérification et de nettoyage des données, pour garantir que les données sont toujours exactes et à jour.</p>
                <p class="description mt-4 mb-5">OIS obtient les données des clients via des processus sécurisés basés sur le consentement et utilise ces données pour éclairer le développement de nouveaux produits et services qui apportent une réelle valeur aux clients.</p>',
      'order_num' => 2,
      'lang' => 'fr',
    ]);
    Content::create([
      'title' => 'DISCLAIMERS',
      'content' => '',
      'order_num' => 1,
      'lang' => 'fr',
    ]);
    Content::create([
      'title' => 'TERMS OF USE',
      'content' => '
        <div class="main-title">
          Avis de non-responsabilité et conditions d\'utilisation
        </div>
        <div class="sub-body">
          <div class="sub-title">1. Remarques importantes</div>
          <div class="sub-section">
              <p class="para-section">
                  OIS vous recommande de ne pas acheter de billets ni effectuer de réservations qui ne peuvent être annulées sans frais avant la délivrance d\'un visa, sauf s\'il s\'agit d\'une exigence spécifique indiquée dans le cadre de la demande de visa.
              </p>
              <p class="para-section">
                  Ces conditions contiennent une clause de non-responsabilité qui limite notre responsabilité à notre politique de remboursement indiquée ci-dessous. Sauf dans les cas prévus par notre politique de remboursement ci-dessous, tous les frais ne sont pas remboursables et peuvent être retenus par nous contre votre paiement, même si vous ne faites pas ou ne procédez pas à une demande de visa, et qu\'un visa soit accordé ou non.
              </p>
              <p class="para-section">
                  Vous êtes responsable de l’exactitude de votre formulaire de candidature et de sa vérification. Nous ne garantissons pas que nous trouverons des erreurs et nous ne vérifions pas les informations que vous avez fournies.
              </p>
          </div>
          <div class="sub-title">2. Fournisseur de services</div>
          <div class="sub-section">
              <p class="para-section">
                  OIS est un centre de traitement des visas pour les demandes de visa nigérianes avec des bureaux à :
              </p>
              <ul class="para-list">
                  <li>
                      Abuja (n°5, croissant Onitsha, rue Gimbiya, zone 11, Garki, Abuja Nigeria)
                  </li>
                  <li>
                      Amsterdam (Kingsfordweg 151, 1043GR, Amsterdam Pays-Bas)
                  </li>
                  <li>
                      Ankara (Danismanlik Ltd. Sti. Kazim Ozalp Mahallesi Koza Caddesi 35/3 Cankaya, Ankara
                      Dinde)
                  </li>
                  <li>
                      Atlanta (918 Holcomb Bridge Road, Suite 204, Roswell, Atlanta, GA États-Unis 30076)
                  </li>
                  <li>
                      Pékin (unité 1, suite 1801, bâtiment Kun Sha, 16 rue Xin Yuan Li, district de Chaoyang, Pékin RPC)
                  </li>
                  <li>
                      Beyrouth (Jnah-Beyrouth en face de l\'hôpital universitaire Rafik Hariri, bâtiment Mais 6 - 3ème étage P.O.Box 9 UNESCO, Beyrouth, Liban)
                  </li>
                  <li>
                      Guangzhou (unité 27/28, 41e étage, bâtiment R&F To-Win, 30 Huaxia Rd, district de Tianhe, Guangzhou RPC)
                  </li>
                  <li>
                      Houston (9894 Bissonnet Street, Suite 745 Houston TX 77036 États-Unis)
                  </li>
                  <li>
                      Johannesbourg (6 Bolton Road Parkwood Rosebank, 2193, Johannesburg, Afrique du Sud)
                  </li>
                  <li>
                      Kuala Lumpur (36.01 Level 36 Menara Citibank, 165 Jalan Ampang 50450 Kuala Lumpur Malaisie)
                  </li>
                  <li>
                      Leicester (St Georges House, 6 St Georges Way, Leicester LE1 1SH, Royaume-Uni)
                  </li>
                  <li>
                      Londres (56-57 Fleet Street City of London Londres EC4Y 1JU Royaume-Uni)
                  </li>
                  <li>
                      Los Angeles (11222 S. La Cienega Blvd Inglewood, Suite 302, CA. 90304 États-Unis)
                  </li>
                  <li>
                      Londres (56-57 Fleet Street City of London Londres EC4Y 1JU Royaume-Uni)
                  </li>
                  <li>
                      Mumbai (Quest Offices Pvt. Ltd., 8e étage, Parinee Crescenzo, C38 & 39, G Block, Bandra Kurla Complex, Bandra (Est) Pin : 400051, Maharashtra, Inde)
                  </li>
                  <li>
                      New Delhi (C/O Central Board of Irrigation & Power Plot No. 4, Ground Floor, Institutional Area Opp. : Sarvodaya School Malcha Marg Chanakyapuri New Delhi 110021, Delhi, Inde)
                  </li>
                  <li>
                      New York (370 Lexington Ave, Suite 1505 New York, NY 10017 États-Unis)
                  </li>
                  <li>
                      Paris (7 Rue Daru 75008 Paris, France)
                  </li>
                  <li>
                      Pretoria (3e étage, bâtiment 2, Brooklyn Bridge Office Park, Pretoria 570 Fehrsen, Afrique du Sud)
                  </li>
                  <li>
                      Rome (S.R.L., Via Sicilia, 30 00187 Rome, Italie)
                  </li>
                  <li>
                      Shanghai (salle 2025, 20/F, bâtiment Catic, 212 Jiangning Road, district de Jing\'an, Shanghai, RPC)
                  </li>
                  <li>
                      Washington DC (11900 Parklawn Drive Suite 160, Rockville MD 20852, Washington DC États-Unis)
                  </li>
              </ul>
          </div>
          <div class="sub-title">3. Application de ces conditions</div>
          <div class="sub-section">
              <p class="para-section">
                  Ces termes et conditions régissent votre utilisation des services de l\'OIS, toutes les demandes de visa que vous effectuez et toutes les demandes de conseils ou d\'informations que vous effectuez concernant les visas nigérians. Chaque demandeur de visa accepte et confirme par la présente qu\'avant de soumettre une demande de visa, il a lu, compris et accepté d\'être lié, sans limitation ni réserve, par tous ces termes et conditions. Aucun employé d\'OIS n\'a le pouvoir de changer, d\'amender, d\'amplifier ou de retirer tout ou partie de ces termes et conditions sans l\'approbation écrite préalable d\'OIS.
              </p>
          </div>
          <div class="sub-title">4. Le service de demande de visa</div>
          <div class="sub-section">
              <div class="sub-title pl-0">4.1 Portée</div>
              <p class="para-section">
                  OIS est le partenaire externalisé du haut-commissariat du Nigeria au Royaume-Uni. À ce titre, l\'OIS est responsable de la planification des rendez-vous, de la réception des demandes de visa pour voyager au Nigeria et de la soumission des demandes au Haut-commissariat du Nigeria à Londres, de la collecte des passeports traités et du retour des passeports aux candidats.
              </p>
              <div class="sub-title pl-0">4.2 Acceptation et rejet des candidatures</div>
               <p class="para-section">
                  L\'évaluation des demandes de visa est effectuée par le Haut-commissariat du Nigeria et l\'octroi ou le refus des visas est à leur seule discrétion. Le Haut-commissariat du Nigéria se réserve le droit de demander des documents et informations supplémentaires au demandeur et de refuser toute demande de visa. Le demandeur doit fournir ces documents et informations supplémentaires s’il souhaite que sa candidature continue d’être examinée.
              </p>
              <div class="sub-title pl-0">4.3 Frais</div>
              <p class="para-section">
                  Les frais à votre charge comprennent les frais administratifs du Haut-Commissariat du Nigeria pour le visa, que nous transmettons au Haut-Commissariat et nos frais, comprenant nos frais de service et d\'autres frais tels que les frais et commissions bancaires.
              </p>
              <p class="para-section">
                  Les frais indiqués ne sont valables que le jour où ils sont indiqués ou fournis par nous. Si vous décidez de faire votre demande à une date ultérieure, les frais peuvent changer.
              </p>
              <p class="para-section">
                  Tous les frais de retour des passeports, visas et documents sont inclus dans le prix total final, en fonction des informations fournies par vous et des méthodes de livraison que vous avez sélectionnées.
              </p>
              <p class="para-section">
                  Tous les frais doivent être reçus dans leur intégralité selon les options de paiement disponibles.
              </p>
              <p class="para-section">
                  Sauf dans les cas couverts par notre politique de remboursement ci-dessous, tous les frais ne sont pas remboursables, et tous les frais sont payables et peuvent être retenus par nous lors du paiement de votre part, même si vous ne faites pas ou ne procédez pas à une demande de visa, et qu\'il s\'agisse ou non d\'un visa. est accordée.
              </p>
              <div class="sub-title pl-0">4.4 Obligation générale</div>
              <p class="para-section">
                  OIS traitera toutes les demandes de visa avec une attention et des compétences raisonnables et conformément à toutes les procédures et directives établies par le Haut-commissariat du Nigeria. Cependant, bien que nous fassions preuve d\'une attention raisonnable pour vérifier votre formulaire de candidature à la recherche d\'erreurs évidentes, nous ne garantissons pas la détection d\'erreurs dans votre formulaire et nous ne nous engageons pas à vérifier les informations que vous fournissez, dont vous êtes responsable. s’assurer est exact.
              </p>
              <div class="sub-title pl-0">4.5 Responsabilité du demandeur</div>
              <p class="para-section">
                  Il est de la responsabilité de tous les candidats de remplir tous les formulaires de candidature de manière véridique, de fournir des informations et des documents corrects et précis, de s\'assurer qu\'ils disposent d\'un passeport valide et, à la réception du visa, de vérifier la validité du visa délivré pour s\'assurer qu\'il couvre la durée du séjour demandée, le nombre d\'entrées demandées et sa validité pour les besoins du voyage.
              </p>
              <div class="sub-title pl-0">4.6 Délais de traitement</div>
              <p class="para-section">
                  Les délais de traitement des demandes de visa ne sont que des estimations. Celles-ci sont basées sur les informations et l’expérience du Haut-commissariat du Nigeria. Le traitement de votre demande est soumis aux procédures et aux délais de traitement du Haut-commissariat du Nigeria sur lesquels l\'OIS n\'a aucun contrôle.
              </p>
              <div class="sub-title pl-0">4.7 Modifications des procédures et des frais</div>
              <p class="para-section">
                  Les procédures et les frais du Haut-commissariat du Nigeria pour le traitement des visas et les services associés échappent au contrôle de l\'OIS et sont sujets à changement sans préavis. OIS n\'accepte aucune responsabilité pour tout changement dans les procédures ou les frais et se réserve le droit de répercuter toute augmentation des frais.


              </p>
              <div class="sub-title pl-0">4.8 Annulation</div>
              <p class="para-section">
                  Si vous commencez un processus de demande de visa, y compris en soumettant une demande en ligne, mais ne terminez pas le processus de demande de visa, y compris lorsque vous ne nous envoyez pas les documents de votre demande de visa ou ne vous présentez pas en personne à un centre de demande de visa pour compléter votre visa. demande, dans les 12 mois suivant le début du processus de demande de visa, votre demande de visa sera alors considérée comme expirée et nous pourrons conserver les frais de visa que vous avez payés, ainsi que tous les frais de service, frais bancaires et autres frais. Nous ne serons pas obligés de vous en informer.
              </p>
              <p class="para-section">
                  Votre droit ci-dessus est le seul droit d’annulation dont vous disposez. Une fois que vous nous avez soumis votre demande, vous serez considéré comme ayant accepté que nous puissions immédiatement commencer à traiter votre demande et à fournir des services, et par conséquent, vous n\'aurez aucun droit d\'annulation en vertu du Règlement sur la protection des consommateurs (vente à distance). 2000. En effet, en vertu du Règlement 13(1)(a), vous perdez votre droit d\'annulation si vous acceptez que nous puissions commencer à fournir les services pendant la période d\'annulation.
              </p>
          </div>
          <div class="sub-title">5. Politique de remboursement</div>
          <div class="sub-section">
              <div class="sub-title pl-0">5.1 Remboursement des frais de demande de visa</div>
              <p class="para-section">
                  Si l\'OIS est en rupture de contrat ou négligent par rapport à une demande de visa soumise, entraînant la non-octroi du visa ou la perte du passeport du demandeur avec un visa valide, dans chaque cas, le demandeur doit demander un nouveau passeport ou ne peut pas voyager. au Nigeria aux heures indiquées par le demandeur dans sa demande de visa, l\'OIS remboursera au demandeur les frais de visa, mais pas les frais de service, les frais bancaires ou autres frais.
              </p>
              <div class="sub-title pl-0">5.2 Perte ou endommagement des passeports et autres documents de voyage</div>
              <p class="para-section">
                  OIS prend toutes les précautions raisonnables lors du traitement du passeport et des documents d\'un demandeur, et si en raison d\'une rupture de contrat ou d\'une négligence de la part de l\'OIS, le passeport ou les documents soumis par le demandeur sont perdus ou endommagés au-delà de leur état d\'utilisation, alors OIS paiera à l\'OIS. demandeur le montant des frais facturés par le gouvernement du pays d\'origine du demandeur, pour le remplacement du passeport ou d\'autres documents perdus ou endommagés par le biais de leur procédure normale de remplacement, et l\'OIS aidera le demandeur dans la mesure de ses capacités. Ces paiements seront effectués par l\'OIS au demandeur sur présentation du reçu de paiement délivré par le gouvernement de son pays d\'origine respectif pour le remplacement de ce passeport ou de ces documents perdus ou endommagés.
              </p>
          </div>
          <div class="sub-title">6. Avis de non-responsabilité</div>

          <div class="sub-section">
              <p class="para-section">
                  À l\'exception du ou des remboursements des frais comme indiqué dans la section ci-dessus, OIS exclut sa responsabilité en relation avec toute demande de visa, y compris la responsabilité dans le cadre d\'un contrat, d\'une négligence, d\'un délit, d\'une loi ou autrement, et y compris toute responsabilité pour tout retard ou échec. de l\'OIS dans le traitement ou le traitement des demandes de visa, la perte ou le retard des passeports et autres documents, les retards impliquant le Haut-commissariat du Nigeria et les rejets de demandes de visa pour quelque raison que ce soit.
              </p>
              <div class="sub-title pl-0">Et pour éviter tout doute</div>
              <div class="sub-title pl-0">6.1 Aucune responsabilité en cas d\'informations incorrectes</div>
              <p class="para-section">
                  OIS ne pourra être tenu responsable de la perte, des retards ou de la non-émission de toute candidature découlant de ou en relation avec (y compris mais sans s\'y limiter) des formulaires de candidature incomplets, des formulaires de candidature incorrectement ou faussement remplis et des pièces justificatives inexactes ou incomplètes.
              </p>
              <div class="sub-title pl-0">6.2 Aucune responsabilité pour les événements hors de notre contrôle</div>
              <p class="para-section">
                  OIS ne sera pas considéré comme étant en rupture de contrat ou négligent ou responsable de quelque manière que ce soit de tout retard ou échec de toute demande ou perte, dommage ou retard de tout passeport ou autre document en raison d\'un accident, d\'un vol, de calamités naturelles (acte de dieu) ou pour toute autre raison indépendante de la volonté et ne résultant pas d\'un défaut délibéré d\'OIS, ou pour la perte ou l\'endommagement de tout passeport ou autre document après sa remise au demandeur.
              </p>
              <div class="sub-title pl-0">6.3 Aucune responsabilité pour les services postaux et de messagerie</div>
              <p class="para-section">
                  OIS ne pourra être tenu responsable de tout retard, perte ou dommage de toute demande de visa, passeport ou autre document, causé par ou survenant alors qu\'une demande, un passeport ou un document est en possession d\'un service postal ou de messagerie tiers. , y compris le transport des demandes de visa, du passeport ou d\'autres documents entre l\'OIS et le haut-commissariat du Nigéria et lors de leur retour par l\'OIS au demandeur.
              </p>
              <div class="sub-title pl-0">6.4 Aucune responsabilité pour l\'évaluation des demandes de visa</div>
              <p class="para-section">
                  OIS n\'est pas impliqué dans le processus d\'évaluation des demandes de visa, ni dans leur octroi ou refus, et ne peut être tenu responsable de tout retard de la Haute Commission du Nigeria dans l\'évaluation, l\'octroi ou le refus de toute demande de visa.
              </p>
              <div class="sub-title pl-0">6.5 Aucune responsabilité pour les coûts et dépenses inutiles</div>
              <p class="para-section">
                  OIS n\'aura aucune responsabilité envers tout demandeur de visa, ou toute autre personne s\'appuyant sur ou bénéficiant d\'une demande de visa, pour tout engagement, coût ou dépense encouru en s\'appuyant sur ou en prévision de la réception d\'un visa nigérian, que ce soit dans un délai particulier ou pas du tout. , y compris, mais sans s\'y limiter, les voyages en avion, les hôtels et autres arrangements de voyage et d\'hébergement, ainsi que tout autre arrangement pris.
              </p>
              <p class="para-section">
                  OIS vous recommande de ne pas acheter de billets ni effectuer de réservations qui ne peuvent pas être annulées avant la délivrance d\'un visa, sauf s\'il s\'agit d\'une exigence spécifique indiquée dans le cadre de la demande de visa, auquel cas des billets ouverts doivent être obtenus.
              </p>
              <div class="sub-title pl-0">6.6 Exclusion générale des pertes et dommages</div>
              <p class="para-section">
                  OIS n\'aura aucune responsabilité (y compris contractuelle ou en cas de négligence) envers tout demandeur de visa, ou toute autre personne s\'appuyant sur ou bénéficiant d\'une demande de visa, pour tout dommage direct, indirect, punitif, accidentel, spécial, consécutif ou tout dommage de quelque nature que ce soit, y compris en cas de retard, d\'égarement, de perte ou d\'endommagement des demandes de visa, des passeports et d\'autres documents, autres que ceux indiqués dans la section 5 ci-dessus.
              </p>
              <p class="para-section">
                  OIS n\'aura aucune responsabilité (y compris contractuelle ou en cas de négligence) envers tout demandeur de visa ou toute autre personne s\'appuyant sur ou bénéficiant d\'une demande de visa pour toute perte de profit, de revenus ou de contrat, ou d\'entreprise, profession ou autre occupation, y compris lorsqu\'ils sont causés par un retard, un égarement, une perte ou un endommagement des demandes de visa, des passeports et d\'autres documents.
              </p>
          </div>
          <div class="sub-title">7. Général</div>
          <div class="sub-section">
              <div class="sub-title pl-0">7.1 Droits des tiers</div>
              <p class="para-section">
                  Rien dans les présentes conditions générales ne bénéficiera ou ne sera applicable par toute personne autre que le demandeur de visa, et la loi de 1999 sur les contrats (droits des tiers) ne s\'appliquera pas.
              </p>
              <div class="sub-title pl-0">7.2 Modifications de ces termes</div>
              <p class="para-section">
                  OIS, à sa seule discrétion, peut changer, amender, annuler ou retirer tout ou partie de ces termes et conditions à tout moment et sans préavis.
              </p>
              <div class="sub-title pl-0">7.3 Loi applicable</div>
              <p class="para-section">
                  Ces termes et conditions et toute demande de visa seront régis et interprétés conformément aux lois des pays dans lesquels nous sommes présents. Toute réclamation ou litige découlant des services fournis par OIS au demandeur sera soumis à la compétence exclusive des tribunaux du pays.
              </p>
          </div>
          <div class="sub-title">8.Plaintes</div>
          <div class="sub-section">
              <p class="para-section">
                  Veuillez adresser toute réclamation au service relation client par e-mail à
              </p>
              <p class="para-section">
                  info@oisservices.com
              </p>
          </div>
        </div>',
      'order_num' => 1,
      'lang' => 'fr',
    ]);
    Content::create([
      'title' => 'PRIVACY POLICY',
      'content' => '
        <div class="main-title">Politique de confidentialité</div>
        <div class="sub-body">
          <div class="sub-title">1. Introduction</div>
          <div class="sub-section">
            <p class="para-section">
              Chez OIS, nous nous engageons à protéger la vie privée et la confidentialité des données personnelles de nos clients. Cette politique de confidentialité décrit comment nous utilisons, divulguons et protégeons les données personnelles que nous obtenons des personnes qui utilisent nos services. Nous respectons les lois applicables en matière de protection des données, y compris le Règlement général sur la protection des données (RGPD), et nous nous efforçons de garantir les normes les plus élevées en matière de confidentialité et de sécurité des données.
            </p>
          </div>
          <div class="sub-title">2. Collecte et utilisation des données</div>
          <div class="sub-section">
            <div class="sub-title pl-0">2.1 Collecte de données personnelles</div>
            <p class="para-section">
              Nous collectons des données personnelles auprès des individus de diverses manières, notamment lorsqu\'ils créent un compte, effectuent un paiement, nous contactent, répondent à des enquêtes, interagissent avec nos sites Web ou applications ou utilisent nos services. Les types de données personnelles que nous pouvons collecter incluent, sans s\'y limiter :
            </p>
            <ul class="para-list">
              <li>Nom, adresse et coordonnées</li>
              <li>Détails du passeport et du visa</li>
              <li>Données biométriques</li>
              <li>Numéros de vérification bancaire</li>
              <li>Détails de la transaction de paiement</li>
              <li>Informations sur la santé (pour les services de santé en ligne)</li>
              <li>Interactions avec nos services et sites Web</li>
              <li>Houston (9894 Bissonnet Street, Suite 745 Houston TX 77036 États-Unis)</li>
              <li>Informations sur l\'emploi ou la profession (à des fins de recrutement)</li>
            </ul>
            <div class="sub-title pl-0">2.2 Finalité du traitement des données</div>
            <p class="para-section">
              Nous traitons les données personnelles aux fins suivantes :
            </p>
            <ul class="para-list">
              <li>
                Pour communiquer avec les particuliers et répondre à leurs demandes de service ou bons de commande.
              </li>
              <li>Fournir une assistance client et répondre aux demandes de renseignements.</li>
              <li>
                Améliorer et personnaliser l\'expérience des individus avec nos services.
              </li>
              <li>Pour traiter les paiements et vérifier les transactions financières.</li>
              <li>
                Se conformer aux obligations légales, y compris les obligations de déclaration aux autorités compétentes.
              </li>
              <li>
                Pour gérer nos systèmes et processus, y compris l’analyse des données, l’audit et le dépannage.
              </li>
              <li>
                Mener des enquêtes et exercer les droits légaux, y compris la prévention et la détection de la fraude.
              </li>
              <li>Développer et améliorer nos produits et services.</li>
            </ul>
            <div class="sub-title pl-0">2.3 Base juridique du traitement</div>
            <p class="para-section">
              Nous traitons les données personnelles sur la base d\'une ou plusieurs des bases juridiques suivantes :
            </p>
            <ul class="para-list">
              <li>
                La nécessité du traitement pour l\'exécution d\'un contrat ou pour entreprendre des démarches précontractuelles à la demande de la personne.
              </li>
              <li>Le respect des obligations légales auxquelles nous sommes soumis.</li>
              <li>
                Consentement fourni par les individus pour des activités de traitement spécifiques.
              </li>
              <li>
                Intérêts légitimes poursuivis par OIS ou par un tiers, à condition que ces intérêts ne soient pas supplantés par les droits et intérêts de l\'individu.
              </li>
            </ul>
          </div>
          <div class="sub-title">3. Partage et divulgation de données</div>
          <div class="sub-section">
            <div class="sub-title pl-0">3.1 Fournisseurs de services tiers</div>
            <p class="para-section">
              Nous pouvons partager des données personnelles avec des prestataires de services tiers de confiance qui nous aident à fournir nos services et à remplir nos obligations. Ces prestataires sont contractuellement tenus de traiter les données personnelles uniquement pour notre compte et conformément à nos instructions.
            </p>
            <div class="sub-title pl-0">3.2 Transferts d\'entreprises</div>
            <p class="para-section">
              En cas de fusion, d\'acquisition ou de vente de tout ou partie de nos actifs, les données personnelles pourront être transférées au tiers concerné dans le cadre de la transaction. Nous prendrons des mesures raisonnables pour garantir la sécurité et la confidentialité des données personnelles lors de ces transferts.
            </p>
            <div class="sub-title pl-0">3.3 Exigences juridiques et de conformité</div>
            <p class="para-section">
              Nous pouvons divulguer des données personnelles si la loi, une ordonnance d\'un tribunal ou une autorité gouvernementale l\'exige. Nous pouvons également partager des données personnelles pour protéger nos droits, notre vie privée, notre sécurité ou nos biens, ou ceux d\'autrui.
            </p>
          </div>
          <div class="sub-title">4. Conservation des données</div>
          <div class="sub-section">
            <p class="para-section">
              Nous conservons les données personnelles pendant la période minimale nécessaire pour atteindre les objectifs décrits dans la présente politique de confidentialité, à moins qu\'une période de conservation plus longue ne soit requise ou autorisée par la loi. Les critères utilisés pour déterminer la durée de conservation appropriée comprennent la nature des données personnelles, les finalités pour lesquelles elles ont été collectées et les exigences légales et réglementaires.
            </p>
          </div>
          <div class="sub-title">5. Sécurité des données</div>
          <div class="sub-section">
            <p class="para-section">
              Nous mettons en œuvre des mesures techniques et organisationnelles appropriées pour protéger les données personnelles contre tout accès, altération, divulgation ou destruction non autorisés. Ces mesures comprennent, sans s\'y limiter, le cryptage, les contrôles d\'accès, les évaluations de sécurité régulières et la formation du personnel sur la protection des données.
            </p>
          </div>
          <div class="sub-title">6. Droits individuels</div>
          <div class="sub-section">
            <p class="para-section">
              Les individus disposent de certains droits concernant leurs données personnelles. Sous réserve de la loi applicable, les individus ont le droit de :
            </p>
            <ul class="para-list">
              <li>Accédez à leurs données personnelles et demandez-en une copie.</li>
              <li>Rectifiez les données personnelles inexactes ou incomplètes.</li>
              <li>Effacer les données personnelles dans certaines circonstances.</li>
              <li>Restreindre ou s\'opposer au traitement des données personnelles.</li>
              <li>
                Portabilité des données (recevoir des données personnelles dans un format structuré, couramment utilisé et lisible par machine).
              </li>
              <li>Retirer le consentement (si le traitement est basé sur le consentement).</li>
            </ul>
            <p class="para-section">
              Pour exercer ces droits ou pour déposer une plainte relative à la confidentialité, les personnes peuvent nous contacter en utilisant les informations fournies dans la section 8.
            </p>
          </div>
          <div class="sub-title">7. Politique de communications marketing et de cookies</div>
          <div class="sub-section">
            <p class="para-section">
              Nous pouvons envoyer des communications marketing aux personnes qui ont donné leur consentement. Les individus peuvent à tout moment refuser de recevoir de telles communications en suivant les instructions fournies dans la communication ou en nous contactant.
            </p>
            <p class="para-section">
              Notre politique en matière de cookies décrit l\'utilisation de cookies et de technologies similaires sur nos sites Web et fournit des informations sur la gestion des préférences en matière de cookies.
            </p>
          </div>
          <div class="sub-title">8. Transferts de données internationaux</div>
          <div class="sub-section">
            <p class="para-section">
              En tant qu\'organisation mondiale, nous pouvons transférer des données personnelles vers des pays en dehors de l\'Espace économique européen (EEE) ou d\'autres régions dotées de lois différentes sur la protection des données. Dans de tels cas, nous veillerons à ce que des garanties appropriées soient en place pour protéger les données personnelles, par exemple en utilisant des clauses contractuelles types approuvées par la Commission européenne ou en nous appuyant sur la certification Privacy Shield des destinataires (le cas échéant).
              </p>
            </div>
          <div class="sub-title">9. Confidentialité des enfants</div>
          <div class="sub-section">
            <p class="para-section">
              Nos services ne s\'adressent pas aux personnes de moins de 16 ans. Nous ne collectons ni ne sollicitons sciemment de données personnelles auprès des enfants. Si nous apprenons que nous avons collecté des données personnelles sur un enfant sans le consentement parental vérifiable, nous prendrons des mesures pour supprimer ces informations.
            </p>
          </div>
          <div class="sub-title">10. Mises à jour de la politique de confidentialité</div>
          <div class="sub-section">
            <p class="para-section">
              Nous pouvons mettre à jour cette politique de confidentialité de temps à autre pour refléter les changements dans nos pratiques de traitement des données ou nos obligations légales. Nous encourageons les individus à consulter périodiquement cette politique de confidentialité pour toute mise à jour. La politique de confidentialité révisée entrera en vigueur à compter de la date à laquelle elle sera publiée sur notre site Web.
            </p>
          </div>
          <div class="sub-title">11. Coordonnées</div>
          <div class="sub-section">
            <p class="para-section">
              Pour toute préoccupation, question, demande ou plainte relative à la confidentialité, veuillez contacter notre délégué à la protection des données à l\'adresse suivante :
            </p>
            <p class="para-section">dataprotection@oisservices.com</p>
            <p class="para-section">
              Nous prenons les questions de confidentialité au sérieux et répondrons rapidement à toute préoccupation ou demande de renseignements. Veuillez noter que cette politique de confidentialité est fournie en anglais pour en faciliter la compréhension. En cas de conflit entre la version anglaise et une version traduite, la version anglaise prévaudra.
            </p>
          </div>
        </div>',
      'order_num' => 1,
      'lang' => 'fr',
    ]);
    Content::create([
      'title' => 'DATA PROJECT',
      'content' => '
        <div class="main-title">
          RGPD et politique de protection des données associée
        </div>
        <div class="sub-body">
          <div class="sub-title">1. Introduction</div>
          <div class="sub-section">
            <p class="para-section">
              Dans ses opérations commerciales quotidiennes, Online Integrated Solutions (OIS) utilise diverses données sur des personnes identifiables, notamment des données sur :
            </p>
            <ul class="para-list">
              <li>
                Employés actuels, passés et potentiels
              </li>
              <li>
                Clients
              </li>
              <li>
                Utilisateurs de ses sites Internet
              </li>
              <li>
                Les abonnés
              </li>
              <li>
                Autres parties prenantes
              </li>
            </ul>
            <p class="para-section">
              Lors de la collecte et de l\'utilisation de ces données, l\'organisation est soumise à diverses lois contrôlant la manière dont ces activités peuvent être menées et les garanties qui doivent être mises en place pour les protéger.
            </p>
            <p class="para-section">
              L’objectif de cette politique est d’exposer la législation pertinente et de décrire les mesures prises par l’OIS pour s’assurer de s’y conformer.
            </p>
            <p class="para-section">
              Ce contrôle s\'applique à tous les systèmes, personnes et processus qui constituent les systèmes d\'information de l\'organisation, y compris les membres du conseil d\'administration, les directeurs, les employés, les fournisseurs et autres tiers qui ont accès aux systèmes OIS.
            </p>
            <p class="para-section">
              Les politiques et procédures suivantes sont pertinentes pour ce document :
            </p>
            <ul class="para-list">
              <li>
                Processus d’évaluation d’impact sur la protection des données
              </li>
              <li>
                Procédure d\'analyse des données personnelles
              </li>
              <li>
                Procédure d’évaluation de l’intérêt légitime
              </li>
              <li>
                Procédure de réponse aux incidents de sécurité de l’information
              </li>
              <li>
                Rôles et responsabilités du RGPD
              </li>
              <li>
                Autres parties prenantes
              </li>
            </ul>
          </div>
          <div class="sub-title">2. Utilisation de la cryptographie</div>
            <div class="sub-section">
            <p class="para-section">
              Lorsque cela convenait à la classification des informations et au support de stockage, des techniques cryptographiques ont été utilisées pour garantir la confidentialité et l\'intégrité des enregistrements.
            </p>
            <p class="para-section">
              Un soin absolu a été pris pour garantir que les clés de chiffrement utilisées pour chiffrer les enregistrements sont stockées en toute sécurité pendant toute la durée de vie des enregistrements concernés et sont conformes à la politique de cryptographie de l\'organisation.
            </p>
            <div class="sub-title pl-0">2.1 Le règlement général de l\'UE sur la protection des données - RGPD</div>
            <p class="para-section">
              Le Règlement général sur la protection des données 2016 (RGPD) est l\'un des textes législatifs les plus importants affectant la manière dont OIS exerce ses activités de traitement de l\'information. Des amendes importantes sont applicables si une violation est réputée avoir eu lieu au titre du RGPD, conçu pour protéger les données personnelles des citoyens de l\'Union européenne. La politique d\'OIS est de garantir que notre conformité au RGPD et aux autres législations pertinentes est claire et démontrable à tout moment.
            </p>
            <div class="sub-title pl-0">2.2 Définitions</div>
            <p class="para-section">
              Il existe au total 26 définitions répertoriées dans le RGPD et il n’est pas approprié de toutes les reproduire ici. Cependant, les définitions les plus fondamentales concernant cette politique sont les suivantes :
            </p>
            <p class="para-section">
              Les données personnelles sont définies comme :
            </p>
            <p class="para-section">
              toute information relative à une personne physique identifiée ou identifiable (« personne concernée ») ; une personne physique identifiable est une personne qui peut être identifiée, directement ou indirectement, notamment par référence à un identifiant tel qu\'un nom, un numéro d\'identification, des données de localisation, un identifiant en ligne ou à un ou plusieurs éléments propres à l\'état physique, physiologique, l\'identité génétique, mentale, économique, culturelle ou sociale de cette personne physique ;
            </p>
            <p class="para-section">
              « traitement » signifie
            </p>
            <p class="para-section">
              toute opération ou ensemble d\'opérations effectuées sur des données personnelles ou sur des ensembles de données personnelles, que ce soit par des moyens automatisés ou non, telles que la collecte, l\'enregistrement, l\'organisation, la structuration, le stockage, l\'adaptation ou la modification, la récupération, la consultation, l\'utilisation, la divulgation par transmission, diffusion ou autre mise à disposition, alignement ou combinaison, restriction, effacement ou destruction ;
            </p>
            <p class="para-section">
              \'contrôleur\' signifie
            </p>
            <p class="para-section">
              la personne physique ou morale, l\'autorité publique, l\'agence ou tout autre organisme qui, seul ou conjointement avec d\'autres, détermine les finalités et les moyens du traitement des données à caractère personnel ; lorsque les finalités et les moyens d\'un tel traitement sont déterminés par le droit de l\'Union ou d\'un État membre, le responsable du traitement ou les critères spécifiques pour sa nomination peuvent être prévus par le droit de l\'Union ou d\'un État membre ;
            </p>
            <div class="sub-title pl-0">2.3 Principes relatifs au traitement des données personnelles</div>
            <p class="para-section">
              Le RGPD repose sur un certain nombre de principes fondamentaux.<br>
              Ceux-ci sont les suivants :
            </p>
            <p class="para-section">
              1. Les données personnelles seront :
            </p>
            <p class="para-section">
              (a) traité de manière licite, loyale et transparente par rapport à la personne concernée (« licéité, loyauté et transparence » );
            </p>
            <p class="para-section">
              (b) collectés à des fins spécifiées, explicites et légitimes et non traités ultérieurement d\'une manière incompatible avec ces finalités ; le traitement ultérieur à des fins d\'archivage dans l\'intérêt public, de recherche scientifique ou historique ou à des fins statistiques, conformément à l\'article 89, paragraphe 1, n\'est pas considéré comme incompatible avec les finalités initiales (« limitation des finalités ») ;
            </p>
            <p class="para-section">
              (c) adéquats, pertinents et limités à ce qui est nécessaire au regard des finalités pour lesquelles ils sont traités (« minimisation des données ») ;
            </p>
            <p class="para-section">
              d) exactes et, si nécessaire, tenues à jour ; toutes les mesures raisonnables doivent être prises pour garantir que les données personnelles inexactes, au regard des finalités pour lesquelles elles sont traitées, soient effacées ou rectifiées sans délai (« exactitude ») ;
            </p>
            <p class="para-section">
              (e) conservées sous une forme permettant l\'identification des personnes concernées pendant une durée n\'excédant pas celle nécessaire aux finalités pour lesquelles les données personnelles sont traitées ; les données à caractère personnel peuvent être conservées pendant des périodes plus longues dans la mesure où elles sont traitées uniquement à des fins d\'archivage dans l\'intérêt public, à des fins de recherche scientifique ou historique ou à des fins statistiques conformément à l\'article 89, paragraphe 1, sous réserve de la mise en œuvre des mesures techniques et organisationnelles appropriées. les mesures requises par le présent règlement afin de sauvegarder les droits et libertés de la personne concernée (« limitation de la conservation » );
            </p>
            <p class="para-section">
              (f) traitées de manière à garantir une sécurité appropriée des données personnelles, y compris la protection contre le traitement non autorisé ou illégal et contre la perte, la destruction ou les dommages accidentels, en utilisant des mesures techniques ou organisationnelles appropriées (« intégrité et confidentialité »).
            </p>
            <p class="para-section">
              (f) traitées de manière à garantir une sécurité appropriée des données personnelles, y compris la protection contre le traitement non autorisé ou illégal et contre la perte, la destruction ou les dommages accidentels, en utilisant des mesures techniques ou organisationnelles appropriées (« intégrité et confidentialité »).
            </p>
            <p class="para-section">
              OIS veillera à respecter l\'ensemble de ces principes tant dans les traitements qu\'il réalise actuellement que dans le cadre de la mise en place de nouveaux modes de traitement tels que de nouveaux systèmes informatiques.
            </p>
            <div class="sub-title pl-0">2.4 Droits de l\'individu</div>
            <p class="para-section">
              La personne concernée dispose également de droits en vertu du RGPD. Ceux-ci consistent en :
            </p>
            <p class="para-section">
              Le droit d\'être informé<br>Le droit d\'accès<br>Le droit de rectification<br>Le droit à l\'effacement<br>Le droit à la limitation du traitement<br>Le droit à la portabilité des données<br>Le droit d\'opposition<br> br>Droits relatifs à la prise de décision automatisée et au profilage</p>
            <p class="para-section">
              Chacun de ces droits est soutenu par des procédures appropriées au sein de l\'OIS qui permettent de prendre les mesures requises dans les délais indiqués dans le RGPD.
            </p>
            <p class="para-section">
              Ces délais sont présentés dans le tableau 1.
            </p>
            <table>
              <thead>
                <tr>
                  <th>Demande de la personne concernée</th>
                  <th>Échelle de temps</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>Le droit d\'être informé</td>
                  <td>Lorsque les données sont collectées (si fournies par la personne concernée) ou dans un délai d\'un mois (si elles ne sont pas fournies par la personne concernée)</td>
                </tr>
                <tr>
                  <td>Le droit d\'accès</td>
                  <td>Un mois</td>
                </tr>
                <tr>
                  <td>Le droit de rectification</td>
                  <td>Un mois</td>
                </tr>
                <tr>
                  <td>Le droit à l\'effacement</td>
                  <td>Sans retard injustifié</td>
                </tr>
                <tr>
                  <td>Le droit de restreindre le traitement</td>
                  <td>Sans retard injustifié</td>
                </tr>
                <tr>
                  <td>Le droit à la portabilité des données</td>
                  <td>Un mois</td>
                </tr>
                <tr>
                  <td>Le droit d\'opposition</td>
                  <td>Dès réception de l\'objection</td>
                </tr>
              </tbody>
            </table>
            <p class="para-section">
              Tableau 1 – Délais pour les demandes des personnes concernées
            </p>
            <div class="sub-title pl-0">2.5 Licéité du traitement</div>
            <p class="para-section">
              Il existe six manières alternatives d\'établir la licéité d\'un cas spécifique de traitement de données personnelles dans le cadre du RGPD. La politique de l\'OIS est d\'identifier la base appropriée du traitement et de la documenter, conformément au règlement. Les options sont décrites brièvement dans les sections suivantes.
            </p>
            <div class="sub-title pl-0">2.5.1 Consentement</div>
            <p class="para-section">
              Sauf si cela est nécessaire pour une raison autorisée par le RGPD, OIS obtiendra toujours le consentement explicite d\'une personne concernée pour collecter et traiter ses données. Dans le cas d\'enfants de moins de 16 ans (un âge inférieur peut être autorisé dans certains États membres de l\'UE), le consentement parental sera obtenu. Des informations transparentes sur notre utilisation de leurs données personnelles seront fournies aux personnes concernées au moment où le consentement est obtenu et leurs droits concernant leurs données expliqués, comme le droit de retirer leur consentement. Ces informations seront fournies sous une forme accessible, rédigées dans un langage clair et gratuitement. Si les données personnelles ne sont pas obtenues directement auprès de la personne concernée, ces informations seront fournies à la personne concernée dans un délai raisonnable après l\'obtention des données et définitivement dans un délai d\'un mois.
            </p>
            <div class="sub-title pl-0">2.5.2 Exécution d\'un contrat</div>
            <p class="para-section">
              Lorsque les données personnelles collectées et traitées sont nécessaires à l\'exécution d\'un contrat avec la personne concernée, le consentement explicite n\'est pas requis. Ce sera souvent le cas lorsque le contrat ne peut être exécuté sans les données personnelles en question, par ex. une livraison ne peut être effectuée sans adresse de livraison.
            </p>
            <div class="sub-title pl-0">2.5.3 Obligation légale</div>
            <p class="para-section">
              Si la collecte et le traitement des données personnelles sont nécessaires pour respecter la loi, un consentement explicite n\'est pas requis. Cela peut être le cas pour certaines données liées à l\'emploi et à la fiscalité par exemple, ainsi que pour de nombreux domaines abordés par le secteur public.
            </p>
            <div class="sub-title pl-0">2.5.4 Intérêts vitaux de la personne concernée</div>
            <p class="para-section">
              Dans le cas où les données personnelles sont nécessaires à la protection des intérêts vitaux de la personne concernée ou d\'une autre personne physique, elles peuvent alors être utilisées comme base licite du traitement. OIS conservera des preuves raisonnables et documentées attestant que tel est le cas, chaque fois que cette raison est utilisée comme base légale du traitement des données personnelles. À titre d\'exemple, cela peut être utilisé dans certains aspects de la protection sociale, en particulier dans le secteur public.
            </p>
            <div class="sub-title pl-0">2.5.5 Tâche réalisée dans l\'intérêt public</div>
            <p class="para-section">
              Lorsque l\'OIS doit effectuer une tâche qu\'il estime être dans l\'intérêt public ou dans le cadre d\'une mission officielle, le consentement de la personne concernée ne sera pas demandé. L’évaluation de l’intérêt public ou de la fonction officielle sera documentée et mise à disposition comme preuve si nécessaire.
            </p>
            <div class="sub-title pl-0">2.5.6 Intérêts légitimes</div>
            <p class="para-section">
              Si le traitement de données personnelles spécifiques est dans l\'intérêt légitime d\'OIS et est jugé ne pas affecter de manière significative les droits et libertés de la personne concernée, cela peut alors être défini comme la raison légitime du traitement. Encore une fois, le raisonnement derrière ce point de vue sera documenté.
            </p>
            <div class="sub-title pl-0">2.6 Confidentialité dès la conception</div>
            <p class="para-section">
              OIS a adopté le principe de confidentialité dès la conception et veillera à ce que la définition et la planification de tous les systèmes nouveaux ou considérablement modifiés qui collectent ou traitent des données personnelles soient soumises à une prise en compte appropriée des questions de confidentialité, y compris la réalisation d\'un ou plusieurs impacts sur la protection des données. évaluations.
            </p>
            <p class="para-section">
              L’analyse d’impact sur la protection des données comprendra :
            </p>
            <p class="para-section">
              Examen de la manière dont les données personnelles seront traitées et à quelles fins<br>Évaluation de la question de savoir si le traitement proposé des données personnelles est à la fois nécessaire et proportionné à la ou aux finalités
            </p>
            <p class="para-section">
              Évaluation des risques pour les individus lors du traitement des données personnelles<br>Quels contrôles sont nécessaires pour répondre aux risques identifiés et démontrer le respect de la législation<br>L\'utilisation de techniques telles que la minimisation des données et la pseudonymisation sera envisagée le cas échéant et appropriée.
            </p>
            <div class="sub-title pl-0">2.7 Contrats impliquant le traitement de données personnelles</div>
            <p class="para-section">
              OIS veillera à ce que toutes les relations qu\'elle noue et qui impliquent le traitement de données personnelles soient soumises à un contrat documenté qui comprend les informations et conditions spécifiques requises par le RGPD. Pour plus d\'informations, consultez le Contrôleur-Sous-traitant RGPD
              Politique d\'accord
            </p>
            <div class="sub-title pl-0">2.8 Transferts internationaux de données personnelles</div>
            <p class="para-section">
              Les transferts de données personnelles en dehors de l\'Union européenne seront soigneusement examinés avant le transfert afin de garantir qu\'ils respectent les limites imposées par le RGPD. Cela dépend en partie du jugement de la Commission européenne quant à l\'adéquation des garanties pour les données personnelles applicables dans le pays de destination et cela peut changer avec le temps.<br>Les transferts internationaux de données intra-groupe seront soumis aux accords juridiquement contraignants visés. aux règles d\'entreprise contraignantes (BCR) qui confèrent des droits exécutoires aux personnes concernées.
            </p>
            <div class="sub-title pl-0">2.9 Délégué à la protection des données</div>
            <p class="para-section">
              Un rôle défini de délégué à la protection des données (DPO) est requis par le RGPD si une organisation est une autorité publique, si elle effectue une surveillance à grande échelle ou si elle traite des types de données particulièrement sensibles à grande échelle. Le DPO doit avoir un niveau de connaissances approprié et peut être soit une ressource interne, soit externalisé auprès d\'un prestataire de services approprié.
            </p>
            <p class="para-section">
              Sur la base de ces critères, l\'OIS a nommé un délégué à la protection des données, dont voici les coordonnées :
            </p>
            <p class="para-section">
              Nom : Archibald Coker<br>Email : acoker@oisservices.com<br>Contact : +44 (0) 207 832 0001
            </p>
            <div class="sub-title pl-0">2.10 Notification de violation</div>
            <p class="para-section">
              La politique de l\'OIS est d\'être juste et proportionnée lors de l\'examen des mesures à prendre pour informer les parties concernées concernant les violations de données personnelles. Conformément au RGPD, lorsqu\'il est avéré qu\'une violation est susceptible d\'entraîner un risque pour les droits et libertés des personnes, l\'autorité de contrôle compétente en sera informée dans un délai de 72 heures. Cela sera géré conformément à notre procédure de réponse aux incidents de sécurité de l\'information qui définit le processus global de gestion des incidents de sécurité de l\'information.
            </p>
            <p class="para-section">
              En vertu du RGPD, l\'APD concernée a le pouvoir d\'imposer une série d\'amendes allant jusqu\'à quatre pour cent du chiffre d\'affaires mondial annuel ou vingt millions d\'euros, selon le montant le plus élevé, en cas de violation de la réglementation.
            </p>
            <div class="sub-title pl-0">2.11 Aborder la conformité au RGPD</div>
            <p class="para-section">
              Les actions suivantes sont entreprises pour garantir qu\'OIS se conforme à tout moment au principe de responsabilité du RGPD :
            </p>
            <ul class="para-list">
              <li>
                La base juridique du traitement des données personnelles est claire et sans ambiguïté
              </li>
              <li>
                Un délégué à la protection des données est nommé avec une responsabilité spécifique pour la protection des données dans l\'organisation (si nécessaire)
              </li>
              <li>
                Tous les membres du personnel impliqués dans le traitement des données personnelles comprennent leurs responsabilités en matière de respect des bonnes pratiques en matière de protection des données.
              </li>
              <li>
                Une formation à la protection des données a été dispensée à l’ensemble du personnel
              </li>
              <li>
                Les règles concernant le consentement sont respectées
              </li>
              <li>
                Des itinéraires sont disponibles pour les personnes concernées souhaitant exercer leurs droits concernant les données personnelles et ces demandes sont traitées efficacement.
              </li>
              <li>
                Des revues régulières des procédures impliquant des données personnelles sont effectuées
              </li>
              <li>
                La confidentialité dès la conception est adoptée pour tous les systèmes et processus nouveaux ou modifiés
              </li>
            </ul>
            <p class="para-section">
              La documentation suivante sur les activités de traitement est enregistrée :
            </p>
            <ul class="para-list">
              <li>
                Nom de l\'organisation et détails pertinents
              </li>
              <li>
                Finalités du traitement des données personnelles
              </li>
              <li>
                Catégories de personnes et données personnelles traitées
              </li>
              <li>
                Catégories de destinataires de données personnelles
              </li>
              <li>
                Accords et mécanismes pour les transferts de données personnelles vers des pays tiers, y compris les détails des contrôles en place
              </li>
              <li>
                Calendriers de conservation des données personnelles
              </li>
              <li>
                Contrôles techniques et organisationnels pertinents en place
              </li>
            </ul>
            <p class="para-section">
              Ces actions sont revues régulièrement dans le cadre du processus de gestion concerné par la protection des données.
            </p>
          </div>
          <div class="sub-title">Protection des données associées</div>
          <div class="sub-section">
            <div class="sub-title pl-0">Principes de protection des données</div>
            <p class="para-section">
              Il existe 8 principes de protection des données qui garantissent que les organisations collectent, stockent et traitent les données personnelles de manière à protéger la confidentialité des clients. Ces principes sont énoncés à l’annexe 1 de la Loi et sont les suivants :
            </p>
            <p class="para-section">
              je. Les données doivent être traitées de manière équitable et licite.<br>Nous avons des motifs légitimes pour obtenir, stocker et traiter les données des clients, à savoir pour vous aider à obtenir un passeport, un visa et à d\'autres fins autorisées par la loi et les contrats entre nous et nos clients. . Nous garantissons que vos données ne seront pas utilisées à des fins illégales.
            </p>
            <p class="para-section">
              ii. Les données personnelles ne seront obtenues que pour une ou plusieurs finalités spécifiées et licites, et ne seront pas traitées ultérieurement d\'une manière incompatible avec cette ou ces finalités.<br>En raison de la nature de notre travail, la finalité pour laquelle vous donnez pour nous, vos données personnelles sont évidentes pour vous et pour nous. Nous n\'utiliserons pas vos données à d\'autres fins incompatibles avec la finalité initiale, sauf si vous nous donnez au préalable votre consentement ou si nous y sommes contraints par la loi.
            </p>
            <p class="para-section">
              iii. Les données personnelles doivent être adéquates, pertinentes et non excessives par rapport à la ou aux finalités pour lesquelles elles sont traitées.<br>Nous ne prendrons que les informations que nous considérons pertinentes et suffisantes pour exécuter notre contrat avec vous.
            </p>
            <p class="para-section">
              iv. Les données personnelles doivent être exactes et, si nécessaire, tenues à jour.<br>Nous veillons à ce que les données personnelles que vous nous fournissez soient correctes et non trompeuses. Nous y parvenons en vous donnant la possibilité de confirmer les informations que vous nous communiquez et également en demandant des justificatifs lorsque cela est nécessaire. S\'il y a des changements pertinents dans vos données personnelles, par exemple un changement de nom ou de nationalité, veuillez nous en informer dès que possible afin que nous puissions mettre à jour votre dossier.
            </p>
            <p class="para-section">
              v. Les données personnelles traitées à quelque fin que ce soit ne doivent pas être conservées plus longtemps que nécessaire à cette ou ces fins.<br>Nous examinerons, de temps à autre, notre base de données pour voir si certaines données personnelles sont encore nécessaires. à stocker par nos soins. Si la finalité pour laquelle ils ont été stockés a été atteinte et que nous considérons qu\'il n\'est plus nécessaire de continuer à les stocker, nous les supprimerons en toute sécurité.
            </p>
            <p class="para-section">
              vi. Les données personnelles doivent être traitées conformément aux droits des personnes concernées en vertu de la présente loi.<br>Nous traiterons vos données personnelles de manière à vous permettre d\'effectuer l\'une des opérations suivantes :
            </p>
            <ul class="para-list-digit">
              <li>
                un droit d\'accès à une copie de vos données personnelles, communément appelé « demande d\'accès au sujet ». Les frais actuels sont de 10 £ par demande standard et nous visons à les fournir dans les 14 jours. La demande d\'accès au sujet doit être adressée à info@oisservices.com par e-mail ou par courrier. Le chef du centre, OIS Services, 56-57 Fleet Street, EC4Y 1JU, Londres </li>
              <li>
                un droit de vous opposer au traitement de vos données personnelles d’une manière susceptible de vous causer un dommage ou une détresse ;
              </li>
              <li>
                un droit d\'empêcher le traitement de vos données personnelles d\'une manière incompatible avec la ou les finalités initiales ;
              </li>
              <li>
                un droit de s\'opposer aux décisions prises par des moyens automatisés ;
              </li>
              <li>
                un droit, le cas échéant, de faire rectifier, bloquer ou supprimer des données personnelles inexactes, et
              </li>
              <li>
                le droit de réclamer une indemnisation pour les dommages causés par une violation de la loi.
              </li>
            </ul>
            <p class="para-section">
              vii. Sécurité des données personnelles<br>Vos données personnelles sont conservées dans un environnement très sécurisé tant physiquement que techniquement. Les zones où sont conservées les données personnelles sont interdites à toutes personnes non autorisées. L\'accès à ces parties des locaux ne peut être obtenu que par clé électronique délivrée uniquement aux personnes autorisées. Vos données personnelles ne sont accessibles sur le système que par les personnes autorisées. Seules ces personnes autorisées peuvent modifier, divulguer ou détruire vos données personnelles. En outre, ces personnes autorisées ne peuvent exercer aucune de ces fonctions que dans le cadre de leurs fonctions légales. Par conséquent, les risques que vos données personnelles soient traitées illégalement ou accidentellement endommagées, détruites ou perdues sont très minimes.
              De plus, notre politique est de garantir que :
            </p>
            <ul class="para-list-digit">
              <li>
                chaque employé autorisé ayant accès aux données personnelles dispose de son propre mot de passe qui n\'est pas partagé avec d\'autres personnes,
              </li>
              <li>
                un logiciel de sécurité et un pare-feu approuvés sont utilisés pour protéger nos données,
              </li>
              <li>
                les données personnelles imprimées non utilisées sont déchiquetées,
              </li>
              <li>
                nous décourageons le stockage des données personnelles sur les ordinateurs portables et autres appareils et supports mobiles, mais si c\'est le cas, elles doivent être verrouillées en toute sécurité et ne pas être sorties du bureau.
              </li>
            </ul>
            <p class="para-section">
              viii. Transfert de données personnelles en dehors de l\'Espace économique européen<br>Vos données personnelles ne seront pas transférées vers un pays ou un territoire en dehors de l\'Espace économique européen à moins que ce pays ou territoire n\'assure un niveau adéquat de protection des droits et libertés des personnes concernées en relation avec au traitement des données personnelles. Seuls quelques pays en dehors de l’EEE ont été reconnus comme disposant de niveaux de protection adéquats pour le traitement des données personnelles comparables à ceux des pays de l’EEE. Lorsque nous transférons des données personnelles vers les États-Unis, nous veillons à ce que le destinataire soit signataire du programme Safe Harbor du Département américain du Commerce. Ce système est reconnu par la Commission européenne comme offrant une protection adéquate aux personnes concernées. En ce qui concerne les autres pays en dehors de l\'EEE qui n\'ont pas été acceptés comme disposant d\'une sécurité et de garanties équivalentes pour le traitement des données personnelles, soit nous signons un contrat séparé, dont les termes sont approuvés par les directives européennes, soit nous veillons à ce qu\'il existe une clause dans le contrat qui protège le traitement des données personnelles de tous nos clients.
            </p>
          </div>
        </div>',
      'order_num' => 1,
      'lang' => 'fr',
    ]);

    //de
    Content::create([
      'title' => 'ABOUT OIS',
      'content' => '<p class="title body-section">Innovative Softwarelösungen branchenübergreifend.</p>',
      'order_num' => 1,
      'lang' => 'de',
    ]);
    Content::create([
      'title' => 'ABOUT OIS',
      'content' => '<p class="sub-title">OIS (Online-Integrierte Dienste)</p>
                <p class="description mt-4">OIS (Online Integrated Solutions) steht als führender Anbieter modernster Softwarelösungen für verschiedene Branchen an der Spitze der Innovation. Unsere Reise begann als Visa-Antragszentrum und Support-Dienstleister und seitdem haben wir uns weiterentwickelt, um unsere Dienstleistungen auf alle diplomatischen Vertretungen Nigerias weltweit auszudehnen. Unser Erfolg basiert auf fortschrittlicher Technologie, beispielloser Qualität, Skalierbarkeit und der nahtlosen Übertragbarkeit unserer Lösungen.</p>
                <p class="description mb-0 mt-4">Was OIS auszeichnet, ist unsere globale Präsenz, die eine mühelose Integration von Anwendungen auf weltweiter Ebene ermöglicht. Unser Engagement für Spitzenleistungen geht über die Einwanderungsdienstleistungen hinaus, da wir auf eine solide Erfolgsbilanz bei Bankplattformen zurückblicken können. Als wichtiger Vermittler für nigerianische Banken bieten wir wichtige Dienstleistungen für gebietsfremde Nigerianer und Personen anderer Nationalitäten im Ausland an, die ihre nigerianischen Bankkonten eröffnen oder reaktivieren möchten.</p>
                <p class="description mb-0 mt-4">Bei OIS sind wir ständig bestrebt, Branchenstandards neu zu definieren und bieten eine umfassende Suite von Lösungen an, die unser Engagement für Exzellenz und technologische Kompetenz widerspiegeln. Begleiten Sie uns auf einer Reise beispielloser Servicebereitstellung und globaler Konnektivität.</p>',
      'order_num' => 2,
      'lang' => 'de',
    ]);
    Content::create([
      'title' => 'ABOUT OIS',
      'content' => '<p class="description">Bei OIS sind wir sehr stolz auf unser unerschütterliches Engagement für außergewöhnliche Servicebereitstellung und Spitzentechnologie. Unser umfassendes Leistungsspektrum geht über Visa- und Passlösungen hinaus und umfasst Bildungs-, Gesundheits- und Bankplattformen. Wir glauben an die Vereinfachung von Prozessen. Um dies zu erreichen, bieten wir ein optimiertes Bewerbungserlebnis durch unser benutzerfreundliches Online-Portal, ein nahtloses Zahlungssystem und Echtzeit-Updates.</p>
                <p class="description mt-4 mb-0">Für diejenigen, die eine Bankverifizierungsnummer (BVN) erhalten möchten, sorgt unser Online-Antragsverfahren in Verbindung mit der SMS-Zustellung für ein effizientes und problemloses Erlebnis.</p>
                <p class="description mt-4 mb-0">Im Bereich der Finanzdienstleistungen stechen unsere elektronischen Geldtransferdienste hervor. Wir bieten eine sichere und kostengünstige Möglichkeit für Online-Geldtransfers und unterstützen verschiedene Methoden wie Bargeldabholung, Kryptowährungstransaktionen, Banküberweisungen, mobile Geldtransaktionen und Aufladungen von Sendezeit. Erleben Sie mit OIS den Komfort moderner, sicherer und flexibler Finanzlösungen, die auf Ihre vielfältigen Bedürfnisse zugeschnitten sind.</p>',
      'order_num' => 3,
      'lang' => 'de',
    ]);
    Content::create([
      'title' => 'ABOUT OIS',
      'content' => '<p class="description mb-0">Bei OIS steht das Wohlbefinden unserer Kunden im Mittelpunkt und unser Engagement erstreckt sich auch auf die Bereitstellung erstklassiger E-Health- und Wellness-Dienstleistungen. Tauchen Sie mit unserem Angebotsspektrum in einen umfassenden Gesundheitsansatz ein:</p>
                <p class="description mt-0 mb-0"><b>Telemedizinische Dienste:</b></p>
                <p class="description mt-0 mb-0 ml-4">• Erleben Sie Gesundheitsversorgung zu Ihren Bedingungen mit unseren telemedizinischen Diensten. Verbinden Sie sich nahtlos mit medizinischem Fachpersonal durch virtuelle Konsultationen, schalten Sie personalisierte Diätpläne, kuratierte Trainingsroutinen und unschätzbare Unterstützung für die psychische Gesundheit frei. Ihr Wohlbefinden steht für uns an erster Stelle und unsere telemedizinischen Dienste bringen Gesundheitsexpertise direkt zu Ihnen.</p>
                <p class="description mt-0 mb-0"><b>Gesundheitsüberwachungsgeräte:</b></p>
                <p class="description mt-0 mb-0 ml-4">• Bleiben Sie mit unseren Gesundheitsüberwachungsgeräten informiert und proaktiv über Ihre Gesundheit. Mit diesen hochmodernen Tools können Sie Vitalfunktionen verfolgen und so wertvolle Einblicke in Ihre allgemeine Gesundheit gewinnen. Stärken Sie sich mit datengesteuerten Entscheidungen für einen gesünderen Lebensstil.</p>
                <p class="description mt-0 mb-0"><b>Integriertes Wellness-Programm:</b></p>
                <p class="description mt-0 mb-0 ml-4">• Unser Wellness-Programm ist ein ganzheitlicher Zufluchtsort für Gesundheit und integriert die Unterstützung der psychischen Gesundheit nahtlos in Ihre Reise zum Wohlbefinden. Über die körperliche Gesundheit hinaus legen wir Wert auf das geistige Wohlbefinden und fördern einen ausgewogenen und umfassenden Ansatz für das allgemeine Wohlbefinden.</p>
                <p class="description mt-0 mb-0">Unsere Mission ist es, nicht nur modernste Softwarelösungen bereitzustellen, sondern auch ein vertrauenswürdiger Verbündeter bei Ihrem Streben nach Gesundheit und Wohlbefinden zu sein. Durch die Vereinfachung von Prozessen und die Verbesserung der Erfahrungen in allen Branchen setzen wir uns dafür ein, jeden Aspekt Ihres Lebens positiv zu beeinflussen. Willkommen in einer Welt, in der Innovation auf Wohlbefinden trifft.</p>
                <p class="description mt-4 mb-5">Bei OIS ist es unser unerschütterliches Engagement, innovative Softwarelösungen zu entwickeln, die nicht nur Prozesse rationalisieren, sondern auch Prozesse vereinfachen und die Erfahrungen in verschiedenen Branchen verbessern.</p>',
      'order_num' => 4,
      'lang' => 'de',
    ]);
    Content::create([
      'title' => 'SERVICES',
      'content' => '<p class="title body-section">Wir helfen Unternehmen und Einzelpersonen bei der Bewältigung komplexer Herausforderungen.</p>',
      'order_num' => 1,
      'lang' => 'de',
    ]);
    Content::create([
      'title' => 'SERVICES',
      'content' => '<p class="sub-title">Bearbeitung von Visa- und Reisepassanträgen:</p>
                <p class="description mb-0">Bei Online Integrated Solutions (OIS) gelten wir als globaler Vorreiter bei revolutionären Softwarelösungen, deren Ziel es ist, Unternehmen und Einzelpersonen bei der Bewältigung komplexer Herausforderungen zu unterstützen. Unser tiefgreifender Einfluss zeigt sich insbesondere im Bereich der VISA-Antragsverarbeitung, wo wir die Leistungsfähigkeit fortschrittlicher Algorithmen für maschinelles Lernen (ML) nutzen, um die Effizienz, Genauigkeit und Skalierbarkeit zu verbessern und letztendlich das Kundenerlebnis insgesamt zu verbessern. Hier sind Schlüsselbereiche, in denen unser innovativer Ansatz für maschinelles Lernen zu transformativen Verbesserungen führen kann:</p>
                <p class="description mt-0 mb-0 ml-4">• Datenverarbeitung und -validierung.</p>
                <p class="description mb-0 ml-4">• Entdeckung eines Betruges.</p>
                <p class="description mb-0 ml-4">• Biometrische Identifizierung.</p>
                <p class="description mb-0 ml-4">• Verfolgung des Bewerbungsstatus.</p>
                <p class="description mb-5 mt-4">Bei OIS stellen wir uns eine Zukunft vor, in der die Technologie die Erwartungen nicht nur erfüllt, sondern übertrifft, und unser Engagement, die Grenzen der Innovation zu verschieben, stellt sicher, dass unsere Kunden und Benutzer von den fortschrittlichsten, effizientesten und sichersten verfügbaren Lösungen für die Bearbeitung von Visa- und Passanträgen profitieren.</p>',
      'order_num' => 2,
      'lang' => 'de',
    ]);
    Content::create([
      'title' => 'SERVICES',
      'content' => '<p class="sub-title">ANTRAGSVERARBEITUNG FÜR DIE BANKPRÜFNUMMER (BVN):</p>
                <p class="description mb-0">In unserem unermüdlichen Streben nach nahtlosen Dienstleistungen erkennen wir das transformative Potenzial des maschinellen Lernens, insbesondere bei der Optimierung unseres BVN-Antragsprozesses (Bank Verification Number). Wir sind uns der überragenden Bedeutung einer schnellen und zugänglichen BVN-Ausgabe für unsere Kunden bewusst und treiben uns daher an, dieses entscheidende Verfahren kontinuierlich zu verfeinern und zu beschleunigen. Durch die Nutzung der Möglichkeiten des maschinellen Lernens wollen wir sowohl die Genauigkeit als auch die Effizienz der BVN-Registrierungen erhöhen und gleichzeitig die mit Fehlern und betrügerischen Aktivitäten verbundenen Risiken mindern. Hier sind Schlüsselbereiche, in denen unsere Einbindung von maschinellem Lernen erhebliche Auswirkungen verspricht:</p>
                <p class="description mt-0 mb-0 ml-4">• Datenverarbeitung und -validierung.</p>
                <p class="description mt-0 mb-0 ml-4">• Prädiktive Analytik.</p>
                <p class="description mt-0 mb-0 ml-4">• Entdeckung eines Betruges.</p>
                <p class="description mt-4 mb-5">Im Mittelpunkt unseres Engagements steht das Engagement, unseren Kunden ein beispielloses BVN-Anwendungserlebnis zu bieten – zeitnah, präzise und vor potenziellen Risiken geschützt. Durch den Einsatz von maschinellem Lernen begeben wir uns auf eine Reise, um die Standards für Effizienz und Sicherheit bei der BVN-Ausgabe neu zu definieren.</p>',
      'order_num' => 3,
      'lang' => 'de',
    ]);
    Content::create([
      'title' => 'SERVICES',
      'content' => '<p class="sub-title">ERHÖHUNG DER SERVICE-EXZELLENZ MIT KI-UNTERSTÜTZTEN CHATBOTS:</p>
                <p class="description">Wir freuen uns, unsere neueste Innovation vorzustellen – den AI Chatbot – eine entscheidende Weiterentwicklung, die den Kundenservice und Support verändern wird. Dieser hochmoderne Chatbot nutzt die Leistungsfähigkeit maschineller Lernalgorithmen und bietet Kunden eine personalisierte und effiziente Möglichkeit zur Unterstützung. Unser Chatbot soll das Kundenerlebnis revolutionieren, indem er schnelle und präzise Antworten auf Anfragen liefert und Probleme mit minimaler Abhängigkeit von menschlichem Eingreifen löst.</p>
                <p class="description mt-4 mb-0">Hauptmerkmale und Vorteile:</p>
                <p class="description mt-0 mb-0 ml-4">• Schnelle und genaue Antworten.</p>
                <p class="description mt-0 mb-0 ml-4">• Erreichbarkeit rund um die Uhr.</p>
                <p class="description mt-0 mb-0 ml-4">• Eliminierung von Wartezeiten.</p>
                <p class="description mt-0 mb-0 ml-4">• Vielseitige Anfragebearbeitung.</p>
                <p class="description mt-4 mb-5">Dieser KI-Chatbot stellt ein Engagement für die Neudefinition von Servicestandards dar und stellt sicher, dass unsere Kunden eine nahtlose und effiziente Interaktion mit unserer Marke erleben. Während sich die Technologie ständig weiterentwickelt, bleiben wir an der Spitze und nutzen innovative Lösungen, um Ihre Customer Journey zu verbessern. Willkommen in einer neuen Ära der Personalisierung und Reaktionsfähigkeit</p>',
      'order_num' => 4,
      'lang' => 'de',
    ]);
    Content::create([
      'title' => 'SERVICES',
      'content' => '<p class="sub-title">E-HEALTH UND WELLNESS DURCH SPITZENTECHNOLOGIE ERHÖHEN</p>
                <p class="description mb-0">Wir begeben uns auf eine Reise der kontinuierlichen Verbesserung und sind bestrebt, unsere E-Health- und Wellness-Dienste durch die Integration fortschrittlicher Technologie zu revolutionieren. Entdecken Sie die unzähligen Möglichkeiten, wie diese Innovationen Sie dabei unterstützen können, optimale Gesundheit und Wohlbefinden aufrechtzuerhalten:</p>
                <p class="description mt-0 mb-0">1. Telemedizinische Dienste:</p>
                <p class="description mb-0 ml-4">• Tauchen Sie mit unseren fortschrittlichen Systemen in die Zukunft des Gesundheitswesens ein. Präzision und Personalisierung stehen im Vordergrund, da unsere telemedizinischen Dienste Gesundheitsprobleme genau diagnostizieren und maßgeschneiderte Behandlungspläne liefern, die auf Ihre individuellen Bedürfnisse zugeschnitten sind.</p>
                <p class="description mt-0 mb-0">2. Wellness-Programm:</p>
                <p class="description mb-0 ml-4">• Verfolgen Sie mit unserem bahnbrechenden Wellnessprogramm einen ganzheitlichen Ansatz für Ihr Wohlbefinden. Unsere sichere und dezentrale Plattform nutzt das transformative Potenzial der Blockchain- und Web3-Technologie und bietet personalisierte Diätpläne, maßgeschneiderte Trainingsprogramme und umfassende Unterstützung für die psychische Gesundheit. Begeben Sie sich auf eine Wellness-Reise, die so individuell ist wie Sie.</p>
                <p class="description mt-0 mb-0">3. Gesundheitsüberwachungsgeräte:</p>
                <p class="description mb-0 ml-4">• Entfesseln Sie die Kraft der KI mit unseren Gesundheitsüberwachungsgeräten. Diese intelligenten Systeme analysieren die von verschiedenen Geräten gesammelten Daten und geben Ihnen personalisiertes Feedback und aufschlussreiche Empfehlungen. Verändern Sie die Art und Weise, wie Sie Ihre Gesundheit überwachen, mit Technologie, die sich mit Ihnen weiterentwickelt.</p>
                <p class="description mt-4 mb-5">An der Schnittstelle von Innovation und Gesundheit stellen wir uns eine Zukunft vor, in der Technologie jeden Aspekt Ihres Wohlbefindens verbessert. Unser Ziel ist es, Sie mit personalisierten, sicheren und hochmodernen Lösungen zu unterstützen, die die Standards von E-Health und Wellness neu definieren. Willkommen in einem Bereich, in dem Ihre Gesundheit nicht nur Priorität hat – sie ist ein persönliches Erlebnis.</p>',
      'order_num' => 5,
      'lang' => 'de',
    ]);
    Content::create([
      'title' => 'SERVICES',
      'content' => '<p class="sub-title">REVOLUTIONISIERUNG DES ELEKTRONISCHEN GELDTRANSFERS MIT BLOCKCHAIN- UND WEB3-TECHNOLOGIEN</p>
                <p class="description">OIS kündigt stolz eine bahnbrechende Verbesserung unseres elektronischen Geldtransferdienstes durch die Integration modernster Blockchain- und Web3-Technologien an. Diese strategische Weiterentwicklung erhöht den Standard unseres Service und bietet Kunden ein beispielloses Maß an Transparenz und Sicherheit.</p>
                <p class="description mt-4 mb-0">Wichtige Fortschritte:</p>
                <p class="description mt-0 mb-0 ml-4">• Unveränderliche Ledger-Aufzeichnung.</p>
                <p class="description mt-0 mb-0 ml-4">• Schnelle, sichere und kostengünstige Optionen.</p>
                <p class="description mt-0 mb-0 ml-4">• Erhöhte Flexibilität und Komfort.</p>
                <p class="description mt-4 mb-5">Bei OIS setzen wir uns dafür ein, die Landschaft der elektronischen Finanzdienstleistungen neu zu definieren. Die Integration von Blockchain und Web3 ist ein Beweis für unser Engagement für Innovation und stellt sicher, dass unsere Kunden ein Höchstmaß an Sicherheit, Transparenz und Komfort erfahren, wenn sie uns ihre Finanztransaktionen anvertrauen. Willkommen in einer neuen Ära des elektronischen Geldtransfers – in der Technologie auf Vertrauen trifft.</p>',
      'order_num' => 6,
      'lang' => 'de',
    ]);
    Content::create([
      'title' => 'INNOVATION',
      'content' => '<p class="title body-section">Die Zukunft der virtuellen Realität ist da.</p>',
      'order_num' => 1,
      'lang' => 'de',
    ]);
    Content::create([
      'title' => 'INNOVATION',
      'content' => '<p class="sub-title">KI-gestützte Personalisierung</p>
                <p class="description">Wir nutzen KI-Algorithmen, um unsere Dienstleistungen an die Bedürfnisse jedes einzelnen Kunden anzupassen. Durch die Analyse von Kundendaten und Verhaltensmustern können wir unsere Lösungen an spezifische Anforderungen und Vorlieben anpassen.</p>',
      'order_num' => 2,
      'lang' => 'de',
    ]);
    Content::create([
      'title' => 'INNOVATION',
      'content' => '<p class="sub-title">Maschinelles Lernen zur Betrugserkennung</p>
                <p class="description">Unsere Algorithmen für maschinelles Lernen analysieren Kundenverhalten, Transaktionsdaten und verdächtige Aktivitäten und verhindern betrügerische Transaktionen in allen unseren Diensten.</p>',
      'order_num' => 3,
      'lang' => 'de',
    ]);
    Content::create([
      'title' => 'INNOVATION',
      'content' => '<p class="sub-title">Blockchain-basierte Sicherheit</p>
                <p class="description">Unsere neue Technologierichtung ist Blockchain und Web3, was für mehr Sicherheit und Transparenz für die Daten und Transaktionen unserer Kunden sorgt. Wir implementieren die Blockchain-Technologie, um die Unveränderlichkeit und Rückverfolgbarkeit unserer Daten sowie eine verbesserte Sicherheit gegen Datenschutzverletzungen und Hacks zu gewährleisten.</p>',
      'order_num' => 4,
      'lang' => 'de',
    ]);
    Content::create([
      'title' => 'INNOVATION',
      'content' => '<p class="sub-title">Web3-basierte Dezentralisierung</p>
                <p class="description">Unsere Web3-basierten Lösungen sorgen für eine stärkere Dezentralisierung und Demokratisierung der Dienste. Durch die Verwendung von Web3-Protokollen können wir die Abhängigkeit von zentralen Vermittlern verringern, Transaktionsgebühren senken und die Zugänglichkeit und Inklusivität für unsere Kunden verbessern.</p>',
      'order_num' => 5,
      'lang' => 'de',
    ]);
    Content::create([
      'title' => 'INNOVATION',
      'content' => '<p class="sub-title">Forschung und Entwicklung</p>
                <p class="description">Um der Konkurrenz einen Schritt voraus zu sein, investieren wir in die Forschung und Entwicklung neuer Technologien und deren potenzielle Anwendungen. Wir arbeiten mit Startups, Hochschulen und Forschungseinrichtungen zusammen, um Innovationen zu beschleunigen und unseren Kunden fortschrittliche Lösungen anzubieten.</p>',
      'order_num' => 6,
      'lang' => 'de',
    ]);
    Content::create([
      'title' => 'INNOVATION',
      'content' => '<p class="sub-title">Virtual-Reality-basiertes Training</p>
                <p class="description mb-5">Wir bieten Virtual-Reality-basierte Schulungen für unsere medizinischen Fachkräfte und Kundendienstteams an, um ihre Fähigkeiten zu verbessern und einen besseren Service zu bieten. Unsere VR-basierten Trainingsprogramme simulieren reale Szenarien und bieten so ein sicheres und umfassendes Lernerlebnis.</p>',
      'order_num' => 7,
      'lang' => 'de',
    ]);
    Content::create([
      'title' => 'SECURITY',
      'content' => '<p class="title body-section">Mit OIS sind Ihre Daten sicher.</p>',
      'order_num' => 1,
      'lang' => 'de',
    ]);
    Content::create([
      'title' => 'SECURITY',
      'content' => '<p class="sub-title">Datenschutz und Sicherheit</p>
                <p class="description">OIS legt großen Wert auf Datenschutz und Sicherheit für unsere Kunden. Wir haben eine Reihe von Maßnahmen implementiert, um die Sicherheit und Genauigkeit der Kundendaten zu gewährleisten, darunter robuste Verschlüsselungsprotokolle, regelmäßige Backups und sichere Datenspeicherlösungen.</p>
                <p class="description mt-4">Darüber hinaus haben wir strenge Datenzugriffskontrollen eingeführt, um sicherzustellen, dass nur autorisiertes Personal Zugriff auf sensible Kundendaten hat. Um die Genauigkeit der Kundendaten zu gewährleisten, setzt OIS automatisierte Datenüberprüfungs- und -bereinigungsprozesse ein, um sicherzustellen, dass die Daten immer korrekt und aktuell sind.</p>
                <p class="description mt-4 mb-5">OIS erhält Kundendaten durch sichere, einwilligungsbasierte Prozesse und nutzt diese Daten, um die Entwicklung neuer Produkte und Dienstleistungen zu unterstützen, die den Kunden einen echten Mehrwert bieten.</p>',
      'order_num' => 2,
      'lang' => 'de',
    ]);
    Content::create([
      'title' => 'DISCLAIMERS',
      'content' => '',
      'order_num' => 1,
      'lang' => 'de',
    ]);
    Content::create([
      'title' => 'TERMS OF USE',
      'content' => '
        <div class="main-title">
          Haftungsausschluss und Nutzungsbedingungen
        </div>
        <div class="sub-body">
          <div class="sub-title">1. Wichtige Hinweise</div>
          <div class="sub-section">
              <p class="para-section">
                  OIS empfiehlt Ihnen, keine Tickets zu kaufen oder Buchungen vorzunehmen, die vor der Ausstellung eines Visums nicht kostenlos storniert werden können, es sei denn, dies ist eine spezifische Anforderung, die im Visumantrag angegeben ist.
              </p>
              <p class="para-section">
                  Diese Bedingungen enthalten einen Haftungsausschluss, der unsere Haftung auf unsere unten aufgeführten Rückerstattungsrichtlinien beschränkt. Sofern nicht in unserer nachstehenden Rückerstattungsrichtlinie geregelt, sind alle Gebühren nicht erstattungsfähig und können von uns bei Zahlung durch Sie einbehalten werden, auch wenn Sie keinen Visumantrag stellen oder fortsetzen und unabhängig davon, ob ein Visum erteilt wird oder nicht.
              </p>
              <p class="para-section">
                  Sie sind für die Richtigkeit Ihres Bewerbungsformulars und für die Prüfung Ihres Bewerbungsformulars verantwortlich. Wir übernehmen keine Garantie dafür, dass wir Fehler finden, und wir überprüfen die von Ihnen bereitgestellten Informationen nicht.
              </p>
          </div>
          <div class="sub-title">2. Dienstleister</div>
          <div class="sub-section">
              <p class="para-section">
                  OIS ist ein Visumbearbeitungszentrum für nigerianische Visumanträge mit Büros in:
              </p>
              <ul class="para-list">
                  <li>
                      Abuja (No.5 Onitsha Crescent, Off Gimbiya Street, Area 11, Garki, Abuja Nigeria)
                  </li>
                  <li>
                      Amsterdam (Kingsfordweg 151, 1043GR, Amsterdam Niederlande)
                  </li>
                  <li>
                      Ankara (Danismanlik Ltd. Sti. Kazim Ozalp Mahallesi Koza Caddesi 35/3 Cankaya, Ankara
                      Truthahn)
                  </li>
                  <li>
                      Atlanta (918 Holcomb Bridge Road, Suite 204, Roswell, Atlanta, GA USA 30076)
                  </li>
                  <li>
                      Peking (Unit 1 Suite 1801, Kun Sha Building, 16 Xin Yuan Li Str, Chaoyang District, Beijing PRC)
                  </li>
                  <li>
                      Beirut (Jnah-Beirut gegenüber dem Gebäude 6 des Rafik-Hariri-Universitätskrankenhauses – 3. Stock, Postfach 9 UNESCO, Beirut, Libanon)
                  </li>
                  <li>
                      Guangzhou (Einheit 27/28, 41. Etage, R&F To-Win-Gebäude, 30 Huaxia Rd, Tianhe District, Guangzhou PRC)
                  </li>
                  <li>
                      Houston (9894 Bissonnet Street, Suite 745 Houston TX 77036 USA)
                  </li>
                  <li>
                      Johannesburg (6 Bolton Road Parkwood Rosebank, 2193, Johannesburg, Südafrika)
                  </li>
                  <li>
                      Kuala Lumpur (36.01 Level 36 Menara Citibank, 165 Jalan Ampang 50450 Kuala Lumpur Malaysia)
                  </li>
                  <li>
                      Leicester (St Georges House, 6 St Georges Way, Leicester LE1 1SH, UK)
                  </li>
                  <li>
                      London (56-57 Fleet Street City of London London EC4Y 1JU Vereinigtes Königreich)
                  </li>
                  <li>
                      Los Angeles (11222 S. La Cienega Blvd Inglewood, Suite 302, CA. 90304 USA)
                  </li>
                  <li>
                      London (56-57 Fleet Street City of London London EC4Y 1JU Vereinigtes Königreich)
                  </li>
                  <li>
                      Mumbai (Quest Offices Pvt. Ltd., 8. Stock, Parinee Crescenzo, C38 & 39, G Block, Bandra Kurla Complex, Bandra (Ost) Pin:400051, Maharashtra, Indien)
                  </li>
                  <li>
                      Neu-Delhi (C/O Central Board of Irrigation & Power Plot No. 4, Ground Floor, Institutional Area Opp.: Sarvodaya School Malcha Marg Chanakyapuri New Delhi 110021, Delhi, Indien)
                  </li>
                  <li>
                      New York (370 Lexington Ave, Suite 1505 New York, NY 10017 USA)
                  </li>
                  <li>
                      Paris (7 Rue Daru 75008 Paris, Frankreich)
                  </li>
                  <li>
                      Pretoria (3. Etage, Gebäude 2, Brooklyn Bridge Office Park, Pretoria 570 Fehrsen, Südafrika)
                  </li>
                  <li>
                      Rom (S.R.L., Via Sicilia, 30 00187 Rom, Italien)
                  </li>
                  <li>
                      Shanghai (Raum 2025, 20/F, Catic Building, 212 Jiangning Road, Jing\'an District, Shanghai, VR China)
                  </li>
                  <li>
                      Washington DC (11900 Parklawn Drive Suite 160, Rockville MD 20852, Washington DC USA)
                  </li>
              </ul>
          </div>
          <div class="sub-title">3. Anwendung dieser Bedingungen</div>
          <div class="sub-section">
              <p class="para-section">
                  Diese Allgemeinen Geschäftsbedingungen regeln Ihre Nutzung der Dienste des OIS, alle von Ihnen gestellten Visumanträge und alle Anfragen, die Sie für Beratung oder Informationen zu nigerianischen Visa stellen. Jeder Visumantragsteller akzeptiert und bestätigt hiermit, dass er vor der Einreichung eines Visumantrags alle diese Geschäftsbedingungen gelesen und verstanden hat und ihnen ohne Einschränkung oder Einschränkung zustimmt. Kein Mitarbeiter von OIS ist befugt, diese Allgemeinen Geschäftsbedingungen ohne vorherige schriftliche Genehmigung von OIS ganz oder teilweise zu ändern, zu ergänzen, zu erweitern oder zurückzuziehen.
              </p>
          </div>
          <div class="sub-title">4. Der Visumantragsservice</div>
          <div class="sub-section">
              <div class="sub-title pl-0">4.1 Geltungsbereich</div>
              <p class="para-section">
                  OIS ist der ausgelagerte Partner der Nigeria High Commission im Vereinigten Königreich. In dieser Funktion ist OIS für die Planung von Terminen, den Empfang von Visumanträgen für Reisen nach Nigeria und die Einreichung von Anträgen bei der Nigeria High Commission in London, die Abholung der bearbeiteten Pässe und die Rückgabe der Pässe an die Antragsteller verantwortlich.
              </p>
              <div class="sub-title pl-0">4.2 Annahme und Ablehnung von Bewerbungen</div>
              <p class="para-section">
                  Die Prüfung von Visumanträgen erfolgt durch die Nigeria High Commission und die Erteilung oder Ablehnung von Visa liegt in deren alleinigem Ermessen. Die Nigeria High Commission behält sich das Recht vor, vom Antragsteller weitere Unterlagen und Informationen anzufordern und jeden Visumantrag abzulehnen. Der Antragsteller muss diese weiteren Unterlagen und Informationen vorlegen, wenn er möchte, dass sein Antrag weiterhin berücksichtigt wird.
              </p>
              <div class="sub-title pl-0">4.3 Gebühren</div>
              <p class="para-section">
                  Die von Ihnen zu zahlenden Gebühren umfassen die Verwaltungsgebühr der Nigeria High Commission für das Visum, die wir an die High Commission weiterleiten, sowie unsere Gebühren, bestehend aus unserer Servicegebühr und anderen Gebühren wie Bankgebühren und Gebühren.
              </p>
              <p class="para-section">
                  Die angegebenen Gebühren gelten nur an dem Tag, an dem sie von uns angegeben oder bereitgestellt werden. Wenn Sie sich dazu entschließen, Ihren Antrag zu einem späteren Zeitpunkt zu stellen, können sich die Gebühren ändern.
              </p>
              <p class="para-section">
                  Alle Kosten für die Rücksendung von Pässen, Visa und Dokumenten an Sie sind in der endgültigen Gesamtgebühr enthalten, basierend auf den von Ihnen bereitgestellten Informationen und den von Ihnen gewählten Versandarten.
              </p>
              <p class="para-section">
                  Alle Gebühren müssen im Rahmen der verfügbaren Zahlungsoptionen vollständig eingegangen sein.
              </p>
              <p class="para-section">
                  Sofern nicht in unserer nachstehenden Rückerstattungsrichtlinie geregelt, sind alle Gebühren nicht erstattungsfähig und alle Gebühren sind zahlbar und können von uns bei Zahlung durch Sie einbehalten werden, auch wenn Sie keinen Visumantrag stellen oder mit diesem fortfahren, und zwar unabhängig davon, ob es sich um ein Visum handelt oder nicht gewährt wird.
              </p>
              <div class="sub-title pl-0">4.4 Allgemeine Verpflichtung</div>
              <p class="para-section">
                  OIS wird alle Visumanträge mit angemessener Aufmerksamkeit und Sachkenntnis und im Einklang mit allen von der Nigeria High Commission festgelegten Verfahren und Richtlinien bearbeiten. Obwohl wir Ihr Bewerbungsformular mit angemessener Sorgfalt auf offensichtliche Fehler auf der Vorderseite prüfen, können wir nicht garantieren, dass Fehler in Ihrem Formular entdeckt werden, und wir verpflichten uns nicht, die von Ihnen bereitgestellten Informationen zu überprüfen, wofür Sie verantwortlich sind sicherzustellen, dass es korrekt ist.
              </p>
              <div class="sub-title pl-0">4.5 Verantwortung des Bewerbers</div>
              <p class="para-section">
                  Es liegt in der Verantwortung aller Antragsteller, alle Antragsformulare wahrheitsgetreu auszufüllen, korrekte und genaue Informationen und Unterlagen bereitzustellen, sicherzustellen, dass sie über einen gültigen Reisepass verfügen, und bei Erhalt des Visums die Gültigkeit des ausgestellten Visums zu überprüfen, um sicherzustellen, dass es abdeckt die beantragte Aufenthaltsdauer, die Anzahl der erforderlichen Einträge sowie die Gültigkeit für den Reisezweck.
              </p>
              <div class="sub-title pl-0">4,6 Bearbeitungszeiten</div>
              <p class="para-section">
                  Bei den Bearbeitungszeiten für Visumanträge handelt es sich lediglich um Schätzungen. Diese basieren auf Informationen und Erfahrungen der Nigeria High Commission. Die Bearbeitung Ihres Antrags unterliegt den Verfahren und Bearbeitungsfristen der Nigeria High Commission, auf die OIS keinen Einfluss hat.
              </p>
              <div class="sub-title pl-0">4.7 Änderungen an Verfahren und Gebühren</div>
              <p class="para-section">
                  Die Verfahren und Gebühren der Nigeria High Commission für die Bearbeitung von Visa und damit verbundenen Dienstleistungen liegen außerhalb der Kontrolle von OIS und können ohne vorherige Ankündigung geändert werden. OIS übernimmt keine Verantwortung für etwaige Änderungen der Verfahren oder Gebühren und behält sich das Recht vor, erhöhte Gebühren weiterzugeben.


              </p>
              <div class="sub-title pl-0">4.8 Stornierung</div>
              <p class="para-section">
                  Wenn Sie ein Visumantragsverfahren einleiten, einschließlich der Einreichung eines Online-Antrags, das Visumantragsverfahren jedoch nicht abschließen, einschließlich wenn Sie es versäumen, Ihre Visumantragsunterlagen an uns zu senden oder persönlich in einem Visumantragszentrum zu erscheinen, um Ihr Visum auszufüllen Wenn Sie Ihren Visumantrag innerhalb von 12 Monaten nach Beginn des Visumantragsverfahrens einreichen, gilt Ihr Visumantrag als abgelaufen und wir können die von Ihnen gezahlte Visumgebühr sowie alle Servicegebühren, Bankgebühren und andere Gebühren einbehalten. Wir sind nicht verpflichtet, Sie hierüber zu informieren.
              </p>
              <p class="para-section">
                  Ihr oben genanntes Recht ist das einzige Widerrufsrecht, das Ihnen zusteht. Sobald Sie Ihren Antrag bei uns eingereicht haben, wird davon ausgegangen, dass Sie damit einverstanden sind, dass wir sofort mit der Bearbeitung Ihres Antrags und der Erbringung jeglicher Dienstleistungen beginnen können. Daher haben Sie gemäß den Verbraucherschutzbestimmungen (Fernabsatz) kein Widerrufsrecht 2000. Dies liegt daran, dass Sie gemäß Verordnung 13(1)(a) Ihr Widerrufsrecht verlieren, wenn Sie zustimmen, dass wir innerhalb der Widerrufsfrist mit der Bereitstellung der Dienstleistungen beginnen können.
              </p>
          </div>
          <div class="sub-title">5. Rückerstattungsrichtlinie</div>
          <div class="sub-section">
              <div class="sub-title pl-0">5.1 Rückerstattung der Visumantragsgebühr</div>
              <p class="para-section">
                  Wenn OIS in Bezug auf einen eingereichten Visumantrag vertragswidrig oder fahrlässig handelt, was zur Folge hat, dass das Visum nicht erteilt wird oder der Antragsteller seinen Reisepass mit gültigen Visa verliert, wobei der Antragsteller jeweils einen neuen Reisepass beantragen muss oder nicht reisen kann Wenn Sie zu den vom Antragsteller in seinem Visumantrag angegebenen Zeiten nach Nigeria einreisen, erstattet OIS dem Antragsteller die Visumgebühr, jedoch keine Servicegebühren, Bankgebühren oder andere Gebühren.
              </p>
              <div class="sub-title pl-0">5.2 Verlust oder Beschädigung von Reisepässen und anderen Reisedokumenten</div>
              <p class="para-section">
                  OIS ergreift bei der Handhabung des Reisepasses und der Dokumente eines Antragstellers alle angemessenen Vorsichtsmaßnahmen. Wenn aufgrund einer Vertragsverletzung oder Fahrlässigkeit seitens OIS der eingereichte Reisepass oder die Dokumente des Antragstellers verloren gehen oder über einen brauchbaren Zustand hinaus beschädigt werden, zahlt OIS dafür Der Antragsteller erstattet dem Antragsteller die Höhe der Gebühren, die von der Regierung seines Heimatlandes für den Ersatz des verlorenen oder beschädigten Reisepasses oder anderer Dokumente im Rahmen ihres normalen Ersatzverfahrens erhoben werden, und OIS wird den Antragsteller im Rahmen seiner Möglichkeiten dabei unterstützen. Solche Zahlungen werden von OIS an den Antragsteller gegen Vorlage der von der Regierung seines jeweiligen Heimatlandes ausgestellten Zahlungsquittung für den Ersatz des verlorenen oder beschädigten Reisepasses oder der verlorenen oder beschädigten Dokumente geleistet.
              </p>
          </div>
          <div class="sub-title">6. Haftungsausschluss</div>

          <div class="sub-section">
              <p class="para-section">
                  Mit Ausnahme der im obigen Abschnitt genannten Rückerstattung(en) von Gebühren schließt OIS seine Haftung im Zusammenhang mit Visumanträgen aus, einschließlich der Haftung aus Vertrag, Fahrlässigkeit, unerlaubter Handlung, Gesetz oder auf andere Weise, einschließlich der Haftung für Verzögerungen oder Ausfälle von OIS bei der Bearbeitung oder Bearbeitung von Visumanträgen, Verlust oder Verzögerung von Pässen und anderen Dokumenten, Verzögerungen bei der Nigeria High Commission und Ablehnung von Visumanträgen aus irgendeinem Grund.
              </p>
              <div class="sub-title pl-0">Und um Zweifel auszuschließen</div>
              <div class="sub-title pl-0">6.1 Keine Haftung für falsche Informationen</div>
              <p class="para-section">
                  OIS übernimmt keine Haftung für den Verlust, die Verzögerungen oder die Nichterteilung von Anträgen, die sich aus oder im Zusammenhang mit (einschließlich, aber nicht beschränkt auf) unvollständigen Antragsformularen, falsch oder falsch ausgefüllten Antragsformularen und ungenauen oder unvollständigen Begleitdokumenten ergeben.
              </p>
              <div class="sub-title pl-0">6.2 Keine Haftung für Ereignisse, die nicht in unserer Kontrolle liegen</div>
              <p class="para-section">
                  Es wird nicht davon ausgegangen, dass OIS vertragsbrüchig oder fahrlässig ist oder anderweitig in irgendeiner Weise haftbar gemacht wird für etwaige Verzögerungen oder Misserfolge bei der Beantragung oder Verlust, Beschädigung oder Verzögerung von Reisepässen oder anderen Dokumenten aufgrund von Unfall, Diebstahl, Naturkatastrophen (z Gott) oder aus einem anderen Grund, der außerhalb der Kontrolle von OIS liegt und nicht auf einer vorsätzlichen Unterlassung von OIS beruht, oder für den Verlust oder die Beschädigung eines Reisepasses oder eines anderen Dokuments nach der Übergabe an den Antragsteller.
              </p>
              <div class="sub-title pl-0">6.3 Keine Haftung für Post- und Kurierdienste</div>
              <p class="para-section">
                  OIS übernimmt keine Haftung für Verzögerungen oder für den Verlust oder die Beschädigung von Visumanträgen, Reisepässen oder anderen Dokumenten, die durch einen Post- oder Kurierdienst Dritter verursacht werden oder auftreten, während sich ein Antrag, Reisepass oder Dokument im Besitz eines Drittanbieters befindet , einschließlich der Beförderung von Visumanträgen, Reisepässen oder anderen Dokumenten zwischen OIS und der Nigeria High Commission und deren Rückgabe durch OIS an den Antragsteller.
              </p>
              <div class="sub-title pl-0">6.4 Keine Haftung für die Prüfung von Visumanträgen</div>
              <p class="para-section">
                  OIS ist nicht an der Prüfung von Visumanträgen oder deren Gewährung oder Ablehnung beteiligt und übernimmt keine Haftung oder Verantwortung für Verzögerungen seitens der Nigeria High Commission bei der Prüfung, Gewährung oder Ablehnung von Visumanträgen.
              </p>
              <div class="sub-title pl-0">6.5 Keine Haftung für verschwendete Kosten und Aufwendungen</div>
              <p class="para-section">
                  OIS haftet gegenüber Visumantragstellern oder anderen Personen, die sich auf einen Visumantrag verlassen oder davon profitieren, nicht für Verpflichtungen, Kosten oder Ausgaben, die im Vertrauen auf oder im Vorgriff auf den Erhalt eines nigerianischen Visums entstehen, sei es innerhalb eines bestimmten Zeitrahmens oder überhaupt , einschließlich, aber nicht beschränkt auf Flugreisen, Hotel- und andere Reise- und Unterbringungsarrangements sowie alle anderen getroffenen Vereinbarungen.
              </p>
              <p class="para-section">
                  OIS empfiehlt, dass Sie keine Tickets kaufen oder Buchungen vornehmen, die vor der Erteilung eines Visums nicht storniert werden können, es sei denn, es handelt sich um eine spezielle Anforderung, die im Visumantrag angegeben ist. In diesem Fall sollten offene Tickets erworben werden.
              </p>
              <div class="sub-title pl-0">6.6 Allgemeiner Ausschluss von Verlusten und Schäden</div>
              <p class="para-section">
                  OIS haftet gegenüber Visumantragstellern oder anderen Personen, die sich auf einen Visumantrag verlassen oder von ihm profitieren, nicht für direkte, indirekte, strafbare, zufällige, besondere, Folgeschäden oder Schäden jeglicher Art (einschließlich vertraglicher oder fahrlässiger Haftung). Dies gilt auch, wenn die Ursache auf Verzögerungen, Verlust oder Beschädigung von Visumanträgen, Pässen und anderen Dokumenten zurückzuführen ist, sofern nicht in Abschnitt 5 oben angegeben.
              </p>
              <p class="para-section">
                  OIS übernimmt gegenüber Visumantragstellern oder anderen Personen, die sich auf einen Visumantrag verlassen oder davon profitieren, keine Haftung (einschließlich vertraglicher oder fahrlässiger Art) für entgangenen Gewinn, Umsatz, Vertrag, Geschäft, Beruf oder andere Beschäftigung, einschließlich wenn dies durch Verzögerung, Verlust, Verlust oder Beschädigung von Visumanträgen, Reisepässen und anderen Dokumenten verursacht wird.
              </p>
          </div>
          <div class="sub-title">7. Allgemein</div>
          <div class="sub-section">
              <div class="sub-title pl-0">7.1 Rechte Dritter</div>
              <p class="para-section">
                  Nichts in diesen Allgemeinen Geschäftsbedingungen kommt einer anderen Person als dem Visumantragsteller zugute oder ist für diese durchsetzbar, und der Contracts (Rights of Third Parties) Act 1999 findet keine Anwendung.
              </p>
              <div class="sub-title pl-0">7.2 Änderungen dieser Bedingungen</div>
              <p class="para-section">
                  OIS kann nach eigenem Ermessen jederzeit und ohne vorherige Ankündigung einzelne oder alle dieser Geschäftsbedingungen ändern, ergänzen, stornieren oder zurückziehen.
              </p>
              <div class="sub-title pl-0">7.3 Anwendbares Recht</div>
              <p class="para-section">
                  Diese Allgemeinen Geschäftsbedingungen und alle Visumanträge unterliegen den Gesetzen der Länder, in denen wir vertreten sind, und werden in Übereinstimmung mit ihnen ausgelegt. Alle Ansprüche oder Streitigkeiten, die sich im Zusammenhang mit den von OIS für den Antragsteller erbrachten Dienstleistungen ergeben, unterliegen der ausschließlichen Zuständigkeit der Gerichte im Land.
              </p>
          </div>
          <div class="sub-title">8.Beschwerden</div>
          <div class="sub-section">
              <p class="para-section">
                  Bitte richten Sie etwaige Beschwerden per E-Mail an die Kundenbeziehungsabteilung unter
              </p>
              <p class="para-section">
                  info@oisservices.com
              </p>
          </div>
        </div>',
      'order_num' => 1,
      'lang' => 'de',
    ]);
    Content::create([
      'title' => 'PRIVACY POLICY',
      'content' => '
        <div class="main-title">Datenschutzerklärung</div>
        <div class="sub-body">
          <div class="sub-title">1. Einführung</div>
          <div class="sub-section">
            <p class="para-section">
              Bei OIS verpflichten wir uns, die Privatsphäre und Vertraulichkeit der persönlichen Daten unserer Kunden zu schützen. Diese Datenschutzrichtlinie beschreibt, wie wir die personenbezogenen Daten verwenden, offenlegen und schützen, die wir von Personen erhalten, die unsere Dienste nutzen. Wir halten uns an die geltenden Datenschutzgesetze, einschließlich der Datenschutz-Grundverordnung (DSGVO), und sind bestrebt, die höchsten Standards an Privatsphäre und Datensicherheit zu gewährleisten.
            </p>
          </div>
          <div class="sub-title">2. Datenerhebung und -nutzung</div>
          <div class="sub-section">
            <div class="sub-title pl-0">2.1 Erhebung personenbezogener Daten</div>
            <p class="para-section">
              Wir erfassen personenbezogene Daten von Einzelpersonen auf verschiedene Weise, unter anderem wenn sie ein Konto erstellen, eine Zahlung tätigen, mit uns Kontakt aufnehmen, an Umfragen teilnehmen, mit unseren Websites oder Anwendungen interagieren oder unsere Dienste nutzen. Zu den Arten personenbezogener Daten, die wir möglicherweise erheben, gehören unter anderem:
            </p>
            <ul class="para-list">
              <li>Name, Adresse und Kontaktinformationen</li>
              <li>Pass- und Visumdetails</li>
              <li>Biometrische Daten</li>
              <li>Bankprüfnummern</li>
              <li>Details zur Zahlungstransaktion</li>
              <li>Gesundheitsinformationen (für E-Health-Dienste)</li>
              <li>Interaktionen mit unseren Diensten und Websites</li>
              <li>Houston (9894 Bissonnet Street, Suite 745 Houston TX 77036 USA)</li>
              <li>Beschäftigungs- oder Berufsangaben (zu Rekrutierungszwecken)</li>
            </ul>
            <div class="sub-title pl-0">2.2 Zweck der Datenverarbeitung</div>
            <p class="para-section">
              Wir verarbeiten personenbezogene Daten zu folgenden Zwecken:
            </p>
            <ul class="para-list">
              <li>
                Um mit Einzelpersonen zu kommunizieren und deren Serviceanfragen oder Bestellungen zu erfüllen.
              </li>
              <li>Um Kundensupport bereitzustellen und auf Anfragen zu antworten.</li>
              <li>
                Um die Erfahrung des Einzelnen mit unseren Dienstleistungen zu verbessern und zu personalisieren.
              </li>
              <li>Um Zahlungen zu verarbeiten und Finanztransaktionen zu überprüfen.</li>
              <li>
                Zur Einhaltung gesetzlicher Verpflichtungen, einschließlich Meldepflichten gegenüber den zuständigen Behörden.
              </li>
              <li>
                Zur Verwaltung unserer Systeme und Prozesse, einschließlich Datenanalyse, Prüfung und Fehlerbehebung.
              </li>
              <li>
                Um Untersuchungen durchzuführen und gesetzliche Rechte auszuüben, einschließlich der Betrugsprävention und -aufdeckung.
              </li>
              <li>Um unsere Produkte und Dienstleistungen zu entwickeln und zu verbessern.</li>
            </ul>
            <div class="sub-title pl-0">2.3 Rechtsgrundlage für die Verarbeitung</div>
            <p class="para-section">
              Wir verarbeiten personenbezogene Daten auf Grundlage einer oder mehrerer der folgenden Rechtsgrundlagen:
            </p>
            <ul class="para-list">
              <li>
                Die Notwendigkeit der Verarbeitung zur Erfüllung eines Vertrags oder zur Durchführung vorvertraglicher Maßnahmen auf Wunsch des Betroffenen.
              </li>
              <li>Einhaltung der gesetzlichen Verpflichtungen, denen wir unterliegen.</li>
              <li>
                Einwilligung von Einzelpersonen für bestimmte Verarbeitungsaktivitäten.
              </li>
              <li>
                Berechtigte Interessen, die von OIS oder einem Dritten verfolgt werden, sofern diese Interessen nicht durch die Rechte und Interessen des Einzelnen außer Kraft gesetzt werden.
              </li>
            </ul>
          </div>
          <div class="sub-title">3. Datenaustausch und Offenlegung</div>
          <div class="sub-section">
            <div class="sub-title pl-0">3.1 Drittanbieter</div>
            <p class="para-section">
              Wir können personenbezogene Daten an vertrauenswürdige Drittanbieter weitergeben, die uns bei der Erbringung unserer Dienstleistungen und der Erfüllung unserer Verpflichtungen unterstützen. Diese Dienstleister sind vertraglich dazu verpflichtet, personenbezogene Daten ausschließlich in unserem Auftrag und nach unseren Weisungen zu verarbeiten.
            </p>
            <div class="sub-title pl-0">3.2 Geschäftsübertragungen</div>
            <p class="para-section">
              Im Falle einer Fusion, Übernahme oder Veräußerung aller oder eines Teils unserer Vermögenswerte können personenbezogene Daten im Rahmen der Transaktion an den entsprechenden Dritten übertragen werden. Wir werden angemessene Maßnahmen ergreifen, um die Sicherheit und Vertraulichkeit personenbezogener Daten bei solchen Übertragungen zu gewährleisten.
            </p>
            <div class="sub-title pl-0">3.3 Rechts- und Compliance-Anforderungen</div>
            <p class="para-section">
              Wir können personenbezogene Daten offenlegen, wenn dies gesetzlich, gerichtlich oder behördlich vorgeschrieben ist. Wir können personenbezogene Daten auch weitergeben, um unsere Rechte, Privatsphäre, Sicherheit oder Eigentum oder die anderer zu schützen.
            </p>
          </div>
          <div class="sub-title">4. Datenaufbewahrung</div>
          <div class="sub-section">
            <p class="para-section">
              Wir speichern personenbezogene Daten für den Mindestzeitraum, der zur Erfüllung der in dieser Datenschutzrichtlinie dargelegten Zwecke erforderlich ist, es sei denn, eine längere Aufbewahrungsfrist ist gesetzlich vorgeschrieben oder zulässig. Zu den Kriterien, die zur Bestimmung der angemessenen Aufbewahrungsfrist herangezogen werden, gehören die Art der personenbezogenen Daten, die Zwecke, für die sie erhoben wurden, sowie gesetzliche und behördliche Anforderungen.
            </p>
          </div>
          <div class="sub-title">5. Datensicherheit</div>
          <div class="sub-section">
            <p class="para-section">
              Wir ergreifen geeignete technische und organisatorische Maßnahmen, um personenbezogene Daten vor unbefugtem Zugriff, Änderung, Offenlegung oder Zerstörung zu schützen. Zu diesen Maßnahmen gehören unter anderem Verschlüsselung, Zugangskontrollen, regelmäßige Sicherheitsbewertungen und Mitarbeiterschulungen zum Thema Datenschutz.
            </p>
          </div>
          <div class="sub-title">6. Individuelle Rechte</div>
          <div class="sub-section">
            <p class="para-section">
              Einzelpersonen haben bestimmte Rechte in Bezug auf ihre personenbezogenen Daten. Vorbehaltlich des geltenden Rechts haben Einzelpersonen das Recht:
            </p>
            <ul class="para-list">
              <li>Greifen Sie auf ihre persönlichen Daten zu und fordern Sie eine Kopie davon an.</li>
              <li>Berichtigung unrichtiger oder unvollständiger personenbezogener Daten.</li>
              <li>Personenbezogene Daten unter bestimmten Umständen löschen.</li>
              <li>Die Verarbeitung personenbezogener Daten einschränken oder ihr widersprechen.</li>
              <li>
                Datenportabilität (Empfang personenbezogener Daten in einem strukturierten, allgemein verwendeten und maschinenlesbaren Format).
              </li>
              <li>Einwilligung widerrufen (sofern die Verarbeitung auf einer Einwilligung beruht).</li>
            </ul>
            <p class="para-section">
            Um diese Rechte auszuüben oder eine datenschutzbezogene Beschwerde einzureichen, können sich Einzelpersonen über die in Abschnitt 8 bereitgestellten Informationen an uns wenden.
          </p>
        </div>
        <div class="sub-title">7. Marketingkommunikation und Cookie-Richtlinie</div>
        <div class="sub-section">
          <p class="para-section">
            Wir können Marketingmitteilungen an Personen senden, die ihre Einwilligung erteilt haben. Einzelpersonen können den Erhalt solcher Mitteilungen jederzeit abbestellen, indem sie den Anweisungen in der Mitteilung folgen oder uns kontaktieren.
          </p>
          <p class="para-section">
            Unsere Cookie-Richtlinie beschreibt die Verwendung von Cookies und ähnlichen Technologien auf unseren Websites und bietet Informationen zur Verwaltung von Cookie-Einstellungen.
          </p>
        </div>
        <div class="sub-title">8. Internationale Datenübertragungen</div>
        <div class="sub-section">
          <p class="para-section">
            Als globale Organisation können wir personenbezogene Daten in Länder außerhalb des Europäischen Wirtschaftsraums (EWR) oder in andere Regionen mit anderen Datenschutzgesetzen übermitteln. In solchen Fällen stellen wir sicher, dass angemessene Sicherheitsvorkehrungen zum Schutz der personenbezogenen Daten getroffen werden, z. B. durch die Verwendung von Standardvertragsklauseln, die von der Europäischen Kommission genehmigt wurden, oder indem wir uns auf die Privacy Shield-Zertifizierung der Empfänger verlassen (sofern zutreffend).
          </p>
        </div>
        <div class="sub-title">9. Privatsphäre von Kindern</div>
        <div class="sub-section">
          <p class="para-section">
            Unsere Dienstleistungen richten sich nicht an Personen unter 16 Jahren. Wir erheben oder erfragen wissentlich keine personenbezogenen Daten von Kindern. Wenn uns bekannt wird, dass wir personenbezogene Daten eines Kindes ohne nachweisbare Zustimmung der Eltern erfasst haben, werden wir Maßnahmen ergreifen, um diese Informationen zu löschen.
          </p>
        </div>
        <div class="sub-title">10. Aktualisierungen der Datenschutzrichtlinie</div>
        <div class="sub-section">
          <p class="para-section">
            Wir können diese Datenschutzrichtlinie von Zeit zu Zeit aktualisieren, um Änderungen in unseren Datenverarbeitungspraktiken oder gesetzlichen Verpflichtungen Rechnung zu tragen. Wir empfehlen Einzelpersonen, diese Datenschutzrichtlinie regelmäßig auf Aktualisierungen zu überprüfen. Die überarbeitete Datenschutzrichtlinie tritt ab dem Datum in Kraft, an dem sie auf unserer Website veröffentlicht wird.
          </p>
        </div>
        <div class="sub-title">11. Kontaktinformationen</div>
        <div class="sub-section">
          <p class="para-section">
            Bei datenschutzbezogenen Bedenken, Fragen, Wünschen oder Beschwerden wenden Sie sich bitte an unseren Datenschutzbeauftragten unter:
          </p>
          <p class="para-section">dataprotection@oisservices.com</p>
          <p class="para-section">
            Wir nehmen Datenschutzangelegenheiten ernst und werden umgehend auf etwaige Bedenken oder Anfragen reagieren. Bitte beachten Sie, dass diese Datenschutzrichtlinie zum besseren Verständnis auf Englisch bereitgestellt wird. Im Falle eines Konflikts zwischen der englischen Version und einer übersetzten Version ist die englische Version maßgebend.
          </p>
        </div>
      </div>',
      'order_num' => 1,
      'lang' => 'de',
    ]);
    Content::create([
      'title' => 'DATA PROJECT',
      'content' => '
        <div class="main-title">
          DSGVO und zugehörige Datenschutzrichtlinie
        </div>
        <div class="sub-body">
          <div class="sub-title">1. Einführung</div>
          <div class="sub-section">
            <p class="para-section">
              Bei seinen täglichen Geschäftsabläufen nutzt Online Integrated Solutions (OIS) eine Vielzahl von Daten über identifizierbare Personen, darunter Daten über:
            </p>
            <ul class="para-list">
              <li>
                Aktuelle, ehemalige und zukünftige Mitarbeiter
              </li>
              <li>
                Kunden
              </li>
              <li>
                Benutzer seiner Websites
              </li>
              <li>
                Abonnenten
              </li>
              <li>
                Andere Stakeholder
              </li>
            </ul>
            <p class="para-section">
              Bei der Erhebung und Verwendung dieser Daten unterliegt die Organisation einer Vielzahl von Gesetzen, die die Art und Weise regeln, wie solche Aktivitäten durchgeführt werden dürfen und welche Sicherheitsmaßnahmen zu ihrem Schutz getroffen werden müssen.
            </p>
            <p class="para-section">
              Der Zweck dieser Richtlinie besteht darin, die relevanten Rechtsvorschriften darzulegen und die Schritte zu beschreiben, die OIS unternimmt, um sicherzustellen, dass es diese einhält.
            </p>
            <p class="para-section">
              Diese Kontrolle gilt für alle Systeme, Personen und Prozesse, die die Informationssysteme der Organisation bilden, einschließlich Vorstandsmitglieder, Direktoren, Mitarbeiter, Lieferanten und andere Dritte, die Zugriff auf OIS-Systeme haben.
            </p>
            <p class="para-section">
              Die folgenden Richtlinien und Verfahren sind für dieses Dokument relevant:
            </p>
            <ul class="para-list">
              <li>
                Verfahren zur Datenschutz-Folgenabschätzung
              </li>
              <li>
                Verfahren zur Analyse personenbezogener Daten
              </li>
              <li>
                Verfahren zur Beurteilung berechtigter Interessen
              </li>
              <li>
                Verfahren zur Reaktion auf Informationssicherheitsvorfälle
              </li>
              <li>
                DSGVO-Rollen und Verantwortlichkeiten
              </li>
              <li>
                Andere Stakeholder
              </li>
            </ul>
          </div>
          <div class="sub-title">2. Verwendung von Kryptographie</div>
            <div class="sub-section">
              <p class="para-section">
                Wo es der Klassifizierung der Informationen und dem Speichermedium angemessen war, wurden kryptografische Techniken eingesetzt, um die Vertraulichkeit und Integrität der Aufzeichnungen sicherzustellen.
              </p>
              <p class="para-section">
                Es wurde absolut darauf geachtet, sicherzustellen, dass die zum Verschlüsseln von Datensätzen verwendeten Verschlüsselungsschlüssel für die gesamte Lebensdauer der relevanten Datensätze sicher gespeichert werden und den Richtlinien der Organisation zur Kryptografie entsprechen.
              </p>
              <div class="sub-title pl-0">2.1 Die EU-Datenschutz-Grundverordnung – DSGVO</div>
              <p class="para-section">
                Die Datenschutz-Grundverordnung 2016 (DSGVO) ist eine der wichtigsten Rechtsvorschriften, die sich auf die Art und Weise auswirkt, wie OIS seine Informationsverarbeitungsaktivitäten durchführt. Bei einem Verstoß gegen die DSGVO, die den Schutz personenbezogener Daten von Bürgern der Europäischen Union zum Ziel hat, drohen erhebliche Bußgelder. Es ist die Politik von OIS, sicherzustellen, dass unsere Einhaltung der DSGVO und anderer relevanter Gesetze jederzeit klar und nachweisbar ist.
              </p>
              <div class="sub-title pl-0">2.2 Definitionen</div>
              <p class="para-section">
                In der DSGVO sind insgesamt 26 Definitionen aufgeführt, und es ist nicht angebracht, sie alle hier wiederzugeben. Die grundlegendsten Definitionen in Bezug auf diese Richtlinie lauten jedoch wie folgt:
              </p>
              <p class="para-section">
                Als personenbezogene Daten gelten:
              </p>
              <p class="para-section">
                alle Informationen, die sich auf eine identifizierte oder identifizierbare natürliche Person („betroffene Person“) beziehen; Eine identifizierbare natürliche Person ist eine natürliche Person, die direkt oder indirekt, insbesondere mittels Zuordnung zu einer Kennung wie einem Namen, zu einer Kennnummer, zu Standortdaten, zu einer Online-Kennung oder zu einem oder mehreren spezifischen Merkmalen der physischen, physiologischen, genetische, psychische, wirtschaftliche, kulturelle oder soziale Identität dieser natürlichen Person;
              </p>
              <p class="para-section">
                „Verarbeitung“ bedeutet
              </p>
              <p class="para-section">
                Jeder mit oder ohne Hilfe automatisierter Verfahren ausgeführte Vorgang oder jede Vorgangsreihe im Zusammenhang mit personenbezogenen Daten oder Sätzen personenbezogener Daten wie das Erheben, das Erfassen, die Organisation, das Ordnen, die Speicherung, die Anpassung oder Veränderung, das Auslesen, das Abfragen, die Verwendung oder die Offenlegung Übermittlung, Verbreitung oder sonstige Bereitstellung, Zuordnung oder Verknüpfung, Einschränkung, Löschung oder Vernichtung;
              </p>
              <p class="para-section">
                „Controller“ bedeutet
              </p>
              <p class="para-section">
                die natürliche oder juristische Person, Behörde, Einrichtung oder andere Stelle, die allein oder gemeinsam mit anderen über die Zwecke und Mittel der Verarbeitung von personenbezogenen Daten entscheidet; Wenn die Zwecke und Mittel dieser Verarbeitung durch das Recht der Union oder der Mitgliedstaaten festgelegt sind, können der Verantwortliche oder die spezifischen Kriterien für seine Benennung durch das Recht der Union oder der Mitgliedstaaten vorgesehen werden;
              </p>
              <div class="sub-title pl-0">2.3 Grundsätze zur Verarbeitung personenbezogener Daten</div>
              <p class="para-section">
                Es gibt eine Reihe grundlegender Prinzipien, auf denen die DSGVO basiert.<br>
                Diese lauten wie folgt:
              </p>
              <p class="para-section">
                1. Personenbezogene Daten sind:
              </p>
              <p class="para-section">
                (a) in Bezug auf die betroffene Person rechtmäßig, fair und transparent verarbeitet werden („Rechtmäßigkeit, Fairness und Transparenz“);
              </p>
              <p class="para-section">
                (b) für bestimmte, eindeutige und legitime Zwecke erhoben und nicht in einer Weise weiterverarbeitet werden, die mit diesen Zwecken unvereinbar ist; eine Weiterverarbeitung zu im öffentlichen Interesse liegenden Archivzwecken, zu wissenschaftlichen oder historischen Forschungszwecken oder zu statistischen Zwecken gilt gemäß Artikel 89 Absatz 1 nicht als mit den ursprünglichen Zwecken unvereinbar (\'Zweckbindung\');
              </p>
              <p class="para-section">
                (c) angemessen, relevant und auf das für die Zwecke, für die sie verarbeitet werden, Notwendige beschränkt sein („Datenminimierung“);
              </p>
              <p class="para-section">
                (d) korrekt und erforderlichenfalls auf dem neuesten Stand gehalten werden; Es müssen alle angemessenen Maßnahmen ergriffen werden, um sicherzustellen, dass personenbezogene Daten, die im Hinblick auf die Zwecke, für die sie verarbeitet werden, unrichtig sind, unverzüglich gelöscht oder berichtigt werden („Richtigkeit“).
              </p>
              <p class="para-section">
              (e) in einer Form aufbewahrt werden, die die Identifizierung der betroffenen Personen nur so lange ermöglicht, wie es für die Zwecke, für die die personenbezogenen Daten verarbeitet werden, erforderlich ist; Personenbezogene Daten können für längere Zeiträume gespeichert werden, sofern die personenbezogenen Daten ausschließlich für im öffentlichen Interesse liegende Archivzwecke, wissenschaftliche oder historische Forschungszwecke oder statistische Zwecke gemäß Artikel 89 Absatz 1 verarbeitet werden, vorbehaltlich der Umsetzung geeigneter technischer und organisatorischer Maßnahmen Maßnahmen, die nach dieser Verordnung erforderlich sind, um die Rechte und Freiheiten der betroffenen Person zu schützen (\'Speicherbeschränkung\');
            </p>
            <p class="para-section">
              (f) in einer Weise verarbeitet werden, die eine angemessene Sicherheit der personenbezogenen Daten gewährleistet, einschließlich des Schutzes vor unbefugter oder rechtswidriger Verarbeitung und vor unbeabsichtigtem Verlust, zufälliger Zerstörung oder Beschädigung, unter Verwendung geeigneter technischer oder organisatorischer Maßnahmen („Integrität und Vertraulichkeit“).
            </p>
            <p class="para-section">
              (f) in einer Weise verarbeitet werden, die eine angemessene Sicherheit der personenbezogenen Daten gewährleistet, einschließlich des Schutzes vor unbefugter oder rechtswidriger Verarbeitung und vor unbeabsichtigtem Verlust, zufälliger Zerstörung oder Beschädigung, unter Verwendung geeigneter technischer oder organisatorischer Maßnahmen („Integrität und Vertraulichkeit“).
            </p>
            <p class="para-section">
              OIS stellt sicher, dass alle diese Grundsätze sowohl bei der von ihm derzeit durchgeführten Verarbeitung als auch bei der Einführung neuer Verarbeitungsmethoden, beispielsweise neuer IT-Systeme, eingehalten werden.
            </p>
            <div class="sub-title pl-0">2.4 Rechte des Einzelnen</div>
            <p class="para-section">
              Der betroffenen Person stehen auch Rechte nach der DSGVO zu. Diese bestehen aus:
            </p>
            <p class="para-section">
              Das Recht auf Information<br>Das Recht auf Auskunft<br>Das Recht auf Berichtigung<br>Das Recht auf Löschung<br>Das Recht auf Einschränkung der Verarbeitung<br>Das Recht auf Datenübertragbarkeit<br>Das Recht auf Widerspruch< br>Rechte in Bezug auf automatisierte Entscheidungsfindung und Profiling</p>
            <p class="para-section">
              Jedes dieser Rechte wird durch geeignete Verfahren innerhalb von OIS unterstützt, die es ermöglichen, die erforderlichen Maßnahmen innerhalb der in der DSGVO festgelegten Fristen zu ergreifen.
            </p>
            <p class="para-section">
              Diese Zeitskalen sind in Tabelle 1 dargestellt.
            </p>
            <table>
              <thead>
                <tr>
                  <th>Anfrage einer betroffenen Person</th>
                  <th>Zeitskala</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>Das Recht auf Information</td>
                  <td>Bei der Datenerhebung (sofern von der betroffenen Person angegeben) oder innerhalb eines Monats (sofern nicht von der betroffenen Person angegeben)</td>
                </tr>
                <tr>
                  <td>Das Zugriffsrecht</td>
                  <td>Ein Monat</td>
                </tr>
                <tr>
                  <td>Das Recht auf Berichtigung</td>
                  <td>Ein Monat</td>
                </tr>
                <tr>
                  <td>Das Recht auf Löschung</td>
                  <td>Ohne unangemessene Verzögerung</td>
                </tr>
                <tr>
                  <td>Das Recht auf Einschränkung der Verarbeitung</td>
                  <td>Ohne unangemessene Verzögerung</td>
                </tr>
                <tr>
                  <td>Das Recht auf Datenübertragbarkeit</td>
                  <td>Ein Monat</td>
                </tr>
                <tr>
                  <td>Widerspruchsrecht</td>
                  <td>Nach Eingang des Einspruchs</td>
                </tr>
              </tbody>
            </table>
            <p class="para-section">
              Tabelle 1 – Fristen für Anfragen betroffener Personen
            </p>
            <div class="sub-title pl-0">2.5 Rechtmäßigkeit der Verarbeitung</div>
            <p class="para-section">
              Es gibt sechs alternative Möglichkeiten, die Rechtmäßigkeit einer bestimmten Verarbeitung personenbezogener Daten im Rahmen der DSGVO festzustellen. Es ist die Politik des OIS, die geeignete Grundlage für die Verarbeitung zu ermitteln und diese gemäß der Verordnung zu dokumentieren. Die Optionen werden in den folgenden Abschnitten kurz beschrieben.
            </p>
            <div class="sub-title pl-0">2.5.1 Einwilligung</div>
            <p class="para-section">
              Sofern dies nicht aus einem in der DSGVO zulässigen Grund erforderlich ist, wird OIS stets die ausdrückliche Einwilligung einer betroffenen Person zur Erhebung und Verarbeitung ihrer Daten einholen. Bei Kindern unter 16 Jahren (in bestimmten EU-Mitgliedstaaten kann ein niedrigeres Alter zulässig sein) wird die Zustimmung der Eltern eingeholt. Den betroffenen Personen werden zum Zeitpunkt der Einholung der Einwilligung transparente Informationen über unsere Nutzung ihrer personenbezogenen Daten zur Verfügung gestellt und ihre Rechte in Bezug auf ihre Daten erläutert, beispielsweise das Recht, die Einwilligung zu widerrufen. Diese Informationen werden in zugänglicher Form, in klarer Sprache und kostenlos zur Verfügung gestellt. Wenn die personenbezogenen Daten nicht direkt bei der betroffenen Person erhoben werden, werden diese Informationen der betroffenen Person innerhalb einer angemessenen Frist nach der Datenerhebung, spätestens jedoch innerhalb eines Monats, zur Verfügung gestellt.
            </p>
            <div class="sub-title pl-0">2.5.2 Vertragserfüllung</div>
            <p class="para-section">
              Soweit die erhobenen und verarbeiteten personenbezogenen Daten zur Erfüllung eines Vertrags mit der betroffenen Person erforderlich sind, ist eine ausdrückliche Einwilligung nicht erforderlich. Dies ist insbesondere dann der Fall, wenn die Vertragsabwicklung ohne die Angabe der personenbezogenen Daten nicht möglich ist, z.B. Ohne Angabe einer Lieferadresse ist eine Lieferung nicht möglich.
            </p>
            <div class="sub-title pl-0">2.5.3 Gesetzliche Verpflichtung</div>
            <p class="para-section">
              Ist die Erhebung und Verarbeitung personenbezogener Daten zur Einhaltung gesetzlicher Vorschriften erforderlich, ist eine ausdrückliche Einwilligung nicht erforderlich. Dies kann beispielsweise bei einigen Daten im Zusammenhang mit Beschäftigung und Steuern sowie bei vielen Bereichen, mit denen der öffentliche Sektor befasst ist, der Fall sein.
            </p>
            <div class="sub-title pl-0">2.5.4 Lebenswichtige Interessen der betroffenen Person</div>
            <p class="para-section">
              Sind personenbezogene Daten erforderlich, um lebenswichtige Interessen der betroffenen Person oder einer anderen natürlichen Person zu schützen, kann dies als Rechtsgrundlage für die Verarbeitung dienen. OIS wird angemessene, dokumentierte Beweise dafür aufbewahren, dass dies der Fall ist, wenn dieser Grund als rechtmäßige Grundlage für die Verarbeitung personenbezogener Daten verwendet wird. Dies kann beispielsweise in Aspekten der Sozialfürsorge, insbesondere im öffentlichen Sektor, zum Einsatz kommen.
            </p>
            <div class="sub-title pl-0">2.5.5 Aufgabe im öffentlichen Interesse</div>
            <p class="para-section">
              Wenn OIS eine Aufgabe erfüllen muss, die seiner Ansicht nach im öffentlichen Interesse liegt oder Teil einer offiziellen Pflicht ist, wird die Zustimmung der betroffenen Person nicht eingeholt. Die Beurteilung des öffentlichen Interesses bzw. der Amtspflicht wird dokumentiert und bei Bedarf als Beweismittel zur Verfügung gestellt.
            </p>
            <div class="sub-title pl-0">2.5.6 Berechtigte Interessen</div>
            <p class="para-section">
              Wenn die Verarbeitung bestimmter personenbezogener Daten im berechtigten Interesse von OIS liegt und die Rechte und Freiheiten der betroffenen Person nachweislich nicht wesentlich beeinträchtigt werden, kann dies als rechtmäßiger Grund für die Verarbeitung definiert werden. Auch hier wird die Begründung dieser Ansicht dokumentiert.
            </p>
            <div class="sub-title pl-0">2.6 Datenschutz durch Technik</div>
            <p class="para-section">
              OIS hat den Grundsatz des „Privacy by Design“ übernommen und wird sicherstellen, dass bei der Definition und Planung aller neuen oder erheblich geänderten Systeme, die personenbezogene Daten sammeln oder verarbeiten, Datenschutzfragen gebührend berücksichtigt werden, einschließlich der Fertigstellung einer oder mehrerer Datenschutzauswirkungen Einschätzungen.
            </p>
            <p class="para-section">
              Die Datenschutz-Folgenabschätzung umfasst Folgendes:
            </p>
            <p class="para-section">
              Überlegung, wie und zu welchen Zwecken personenbezogene Daten verarbeitet werden<br>Bewertung, ob die vorgeschlagene Verarbeitung personenbezogener Daten sowohl notwendig als auch im Verhältnis zu den Zwecken ist.
            </p>
            <p class="para-section">
              Bewertung der Risiken für Einzelpersonen bei der Verarbeitung personenbezogener Daten<br>Welche Kontrollen sind erforderlich, um den identifizierten Risiken zu begegnen und die Einhaltung der Rechtsvorschriften nachzuweisen?<br>Der Einsatz von Techniken wie Datenminimierung und Pseudonymisierung wird gegebenenfalls in Betracht gezogen.
            </p>
            <div class="sub-title pl-0">2.7 Verträge zur Verarbeitung personenbezogener Daten</div>
            <p class="para-section">
              OIS stellt sicher, dass alle von ihm eingegangenen Beziehungen, die die Verarbeitung personenbezogener Daten beinhalten, einem dokumentierten Vertrag unterliegen, der die spezifischen Informationen und Bedingungen enthält, die in der DSGVO erforderlich sind. Weitere Informationen finden Sie im DSGVO-Verantwortlichen-Auftragsverarbeiter
              Vereinbarungsrichtlinie
            </p>
            <div class="sub-title pl-0">2.8 Internationale Übermittlung personenbezogener Daten</div>
            <p class="para-section">
              Übermittlungen personenbezogener Daten außerhalb der Europäischen Union werden vor der Übermittlung sorgfältig geprüft, um sicherzustellen, dass sie innerhalb der durch die DSGVO vorgegebenen Grenzen liegen. Dies hängt teilweise von der Beurteilung der Europäischen Kommission hinsichtlich der Angemessenheit der im Empfängerland geltenden Schutzmaßnahmen für personenbezogene Daten ab und kann sich im Laufe der Zeit ändern.<br>Gruppeninterne internationale Datenübermittlungen unterliegen den genannten rechtsverbindlichen Vereinbarungen in Form von Binding Corporate Rules (BCR), die den betroffenen Personen durchsetzbare Rechte verleihen.
            </p>
            <div class="sub-title pl-0">2.9 Datenschutzbeauftragter</div>
            <p class="para-section">
              Eine definierte Rolle des Datenschutzbeauftragten (Data Protection Officer, DPO) ist gemäß der DSGVO erforderlich, wenn es sich bei einer Organisation um eine Behörde handelt, wenn sie groß angelegte Überwachungen durchführt oder wenn sie besonders sensible Arten von Daten in großem Umfang verarbeitet. Der Datenschutzbeauftragte muss über einen angemessenen Kenntnisstand verfügen und kann entweder eine interne Ressource sein oder an einen geeigneten Dienstleister ausgelagert werden.
            </p>
            <p class="para-section">
              Basierend auf diesen Kriterien ernannte OIS den Datenschutzbeauftragten. Nachfolgend finden Sie die Kontaktdaten:
            </p>
            <p class="para-section">
              Name: Archibald Coker<br>E-Mail: acoker@oisservices.com<br>Kontakt: +44 (0) 207 832 0001
            </p>
            <div class="sub-title pl-0">2.10 Benachrichtigung über Verstöße</div>
            <p class="para-section">
              Es ist die Politik von OIS, fair und verhältnismäßig zu sein, wenn es darum geht, Maßnahmen zu ergreifen, um betroffene Parteien über Verstöße gegen personenbezogene Daten zu informieren. Im Einklang mit der DSGVO wird die zuständige Aufsichtsbehörde innerhalb von 72 Stunden informiert, wenn bekannt ist, dass ein Verstoß vorliegt, der voraussichtlich ein Risiko für die Rechte und Freiheiten natürlicher Personen darstellt. Dies wird in Übereinstimmung mit unserem Verfahren zur Reaktion auf Informationssicherheitsvorfälle gehandhabt, das den gesamten Prozess der Behandlung von Informationssicherheitsvorfällen festlegt.
            </p>
            <p class="para-section">
              Nach der DSGVO ist die zuständige Datenschutzbehörde befugt, bei Verstößen gegen die Vorschriften Bußgelder in Höhe von bis zu vier Prozent des weltweiten Jahresumsatzes oder zwanzig Millionen Euro, je nachdem, welcher Betrag höher ist, zu verhängen.
            </p>
            <div class="sub-title pl-0">2.11 Adressierung der Einhaltung der DSGVO</div>
            <p class="para-section">
              Die folgenden Maßnahmen werden ergriffen, um sicherzustellen, dass OIS jederzeit den Verantwortlichkeitsgrundsatz der DSGVO einhält:
            </p>
            <ul class="para-list">
              <li>
                Die Rechtsgrundlage für die Verarbeitung personenbezogener Daten ist klar und eindeutig
              </li>
              <li>
                Es wird ein Datenschutzbeauftragter mit besonderer Verantwortung für den Datenschutz in der Organisation ernannt (falls erforderlich).
              </li>
              <li>
                Alle am Umgang mit personenbezogenen Daten beteiligten Mitarbeiter sind sich ihrer Verantwortung für die Einhaltung guter Datenschutzpraktiken bewusst
              </li>
              <li>
                Alle Mitarbeiter wurden im Datenschutz geschult
              </li>
              <li>
                Die Regeln zur Einwilligung werden eingehalten
              </li>
              <li>
                Betroffenen Personen, die ihre Rechte in Bezug auf personenbezogene Daten ausüben möchten, stehen entsprechende Wege zur Verfügung und solche Anfragen werden effektiv bearbeitet
              </li>
              <li>
                Es werden regelmäßig Überprüfungen von Vorgängen mit personenbezogenen Daten durchgeführt
              </li>
              <li>
                Privacy by Design wird für alle neuen oder geänderten Systeme und Prozesse übernommen
              </li>
            </ul>
            <p class="para-section">
              Folgende Dokumentation der Verarbeitungstätigkeiten wird erfasst:
            </p>
            <ul class="para-list">
              <li>
                Name der Organisation und relevante Details
              </li>
              <li>
                Zwecke der Verarbeitung personenbezogener Daten
              </li>
              <li>
                Kategorien der verarbeiteten Personen und personenbezogenen Daten
              </li>
              <li>
                Kategorien von Empfängern personenbezogener Daten
              </li>
              <li>
                Vereinbarungen und Mechanismen für die Übermittlung personenbezogener Daten in Nicht-EU-Länder, einschließlich Einzelheiten zu den geltenden Kontrollen
              </li>
              <li>
                Zeitpläne für die Aufbewahrung personenbezogener Daten
              </li>
              <li>
                Relevante technische und organisatorische Kontrollen vorhanden
              </li>
            </ul>
            <p class="para-section">
              Diese Maßnahmen werden im Rahmen des Managementprozesses zum Thema Datenschutz regelmäßig überprüft.
            </p>
          </div>
          <div class="sub-title">Verwandter Datenschutz</div>
          <div class="sub-section">
            <div class="sub-title pl-0">Datenschutzgrundsätze</div>
            <p class="para-section">
              Es gibt 8 Datenschutzgrundsätze, die sicherstellen, dass Unternehmen personenbezogene Daten auf eine Weise sammeln, speichern und verarbeiten, die die Vertraulichkeit der Kunden schützt. Diese Grundsätze sind in Anhang 1 des Gesetzes festgelegt und lauten wie folgt:
            </p>
            <p class="para-section">
              ich. Daten müssen fair und rechtmäßig gehandhabt werden<br>Wir haben berechtigte Gründe, Kundendaten zu erheben, zu speichern und zu verarbeiten, nämlich um Ihnen bei der Beantragung eines Reisepasses oder Visums zu helfen und für andere gesetzlich zulässige Zwecke und Verträge zwischen uns und unseren Kunden . Wir stellen sicher, dass Ihre Daten nicht für rechtswidrige Zwecke verwendet werden.
            </p>
            <p class="para-section">
              ii. Personenbezogene Daten werden nur für einen oder mehrere festgelegte und rechtmäßige Zwecke erhoben und dürfen nicht in einer Weise weiterverarbeitet werden, die mit diesem Zweck oder diesen Zwecken unvereinbar ist.<br>Aufgrund der Art unserer Arbeit ist der Zweck, den Sie angeben Ihre personenbezogenen Daten sind für Sie und uns selbstverständlich. Wir werden Ihre Daten nicht für andere Zwecke verwenden, die mit dem ursprünglichen Zweck unvereinbar sind, es sei denn, Sie erteilen uns zuvor Ihre Einwilligung oder wir sind gesetzlich dazu verpflichtet.
            </p>
            <p class="para-section">
              iii. Personenbezogene Daten müssen in Bezug auf den Zweck oder die Zwecke, für die sie verarbeitet werden, angemessen, relevant und nicht übermäßig sein.<br>Wir erfassen nur Informationen, die wir für relevant und ausreichend halten, um unseren Vertrag mit Ihnen zu erfüllen.
            </p>
            <p class="para-section">
              iv. Personenbezogene Daten müssen korrekt sein und erforderlichenfalls auf dem neuesten Stand gehalten werden.<br>Wir stellen sicher, dass die von Ihnen angegebenen personenbezogenen Daten korrekt und nicht irreführend sind. Dies erreichen wir, indem wir Ihnen die Möglichkeit geben, die von Ihnen gemachten Angaben zu bestätigen und gegebenenfalls auch Belege anzufordern. Sollten sich bei Ihren personenbezogenen Daten wesentliche Änderungen ergeben, z. B. eine Namens- oder Staatsangehörigkeitsänderung, teilen Sie uns dies bitte schnellstmöglich mit, damit wir Ihren Datensatz aktualisieren können.
            </p>
            <p class="para-section">
              v. Personenbezogene Daten, die für einen oder mehrere Zwecke verarbeitet werden, dürfen nicht länger aufbewahrt werden, als es für diesen Zweck oder diese Zwecke erforderlich ist.<br>Wir werden unsere Datenbank von Zeit zu Zeit überprüfen, um festzustellen, ob einige personenbezogene Daten noch benötigt werden von uns gespeichert werden. Wenn der Zweck, zu dem sie gespeichert wurden, erreicht wurde und wir der Ansicht sind, dass eine weitere Speicherung nicht mehr erforderlich ist, werden wir sie sicher löschen.
            </p>
            <p class="para-section">
              vi. Personenbezogene Daten werden im Einklang mit den Rechten der betroffenen Personen gemäß diesem Gesetz verarbeitet.<br>Wir verarbeiten Ihre personenbezogenen Daten so, dass Sie Folgendes tun können:
            </p>
            <ul class="para-list-digit">
              <li>
                ein Recht auf Zugang zu einer Kopie Ihrer personenbezogenen Daten, im Volksmund als „Antrag auf Zugang zum Betroffenen“ bekannt. Die aktuelle Gebühr dafür beträgt 10 £ pro Standardanfrage und wir sind bestrebt, diese innerhalb von 14 Tagen bereitzustellen. Der Antrag auf Zugriff auf den Betreff sollte per E-Mail oder Post an info@oisservices.com gerichtet werden: Leiter des Zentrums, OIS Services, 56-57 Fleet Street, EC4Y 1JU, London </li>
              <li>
                das Recht, der Verarbeitung Ihrer personenbezogenen Daten in einer Weise zu widersprechen, die Ihnen voraussichtlich Schaden oder Leid zufügen könnte;
              </li>
              <li>
                das Recht, die Verarbeitung Ihrer personenbezogenen Daten in einer Weise zu verhindern, die mit dem bzw. den ursprünglichen Zwecken unvereinbar ist;
              </li>
              <li>
                ein Widerspruchsrecht gegen automatisiert getroffene Entscheidungen;
              </li>
              <li>
                gegebenenfalls das Recht, unrichtige personenbezogene Daten berichtigen, sperren oder löschen zu lassen, und
              </li>
              <li>
                ein Anspruch auf Schadensersatz für Schäden, die durch einen Verstoß gegen das Gesetz verursacht wurden.
              </li>
            </ul>
            <p class="para-section">
              vii. Sicherheit personenbezogener Daten<br>Ihre personenbezogenen Daten werden sowohl physisch als auch technisch in einer sehr sicheren Umgebung gespeichert. Die Bereiche, in denen personenbezogene Daten gespeichert werden, sind für alle unbefugten Personen unzugänglich. Der Zutritt zu diesen Räumlichkeiten ist nur mit einem elektronischen Schlüssel möglich, der nur an berechtigte Personen ausgegeben wird. Der Zugriff auf Ihre personenbezogenen Daten im System ist nur autorisierten Personen gestattet. Nur autorisierte Personen können Ihre personenbezogenen Daten verändern, offenlegen oder vernichten. Darüber hinaus können solche autorisierten Personen diese Funktionen nur im Rahmen ihrer rechtmäßigen Pflichten ausüben. Daher ist die Wahrscheinlichkeit, dass Ihre personenbezogenen Daten unrechtmäßig verarbeitet oder versehentlich beschädigt, zerstört oder verloren werden, sehr gering.
              Darüber hinaus ist es unsere Politik, Folgendes sicherzustellen:
            </p>
            <ul class="para-list-digit">
              <li>
                Jeder autorisierte Mitarbeiter, der Zugriff auf personenbezogene Daten hat, verfügt über ein eigenes Passwort, das nicht an andere Personen weitergegeben wird.
              </li>
              <li>
                Zum Schutz unserer Daten werden zugelassene Sicherheitssoftware und Firewall eingesetzt.
              </li>
              <li>
                Ausgedruckte, nicht genutzte personenbezogene Daten werden vernichtet,
              </li>
              <li>
                Wir raten davon ab, persönliche Daten auf Laptops und anderen mobilen Geräten und Medien zu speichern. Wenn dies jedoch der Fall ist, sollten diese sicher verschlossen und nicht aus dem Büro mitgenommen werden.
              </li>
            </ul>
            <p class="para-section">
              viii. Übermittlung personenbezogener Daten außerhalb des Europäischen Wirtschaftsraums<br>Ihre personenbezogenen Daten werden nicht in ein Land oder Gebiet außerhalb des Europäischen Wirtschaftsraums übermittelt, es sei denn, dieses Land oder Gebiet gewährleistet ein angemessenes Schutzniveau für die Rechte und Freiheiten der betroffenen Personen zur Verarbeitung personenbezogener Daten. Es gibt nur wenige Länder außerhalb des EWR, die anerkanntermaßen über ein angemessenes Schutzniveau für die Verarbeitung personenbezogener Daten verfügen, das mit den EWR-Ländern vergleichbar ist. Wenn wir personenbezogene Daten in die USA übermitteln, stellen wir sicher, dass der Empfänger Unterzeichner des Safe Harbor Scheme des US-Handelsministeriums ist. Die Europäische Kommission erkennt an, dass dieses System einen angemessenen Schutz für betroffene Personen bietet. In Bezug auf andere Länder außerhalb des EWR, in denen nicht anerkannt wird, dass sie über gleichwertige Sicherheit und Schutzmaßnahmen für die Verarbeitung personenbezogener Daten verfügen, unterzeichnen wir entweder einen separaten Vertrag, dessen Bedingungen durch die europäischen Richtlinien genehmigt werden, oder stellen sicher, dass eine Klausel vorhanden ist im Vertrag, der die Verarbeitung personenbezogener Daten aller unserer Kunden schützt.
            </p>
          </div>
        </div>',
      'order_num' => 1,
      'lang' => 'de',
    ]);

    //it
    Content::create([
      'title' => 'ABOUT OIS',
      'content' => '<p class="title body-section">Soluzioni software innovative in tutti i settori.</p>',
      'order_num' => 1,
      'lang' => 'it',
    ]);
    Content::create([
      'title' => 'ABOUT OIS',
      'content' => '<p class="sub-title">OIS (Servizi Integrati on-line)</p>
                <p class="description mt-4">OIS (Online Integrated Solutions) è all\'avanguardia nell\'innovazione come fornitore leader di soluzioni software all\'avanguardia in vari settori. Il nostro viaggio è iniziato come centro per la richiesta di visto e fornitore di servizi di supporto e da allora ci siamo evoluti per estendere i nostri servizi a tutte le missioni diplomatiche della Nigeria in tutto il mondo. Il nostro successo è sostenuto dalla tecnologia avanzata, dalla qualità senza pari, dalla scalabilità e dalla trasferibilità senza soluzione di continuità delle nostre soluzioni.</p>
                <p class="description mb-0 mt-4">Ciò che distingue OIS è la nostra presenza globale, che consente la semplice integrazione di applicazioni su scala mondiale. Il nostro impegno per l\'eccellenza si estende oltre i servizi di immigrazione, poiché vantiamo una solida esperienza nelle piattaforme bancarie. Fungendo da intermediario cruciale per le banche nigeriane, forniamo servizi essenziali ai nigeriani non residenti e agli individui di altre nazionalità all\'estero che cercano di aprire o riattivare i loro conti bancari nigeriani.</p>
                <p class="description mb-0 mt-4">Noi di OIS ci impegniamo continuamente a ridefinire gli standard del settore, offrendo una suite completa di soluzioni che riflettono la nostra dedizione all\'eccellenza e all\'abilità tecnologica. Unisciti a noi in un viaggio di fornitura di servizi senza precedenti e connettività globale.</p>',
      'order_num' => 2,
      'lang' => 'it',
    ]);
    Content::create([
      'title' => 'ABOUT OIS',
      'content' => '<p class="description">Noi di OIS siamo immensi orgogliosi del nostro costante impegno per la fornitura di servizi eccezionali e una tecnologia all\'avanguardia. La nostra gamma completa di servizi va oltre le soluzioni per visti e passaporti, comprendendo piattaforme educative, sanitarie e bancarie. Crediamo nella semplificazione dei processi e, per raggiungere questo obiettivo, offriamo un\'esperienza applicativa ottimizzata attraverso il nostro portale online intuitivo, un sistema di pagamento continuo e aggiornamenti in tempo reale.</p>
                <p class="description mt-4 mb-0">Per coloro che desiderano ottenere un numero di verifica bancaria (BVN), il nostro processo di richiesta online abbinato all\'invio di SMS garantisce un\'esperienza efficiente e senza problemi.</p>
                <p class="description mt-4 mb-0">Nell\'ambito dei servizi finanziari spiccano i nostri servizi di trasferimento elettronico di denaro. Forniamo un mezzo sicuro e conveniente per i trasferimenti di denaro online, supportando vari metodi come ritiro di contanti, transazioni di criptovaluta, trasferimenti bancari, transazioni di denaro mobile e ricariche di tempo di trasmissione. Con OIS, sperimenta la comodità di soluzioni finanziarie moderne, sicure e flessibili su misura per soddisfare le tue diverse esigenze.</p>',
      'order_num' => 3,
      'lang' => 'it',
    ]);
    Content::create([
      'title' => 'ABOUT OIS',
      'content' => '<p class="description mb-0">In OIS, il benessere dei nostri clienti è al centro dell\'attenzione e il nostro impegno si estende alla fornitura di servizi di sanità elettronica e benessere di prim\'ordine. Immergiti in un approccio completo alla salute con la nostra gamma di offerte:</p>
                <p class="description mt-0 mb-0"><b>Servizi di telemedicina:</b></p>
                <p class="description mt-0 mb-0 ml-4">• Sperimenta l\'assistenza sanitaria alle tue condizioni con i nostri servizi di telemedicina. Connettiti senza problemi con gli operatori sanitari attraverso consulenze virtuali, sbloccando piani dietetici personalizzati, routine di esercizi mirati e un prezioso supporto per la salute mentale. Il tuo benessere è la nostra priorità e i nostri servizi di telemedicina ti portano la competenza sanitaria direttamente.</p>
                <p class="description mt-0 mb-0"><b>Dispositivi di monitoraggio della salute:</b></p>
                <p class="description mt-0 mb-0 ml-4">• Rimani informato e proattivo sulla tua salute con i nostri dispositivi di monitoraggio sanitario. Questi strumenti all\'avanguardia ti consentono di monitorare i segni vitali, fornendo preziose informazioni sulla tua salute generale. Autorizza te stesso a prendere decisioni basate sui dati per uno stile di vita più sano.</p>
                <p class="description mt-0 mb-0"><b>Programma Benessere Integrato:</b></p>
                <p class="description mt-0 mb-0 ml-4">• Il nostro programma benessere è un paradiso olistico per la salute, che integra perfettamente il supporto per la salute mentale nel tuo percorso verso il benessere. Oltre alla salute fisica, diamo priorità al benessere mentale, promuovendo un approccio equilibrato e completo al benessere generale.</p>
                <p class="description mt-0 mb-0">La nostra missione è fornire non solo soluzioni software all\'avanguardia, ma anche essere un alleato fidato nella ricerca della salute e del benessere. Semplificando i processi e migliorando le esperienze in tutti i settori, ci impegniamo ad avere un impatto positivo su ogni aspetto della tua vita. Benvenuti in un mondo in cui l\'innovazione incontra il benessere.</p>
                <p class="description mt-4 mb-5">In OIS, il nostro impegno costante è quello di essere pionieri di soluzioni software all\'avanguardia che non solo razionalizzino i processi, ma semplifichino anche i processi e migliorino le esperienze in diversi settori.</p>',
      'order_num' => 4,
      'lang' => 'it',
    ]);
    Content::create([
      'title' => 'SERVICES',
      'content' => '<p class="title body-section">Aiutare aziende e privati a superare sfide complesse.</p>',
      'order_num' => 1,
      'lang' => 'it',
    ]);
    Content::create([
      'title' => 'SERVICES',
      'content' => '<p class="sub-title">ELABORAZIONE DELLA RICHIESTA DI VISTO E PASSAPORTO:</p>
                <p class="description mb-0">Noi di Online Integrated Solutions (OIS) siamo pionieri a livello globale in soluzioni software rivoluzionarie, dedicate a consentire ad aziende e individui di superare sfide complesse. Il nostro profondo impatto è particolarmente evidente nell’ambito dell’elaborazione delle domande VISA, dove sfruttiamo la potenza degli algoritmi avanzati di machine learning (ML) per migliorare l’efficienza, la precisione e la scalabilità, migliorando in definitiva l’esperienza complessiva del cliente. Ecco le aree chiave in cui il nostro approccio innovativo al machine learning può apportare miglioramenti trasformativi:</p>
                <p class="description mt-0 mb-0 ml-4">• Elaborazione e convalida dei dati.</p>
                <p class="description mb-0 ml-4">• Intercettazione di una frode.</p>
                <p class="description mb-0 ml-4">• Identificazione biometrica.</p>
                <p class="description mb-0 ml-4">• Monitoraggio dello stato dell\'applicazione.</p>
                <p class="description mb-5 mt-4">Noi di OIS immaginiamo un futuro in cui la tecnologia non solo soddisfi ma superi le aspettative e il nostro impegno a spingere i confini dell\'innovazione garantisce che i nostri clienti e utenti traggano vantaggio dalle soluzioni più avanzate, efficienti e sicure disponibili per l\'elaborazione delle domande di visto e passaporto.</p>',
      'order_num' => 2,
      'lang' => 'it',
    ]);
    Content::create([
      'title' => 'SERVICES',
      'content' => '<p class="sub-title">ELABORAZIONE DELLA DOMANDA DEL NUMERO DI VERIFICA BANCARIA (BVN):</p>
                <p class="description mb-0">Nella nostra incessante ricerca di servizi ininterrotti, riconosciamo il potenziale di trasformazione dell\'apprendimento automatico, in particolare nell\'ottimizzazione del nostro processo di richiesta del numero di verifica bancaria (BVN). Comprendiamo l’importanza fondamentale di un’emissione BVN rapida e accessibile per i nostri clienti, spingendoci a perfezionare e accelerare continuamente questa procedura cruciale. Sfruttando le capacità dell\'apprendimento automatico, miriamo a elevare sia l\'accuratezza che l\'efficienza delle registrazioni BVN, mitigando contemporaneamente i rischi associati ad errori e attività fraudolente. Ecco i settori chiave in cui la nostra integrazione del machine learning promette un impatto sostanziale:</p>
                <p class="description mt-0 mb-0 ml-4">• Elaborazione e convalida dei dati.</p>
                <p class="description mt-0 mb-0 ml-4">• Analisi predittiva.</p>
                <p class="description mt-0 mb-0 ml-4">• Intercettazione di una frode.</p>
                <p class="description mt-4 mb-5">Al centro del nostro impegno c\'è la dedizione nel fornire ai nostri clienti un\'esperienza applicativa BVN senza precedenti: tempestiva, precisa e protetta contro potenziali rischi. Attraverso l’utilizzo dell’apprendimento automatico, intraprendiamo un viaggio per ridefinire gli standard di efficienza e sicurezza nell’emissione di BVN.</p>',
      'order_num' => 3,
      'lang' => 'it',
    ]);
    Content::create([
      'title' => 'SERVICES',
      'content' => '<p class="sub-title">ELEVARE L\'ECCELLENZA DEL SERVIZIO CON CHATBOT BASATI SULL\'AI:</p>
                <p class="description">Siamo entusiasti di svelare la nostra ultima innovazione, l’AI Chatbot, un progresso strumentale pronto a trasformare il servizio e il supporto ai clienti. Questo Chatbot all\'avanguardia sfrutta la potenza degli algoritmi di apprendimento automatico, offrendo ai clienti un percorso di assistenza personalizzato ed efficiente. Il nostro Chatbot è progettato per rivoluzionare l\'esperienza del cliente fornendo risposte rapide e precise alle domande e risolvendo i problemi con una dipendenza minima dall\'intervento umano.</p>
                <p class="description mt-4 mb-0">Caratteristiche e vantaggi principali:</p>
                <p class="description mt-0 mb-0 ml-4">• Risposte rapide e precise.</p>
                <p class="description mt-0 mb-0 ml-4">• Accessibilità 24 ore su 24, 7 giorni su 7.</p>
                <p class="description mt-0 mb-0 ml-4">• Eliminazione dei tempi di attesa.</p>
                <p class="description mt-0 mb-0 ml-4">• Gestione versatile delle richieste.</p>
                <p class="description mt-4 mb-5">Questo Chatbot AI rappresenta un impegno a ridefinire gli standard di servizio, garantendo che i nostri clienti sperimentino un\'interazione continua ed efficiente con il nostro marchio. Poiché la tecnologia continua ad evolversi, restiamo in prima linea, sfruttando soluzioni innovative per migliorare il percorso del cliente. Benvenuti in una nuova era personalizzata e reattiva</p>',
      'order_num' => 4,
      'lang' => 'it',
    ]);
    Content::create([
      'title' => 'SERVICES',
      'content' => '<p class="sub-title">MIGLIORARE L\'E-HEALTH E IL BENESSERE GRAZIE A UNA TECNOLOGIA ALL\'AVANGUARDIA</p>
                <p class="description mb-0">Intraprendendo un viaggio di miglioramento continuo, ci impegniamo a rivoluzionare i nostri servizi di sanità elettronica e benessere attraverso l\'integrazione di tecnologie avanzate. Esplora la miriade di modi in cui queste innovazioni possono consentirti di mantenere salute e benessere ottimali:</p>
                <p class="description mt-0 mb-0">1. Servizi di telemedicina:</p>
                <p class="description mb-0 ml-4">• Immergiti nel futuro dell\'assistenza sanitaria con i nostri sistemi avanzati. Precisione e personalizzazione sono in prima linea poiché i nostri servizi di telemedicina diagnosticano accuratamente i problemi di salute e forniscono piani di trattamento su misura per le vostre esigenze specifiche.</p>
                <p class="description mt-0 mb-0">2. Programma Benessere:</p>
                <p class="description mb-0 ml-4">• Abbraccia un approccio olistico al benessere attraverso il nostro innovativo programma benessere. Sfruttando il potenziale di trasformazione della tecnologia Blockchain e Web3, la nostra piattaforma sicura e decentralizzata offre piani dietetici personalizzati, regimi di esercizio fisico su misura e supporto completo per la salute mentale. Entra in un viaggio di benessere individuale come te.</p>
                <p class="description mt-0 mb-0">3. Dispositivi di monitoraggio della salute:</p>
                <p class="description mb-0 ml-4">• Scatena la potenza dell\'intelligenza artificiale con i nostri dispositivi di monitoraggio della salute. Questi sistemi intelligenti analizzano i dati raccolti da una vasta gamma di dispositivi, fornendo feedback personalizzati e consigli approfonditi. Trasforma il modo in cui monitori la tua salute, con una tecnologia che si evolve con te.</p>
                <p class="description mt-4 mb-5">All’intersezione tra innovazione e salute, immaginiamo un futuro in cui la tecnologia migliorerà ogni aspetto del tuo percorso verso il benessere. Il nostro impegno è fornirti soluzioni personalizzate, sicure e all\'avanguardia che ridefiniscono gli standard di sanità elettronica e benessere. Benvenuto in un regno in cui la tua salute non è solo una priorità: è un\'esperienza personalizzata.</p>',
      'order_num' => 5,
      'lang' => 'it',
    ]);
    Content::create([
      'title' => 'SERVICES',
      'content' => '<p class="sub-title">RIVOLUZIONARE IL TRASFERIMENTO DI DENARO ELETTRONICO CON LE TECNOLOGIE BLOCKCHAIN E WEB3</p>
                <p class="description">OIS annuncia con orgoglio un miglioramento rivoluzionario al nostro servizio di trasferimento di denaro elettronico attraverso l\'integrazione di tecnologie Blockchain e Web3 all\'avanguardia. Questa evoluzione strategica eleva lo standard del nostro servizio, fornendo ai clienti un livello di trasparenza e sicurezza senza precedenti.</p>
                <p class="description mt-4 mb-0">Avanzamenti chiave:</p>
                 <p class="description mt-0 mb-0 ml-4">• Registrazione registro immutabile.</p>
                 <p class="description mt-0 mb-0 ml-4">• Opzioni veloci, sicure e a basso costo.</p>
                 <p class="description mt-0 mb-0 ml-4">• Flessibilità e comodità migliorate.</p>
                 <p class="description mt-4 mb-5">Noi di OIS ci impegniamo a ridefinire il panorama dei servizi finanziari elettronici. L\'integrazione di Blockchain e Web3 testimonia la nostra dedizione all\'innovazione, garantendo ai nostri clienti la massima sicurezza, trasparenza e comodità quando ci affidano le loro transazioni finanziarie. Benvenuti in una nuova era del trasferimento di denaro elettronico, dove la tecnologia incontra la fiducia.</p>',
      'order_num' => 6,
      'lang' => 'it',
    ]);
    Content::create([
      'title' => 'INNOVATION',
      'content' => '<p class="title body-section">Il futuro della realtà virtuale è qui.</p>',
      'order_num' => 1,
      'lang' => 'it',
    ]);
    Content::create([
      'title' => 'INNOVATION',
      'content' => '<p class="sub-title">Personalizzazione basata sull\'intelligenza artificiale</p>
                 <p class="description">Utilizziamo algoritmi AI per personalizzare i nostri servizi in base alle esigenze di ogni singolo cliente. Analizzando i dati dei clienti e i modelli di comportamento, possiamo personalizzare le nostre soluzioni per soddisfare requisiti e preferenze specifici.</p>',
      'order_num' => 2,
      'lang' => 'it',
    ]);
    Content::create([
      'title' => 'INNOVATION',
      'content' => '<p class="sub-title">Apprendimento automatico per il rilevamento delle frodi</p>
                <p class="description">I nostri algoritmi di apprendimento automatico analizzano il comportamento dei clienti, i dati transazionali, le attività sospette e prevengono transazioni fraudolente in tutti i nostri servizi.</p>',
      'order_num' => 3,
      'lang' => 'it',
    ]);
    Content::create([
      'title' => 'INNOVATION',
      'content' => '<p class="sub-title">Sicurezza basata su Blockchain</p>
                <p class="description">La nostra nuova direzione tecnologica è Blockchain e Web3, che offre maggiore sicurezza e trasparenza per i dati e le transazioni dei nostri clienti. Implementiamo la tecnologia blockchain per garantire l\'immutabilità e la tracciabilità dei nostri dati, nonché una maggiore sicurezza contro violazioni dei dati e attacchi hacker.</p>',
      'order_num' => 4,
      'lang' => 'it',
    ]);
    Content::create([
      'title' => 'INNOVATION',
      'content' => '<p class="sub-title">Decentralizzazione basata su Web3</p>
                <p class="description">Le nostre soluzioni basate su Web3 forniscono una maggiore decentralizzazione e democratizzazione dei servizi. Utilizzando i protocolli Web3, possiamo ridurre la dipendenza dagli intermediari centralizzati, abbassare le commissioni di transazione e migliorare l\'accessibilità e l\'inclusività per i nostri clienti.</p>',
      'order_num' => 5,
      'lang' => 'it',
    ]);
    Content::create([
      'title' => 'INNOVATION',
      'content' => '<p class="sub-title">Ricerca e sviluppo</p>
                <p class="description">Per stare al passo con la concorrenza, stiamo investendo nella ricerca e nello sviluppo di nuove tecnologie e delle loro potenziali applicazioni. Collaboriamo con startup, mondo accademico e istituti di ricerca per accelerare l\'innovazione e offrire soluzioni avanzate ai nostri clienti.</p>',
      'order_num' => 6,
      'lang' => 'it',
    ]);
    Content::create([
      'title' => 'INNOVATION',
      'content' => '<p class="sub-title">Formazione basata sulla realtà virtuale</p>
                <p class="description mb-5">Forniamo formazione basata sulla realtà virtuale ai nostri operatori sanitari e ai team di assistenza clienti per migliorare le loro competenze e fornire un servizio migliore. I nostri programmi di formazione basati sulla realtà virtuale simulano scenari del mondo reale, fornendo un\'esperienza di apprendimento sicura e coinvolgente.</p>',
      'order_num' => 7,
      'lang' => 'it',
    ]);
    Content::create([
      'title' => 'SECURITY',
      'content' => '<p class="title body-section">Con OIS<br>i tuoi dati sono al sicuro.</p>',
      'order_num' => 1,
      'lang' => 'it',
    ]);
    Content::create([
      'title' => 'SECURITY',
      'content' => '<p class="sub-title">Protezione e sicurezza dei dati</p>
                <p class="description">OIS attribuisce un\'alta priorità alla protezione e alla sicurezza dei dati dei nostri clienti. Abbiamo implementato una serie di misure per garantire la sicurezza e l\'accuratezza dei dati dei clienti, inclusi robusti protocolli di crittografia, backup regolari e soluzioni di archiviazione sicura dei dati.</p>
                <p class="description mt-4">Inoltre, abbiamo stabilito severi controlli di accesso ai dati, garantendo che solo il personale autorizzato abbia accesso ai dati sensibili dei clienti. Per mantenere l\'accuratezza dei dati dei clienti, OIS utilizza processi automatizzati di verifica e pulizia dei dati, per garantire che i dati siano sempre accurati e aggiornati.</p>
                <p class="description mt-4 mb-5">OIS ottiene i dati dei clienti attraverso processi sicuri e basati sul consenso e utilizza questi dati per informare lo sviluppo di nuovi prodotti e servizi che offrono valore reale ai clienti.</p>',
      'order_num' => 2,
      'lang' => 'it',
    ]);
    Content::create([
      'title' => 'DISCLAIMERS',
      'content' => '',
      'order_num' => 1,
      'lang' => 'it',
    ]);
    Content::create([
      'title' => 'TERMS OF USE',
      'content' => '
        <div class="main-title">
          Dichiarazione di non responsabilità e condizioni d\'uso
        </div>
        <div class="sub-body">
          <div class="sub-title">1. Note importanti</div>
          <div class="sub-section">
              <p class="para-section">
                  L\'OIS consiglia di non acquistare biglietti o effettuare prenotazioni che non possano essere cancellate senza costi prima del rilascio del visto, tranne nei casi in cui sia un requisito specifico indicato nella domanda di visto.
              </p>
              <p class="para-section">
                  Questi termini contengono una clausola di esclusione della responsabilità che limita la nostra responsabilità alla nostra politica di rimborso indicata di seguito. Ad eccezione di quanto previsto nella nostra politica di rimborso di seguito, tutte le tariffe non sono rimborsabili e potrebbero essere trattenute da noi dietro pagamento da parte tua, anche se non effettui o procedi con una richiesta di visto e indipendentemente dal fatto che un visto venga concesso o meno.
              </p>
              <p class="para-section">
                  Sei responsabile dell\'accuratezza del modulo di domanda e del controllo del modulo di domanda. Non garantiamo che troveremo eventuali errori e non verifichiamo le informazioni fornite.
              </p>
          </div>
          <div class="sub-title">2. Fornitore di servizi</div>
          <div class="sub-section">
              <p class="para-section">
                  OIS è un centro di elaborazione dei visti per le domande di visto nigeriano con uffici presso:
              </p>
              <ul class="para-list">
                  <li>
                      Abuja (No.5 Onitsha Crescent, Off Gimbiya Street, Area 11, Garki, Abuja Nigeria)
                  </li>
                  <li>
                      Amsterdam (Kingsfordweg 151, 1043GR, Amsterdam Paesi Bassi)
                  </li>
                  <li>
                      Ankara (Danismanlik Ltd. Sti. Kazim Ozalp Mahallesi Koza Caddesi 35/3 Cankaya, Ankara
                      Tacchino)
                  </li>
                  <li>
                      Atlanta (918 Holcomb Bridge Road, Suite 204, Roswell, Atlanta, GA USA 30076 )
                  </li>
                  <li>
                      Pechino (Unità 1 Suite 1801, Edificio Kun Sha, 16 Xin Yuan Li Str, Distretto di Chaoyang, Pechino RPC)
                  </li>
                  <li>
                      Beirut (Jnah-Beirut, di fronte all\'ospedale universitario Rafik Hariri, edificio Mais 6 - 3° piano, casella postale 9, UNESCO, Beirut, Libano)
                  </li>
                  <li>
                      Guangzhou (Unità 27/28, 41° piano, edificio R&F To-Win, 30 Huaxia Rd, distretto di Tianhe, Guangzhou RPC)
                  </li>
                  <li>
                      Houston (9894 Bissonnet Street, Suite 745 Houston TX 77036 USA)
                  </li>
                  <li>
                      Johannesburg (6 Bolton Road Parkwood Rosebank, 2193, Johannesburg, Sud Africa)
                  </li>
                  <li>
                      Kuala Lumpur (36.01 Livello 36 Menara Citibank, 165 Jalan AmpangÂ 50450Â Kuala Lumpur Malesia)
                  </li>
                  <li>
                      Leicester (St Georges House, 6 St Georges Way, Leicester LE1 1SH, Regno Unito)
                  </li>
                  <li>
                      Londra (56-57 Fleet Street Città di Londra Londra EC4Y 1JU Regno Unito)
                  </li>
                  <li>
                      Los Angeles (11222 S. La Cienega Blvd Inglewood, Suite 302, CA. 90304 USA)
                  </li>
                  <li>
                      Londra (56-57 Fleet Street Città di Londra Londra EC4Y 1JU Regno Unito)
                  </li>
                  <li>
                      Mumbai (Quest Offices Pvt. Ltd., 8th Floor, Parinee Crescenzo, C38 & 39, G Block, Bandra Kurla Complex, Bandra (Est) Pin:400051, Maharashtra, India)
                  </li>
                  <li>
                      Nuova Delhi (C/O Central Board of Irrigation & Power Plot No. 4, Ground Floor, Institutional Area Opp.: Sarvodaya School Malcha Marg Chanakyapuri Nuova Delhi 110021, Delhi, India)
                  </li>
                  <li>
                      New York (370 Lexington Ave, Suite 1505 New York, NY 10017 USA)
                  </li>
                  <li>
                      Parigi (7 Rue Daru 75008 Parigi, Francia)
                  </li>
                  <li>
                      Pretoria (3° piano, edificio 2, Brooklyn Bridge Office Park, Pretoria 570 Fehrsen, Sud Africa)
                  </li>
                  <li>
                      Roma (S.R.L., Via Sicilia, 30 00187 Roma, Italia)
                  </li>
                  <li>
                      Shanghai (Stanza 2025, 20/F, Catic Building, 212 Jiangning Road, Distretto di Jing\'an, Shanghai, RPC)
                  </li>
                  <li>
                      Washington DC (11900 Parklawn Drive Suite 160, Rockville MD 20852, Washington DC Stati Uniti)
                  </li>
              </ul>
          </div>
          <div class="sub-title">3. Applicazione dei presenti Termini</div>
          <div class="sub-section">
              <p class="para-section">
                  Questi termini e condizioni regolano l\'utilizzo dei servizi dell\'OIS, tutte le domande di visto effettuate e tutte le richieste effettuate per consigli o informazioni relative ai visti nigeriani. Ciascun richiedente un visto accetta e conferma che, prima di presentare una domanda di visto, ha letto, compreso e accettato di essere vincolato, senza limitazioni o qualificazioni, tutti questi termini e condizioni. Nessun dipendente di OIS ha alcuna autorità di cambiare, emendare, ampliare o ritirare uno o tutti questi termini e condizioni senza previa approvazione scritta di OIS.
              </p>
          </div>
          <div class="sub-title">4. Il servizio di richiesta del visto</div>
          <div class="sub-section">
              <div class="sub-title pl-0">4.1 Ambito</div>
              <p class="para-section">
                  OIS è il partner in outsourcing dell\'Alta Commissione della Nigeria nel Regno Unito. In questa veste, l\'OIS è responsabile della pianificazione degli appuntamenti, della ricezione delle domande di visto per i viaggi in Nigeria e della presentazione delle domande all\'Alta Commissione della Nigeria a Londra, della raccolta dei passaporti elaborati e della restituzione dei passaporti ai richiedenti.
              </p>
              <div class="sub-title pl-0">4.2 Accettazione e rifiuto delle candidature</div>
              <p class="para-section">
                  La valutazione delle domande di visto viene effettuata dall\'Alta Commissione della Nigeria e la concessione o il rifiuto dei visti è a loro esclusiva discrezione. L\'Alta Commissione della Nigeria si riserva il diritto di chiedere ulteriore documentazione e informazioni al richiedente e di rifiutare qualsiasi richiesta di visto. Il richiedente deve fornire tali ulteriori documenti e informazioni se desidera che la sua domanda continui a essere presa in considerazione.
              </p>
              <div class="sub-title pl-0">4.3 Commissioni</div>
              <p class="para-section">
                  Le tariffe da te dovute comprendono la tassa amministrativa dell\'Alta Commissione della Nigeria per il visto, che trasmettiamo all\'Alta Commissione e le nostre tariffe, comprese le nostre commissioni di servizio e altre commissioni come spese e commissioni bancarie.
              </p>
              <p class="para-section">
                  Le tariffe indicate sono valide solo il giorno in cui vengono quotate o fornite da noi. Se decidi di presentare la domanda in un secondo momento, le tariffe potrebbero cambiare.
              </p>
              <p class="para-section">
                  Tutti i costi di restituzione di passaporti, visti e documenti sono inclusi nella tariffa totale finale in base alle informazioni da te fornite e ai metodi di consegna da te selezionati.
              </p>
              <p class="para-section">
                  Tutte le commissioni devono essere ricevute per intero secondo le opzioni di pagamento disponibili.
              </p>
              <p class="para-section">
                  Ad eccezione di quanto previsto nella nostra politica di rimborso di seguito, tutte le tariffe non sono rimborsabili e tutte le tariffe sono pagabili e potrebbero essere trattenute da noi dietro pagamento da parte tua, anche se non effettui o procedi con una richiesta di visto, e indipendentemente dal fatto che un visto è garantito.
              </p>
              <div class="sub-title pl-0">4.4 Obbligo generale</div>
              <p class="para-section">
                  L\'OIS elaborerà tutte le richieste di visto con ragionevole attenzione e competenza e in linea con tutte le procedure e le linee guida stabilite dall\'Alta Commissione della Nigeria. Tuttavia, anche se prestiamo ragionevole attenzione nel verificare la presenza di errori evidenti nel modulo di domanda, non garantiamo di rilevare errori nel modulo e non ci impegniamo a verificare le informazioni fornite, di cui sei responsabile. garantire che sia accurato.
              </p>
              <div class="sub-title pl-0">4.5 Responsabilità del richiedente</div>
              <p class="para-section">
                  È responsabilità di tutti i richiedenti compilare tutti i moduli di domanda in modo veritiero, fornire informazioni e documentazione corrette e accurate, assicurarsi di avere un passaporto valido e, al ricevimento del visto, verificare la validità del visto rilasciato per garantire che copra il periodo di soggiorno richiesto, il numero o gli ingressi richiesti e che sia valido per lo scopo del viaggio.
              </p>
              <div class="sub-title pl-0">4.6 Tempi di elaborazione</div>
              <p class="para-section">
                  I tempi di elaborazione per le richieste di visto sono solo stimati. Questi si basano sulle informazioni e sull\'esperienza dell\'Alta Commissione della Nigeria. L\'elaborazione della tua richiesta è soggetta alle procedure e ai tempi di elaborazione dell\'Alta Commissione della Nigeria su cui l\'OIS non ha alcun controllo.
              </p>
              <div class="sub-title pl-0">4.7 Modifiche alle procedure e alle tariffe</div>
              <p class="para-section">
                  Le procedure e le tariffe dell\'Alta Commissione della Nigeria per il trattamento dei visti e dei servizi correlati sono fuori dal controllo dell\'OIS e soggette a modifiche senza preavviso. L\'OIS non si assume alcuna responsabilità per eventuali modifiche alle procedure o alle tariffe e si riserva il diritto di trasferire eventuali aumenti delle tariffe.


              </p>
              <div class="sub-title pl-0">4.8 Cancellazione</div>
              <p class="para-section">
                  Se inizi un processo di richiesta del visto, anche inviando una domanda online, ma non completi il processo di richiesta del visto, incluso il caso in cui non ci invii la documentazione per la richiesta del visto o non ti presenti di persona presso un centro per la richiesta del visto per completare il visto richiesta di visto, entro 12 mesi dall\'inizio della procedura di richiesta del visto, la tua richiesta di visto sarà considerata scaduta e potremmo trattenere la tassa per il visto da te pagata, nonché tutte le commissioni di servizio, le commissioni bancarie e altre commissioni. Non saremo obbligati a informarti di ciò.
              </p>
              <p class="para-section">
                  Il tuo diritto sopra è l\'unico diritto di cancellazione che hai. Una volta inviataci la richiesta, si riterrà che tu abbia acconsentito a iniziare immediatamente a elaborare la tua richiesta e a fornire eventuali servizi e, di conseguenza, non avrai alcun diritto di annullamento ai sensi delle normative sulla tutela dei consumatori (vendita a distanza) 2000. Questo perché, ai sensi del Regolamento 13(1)(a), perdi il diritto di recesso se accetti che possiamo iniziare a fornire i servizi entro il periodo di cancellazione.
              </p>
          </div>
          <div class="sub-title">5. Politica di rimborso</div>
          <div class="sub-section">
              <div class="sub-title pl-0">5.1 Rimborso della tassa per la richiesta del visto</div>
              <p class="para-section">
                  Se l\'OIS viola il contratto o è negligente in relazione a qualsiasi domanda di visto presentata, con conseguente mancata concessione del visto o perdita del passaporto del richiedente con visti validi, in ciascun caso, in cui il richiedente deve richiedere un nuovo passaporto o non può viaggiare in Nigeria nei tempi indicati dal richiedente nella sua domanda di visto, l\'OIS rimborserà al richiedente la tassa per il visto, ma non alcuna commissione di servizio, commissione bancaria o altra commissione.
              </p>
              <div class="sub-title pl-0">5.2 Perdita o danneggiamento di passaporti e altri documenti di viaggio</div>
              <p class="para-section">
                  OIS prende ogni ragionevole precauzione durante la gestione del passaporto e dei documenti del richiedente e, se a causa di qualsiasi violazione del contratto o negligenza da parte di OIS, il passaporto o i documenti presentati dal richiedente vengono persi o danneggiati oltre una condizione utilizzabile, allora OIS pagherà al richiedente l\'importo delle spese addebitate dal governo del paese di origine del richiedente, per la sostituzione del passaporto smarrito o danneggiato o di altri documenti attraverso la normale procedura di sostituzione, e OIS assisterà il richiedente con lo stesso nell\'ambito delle sue capacità. Tali pagamenti saranno effettuati dall\'OIS al richiedente dietro presentazione della ricevuta di pagamento emessa dal governo del rispettivo paese di origine per la sostituzione del passaporto o dei documenti smarriti o danneggiati.
              </p>
          </div>
          <div class="sub-title">6. Dichiarazione di non responsabilità</div>

          <div class="sub-section">
              <p class="para-section">
                  Fatta eccezione per il rimborso o il rimborso delle tariffe come indicato nella sezione precedente, OIS esclude la propria responsabilità in relazione a qualsiasi richiesta di visto, inclusa la responsabilità contrattuale o contrattuale, negligenza, atto illecito, statuto o altro, inclusa la responsabilità per qualsiasi ritardo o fallimento dell\'OIS nella gestione o nell\'elaborazione delle domande di visto, perdita o ritardo di passaporti e altri documenti, ritardi che coinvolgono l\'Alta Commissione della Nigeria e rifiuti di domande di visto per qualsiasi motivo.
              </p>
              <div class="sub-title pl-0">E per fugare ogni dubbio</div>
              <div class="sub-title pl-0">6.1 Nessuna responsabilità per informazioni errate</div>
              <p class="para-section">
                  OIS non avrà alcuna responsabilità per perdita, ritardi o mancata emissione di qualsiasi richiesta derivante da o in connessione con (inclusi ma non limitati a) moduli di richiesta incompleti, moduli di richiesta compilati in modo errato o falso e documentazione di supporto inaccurata o incompleta.
              </p>
              <div class="sub-title pl-0">6.2 Nessuna responsabilità per eventi non sotto il nostro controllo</div>
              <p class="para-section">
                  OIS non sarà considerata inadempiente al contratto o negligente o altrimenti responsabile in alcun modo per qualsiasi ritardo o fallimento di qualsiasi richiesta o perdita, danno o ritardo di qualsiasi passaporto o altro documento a causa di incidente, furto, calamità naturali (atto di dio) o qualsiasi altro motivo al di fuori del controllo dell\'OIS e non derivante da un inadempimento doloso dell\'OIS, o per la perdita o il danneggiamento di qualsiasi passaporto o altro documento dopo che è stato consegnato al richiedente.
              </p>
              <div class="sub-title pl-0">6.3 Nessuna responsabilità per il servizio postale e di corriere</div>
              <p class="para-section">
                  OIS non avrà alcuna responsabilità per eventuali ritardi, o per perdita o danno a qualsiasi richiesta di visto, passaporto o altri documenti, causati da, o verificatisi mentre qualsiasi domanda, passaporto o documento è in possesso di, qualsiasi servizio postale o corriere di terze parti , compreso il trasporto di domande di visto, passaporti o altri documenti tra l\'OIS e l\'Alta Commissione della Nigeria e quando vengono restituiti dall\'OIS al richiedente.
              </p>
              <div class="sub-title pl-0">6.4 Nessuna responsabilità per la valutazione delle domande di visto</div>
              <p class="para-section">
                  L\'OIS non è coinvolta nel processo di valutazione delle domande di visto, o nella loro concessione o rifiuto, e non sarà responsabile per eventuali ritardi da parte dell\'Alta Commissione della Nigeria nella valutazione, concessione o rifiuto di qualsiasi domanda di visto.
              </p>
              <div class="sub-title pl-0">6.5 Nessuna responsabilità per costi e spese sprecate</div>
              <p class="para-section">
                  L\'OIS non avrà alcuna responsabilità nei confronti di qualsiasi richiedente il visto, o qualsiasi altra persona che faccia affidamento o tragga beneficio da qualsiasi richiesta di visto, per qualsiasi impegno, costo o spesa sostenuta in affidamento o in previsione di ricevere un visto nigeriano, sia entro un determinato periodo di tempo che del tutto , inclusi ma non limitati a viaggi aerei, hotel e altre modalità di viaggio e alloggio e qualsiasi altra disposizione presa.
              </p>
              <p class="para-section">
                  L\'OIS raccomanda di non acquistare biglietti o effettuare prenotazioni che non possano essere cancellate prima del rilascio del visto, tranne nei casi in cui sia un requisito specifico indicato nella domanda di visto, nel qual caso è necessario ottenere biglietti aperti.
              </p>
              <div class="sub-title pl-0">6.6 Esclusione generale di perdite e danni</div>
              <p class="para-section">
                  OIS non avrà alcuna responsabilità (anche contrattuale o per negligenza) nei confronti di qualsiasi richiedente il visto, o qualsiasi altra persona che faccia affidamento o tragga vantaggio da qualsiasi richiesta di visto, per eventuali danni diretti, indiretti, punitivi, incidentali, speciali, consequenziali o qualsiasi danno di sorta, anche laddove causato da ritardo, smarrimento, perdita o danneggiamento di richieste di visto, passaporti e altri documenti, diversi da quelli indicati nella Sezione 5 di cui sopra.
              </p>
              <p class="para-section">
                  OIS non avrà alcuna responsabilità (anche contrattuale o per negligenza) nei confronti di qualsiasi richiedente il visto o qualsiasi altra persona che faccia affidamento su o tragga vantaggio da qualsiasi richiesta di visto per qualsiasi perdita di profitto, entrate o contratto, o affari, professione o altra occupazione, inclusi laddove causato da ritardo, smarrimento, perdita o danneggiamento delle domande di visto, passaporti e altri documenti.
              </p>
          </div>
          <div class="sub-title">7. Generale</div>
          <div class="sub-section">
              <div class="sub-title pl-0">7.1 Diritti di terzi</div>
              <p class="para-section">
                  Nulla di quanto contenuto nei presenti Termini e condizioni andrà a beneficio o sarà applicabile da qualsiasi persona diversa dal richiedente il visto, e la legge sui contratti (diritti di terzi) del 1999 non si applicherà.
              </p>
              <div class="sub-title pl-0">7.2 Modifiche a questi termini</div>
              <p class="para-section">
                  OIS, a sua esclusiva discrezione, può cambiare, modificare, annullare o ritirare alcuni o tutti questi termini e condizioni in qualsiasi momento senza alcun preavviso.
              </p>
              <div class="sub-title pl-0">7.3 Legge applicabile</div>
              <p class="para-section">
                  I presenti termini e condizioni e qualsiasi richiesta di visto saranno regolati e interpretati in conformità con le leggi dei paesi in cui siamo presenti. Eventuali reclami o controversie derivanti in relazione ai servizi forniti da OIS al richiedente saranno soggetti alla giurisdizione esclusiva dei tribunali del Paese.
              </p>
          </div>
          <div class="sub-title">8.Reclami</div>
          <div class="sub-section">
              <p class="para-section">
                  Si prega di indirizzare eventuali reclami al dipartimento relazioni con i clienti tramite e-mail all\'indirizzo
              </p>
              <p class="para-section">
                  info@oisservices.com
              </p>
          </div>
        </div>',
      'order_num' => 1,
      'lang' => 'it',
    ]);
    Content::create([
      'title' => 'PRIVACY POLICY',
      'content' => '
        <div class="main-title">Informativa sulla privacy</div>
        <div class="sub-body">
          <div class="sub-title">1. Introduzione</div>
          <div class="sub-section">
            <p class="para-section">
              Noi di OIS ci impegniamo a proteggere la privacy e la riservatezza dei dati personali dei nostri clienti. La presente Informativa sulla privacy descrive come utilizziamo, divulghiamo e proteggiamo i dati personali che otteniamo dalle persone che utilizzano i nostri servizi. Rispettiamo le leggi applicabili sulla protezione dei dati, incluso il Regolamento generale sulla protezione dei dati (GDPR), e ci impegniamo a garantire i più elevati standard di privacy e sicurezza dei dati.
            </p>
          </div>
          <div class="sub-title">2. Raccolta e utilizzo dei dati</div>
          <div class="sub-section">
            <div class="sub-title pl-0">2.1 Raccolta dei dati personali</div>
            <p class="para-section">
              Raccogliamo dati personali dagli individui in vari modi, anche quando creano un account, effettuano un pagamento, ci contattano, completano sondaggi, interagiscono con i nostri siti Web o applicazioni o utilizzano i nostri servizi. I tipi di dati personali che potremmo raccogliere includono, ma non sono limitati a:
            </p>
            <ul class="para-list">
              <li>Nome, indirizzo e informazioni di contatto</li>
              <li>Dettagli del passaporto e del visto</li>
              <li>Dati biometrici</li>
              <li>Numeri di verifica bancaria</li>
              <li>Dettagli della transazione di pagamento</li>
              <li>Informazioni sanitarie (per i servizi di sanità elettronica)</li>
              <li>Interazioni con i nostri servizi e siti web</li>
              <li>Houston (9894 Bissonnet Street, Suite 745 Houston TX 77036 USA)</li>
              <li>Dettagli lavorativi o professionali (a fini di reclutamento)</li>
            </ul>
            <div class="sub-title pl-0">2.2 Finalità del trattamento dei dati</div>
            <p class="para-section">
              Trattiamo i dati personali per le seguenti finalità:
            </p>
            <ul class="para-list">
              <li>
                Per comunicare con le persone ed evadere le loro richieste di servizi o ordini di acquisto.
              </li>
              <li>Per fornire assistenza ai clienti e rispondere alle richieste.</li>
              <li>
                Per migliorare e personalizzare l\'esperienza degli individui con i nostri servizi.
              </li>
              <li>Per elaborare i pagamenti e verificare le transazioni finanziarie.</li>
              <li>
                Per ottemperare agli obblighi di legge, compresi gli obblighi di segnalazione alle autorità competenti.
              </li>
              <li>
                Per gestire i nostri sistemi e processi, inclusi l\'analisi dei dati, il controllo e la risoluzione dei problemi.
              </li>
              <li>
                Per condurre indagini ed esercitare i diritti legali, inclusa la prevenzione e l’individuazione delle frodi.
              </li>
              <li>Per sviluppare e migliorare i nostri prodotti e servizi.</li>
            </ul>
            <div class="sub-title pl-0">2.3 Base giuridica del trattamento</div>
            <p class="para-section">
              Trattiamo i dati personali sulla base di una o più delle seguenti basi giuridiche:
            </p>
            <ul class="para-list">
              <li>
                La necessità del trattamento per l\'esecuzione di un contratto o per l\'esecuzione di misure precontrattuali su richiesta dell\'interessato.
              </li>
              <li>Rispetto degli obblighi legali ai quali siamo soggetti.</li>
              <li>
                Consenso prestato dagli interessati per specifiche attività di trattamento.
              </li>
              <li>
                Interessi legittimi perseguiti da OIS o da terzi, a condizione che su tali interessi non prevalgano i diritti e gli interessi dell\'individuo.
              </li>
            </ul>
          </div>
          <div class="sub-title">3. Condivisione e divulgazione dei dati</div>
          <div class="sub-section">
            <div class="sub-title pl-0">3.1 Fornitori di servizi di terze parti</div>
            <p class="para-section">
              Potremmo condividere i dati personali con fornitori di servizi terzi di fiducia che ci assistono nella fornitura dei nostri servizi e nell\'adempimento dei nostri obblighi. Questi fornitori di servizi sono contrattualmente obbligati a trattare i dati personali solo per nostro conto e in conformità con le nostre istruzioni.
            </p>
            <div class="sub-title pl-0">3.2 Trasferimenti aziendali</div>
            <p class="para-section">
              In caso di fusione, acquisizione o vendita di tutto o di una parte dei nostri beni, i dati personali potrebbero essere trasferiti alla terza parte interessata come parte della transazione. Adotteremo misure ragionevoli per garantire la sicurezza e la riservatezza dei dati personali durante tali trasferimenti.
            </p>
            <div class="sub-title pl-0">3.3 Requisiti legali e di conformità</div>
            <p class="para-section">
              Potremmo divulgare dati personali se richiesto dalla legge, da un ordine del tribunale o da un\'autorità governativa. Potremmo anche condividere dati personali per proteggere i nostri diritti, la privacy, la sicurezza o la proprietà, o quelli di altri.
            </p>
          </div>
          <div class="sub-title">4. Conservazione dei dati</div>
          <div class="sub-section">
            <p class="para-section">
              Conserviamo i dati personali per il periodo minimo necessario a soddisfare le finalità delineate nella presente Informativa sulla privacy, a meno che non sia richiesto o consentito dalla legge un periodo di conservazione più lungo. I criteri utilizzati per determinare il periodo di conservazione appropriato comprendono la natura dei dati personali, le finalità per le quali sono stati raccolti e i requisiti legali e regolamentari.
            </p>
          </div>
          <div class="sub-title">5. Sicurezza dei dati</div>
          <div class="sub-section">
            <p class="para-section">
              Implementiamo misure tecniche e organizzative adeguate per proteggere i dati personali da accessi non autorizzati, alterazioni, divulgazione o distruzione. Queste misure includono, ma non sono limitate a, crittografia, controlli di accesso, valutazioni periodiche della sicurezza e formazione del personale sulla protezione dei dati.
            </p>
          </div>
          <div class="sub-title">6. Diritti individuali</div>
          <div class="sub-section">
            <p class="para-section">
              Gli individui hanno determinati diritti riguardo ai propri dati personali. Fatta salva la legge applicabile, gli individui hanno il diritto di:
            </p>
            <ul class="para-list">
              <li>Accedi ai propri dati personali e richiedine una copia.</li>
              <li>Rettificare dati personali inesatti o incompleti.</li>
              <li>Cancellare i dati personali in determinate circostanze.</li>
              <li>Limitare o opporsi al trattamento dei dati personali.</li>
              <li>
                Portabilità dei dati (ricevere i dati personali in un formato strutturato, di uso comune e leggibile da dispositivo automatico).
              </li>
              <li>Revocare il consenso (se il trattamento si basa sul consenso).</li>
            </ul>
            <p class="para-section">
              Per esercitare tali diritti o presentare un reclamo relativo alla privacy, gli interessati possono contattarci utilizzando le informazioni fornite nella Sezione 8.
            </p>
          </div>
          <div class="sub-title">7. Comunicazioni di marketing e politica sui cookie</div>
          <div class="sub-section">
            <p class="para-section">
              Potremmo inviare comunicazioni di marketing a soggetti che hanno fornito il proprio consenso. Gli individui possono scegliere di non ricevere tali comunicazioni in qualsiasi momento seguendo le istruzioni fornite nella comunicazione o contattandoci.
            </p>
            <p class="para-section">
              La nostra Politica sui cookie delinea l\'uso dei cookie e di tecnologie simili sui nostri siti Web e fornisce informazioni sulla gestione delle preferenze dei cookie.
            </p>
          </div>
          <div class="sub-title">8. Trasferimenti internazionali di dati</div>
          <div class="sub-section">
            <p class="para-section">
              In quanto organizzazione globale, potremmo trasferire dati personali in paesi al di fuori dello Spazio Economico Europeo (SEE) o in altre regioni con leggi diverse sulla protezione dei dati. In tali casi, garantiremo che siano messe in atto misure di salvaguardia adeguate per proteggere i dati personali, come l\'utilizzo di clausole contrattuali standard approvate dalla Commissione Europea o l\'affidamento alla certificazione Privacy Shield dei destinatari (ove applicabile).
            </p>
          </div>
          <div class="sub-title">9. Privacy dei bambini</div>
          <div class="sub-section">
            <p class="para-section">
              I nostri servizi non sono rivolti a individui di età inferiore a 16 anni. Non raccogliamo né sollecitiamo consapevolmente dati personali da bambini. Se venissimo a conoscenza di aver raccolto dati personali di un bambino senza il consenso verificabile dei genitori, adotteremo misure per eliminare tali informazioni.
            </p>
          </div>
          <div class="sub-title">10. Aggiornamenti alla Privacy Policy</div>
          <div class="sub-section">
            <p class="para-section">
              Potremmo aggiornare la presente Informativa sulla privacy di tanto in tanto per riflettere i cambiamenti nelle nostre pratiche di trattamento dei dati o negli obblighi legali. Incoraggiamo le persone a rivedere periodicamente la presente Informativa sulla privacy per eventuali aggiornamenti. La nuova Informativa sulla privacy entrerà in vigore a partire dalla data di pubblicazione sul nostro sito web.
            </p>
          </div>
          <div class="sub-title">11. Informazioni di contatto</div>
          <div class="sub-section">
            <p class="para-section">
              Per qualsiasi dubbio, domanda, richiesta o reclamo relativo alla privacy, contattare il nostro responsabile della protezione dei dati all\'indirizzo:
            </p>
            <p class="para-section">dataprotection@oisservices.com</p>
            <p class="para-section">
              Prendiamo sul serio le questioni relative alla privacy e risponderemo tempestivamente per rispondere a qualsiasi dubbio o richiesta. Si prega di notare che la presente Informativa sulla privacy è fornita in inglese per facilitare la comprensione. In caso di conflitto tra la versione inglese e una versione tradotta, prevarrà la versione inglese.
            </p>
          </div>
        </div>',
      'order_num' => 1,
      'lang' => 'it',
    ]);
    Content::create([
      'title' => 'DATA PROJECT',
      'content' => '
        <div class="main-title">
          GDPR e relativa politica sulla protezione dei dati
        </div>
        <div class="sub-body">
          <div class="sub-title">1. Introduzione</div>
          <div class="sub-section">
            <p class="para-section">
              Nelle sue operazioni aziendali quotidiane, Online Integrated Solutions (OIS) utilizza una varietà di dati su individui identificabili, inclusi dati su:
            </p>
            <ul class="para-list">
              <li>
                Dipendenti attuali, passati e potenziali
              </li>
              <li>
                Clienti
              </li>
              <li>
                Utenti dei suoi siti web
              </li>
              <li>
                Iscritti
              </li>
              <li>
                Altri soggetti interessati
              </li>
            </ul>
            <p class="para-section">
              Nella raccolta e nell\'utilizzo di questi dati, l\'organizzazione è soggetta a una serie di normative che controllano le modalità di svolgimento di tali attività e le misure di salvaguardia che devono essere messe in atto per proteggerle.
            </p>
            <p class="para-section">
              Lo scopo di questa politica è definire la legislazione pertinente e descrivere le misure che l\'OIS sta intraprendendo per garantirne la conformità.
            </p>
            <p class="para-section">
              Questo controllo si applica a tutti i sistemi, persone e processi che costituiscono i sistemi informativi dell\'organizzazione, inclusi membri del consiglio, direttori, dipendenti, fornitori e altre terze parti che hanno accesso ai sistemi OIS.
            </p>
            <p class="para-section">
              Le seguenti politiche e procedure sono rilevanti per questo documento:
            </p>
            <ul class="para-list">
              <li>
                Processo di valutazione dell\'impatto sulla protezione dei dati
              </li>
              <li>
                Procedura di analisi dei dati personali
              </li>
              <li>
                Procedura di valutazione del legittimo interesse
              </li>
              <li>
                Procedura di risposta agli incidenti di sicurezza delle informazioni
              </li>
              <li>
                Ruoli e responsabilità del GDPR
              </li>
              <li>
                Altri soggetti interessati
              </li>
            </ul>
          </div>
          <div class="sub-title">2. Uso della crittografia</div>
          <div class="sub-section">
            <p class="para-section">
              Ove opportuno per la classificazione delle informazioni e del supporto di memorizzazione, sono state utilizzate tecniche crittografiche per garantire la riservatezza e l\'integrità dei record.
            </p>
            <p class="para-section">
              È stata prestata la massima attenzione per garantire che le chiavi di crittografia utilizzate per crittografare i record siano archiviate in modo sicuro per tutta la vita dei record pertinenti e siano conformi alla politica dell\'organizzazione sulla crittografia.
            </p>
            <div class="sub-title pl-0">2.1 Il regolamento generale sulla protezione dei dati dell\'UE - GDPR</div>
            <p class="para-section">
              Il Regolamento generale sulla protezione dei dati 2016 (GDPR) è uno degli atti legislativi più significativi che influenzano il modo in cui l\'OIS svolge le proprie attività di trattamento delle informazioni. Sanzioni significative sono applicabili se si ritiene che si sia verificata una violazione ai sensi del GDPR, che è progettato per proteggere i dati personali dei cittadini dell’Unione Europea. La politica di OIS è garantire che la nostra conformità al GDPR e ad altre normative pertinenti sia chiara e dimostrabile in ogni momento.
            </p>
            <div class="sub-title pl-0">2.2 Definizioni</div>
            <p class="para-section">
              Ci sono un totale di 26 definizioni elencate nel GDPR e non è opportuno riprodurle tutte qui. Tuttavia, le definizioni più fondamentali rispetto a questa politica sono le seguenti:
            </p>
            <p class="para-section">
              I dati personali sono definiti come:
            </p>
            <p class="para-section">
              qualsiasi informazione relativa a una persona fisica identificata o identificabile (\'interessato\'); una persona fisica identificabile è una persona che può essere identificata, direttamente o indirettamente, in particolare facendo riferimento a un identificatore come un nome, un numero di identificazione, dati relativi all\'ubicazione, un identificatore online o a uno o più fattori specifici relativi alle caratteristiche fisiche, fisiologiche, identità genetica, mentale, economica, culturale o sociale di quella persona fisica;
            </p>
            <p class="para-section">
              \'elaborazione\' significa
            </p>
            <p class="para-section">
              qualsiasi operazione o insieme di operazioni eseguite su dati personali o su insiemi di dati personali, anche con mezzi automatizzati, come raccolta, registrazione, organizzazione, strutturazione, conservazione, adattamento o alterazione, recupero, consultazione, uso, divulgazione da parte di trasmissione, diffusione o altrimenti messa a disposizione, allineamento o combinazione, restrizione, cancellazione o distruzione;
            </p>
            <p class="para-section">
              \'controllore\' significa
            </p>
            <p class="para-section">
              la persona fisica o giuridica, l\'autorità pubblica, il servizio o altro organismo che, singolarmente o insieme ad altri, determina le finalità e i mezzi del trattamento di dati personali; laddove le finalità e i mezzi di tale trattamento siano determinati dal diritto dell’Unione o degli Stati membri, il titolare del trattamento o i criteri specifici per la sua nomina possono essere previsti dal diritto dell’Unione o degli Stati membri;
            </p>
            <div class="sub-title pl-0">2.3 Principi relativi al trattamento dei dati personali</div>
            <p class="para-section">
              Esistono una serie di principi fondamentali su cui si basa il GDPR.<br>
              Questi sono i seguenti:
            </p>
            <p class="para-section">
              1. I dati personali sono:
            </p>
            <p class="para-section">
              a) trattati in modo lecito, corretto e trasparente nei confronti dell\'interessato ("liceità, correttezza e trasparenza");
            </p>
            <p class="para-section">
              (b) raccolti per scopi determinati, espliciti e legittimi e non ulteriormente trattati in modo incompatibile con tali scopi; l\'ulteriore trattamento a fini di archiviazione nel pubblico interesse, di ricerca scientifica o storica o a fini statistici non è, ai sensi dell\'articolo 89, paragrafo 1, considerato incompatibile con le finalità iniziali ("limitazione della finalità\");
            </p>
            <p class="para-section">
              (c) adeguati, pertinenti e limitati a quanto necessario rispetto alle finalità per le quali sono trattati (\'minimizzazione dei dati\');
            </p>
            <p class="para-section">
              (d) esatti e, se necessario, aggiornati; deve essere adottata ogni misura ragionevole per garantire che i dati personali inesatti rispetto alle finalità per le quali sono trattati siano cancellati o rettificati senza ritardo (\"esattezza\");
            </p>
            <p class="para-section">
              (e) conservati in una forma che consenta l\'identificazione degli interessati per un periodo non superiore a quello necessario agli scopi per i quali i dati personali sono trattati; i dati personali possono essere conservati per periodi più lunghi purché siano trattati esclusivamente a fini di archiviazione nel pubblico interesse, di ricerca scientifica o storica o a fini statistici ai sensi dell\'articolo 89, paragrafo 1, previa attuazione delle adeguate misure tecniche e organizzative. misure richieste dal presente Regolamento al fine di salvaguardare i diritti e le libertà dell\'interessato (“limitazione della conservazione”);
            </p>
            <p class="para-section">
              (f) trattati in modo da garantire un\'adeguata sicurezza dei dati personali, compresa la protezione contro il trattamento non autorizzato o illegale e contro la perdita, la distruzione o il danno accidentale, utilizzando misure tecniche o organizzative adeguate ("integrità e riservatezza\").
            </p>
            <p class="para-section">
              (f) trattati in modo da garantire un\'adeguata sicurezza dei dati personali, compresa la protezione contro il trattamento non autorizzato o illegale e contro la perdita, la distruzione o il danno accidentale, utilizzando misure tecniche o organizzative adeguate ("integrità e riservatezza\").
            </p>
            <p class="para-section">
              OIS garantirà il rispetto di tutti questi principi sia nei trattamenti attualmente effettuati sia nell\'ambito dell\'introduzione di nuove modalità di trattamento come i nuovi sistemi informatici.
            </p>
            <div class="sub-title pl-0">2.4 Diritti dell\'individuo</div>
            <p class="para-section">
              L’interessato gode inoltre dei diritti previsti dal GDPR. Questi consistono in:
            </p>
            <p class="para-section">
              Diritto di essere informato<br>Diritto di accesso<br>Diritto di rettifica<br>Diritto di cancellazione<br>Diritto di limitazione di trattamento<br>Diritto alla portabilità dei dati<br>Diritto di opposizione< br>Diritti in relazione al processo decisionale automatizzato e alla profilazione</p>
            <p class="para-section">
              Ciascuno di questi diritti è supportato da apposite procedure all\'interno dell\'OIS che consentono di intraprendere le azioni richieste nei tempi indicati dal GDPR.
            </p>
            <p class="para-section">
              Queste tempistiche sono mostrate nella Tabella 1.
            </p>
            <table>
              <thead>
                <tr>
                  <th>Richiesta dell\'interessato</th>
                  <th>Cronologia</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>Il diritto ad essere informati</td>
                  <td>Quando i dati vengono raccolti (se forniti dall\'interessato) o entro un mese (se non forniti dall\'interessato)</td>
                </tr>
                <tr>
                  <td>Il diritto di accesso</td>
                  <td>Un mese</td>
                </tr>
                <tr>
                  <td>Il diritto di rettifica</td>
                  <td>Un mese</td>
                </tr>
                <tr>
                  <td>Il diritto alla cancellazione</td>
                  <td>Senza indebito ritardo</td>
                </tr>
                <tr>
                  <td>Il diritto di limitare il trattamento</td>
                  <td>Senza indebito ritardo</td>
                </tr>
                <tr>
                  <td>Il diritto alla portabilità dei dati</td>
                  <td>Un mese</td>
                </tr>
                <tr>
                  <td>Il diritto di opposizione</td>
                  <td>Al ricevimento dell\'opposizione</td>
                </tr>
              </tbody>
            </table>
            <p class="para-section">
              Tabella 1 – Tempistiche per le richieste degli interessati
            </p>
            <div class="sub-title pl-0">2.5 Liceità del trattamento</div>
            <p class="para-section">
              Esistono sei modi alternativi in cui è possibile stabilire la liceità di un caso specifico di trattamento dei dati personali ai sensi del GDPR. È politica dell\'OIS individuare la base adeguata per il trattamento e documentarlo, in conformità con il Regolamento. Le opzioni sono descritte brevemente nelle sezioni seguenti.
            </p>
            <div class="sub-title pl-0">2.5.1 Consenso</div>
            <p class="para-section">
              A meno che non sia necessario per un motivo consentito dal GDPR, OIS otterrà sempre il consenso esplicito dell\'interessato per raccogliere ed elaborare i propri dati. In caso di bambini di età inferiore a 16 anni (un\'età inferiore potrebbe essere consentita in specifici Stati membri dell\'UE) verrà ottenuto il consenso dei genitori. Informazioni trasparenti sul nostro utilizzo dei loro dati personali saranno fornite agli interessati nel momento in cui viene ottenuto il consenso e verranno spiegati i loro diritti in relazione ai loro dati, come il diritto di revocare il consenso. Queste informazioni saranno fornite in una forma accessibile, scritta in un linguaggio chiaro e gratuitamente. Se i dati personali non sono ottenuti direttamente presso l\'interessato, tali informazioni saranno fornite all\'interessato entro un termine ragionevole dall\'ottenimento dei dati e comunque entro un mese.
            </p>
            <div class="sub-title pl-0">2.5.2 Esecuzione di un contratto</div>
            <p class="para-section">
              Laddove i dati personali raccolti e trattati siano necessari per adempiere a un contratto con l’interessato, non è richiesto il consenso esplicito. Ciò accade spesso quando il contratto non può essere concluso senza i dati personali in questione, ad es. una consegna non può essere effettuata senza un indirizzo a cui consegnare.
            </p>
            <div class="sub-title pl-0">2.5.3 Obbligo legale</div>
            <p class="para-section">
              Se è necessario raccogliere e trattare i dati personali per adempiere alla legge, non è richiesto il consenso esplicito. Questo potrebbe essere il caso, ad esempio, di alcuni dati relativi all’occupazione e alla tassazione, e di molti settori affrontati dal settore pubblico.
            </p>
            <div class="sub-title pl-0">2.5.4 Interessi vitali dell\'interessato</div>
            <p class="para-section">
              Nel caso in cui i dati personali siano necessari per tutelare gli interessi vitali dell\'interessato o di un\'altra persona fisica, ciò può costituire la base giuridica del trattamento. OIS conserverà prove ragionevoli e documentate di ciò, ogniqualvolta tale motivo venga utilizzato come base legale del trattamento dei dati personali. Ad esempio, questo può essere utilizzato negli aspetti dell’assistenza sociale, in particolare nel settore pubblico.
            </p>
            <div class="sub-title pl-0">2.5.5 Compito svolto nell\'interesse pubblico</div>
            <p class="para-section">
              Qualora l\'OIS debba svolgere un compito che ritiene sia di interesse pubblico o nell\'ambito di un dovere ufficiale, non sarà richiesto il consenso dell\'interessato. La valutazione dell\'interesse pubblico o del dovere d\'ufficio sarà documentata e resa disponibile come prova ove richiesto.
            </p>
            <div class="sub-title pl-0">2.5.6 Interessi legittimi</div>
            <p class="para-section">
              Se il trattamento di dati personali specifici rientra nell’interesse legittimo di OIS e si ritiene che non pregiudichi i diritti e le libertà dell’interessato in modo significativo, ciò può essere definito motivo legittimo del trattamento. Ancora una volta, il ragionamento alla base di questo punto di vista sarà documentato.
            </p>
            <div class="sub-title pl-0">2.6 Privacy fin dalla progettazione</div>
            <p class="para-section">
              L\'OIS ha adottato il principio della privacy fin dalla progettazione e garantirà che la definizione e la pianificazione di tutti i sistemi nuovi o significativamente modificati che raccolgono o trattano dati personali saranno soggette alla dovuta considerazione delle questioni relative alla privacy, compreso il completamento di uno o più progetti di impatto sulla protezione dei dati. valutazioni.
            </p>
            <p class="para-section">
              La valutazione d’impatto sulla protezione dei dati includerà:
            </p>
            <p class="para-section">
              Considerazione di come verranno trattati i dati personali e per quali scopi<br>Valutazione se il trattamento proposto dei dati personali sia necessario e proporzionato allo scopo(i)
            </p>
            <p class="para-section">
              Valutazione dei rischi per le persone nel trattamento dei dati personali<br>Quali controlli sono necessari per affrontare i rischi identificati e dimostrare la conformità alla legislazione<br>L\'uso di tecniche come la minimizzazione dei dati e la pseudonimizzazione sarà considerato ove applicabile e appropriato.
            </p>
            <div class="sub-title pl-0">2.7 Contratti che prevedono il trattamento di dati personali</div>
            <p class="para-section">
              OIS garantirà che tutti i rapporti da essa instaurati che implicano il trattamento di dati personali siano soggetti a un contratto documentato che includa le informazioni e i termini specifici richiesti dal GDPR. Per ulteriori informazioni consultare il Responsabile del trattamento GDPR
              Politica dell\'accordo
            </p>
            <div class="sub-title pl-0">2.8 Trasferimenti internazionali di dati personali</div>
            <p class="para-section">
              I trasferimenti di dati personali al di fuori dell’Unione Europea saranno attentamente esaminati prima che il trasferimento abbia luogo per garantire che rientrino nei limiti imposti dal GDPR. Ciò dipende in parte dal giudizio della Commissione Europea in merito all\'adeguatezza delle garanzie per i dati personali applicabili nel paese ricevente e questo potrebbe cambiare nel tempo.<br>I trasferimenti internazionali di dati infragruppo saranno soggetti ad accordi giuridicamente vincolanti di cui come norme aziendali vincolanti (BCR) che forniscono diritti applicabili agli interessati.
            </p>
            <div class="sub-title pl-0">2.9 Responsabile della protezione dei dati</div>
            <p class="para-section">
              Un ruolo definito di Responsabile della protezione dei dati (DPO) è richiesto dal GDPR se un\'organizzazione è un\'autorità pubblica, se esegue un monitoraggio su larga scala o se tratta tipi di dati particolarmente sensibili su larga scala. Il DPO deve possedere un livello adeguato di conoscenze e può essere una risorsa interna o esternalizzata a un fornitore di servizi appropriato.
            </p>
            <p class="para-section">
              Sulla base di tali criteri, OIS ha nominato Responsabile della Protezione dei Dati, di seguito i dati di contatto:
            </p>
            <p class="para-section">
              Nome: Archibald Coker<br>E-mail: acoker@oisservices.com<br>Contatto: +44 (0) 207 832 0001
            </p>
            <div class="sub-title pl-0">2.10 Notifica di violazione</div>
            <p class="para-section">
              La politica dell\'OIS è quella di essere giusta e proporzionata nel considerare le azioni da intraprendere per informare le parti interessate in merito alle violazioni dei dati personali. In linea con il GDPR, qualora sia nota una violazione che potrebbe comportare un rischio per i diritti e le libertà delle persone, l\'autorità di controllo competente sarà informata entro 72 ore. Ciò sarà gestito in conformità con la nostra Procedura di risposta agli incidenti di sicurezza delle informazioni che definisce il processo complessivo di gestione degli incidenti di sicurezza delle informazioni.
            </p>
            <p class="para-section">
              Ai sensi del GDPR, l\'autorità di protezione dei dati competente ha l\'autorità di imporre una serie di sanzioni pecuniarie fino al 4% del fatturato mondiale annuo o a venti milioni di euro, a seconda di quale sia il valore più elevato, per violazioni delle normative.
            </p>
            <div class="sub-title pl-0">2.11 Affrontare la conformità al GDPR</div>
            <p class="para-section">
              Vengono intraprese le seguenti azioni per garantire che l\'OIS rispetti in ogni momento il principio di responsabilità del GDPR:
            </p>
            <ul class="para-list">
              <li>
                La base giuridica per il trattamento dei dati personali è chiara e inequivocabile
              </li>
              <li>
                Viene nominato un responsabile della protezione dei dati con responsabilità specifica per la protezione dei dati nell\'organizzazione (se richiesto)
              </li>
              <li>
                Tutto il personale coinvolto nella gestione dei dati personali comprende le proprie responsabilità nel seguire le buone pratiche di protezione dei dati
              </li>
              <li>
                A tutto il personale è stata fornita formazione sulla protezione dei dati
              </li>
              <li>
                Vengono seguite le regole relative al consenso
              </li>
              <li>
                Sono disponibili percorsi per gli interessati che desiderano esercitare i propri diritti relativi ai dati personali e tali richieste sono gestite in modo efficace
              </li>
              <li>
                Vengono effettuate revisioni periodiche delle procedure che coinvolgono dati personali
              </li>
              <li>
                La privacy fin dalla progettazione viene adottata per tutti i sistemi e processi nuovi o modificati
              </li>
            </ul>
            <p class="para-section">
              Viene registrata la seguente documentazione delle attività di trattamento:
            </p>
            <ul class="para-list">
              <li>
                Nome dell\'organizzazione e dettagli rilevanti
              </li>
              <li>
                Finalità del trattamento dei dati personali
              </li>
              <li>
                Categorie di soggetti e dati personali trattati
              </li>
              <li>
                Categorie di destinatari dei dati personali
              </li>
              <li>
                Accordi e meccanismi per i trasferimenti di dati personali verso paesi extra UE compresi i dettagli dei controlli in atto
              </li>
              <li>
                Piani di conservazione dei dati personali
              </li>
              <li>
                Controlli tecnici e organizzativi pertinenti in atto
              </li>
            </ul>
            <p class="para-section">
              Queste azioni vengono riviste regolarmente come parte del processo di gestione relativo alla protezione dei dati.
            </p>
          </div>
          <div class="sub-title">Protezione dei dati correlata</div>
          <div class="sub-section">
            <div class="sub-title pl-0">Principi sulla protezione dei dati</div>
            <p class="para-section">
              Esistono 8 principi di protezione dei dati che garantiscono che le organizzazioni raccolgano, archivino e trattino i dati personali in modo da proteggere la riservatezza dei clienti. Questi principi sono stabiliti nella tabella 1 della Legge e sono i seguenti:
            </p>
            <p class="para-section">
              io. I dati devono essere gestiti in modo equo e legale<br>Abbiamo motivi legittimi per ottenere, archiviare ed elaborare i dati dei clienti, ovvero per aiutarti a ottenere un passaporto, un visto e per altri scopi autorizzati dalla legge e dai contratti tra noi e i nostri clienti . Garantiamo che i tuoi dati non verranno utilizzati per scopi illegali.
            </p>
            <p class="para-section">
              ii. I dati personali saranno ottenuti solo per uno o più scopi specificati e legittimi, e non saranno ulteriormente trattati in alcun modo incompatibile con tale scopo o tali scopi.<br>A causa della natura del nostro lavoro, lo scopo per il quale ci fornite per noi i tuoi dati personali sono evidenti per te e per noi. Non utilizzeremo i tuoi dati per nessun altro scopo incompatibile con lo scopo originale a meno che tu non ci dia prima il tuo consenso o siamo obbligati per legge a farlo.
            </p>
            <p class="para-section">
              iii. I dati personali devono essere adeguati, pertinenti e non eccessivi rispetto allo scopo o agli scopi per i quali vengono trattati.<br>Prenderemo solo le informazioni che riteniamo pertinenti e sufficienti per rispettare il nostro contratto con te.
            </p>
            <p class="para-section">
              iv. I dati personali devono essere accurati e, ove necessario, aggiornati.<br>Ci assicuriamo che i dati personali che ci fornisci siano corretti e non fuorvianti. Raggiungiamo questo obiettivo dandoti l\'opportunità di confermare le informazioni che ci fornisci e anche richiedendo prove documentali quando necessario. Se ci sono cambiamenti rilevanti nei tuoi dati personali, ad esempio, cambio di nome o nazionalità, ti preghiamo di comunicarcelo il prima possibile in modo che possiamo aggiornare il tuo record.
            </p>
            <p class="para-section">
              v. I dati personali trattati per uno o più scopi non saranno conservati per un periodo superiore a quello necessario per tale o tali scopi.<br>Di tanto in tanto, esamineremo il nostro database per vedere se alcuni dati personali sono ancora necessari da conservare presso di noi. Se lo scopo per il quale sono stati conservati è stato raggiunto e riteniamo che non sia più necessario continuare a conservarli, li cancelleremo in modo sicuro.
            </p>
            <p class="para-section">
              vi. I dati personali saranno trattati in conformità con i diritti degli interessati ai sensi della presente legge.<br>Tratteremo i tuoi dati personali in modo tale da consentirti di eseguire una delle seguenti operazioni:
            </p>
            <ul class="para-list-digit">
              <li>
                il diritto di accesso a una copia dei tuoi dati personali, popolarmente noto come "richiesta di accesso del soggetto". La tariffa attuale è di £ 10 per richiesta standard e miriamo a fornirla entro 14 giorni. La richiesta di accesso del soggetto deve essere effettuata a info@oisservices.com via e-mail o per posta Il capo del centro, OIS Services, 56-57 Fleet Street, EC4Y 1JU, Londra </li>
              <li>
                il diritto di opporsi al trattamento dei tuoi dati personali in un modo che potrebbe causarti danno o disagio;
              </li>
              <li>
                il diritto di impedire il trattamento dei dati personali in modo incompatibile con lo scopo o gli scopi originali;
              </li>
              <li>
                il diritto di opporsi alle decisioni prese con mezzi automatizzati;
              </li>
              <li>
                il diritto, se del caso, di ottenere la rettifica, il blocco o la cancellazione dei dati personali inesatti, e
              </li>
              <li>
                il diritto di chiedere il risarcimento dei danni cagionati dalla violazione della legge.
              </li>
            </ul>
            <p class="para-section">
              vii. Sicurezza dei dati personali<br>I tuoi dati personali sono conservati in un ambiente molto sicuro sia fisicamente che tecnicamente. Gli ambienti in cui vengono conservati i dati personali sono interdetti a tutti i soggetti non autorizzati. L\'accesso a queste parti dei locali può avvenire esclusivamente tramite chiave elettronica rilasciata solo alle persone autorizzate. I tuoi dati personali sono accessibili sul sistema solo da persone autorizzate. Solo tali persone autorizzate possono alterare, divulgare o distruggere i tuoi dati personali. Inoltre, tali persone autorizzate possono svolgere una qualsiasi di tali funzioni solo nell’ambito dei loro compiti legittimi. Pertanto, le probabilità che i tuoi dati personali vengano trattati illecitamente o accidentalmente danneggiati, distrutti o persi sono molto minime.
              Inoltre, è nostra politica garantire che:
            </p>
            <ul class="para-list-digit">
              <li>
                ogni dipendente autorizzato che ha accesso ai dati personali ha la propria password che non viene condivisa con altre persone,
              </li>
              <li>
                software di sicurezza e firewall approvati vengono utilizzati per proteggere i nostri dati,
              </li>
              <li>
                i dati personali stampati non utilizzati vengono distrutti,
              </li>
              <li>
                scoraggiamo l\'archiviazione di dati personali su laptop e altri dispositivi e supporti mobili, ma se lo fanno, devono essere bloccati in modo sicuro e non portati fuori dall\'ufficio.
              </li>
            </ul>
            <p class="para-section">
              viii. Trasferimento di dati personali al di fuori dello Spazio Economico Europeo<br>I tuoi dati personali non saranno trasferiti verso un paese o territorio al di fuori dello Spazio Economico Europeo a meno che tale paese o territorio non garantisca un livello adeguato di protezione dei diritti e delle libertà degli interessati in relazione al trattamento dei dati personali. Sono solo pochi i paesi al di fuori del SEE che sono stati riconosciuti come aventi livelli adeguati di protezione per il trattamento dei dati personali paragonabili ai paesi del SEE. Quando trasferiamo dati personali negli Stati Uniti, ci assicuriamo che il destinatario sia un firmatario del Safe Harbor Scheme del Dipartimento del Commercio degli Stati Uniti. Questo schema è riconosciuto dalla Commissione Europea come un sistema di protezione adeguata per gli interessati. In relazione ad altri paesi al di fuori del SEE che non sono stati accettati come dotati di sicurezza e tutele equivalenti per il trattamento dei dati personali, firmiamo un contratto separato, i cui termini sono approvati dalle Direttive europee o assicuriamo che vi sia una clausola nel contratto che tutela il trattamento dei dati personali di tutti i nostri clienti.
            </p>
          </div>
        </div>',
      'order_num' => 1,
      'lang' => 'it',
    ]);

    //tr
    Content::create([
      'title' => 'ABOUT OIS',
      'content' => '<p class="title body-section">Sektörlerde<br>yenilikçi yazılım çözümleri.</p>',
      'order_num' => 1,
      'lang' => 'tr',
    ]);
    Content::create([
      'title' => 'ABOUT OIS',
      'content' => '<p class="sub-title">OIS (Çevrimiçi Entegre Hizmetler)</p>
                 <p class="description mt-4">OIS (Çevrimiçi Entegre Çözümler), çeşitli sektörlere yayılan son teknoloji yazılım çözümlerinin lider sağlayıcısı olarak yenilikçiliğin ön saflarında yer almaktadır. Yolculuğumuz Vize Başvuru Merkezi ve Destek Hizmetleri Sağlayıcısı olarak başladı ve o zamandan beri hizmetlerimizi Nijerya\'nın dünya çapındaki tüm diplomatik misyonlarına genişletecek şekilde geliştik. Başarımız ileri teknoloji, benzersiz kalite, ölçeklenebilirlik ve çözümlerimizin sorunsuz aktarılabilirliği ile desteklenmektedir.</p>
                 <p class="description mb-0 mt-4">OIS\'i diğerlerinden ayıran şey, uygulamaların dünya çapında zahmetsizce entegrasyonuna olanak tanıyan küresel ayak izimizdir. Mükemmelliğe olan bağlılığımız, bankacılık platformlarında sağlam bir geçmişe sahip olmamız nedeniyle göçmenlik hizmetlerinin ötesine uzanmaktadır. Nijerya bankaları için önemli bir aracı olarak hizmet vererek, yurtdışında yerleşik Nijeryalılar ve yurtdışında Nijerya banka hesaplarını açmak veya yeniden etkinleştirmek isteyen diğer milletlerden bireylere temel hizmetler sunuyoruz.</p>
                 <p class="description mb-0 mt-4">OIS olarak, mükemmelliğe ve teknolojik beceriye olan bağlılığımızı yansıtan kapsamlı bir çözüm paketi sunarak endüstri standartlarını yeniden tanımlamaya sürekli çalışıyoruz. Benzersiz hizmet sunumu ve küresel bağlantı yolculuğunda bize katılın.</p>',
      'order_num' => 2,
      'lang' => 'tr',
    ]);
    Content::create([
      'title' => 'ABOUT OIS',
      'content' => '<p class="description">OIS olarak, olağanüstü hizmet sunumuna ve en son teknolojiye olan sarsılmaz bağlılığımızdan büyük gurur duyuyoruz. Kapsamlı hizmet yelpazemiz, Eğitim, Sağlık ve Bankacılık platformlarını kapsayan vize ve pasaport çözümlerinin ötesine geçer. Süreçleri basitleştirmeye inanıyoruz ve bunu başarmak için kullanıcı dostu çevrimiçi portalımız, kusursuz ödeme sistemimiz ve gerçek zamanlı güncellemelerimiz aracılığıyla kolaylaştırılmış bir uygulama deneyimi sunuyoruz.</p>
                 <p class="description mt-4 mb-0">Banka Doğrulama Numarası (BVN) almak isteyenler için, SMS gönderimiyle birlikte çevrimiçi başvuru sürecimiz verimli ve sorunsuz bir deneyim sağlar.</p>
                 <p class="description mt-4 mb-0">Finansal hizmetler alanında Elektronik Para Transferi hizmetlerimiz öne çıkıyor. Nakit alma, kripto para birimi işlemleri, banka transferleri, mobil para işlemleri ve yayın süresi yüklemeleri gibi çeşitli yöntemleri destekleyerek çevrimiçi para transferleri için güvenli ve uygun fiyatlı bir araç sağlıyoruz. OIS ile farklı ihtiyaçlarınızı karşılayacak şekilde tasarlanmış modern, güvenli ve esnek finansal çözümlerin rahatlığını yaşayın.</p>',
      'order_num' => 3,
      'lang' => 'tr',
    ]);
    Content::create([
      'title' => 'ABOUT OIS',
      'content' => '<p class="description mb-0">OIS\'te müşterilerimizin refahı ön plandadır ve taahhüdümüz birinci sınıf E-sağlık ve Wellness hizmetleri sunmaya kadar uzanır. Sunduğumuz tekliflerle kendinizi sağlık konusunda kapsamlı bir yaklaşıma kaptırın:</p>
                 <p class="description mt-0 mb-0"><b>Teletıp Hizmetleri:</b></p>
                 <p class="description mt-0 mb-0 ml-4">• Teletıp hizmetlerimizle sağlık hizmetini kendi koşullarınıza göre deneyimleyin. Sanal danışmalar, kişiselleştirilmiş diyet planlarının kilidini açma, özel egzersiz rutinleri ve paha biçilmez zihinsel sağlık desteği aracılığıyla sağlık uzmanlarıyla sorunsuz bir şekilde bağlantı kurun. Sağlığınız bizim önceliğimizdir ve teletıp hizmetimizdir
                     hizmetler sağlık uzmanlığını doğrudan size getirir.</p>
                 <p class="description mt-0 mb-0"><b>Sağlık İzleme Cihazları:</b></p>
                 <p class="description mt-0 mb-0 ml-4">• Sağlık izleme cihazlarımızla sağlığınız hakkında bilgi sahibi olun ve proaktif olun. Bu son teknoloji araçlar, yaşamsal belirtileri izlemenize olanak tanıyarak genel sağlığınız hakkında değerli bilgiler sağlar. Daha sağlıklı bir yaşam tarzı için veriye dayalı kararlarla kendinizi güçlendirin.</p>
                 <p class="description mt-0 mb-0"><b>Entegre Sağlık Programı:</b></p>
                 <p class="description mt-0 mb-0 ml-4">• Sağlıklı yaşam programımız, ruh sağlığı desteğini sağlıklı yaşam yolculuğunuza kusursuz bir şekilde entegre eden bütünsel bir sağlık cennetidir. Fiziksel sağlığın ötesinde zihinsel sağlığa öncelik veriyoruz ve genel iyiliğe dengeli ve kapsamlı bir yaklaşım getiriyoruz.</p>
                 <p class="description mt-0 mb-0">Misyonumuz yalnızca son teknoloji yazılım çözümleri sunmak değil, aynı zamanda sağlık ve sağlıklı yaşam arayışınızda güvenilir bir müttefik olmaktır. Süreçleri basitleştirerek ve farklı sektörlerdeki deneyimleri geliştirerek hayatınızın her alanında olumlu bir etki yaratmaya kendimizi adadık. olduğu bir dünyaya hoş geldiniz.
                     yenilik refahla buluşuyor.</p>
                 <p class="description mt-4 mb-5">OIS olarak değişmez taahhüdümüz, yalnızca süreçleri kolaylaştırmakla kalmayıp aynı zamanda süreçleri basitleştiren ve çeşitli sektörlerdeki deneyimleri geliştiren son teknoloji yazılım çözümlerine öncülük etmektir.</p>',
      'order_num' => 4,
      'lang' => 'tr',
    ]);
    Content::create([
      'title' => 'SERVICES',
      'content' => '<p class="title body-section">İşletmelerin ve bireylerin<br>karmaşık zorlukların üstesinden gelmesine yardımcı oluyoruz.</p>',
      'order_num' => 1,
      'lang' => 'tr',
    ]);
    Content::create([
      'title' => 'SERVICES',
      'content' => '<p class="sub-title">VİZE VE PASAPORT BAŞVURU İŞLEMLERİ:</p>
                 <p class="description mb-0">Çevrimiçi Entegre Çözümler\'de (OIS), karmaşık zorlukların üstesinden gelme konusunda işletmeleri ve bireyleri güçlendirmeye adanmış, devrim niteliğindeki yazılım çözümlerinde küresel bir öncü olarak duruyoruz. Derin etkimiz, özellikle verimliliği, doğruluğu ve ölçeklenebilirliği artırmak ve sonuçta genel müşteri deneyimini yükseltmek için gelişmiş makine öğrenimi (ML) algoritmalarının gücünden yararlandığımız VISA uygulama işleme alanında belirgindir. Makine öğrenimine yönelik yenilikçi yaklaşımımızın dönüştürücü iyileştirmeler sağlayabileceği temel alanlar şunlardır:</p>
                 <p class="description mt-0 mb-0 ml-4">• Veri İşleme ve Doğrulama.</p>
                 <p class="description mb-0 ml-4">• Sahtekarlık Tespiti.</p>
                 <p class="description mb-0 ml-4">• Biyometrik Tanımlama.</p>
                 <p class="description mb-0 ml-4">• Uygulama Durumu Takibi.</p>
                 <p class="description mb-5 mt-4">OIS olarak, teknolojinin beklentileri karşılamakla kalmayıp aştığı bir gelecek hayal ediyoruz ve yeniliğin sınırlarını zorlama konusundaki kararlılığımız, müşterilerimizin ve kullanıcılarımızın en gelişmiş teknolojilerden yararlanmasını sağlıyor , verimli ve güvenli vize ve pasaport başvuru işleme çözümleri mevcuttur.</p>',
      'order_num' => 2,
      'lang' => 'tr',
    ]);
    Content::create([
      'title' => 'SERVICES',
      'content' => '<p class="sub-title">BANKA DOĞRULAMA NUMARASI (BVN) BAŞVURU İŞLEME:</p>
                 <p class="description mb-0">Kusursuz hizmet arayışımızda, özellikle Banka Doğrulama Numarası (BVN) başvuru sürecimizi optimize etme konusunda makine öğreniminin dönüştürücü potansiyelinin farkındayız. Müşterilerimiz için hızlı ve erişilebilir BVN ihraç etmenin büyük önemini anlıyoruz ve bu da bizi bu önemli prosedürü sürekli olarak iyileştirmeye ve hızlandırmaya itiyor. Makine öğreniminin yeteneklerinden yararlanarak BVN kayıtlarının hem doğruluğunu hem de verimliliğini artırmayı, aynı zamanda hatalar ve dolandırıcılık faaliyetleriyle ilişkili riskleri azaltmayı hedefliyoruz. Makine öğrenimini birleştirmemizin önemli bir etki vaat ettiği temel alanlar şunlardır:</p>
                 <p class="description mt-0 mb-0 ml-4">• Veri İşleme ve Doğrulama.</p>
                 <p class="description mt-0 mb-0 ml-4">• Tahmine Dayalı Analiz.</p>
                 <p class="description mt-0 mb-0 ml-4">• Sahtekarlık Tespiti.</p>
                 <p class="description mt-4 mb-5">Taahhüdümüzün temelinde müşterilerimize benzersiz bir BVN uygulama deneyimi (hızlı, kesin ve potansiyel risklere karşı güçlendirilmiş) sunma konusundaki kararlılığımız yatıyor. Makine öğreniminin eklenmesiyle BVN tahsisinde verimlilik ve güvenlik standartlarını yeniden tanımlama yolculuğuna çıkıyoruz.</p>',
      'order_num' => 3,
      'lang' => 'tr',
    ]);
    Content::create([
      'title' => 'SERVICES',
      'content' => '<p class="sub-title">Yapay Zekayla Desteklenen Sohbet Robotları ile Hizmet Mükemmeliyetini Artırmak:</p>
                 <p class="description">Müşteri hizmetlerini ve desteğini dönüştürmeye hazır, etkili bir gelişme olan en son yeniliğimiz olan AI Chatbot\'u duyurmaktan büyük heyecan duyuyoruz. Bu son teknoloji Chatbot, makine öğrenimi algoritmalarının gücünden yararlanarak müşterilere kişiselleştirilmiş ve etkili bir yardım yolu sunuyor. Chatbot\'umuz, sorulara hızlı ve kesin yanıtlar vererek ve sorunları insan müdahalesine minimum düzeyde ihtiyaç duyarak çözerek müşteri deneyiminde devrim yaratmak üzere tasarlanmıştır.</p>
                 <p class="description mt-4 mb-0">Temel Özellikler ve Avantajlar:</p>
                 <p class="description mt-0 mb-0 ml-4">• Hızlı ve Doğru Yanıtlar.</p>
                 <p class="description mt-0 mb-0 ml-4">• 7/24 Erişilebilirlik.</p>
                 <p class="description mt-0 mb-0 ml-4">• Bekleme Sürelerinin Ortadan Kaldırılması.</p>
                 <p class="description mt-0 mb-0 ml-4">• Çok Yönlü Sorgu İşleme.</p>
                 <p class="description mt-4 mb-5">Bu AI Chatbot, hizmet standartlarını yeniden tanımlama kararlılığını temsil ederek müşterilerimizin markamızla sorunsuz ve verimli bir etkileşim yaşamasını sağlar. Teknoloji gelişmeye devam ettikçe, müşteri yolculuğunuzu geliştirmek için yenilikçi çözümlerden yararlanarak ön planda kalıyoruz. Kişiselleştirilmiş ve duyarlı yeni bir çağa hoş geldiniz</p>',
      'order_num' => 4,
      'lang' => 'tr',
    ]);
    Content::create([
      'title' => 'SERVICES',
      'content' => '<p class="sub-title">SON TEKNOLOJİ YOLUYLA E-SAĞLIĞI VE SAĞLIĞI YÜKSELTME</p>
                 <p class="description mb-0">Sürekli iyileştirme yolculuğuna çıkarak, ileri teknolojinin entegrasyonu yoluyla E-sağlık ve Sağlıklı Yaşam Hizmetlerimizde devrim yaratmaya kararlıyız. Bu yeniliklerin, optimum sağlık ve refahı korumanıza yardımcı olabileceği sayısız yolu keşfedin:</p>
                 <p class="description mt-0 mb-0">1. Teletıp Hizmetleri:</p>
                 <p class="description mb-0 ml-4">• Gelişmiş sistemlerimizle kendinizi sağlık hizmetlerinin geleceğine bırakın. Teletıp hizmetlerimiz sağlıkla ilgili sorunları doğru bir şekilde teşhis ettiğinden ve benzersiz ihtiyaçlarınıza göre özelleştirilmiş tedavi planları sunduğundan, hassasiyet ve kişiselleştirme ön plandadır.</p>
                 <p class="description mt-0 mb-0">2. Sağlıklı Yaşam Programı:</p>
                 <p class="description mb-0 ml-4">• Çığır açan sağlıklı yaşam programımız aracılığıyla sağlıklı yaşam için bütünsel bir yaklaşımı benimseyin. Blockchain ve Web3 teknolojisinin dönüştürücü potansiyelinden yararlanan güvenli ve merkezi olmayan platformumuz, kişiselleştirilmiş diyet planları, kişiye özel egzersiz rejimleri ve kapsamlı zihinsel sağlık desteği sunar. Sizin kadar kişisel bir sağlıklı yaşam yolculuğuna adım atın.</p>
                 <p class="description mt-0 mb-0">3. Sağlık İzleme Cihazları:</p>
                 <p class="description mb-0 ml-4">• Sağlık izleme cihazlarımızla yapay zekanın gücünü açığa çıkarın. Bu akıllı sistemler, çeşitli cihazlardan toplanan verileri analiz ederek size kişiselleştirilmiş geri bildirimler ve anlayışlı öneriler sunar. Sizinle birlikte gelişen teknolojiyle sağlığınızı izleme şeklinizi dönüştürün.</p>
                 <p class="description mt-4 mb-5">İnovasyon ve sağlığın kesiştiği noktada, teknolojinin refah yolculuğunuzun her yönünü iyileştirdiği bir gelecek hayal ediyoruz. Taahhüdümüz, sizi E-sağlık ve Wellness standartlarını yeniden tanımlayan kişiselleştirilmiş, güvenli ve son teknoloji çözümlerle güçlendirmektir. Sağlığınızın yalnızca bir öncelik değil, kişiselleştirilmiş bir deneyim olduğu bir dünyaya hoş geldiniz.</p>',
      'order_num' => 5,
      'lang' => 'tr',
    ]);
    Content::create([
      'title' => 'SERVICES',
      'content' => '<p class="sub-title">BLOCKCHAIN VE WEB3 TEKNOLOJİLERİ İLE ELEKTRONİK PARA TRANSFERİNDE DEVRİM YARATMAK</p>
                 <p class="description">OIS, en son Blockchain ve Web3 teknolojilerinin entegrasyonu yoluyla Elektronik Para Transferi hizmetimizde çığır açan bir geliştirmeyi gururla duyurur. Bu stratejik evrim, hizmetimizin standardını yükselterek müşterilerimize benzeri görülmemiş düzeyde şeffaflık ve güvenlik sağlıyor.</p>
                 <p class="description mt-4 mb-0">Önemli Gelişmeler:</p>
                 <p class="description mt-0 mb-0 ml-4">• Değişmez Defter Kaydı.</p>
                 <p class="description mt-0 mb-0 ml-4">• Hızlı, Güvenli ve Düşük Maliyetli Seçenekler.</p>
                 <p class="description mt-0 mb-0 ml-4">• Gelişmiş Esneklik ve Kolaylık.</p>
                 <p class="description mt-4 mb-5">OIS olarak elektronik finansal hizmetlerin kapsamını yeniden tanımlamaya kendimizi adadık. Blockchain ve Web3\'ün entegrasyonu, müşterilerimizin finansal işlemlerini bize emanet ederken en yüksek güvenlik, şeffaflık ve rahatlığı deneyimlemelerini sağlayarak yeniliğe olan bağlılığımızın bir kanıtıdır. Teknolojinin güvenle buluştuğu yeni Elektronik Para Transferi çağına hoş geldiniz.</p>',
      'order_num' => 6,
      'lang' => 'tr',
    ]);
    Content::create([
      'title' => 'INNOVATION',
      'content' => '<p class="title body-section">Sanal gerçekliğin geleceği burada.</p>',
      'order_num' => 1,
      'lang' => 'tr',
    ]);
    Content::create([
      'title' => 'INNOVATION',
      'content' => '<p class="sub-title">Yapay zeka destekli Kişiselleştirme</p>
                 <p class="description">Hizmetlerimizi her bir müşterinin ihtiyaçlarına göre kişiselleştirmek için yapay zeka algoritmaları kullanıyoruz. Müşteri verilerini ve davranış kalıplarını analiz ederek çözümlerimizi belirli gereksinimleri ve tercihleri karşılayacak şekilde uyarlayabiliriz.</p>',
      'order_num' => 2,
      'lang' => 'tr',
    ]);
    Content::create([
      'title' => 'INNOVATION',
      'content' => '<p class="sub-title">Sahtekarlık Tespiti için Makine Öğrenimi</p>
                 <p class="description">Makine öğrenimi algoritmalarımız müşteri davranışını, işlem verilerini, şüpheli etkinlikleri analiz eder ve tüm hizmetlerimizde sahte işlemleri önler.</p>',
      'order_num' => 3,
      'lang' => 'tr',
    ]);
    Content::create([
      'title' => 'INNOVATION',
      'content' => '<p class="sub-title">Blockchain Tabanlı Güvenlik</p>
                 <p class="description">Yeni teknoloji yönümüz, müşterilerimizin verileri ve işlemleri için daha fazla güvenlik ve şeffaflık sağlayan Blockchain ve Web3\'tür. Verilerimizin değişmezliğini ve izlenebilirliğini sağlamak ve ayrıca veri ihlallerine ve saldırılara karşı gelişmiş güvenliği sağlamak için blockchain teknolojisini uyguluyoruz.</p>',
      'order_num' => 4,
      'lang' => 'tr',
    ]);
    Content::create([
      'title' => 'INNOVATION',
      'content' => '<p class="sub-title">Web3 Tabanlı Merkezi Olmayanlaştırma</p>
                 <p class="description">Web3 tabanlı çözümlerimiz hizmetlerin daha fazla merkezileşmesini ve demokratikleşmesini sağlar. Web3 protokollerini kullanarak merkezi aracılara olan bağımlılığı azaltabilir, işlem ücretlerini düşürebilir ve müşterilerimiz için erişilebilirliği ve kapsayıcılığı geliştirebiliriz.</p>',
      'order_num' => 5,
      'lang' => 'tr',
    ]);
    Content::create([
      'title' => 'INNOVATION',
      'content' => '<p class="sub-title">Araştırma ve Geliştirme</p>
                 <p class="description">Rekabette bir adım önde olmak için yeni teknolojilerin ve bunların potansiyel uygulamalarının araştırılmasına ve geliştirilmesine yatırım yapıyoruz. İnovasyonu hızlandırmak ve müşterilerimize gelişmiş çözümler sunmak için startup\'lar, akademi ve araştırma kurumlarıyla iş birliği yapıyoruz.</p>',
      'order_num' => 6,
      'lang' => 'tr',
    ]);
    Content::create([
      'title' => 'INNOVATION',
      'content' => '<p class="sub-title">Sanal Gerçeklik Tabanlı Eğitim</p>
                 <p class="description mb-5">Sağlık profesyonellerimizin ve müşteri destek ekiplerimizin becerilerini geliştirmek ve daha iyi hizmet sunmak için sanal gerçeklik tabanlı eğitimler sağlıyoruz. VR tabanlı eğitim programlarımız gerçek dünya senaryolarını simüle ederek güvenli ve sürükleyici bir öğrenme deneyimi sağlıyor.</p>',
      'order_num' => 7,
      'lang' => 'tr',
    ]);
    Content::create([
      'title' => 'SECURITY',
      'content' => '<p class="title body-section">OIS ile<br>verileriniz güvende.</p>',
      'order_num' => 1,
      'lang' => 'tr',
    ]);
    Content::create([
      'title' => 'SECURITY',
      'content' => '<p class="sub-title">Veri Koruma ve Güvenlik</p>
                 <p class="description">OIS, müşterilerimiz için veri korumasına ve güvenliğine yüksek öncelik vermektedir. Müşteri verilerinin güvenliğini ve doğruluğunu sağlamak için güçlü şifreleme protokolleri, düzenli yedeklemeler ve güvenli veri depolama çözümleri dahil olmak üzere bir dizi önlem uyguladık.</p>
                 <p class="description mt-4">Ayrıca, hassas müşteri verilerine yalnızca yetkili personelin erişmesini sağlayacak şekilde sıkı veri erişim kontrolleri oluşturduk. OIS, müşteri verilerinin doğruluğunu korumak amacıyla verilerin her zaman doğru ve güncel olmasını sağlamak amacıyla otomatik veri doğrulama ve temizleme süreçlerini kullanır.</p>
                 <p class="description mt-4 mb-5">OIS, müşteri verilerini güvenli, rızaya dayalı süreçler aracılığıyla elde eder ve bu verileri, müşterilere gerçek değer sunan yeni ürün ve hizmetlerin geliştirilmesinde bilgi sağlamak için kullanır.</p>',
      'order_num' => 2,
      'lang' => 'tr',
    ]);
    Content::create([
      'title' => 'DISCLAIMERS',
      'content' => '',
      'order_num' => 1,
      'lang' => 'tr',
    ]);
    Content::create([
      'title' => 'TERMS OF USE',
      'content' => '
        <div class="main-title">
          Yasal Uyarı ve Kullanım Koşulları
        </div>
        <div class = "sub-body">
          <div class="sub-title">1. Önemli Notlar</div>
          <div class = "sub-section">
              <p class="para-section">
                  OIS, vize başvurusunda özel bir gereklilik belirtilmediği sürece, vize verilmeden önce bilet satın almamanızı veya ücretsiz iptal edilemeyecek rezervasyonlar yapmamanızı tavsiye eder.
              </p>
              <p class="para-section">
                  Bu şartlar, sorumluluğumuzu aşağıda belirtilen geri ödeme politikamıza sınırlayan bir sorumluluk reddi beyanı içerir. Aşağıdaki geri ödeme politikamızda belirtilen durumlar haricinde, tüm ücretler iade edilmez ve vize başvurusu yapmasanız veya devam etmeseniz ve vize verilip verilmese bile, tarafınızca yapılan ödeme üzerine tarafımızca alıkonulabilir.
              </p>
              <p class="para-section">
                  Başvuru formunuzun doğruluğundan ve başvuru formunuzu kontrol etmekten siz sorumlusunuz. Herhangi bir hata bulacağımızı garanti etmiyoruz ve sağladığınız bilgileri doğrulamıyoruz.
              </p>
          </div>
          <div class="sub-title">2. Servis Sağlayıcı</div>
          <div class = "sub-section">
              <p class="para-section">
                  OIS, aşağıdaki adreslerde ofisleri bulunan, Nijerya vize başvurularına yönelik bir vize işleme merkezidir:
              </p>
              <ul class = "para-list">
                  <li>
                      Abuja (No.5 Onitsha Crescent, Gimbiya Caddesi Dışı, Bölge 11, Garki, Abuja Nijerya)
                  </li>
                  <li>
                      Amsterdam (Kingsfordweg 151, 1043GR, Amsterdam Hollanda)
                  </li>
                  <li>
                      Ankara (Danışmanlık Ltd. Şti. Kazım Özalp Mahallesi Koza Caddesi 35/3 Çankaya, Ankara
                      Hindi)
                  </li>
                  <li>
                      Atlanta (918 Holcomb Bridge Road, Suite 204, Roswell, Atlanta, GA ABD 30076)
                  </li>
                  <li>
                      Pekin (Unit 1 Suite 1801, Kun Sha Binası, 16 Xin Yuan Li Str, Chaoyang Bölgesi, Pekin ÇHC)
                  </li>
                  <li>
                      Beyrut (Jnah-Beyrut Refik Hariri Üniversitesi Hastanesi Mais 6 Binası Karşısı - 3. Kat P.O.Box 9 UNESCO, Beyrut, Lübnan)
                  </li>
                  <li>
                      Guangzhou (Ünite 27/28, 41. Kat, R&F To-Win Binası, 30 Huaxia Rd, Tianhe Bölgesi, Guangzhou ÇHC)
                  </li>
                  <li>
                      Houston (9894 Bissonnet Caddesi, Suite 745 Houston TX 77036 ABD)
                  </li>
                  <li>
                      Johannesburg (6 Bolton Road Parkwood Rosebank, 2193, Johannesburg, Güney Afrika)
                  </li>
                  <li>
                      Kuala Lumpur (36.01 Seviye 36 Menara Citibank, 165 Jalan AmpangÂ 50450Â Kuala Lumpur Malezya)
                  </li>
                  <li>
                      Leicester (St Georges House, 6 St Georges Yolu, Leicester LE1 1SH, Birleşik Krallık)
                  </li>
                  <li>
                      Londra (56-57 Fleet Street City of London Londra EC4Y 1JU Birleşik Krallık)
                  </li>
                  <li>
                      Los Angeles (11222 S. La Cienega Blvd Inglewood, Suite 302, CA. 90304 ABD)
                  </li>
                  <li>
                      Londra (56-57 Fleet Street City of London Londra EC4Y 1JU Birleşik Krallık)
                  </li>
                  <li>
                      Mumbai (Quest Offices Pvt. Ltd., 8. Kat, Parinee Crescenzo, C38 & 39, G Blok, Bandra Kurla Kompleksi, Bandra (Doğu) Pin:400051, Maharashtra, Hindistan)
                  </li>
                  <li>
                      Yeni Delhi (C/O merkezi Sulama ve Enerji Parsel Kurulu No. 4, Zemin Kat, Kurumsal Alan Karşıtı: Sarvodaya Okulu Malcha Marg Chanakyapuri Yeni Delhi 110021, Delhi, Hindistan)
                  </li>
                  <li>
                      New York (370 Lexington Ave, Suite 1505 New York, NY 10017 ABD)
                  </li>
                  <li>
                      Paris (7 Rue Daru 75008 Paris, Fransa)
                  </li>
                  <li>
                      Pretoria (3. Kat, Bina 2, Brooklyn Köprüsü Ofis Parkı, Pretoria 570 Fehrsen, Güney Afrika)
                  </li>
                  <li>
                      Roma (S.R.L., Via Sicilia, 30 00187 Roma, İtalya)
                  </li>
                  <li>
                      Şangay (Oda 2025, 20/F, Catic Binası, 212 Jiangning Yolu, Jing\'an Bölgesi, Şangay, ÇHC)
                  </li>
                  <li>
                      Washington DC (11900 Parklawn Drive Suite 160, Rockville MD 20852, Washington DC ABD)
                  </li>
              </ul>
          </div>
          <div class="sub-title">3. Bu Şartların Uygulanması</div>
          <div class = "sub-section">
              <p class="para-section">
                  Bu hüküm ve koşullar, OIS hizmetlerini kullanımınızı, yaptığınız tüm vize başvurularını ve Nijerya vizeleriyle ilgili tavsiye veya bilgi almak için yaptığınız tüm soruları düzenler. Vize başvurusunda bulunan her kişi, vize başvurusu yapmadan önce bu şart ve koşulların tamamını okuduğunu, anladığını ve sınırlama veya şart olmaksızın bunlara bağlı kalacağını kabul ve beyan eder. OIS\'in hiçbir çalışanı, OIS\'in önceden yazılı onayı olmadan bu şart ve koşulların herhangi birini veya tamamını değiştirme, tadil etme, genişletme veya geri çekme yetkisine sahip değildir.
              </p>
          </div>
          <div class="sub-title">4. Vize Başvuru Hizmeti</div>
          <div class = "sub-section">
              <div class="sub-title pl-0">4.1 Kapsam</div>
              <p class="para-section">
                  OIS, Birleşik Krallık\'taki Nijerya Yüksek Komisyonu\'nun dış kaynaklı ortağıdır. Bu sıfatla OIS, randevuların planlanmasından, Nijerya\'ya seyahat için vize başvurularının alınmasından ve başvuruların Londra\'daki Nijerya Yüksek Komisyonuna sunulmasından, işlenmiş pasaportların toplanmasından ve pasaportların başvuru sahiplerine geri gönderilmesinden sorumludur.
              </p>
              <div class="sub-title pl-0">4.2 Başvuruların Kabulü ve Reddi</div>
              <p class="para-section">
                  Vize başvurularının değerlendirilmesi Nijerya Yüksek Komisyonu tarafından yürütülür ve vizelerin verilmesi veya reddedilmesi tamamen kendi takdirindedir. Nijerya Yüksek Komisyonu, başvuru sahibinden daha fazla belge ve bilgi isteme ve vize başvurusunu reddetme hakkını saklı tutar. Başvuru sahibi, başvurusunun değerlendirilmeye devam etmesini istiyorsa bu tür ek belge ve bilgileri sağlamalıdır.
              </p>
              <div class="sub-title pl-0">4.3 Ücretler</div>
              <p class="para-section">
                  Tarafınızdan ödenecek ücretler, Yüksek Komisyona ilettiğimiz vize için Nijerya Yüksek Komisyonu idari ücretini ve hizmet ücretimizi ve banka harçları ve harçları gibi diğer ücretleri içeren ücretlerimizi içermektedir.
              </p>
              <p class="para-section">
                  Belirtilen ücretler yalnızca teklif edildiği veya tarafımızca sağlandığı gün geçerlidir. Başvurunuzu daha sonraki bir tarihte yapmaya karar vermeniz durumunda ücretler değişebilir.
              </p>
              <p class="para-section">
                  Pasaportların, vizelerin ve belgelerin tarafınıza iade edilmesiyle ilgili tüm masraflar, tarafınızca sağlanan bilgilere ve seçtiğiniz teslimat yöntemlerine bağlı olarak nihai toplam ücrete dahildir.
              </p>
              <p class="para-section">
                  Mevcut ödeme seçenekleri kapsamında tüm ücretlerin eksiksiz olarak alınması gerekmektedir.
              </p>
              <p class="para-section">
                  Aşağıdaki geri ödeme politikamızda yer alan durumlar haricinde, tüm ücretler iade edilmez ve tüm ücretler ödenebilir ve vize başvurusu yapmasanız veya devam etmeseniz ve vize almış olsanız da olmasanız bile, tarafınızca yapılan ödeme üzerine tarafımızdan alıkonulabilir. verilir.
              </p>
              <div class="sub-title pl-0">4.4 Genel Yükümlülük</div>
              <p class="para-section">
                  OIS, tüm vize başvurularını makul dikkat ve beceriyle ve Nijerya Yüksek Komisyonu tarafından belirlenen tüm prosedür ve yönergelere uygun olarak işleme alacaktır. Ancak, başvuru formunuzu formun ön yüzündeki bariz hatalara karşı kontrol etmek için makul özeni gösterirken, formunuzdaki hataları tespit etmeyi garanti etmiyoruz ve sağladığınız herhangi bir bilgiyi doğrulamayı taahhüt etmiyoruz; bu bilgilerin sorumluluğu size aittir. doğruluğunun sağlanması.
              </p>
              <div class="sub-title pl-0">4.5 Başvuru Sahibinin Sorumluluğu</div>
              <p class="para-section">
                  Tüm başvuru formlarını gerçeğe uygun bir şekilde doldurmak, doğru ve doğru bilgi ve belgeleri sağlamak, geçerli bir pasaporta sahip olduklarından emin olmak ve vizeyi alırken verilen vizenin geçerliliğini kontrol ederek vizenin geçerlilik durumunu kontrol etmek tüm başvuru sahiplerinin sorumluluğundadır. talep edilen kalış süresi, gerekli sayı veya girişler ve seyahatin amacı için geçerli olduğu.
              </p>
              <div class="sub-title pl-0">4.6 İşleme Süreleri</div>
              <p class="para-section">
                  Vize başvurularının işlem süreleri yalnızca tahminidir. Bunlar Nijerya Yüksek Komisyonunun bilgi ve deneyimlerine dayanmaktadır. Başvurunuzun işleme alınması, OIS\'in üzerinde hiçbir kontrolünün bulunmadığı Nijerya Yüksek Komisyonunun prosedürlerine ve işleme zaman çizelgelerine tabidir.
              </p>
              <div class="sub-title pl-0">4.7 Prosedürler ve Ücretlerdeki Değişiklikler</div>
              <p class="para-section">
                  Nijerya Yüksek Komisyonu\'nun vize ve ilgili hizmetlerin işlenmesine ilişkin prosedürleri ve ücretleri OIS\'in kontrolü dışındadır ve önceden bildirimde bulunulmaksızın değiştirilebilir. OIS, prosedür veya ücretlerdeki herhangi bir değişiklikten dolayı sorumluluk kabul etmez ve artan ücretleri aktarma hakkını saklı tutar.


              </p>
              <div class="sub-title pl-0">4.8 İptal</div>
              <p class="para-section">
                  Çevrimiçi başvuru da dahil olmak üzere vize başvuru sürecini başlatırsanız ancak vize başvuru belgelerinizi bize göndermemeniz veya vizenizi tamamlamak için vize başvuru merkezine bizzat gitmemeniz de dahil olmak üzere vize başvuru sürecini tamamlamazsanız Vize başvuru sürecinin başlamasından itibaren 12 ay içinde vize başvurunuzun süresi dolmuş sayılacak ve tarafınızca ödenen vize ücretinin yanı sıra tüm hizmet ücretleri, banka ücretleri ve diğer ücretleri alıkoyabiliriz. Bu konuda sizi bilgilendirmek zorunda olmayacağız.
              </p>
              <p class="para-section">
                  Yukarıdaki hakkınız sahip olduğunuz tek iptal hakkıdır. Başvurunuzu bize ilettiğinizde, başvurunuzu derhal işleme koymaya ve herhangi bir hizmet sunmaya başlayabileceğimizi kabul etmiş sayılacaksınız ve bunun sonucunda Tüketicinin Korunması (Mesafeli Satış) Yönetmeliği kapsamında herhangi bir iptal hakkınız olmayacaktır. 2000. Bunun nedeni, Yönetmelik 13(1)(a) uyarınca, iptal süresi içinde hizmetleri sağlamaya başlayabileceğimizi kabul etmeniz durumunda iptal hakkınızı kaybetmenizdir.
              </p>
          </div>
          <div class="sub-title">5. Geri Ödeme Politikası</div>
          <div class = "sub-section">
              <div class="sub-title pl-0">5.1 Vize Başvuru Ücretinin İadesi</div>
              <p class="para-section">
                  OIS\'in sunulan herhangi bir vize başvurusuyla ilgili olarak sözleşmeyi ihlal etmesi veya ihmalkar olması, vizenin verilmemesi veya başvuru sahibinin geçerli vizeli pasaportunun kaybolmasıyla sonuçlanması halinde, başvuru sahibinin yeni bir pasaport başvurusunda bulunması veya seyahat edememesi durumunda Başvuru sahibinin vize başvurusunda belirttiği tarihlerde Nijerya\'ya gitmesi durumunda OIS, başvuru sahibine vize ücretini iade edecektir, ancak herhangi bir hizmet ücreti, banka ücreti veya başka bir ücret ödemeyecektir.
              </p>
              <div class="sub-title pl-0">5.2 Pasaportların ve diğer seyahat belgelerinin kaybolması veya hasar görmesi</div>
              <p class="para-section">
                  OIS, başvuru sahibinin pasaportu ve belgeleriyle ilgili işlemler sırasında her türlü makul önlemi alır ve OIS\'in herhangi bir sözleşme ihlali veya ihmali nedeniyle başvuru sahibinin ibraz ettiği pasaport veya belgelerinin kaybolması veya kullanılamaz hale gelmesi durumunda OIS, başvuru sahibine ödeme yapacaktır. Başvuru sahibine, kayıp veya hasarlı pasaportun veya diğer belgelerin normal değiştirme prosedürü yoluyla değiştirilmesi için başvuru sahibinin kendi ülkesinin hükümeti tarafından kesilen ücretlerin tutarı ve OIS, kapasitesi dahilinde başvuru sahibine aynı konuda yardımcı olacaktır. Söz konusu ödemeler, kaybedilen veya hasar gören pasaport veya belgelerin değiştirilmesi için kendi ülkelerinin hükümeti tarafından düzenlenen ödeme makbuzunun ibraz edilmesi üzerine OIS tarafından başvuru sahibine yapılacaktır.
              </p>
          </div>
          <div class="sub-title">6. Sorumluluk reddi beyanı</div>

          <div class = "sub-section">
              <p class="para-section">
                  Yukarıdaki bölümde belirtilen ücretlerin iadesi veya geri ödenmesi dışında OIS, sözleşme, ihmal, haksız fiil, kanun veya başka herhangi bir nedenle doğan veya sözleşme kapsamındaki sorumluluk dahil olmak üzere ve herhangi bir gecikme veya başarısızlığa ilişkin sorumluluk da dahil olmak üzere herhangi bir vize başvurusuyla bağlantılı sorumluluğunu kabul etmez. Vize başvurularının ele alınmasında veya işlenmesinde OIS\'in kullanılması, pasaportların ve diğer belgelerin kaybolması veya gecikmesi, Nijerya Yüksek Komisyonunun dahil olduğu gecikmeler ve vize başvurularının herhangi bir nedenle reddedilmesi.
              </p>
              <div class="sub-title pl-0">Ve şüpheye mahal vermemek için</div>
              <div class="sub-title pl-0">6.1 Yanlış Bilgilerden Sorumlu Olmama</div>
              <p class="para-section">
                  OIS, eksik başvuru formları, hatalı veya hatalı doldurulmuş başvuru formları ve yanlış veya eksik destekleyici belgelerden (bunlarla sınırlı olmamak üzere) kaynaklanan veya bunlarla bağlantılı olarak ortaya çıkan herhangi bir başvurunun kaybı, gecikmesi veya verilememesinden sorumlu olmayacaktır.
              </p>
              <div class="sub-title pl-0">6.2 Kontrolümüz Dışında Olmayan Olaylardan Sorumlu Olmayız</div>
              <p class="para-section">
                  OIS, herhangi bir başvurunun gecikmesi veya başarısızlığından veya kaza, hırsızlık, doğal afetler (kaza, hırsızlık, doğal afetler) nedeniyle herhangi bir pasaportun veya diğer belgelerin kaybolması, hasar görmesi veya gecikmesinden dolayı hiçbir şekilde sözleşmenin ihlali veya ihmal veya başka bir şekilde sorumlu kabul edilmeyecektir. tanrı) veya OIS\'in kontrolü dışındaki ve OIS\'in kasıtlı temerrüdünden kaynaklanmayan başka herhangi bir nedenden veya herhangi bir pasaportun veya başka bir belgenin başvuru sahibine teslim edildikten sonra kaybolması veya hasar görmesi nedeniyle.
              </p>
              <div class="sub-title pl-0">6.3 Posta ve Kurye Hizmetine İlişkin Sorumluluk Yok</div>
              <p class="para-section">
                  OIS, herhangi bir başvuru, pasaport veya belgenin herhangi bir üçüncü taraf posta veya kurye hizmetinden kaynaklanan veya bu hizmetin mülkiyetindeyken meydana gelen herhangi bir vize başvurusu, pasaport veya diğer belgelerde meydana gelebilecek gecikmelerden veya kayıp veya hasarlardan sorumlu olmayacaktır. Vize başvurularının, pasaportun veya diğer belgelerin OIS ile Nijerya Yüksek Komisyonu arasında taşınması ve OIS tarafından başvuru sahibine iade edilmesi dahil.
              </p>
              <div class="sub-title pl-0">6.4 Vize Başvurularının Değerlendirilmesine İlişkin Sorumluluk Yok</div>
              <p class="para-section">
                  OIS, vize başvurularının değerlendirilmesi veya vize başvurularının verilmesi veya reddedilmesi sürecine dahil değildir ve Nijerya Yüksek Komisyonu\'nun herhangi bir vize başvurusunu değerlendirme, kabul etme veya reddetme konusundaki gecikmesinden sorumlu veya sorumlu olmayacaktır.
              </p>
              <div class="sub-title pl-0">6.5 Boşa Harcanan Maliyet ve Giderlerden Sorumlu Olmama</div>
              <p class="para-section">
                  OIS, herhangi bir vize başvuru sahibine veya herhangi bir vize başvurusuna güvenen veya bundan yararlanan herhangi bir kişiye karşı, belirli bir zaman dilimi içerisinde veya herhangi bir zamanda, Nijerya vizesine güvenerek veya alma beklentisiyle ortaya çıkan herhangi bir taahhüt, maliyet veya harcama konusunda hiçbir yükümlülüğe sahip olmayacaktır. hava yolculuğu, otel ve diğer seyahat ve konaklama düzenlemeleri ve yapılan diğer düzenlemeler dahil ancak bunlarla sınırlı olmamak üzere.
              </p>
              <p class="para-section">
                  OIS, vize başvurusunda belirtilen özel bir gereklilik olduğu ve açık bilet alınması gerektiği durumlar haricinde, vize verilmeden önce bilet satın almamanızı veya iptal edilemeyecek rezervasyonlar yapmamanızı tavsiye eder.
              </p>
              <div class="sub-title pl-0">6.6 Kayıp ve Hasarın Genel Hariç Tutulması</div>
              <p class="para-section">
                  OIS, herhangi bir vize başvurusu sahibine veya herhangi bir vize başvurusuna güvenen veya bundan yararlanan herhangi bir kişiye karşı, doğrudan, dolaylı, cezai, arızi, özel, sonuç olarak ortaya çıkan zararlar veya herhangi bir zararla ilgili olarak (sözleşme veya ihmal dahil) hiçbir sorumluluk kabul etmeyecektir. Yukarıdaki Bölüm 5\'te belirtilenler dışında, gecikme, yanlış yerleştirme, vize başvurularının, pasaportların ve diğer belgelerin kaybolması veya hasar görmesi nedeniyle oluşan durumlar da dahil.
              </p>
              <p class="para-section">
                  OIS, herhangi bir vize başvurusu sahibine veya herhangi bir vize başvurusuna güvenen veya bundan yararlanan herhangi bir kişiye karşı herhangi bir kar, gelir veya sözleşme veya iş, meslek veya diğer meslek kaybı nedeniyle (sözleşme veya ihmal dahil) hiçbir sorumluluğa sahip olmayacaktır. Vize başvurularının, pasaportların ve diğer belgelerin gecikmesi, yanlış yerleştirilmesi, kaybolması veya hasar görmesi nedeniyle.
              </p>
          </div>
          <div class="sub-title">7. Genel</div>
          <div class = "sub-section">
          <div class="sub-title pl-0">7.1 Üçüncü Taraf Hakları</div>
          <p class="para-section">
              Bu Hüküm ve Koşullarda yer alan hiçbir husus, vize başvurusu sahibi dışındaki herhangi bir kişi tarafından fayda sağlamayacak veya uygulanamaz ve 1999 tarihli Sözleşmeler (Üçüncü Tarafların Hakları) Yasası geçerli olmayacaktır.
          </p>
          <div class="sub-title pl-0">7.2 Bu şartlarda yapılan değişiklikler</div>
          <p class="para-section">
              OIS, tamamen kendi takdirine bağlı olarak, bu hüküm ve koşulların herhangi birini veya tamamını, önceden herhangi bir bildirimde bulunmaksızın, herhangi bir zamanda değiştirebilir, tadil edebilir, iptal edebilir veya geri çekebilir.
          </p>
          <div class="sub-title pl-0">7.3 Geçerli Kanun</div>
          <p class="para-section">
              Bu hüküm ve koşullar ile vize başvuruları, faaliyet gösterdiğimiz ülkelerin kanunlarına uygun olarak yönetilecek ve yorumlanacaktır. OIS\'in başvuru sahibine sunduğu hizmetlere ilişkin olarak ortaya çıkan her türlü iddia veya anlaşmazlık, ülke mahkemelerinin münhasır yargı yetkisine tabi olacaktır.
          </p>
        </div>
        <div class="sub-title">8.Şikayetler</div>
        <div class = "sub-section">
          <p class="para-section">
              Lütfen şikayetlerinizi müşteri ilişkileri departmanına e-posta yoluyla iletin:
          </p>
              <p class="para-section">
                  info@oisservices.com
              </p>
          </div>
        </div>',
      'order_num' => 1,
      'lang' => 'tr',
    ]);
    Content::create([
      'title' => 'PRIVACY POLICY',
      'content' => '
        <div class="main-title">Gizlilik Politikası</div>
        <div class = "sub-body">
          <div class="sub-title">1. Giriş</div>
          <div class = "sub-section">
            <p class="para-section">
              OIS olarak müşterilerimizin kişisel verilerinin mahremiyetini ve gizliliğini korumaya kararlıyız. Bu Gizlilik Politikası, hizmetlerimizi kullanan kişilerden elde ettiğimiz kişisel verileri nasıl kullandığımızı, ifşa ettiğimizi ve koruduğumuzu özetlemektedir. Genel Veri Koruma Yönetmeliği (GDPR) dahil olmak üzere geçerli veri koruma yasalarına uyuyoruz ve en yüksek gizlilik ve veri güvenliği standartlarını sağlamaya çalışıyoruz.
            </p>
          </div>
          <div class="sub-title">2. Veri Toplama ve Kullanma</div>
          <div class = "sub-section">
            <div class="sub-title pl-0">2.1 Kişisel Veri Toplama</div>
            <p class="para-section">
              Bireylerden kişisel verileri, hesap oluşturmaları, ödeme yapmaları, bizimle iletişime geçmeleri, anketleri tamamlamaları, web sitelerimiz veya uygulamalarımızla etkileşimde bulunmaları veya hizmetlerimizi kullanmaları dahil olmak üzere çeşitli yollarla toplarız. Toplayabileceğimiz kişisel veri türleri aşağıdakileri içerir, ancak bunlarla sınırlı değildir:
            </p>
            <ul class = "para-list">
              <li>Ad, adres ve iletişim bilgileri</li>
              <li>Pasaport ve vize ayrıntıları</li>
              <li>Biyometrik veriler</li>
              <li>Banka doğrulama numaraları</li>
              <li>Ödeme işlemi ayrıntıları</li>
              <li>Sağlık bilgileri (e-sağlık hizmetleri için)</li>
              <li>Hizmetlerimiz ve web sitelerimiz ile etkileşimler</li>
              <li>Houston (9894 Bissonnet Street, Suite 745 Houston TX 77036 ABD)</li>
              <li>İstihdam veya mesleki ayrıntılar (işe alım amacıyla)</li>
            </ul>
            <div class="sub-title pl-0">2.2 Veri İşlemenin Amacı</div>
            <p class="para-section">
              Kişisel verileri aşağıdaki amaçlarla işleriz:
            </p>
            <ul class = "para-list">
              <li>
                Bireylerle iletişim kurmak ve onların hizmet taleplerini veya satın alma siparişlerini yerine getirmek.
              </li>
              <li>Müşteri desteği sağlamak ve sorulara yanıt vermek.</li>
              <li>
                Hizmetlerimizle ilgili bireylerin deneyimlerini geliştirmek ve kişiselleştirmek.
              </li>
              <li>Ödemeleri işleme koymak ve finansal işlemleri doğrulamak için.</li>
              <li>
                İlgili makamlara raporlama yükümlülükleri de dahil olmak üzere yasal yükümlülüklere uymak.
              </li>
              <li>
                Veri analizi, denetim ve sorun giderme dahil olmak üzere sistemlerimizi ve süreçlerimizi yönetmek.
              </li>
              <li>
                Dolandırıcılığın önlenmesi ve tespiti de dahil olmak üzere soruşturma yürütmek ve yasal hakları kullanmak.
              </li>
              <li>Ürün ve hizmetlerimizi geliştirmek ve iyileştirmek.</li>
            </ul>
            <div class="sub-title pl-0">2.3 İşlemenin Yasal Dayanağı</div>
            <p class="para-section">
              Kişisel verileri aşağıdaki yasal dayanaklardan bir veya birkaçına dayanarak işleriz:
            </p>
            <ul class = "para-list">
              <li>
                Kişinin talebi üzerine, bir sözleşmenin ifası için veri işlemenin veya sözleşme öncesi adımların atılmasının gerekli olması.
              </li>
              <li>Tabii olduğumuz yasal yükümlülüklere uyum.</li>
              <li>
                Belirli işleme faaliyetleri için bireyler tarafından sağlanan onay.
              </li>
              <li>
                OIS veya üçüncü bir tarafça takip edilen meşru menfaatler, bu menfaatlerin bireyin hak ve menfaatleri tarafından geçersiz kılınmaması koşuluyla.
              </li>
            </ul>
          </div>
          <div class="sub-title">3. Veri Paylaşımı ve İfşası</div>
          <div class = "sub-section">
            <div class="sub-title pl-0">3.1 Üçüncü Taraf Hizmet Sağlayıcıları</div>
            <p class="para-section">
              Kişisel verileri, hizmetlerimizi sunmamıza ve yükümlülüklerimizi yerine getirmemize yardımcı olan güvenilir üçüncü taraf hizmet sağlayıcılarla paylaşabiliriz. Bu hizmet sağlayıcılar, sözleşmeye bağlı olarak kişisel verileri yalnızca bizim adımıza ve talimatlarımıza uygun olarak işlemekle yükümlüdür.
            </p>
            <div class="sub-title pl-0">3.2 Ticari Transferler</div>
              <p class="para-section">
                Birleşme, devralınma veya varlıklarımızın tamamının veya bir kısmının satılması durumunda, işlem kapsamında kişisel veriler ilgili üçüncü kişilere aktarılabilecektir. Bu tür aktarımlar sırasında kişisel verilerin güvenliğini ve gizliliğini sağlamak için makul adımları atacağız.
              </p>
              <div class="sub-title pl-0">3.3 Yasal ve Uyumluluk Gereksinimleri</div>
              <p class="para-section">
                Kanun, mahkeme kararı veya resmi makam tarafından gerekli görülmesi halinde kişisel verileri ifşa edebiliriz. Kendi haklarımızı, gizliliğimizi, güvenliğimizi veya mülkümüzü veya başkalarının haklarını korumak için de kişisel verileri paylaşabiliriz.
              </p>
            </div>
            <div class="sub-title">4. Veri Saklama</div>
            <div class = "sub-section">
              <p class="para-section">
                Kanunen daha uzun bir saklama süresi gerekmediği veya izin verilmediği sürece, kişisel verileri bu Gizlilik Politikasında belirtilen amaçları yerine getirmek için gerekli olan minimum süre boyunca saklıyoruz. Uygun saklama süresinin belirlenmesinde kullanılan kriterler arasında kişisel verilerin niteliği, toplanma amaçları ve yasal ve düzenleyici gereklilikler yer alır.
              </p>
            </div>
            <div class="sub-title">5. Veri Güvenliği</div>
            <div class = "sub-section">
              <p class="para-section">
                Kişisel verileri yetkisiz erişime, değiştirilmeye, ifşa edilmeye veya imha edilmeye karşı korumak için uygun teknik ve organizasyonel önlemleri uyguluyoruz. Bu önlemler arasında şifreleme, erişim kontrolleri, düzenli güvenlik değerlendirmeleri ve veri koruma konusunda personel eğitimi yer alır ancak bunlarla sınırlı değildir.
              </p>
            </div>
            <div class="sub-title">6. Bireysel Haklar</div>
            <div class = "sub-section">
              <p class="para-section">
                Bireylerin kişisel verilerine ilişkin birtakım hakları bulunmaktadır. Yürürlükteki yasalara tabi olarak bireyler aşağıdaki haklara sahiptir:
              </p>
              <ul class = "para-list">
                <li>Kişisel verilerine erişin ve bu verilerin bir kopyasını isteyin.</li>
                <li>Yanlış veya eksik kişisel verileri düzeltin.</li>
                <li>Belirli durumlarda kişisel verileri silin.</li>
                <li>Kişisel verilerin işlenmesini kısıtlamak veya buna itiraz etmek.</li>
                <li>
                  Veri taşınabilirliği (kişisel verileri yapılandırılmış, yaygın olarak kullanılan ve makine tarafından okunabilen bir formatta alın).
                </li>
                <li>Onayı geri çekme (işleme izne dayalıysa).</li>
              </ul>
              <p class="para-section">
                Bu hakları kullanmak veya gizlilikle ilgili şikayette bulunmak için bireyler Bölüm 8\'de verilen bilgileri kullanarak bizimle iletişime geçebilirler.
              </p>
            </div>
            <div class="sub-title">7. Pazarlama İletişimleri ve Çerez Politikası</div>
            <div class = "sub-section">
              <p class="para-section">
                Onay veren kişilere pazarlama iletişimleri gönderebiliriz. Bireyler, iletişimde sağlanan talimatları izleyerek veya bizimle iletişime geçerek bu tür iletişimleri almaktan istedikleri zaman vazgeçebilirler.
              </p>
              <p class="para-section">
                Çerez Politikamız, web sitelerimizdeki çerezlerin ve benzer teknolojilerin kullanımını özetlemekte ve çerez tercihlerinin yönetilmesine ilişkin bilgi sağlamaktadır.
              </p>
            </div>
            <div class="sub-title">8. Uluslararası Veri Aktarımları</div>
            <div class = "sub-section">
              <p class="para-section">
                Küresel bir kuruluş olarak, kişisel verileri Avrupa Ekonomik Alanı (AEA) dışındaki ülkelere veya farklı veri koruma yasalarına sahip diğer bölgelere aktarabiliriz. Bu gibi durumlarda, kişisel verileri korumak için Avrupa Komisyonu tarafından onaylanan standart sözleşme maddelerinin kullanılması veya alıcıların Gizlilik Kalkanı sertifikasına (varsa) dayanılması gibi uygun önlemlerin alınmasını sağlayacağız.
              </p>
            </div>
            <div class="sub-title">9. Çocukların Gizliliği</div>
            <div class = "sub-section">
              <p class="para-section">
                Hizmetlerimiz 16 yaşın altındaki bireylere yönelik değildir. Çocuklardan bilerek kişisel veri toplamıyoruz veya talep etmiyoruz. Doğrulanabilir ebeveyn izni olmadan bir çocuktan kişisel veri topladığımızı öğrenirsek, bu bilgiyi silmek için gerekli adımları atacağız.
              </p>
            </div>
            <div class="sub-title">10. Gizlilik Politikasındaki Güncellemeler</div>
            <div class = "sub-section">
              <p class="para-section">
                Veri işleme uygulamalarımızdaki veya yasal yükümlülüklerimizdeki değişiklikleri yansıtacak şekilde bu Gizlilik Politikasını zaman zaman güncelleyebiliriz. Bireylerin herhangi bir güncelleme için bu Gizlilik Politikasını düzenli aralıklarla incelemelerini öneririz. Revize edilen Gizlilik Politikası internet sitemizde yayınlandığı tarihten itibaren geçerli olacaktır.
              </p>
            </div>
            <div class="sub-title">11. İletişim Bilgileri</div>
            <div class = "sub-section">
              <p class="para-section">
                Gizlilikle ilgili endişeleriniz, sorularınız, talepleriniz veya şikayetleriniz için lütfen aşağıdaki adresten Veri Koruma Görevlimizle iletişime geçin:
              </p>
              <p class="para-section">dataprotection@oisservices.com</p>
              <p class="para-section">
                Gizlilik konularını ciddiye alıyoruz ve herhangi bir endişe veya soruyu yanıtlamak için derhal yanıt vereceğiz. Lütfen bu Gizlilik Politikasının anlaşılmasını kolaylaştırmak amacıyla İngilizce olarak sağlandığını unutmayın. İngilizce versiyon ile tercüme edilmiş versiyon arasında herhangi bir çelişki olması durumunda, İngilizce versiyon geçerli olacaktır.
              </p>
            </div>
          </div>',
      'order_num' => 1,
      'lang' => 'tr',
    ]);
    Content::create([
      'title' => 'DATA PROJECT',
      'content' => '
        <div class="main-title">
          GDPR ve İlgili Veri Koruma Politikası
        </div>
        <div class = "sub-body">
          <div class="sub-title">1. Giriş</div>
          <div class = "sub-section">
            <p class="para-section">
              Günlük iş operasyonlarında Çevrimiçi Entegre Çözümler (OIS), aşağıdakiler de dahil olmak üzere kimliği belirlenebilir kişiler hakkında çeşitli verilerden yararlanır:
            </p>
            <ul class = "para-list">
              <li>
                Mevcut, geçmiş ve potansiyel çalışanlar
              </li>
              <li>
                Müşteriler
              </li>
              <li>
                Web sitelerinin kullanıcıları
              </li>
              <li>
                Aboneler
              </li>
              <li>
                Diğer paydaşlar
              </li>
            </ul>
            <p class="para-section">
              Bu verilerin toplanması ve kullanılmasında kuruluş, bu tür faaliyetlerin nasıl gerçekleştirilebileceğini ve onu korumak için alınması gereken önlemleri kontrol eden çeşitli mevzuata tabidir.
            </p>
            <p class="para-section">
              Bu politikanın amacı ilgili mevzuatı belirlemek ve OIS\'in bu mevzuata uygunluğunu sağlamak için attığı adımları açıklamaktır.
            </p>
            <p class="para-section">
              Bu kontrol, OIS sistemlerine erişimi olan yönetim kurulu üyeleri, yöneticiler, çalışanlar, tedarikçiler ve diğer üçüncü taraflar da dahil olmak üzere kurumun bilgi sistemlerini oluşturan tüm sistemler, kişiler ve süreçler için geçerlidir.
            </p>
            <p class="para-section">
              Aşağıdaki politikalar ve prosedürler bu belgeyle ilgilidir:
            </p>
            <ul class = "para-list">
              <li>
                Veri Koruma Etki Değerlendirme Süreci
              </li>
              <li>
                Kişisel Veri Analiz Prosedürü
              </li>
              <li>
                Meşru Menfaat Değerlendirme Prosedürü
              </li>
              <li>
                Bilgi Güvenliği Olay Müdahale Prosedürü
              </li>
              <li>
                GDPR Rolleri ve Sorumlulukları
              </li>
              <li>
                Diğer paydaşlar
              </li>
            </ul>
          </div>
          <div class="sub-title">2. Kriptografinin Kullanımı</div>
            <div class = "sub-section">
              <p class="para-section">
                Bilgilerin sınıflandırılmasına ve saklama ortamına uygun olduğu durumlarda, kayıtların gizliliğini ve bütünlüğünü sağlamak için kriptografik teknikler kullanıldı.
              </p>
              <p class="para-section">
                Kayıtları şifrelemek için kullanılan şifreleme anahtarlarının, ilgili kayıtların ömrü boyunca güvenli bir şekilde saklanmasına ve kuruluşun kriptografi politikasına uygun olmasına mutlak özen gösterilmiştir.
              </p>
              <div class="sub-title pl-0">2.1 AB Genel Veri Koruma Yönetmeliği - GDPR</div>
              <p class="para-section">
                Genel Veri Koruma Yönetmeliği 2016 (GDPR), OIS\'in bilgi işleme faaliyetlerini yürütme şeklini etkileyen en önemli mevzuat parçalarından biridir. Avrupa Birliği vatandaşlarının kişisel verilerini korumak için tasarlanan GDPR kapsamında bir ihlalin meydana geldiği kabul edilirse önemli para cezaları uygulanacaktır. GDPR ve diğer ilgili mevzuata uygunluğumuzun her zaman açık ve kanıtlanabilir olmasını sağlamak OIS\'in politikasıdır.
              </p>
              <div class="sub-title pl-0">2.2 Tanımlar</div>
              <p class="para-section">
                GDPR\'de listelenmiş toplam 26 tanım bulunmaktadır ve bunların tamamını burada tekrarlamak uygun değildir. Ancak bu politikaya ilişkin en temel tanımlar aşağıdaki gibidir:
              </p>
              <p class="para-section">
                Kişisel veriler şu şekilde tanımlanır:
              </p>
              <p class="para-section">
                kimliği belirli veya belirlenebilir bir gerçek kişiyle ("veri sahibi") ilgili her türlü bilgi; Kimliği belirlenebilir gerçek kişi, doğrudan veya dolaylı olarak, özellikle isim, kimlik numarası, konum verileri, çevrimiçi tanımlayıcı gibi bir tanımlayıcıya veya fiziksel, fizyolojik, o gerçek kişinin genetik, zihinsel, ekonomik, kültürel veya sosyal kimliği;
              </p>
              <p class="para-section">
                \'işleniyor\' anlamına gelir
              </p>
              <p class="para-section">
                toplama, kaydetme, düzenleme, yapılandırma, saklama, uyarlama veya değiştirme, alma, danışma, kullanma, ifşa etme gibi otomatikleştirilmiş araçlarla olsun veya olmasın, kişisel veriler veya kişisel veri kümeleri üzerinde gerçekleştirilen herhangi bir işlem veya işlemler dizisi. iletme, yayma veya başka şekilde kullanıma sunma, hizalama veya birleştirme, kısıtlama, silme veya imha;
              </p>
              <p class="para-section">
                \'kontrolör\' anlamına gelir
              </p>
              <p class="para-section">
                kişisel verilerin işlenme amaçlarını ve yollarını tek başına veya başkalarıyla birlikte belirleyen gerçek veya tüzel kişi, kamu makamı, kurumu veya diğer organ; Söz konusu işlemenin amaçları ve araçlarının Birlik veya Üye Devlet hukuku tarafından belirlendiği durumlarda, kontrolör veya onun atanmasına ilişkin özel kriterler Birlik veya Üye Devlet hukuku tarafından belirlenebilir;
              </p>
              <div class="sub-title pl-0">2.3 Kişisel Verilerin İşlenmesine İlişkin İlkeler</div>
              <p class="para-section">
                GDPR\'nin dayandığı bir dizi temel ilke vardır.<br>
                Bunlar aşağıdaki gibidir:
              </p>
              <p class="para-section">
                1. Kişisel veriler:
              </p>
              <p class="para-section">
                (a) veri sahibiyle ilgili olarak hukuka uygun, adil ve şeffaf bir şekilde işlenir ("yasaya uygunluk, adillik ve şeffaflık");
              </p>
              <p class="para-section">
                (b) belirli, açık ve meşru amaçlar için toplanmalı ve bu amaçlarla bağdaşmayan bir şekilde daha fazla işlenmemelidir; kamu yararına arşivleme amaçları, bilimsel veya tarihi araştırma amaçları veya istatistiksel amaçlar doğrultusunda daha fazla işlemenin, Madde 89(1) uyarınca, başlangıçtaki amaçlarla uyumsuz olduğu kabul edilmeyecektir ("amaç sınırlaması");
              </p>
              <p class="para-section">
                (c) işlendikleri amaçlarla ilgili olarak yeterli, ilgili ve gerekli olanlarla sınırlı ("veri minimizasyonu");
              </p>
              <p class="para-section">
              (d) doğru ve gerektiğinde güncel tutulması; Yanlış olan kişisel verilerin, işlendikleri amaç dikkate alınarak, gecikmeksizin silinmesini veya düzeltilmesini ("doğruluk") sağlamak için makul her türlü adımın atılması;
            </p>
            <p class="para-section">
              (e) kişisel verilerin işlenme amaçları için gerekli olan süreden daha uzun olmamak üzere, veri sahiplerinin kimliğinin belirlenmesine izin verecek bir biçimde tutulması; Kişisel veriler, uygun teknik ve organizasyonel düzenlemelerin uygulanmasına tabi olarak Madde 89(1) uyarınca yalnızca kamu yararına arşivleme amaçları, bilimsel veya tarihi araştırma amaçları veya istatistiksel amaçlar doğrultusunda işleneceği sürece, kişisel veriler daha uzun süre saklanabilir. veri sahibinin hak ve özgürlüklerinin korunması amacıyla bu Yönetmelik tarafından gerekli görülen önlemler (\'saklama sınırlaması\');
            </p>
            <p class="para-section">
              (f) uygun teknik veya organizasyonel önlemler ("bütünlük ve gizlilik") kullanılarak, yetkisiz veya yasa dışı işlemeye ve kazara kayıp, imha veya hasara karşı koruma da dahil olmak üzere, kişisel verilerin uygun şekilde güvenliğini sağlayacak şekilde işlenir.
            </p>
            <p class="para-section">
              (f) uygun teknik veya organizasyonel önlemler ("bütünlük ve gizlilik") kullanılarak, yetkisiz veya yasa dışı işlemeye ve kazara kayıp, imha veya hasara karşı koruma da dahil olmak üzere, kişisel verilerin uygun şekilde güvenliğini sağlayacak şekilde işlenir.
            </p>
            <p class="para-section">
              OIS, hem halihazırda yürüttüğü işlemlerde, hem de yeni BT sistemleri gibi yeni işleme yöntemlerinin uygulamaya konulması kapsamında bu ilkelerin tümüne uymasını sağlayacaktır.
            </p>
            <div class="sub-title pl-0">2.4 Bireyin Hakları</div>
            <p class="para-section">
              Veri sahibinin GDPR kapsamında da hakları vardır. Bunlar şunlardan oluşur:
            </p>
            <p class="para-section">
              Bilgi edinme hakkı<br>Erişim hakkı<br>Düzeltme hakkı<br>Silme hakkı<br>İşlemeyi kısıtlama hakkı<br>Veri taşınabilirliği hakkı<br>İtiraz hakkı< br>Otomatik karar verme ve profil oluşturmayla ilgili haklar</p>
            <p class="para-section">
              Bu hakların her biri, GDPR\'de belirtilen zaman çizelgeleri içerisinde gerekli eylemin gerçekleştirilmesine olanak tanıyan OIS içindeki uygun prosedürlerle desteklenir.
            </p>
            <p class="para-section">
              Bu zaman ölçekleri Tablo 1\'de gösterilmektedir.
            </p>
            <table>
              <thead>
                <tr>
                  <th>Veri Sahibi Talebi</th>
                  <th>Zaman ölçeği</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>Bilgi edinme hakkı</td>
                  <td>Veriler toplandığında (veri sahibi tarafından sağlanmadıysa) veya bir ay içinde (veri sahibi tarafından sağlanmadıysa)</td>
                </tr>
                <tr>
                  <td>Erişim hakkı</td>
                  <td>Bir ay</td>
                </tr>
                <tr>
                  <td>Düzeltme hakkı</td>
                  <td>Bir ay</td>
                </tr>
                <tr>
                  <td>Silme hakkı</td>
                  <td>Gereksiz gecikme olmadan</td>
                </tr>
                <tr>
                  <td>İşlemeyi kısıtlama hakkı</td>
                  <td>Gereksiz gecikme olmadan</td>
                </tr>
                <tr>
                  <td>Veri taşınabilirliği hakkı</td>
                  <td>Bir ay</td>
                </tr>
                <tr>
                  <td>İtiraz hakkı</td>
                  <td>İtirazın alınması üzerine</td>
                </tr>
              </tbody>
            </table>
            <p class="para-section">
               Tablo 1 - Veri sahibi taleplerine ilişkin zaman çizelgeleri
             </p>
             <div class="sub-title pl-0">2.5 İşlemenin Hukuka Uygunluğu</div>
             <p class="para-section">
               Kişisel verilerin işlenmesine ilişkin belirli bir durumun yasaya uygunluğunun GDPR kapsamında belirlenebileceği altı alternatif yol vardır. Yönetmelik uyarınca işleme için uygun esasların belirlenmesi ve belgelenmesi OIS politikasıdır. Seçenekler aşağıdaki bölümlerde kısaca açıklanmaktadır.
             </p>
             <div class="sub-title pl-0">2.5.1 Onay</div>
             <p class="para-section">
              GDPR\'de izin verilen bir neden gerekli olmadığı sürece OIS, verilerini toplamak ve işlemek için her zaman veri sahibinden açık izin alacaktır. 16 yaşın altındaki çocuklar için (belirli AB üye ülkelerinde daha düşük bir yaşa izin verilebilmektedir) ebeveynlerinin izni alınacaktır. Veri sahiplerine, kişisel verilerini kullanmamız hakkında şeffaf bilgi, rızanın alındığı sırada sunulacak ve rızayı geri çekme hakkı gibi, verilerine ilişkin hakları açıklanacaktır. Bu bilgiler erişilebilir bir biçimde, anlaşılır bir dille yazılmış ve ücretsiz olarak sağlanacaktır. Kişisel verilerin doğrudan veri sahibinden elde edilmemesi halinde bu bilgiler, verinin elde edilmesinden itibaren makul bir süre içerisinde ve mutlaka bir ay içerisinde veri sahibine bildirilecektir.
            </p>
            <div class="sub-title pl-0">2.5.2 Bir Sözleşmenin İfası</div>
            <p class="para-section">
              Toplanan ve işlenen kişisel verilerin, veri sahibiyle yapılan bir sözleşmenin yerine getirilmesi için gerekli olduğu hallerde açık rızaya gerek yoktur. Bu genellikle sözleşmenin söz konusu kişisel veriler olmadan tamamlanamadığı durumlarda söz konusu olacaktır; Teslimat adresi olmadan teslimat yapılamaz.
            </p>
            <div class="sub-title pl-0">2.5.3 Yasal Yükümlülük</div>
            <p class="para-section">
              Kişisel verilerin hukuka uygunluk açısından toplanması ve işlenmesi gerekiyorsa açık rıza aranmamaktadır. Bu durum örneğin istihdam ve vergilendirmeyle ilgili bazı veriler ve kamu sektörü tarafından ele alınan birçok alan için geçerli olabilir.
            </p>
            <div class="sub-title pl-0">2.5.4 Veri Sahibinin Hayati Menfaatleri</div>
            <p class="para-section">
              Kişisel verilerin, veri sahibinin veya başka bir gerçek kişinin hayati çıkarlarının korunması için gerekli olduğu durumlarda, bu, işlemenin yasal dayanağı olarak kullanılabilir. OIS, kişisel verilerin işlenmesinde yasal dayanak olarak bu nedenin kullanıldığı her durumda, durumun böyle olduğuna dair makul, belgelenmiş kanıtları tutacaktır. Örnek olarak bu, özellikle kamu sektöründe sosyal bakımın bazı yönlerinde kullanılabilir.
            </p>
            <div class="sub-title pl-0">2.5.5 Kamu Yararına Yürütülen Görev</div>
            <p class="para-section">
              OIS\'in kamu yararına olduğuna veya resmi bir görev olduğuna inandığı bir görevi yerine getirmesi gerektiğinde veri sahibinin rızası aranmayacaktır. Kamu yararı veya resmi görevin değerlendirilmesi belgelenecek ve gerektiğinde delil olarak sunulacaktır.
            </p>
            <div class="sub-title pl-0">2.5.6 Meşru Menfaatler</div>
            <p class="para-section">
              Belirli bir kişisel verinin işlenmesi OIS\'in meşru menfaati dahilinde ise ve veri sahibinin hak ve özgürlüklerini önemli ölçüde etkilemediğine kanaat getiriliyorsa bu durum işlemenin hukuki nedeni olarak tanımlanabilir. Bu görüşün ardındaki mantık yine belgelenecektir.
            </p>
            <div class="sub-title pl-0">2.6 Tasarımdan Dolayı Gizlilik</div>
            <p class="para-section">
              OIS, tasarım gereği gizlilik ilkesini benimsemiştir ve kişisel verileri toplayan veya işleyen tüm yeni veya önemli ölçüde değiştirilmiş sistemlerin tanımının ve planlamasının, bir veya daha fazla veri koruma etkisinin tamamlanması da dahil olmak üzere gizlilik konularının gereken şekilde değerlendirilmesine tabi olmasını sağlayacaktır. değerlendirmeler.
            </p>
            <p class="para-section">
              Veri koruma etki değerlendirmesi şunları içerecektir:
            </p>
            <p class="para-section">
              Kişisel verilerin nasıl ve hangi amaçlarla işleneceğinin değerlendirilmesi<br>Kişisel verilerin önerilen işlenmesinin amaç(lar)la hem gerekli hem de orantılı olup olmadığının değerlendirilmesi
            </p>
            <p class="para-section">
              Kişisel verilerin işlenmesinde bireylere yönelik risklerin değerlendirilmesi<br>Belirlenen riskleri ele almak ve mevzuata uygunluğu göstermek için hangi kontroller gereklidir<br>Veri minimizasyonu ve takma ad verme gibi tekniklerin kullanımı, uygulanabilir ve uygun olduğunda dikkate alınacaktır.
            </p>
            <div class="sub-title pl-0">2.7 Kişisel Verilerin İşlenmesini İçeren Sözleşmeler</div>
            <p class="para-section">
              OIS, kişisel verilerin işlenmesini içeren tüm ilişkilerin, GDPR\'nin gerektirdiği spesifik bilgi ve şartları içeren belgelenmiş bir sözleşmeye tabi olmasını sağlayacaktır. Daha fazla bilgi için GDPR Denetleyici-İşlemci\'ye bakın
              Sözleşme Politikası
            </p>
            <div class="sub-title pl-0">2.8 Kişisel Verilerin Uluslararası Aktarımı</div>
            <p class="para-section">
              Kişisel verilerin Avrupa Birliği dışına aktarımı, aktarım öncesinde, GDPR\'nin dayattığı sınırlar dahilinde olduklarından emin olmak için dikkatle incelenecektir. Bu kısmen Avrupa Komisyonu\'nun alıcı ülkede geçerli olan kişisel verilere yönelik koruma önlemlerinin yeterliliğine ilişkin kararına bağlıdır ve bu durum zaman içinde değişebilir.<br>Grup içi uluslararası veri aktarımları, belirtilen yasal olarak bağlayıcı anlaşmalara tabi olacaktır. veri sahiplerine uygulanabilir haklar sağlayan Bağlayıcı Kurumsal Kurallar (BCR) olarak kabul edilecektir.
            </p>
            <div class="sub-title pl-0">2.9 Veri Koruma Görevlisi</div>
            <p class="para-section">
              Bir kuruluşun bir kamu kurumu olması, büyük ölçekli izleme gerçekleştirmesi veya özellikle hassas veri türlerini büyük ölçekte işlemesi durumunda, GDPR kapsamında tanımlanmış bir Veri Koruma Görevlisi (DPO) rolü gereklidir. DPO\'nun uygun düzeyde bilgi sahibi olması gerekir ve kurum içi bir kaynak olabilir veya uygun bir hizmet sağlayıcıya dış kaynak olarak verilebilir.
            </p>
            <p class="para-section">
              Bu kriterlere göre OIS tarafından atanan Veri Koruma Görevlisi\'nin iletişim bilgileri aşağıdadır:
            </p>
            <p class="para-section">
              İsim: Archibald Coker<br>E-posta: acoker@oisservices.com<br>İletişim: +44 (0) 207 832 0001
            </p>
            <div class="sub-title pl-0">2.10 İhlal Bildirimi</div>
            <p class="para-section">
              Kişisel veri ihlallerinden etkilenen tarafların bilgilendirilmesi için alınacak aksiyonlar değerlendirilirken adil ve orantılı olmak OIS\'in politikasıdır. GDPR uyarınca bireylerin hak ve özgürlüklerine yönelik risk oluşturması muhtemel bir ihlalin meydana geldiği bilinen durumlarda, ilgili denetim makamına 72 saat içerisinde bilgi verilecektir. Bu, bilgi güvenliği olaylarının ele alınmasına ilişkin genel süreci belirleyen Bilgi Güvenliği Olaylarına Müdahale Prosedürümüze uygun olarak yönetilecektir.
            </p>
            <p class="para-section">
              GDPR uyarınca, ilgili DPA, düzenlemelerin ihlali nedeniyle, hangisi daha yüksekse, dünya çapındaki yıllık cironun yüzde dördüne kadar veya yirmi milyon Euro\'ya kadar çeşitli para cezaları uygulama yetkisine sahiptir.
            </p>
            <div class="sub-title pl-0">2.11 GDPR\'ye Uyumluluğun Ele Alınması</div>
            <p class="para-section">
              OIS\'in her zaman GDPR\'nin hesap verebilirlik ilkesine uygun olmasını sağlamak için aşağıdaki eylemler gerçekleştirilir:
            </p>
            <ul class = "para-list">
              <li>
                Kişisel verilerin işlenmesinin hukuki dayanağı açık ve nettir
              </li>
              <li>
                Kuruluşta veri korumasından özel olarak sorumlu olacak bir Veri Koruma Görevlisi atanır (gerekirse)
              </li>
              <li>
                Kişisel verilerin işlenmesinde görev alan tüm personel, iyi veri koruma uygulamalarını takip etme konusundaki sorumluluklarını anlamaktadır
              </li>
              <li>
                Tüm personele veri koruma eğitimi verildi
              </li>
              <li>
                Rızaya ilişkin kurallara uyulur
              </li>
              <li>
                Kişisel verilere ilişkin haklarını kullanmak isteyen veri sahiplerine yol gösterilmekte ve bu talepler etkin bir şekilde ele alınmaktadır.
              </li>
              <li>
                Kişisel verilere ilişkin prosedürler düzenli olarak gözden geçirilmektedir
              </li>
              <li>
                Tasarım gereği gizlilik, tüm yeni veya değiştirilmiş sistem ve süreçler için benimsenmiştir
              </li>
            </ul>
            <p class="para-section">
              İşleme faaliyetlerine ilişkin aşağıdaki belgeler kaydedilir:
            </p>
            <ul class = "para-list">
              <li>
                Kuruluş adı ve ilgili ayrıntılar
              </li>
              <li>
                Kişisel veri işlemenin amaçları
              </li>
              <li>
                Kişi kategorileri ve işlenen kişisel veriler
              </li>
              <li>
                Kişisel veri alıcılarının kategorileri
              </li>
              <li>
                Mevcut kontrollerin ayrıntıları da dahil olmak üzere, kişisel verilerin AB üyesi olmayan ülkelere aktarımına ilişkin anlaşmalar ve mekanizmalar
              </li>
              <li>
                Kişisel veri saklama programları
              </li>
              <li>
                İlgili teknik ve organizasyonel kontroller mevcut
              </li>
            </ul>
            <p class="para-section">
              Bu eylemler, veri korumayla ilgili yönetim sürecinin bir parçası olarak düzenli olarak gözden geçirilir.
            </p>
          </div>
          <div class="sub-title">İlgili Veri Koruma</div>
          <div class = "sub-section">
            <div class="sub-title pl-0">Veri Koruma İlkeleri</div>
            <p class="para-section">
              Kuruluşların kişisel verileri müşterilerin gizliliğini koruyacak şekilde toplamasını, saklamasını ve işlemesini sağlayan 8 veri koruma ilkesi bulunmaktadır. Bu ilkeler Kanunun 1 numaralı ekinde yer almakta olup aşağıdaki gibidir:
            </p>
            <p class="para-section">
              Ben. Veriler adil ve yasalara uygun şekilde kullanılmalıdır<br>Pasaport, vize almanıza yardımcı olmak ve yasalarla ve müşterilerimizle aramızdaki sözleşmelerle izin verilen diğer amaçlarla müşterilerin verilerini elde etmek, saklamak ve işlemek için meşru gerekçelerimiz var. . Verilerinizin yasa dışı amaçlarla kullanılmayacağını garanti ediyoruz.
            </p>
            <p class="para-section">
              ii. Kişisel veriler yalnızca belirli ve hukuka uygun bir veya daha fazla amaç için elde edilecek ve bu amaç veya bu amaçlarla bağdaşmayan herhangi bir şekilde ayrıca işlenmeyecektir.<br>İşimizin doğası gereği, verdiğiniz amaç kişisel verileriniz sizin ve bizim için açıktır. Siz bize onay vermedikçe veya kanunen buna mecbur kalmadıkça, verilerinizi asıl amaç ile bağdaşmayan başka bir amaç için kullanmayacağız.
            </p>
            <p class="para-section">
              iii. Kişisel veriler, işlendikleri amaç veya amaçlarla bağlantılı olarak yeterli ve ilgili olacak ve aşırı olmayacaktır.<br>Sizinle aramızdaki sözleşmeyi iletmek için yalnızca ilgili ve yeterli olduğunu düşündüğümüz bilgileri alacağız.
            </p>
            <p class="para-section">
              iv. Kişisel veriler doğru olmalı ve gerektiğinde güncel tutulmalıdır.<br>Bize sağladığınız kişisel verilerin doğru olmasını ve yanıltıcı olmamasını sağlıyoruz. Bunu, bize verdiğiniz bilgileri doğrulama fırsatı vererek ve gerektiğinde belgeli kanıt talep ederek sağlıyoruz. Kişisel verilerinizde ilgili değişiklikler varsa (örn. isim veya uyruk değişikliği), lütfen kaydınızı güncelleyebilmemiz için mümkün olan en kısa sürede bize bildirin.
            </p>
            <p class="para-section">
              v. Herhangi bir amaç veya amaç için işlenen kişisel veriler, söz konusu amaç veya amaçlar için gerekenden daha uzun süre saklanmayacaktır.<br>Bazı kişisel verilere hâlâ ihtiyaç olup olmadığını görmek için zaman zaman veri tabanımızı inceleyeceğiz. tarafımızdan saklanacaktır. Saklanma amacına ulaşılmışsa ve bunları saklamaya devam etmenin artık gerekli olmadığına karar verirsek, bunları güvenli bir şekilde sileriz.
            </p>
            <p class="para-section">
              vi. Kişisel veriler, veri sahiplerinin bu Kanun kapsamındaki haklarına uygun olarak işlenecektir.<br>Kişisel verilerinizi, aşağıdakilerden herhangi birini yapmanızı sağlayacak şekilde işleyeceğiz:
            </p>
            <ul class = "para-list-digit">
              <li>
                Halk arasında "konu erişim talebi" olarak bilinen, kişisel verilerinizin bir kopyasına erişim hakkı. Bunun için geçerli ücret, standart talep başına 10 £\'dur ve bunu 14 gün içinde sağlamayı hedefliyoruz. Konu Erişim Talebi e-posta veya posta yoluyla info@oisservices.com adresine yapılmalıdır. The Head of Centre, OIS Services, 56-57 Fleet street, EC4Y 1JU, Londra </li>
              <li>
                kişisel verilerinizin size zarar verebilecek veya sıkıntıya neden olabilecek şekilde işlenmesine itiraz etme hakkı;
              </li>
              <li>
                kişisel verilerinizin asıl amaç veya amaçlarla bağdaşmayacak şekilde işlenmesini engelleme hakkı;
              </li>
              <li>
                otomatik yöntemlerle alınan kararlara itiraz etme hakkı;
              </li>
              <li>
                uygun olduğunda, hatalı kişisel verilerin düzeltilmesi, bloke edilmesi veya silinmesi hakkı ve
              </li>
              <li>
                Kanunun ihlali nedeniyle oluşan zararlar için tazminat talep etme hakkı.
              </li>
            </ul>
            <p class="para-section">
              vii. Kişisel veri güvenliği<br>Kişisel verileriniz hem fiziksel hem de teknik olarak son derece güvenli bir ortamda muhafaza edilmektedir. Kişisel verilerin saklandığı alanlar yetkisiz tüm kişilerin erişimine kapalıdır. Tesisin bu bölümlerine erişim yalnızca yetkili kişilere verilen elektronik anahtarla sağlanabilir. Kişisel verilerinize sistem üzerinde yalnızca yetkili kişiler tarafından ulaşılabilir. Kişisel verilerinizi yalnızca yetkili kişiler değiştirebilir, açıklayabilir veya yok edebilir. Ayrıca, söz konusu yetkili kişiler bu işlevlerden herhangi birini yalnızca yasal görevleri kapsamında yerine getirebilirler. Bu nedenle kişisel verilerinizin hukuka aykırı olarak işlenmesi veya kazara zarar görmesi, yok edilmesi veya kaybolması ihtimali çok azdır.
              Ayrıca aşağıdakileri sağlamak politikamızdır:
            </p>
            <ul class = "para-list-digit">
              <li>
                Kişisel verilere erişimi olan her yetkili çalışanın, başka kişilerle paylaşılmayan, kendisine ait şifresi bulunduğunu,
              </li>
              <li>
                Verilerimizi korumak için onaylı güvenlik yazılımı ve güvenlik duvarı kullanılır,
              </li>
              <li>
                Kullanılmayan basılı kişisel veriler parçalanır,
              </li>
              <li>
                Kişisel verilerin dizüstü bilgisayarlarda, diğer mobil cihazlarda ve ortamlarda saklanmasını önermiyoruz ancak depolanıyorsa güvenli bir şekilde kilitlenmeli ve ofis dışına çıkarılmamalıdır.
              </li>
            </ul>
            <p class="para-section">
              viii. Kişisel verilerin Avrupa Ekonomik Alanı dışına aktarımı<br>Kişisel verileriniz, Avrupa Ekonomik Alanı dışındaki bir ülkeye veya bölgeye, söz konusu ülke veya bölge ilgili veri sahiplerinin hakları ve özgürlükleri için yeterli düzeyde koruma sağlamadığı sürece aktarılmayacaktır. kişisel verilerin işlenmesine. AEA dışında, AEA ülkeleriyle karşılaştırılabilir düzeyde kişisel verilerin işlenmesi için yeterli koruma düzeyine sahip olduğu kabul edilen yalnızca birkaç ülke vardır. Kişisel verileri ABD\'ye aktarırken, alıcının ABD Ticaret Bakanlığı Güvenli Liman Planı\'nın imzacısı olmasını sağlıyoruz. Bu programın veri sahiplerine yeterli koruma sağladığı Avrupa Komisyonu tarafından tanınmaktadır. Kişisel verilerin işlenmesine yönelik eşdeğer güvenlik ve koruma önlemlerine sahip olduğu kabul edilmeyen AEA dışındaki diğer ülkelerle ilgili olarak, ya koşulları Avrupa Direktifleri tarafından onaylanan ayrı bir sözleşme imzalıyoruz ya da bir madde olmasını sağlıyoruz tüm müşterilerimizin kişisel verilerinin işlenmesini koruyan sözleşmede yer almaktadır.
            </p>
          </div>
        </div>',
      'order_num' => 1,
      'lang' => 'tr',
    ]);

    //es
    Content::create([
      'title' => 'ABOUT OIS',
      'content' => '<p class="title body-section">Soluciones de software innovadoras<br>en todos los sectores.</p>',
      'order_num' => 1,
      'lang' => 'es',
    ]);
    Content::create([
      'title' => 'ABOUT OIS',
      'content' => '<p class="sub-title">OIS (Servicios integrados en línea)</p>
                 <p class="description mt-4">OIS (Soluciones integradas en línea) está a la vanguardia de la innovación como proveedor líder de soluciones de software de vanguardia que abarcan diversas industrias. Nuestro viaje comenzó como un centro de solicitud de visas y proveedor de servicios de apoyo, y desde entonces hemos evolucionado para extender nuestros servicios a todas las misiones diplomáticas de Nigeria en todo el mundo. Nuestro éxito se basa en tecnología avanzada, calidad incomparable, escalabilidad y la perfecta transferibilidad de nuestras soluciones.</p>
                 <p class="description mb-0 mt-4">Lo que distingue a OIS es nuestra huella global, que permite la integración sin esfuerzo de aplicaciones a escala mundial. Nuestro compromiso con la excelencia se extiende más allá de los servicios de inmigración, ya que contamos con una sólida trayectoria en plataformas bancarias. Al actuar como intermediario crucial para los bancos nigerianos, brindamos servicios esenciales a nigerianos no residentes y personas de otras nacionalidades en el extranjero que buscan abrir o reactivar sus cuentas bancarias nigerianas.</p>
                 <p class="description mb-0 mt-4">En OIS, nos esforzamos continuamente por redefinir los estándares de la industria, ofreciendo un conjunto integral de soluciones que reflejan nuestra dedicación a la excelencia y la destreza tecnológica. Únase a nosotros en un viaje de prestación de servicios incomparable y conectividad global.</p>',
      'order_num' => 2,
      'lang' => 'es',
    ]);
    Content::create([
      'title' => 'ABOUT OIS',
      'content' => '<p class="description">En OIS, nos sentimos inmensamente orgullosos de nuestro compromiso inquebrantable con la prestación de servicios excepcionales y la tecnología de vanguardia. Nuestra amplia gama de servicios va más allá de las soluciones de visas y pasaportes, y abarca plataformas de educación, atención médica y banca. Creemos en la simplificación de los procesos y, para lograrlo, ofrecemos una experiencia de solicitud optimizada a través de nuestro portal en línea fácil de usar, un sistema de pago fluido y actualizaciones en tiempo real.</p>
                 <p class="description mt-4 mb-0">Para aquellos que buscan obtener un Número de verificación bancaria (BVN), nuestro proceso de solicitud en línea junto con la entrega de SMS garantiza una experiencia eficiente y sin complicaciones.</p>
                 <p class="description mt-4 mb-0">En el ámbito de los servicios financieros, destacan nuestros servicios de Transferencia Electrónica de Dinero. Proporcionamos un medio seguro y asequible para transferencias de dinero en línea, admitiendo varios métodos, como retiro en efectivo, transacciones de criptomonedas, transferencias bancarias, transacciones de dinero móvil y recargas de tiempo aire. Con OIS, experimente la comodidad de soluciones financieras modernas, seguras y flexibles diseñadas para satisfacer sus diversas necesidades.</p>',
      'order_num' => 3,
      'lang' => 'es',
    ]);
    Content::create([
      'title' => 'ABOUT OIS',
      'content' => '<p class="description mb-0">En OIS, el bienestar de nuestros clientes ocupa un lugar central y nuestro compromiso se extiende a brindar servicios de bienestar y salud electrónica de primer nivel. Sumérgete en un enfoque integral de la salud con nuestra variedad de ofertas:</p>
                 <p class="description mt-0 mb-0"><b>Servicios de Telemedicina:</b></p>
                 <p class="description mt-0 mb-0 ml-4">• Experimente la atención médica a su medida con nuestros servicios de telemedicina. Conéctese sin problemas con profesionales de la salud a través de consultas virtuales, desbloqueando planes de dieta personalizados, rutinas de ejercicio seleccionadas y un valioso apoyo para la salud mental. Tu bienestar es nuestra prioridad, y nuestra telemedicina
                     Los servicios le brindan experiencia en atención médica directamente.</p>
                 <p class="description mt-0 mb-0"><b>Dispositivos de monitoreo de salud:</b></p>
                 <p class="description mt-0 mb-0 ml-4">• Manténgase informado y proactivo sobre su salud con nuestros dispositivos de monitoreo de salud. Estas herramientas de vanguardia le permiten realizar un seguimiento de los signos vitales y brindarle información valiosa sobre su salud general. Empoderate con decisiones basadas en datos para un estilo de vida más saludable.</p>
                 <p class="description mt-0 mb-0"><b>Programa de Bienestar Integrado:</b></p>
                 <p class="description mt-0 mb-0 ml-4">• Nuestro programa de bienestar es un refugio holístico para la salud, que integra perfectamente el apoyo a la salud mental en su viaje de bienestar. Más allá de la salud física, priorizamos el bienestar mental, fomentando un enfoque equilibrado e integral del bienestar general.</p>
                 <p class="description mt-0 mb-0">Nuestra misión es brindar no solo soluciones de software de vanguardia, sino también ser un aliado confiable en su búsqueda de salud y bienestar. Al simplificar los procesos y mejorar las experiencias en todas las industrias, nos dedicamos a generar un impacto positivo en cada faceta de su vida. Bienvenido a un mundo donde
                     la innovación se encuentra con el bienestar.</p>
                 <p class="description mt-4 mb-5">En OIS, nuestro compromiso inquebrantable es ser pioneros en soluciones de software de vanguardia que no solo agilicen los procesos sino que también los simplifiquen y mejoren las experiencias en diversas industrias.</p>',
      'order_num' => 4,
      'lang' => 'es',
    ]);
    Content::create([
      'title' => 'SERVICES',
      'content' => '<p class="title body-section">Ayudando a empresas e individuos<br>a superar desafíos complejos.</p>',
      'order_num' => 1,
      'lang' => 'es',
    ]);
    Content::create([
      'title' => 'SERVICES',
      'content' => '<p class="sub-title">TRAMITACIÓN DE SOLICITUD DE VISADO Y PASAPORTE:</p>
                 <p class="description mb-0">En Online Integrated Solutions (OIS), somos pioneros a nivel mundial en soluciones de software revolucionarias, dedicados a capacitar a empresas e individuos para superar desafíos complejos. Nuestro profundo impacto es particularmente evidente en el ámbito del procesamiento de aplicaciones VISA, donde aprovechamos el poder de los algoritmos avanzados de aprendizaje automático (ML) para mejorar la eficiencia, la precisión y la escalabilidad, elevando en última instancia la experiencia general del cliente. Estas son áreas clave donde nuestro enfoque innovador del aprendizaje automático puede generar mejoras transformadoras:</p>
                 <p class="description mt-0 mb-0 ml-4">• Procesamiento y Validación de Datos.</p>
                 <p class="description mb-0 ml-4">• Detección de fraude.</p>
                 <p class="description mb-0 ml-4">• Identificación Biométrica.</p>
                 <p class="description mb-0 ml-4">• Seguimiento del estado de la solicitud.</p>
                 <p class="description mb-5 mt-4">En OIS, visualizamos un futuro donde la tecnología no solo cumple sino que supera las expectativas, y nuestro compromiso de ampliar los límites de la innovación garantiza que nuestros clientes y usuarios se beneficien de las tecnologías más avanzadas. Soluciones de procesamiento de solicitudes de visas y pasaportes disponibles, eficientes y seguras.</p>',
      'order_num' => 2,
      'lang' => 'es',
    ]);
    Content::create([
      'title' => 'SERVICES',
      'content' => '<p class="sub-title">NÚMERO DE VERIFICACIÓN BANCARIA (BVN) PROCESAMIENTO DE SOLICITUD:</p>
            <p class="description mb-0">En nuestra incesante búsqueda de servicios integrados, reconocemos el potencial transformador del aprendizaje automático, particularmente en la optimización de nuestro proceso de solicitud del Número de verificación bancaria (BVN). Entendemos la suma importancia de una emisión BVN rápida y accesible para nuestros clientes, lo que nos impulsa a perfeccionar y acelerar continuamente este procedimiento crucial. Aprovechando las capacidades del aprendizaje automático, nuestro objetivo es elevar tanto la precisión como la eficiencia de los registros de BVN, y al mismo tiempo mitigar los riesgos asociados con errores y actividades fraudulentas. Estos son los dominios clave en los que nuestra incorporación del aprendizaje automático promete un impacto sustancial:</p>
            <p class="description mt-0 mb-0 ml-4">• Procesamiento y Validación de Datos.</p>
            <p class="description mt-0 mb-0 ml-4">• Análisis predictivo.</p>
            <p class="description mt-0 mb-0 ml-4">• Detección de fraude.</p>
            <p class="description mt-4 mb-5">En el centro de nuestro compromiso se encuentra la dedicación a brindar a nuestros clientes una experiencia de aplicación BVN incomparable: rápida, precisa y fortalecida contra riesgos potenciales. A través de la infusión de aprendizaje automático, nos embarcamos en un viaje para redefinir los estándares de eficiencia y seguridad en la emisión de BVN.</p>',
      'order_num' => 3,
      'lang' => 'es',
    ]);
    Content::create([
      'title' => 'SERVICES',
      'content' => '<p class="sub-title">ELEVAR LA EXCELENCIA DEL SERVICIO CON CHATBOTS IMPULSADOS POR IA:</p>
                 <p class="description">Estamos encantados de presentar nuestra última innovación, el AI Chatbot, un avance instrumental preparado para transformar el servicio y la asistencia al cliente. Este Chatbot de última generación aprovecha el poder de los algoritmos de aprendizaje automático y presenta a los clientes una vía de asistencia personalizada y eficiente. Nuestro Chatbot está diseñado para revolucionar la experiencia del cliente al brindar respuestas rápidas y precisas a las consultas y resolver problemas con una dependencia mínima de la intervención humana.</p>
                 <p class="description mt-4 mb-0">Características y beneficios clave:</p>
                 <p class="description mt-0 mb-0 ml-4">• Respuestas rápidas y precisas.</p>
                 <p class="description mt-0 mb-0 ml-4">• Accesibilidad 24 horas al día, 7 días a la semana.</p>
                 <p class="description mt-0 mb-0 ml-4">• Eliminación de Tiempos de Espera.</p>
                 <p class="description mt-0 mb-0 ml-4">• Manejo versátil de consultas.</p>
                 <p class="description mt-4 mb-5">Este Chatbot de IA representa un compromiso para redefinir los estándares de servicio, garantizando que nuestros clientes experimenten una interacción fluida y eficiente con nuestra marca. A medida que la tecnología continúa evolucionando, nos mantenemos a la vanguardia, aprovechando soluciones innovadoras para mejorar el recorrido del cliente. Bienvenido a una nueva era de personalización y capacidad de respuesta</p>',
      'order_num' => 4,
      'lang' => 'es',
    ]);
    Content::create([
      'title' => 'SERVICES',
      'content' => '<p class="sub-title">ELEVANDO LA SALUD Y EL BIENESTAR A TRAVÉS DE TECNOLOGÍA DE VANGUARDIA</p>
                 <p class="description mb-0">Al embarcarnos en un viaje de mejora continua, nos comprometemos a revolucionar nuestros servicios de salud electrónica y bienestar mediante la integración de tecnología avanzada. Explore las innumerables formas en que estas innovaciones pueden ayudarle a mantener una salud y un bienestar óptimos:</p>
                 <p class="descripción mt-0 mb-0">1. Servicios de Telemedicina:</p>
                 <p class="description mb-0 ml-4">• Sumérgete en el futuro de la atención médica con nuestros sistemas avanzados. La precisión y la personalización están a la vanguardia, ya que nuestros servicios de telemedicina diagnostican con precisión problemas de salud y ofrecen planes de tratamiento personalizados adaptados a sus necesidades únicas.</p>
                 <p clase="descripción mt-0 mb-0">2. Programa de Bienestar:</p>
                 <p class="description mb-0 ml-4">• Adopte un enfoque holístico del bienestar a través de nuestro innovador programa de bienestar. Aprovechando el potencial transformador de la tecnología Blockchain y Web3, nuestra plataforma segura y descentralizada ofrece planes de dieta personalizados, regímenes de ejercicio personalizados y apoyo integral para la salud mental. Embárcate en un viaje de bienestar que es tan individual como tú.</p>
                 <p clase="descripción mt-0 mb-0">3. Dispositivos de monitoreo de salud:</p>
                 <p class="description mb-0 ml-4">• Libere el poder de la IA con nuestros dispositivos de monitoreo de salud. Estos sistemas inteligentes analizan los datos recopilados de una variedad de dispositivos y le brindan comentarios personalizados y recomendaciones detalladas. Transforme la forma en que controla su salud con tecnología que evoluciona con usted.</p>
                 <p class="description mt-4 mb-5">En la intersección de la innovación y la salud, imaginamos un futuro en el que la tecnología mejora cada faceta de su viaje hacia el bienestar. Nuestro compromiso es brindarle soluciones personalizadas, seguras y de vanguardia que redefinan los estándares de E-salud y bienestar. Bienvenido a un ámbito donde su salud no es solo una prioridad: es una experiencia personalizada.</p>',
      'order_num' => 5,
      'lang' => 'es',
    ]);
    Content::create([
      'title' => 'SERVICES',
      'content' => '<p class="sub-title">REVOLUCIONANDO LA TRANSFERENCIA ELECTRÓNICA DE DINERO CON TECNOLOGÍAS BLOCKCHAIN Y WEB3</p>
                 <p class="description">OIS se enorgullece de anunciar una mejora innovadora de nuestro servicio de transferencia electrónica de dinero mediante la integración de tecnologías Blockchain y Web3 de vanguardia. Esta evolución estratégica eleva el estándar de nuestro servicio, brindando a los clientes un nivel de transparencia y seguridad sin precedentes.</p>
                 <p class="description mt-4 mb-0">Avances clave:</p>
                 <p class="description mt-0 mb-0 ml-4">• Grabación de libro mayor inmutable.</p>
                 <p class="description mt-0 mb-0 ml-4">• Opciones rápidas, seguras y de bajo costo.</p>
                 <p class="description mt-0 mb-0 ml-4">• Flexibilidad y comodidad mejoradas.</p>
                 <p class="description mt-4 mb-5">En OIS, estamos comprometidos a redefinir el panorama de los servicios financieros electrónicos. La integración de Blockchain y Web3 es un testimonio de nuestra dedicación a la innovación, garantizando que nuestros clientes experimenten la máxima seguridad, transparencia y conveniencia al confiarnos sus transacciones financieras. Bienvenido a una nueva era de transferencia electrónica de dinero, donde la tecnología se une a la confianza.</p>',
      'order_num' => 6,
      'lang' => 'es',
    ]);
    Content::create([
      'title' => 'INNOVATION',
      'content' => '<p class="title body-section">El futuro de la realidad virtual<br>está aquí.</p>',
      'order_num' => 1,
      'lang' => 'es',
    ]);
    Content::create([
      'title' => 'INNOVATION',
      'content' => '<p class="sub-title">Personalización impulsada por IA</p>
                 <p class="description">Utilizamos algoritmos de IA para personalizar nuestros servicios según las necesidades de cada cliente individual. Al analizar los datos y los patrones de comportamiento de los clientes, podemos adaptar nuestras soluciones para satisfacer requisitos y preferencias específicos.</p>',
      'order_num' => 2,
      'lang' => 'es',
    ]);
    Content::create([
      'title' => 'INNOVATION',
      'content' => '<p class="sub-title">Aprendizaje automático para la detección de fraude</p>
                 <p class="description">Nuestros algoritmos de aprendizaje automático analizan el comportamiento del cliente, los datos transaccionales, las actividades sospechosas y previenen transacciones fraudulentas en todos nuestros servicios.</p>',
      'order_num' => 3,
      'lang' => 'es',
    ]);
    Content::create([
      'title' => 'INNOVATION',
      'content' => '<p class="sub-title">Seguridad basada en Blockchain</p>
                 <p class="description">Nuestra nueva dirección tecnológica es Blockchain y Web3, que proporciona mayor seguridad y transparencia para los datos y transacciones de nuestros clientes. Implementamos la tecnología blockchain para garantizar la inmutabilidad y trazabilidad de nuestros datos, así como una mayor seguridad contra filtraciones y hackeos de datos.</p>',
      'order_num' => 4,
      'lang' => 'es',
    ]);
    Content::create([
      'title' => 'INNOVATION',
      'content' => '<p class="sub-title">Descentralización basada en Web3</p>
                 <p class="description">Nuestras soluciones basadas en Web3 proporcionan una mayor descentralización y democratización de los servicios. Al utilizar protocolos Web3, podemos reducir la dependencia de intermediarios centralizados, reducir las tarifas de transacción y mejorar la accesibilidad y la inclusión para nuestros clientes.</p>',
      'order_num' => 5,
      'lang' => 'es',
    ]);
    Content::create([
      'title' => 'INNOVATION',
      'content' => '<p class="sub-title">Investigación y Desarrollo</p>
                 <p class="description">Para mantenernos por delante de la competencia, estamos invirtiendo en investigación y desarrollo de nuevas tecnologías y sus posibles aplicaciones. Colaboramos con empresas emergentes, instituciones académicas e instituciones de investigación para acelerar la innovación y brindar soluciones avanzadas a nuestros clientes.</p>',
      'order_num' => 6,
      'lang' => 'es',
    ]);
    Content::create([
      'title' => 'INNOVATION',
      'content' => '<p class="sub-title">Capacitación basada en Realidad Virtual</p>
                 <p class="description mb-5">Ofrecemos capacitación basada en realidad virtual para que nuestros profesionales de la salud y equipos de atención al cliente mejoren sus habilidades y brinden un mejor servicio. Nuestros programas de capacitación basados en realidad virtual simulan escenarios del mundo real, brindando una experiencia de aprendizaje segura e inmersiva.</p>',
      'order_num' => 7,
      'lang' => 'es',
    ]);
    Content::create([
      'title' => 'SECURITY',
      'content' => '<p class="title body-section">Con OIS<br>tus datos están seguros.</p>',
      'order_num' => 1,
      'lang' => 'es',
    ]);
    Content::create([
      'title' => 'SECURITY',
      'content' => '<p class="sub-title">Protección y seguridad de datos</p>
                 <p class="description">OIS otorga una alta prioridad a la protección y seguridad de los datos de nuestros clientes. Hemos implementado una variedad de medidas para garantizar la seguridad y precisión de los datos de los clientes, incluidos protocolos de cifrado sólidos, copias de seguridad periódicas y soluciones seguras de almacenamiento de datos.</p>
                 <p class="description mt-4">Además, hemos establecido estrictos controles de acceso a los datos, garantizando que solo el personal autorizado tenga acceso a los datos confidenciales de los clientes. Para mantener la exactitud de los datos de los clientes, OIS emplea procesos automatizados de verificación y limpieza de datos para garantizar que los datos sean siempre precisos y estén actualizados.</p>
                 <p class="description mt-4 mb-5">OIS obtiene datos de los clientes a través de procesos seguros basados en el consentimiento y utiliza estos datos para informar el desarrollo de nuevos productos y servicios que brinden valor real a los clientes.</p>',
      'order_num' => 2,
      'lang' => 'es',
    ]);
    Content::create([
      'title' => 'DISCLAIMERS',
      'content' => '',
      'order_num' => 1,
      'lang' => 'es',
    ]);
    Content::create([
      'title' => 'TERMS OF USE',
      'content' => '
        <div class="main-title">
          Descargo de responsabilidad y condiciones de uso
        </div>
        <div class="sub-body">
          <div class="sub-title">1. Notas importantes</div>
          <div class="sub-section">
              <p class="para-section">
                  OIS recomienda que no compre boletos ni haga reservas que no puedan cancelarse sin costo antes de la emisión de una visa, excepto cuando sea un requisito específico establecido como parte de la solicitud de visa.
              </p>
              <p class="para-section">
                  Estos términos contienen una exención de responsabilidad que limita nuestra responsabilidad a nuestra política de reembolso que se indica a continuación. Excepto cuando esté cubierto en nuestra política de reembolso a continuación, todas las tarifas no son reembolsables y podemos retenerlas cuando usted realice el pago, incluso si no presenta ni continúa con una solicitud de visa, y si se le otorga o no una visa.
              </p>
              <p class="para-section">
                  Usted es responsable de la exactitud de su formulario de solicitud y de verificarlo. No garantizamos que encontraremos errores y no verificamos la información que usted ha proporcionado.
              </p>
          </div>
          <div class="sub-title">2. Proveedor de servicios</div>
          <div class="sub-section">
              <p class="para-section">
                  OIS es un centro de procesamiento de visas para solicitudes de visas nigerianas con oficinas en:
              </p>
              <ul class="para-list">
                  <li>
                      Abuja (No.5 Onitsha Crescent, Off Gimbiya Street, Área 11, Garki, Abuja Nigeria)
                  </li>
                  <li>
                      Ámsterdam (Kingsfordweg 151, 1043GR, Ámsterdam Países Bajos)
                  </li>
                  <li>
                      Ankara (Danismanlik Ltd. Sti. Kazim Ozalp Mahallesi Koza Caddesi 35/3 Cankaya, Ankara
                      Pavo)
                  </li>
                  <li>
                      Atlanta (918 Holcomb Bridge Road, Suite 204, Roswell, Atlanta, GA EE. UU. 30076)
                  </li>
                  <li>
                      Beijing (Unidad 1 Suite 1801, Edificio Kun Sha, 16 Xin Yuan Li Str, Distrito Chaoyang, Beijing PRC)
                  </li>
                  <li>
                      Beirut (Jnah-Beirut, frente al edificio Mais 6 del Hospital Universitario Rafik Hariri, tercer piso, apartado postal 9 UNESCO, Beirut, Líbano)
                  </li>
                  <li>
                      Guangzhou (Unidad 27/28, piso 41, edificio R&F To-Win, 30 Huaxia Rd, distrito de Tianhe, Guangzhou, República Popular China)
                  </li>
                  <li>
                      Houston (9894 Bissonnet Street, Suite 745 Houston TX 77036 EE. UU.)
                  </li>
                  <li>
                      Johannesburgo (6 Bolton Road Parkwood Rosebank, 2193, Johannesburgo, Sudáfrica)
                  </li>
                  <li>
                      Kuala Lumpur (36.01 Nivel 36 Menara Citibank, 165 Jalan Ampang 50450 Kuala Lumpur Malasia)
                  </li>
                  <li>
                      Leicester (St Georges House, 6 St Georges Way, Leicester LE1 1SH, Reino Unido)
                  </li>
                  <li>
                      Londres (56-57 Fleet Street City de Londres Londres EC4Y 1JU Reino Unido)
                  </li>
                  <li>
                      Los Ángeles (11222 S. La Cienega Blvd Inglewood, Suite 302, CA. 90304 EE. UU.)
                  </li>
                  <li>
                      Londres (56-57 Fleet Street City de Londres Londres EC4Y 1JU Reino Unido)
                  </li>
                  <li>
                      Mumbai (Quest Offices Pvt. Ltd., octavo piso, Parinee Crescenzo, C38 y 39, bloque G, complejo Bandra Kurla, Bandra (este) Pin:400051, Maharashtra, India)
                  </li>
                  <li>
                      Nueva Delhi (C/O Central Board of Irrigation & Power Plot No. 4, Planta Baja, Área Institucional Opp.: Sarvodaya School Malcha Marg Chanakyapuri New Delhi 110021, Delhi, India)
                  </li>
                  <li>
                      Nueva York (370 Lexington Ave, Suite 1505 Nueva York, NY 10017 EE. UU.)
                  </li>
                  <li>
                      París (7 Rue Daru 75008 París, Francia)
                  </li>
                  <li>
                      Pretoria (3er piso, Edificio 2, Brooklyn Bridge Office Park, Pretoria 570 Fehsen, Sudáfrica)
                  </li>
                  <li>
                      Roma (S.R.L., Via Sicilia, 30 00187 Roma, Italia)
                  </li>
                  <li>
                      Shanghai (Sala 2025, 20/F, Edificio Catic, 212 Jiangning Road, Distrito Jing\'an, Shanghai, República Popular China)
                  </li>
                  <li>
                      Washington DC (11900 Parklawn Drive Suite 160, Rockville MD 20852, Washington DC, EE. UU.)
                  </li>
              </ul>
          </div>
          <div class="sub-title">3. Aplicación de estos términos</div>
          <div class="sub-section">
              <p class="para-section">
                  Estos términos y condiciones rigen su uso de los servicios de la OIS, todas las solicitudes de visa que realice y todas las consultas que realice para obtener asesoramiento o información sobre visas nigerianas. Cada solicitante de una visa por la presente acepta y confirma que, antes de presentar una solicitud de visa, ha leído, comprendido y aceptado regirse por, sin limitación ni calificación, todos estos términos y condiciones. Ningún empleado de OIS tiene autoridad alguna para cambiar, modificar, ampliar o retirar cualquiera o todos estos términos y condiciones sin la aprobación previa por escrito de OIS.
              </p>
          </div>
          <div class="sub-title">4. El servicio de solicitud de visa</div>
          <div class="sub-section">
              <div class="sub-title pl-0">4.1 Alcance</div>
              <p class="para-section">
                  OIS es el socio subcontratado de la Alta Comisión de Nigeria en el Reino Unido. En esta capacidad, la OIS es responsable de programar citas, recibir solicitudes de visa para viajar a Nigeria y presentar solicitudes ante la Alta Comisión de Nigeria en Londres, recoger los pasaportes procesados y devolver los pasaportes a los solicitantes.
              </p>
              <div class="sub-title pl-0">4.2 Aceptación y rechazo de solicitudes</div>
              <p class="para-section">
                  La evaluación de las solicitudes de visa la lleva a cabo la Alta Comisión de Nigeria y la concesión o denegación de visas queda a su exclusivo criterio. La Alta Comisión de Nigeria se reserva el derecho de solicitar más documentación e información al solicitante y de rechazar cualquier solicitud de visa. El solicitante debe proporcionar dichos documentos e información adicionales si desea que se siga considerando su solicitud.
              </p>
              <div class="sub-title pl-0">4.3 Tarifas</div>
              <p class="para-section">
                  Las tarifas que usted debe pagar comprenden la tarifa administrativa de la Alta Comisión de Nigeria para la visa, que enviamos a la Alta Comisión y nuestras tarifas, que incluyen nuestra tarifa de servicio y otras tarifas, como cargos y tarifas bancarias.
              </p>
              <p class="para-section">
                  Las tarifas indicadas solo son válidas el día en que las cotizamos o proporcionamos. Si decide presentar su solicitud en una fecha posterior, las tarifas pueden cambiar.
              </p>
              <p class="para-section">
                  Todos los costos de devolución de pasaportes, visas y documentos están incluidos en la tarifa total final según la información proporcionada por usted y los métodos de entrega seleccionados por usted.
              </p>
              <p class="para-section">
                  Todas las tarifas deben recibirse en su totalidad según las opciones de pago disponibles.
              </p>
              <p class="para-section">
                  Excepto cuando esté cubierto en nuestra política de reembolso a continuación, todas las tarifas no son reembolsables, y todas las tarifas son pagaderas y podemos retenerlas cuando usted las pague, incluso si no presenta ni continúa con una solicitud de visa, y si una visa es o no. se concede.
              </p>
              <div class="sub-title pl-0">4.4 Obligación general</div>
              <p class="para-section">
                  La OIS procesará todas las solicitudes de visa con atención y habilidad razonables y de acuerdo con todos los procedimientos y pautas establecidos por la Alta Comisión de Nigeria. Sin embargo, si bien ponemos una atención razonable para verificar su formulario de solicitud en busca de errores obvios en el frente del formulario, no garantizamos detectar errores en su formulario y no nos comprometemos a verificar ninguna información que usted proporcione, de la cual usted es responsable. asegurar es exacto.
              </p>
              <div class="sub-title pl-0">4.5 Responsabilidad del solicitante</div>
              <p class="para-section">
                  Es responsabilidad de todos los solicitantes completar todos los formularios de solicitud con sinceridad, proporcionar información y documentación correcta y precisa, asegurarse de que tengan un pasaporte válido y, al recibir la visa, verificar la validez de la visa emitida para garantizar que cubra el período de estadía solicitado, el número de entradas requeridas y que sea válido para el propósito del viaje.
              </p>
              <div class="sub-title pl-0">4.6 Tiempos de procesamiento</div>
              <p class="para-section">
                  Los tiempos de procesamiento de las solicitudes de visas son sólo estimados. Estos se basan en información y experiencia de la Alta Comisión de Nigeria. El procesamiento de su solicitud está sujeto a los procedimientos y plazos de procesamiento de la Alta Comisión de Nigeria sobre los cuales la OIS no tiene control.
              </p>
              <div class="sub-title pl-0">4.7 Cambios en procedimientos y tarifas</div>
              <p class="para-section">
                  Los procedimientos y tarifas de la Alta Comisión de Nigeria para el procesamiento de visas y servicios relacionados están fuera del control de OIS y están sujetos a cambios sin previo aviso. OIS no acepta responsabilidad por ningún cambio en los procedimientos o tarifas y se reserva el derecho de traspasar cualquier aumento en las tarifas.


              </p>
              <div class="sub-title pl-0">4.8 Cancelación</div>
              <p class="para-section">
                  Si comienza un proceso de solicitud de visa, incluso enviando una solicitud en línea, pero no completa el proceso de solicitud de visa, incluso cuando no nos envía la documentación de su solicitud de visa o no asiste en persona a un centro de solicitud de visa para completar su visa. solicitud, dentro de los 12 meses posteriores al inicio del proceso de solicitud de visa, entonces su solicitud de visa se considerará caducada y podremos retener la tarifa de visa pagada por usted, así como todas las tarifas de servicio, tarifas bancarias y otras tarifas. No estaremos obligados a notificarle esto.
              </p>
              <p class="para-section">
                  Su derecho de arriba es el único derecho de cancelación que tiene. Una vez que nos haya enviado su solicitud, se considerará que ha aceptado que podemos comenzar inmediatamente a procesar su solicitud y brindarle cualquier servicio y, como resultado, no tendrá ningún derecho a cancelar según las Regulaciones de Protección al Consumidor (Venta a Distancia). 2000. Esto se debe a que, según el Reglamento 13(1)(a), usted pierde su derecho a cancelar si acepta que podemos comenzar a brindar los servicios dentro del período de cancelación.
              </p>
          </div>
          <div class="sub-title">5. Política de reembolso</div>
          <div class="sub-section">
              <div class="sub-title pl-0">5.1 Reembolso de la tarifa de solicitud de visa</div>
              <p class="para-section">
                  Si OIS incumple el contrato o es negligente en relación con cualquier solicitud de visa presentada, lo que resulta en la no concesión de la visa o la pérdida del pasaporte del solicitante con visas válidas, en cada caso, en el que el solicitante debe solicitar un nuevo pasaporte o no puede viajar. a Nigeria en los momentos indicados por el solicitante en su solicitud de visa, entonces OIS reembolsará al solicitante la tarifa de la visa, pero no ninguna tarifa de servicio, tarifa bancaria u otra tarifa.
              </p>
              <div class="sub-title pl-0">5.2 Pérdida o daño de pasaportes y otros documentos de viaje</div>
              <p class="para-section">
                  OIS toma todas las precauciones razonables al manejar el pasaporte y los documentos de un solicitante, y si debido a algún incumplimiento de contrato o negligencia por parte de OIS, el pasaporte o los documentos presentados por el solicitante se pierden o dañan más allá de sus condiciones de uso, entonces OIS pagará al solicitante el monto de las tarifas cobradas por el gobierno del país de origen del solicitante, para el reemplazo del pasaporte u otros documentos perdidos o dañados a través de su procedimiento normal de reemplazo, y OIS ayudará al solicitante con lo mismo dentro de su capacidad. La OIS realizará dichos pagos al solicitante previa presentación del recibo de pago emitido por el gobierno de su respectivo país de origen para el reemplazo de dicho pasaporte o documentos perdidos o dañados.
              </p>
          </div>
          <div class="sub-title">6. Descargo de responsabilidad</div>

          <div class="sub-section">
              <p class="para-section">
                  Excepto por el reembolso o los reembolsos de tarifas como se indica en la sección anterior, OIS excluye su responsabilidad en relación con cualquier solicitud de visa, incluida la responsabilidad en o bajo contrato, negligencia, agravio, estatuto o de otro modo, e incluida la responsabilidad por cualquier retraso o incumplimiento. de OIS en el manejo o procesamiento de solicitudes de visa, pérdida o demora de pasaportes y otros documentos, demoras que involucran a la Alta Comisión de Nigeria y rechazos de solicitudes de visa por cualquier motivo.
              </p>
              <div class="sub-title pl-0">Y para evitar dudas</div>
              <div class="sub-title pl-0">6.1 No hay responsabilidad por información incorrecta</div>
              <p class="para-section">
                  OIS no tendrá ninguna responsabilidad por la pérdida, retrasos o falta de emisión de cualquier solicitud que surja de o en conexión con (incluidos, entre otros) formularios de solicitud incompletos, formularios de solicitud completados incorrecta o falsamente y documentación de respaldo inexacta o incompleta.
              </p>
              <div class="sub-title pl-0">6.2 No somos responsables por eventos que no están bajo nuestro control</div>
              <p class="para-section">
                  No se considerará que OIS haya incumplido el contrato o haya sido negligente o responsable de cualquier otra manera por cualquier retraso o falla en cualquier solicitud o pérdida, daño o retraso de cualquier pasaporte u otros documentos debido a accidente, robo, calamidades naturales (acto de dios) o cualquier otra razón fuera del control de, y que no surja de un incumplimiento intencional de OIS, o por la pérdida o daño de cualquier pasaporte u otro documento después de haber sido entregado al solicitante.
              </p>
              <div class="sub-title pl-0">6.3 No hay responsabilidad por el servicio postal y de mensajería</div>
              <p class="para-section">
                  OIS no tendrá ninguna responsabilidad por retrasos, o por pérdida o daño a cualquier solicitud de visa, pasaporte u otros documentos, causados por, o que ocurran mientras cualquier solicitud, pasaporte o documento esté en posesión de, cualquier servicio postal o de mensajería de terceros. , incluido el transporte de solicitudes de visa, pasaporte u otros documentos entre la OIS y la Alta Comisión de Nigeria y cuando la OIS los devuelva al solicitante.
              </p>
              <div class="sub-title pl-0">6.4 No hay responsabilidad por la evaluación de las solicitudes de visa</div>
              <p class="para-section">
                  La OIS no participa en el proceso de evaluación de las solicitudes de visa, ni en su concesión o denegación, y no será responsable de ningún retraso por parte de la Alta Comisión de Nigeria en la evaluación, concesión o denegación de cualquier solicitud de visa.
              </p>
              <div class="sub-title pl-0">6.5 No hay responsabilidad por costos y gastos desperdiciados</div>
              <p class="para-section">
                  La OIS no tendrá ninguna responsabilidad ante ningún solicitante de visa, o cualquier otra persona que dependa o se beneficie de cualquier solicitud de visa, por cualquier compromiso, costo o gasto incurrido al depender o anticipar la recepción de una visa nigeriana, ya sea dentro de un plazo particular o en absoluto. , incluidos, entre otros, viajes aéreos, hoteles y otros arreglos de viaje y alojamiento, y cualquier otro arreglo realizado.
              </p>
              <p class="para-section">
                  OIS recomienda que no compre boletos ni haga reservas que no puedan cancelarse antes de la emisión de una visa, excepto cuando sea un requisito específico establecido como parte de la solicitud de visa, en cuyo caso se deben obtener boletos abiertos.
              </p>
              <div class="sub-title pl-0">6.6 Exclusión general de pérdidas y daños</div>
              <p class="para-section">
                  OIS no tendrá ninguna responsabilidad (incluso por contrato o por negligencia) ante ningún solicitante de visa, o cualquier otra persona que dependa o se beneficie de cualquier solicitud de visa, por cualquier daño directo, indirecto, punitivo, incidental, especial, consecuente o cualquier daño. incluso cuando sea causado por retraso, extravío, pérdida o daño de solicitudes de visa, pasaportes y otros documentos, distintos de los establecidos en la Sección 5 anterior.
              </p>
              <p class="para-section">
                  OIS no tendrá ninguna responsabilidad (ni siquiera contractual o por negligencia) ante ningún solicitante de visa o cualquier otra persona que dependa o se beneficie de cualquier solicitud de visa por cualquier pérdida de ganancias, ingresos o contrato, o negocio, profesión u otra ocupación, incluyendo cuando sea causado por retraso, extravío, pérdida o daño de solicitudes de visa, pasaportes y otros documentos.
              </p>
          </div>
          <div class="sub-title">7. generales</div>
          <div class="sub-section">
              <div class="sub-title pl-0">7.1 Derechos de terceros</div>
              <p class="para-section">
                  Nada de lo dispuesto en estos Términos y condiciones beneficiará ni será ejecutable por ninguna persona que no sea el solicitante de la visa, y la Ley de Contratos (Derechos de Terceros) de 1999 no se aplicará.
              </p>
              <div class="sub-title pl-0">7.2 Cambios a estos términos</div>
              <p class="para-section">
                  OIS, a su entera discreción, puede cambiar, modificar, cancelar o retirar cualquiera o todos estos términos y condiciones en cualquier momento sin previo aviso.
              </p>
              <div class="sub-title pl-0">7.3 Ley aplicable</div>
              <p class="para-section">
                  Estos términos y condiciones y cualquier solicitud de visa se regirán e interpretarán de acuerdo con las leyes de los países en los que tenemos presencia. Cualquier reclamo o disputa que surja en relación con los servicios brindados por OIS al solicitante estará sujeto a la Jurisdicción exclusiva de los tribunales del país.
              </p>
          </div>
          <div class="sub-title">8.Quejas</div>
          <div class="sub-section">
              <p class="para-section">
                  Dirija cualquier queja al departamento de atención al cliente a través del correo electrónico a
              </p>
              <p class="para-section">
                  info@oisservices.com
              </p>
          </div>
        </div>',
      'order_num' => 1,
      'lang' => 'es',
    ]);
    Content::create([
      'title' => 'PRIVACY POLICY',
      'content' => '
        <div class="main-title">Política de privacidad</div>
        <div class="sub-body">
          <div class="sub-title">1. Introducción</div>
          <div class="sub-section">
            <p class="para-section">
              En OIS, estamos comprometidos a proteger la privacidad y confidencialidad de los datos personales de nuestros clientes. Esta Política de Privacidad describe cómo usamos, divulgamos y protegemos los datos personales que obtenemos de las personas que utilizan nuestros servicios. Cumplimos con las leyes de protección de datos aplicables, incluido el Reglamento General de Protección de Datos (GDPR), y nos esforzamos por garantizar los más altos estándares de privacidad y seguridad de los datos.
            </p>
          </div>
          <div class="sub-title">2. Recopilación y uso de datos</div>
          <div class="sub-section">
            <div class="sub-title pl-0">2.1 Recopilación de datos personales</div>
            <p class="para-section">
              Recopilamos datos personales de personas de diversas maneras, incluso cuando crean una cuenta, realizan un pago, se comunican con nosotros, completan encuestas, interactúan con nuestros sitios web o aplicaciones, o utilizan nuestros servicios. Los tipos de datos personales que podemos recopilar incluyen, entre otros:
            </p>
            <ul class="para-list">
              <li>Nombre, dirección e información de contacto</li>
              <li>Detalles del pasaporte y la visa</li>
              <li>Datos biométricos</li>
              <li>Números de verificación bancaria</li>
              <li>Detalles de la transacción de pago</li>
              <li>Información sanitaria (para servicios de salud electrónica)</li>
              <li>Interacciones con nuestros servicios y sitios web</li>
              <li>Houston (9894 Bissonnet Street, Suite 745 Houston TX 77036 EE. UU.)</li>
              <li>Datos laborales o profesionales (para fines de contratación)</li>
            </ul>
            <div class="sub-title pl-0">2.2 Finalidad del procesamiento de datos</div>
            <p class="para-section">
              Procesamos datos personales para las siguientes finalidades:
            </p>
            <ul class="para-list">
              <li>
                Comunicarse con personas y cumplir con sus solicitudes de servicio u órdenes de compra.
              </li>
              <li>Para brindar atención al cliente y responder a consultas.</li>
              <li>
                Mejorar y personalizar la experiencia de las personas con nuestros servicios.
              </li>
              <li>Para procesar pagos y verificar transacciones financieras.</li>
              <li>
                Para cumplir con las obligaciones legales, incluidas las obligaciones de informar a las autoridades pertinentes.
              </li>
              <li>
                Para gestionar nuestros sistemas y procesos, incluido el análisis de datos, la auditoría y la resolución de problemas.
              </li>
              <li>
                Realizar investigaciones y ejercer derechos legales, incluida la prevención y detección de fraude.
              </li>
              <li>Desarrollar y mejorar nuestros productos y servicios.</li>
            </ul>
            <div class="sub-title pl-0">2.3 Base legal para el procesamiento</div>
            <p class="para-section">
              Procesamos datos personales en base a una o más de las siguientes bases legales:
            </p>
            <ul class="para-list">
              <li>
                La necesidad del tratamiento para la ejecución de un contrato o para realizar actuaciones precontractuales a petición del interesado.
              </li>
              <li>Cumplimiento de obligaciones legales a las que estamos sujetos.</li>
              <li>
                Consentimiento prestado por personas físicas para actividades de tratamiento específicas.
              </li>
              <li>
                Intereses legítimos perseguidos por OIS o un tercero, siempre que dichos intereses no sean anulados por los derechos e intereses del individuo.
              </li>
            </ul>
          </div>
          <div class="sub-title">3. Intercambio y divulgación de datos</div>
          <div class="sub-section">
            <div class="sub-title pl-0">3.1 Proveedores de servicios externos</div>
            <p class="para-section">
              Podemos compartir datos personales con proveedores de servicios externos confiables que nos ayudan a brindar nuestros servicios y cumplir con nuestras obligaciones. Estos proveedores de servicios están obligados contractualmente a procesar datos personales únicamente en nuestro nombre y de acuerdo con nuestras instrucciones.
            </p>
            <div class="sub-title pl-0">3.2 Transferencias comerciales</div>
            <p class="para-section">
              En caso de fusión, adquisición o venta de todos o parte de nuestros activos, los datos personales pueden transferirse al tercero correspondiente como parte de la transacción. Tomaremos medidas razonables para garantizar la seguridad y confidencialidad de los datos personales durante dichas transferencias.
            </p>
            <div class="sub-title pl-0">3.3 Requisitos legales y de cumplimiento</div>
            <p class="para-section">
              Podemos divulgar datos personales si así lo exige la ley, una orden judicial o una autoridad gubernamental. También podemos compartir datos personales para proteger nuestros derechos, privacidad, seguridad o propiedad, o los de otros.
            </p>
          </div>
          <div class="sub-title">4. Retención de datos</div>
          <div class="sub-section">
            <p class="para-section">
              Conservamos datos personales durante el período mínimo necesario para cumplir los propósitos descritos en esta Política de Privacidad, a menos que la ley requiera o permita un período de retención más largo. Los criterios utilizados para determinar el período de retención adecuado incluyen la naturaleza de los datos personales, los fines para los que fueron recopilados y los requisitos legales y reglamentarios.
            </p>
          </div>
          <div class="sub-title">5. Seguridad de datos</div>
          <div class="sub-section">
            <p class="para-section">
              Implementamos medidas técnicas y organizativas apropiadas para proteger los datos personales contra el acceso no autorizado, la alteración, la divulgación o la destrucción. Estas medidas incluyen, entre otras, cifrado, controles de acceso, evaluaciones periódicas de seguridad y capacitación del personal sobre protección de datos.
            </p>
          </div>
          <div class="sub-title">6. Derechos individuales</div>
          <div class="sub-section">
            <p class="para-section">
              Los individuos tienen ciertos derechos con respecto a sus datos personales. Sujeto a la ley aplicable, las personas tienen derecho a:
            </p>
            <ul class="para-list">
              <li>Acceder a sus datos personales y solicitar una copia de los mismos.</li>
              <li>Rectificar los datos personales inexactos o incompletos.</li>
              <li>Borrar datos personales en determinadas circunstancias.</li>
              <li>Restringir u oponerse al tratamiento de datos personales.</li>
              <li>
                Portabilidad de datos (recibir datos personales en un formato estructurado, de uso común y legible por máquina).
              </li>
              <li>Retirar el consentimiento (si el procesamiento se basa en el consentimiento).</li>
            </ul>
            <p class="para-section">
              Para ejercer estos derechos o presentar una queja relacionada con la privacidad, las personas pueden comunicarse con nosotros utilizando la información proporcionada en la Sección 8.
            </p>
          </div>
          <div class="sub-title">7. Comunicaciones de marketing y política de cookies</div>
          <div class="sub-section">
            <p class="para-section">
              Podemos enviar comunicaciones de marketing a personas que hayan proporcionado su consentimiento. Las personas pueden optar por no recibir dichas comunicaciones en cualquier momento siguiendo las instrucciones proporcionadas en la comunicación o comunicándose con nosotros.
            </p>
            <p class="para-section">
              Nuestra Política de cookies describe el uso de cookies y tecnologías similares en nuestros sitios web y proporciona información sobre cómo administrar las preferencias de cookies.
            </p>
          </div>
          <div class="sub-title">8. Transferencias internacionales de datos</div>
          <div class="sub-section">
            <p class="para-section">
              Como organización global, podemos transferir datos personales a países fuera del Espacio Económico Europeo (EEE) u otras regiones con diferentes leyes de protección de datos. En tales casos, nos aseguraremos de que existan medidas de seguridad adecuadas para proteger los datos personales, como el uso de cláusulas contractuales estándar aprobadas por la Comisión Europea o la certificación del Escudo de Privacidad de los destinatarios (cuando corresponda).
            </p>
          </div>
          <div class="sub-title">9. Privacidad de los niños</div>
            <div class="sub-section">
              <p class="para-section">
                Nuestros servicios no están dirigidos a personas menores de 16 años. No recopilamos ni solicitamos intencionadamente datos personales de niños. Si nos damos cuenta de que hemos recopilado datos personales de un niño sin el consentimiento parental verificable, tomaremos medidas para eliminar esa información.
              </p>
            </div>
            <div class="sub-title">10. Actualizaciones de la política de privacidad</div>
            <div class="sub-section">
              <p class="para-section">
                Podemos actualizar esta Política de Privacidad de vez en cuando para reflejar cambios en nuestras prácticas de procesamiento de datos u obligaciones legales. Alentamos a las personas a revisar esta Política de privacidad periódicamente para conocer las actualizaciones. La Política de Privacidad revisada entrará en vigor a partir de la fecha de su publicación en nuestro sitio web.
              </p>
            </div>
            <div class="sub-title">11. Información de contacto</div>
            <div class="sub-section">
              <p class="para-section">
                Para cualquier inquietud, pregunta, solicitud o queja relacionada con la privacidad, comuníquese con nuestro Oficial de Protección de Datos en:
              </p>
              <p class="para-section">dataprotection@oisservices.com</p>
              <p class="para-section">
                Nos tomamos en serio los asuntos de privacidad y responderemos con prontitud para abordar cualquier inquietud o consulta. Tenga en cuenta que esta Política de Privacidad se proporciona en inglés para facilitar su comprensión. En caso de conflicto entre la versión en inglés y una versión traducida, prevalecerá la versión en inglés.
              </p>
            </div>
          </div>',
      'order_num' => 1,
      'lang' => 'es',
    ]);
    Content::create([
      'title' => 'DATA PROJECT',
      'content' => '
        <div class="main-title">
          GDPR y política de protección de datos relacionada
        </div>
        <div class="sub-body">
          <div class="sub-title">1. Introducción</div>
          <div class="sub-section">
            <p class="para-section">
              En sus operaciones comerciales diarias, Online Integrated Solutions (OIS) utiliza una variedad de datos sobre personas identificables, incluidos datos sobre:
            </p>
            <ul class="para-list">
              <li>
                Empleados actuales, pasados y potenciales
              </li>
              <li>
                Clientes
              </li>
              <li>
                Usuarios de sus sitios web
              </li>
              <li>
                Suscriptores
              </li>
              <li>
                Otras partes interesadas
              </li>
            </ul>
            <p class="para-section">
              Al recopilar y utilizar estos datos, la organización está sujeta a una variedad de leyes que controlan cómo se pueden llevar a cabo dichas actividades y las salvaguardias que se deben implementar para protegerlas.
            </p>
            <p class="para-section">
              El propósito de esta política es establecer la legislación pertinente y describir las medidas que la OIS está tomando para garantizar su cumplimiento.
            </p>
            <p class="para-section">
              Este control se aplica a todos los sistemas, personas y procesos que constituyen los sistemas de información de la organización, incluidos los miembros de la junta directiva, directores, empleados, proveedores y otros terceros que tienen acceso a los sistemas OIS.
            </p>
            <p class="para-section">
              Las siguientes políticas y procedimientos son relevantes para este documento:
            </p>
            <ul class="para-list">
              <li>
                Proceso de evaluación del impacto de la protección de datos
              </li>
              <li>
                Procedimiento de análisis de datos personales
              </li>
              <li>
                Procedimiento de evaluación del interés legítimo
              </li>
              <li>
                Procedimiento de respuesta a incidentes de seguridad de la información
              </li>
              <li>
                Funciones y responsabilidades del RGPD
              </li>
              <li>
                Otras partes interesadas
              </li>
            </ul>
          </div>
          <div class="sub-title">2. Uso de criptografía</div>
          <div class="sub-section">
            <p class="para-section">
              Cuando correspondía a la clasificación de la información y el medio de almacenamiento, se utilizaron técnicas criptográficas para garantizar la confidencialidad y la integridad de los registros.
            </p>
            <p class="para-section">
              Se ha tenido absoluto cuidado para garantizar que las claves de cifrado utilizadas para cifrar registros se almacenen de forma segura durante la vida útil de los registros relevantes y cumplan con la política de criptografía de la organización.
            </p>
            <div class="sub-title pl-0">2.1 Reglamento general de protección de datos de la UE - RGPD</div>
            <p class="para-section">
              El Reglamento General de Protección de Datos de 2016 (GDPR) es una de las leyes más importantes que afecta la forma en que OIS lleva a cabo sus actividades de procesamiento de información. Se aplican multas importantes si se considera que se ha producido una infracción del RGPD, que está diseñada para proteger los datos personales de los ciudadanos de la Unión Europea. Es política de OIS garantizar que nuestro cumplimiento del RGPD y otras leyes relevantes sea claro y demostrable en todo momento.
            </p>
            <div class="sub-title pl-0">2.2 Definiciones</div>
            <p class="para-section">
              Hay un total de 26 definiciones enumeradas en el RGPD y no es apropiado reproducirlas todas aquí. Sin embargo, las definiciones más fundamentales con respecto a esta política son las siguientes:
            </p>
            <p class="para-section">
              Los datos personales se definen como:
            </p>
            <p class="para-section">
              cualquier información relativa a una persona física identificada o identificable (\'titular de los datos\'); Una persona física identificable es aquella que puede identificarse, directa o indirectamente, en particular mediante un identificador como un nombre, un número de identificación, datos de ubicación, un identificador en línea o uno o más factores específicos del estado físico, fisiológico, identidad genética, mental, económica, cultural o social de esa persona física;
            </p>
            <p class="para-section">
              \'procesamiento\' significa
            </p>
            <p class="para-section">
              cualquier operación o conjunto de operaciones que se realice sobre datos personales o conjuntos de datos personales, ya sea por medios automatizados o no, tales como recopilación, registro, organización, estructuración, almacenamiento, adaptación o alteración, recuperación, consulta, uso, divulgación por transmisión, difusión o puesta a disposición de otro modo, alineación o combinación, restricción, borrado o destrucción;
            </p>
            <p class="para-section">
              \'controlador\' significa
            </p>
            <p class="para-section">
              la persona física o jurídica, autoridad pública, agencia u otro organismo que, solo o junto con otros, determine los fines y medios del procesamiento de datos personales; cuando los fines y medios de dicho procesamiento estén determinados por la legislación de la Unión o de los Estados miembros, el responsable del tratamiento o los criterios específicos para su designación podrán estar previstos por la legislación de la Unión o de los Estados miembros;
            </p>
            <div class="sub-title pl-0">2.3 Principios relacionados con el procesamiento de datos personales</div>
            <p class="para-section">
              Hay una serie de principios fundamentales en los que se basa el RGPD.<br>
              Estos son los siguientes:
            </p>
            <p class="para-section">
              1. Los datos personales serán:
            </p>
            <p class="para-section">
              (a) procesado de manera legal, justa y transparente en relación con el interesado (\'licitud, equidad y transparencia\');
            </p>
            <p class="para-section">
              (b) recopilados para fines específicos, explícitos y legítimos y no procesados posteriormente de manera incompatible con esos fines; el procesamiento posterior con fines de archivo en interés público, fines de investigación científica o histórica o fines estadísticos, de conformidad con el artículo 89, apartado 1, no se considerará incompatible con los fines iniciales ("limitación de fines");
            </p>
            <p class="para-section">
              (c) adecuados, pertinentes y limitados a lo necesario en relación con los fines para los que se procesan (\'minimización de datos\');
            </p>
            <p class="para-section">
              d) ser exactos y, cuando sea necesario, actualizados; se deben tomar todas las medidas razonables para garantizar que los datos personales que sean inexactos, teniendo en cuenta los fines para los que se procesan, se eliminen o rectifiquen sin demora (\'exactitud\');
            </p>
            <p class="para-section">
              (e) conservarse en una forma que permita la identificación de los interesados durante el tiempo necesario para los fines para los cuales se procesan los datos personales; Los datos personales podrán almacenarse durante períodos más largos en la medida en que los datos personales se procesen únicamente con fines de archivo en interés público, con fines de investigación científica o histórica o con fines estadísticos de conformidad con el artículo 89, apartado 1, sujeto a la implementación de las medidas técnicas y organizativas apropiadas. medidas requeridas por este Reglamento para salvaguardar los derechos y libertades del interesado (\'limitación de almacenamiento\');
            </p>
            <p class="para-section">
              (f) procesado de una manera que garantice la seguridad adecuada de los datos personales, incluida la protección contra el procesamiento no autorizado o ilegal y contra pérdida, destrucción o daño accidental, utilizando medidas técnicas u organizativas apropiadas (\'integridad y confidencialidad\').
            </p>
            <p class="para-section">
              (f) procesado de una manera que garantice la seguridad adecuada de los datos personales, incluida la protección contra el procesamiento no autorizado o ilegal y contra pérdida, destrucción o daño accidental, utilizando medidas técnicas u organizativas apropiadas (\'integridad y confidencialidad\').
            </p>
            <p class="para-section">
              OIS se asegurará de cumplir con todos estos principios tanto en el procesamiento que lleva a cabo actualmente como como parte de la introducción de nuevos métodos de procesamiento, como nuevos sistemas informáticos.
            </p>
            <div class="sub-title pl-0">2.4 Derechos del individuo</div>
            <p class="para-section">
              El interesado también tiene derechos en virtud del RGPD. Estos consisten en:
            </p>
            <p class="para-section">
              El derecho a ser informado<br>El derecho de acceso<br>El derecho de rectificación<br>El derecho de supresión<br>El derecho a restringir el procesamiento<br>El derecho a la portabilidad de los datos<br>El derecho a oponerse<br> br>Derechos en relación con la toma de decisiones automatizada y la elaboración de perfiles</p>
            <p class="para-section">
              Cada uno de estos derechos está respaldado por procedimientos adecuados dentro de OIS que permiten tomar las medidas necesarias dentro de los plazos establecidos en el RGPD.
            </p>
            <p class="para-section">
              Estos plazos se muestran en la Tabla 1.
            </p>
            <table>
              <thead>
                <tr>
                  <th>Solicitud del interesado</th>
                  <th>Escala de tiempo</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>El derecho a ser informado</td>
                  <td>Cuándo se recopilan los datos (si los proporciona el interesado) o dentro de un mes (si no los proporciona el interesado)</td>
                </tr>
                <tr>
                  <td>El derecho de acceso</td>
                  <td>Un mes</td>
                </tr>
                <tr>
                  <td>Derecho de rectificación</td>
                  <td>Un mes</td>
                </tr>
                <tr>
                  <td>El derecho de supresión</td>
                  <td>Sin demoras indebidas</td>
                </tr>
                <tr>
                  <td>Derecho a restringir el procesamiento</td>
                  <td>Sin demoras indebidas</td>
                </tr>
                <tr>
                  <td>Derecho a la portabilidad de los datos</td>
                  <td>Un mes</td>
                </tr>
                <tr>
                  <td>Derecho de oposición</td>
                  <td>Al recibir la objeción</td>
                </tr>
              </tbody>
            </table>
            <p class="para-section">
              Tabla 1 - Plazos para las solicitudes de los interesados
            </p>
            <div class="sub-title pl-0">2.5 Legalidad del procesamiento</div>
            <p class="para-section">
              Existen seis formas alternativas de establecer la legalidad de un caso específico de procesamiento de datos personales según el RGPD. Es política de la OIS identificar la base adecuada para el procesamiento y documentarlo, de conformidad con el Reglamento. Las opciones se describen brevemente en las siguientes secciones.
            </p>
            <div class="sub-title pl-0">2.5.1 Consentimiento</div>
            <p class="para-section">
              A menos que sea necesario por un motivo permitido en el GDPR, OIS siempre obtendrá el consentimiento explícito de un interesado para recopilar y procesar sus datos. En el caso de niños menores de 16 años (es posible que se permita una edad inferior en determinados estados miembros de la UE), se obtendrá el consentimiento de los padres. Se proporcionará información transparente sobre nuestro uso de sus datos personales a los interesados en el momento en que se obtenga el consentimiento y se les expliquen sus derechos con respecto a sus datos, como el derecho a retirar el consentimiento. Esta información se proporcionará de forma accesible, escrita en un lenguaje claro y de forma gratuita. Si los datos personales no se obtienen directamente del interesado, esta información se proporcionará al interesado en un plazo razonable tras la obtención de los datos y, definitivamente, en el plazo de un mes.
            </p>
            <div class="sub-title pl-0">2.5.2 Ejecución de un contrato</div>
            <p class="para-section">
              Cuando los datos personales recopilados y procesados sean necesarios para cumplir un contrato con el interesado, no se requiere consentimiento explícito. Este será a menudo el caso cuando el contrato no pueda completarse sin los datos personales en cuestión, p. No se puede realizar una entrega sin una dirección a la que realizar la entrega.
            </p>
            <div class="sub-title pl-0">2.5.3 Obligación legal</div>
            <p class="para-section">
              Si es necesario recopilar y procesar datos personales para cumplir con la ley, no se requiere consentimiento explícito. Este puede ser el caso de algunos datos relacionados con el empleo y la tributación, por ejemplo, y de muchas áreas abordadas por el sector público.
            </p>
            <div class="sub-title pl-0">2.5.4 Intereses vitales del interesado</div>
            <p class="para-section">
              En el caso de que los datos personales sean necesarios para proteger los intereses vitales del interesado o de otra persona física, estos podrán utilizarse como base legal del procesamiento. OIS conservará evidencia razonable y documentada de que este es el caso, siempre que este motivo se utilice como base legal para el procesamiento de datos personales. Por ejemplo, esto se puede utilizar en aspectos de la atención social, particularmente en el sector público.
            </p>
            <div class="sub-title pl-0">2.5.5 Tarea realizada en interés público</div>
            <p class="para-section">
              Cuando OIS necesite realizar una tarea que considere de interés público o como parte de un deber oficial, no se solicitará el consentimiento del interesado. La evaluación del interés público o del deber oficial se documentará y se pondrá a disposición como prueba cuando sea necesario.
            </p>
            <div class="sub-title pl-0">2.5.6 Intereses legítimos</div>
            <p class="para-section">
              Si el procesamiento de datos personales específicos responde a los intereses legítimos de OIS y se considera que no afecta los derechos y libertades del interesado de manera significativa, entonces esto puede definirse como la razón legal para el procesamiento. Una vez más, se documentará el razonamiento detrás de esta opinión.
            </p>
            <div class="sub-title pl-0">2.6 Privacidad por diseño</div>
            <p class="para-section">
              La OIS ha adoptado el principio de privacidad desde el diseño y garantizará que la definición y planificación de todos los sistemas nuevos o significativamente modificados que recopilen o procesen datos personales estén sujetos a la debida consideración de las cuestiones de privacidad, incluida la finalización de uno o más impactos en la protección de datos. evaluaciones.
            </p>
            <p class="para-section">
              La evaluación de impacto de la protección de datos incluirá:
            </p>
            <p class="para-section">
              Consideración de cómo se procesarán los datos personales y con qué fines<br>Evaluación de si el procesamiento de datos personales propuesto es necesario y proporcionado a los fines
            </p>
            <p class="para-section">
              Evaluación de los riesgos para las personas al procesar los datos personales<br>Qué controles son necesarios para abordar los riesgos identificados y demostrar el cumplimiento de la legislación<br>Se considerará el uso de técnicas como la minimización de datos y la seudonimización cuando corresponda y sea apropiado.
            </p>
            <div class="sub-title pl-0">2.7 Contratos que implican el procesamiento de datos personales</div>
            <p class="para-section">
              OIS se asegurará de que todas las relaciones que establezca y que involucren el procesamiento de datos personales estén sujetas a un contrato documentado que incluya la información y los términos específicos requeridos por el RGPD. Para obtener más información, consulte el RGPD Responsable-Procesador
              Política de acuerdo
            </p>
            <div class="sub-title pl-0">2.8 Transferencias Internacionales de Datos Personales</div>
            <p class="para-section">
              Las transferencias de datos personales fuera de la Unión Europea se revisarán cuidadosamente antes de que se realicen para garantizar que se ajusten a los límites impuestos por el RGPD. Esto depende en parte del juicio de la Comisión Europea en cuanto a la idoneidad de las salvaguardias para los datos personales aplicables en el país receptor y esto puede cambiar con el tiempo.<br>Las transferencias internacionales de datos dentro del grupo estarán sujetas a los acuerdos legalmente vinculantes mencionados se denominan Normas Corporativas Vinculantes (BCR, por sus siglas en inglés) que proporcionan derechos exigibles a los interesados.
            </p>
            <div class="sub-title pl-0">2.9 Delegado de Protección de Datos</div>
            <p class="para-section">
              El RGPD exige una función definida de Delegado de Protección de Datos (DPO) si una organización es una autoridad pública, si realiza un seguimiento a gran escala o si procesa tipos de datos especialmente sensibles a gran escala. Se requiere que el DPO tenga un nivel adecuado de conocimientos y puede ser un recurso interno o subcontratado a un proveedor de servicios adecuado.
            </p>
            <p class="para-section">
              Con base en estos criterios, OIS nombró Delegado de Protección de Datos, a continuación se detallan los datos de contacto:
            </p>
            <p class="para-section">
              Nombre: Archibald Coker<br>Email: acoker@oisservices.com<br>Contacto: +44 (0) 207 832 0001
            </p>
            <div class="sub-title pl-0">2.10 Notificación de infracción</div>
            <p class="para-section">
              Es política de OIS ser justo y proporcionado al considerar las acciones a tomar para informar a las partes afectadas sobre violaciones de datos personales. De conformidad con el RGPD, cuando se sepa que se ha producido una infracción que pueda suponer un riesgo para los derechos y libertades de las personas, se informará a la autoridad supervisora pertinente en un plazo de 72 horas. Esto se gestionará de acuerdo con nuestro Procedimiento de respuesta a incidentes de seguridad de la información, que establece el proceso general de manejo de incidentes de seguridad de la información.
            </p>
            <p class="para-section">
              Según el RGPD, la DPA correspondiente tiene autoridad para imponer una serie de multas de hasta el cuatro por ciento de la facturación mundial anual o veinte millones de euros, lo que sea mayor, por infracciones de las regulaciones.
            </p>
            <div class="sub-title pl-0">2.11 Abordar el cumplimiento del RGPD</div>
            <p class="para-section">
              Se llevan a cabo las siguientes acciones para garantizar que OIS cumpla en todo momento con el principio de responsabilidad del GDPR:
            </p>
            <ul class="para-list">
              <li>
                La base legal para el procesamiento de datos personales es clara e inequívoca.
              </li>
              <li>
                Se nombra un Delegado de Protección de Datos con responsabilidad específica sobre la protección de datos en la organización (si es necesario)
              </li>
              <li>
                Todo el personal involucrado en el manejo de datos personales comprende sus responsabilidades de seguir buenas prácticas de protección de datos.
              </li>
              <li>
                Se ha impartido formación en protección de datos a todo el personal
              </li>
              <li>
                Se siguen las reglas relativas al consentimiento.
              </li>
              <li>
                Se encuentran disponibles rutas para los interesados que deseen ejercer sus derechos en materia de datos personales y dichas consultas se atienden de manera efectiva.
              </li>
              <li>
                Se realizan revisiones periódicas de los procedimientos que involucran datos personales.
              </li>
              <li>
                La privacidad por diseño se adopta para todos los sistemas y procesos nuevos o modificados.
              </li>
            </ul>
            <p class="para-section">
              Se registra la siguiente documentación de las actividades de tratamiento:
            </p>
            <ul class="para-list">
              <li>
                Nombre de la organización y detalles relevantes.
              </li>
              <li>
                Finalidades del tratamiento de datos personales
              </li>
              <li>
                Categorías de personas y datos personales tratados
              </li>
              <li>
                Categorías de destinatarios de datos personales
              </li>
              <li>
                Acuerdos y mecanismos para transferencias de datos personales a países no pertenecientes a la UE, incluidos detalles de los controles establecidos.
              </li>
              <li>
                Calendarios de conservación de datos personales
              </li>
              <li>
                Controles técnicos y organizativos pertinentes establecidos
              </li>
            </ul>
            <p class="para-section">
              Estas acciones se revisan periódicamente como parte del proceso de gestión en materia de protección de datos.
            </p>
          </div>
          <div class="sub-title">Protección de datos relacionados</div>
          <div class="sub-section">
            <div class="sub-title pl-0">Principios de protección de datos</div>
            <p class="para-section">
              Existen ocho principios de protección de datos que garantizan que las organizaciones recopilen, almacenen y procesen datos personales de una manera que proteja la confidencialidad de los clientes. Estos principios se establecen en el anexo 1 de la Ley y son los siguientes:
            </p>
            <p class="para-section">
              i. Los datos deben manejarse de manera justa y legal<br>Tenemos motivos legítimos para obtener, almacenar y procesar los datos de los clientes, es decir, para ayudarlo a obtener un pasaporte, visa y para otros fines autorizados por la ley y los contratos entre nosotros y nuestros clientes. . Nos aseguramos de que sus datos no serán utilizados para nada ilícito.
            </p>
            <p class="para-section">
              ii. Los datos personales se obtendrán únicamente para uno o más propósitos específicos y legales, y no se procesarán posteriormente de ninguna manera incompatible con ese propósito o esos propósitos.<br>Debido a la naturaleza de nuestro trabajo, el propósito para el cual usted los proporciona. nosotros sus datos personales son obvios para usted y para nosotros. No utilizaremos sus datos para ningún otro fin incompatible con el fin original a menos que primero nos dé su consentimiento o estemos obligados por ley a hacerlo.
            </p>
            <p class="para-section">
              III. Los datos personales serán adecuados, relevantes y no excesivos en relación con el propósito o propósitos para los cuales son procesados.<br>Solo tomaremos información que consideremos relevante y suficiente para cumplir nuestro contrato con usted.
            </p>
            <p class="para-section">
              IV. Los datos personales serán exactos y, cuando sea necesario, se mantendrán actualizados.<br>Nos aseguramos de que los datos personales que nos proporcione sean correctos y no engañosos. Esto lo logramos brindándote la oportunidad de confirmar la información que nos brindas y también solicitando prueba documental cuando sea necesario. Si hay cambios relevantes en sus datos personales, por ejemplo, cambio de nombre o nacionalidad, háganoslo saber lo antes posible para que podamos actualizar su registro.
            </p>
            <p class="para-section">
              v. Los datos personales procesados para cualquier propósito o propósitos no se conservarán por más tiempo del necesario para ese propósito o esos propósitos.<br>De vez en cuando, revisaremos nuestra base de datos para ver si algunos datos personales aún son necesarios. para ser almacenado por nosotros. Si se ha logrado la finalidad para la que fueron almacenados y consideramos que ya no es necesario seguir almacenándolos, los eliminaremos de forma segura.
            </p>
            <p class="para-section">
              vi. Los datos personales se procesarán de acuerdo con los derechos de los interesados en virtud de esta Ley.<br>Procesaremos sus datos personales de tal manera que le permita realizar cualquiera de las siguientes acciones:
            </p>
            <ul class="para-list-digit">
              <li>
                un derecho de acceso a una copia de sus datos personales, conocido popularmente como \'solicitud de acceso del sujeto\'. La tarifa actual es de £10 por solicitud estándar y nuestro objetivo es proporcionarla dentro de los 14 días. La solicitud de acceso al sujeto debe realizarse a info@oisservices.com por correo electrónico o por correo postal The Head of Centre, OIS Services, 56-57 Fleet street, EC4Y 1JU, Londres </li>
              <li>
                el derecho a oponerse al procesamiento de sus datos personales de una manera que pueda causarle daño o angustia;
              </li>
              <li>
                un derecho a impedir el procesamiento de sus datos personales de una manera que sea incompatible con el propósito o propósitos originales;
              </li>
              <li>
                derecho a oponerse a que las decisiones se tomen por medios automatizados;
              </li>
              <li>
                un derecho, cuando corresponda, a que se rectifiquen, bloqueen o eliminen los datos personales inexactos, y
              </li>
              <li>
                derecho a reclamar una indemnización por los daños causados por el incumplimiento de la ley.
              </li>
            </ul>
            <p class="para-section">
              vii. Seguridad de los datos personales<br>Sus datos personales se guardan en un entorno muy seguro tanto física como técnicamente. Las áreas donde se guardan datos personales están fuera del alcance de todas las personas no autorizadas. El acceso a estas partes de las instalaciones sólo se puede obtener mediante una llave electrónica emitida únicamente a personas autorizadas. Sólo personas autorizadas pueden acceder a sus datos personales en el sistema. Sólo dichas personas autorizadas pueden alterar, revelar o destruir sus datos personales. Además, dichas personas autorizadas sólo pueden llevar a cabo cualquiera de esas funciones en el ejercicio de sus funciones legales. Por lo tanto, las posibilidades de que sus datos personales sean procesados ilegalmente o dañados, destruidos o perdidos accidentalmente son mínimas.
              Además, nuestra política es garantizar que:
            </p>
            <ul class="para-list-digit">
              <li>
                cada empleado autorizado que tiene acceso a datos personales tiene su propia contraseña que no se comparte con otras personas,
              </li>
              <li>
                Se utilizan software de seguridad y firewall aprobados para proteger nuestros datos.
              </li>
              <li>
                los datos personales impresos que no se utilizan se trituran,
              </li>
              <li>
                No recomendamos que se almacenen datos personales en computadoras portátiles y otros dispositivos y medios móviles, pero si lo hacen, deben guardarse bajo llave y no sacarse de la oficina.
              </li>
            </ul>
            <p class="para-section">
              viii. Transferencia de datos personales fuera del Espacio Económico Europeo<br>Sus datos personales no se transferirán a un país o territorio fuera del Espacio Económico Europeo a menos que ese país o territorio garantice un nivel adecuado de protección de los derechos y libertades de los interesados en relación al tratamiento de datos personales. Sólo hay unos pocos países fuera del EEE que han sido aceptados por tener niveles adecuados de protección para el procesamiento de datos personales comparables a los países del EEE. Cuando transferimos datos personales a los EE. UU., nos aseguramos de que el destinatario sea signatario del Programa de puerto seguro del Departamento de Comercio de los EE. UU. La Comisión Europea reconoce que este esquema proporciona una protección adecuada a los interesados. En relación con otros países fuera del EEE que no han sido aceptados por tener seguridad y salvaguardias equivalentes para el procesamiento de datos personales, firmamos un contrato separado, cuyos términos están aprobados por las Directivas europeas o nos aseguramos de que exista una cláusula. en el contrato que protege el tratamiento de datos personales de todos nuestros clientes.
            </p>
          </div>
        </div>',
      'order_num' => 1,
      'lang' => 'es',
    ]);


  }
}

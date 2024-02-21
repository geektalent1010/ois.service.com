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
        Content::create([
            'title' => 'ABOUT OIS',
            'content' => '<p class="title body-section">Innovative software solutions<br>across industries.</p>',
            'order_num' => 1,
        ]);
        Content::create([
            'title' => 'ABOUT OIS',
            'content' => '<p class="sub-title">OIS (Online Integrated Services)</p>
                <p class="description mt-4">OIS (Online Integrated Solutions) stands at the forefront of
                    innovation as a leading provider of cutting-edge software solutions spanning various
                    industries. Our journey began as a Visa Application Centre and Support Services
                    Provider, and we have since evolved to extend our services to all of Nigeria\'s
                    diplomatic missions worldwide. Our success is underpinned by advanced technology,
                    unparalleled quality, scalability, and the seamless transferability of our solutions.
                </p>
                <p class="description mb-0 mt-4">What sets OIS apart is our global footprint, allowing for
                    the effortless integration of applications on a worldwide scale. Our commitment to
                    excellence extends beyond immigration services, as we boast a robust track record in
                    banking platforms. Serving as a crucial intermediary for Nigerian banks, we deliver
                    essential services to non-resident Nigerians and individuals of other nationalities
                    abroad seeking to open or reactivate their Nigerian bank accounts.</p>
                <p class="description mb-0 mt-4">At OIS, we continually strive to redefine industry
                    standards, offering a comprehensive suite of solutions that reflect our dedication to
                    excellence and technological prowess. Join us on a journey of unparalleled service
                    delivery and global connectivity.</p>',
            'order_num' => 1,
        ]);
        Content::create([
            'title' => 'ABOUT OIS',
            'content' => '<p class="description">At OIS, we take immense pride in our unwavering commitment to
                exceptional service delivery and cutting-edge technology. Our comprehensive range of
                services goes beyond visa and passport solutions, encompassing Education, Healthcare,
                and Banking platforms. We believe in simplifying processes, and to achieve this, we
                offer a streamlined application experience through our user-friendly online portal,
                seamless payment system, and real-time updates.</p>
                <p class="description mt-4 mb-0">For those seeking to obtain a Bank Verification Number
                    (BVN), our online application process coupled with SMS delivery ensures an efficient and
                    hassle-free experience.</p>
                <p class="description mt-4 mb-0">In the realm of financial services, our Electronic Money
                    Transfer services stand out. We provide a secure and affordable means for online money
                    transfers, supporting various methods such as cash pick-up, cryptocurrency transactions,
                    bank transfers, mobile money transactions, and airtime top-ups. With OIS, experience the
                    convenience of modern, secure, and flexible financial solutions tailored to meet your
                    diverse needs.</p>',
            'order_num' => 1,
        ]);
        Content::create([
            'title' => 'ABOUT OIS',
            'content' => '<p class="description mb-0">At OIS, the well-being of our clients takes center stage, and
                our commitment extends to delivering top-notch E-health and Wellness services. Immerse
                yourself in a comprehensive approach to health with our array of offerings:</p>
                <p class="description mt-0 mb-0"><b>Telemedicine Services:</b></p>
                <p class="description mt-0 mb-0 ml-4">• Experience healthcare on your terms with our
                    telemedicine services. Connect seamlessly with healthcare professionals through virtual
                    consultations, unlocking personalized diet plans, curated exercise routines, and
                    invaluable mental health support. Your well-being is our priority, and our telemedicine
                    services bring healthcare expertise directly to you.</p>
                <p class="description mt-0 mb-0"><b>Health Monitoring Devices:</b></p>
                <p class="description mt-0 mb-0 ml-4">• Stay informed and proactive about your health with
                    our health monitoring devices. These cutting-edge tools allow you to track vital signs,
                    providing valuable insights into your overall health. Empower yourself with data-driven
                    decisions for a healthier lifestyle.</p>
                <p class="description mt-0 mb-0"><b>Integrated Wellness Program:</b></p>
                <p class="description mt-0 mb-0 ml-4">• Our wellness program is a holistic haven for health,
                    seamlessly integrating mental health support into your well-being journey. Beyond
                    physical health, we prioritize mental wellness, fostering a balanced and comprehensive
                    approach to overall well-being.</p>
                <p class="description mt-0 mb-0">Our mission is to provide not only cutting-edge software
                    solutions but also to be a trusted ally in your pursuit of health and wellness. By
                    simplifying processes and enhancing experiences across industries, we are dedicated to
                    making a positive impact on every facet of your life. Welcome to a world where
                    innovation meets well-being.</p>
                <p class="description mt-4 mb-5">At OIS, our unwavering commitment is to pioneer
                    cutting-edge software solutions that not only streamline processes but also simplify
                    processes and elevate experiences across diverse industries.</p>',
            'order_num' => 1,
        ]);
        Content::create([
            'title' => 'SERVICES',
            'content' => '<p class="title body-section">Helping businesses and individuals<br>overcome complex challenges.</p>',
            'order_num' => 2,
        ]);
        Content::create([
            'title' => 'SERVICES',
            'content' => '<p class="sub-title">VISA AND PASSPORT APPLICATION PROCESSING:</p>
                <p class="description mb-0">At Online Integrated Solutions (OIS), we stand as a global
                    trailblazer in revolutionary software solutions, dedicated to empowering businesses and
                    individuals in overcoming intricate challenges. Our profound impact is particularly evident
                    in the realm of VISA application processing, where we harness the power of advanced machine
                    learning (ML) algorithms to enhance efficiency, accuracy, and scalability, ultimately
                    elevating the overall customer experience. Here are key areas where our innovative approach
                    to machine learning can bring about transformative improvements:</p>
                <p class="description mt-0 mb-0 ml-4">• Data Processing and Validation.</p>
                <p class="description mb-0 ml-4">• Fraud Detection.</p>
                <p class="description mb-0 ml-4">• Biometric Identification.</p>
                <p class="description mb-0 ml-4">• Application Status Tracking.</p>
                <p class="description mb-5 mt-4">At OIS, we envision a future where technology not only meets
                    but exceeds expectations, and our commitment to pushing the boundaries of innovation ensures
                    that our clients and users benefit from the most advanced, efficient, and secure visa and
                    passport application processing solutions available.</p>',
            'order_num' => 2,
        ]);
        Content::create([
            'title' => 'SERVICES',
            'content' => '<p class="sub-title">BANK VERIFICATION NUMBER (BVN) APPLICATION PROCESSING:</p>
                <p class="description mb-0">In our relentless pursuit of seamless services, we recognize the
                    transformative potential of machine learning, particularly in optimizing our Bank
                    Verification Number (BVN) application process. We comprehend the paramount importance of
                    swift and accessible BVN issuance for our customers, propelling us to continually refine and
                    expedite this crucial procedure. Harnessing the capabilities of machine learning, we aim to
                    elevate both the accuracy and efficiency of BVN registrations, concurrently mitigating the
                    risks associated with errors and fraudulent activities. Here are key domains where our
                    incorporation of machine learning promises a substantial impact:</p>
                <p class="description mt-0 mb-0 ml-4">• Data Processing and Validation.</p>
                <p class="description mt-0 mb-0 ml-4">• Predictive Analytics.</p>
                <p class="description mt-0 mb-0 ml-4">• Fraud Detection.</p>
                <p class="description mt-4 mb-5">At the heart of our commitment lies the dedication to providing
                    our customers with an unparalleled BVN application experience—prompt, precise, and fortified
                    against potential risks. Through the infusion of machine learning, we embark on a journey to
                    redefine the standards of efficiency and security in BVN issuance.</p>',
            'order_num' => 2,
        ]);
        Content::create([
            'title' => 'SERVICES',
            'content' => '<p class="sub-title">ELEVATING SERVICE EXCELLENCE WITH AI-POWERED CHATBOTS:</p>
                <p class="description">We are thrilled to unveil our latest innovation—the AI Chatbot—an
                    instrumental advancement poised to transform customer service and support. This
                    state-of-the-art Chatbot harnesses the power of machine learning algorithms, presenting
                    customers with a personalized and efficient avenue for assistance. Our Chatbot is designed
                    to revolutionize the customer experience by delivering prompt and precise responses to
                    inquiries and resolving issues with minimal reliance on human intervention.</p>
                <p class="description mt-4 mb-0">Key Features and Benefits:</p>
                <p class="description mt-0 mb-0 ml-4">• Quick and Accurate Responses.</p>
                <p class="description mt-0 mb-0 ml-4">• 24/7 Accessibility.</p>
                <p class="description mt-0 mb-0 ml-4">• Elimination of Wait Times.</p>
                <p class="description mt-0 mb-0 ml-4">• Versatile Inquiry Handling.</p>
                <p class="description mt-4 mb-5">This AI Chatbot represents a commitment to redefining service
                    standards, ensuring that our customers experience a seamless and efficient interaction with
                    our brand. As technology continues to evolve, we remain at the forefront, leveraging
                    innovative solutions to enhance your customer journey. Welcome to a new era of personalized
                    and responsive',
            'order_num' => 2,
        ]);
        Content::create([
            'title' => 'SERVICES',
            'content' => '<p class="sub-title">ELEVATING E-HEALTH AND WELLNESS THROUGH CUTTING-EDGE TECHNOLOGY</p>
                <p class="description mb-0">Embarking on a journey of continuous improvement, we are committed
                    to revolutionizing our E-health and Wellness Services through the integration of advanced
                    technology. Explore the myriad ways in which these innovations can empower you to maintain
                    optimal health and well-being:</p>
                <p class="description mt-0 mb-0">1. Telemedicine Services:</p>
                <p class="description mb-0 ml-4">• Immerse yourself in the future of healthcare with our
                    advanced systems. Precision and personalization are at the forefront as our telemedicine
                    services accurately diagnose health concerns and deliver bespoke treatment plans tailored to
                    your unique needs.</p>
                <p class="description mt-0 mb-0">2. Wellness Program:</p>
                <p class="description mb-0 ml-4">• Embrace a holistic approach to well-being through our ground
                    breaking wellness program. Leveraging the transformative potential of Blockchain and Web3
                    technology, our secure and decentralized platform offers personalized diet plans, tailored
                    exercise regimes, and comprehensive mental health support. Step into a wellness journey that
                    is as individual as you are.</p>
                <p class="description mt-0 mb-0">3. Health Monitoring Devices:</p>
                <p class="description mb-0 ml-4">• Unleash the power of AI with our health monitoring devices.
                    These intelligent systems analyze data collected from a range of devices, providing you with
                    personalized feedback and insightful recommendations. Transform the way you monitor your
                    health, with technology that evolves with you.</p>
                <p class="description mt-4 mb-5">At the intersection of innovation and health, we envision a
                    future where technology enhances every facet of your well-being journey. Our commitment is
                    to empower you with personalized, secure, and cutting-edge solutions that redefine the
                    standards of E-health and Wellness. Welcome to a realm where your health is not just a
                    priority—it\'s a personalized experience.</p>',
            'order_num' => 2,
        ]);
        Content::create([
            'title' => 'SERVICES',
            'content' => '<p class="sub-title">REVOLUTIONIZING ELECTRONIC MONEY TRANSFER WITH BLOCKCHAIN AND WEB3 TECHNOLOGIES</p>
                <p class="description">OIS proudly announces a ground breaking enhancement to our Electronic
                    Money Transfer service through the integration of cutting-edge Blockchain and Web3
                    technologies. This strategic evolution elevates the standard of our service, providing
                    customers with an unprecedented level of transparency and security.</p>
                <p class="description mt-4 mb-0">Key Advancements:</p>
                <p class="description mt-0 mb-0 ml-4">• Immutable Ledger Recording.</p>
                <p class="description mt-0 mb-0 ml-4">• Fast, Secure, and Low-Cost Options.</p>
                <p class="description mt-0 mb-0 ml-4">• Enhanced Flexibility and Convenience.</p>
                <p class="description mt-4 mb-5">At OIS, we are committed to redefining the landscape of
                    electronic financial services. The integration of Blockchain and Web3 is a testament to our
                    dedication to innovation, ensuring that our customers experience the utmost in security,
                    transparency, and convenience when entrusting us with their financial transactions. Welcome
                    to a new era of Electronic Money Transfer—where technology meets trust.</p>',
            'order_num' => 2,
        ]);
        Content::create([
            'title' => 'INNOVATION',
            'content' => '<p class="title body-section">The future of virtual reality<br>is here.</p>',
            'order_num' => 3,
        ]);
        Content::create([
            'title' => 'INNOVATION',
            'content' => '<p class="sub-title">AI-powered Personalization</p>
                <p class="description">We use AI algorithms to personalize our services to each individual customer\'s needs. By analyzing customer data and behavior patterns, we can tailor our solutions to meet specific requirements and preferences.</p>',
            'order_num' => 3,
        ]);
        Content::create([
            'title' => 'INNOVATION',
            'content' => '<p class="sub-title">Machine Learning for Fraud Detection</p>
                <p class="description">Our machine learning algorithms analyze customer behaviour, transactional data, suspicious activities, and prevents fraudulent transactions across all our services.</p>',
            'order_num' => 3,
        ]);
        Content::create([
            'title' => 'INNOVATION',
            'content' => '<p class="sub-title">Blockchain-based Security</p>
                <p class="description">Our new technology direction is Blockchain and Web3, which provides increased security and transparency for our customers\' data and transactions. We implement blockchain technology to ensure the immutability and traceability of our data, as well as enhanced security against data breaches and hacks.</p>',
            'order_num' => 3,
        ]);
        Content::create([
            'title' => 'INNOVATION',
            'content' => '<p class="sub-title">Web3-based Decentralization</p>
                <p class="description">Our Web3-based solutions provide greater decentralization and democratization of services. By using Web3 protocols, we can reduce the dependence on centralized intermediaries, lower transaction fees, and improve accessibility and inclusivity for our customers.</p>',
            'order_num' => 3,
        ]);
        Content::create([
            'title' => 'INNOVATION',
            'content' => '<p class="sub-title">Research and Development</p>
                <p class="description">To stay ahead of the competition, we are investing in research and development of new technologies and their potential applications. We collaborate with startups, academia, and research institutions to accelerate innovation and bring advanced solutions to our customers.</p>',
            'order_num' => 3,
        ]);
        Content::create([
            'title' => 'INNOVATION',
            'content' => '<p class="sub-title">Virtual Reality-based Training</p>
                <p class="description mb-5">We provide virtual reality-based training for our healthcare professionals and customer support teams to enhance their skills and provide better service. Our VR-based training programs simulate real-world scenarios, providing a safe and immersive learning experience.</p>',
            'order_num' => 3,
        ]);
        Content::create([
            'title' => 'SECURITY',
            'content' => '<p class="title body-section">With OIS<br>your data is secure.</p>',
            'order_num' => 4,
        ]);
        Content::create([
            'title' => 'SECURITY',
            'content' => '<p class="sub-title">Data Protection and Security</p>
                <p class="description">OIS places a high priority on data protection and security for our customers. We have implemented a range of measures to ensure the security and accuracy of customer data, including robust encryption protocols, regular backups, and secure data storage solutions.</p>
                <p class="description mt-4">In addition, we have established strict data access controls, ensuring that only authorized personnel have access to sensitive customer data. To maintain the accuracy of customer data, OIS employs automated data verification and cleansing processes, to ensure data is always accurate and up to date.</p>
                <p class="description mt-4 mb-5">OIS obtains customer data through secure, consent-based processes and uses this data to inform the development of new products and services that deliver real value to customers.</p>',
            'order_num' => 4,
        ]);
        Content::create([
            'title' => 'DISCLAIMERS',
            'content' => '',
            'order_num' => 5,
        ]);
        Content::create([
            'title' => 'TERMS OF USE',
            'content' => '',
            'order_num' => 6,
        ]);
        Content::create([
            'title' => 'PRIVACY POLICY',
            'content' => '',
            'order_num' => 7,
        ]);
        Content::create([
            'title' => 'DATA PROJECT',
            'content' => '',
            'order_num' => 8,
        ]);
    }
}

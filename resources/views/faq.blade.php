@extends('layouts.head_foot')
@section('salon')

<div class="breadcumb-wrapper" data-bg-src="assets/img/breadcumb/breadcumb-bg.jpg">
        <div class="container">
            <div class="breadcumb-content">
                <h2 class="breadcumb-title">FAQ’s</h2>
                <div class="breadcumb-menu-wrapper">
                    <ul class="breadcumb-menu">
                        <li><a href="/">Home</a></li>
                        <li>FAQ’s</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="faq-sec overflow-hidden space">
        <div class="container">
            <div class="row">
                <div class="col-xl-5">
                    <div class="pe-xl-3">
                        <div class="title-area mb-40"><span class="sub-title">Frequently Asked Any Question<img
                                    src="assets/img/theme-img/title_right.svg" alt=""></span>
                            <h2 class="sec-title">Unveil Your True Beauty At Our Salon</h2>
                            <p>Body massage is a holistic and therapeutic practice that offers numerous physical and
                                mental health benefits. It provides a rejuvenating experience that promotes relaxation.
                            </p>
                        </div>
                        <form action="https://themeholy.com/html/rasm/demo/mail.php" method="POST"
                            class="quote-form style2 ajax-contact">
                            <div class="title-area mb-40"><span class="sub-title">Contact Us<img
                                        src="assets/img/theme-img/title_right.svg" alt=""></span>
                                <h3 class="sec-title">Need to Make An Enquiry</h3>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-6"><input type="text" class="form-control" name="name"
                                        id="name" placeholder="Your Name"> <i class="fal fa-user"></i></div>
                                <div class="form-group col-md-6"><input type="email" class="form-control" name="email"
                                        id="email" placeholder="Email"> <i class="fal fa-envelope"></i></div>
                                <div class="form-group col-md-6"><input type="tel" class="form-control" name="number"
                                        id="number" placeholder="Number"> <i class="fal fa-phone"></i></div>
                                <div class="form-group col-md-6"><select name="subject" id="subject"
                                        class="form-select nice-select">
                                        <option value="" disabled="disabled" selected="selected" hidden>Subject</option>
                                        <option value="Engine Diagnostics">Spa & Massage</option>
                                        <option value="Facial & Massage">Facial & Massage</option>
                                        <option value="Engine Diagnostics">Head Massage</option>
                                        <option value="Sports Massage">Sports Massage</option>
                                        <option value="Stone Massage">Stone Massage</option>
                                    </select></div>
                                <div class="form-group col-12"><textarea name="message" id="message" cols="30" rows="3"
                                        class="form-control" placeholder="Write message...."></textarea> <i
                                        class="fal fa-comment"></i></div>
                                <div class="form-btn col-12"><button class="th-btn fw-btn">Send Messages<i
                                            class="fa-solid fa-arrow-right ms-2"></i></button></div>
                            </div>
                            <p class="form-messages mb-0 mt-3"></p>
                        </form>
                    </div>
                </div>
                <div class="col-xl-7">
                    <div class="accordion-area accordion" id="faqAccordion">
                        <div class="accordion-card active">
                            <div class="accordion-header" id="collapse-item-1"><button class="accordion-button"
                                    type="button" data-bs-toggle="collapse" data-bs-target="#collapse-1"
                                    aria-expanded="true" aria-controls="collapse-1">How to experience the magic of
                                    internet?</button></div>
                            <div id="collapse-1" class="accordion-collapse collapse show"
                                aria-labelledby="collapse-item-1" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    <p class="faq-text">The internet offers an incredible array of content, from
                                        educational resources and informative articles to entertaining videos and
                                        inspiring stories. Take the time to explore different websites, blogs, forums,
                                        and social media platforms to discover content that resonates with your
                                        interests.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-card">
                            <div class="accordion-header" id="collapse-item-2"><button
                                    class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse-2" aria-expanded="false" aria-controls="collapse-2">How to
                                    watch online movies?</button></div>
                            <div id="collapse-2" class="accordion-collapse collapse" aria-labelledby="collapse-item-2"
                                data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    <p class="faq-text">To watch online movies, youll need a few basic things, such as a
                                        stable internet connection, a device (computer, tablet, smartphone, or smart
                                        TV), and access to streaming platforms.Ensure you have a reliable and reasonably
                                        fast internet connection. Streaming movies require a stable internet connection
                                        to avoid interruptions or buffering.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-card">
                            <div class="accordion-header" id="collapse-item-3"><button
                                    class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse-3" aria-expanded="false" aria-controls="collapse-3">How to
                                    connect your phone with wifi?</button></div>
                            <div id="collapse-3" class="accordion-collapse collapse" aria-labelledby="collapse-item-3"
                                data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    <p class="faq-text">To connect your phone to Wi-Fi, follow these general steps.
                                        Please note that the exact steps may vary slightly depending on your phones make
                                        and model, as well as the version of its operating system (e.g., Android or
                                        iOS). However, the basic process remains similar for most smartphones:</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-card">
                            <div class="accordion-header" id="collapse-item-4"><button
                                    class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse-4" aria-expanded="false" aria-controls="collapse-4">How
                                    long do the treatment last?</button></div>
                            <div id="collapse-4" class="accordion-collapse collapse" aria-labelledby="collapse-item-4"
                                data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    <p class="faq-text">The duration of a treatment depends on several factors,
                                        including the type of condition being treated, the individuals response to
                                        treatment, and the recommended treatment plan by the healthcare provider. For
                                        short-term or acute conditions, the treatment duration may be relatively brief.
                                        It could range from a few days to a few weeks, and the treatment</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-card">
                            <div class="accordion-header" id="collapse-item-5"><button
                                    class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse-5" aria-expanded="false" aria-controls="collapse-5">Are
                                    gifts refundable or exchangeable?</button></div>
                            <div id="collapse-5" class="accordion-collapse collapse" aria-labelledby="collapse-item-5"
                                data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    <p class="faq-text">If the gift recipient has the original receipt or proof of
                                        purchase and the item is in unused, sellable condition, some stores may offer a
                                        refund to the original payment method used by the purchaser. However, the refund
                                        is typically processed back to the original purchaser rather than the recipient.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-card">
                            <div class="accordion-header" id="collapse-item-6"><button
                                    class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse-6" aria-expanded="false" aria-controls="collapse-6">Do you
                                    have gift cards?</button></div>
                            <div id="collapse-6" class="accordion-collapse collapse" aria-labelledby="collapse-item-6"
                                data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    <p class="faq-text">If youre looking for gift cards, you might find them available
                                        for purchase at various retail stores, online marketplaces, or directly from
                                        specific brands and businesses. Gift cards can be a thoughtful and flexible gift
                                        option, allowing the recipient to choose what theyd like to purchase within the
                                        designated value</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-card">
                            <div class="accordion-header" id="collapse-item-7"><button
                                    class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse-7" aria-expanded="false" aria-controls="collapse-7">How do
                                    you price your services?</button></div>
                            <div id="collapse-7" class="accordion-collapse collapse" aria-labelledby="collapse-item-7"
                                data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    <p class="faq-text">Its important to research and compare different AI service
                                        providers to find the one that best fits your needs and budget. Always read and
                                        understand the pricing details and terms before committing to any service.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-card">
                            <div class="accordion-header" id="collapse-item-8"><button
                                    class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse-8" aria-expanded="false" aria-controls="collapse-8">Do You
                                    Allow Children in the Spa?</button></div>
                            <div id="collapse-8" class="accordion-collapse collapse" aria-labelledby="collapse-item-8"
                                data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    <p class="faq-text">The policies regarding children in spas vary depending on the
                                        specific spa and its rules. Some spas may have age restrictions and only allow
                                        adults or teenagers, while others might be family-friendly and permit children.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-card">
                            <div class="accordion-header" id="collapse-item-9"><button
                                    class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse-9" aria-expanded="false" aria-controls="collapse-9">Do I
                                    Need to Make an Appointment at the Spa?</button></div>
                            <div id="collapse-9" class="accordion-collapse collapse" aria-labelledby="collapse-item-9"
                                data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    <p class="faq-text">Whether or not you need to make an appointment at a spa can vary
                                        depending on the spas policies and the services you wish to receive. In many
                                        cases, especially for popular or high-demand services, making an appointment in
                                        advance is advisable to ensure that you secure a spot and receive the treatment
                                        at your preferred time.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-card">
                            <div class="accordion-header" id="collapse-item-10"><button
                                    class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse-10" aria-expanded="false" aria-controls="collapse-10">How
                                    Did You Find Out About Our Salon?</button></div>
                            <div id="collapse-10" class="accordion-collapse collapse" aria-labelledby="collapse-item-10"
                                data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    <p class="faq-text">As an AI language model, I don’t have access to personal data
                                        about individuals unless it has been shared with me in the course of our
                                        conversation. I am designed to respect user privacy and confidentiality.
                                        Therefore, I am unaware of how I found out about your salon.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
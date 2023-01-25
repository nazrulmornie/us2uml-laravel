@extends('layouts.app')

@section('title') About Us @endsection

@section('content')
<section class="single-page-header">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h2>About Our Research</h2>
			</div>
		</div>
	</div>
</section>

<!--
Start About Section
==================================== -->
<section class="about-2 section" id="about">
	<div class="container">
		<div class="row">
			<div class="col-12 col-md-5">
				<h2>We focused to generate the UML model and Goal model. We need your samples to test and validate our prototype.</h2>
			</div>
			<div class="col-12 col-md-7">
				<p>Our main goal is utilizing the submitted data from the users to validate our semi-automated approach of generating UML model and Goal Model.</p>
                <p>Goal model samples are very much needed for us to test our prototype. <br> Besides, UML model which is Use Case diagram will be the focuses that required from the participants. </p>
				<p>Once the prototype is ready, we will use the samples from you to validate our outputs.</p>
			</div>

		</div> 		<!-- End row -->
	</div>   	<!-- End container -->
</section>   <!-- End section -->

<section class="about-mission-vision section bg-dark">
	<div class="container">
		<div class="row">
			<div class="col">
				<div class="title">
					<h2 class="text-white">The main components of our project</h2>
					<span class="border"></span>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<div class="commonTab">
					<ul class="nav nav-tabs justify-content-center" id="myTab" role="tablist">
						<li class="nav-item">
							<a class="nav-link active" id="home-tab" data-toggle="tab" href="#philosophy" role="tab" aria-controls="philosophy"
							  aria-selected="true">Problem Statement</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" id="profile-tab" data-toggle="tab" href="#mission" role="tab" aria-controls="mission"
							  aria-selected="false">Research Questions</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" id="contact-tab" data-toggle="tab" href="#vision" role="tab" aria-controls="vision"
							  aria-selected="false">Objectives</a>
						</li>
					</ul>
					<div class="tab-content" id="myTabContent">
						<div class="tab-pane fade show active" id="philosophy" role="tabpanel" aria-labelledby="home-tab">
							<div class="row">
								<div class="col-md-6 align-self-center" " style="height: 20rem">
									<h2 class="text-white">Problems we found</h2>
									<p class="lh-base" style="text-align: justify;">
                                        Consider software development from the viewpoint of the Agile approach.
                                        There is a design phase that demands IT professionals to create a goal model or UML model such as use case diagram,
                                        to visualise the requirements of the software application they are proposing to construct.
                                        However, there is an absence of a system that can automatically help this group of professionals generate
                                         UML use case diagram or goal model through user stories. Besides, the traditional method of manually generating the diagram
                                          during the design phase is also less effective and time-consuming. Similar studies that generating UML
                                          use case diagram from user stories is also unable to fulfil the relationship elements which are one of
                                          the most crucial components of a use case diagram.  ​</p>
								</div>
								<div class="col-md-6 align-self-center text-center" style="height: 20rem;">
									<img class="img-fluid rounded shadow " src="{{ asset('img/problem.jpg') }}" alt="" style="height: 18rem">
								</div>
							</div>
						</div>
						<div class="tab-pane fade" id="mission" role="tabpanel" aria-labelledby="profile-tab">
							<div class="row">
								<div class="col-md-6 align-self-center" style="height: 20rem">
									<h2 class="text-white">The Research Questions</h2>
									<p class="lh-base" style="text-align: justify;">In order to solve the identified problem,
                                        three questions that have been identified. These questions will be the ones
                                        that need to be solved or answered by completing this research.
                                         The research questions (RQs) that have been identified are:</p>
                                    <p>RQ1: What challenges do academia and industry people face to design UML Model? </p>
                                    <p>RQ2: How to develop a framework and prototype for automatically generating UML use case diagram from user stories? </p>
                                    <p>RQ3: How to test framework’s efficacy with a developed prototype? </p>

								</div>
								<div class="col-md-6 align-self-center  text-center" style="height: 20rem">
									<img class="img-fluid rounded shadow" src="{{ asset('img/rq.jpg') }}" alt=""  style="height: 18rem">
								</div>
							</div>
						</div>
						<div class="tab-pane fade" id="vision" role="tabpanel" aria-labelledby="contact-tab">
							<div class="row">
								<div class="col-md-6 align-self-center">
									<h2 class="text-white">Our Objectives</h2>
									<p>The objectives are then designed and identified based on the research questions themselves. The objectives of this research are:</p>
                                    <p>1. To formulate and compile typical challenges faced by academia and industry professional when designing UML use case diagram and the best method for automating the generation of UML use case diagram from user stories. </p>
                                    <p>2. To develop a framework of an automated system that generates UML use case diagram from user stories. </p>
                                    <p>3. To test and evaluate the effectiveness of the framework by using a prototype. </p>

								</div>
								<div class="col-md-6 align-self-center  text-center"  style="height: 20rem">
                                    <img src="{{ asset('img/goal.jpg')}}" class="img-fluid rounded"  style="height: 18rem">
                                </div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="section">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="title">
                    <h2>Research Significance</h2>
                    <span class="border"></span>
                </div>
            </div>
            <div class="col-md-6 align-self-center">
                <img src="{{ asset('img/significance.jpg')}}" class="img-fluid rounded">
            </div>
            <div class="col-md-6 align-self-center">
                <p class="lh-base" style="text-align: justify">The completion of this research can benefit the academia
                    associated with computer science and the industry professional with the like of software engineer and system analyst.
                    The development of the proposed approach to automatically generate UML use case diagram from
                    user stories will be significant for this groups of people because it will offer new way of
                    documenting the requirements of a specific software development project especially those related
                    to Agile. Besides, the traditional method of designing use case diagram such as drawing it manually or
                    using online drawing tools are complicated and time consuming. However, by using the approach proposed
                    in this research, it will be much efficient in terms of time and accuracy because the use case diagram
                    will be processed by specified algorithm before it is generated for them. All of this process only
                    involves the input which is the textual user stories. Thus, as the time this project is completed,
                    it will not only contribute for the mentioned groups, but it will also provide new knowledge for
                    the future researchers since the gaps from previous research will try to be solved.
                </p>
            </div>
        </div>
    </div>
</section>

<section class="section bg-dark" id="team">
	<div class="container">
		<div class="row">
			<div class="col-md-12 mb-3">
				<div class="title text-center">
					<h2  class="text-white">Methodology</h2>
					<span class="border"></span>
                    <p class="text-white">Overview of Methodology Used</p>
				</div>
                <p class="text-white lh-lg">
                    There are four main stages in this research which are <i>Stage 1: Prior investigation and content analysis,
                    Stage 2: Identification of model design consideration and attributes,
                    Stage 3: Further investigation, and Stage 4: Evaluation of framework</i>.
                    These stages are crucial for this research because they will be used as the main
                    guideline to identify processes, procedures, and techniques required.
                </p>
                <div class="container">
                    <div class="row text-center" style="height: 100%">
                        <div class="col-md-3 shadow-inner align-self-center py-5 bg-black text-white" style="height:100%" >
                            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="yellow" class="bi bi-1-circle-fill" viewBox="0 0 16 16">
                                <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0ZM9.283 4.002H7.971L6.072 5.385v1.271l1.834-1.318h.065V12h1.312V4.002Z"/>
                            </svg>
                            <h5 style="font-size: 2vw">Prior investigation and content analysis</h5>
                        </div>
                        <div class="col-md-3 shadow-inner align-self-center py-5 bg-primary" style="height:100%" >
                            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="black" class="bi bi-2-circle-fill" viewBox="0 0 16 16">
                                <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0ZM6.646 6.24c0-.691.493-1.306 1.336-1.306.756 0 1.313.492 1.313 1.236 0 .697-.469 1.23-.902 1.705l-2.971 3.293V12h5.344v-1.107H7.268v-.077l1.974-2.22.096-.107c.688-.763 1.287-1.428 1.287-2.43 0-1.266-1.031-2.215-2.613-2.215-1.758 0-2.637 1.19-2.637 2.402v.065h1.271v-.07Z"/>
                              </svg>
                            <h5 style="font-size: 2vw">Identification of model design consideration and attributes</h5>
                        </div>
                        <div class="col-md-3 shadow-inner align-self-center py-5 bg-black text-white" style="height:100%" >
                            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="yellow" class="bi bi-3-circle-fill" viewBox="0 0 16 16">
                                <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0Zm-8.082.414c.92 0 1.535.54 1.541 1.318.012.791-.615 1.36-1.588 1.354-.861-.006-1.482-.469-1.54-1.066H5.104c.047 1.177 1.05 2.144 2.754 2.144 1.653 0 2.954-.937 2.93-2.396-.023-1.278-1.031-1.846-1.734-1.916v-.07c.597-.1 1.505-.739 1.482-1.876-.03-1.177-1.043-2.074-2.637-2.062-1.675.006-2.59.984-2.625 2.12h1.248c.036-.556.557-1.054 1.348-1.054.785 0 1.348.486 1.348 1.195.006.715-.563 1.237-1.342 1.237h-.838v1.072h.879Z"/>
                              </svg>
                            <h5 style="font-size: 2vw">Further investigation</h5>
                        </div>
                        <div class="col-md-3 shadow-inner align-self-center py-5 bg-primary" style="height:100%" >
                            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="black" class="bi bi-4-circle-fill" viewBox="0 0 16 16">
                                <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0ZM7.519 5.057c-.886 1.418-1.772 2.838-2.542 4.265v1.12H8.85V12h1.26v-1.559h1.007V9.334H10.11V4.002H8.176c-.218.352-.438.703-.657 1.055ZM6.225 9.281v.053H8.85V5.063h-.065c-.867 1.33-1.787 2.806-2.56 4.218Z"/>
                            </svg>
                            <h5 style="font-size: 2vw">Evaluation of framework</h5><br>
                        </div>
                    </div>

                </div>
			</div>
            <div class="container">
                <div class="row">
                    <div class="col-md-6 mb-2">
                        <div class="card p-4 shadow-inner" style="height: 100%">
                            <h3 class="mt-2 text-center text-primary">Stage 1: Prior investigation and content analysis</h3>
                            <div class="d-flex flex-column justify-content-center align-items-center h-100">
                                <p class="lh-base" style="text-align:justify">
                                    For the first stage, the activities conducted are more towards gathering information
                                    related to the research title. It will be done through two different methods involving
                                    the targeted users of the automated system and the related studies. First of all, the targeted users,
                                    industry professionals like software developers and system analyst, and computer science students, will
                                    be interviewed. The elements highlighted in the interview sessions with targeted users include challenges while
                                    designing the UML model, types of tools used, and their interest in the automated approach for designing UML model.
                                    Next, this phase allows us to gather information from related studies and previous work.
                                    The gathered information will be further analysed and discussed to identify the strengths and weaknesses which
                                    can be applied to the current research topic. The output from both interviews and gathered information will be
                                    recorded and documented as part of the requirements to produce the prototype during the final stage of this research.
                                </p>
                            </div>
                        </div>

                    </div>
                    <div class="col-md-6 mb-2">
                        <div class="card p-4 shadow-inner" style="height: 100%">
                            <h3 class="mt-2 text-center text-primary">Stage 2: Identification of model design consideration and attributes</h3>
                            <div class="d-flex flex-column justify-content-center align-items-center h-100">
                                <p class="lh-base" style="text-align:justify">
                                    The second stage involves the identification of the design consideration and attributes for our automated system.
                                    The targeted users will involve in this phase where they will contribute to define the best design for our proposed system.
                                    Several activities will be conducted with the targeted users in this phase.
                                    First, the targeted users will be asked to use UML generating tools involving both automated such as PlantUML and non-automated
                                    tools such as WhiteStarUML. After they have experienced the tools by themselves, there will be another questionnaire that they should answer.
                                    This questionnaire focuses on the user experience and tool interaction. Different than questionnaire, other methods are used while the
                                    targeted users to generate UML models. The approaches that are mentioned include recording time taken to complete generating the UML
                                    model and observing the difficulties faced by the targeted users.
                                    All the data gathered will be recorded and further analysed to produce the best design for the proposed system.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 mb-2">
                        <div class="card p-4 shadow-inner" style="height: 100%">
                            <h3 class="mt-2 text-center text-primary">Stage 3: Further investigation</h3>
                            <div class="d-flex flex-column justify-content-center align-items-center h-100">
                                <p class="lh-base" style="text-align:justify">
                                    In this stage, the questionnaire is spread to the targeted users which are the professional software developers and computer science students.
                                    The questionnaire used contains both open-ended and close-ended questions.
                                    The questionnaire will obtain crucial information to this research covering the targeted user’s demographic
                                    information and perception of the research topic. This kind of information will allow us to clearly understand and
                                    validate the information gathered from previous stages. Besides, this stage allows us to analyse and summarise the
                                    obtained data from previous stages. This process will involve both quantitative and qualitative analysis of the data.
                                    The analysis of both types of data from previous stages is necessary to answer the first question of this research.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 mb-2">
                        <div class="card p-4 shadow-inner" style="height: 100%">
                            <h3 class="mt-2 text-center text-primary">Stage 4: Evaluation of framework</h3>
                            <div class="d-flex flex-column justify-content-center align-items-center h-100">
                                <p class="lh-base" style="text-align:justify">
                                    In the last stage of this research, a prototype of the model is designed, developed, and demonstrated as a proof of concept.
                                    The name given for the prototype is UCD generator or Use Case Design generator. The prototype is developed as
                                    a system that can be used on the user’s desktop computer and laptop. The targeted users once again contribute to this stage.
                                        A number of targeted users will be selected, and they will contribute as the participants in this stage. They
                                        will be demonstrated with the produced prototype and experience using the prototype by themselves. As the participants
                                        have been demonstrated and experienced the prototype, several questions will be asked as feedback to the prototype. The
                                        questions include core values to the research. The answer to these questions will be analysed and interpreted as they will be
                                        used to study the relationship between the findings in this stage and the information obtained from previous stages.
                                    Finally, the results obtained are significant since it contributes to answering the second research question.
                                </p>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
		</div>
	</div>
</section>

<section class="section bg-white">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="title">
                    <h2 class="text-center">Proposed Solution</h2>
                    <span class="border"></span>
                </div>
            </div>
            <div class="col-md-6 text-center mb-3" style="height: 25rem">
                <div class="align-self-center">
                    <img src="{{ asset('img/Slide2.PNG') }}" class="img-fluid mb-3">
                </div>
                <p>Our proposed approach to generate UML model/Goal model</p>
            </div>

            <div class="col-md-6 text-center align-self-center bg-primary p-4 mb-3" style="height: 25rem">
                <h3 class="text-white">4 phases involved for generation of our proposed approach</h3>
                <div class="d-flex justify-content-center align-items-center" style="height: 100%">
                    <table class="table-borderless">
                        <thead>
                            <tr>
                                <th>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" fill="purple" class="bi bi-1-circle-fill" viewBox="0 0 16 16">
                                        <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0ZM9.283 4.002H7.971L6.072 5.385v1.271l1.834-1.318h.065V12h1.312V4.002Z"/>
                                    </svg>
                                </th>
                                <th>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" fill="purple" class="bi bi-2-circle-fill" viewBox="0 0 16 16">
                                        <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0ZM6.646 6.24c0-.691.493-1.306 1.336-1.306.756 0 1.313.492 1.313 1.236 0 .697-.469 1.23-.902 1.705l-2.971 3.293V12h5.344v-1.107H7.268v-.077l1.974-2.22.096-.107c.688-.763 1.287-1.428 1.287-2.43 0-1.266-1.031-2.215-2.613-2.215-1.758 0-2.637 1.19-2.637 2.402v.065h1.271v-.07Z"/>
                                    </svg>
                                </th>
                                <th>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" fill="purple" class="bi bi-3-circle-fill" viewBox="0 0 16 16">
                                        <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0Zm-8.082.414c.92 0 1.535.54 1.541 1.318.012.791-.615 1.36-1.588 1.354-.861-.006-1.482-.469-1.54-1.066H5.104c.047 1.177 1.05 2.144 2.754 2.144 1.653 0 2.954-.937 2.93-2.396-.023-1.278-1.031-1.846-1.734-1.916v-.07c.597-.1 1.505-.739 1.482-1.876-.03-1.177-1.043-2.074-2.637-2.062-1.675.006-2.59.984-2.625 2.12h1.248c.036-.556.557-1.054 1.348-1.054.785 0 1.348.486 1.348 1.195.006.715-.563 1.237-1.342 1.237h-.838v1.072h.879Z"/>
                                    </svg>
                                </th>
                                <th>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" fill="purple" class="bi bi-4-circle-fill" viewBox="0 0 16 16">
                                        <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0ZM7.519 5.057c-.886 1.418-1.772 2.838-2.542 4.265v1.12H8.85V12h1.26v-1.559h1.007V9.334H10.11V4.002H8.176c-.218.352-.438.703-.657 1.055ZM6.225 9.281v.053H8.85V5.063h-.065c-.867 1.33-1.787 2.806-2.56 4.218Z"/>
                                    </svg>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="text-white">Requirement Gathering</td>
                                <td class="text-white">Natural Language Processing</td>
                                <td class="text-white">Application of Logical Rules</td>
                                <td class="text-white">UML model / Goal model Generation</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <hr>

            <div class="col-md-6 my-4 align-items-center" style="height: 100%">
                <div class="card bg-dark text-white p-3">
                    <h1>Phase 1: Requirement Gathering</h1>
                    <p class="lh-base text-white" style="text-align: justify">
                        The first phase, requirement gathering involves the collecting requirements from the users.
                        The requirement that is collected here is in the form of user-stories. In order to accomplish this, a template will be created
                        in order to record the requirements from the users. Users will be able to fill in only specific information using this template.
                        The template sample for collecting the user requirements are shown in below.
                    </p>
                    <ul class = "list-group list-group-flush border">
                        <li class="list-group-item">As a (1)___________________, I want to (2) ___________________.</li>
                        <li class="list-group-item">(1)___________________ is a/may be type of (4) ___________________.</li>
                        <li class="list-group-item">(2)___________________ will cause/require (3) ___________________.</li>
                        <li class="list-group-item">(5)___________________ occurs/present if (1) ___________________ (6) ___________________.</li>
                    </ul>
                </div>
            </div>
            <div class="col-md-6 my-4 align-self-center" style="height: 100%">
                <h1>Phase 2: Natural Language Processing</h1>
                <p class="lh-base" style="text-align: justify">
                    Natural language processing (NLP) techniques will be applied to the requirements or stories that have been collected.
                    These techniques are tokenisation, stemming and lemmatisation, POS tagging, and dependency parsing.
                    The NLP itself is the most crucial part of this approach because it will be the phase where the elements of
                    the use case diagram are generated. This will be followed by POS tagging,
                    stemming and lemmatisation, and dependency parsing, which will complete the cycle
                    of natural language processing. Figure 4 depicts the NLP steps in order to aid with visualising them
                </p>
            </div>
            <div class="col-md-6 my-4 align-self-center" style="height: 100%">
                <h1>Phase 3: Application of Logical Rules</h1>
                <p class="lh-base" style="text-align: justify">
                    The output from the NLP will be applied with a set of logical rules. These rules will be used to increase the
                     accuracy of generated elements from NLP. There are three types of rules that will be applied to the output
                     from NLP which are Actor identification rules, use case identification rules, and relationship identification rules. The output from this phase will be an
                    Extensible Markup Language (XMI) file containing the elements of the use case diagram. After the rules have been applied,
                    the process will move to the last phase which is UML diagram generation.
                </p>
            </div>
            <div class="col-md-6 my-4 align-self-center" style="height: 100%">
                <div class="card bg-dark text-white p-3 h-100">
                    <h1>Phase 4: Goal model / UML model Generation</h1>
                    <p class="lh-base text-white" style="text-align: justify">
                        For the last phase in this proposed approach, which is the UML diagram / Goal model generation,
                         the use case diagram elements produced from previous phases will be fully utilised.
                         The XMI file produced in the last phase will be used to visualise the use case diagram.
                         It will be done so using an Application Programming Interface (API) named PlantUML API.
                         This API will perform the generation of Use case diagram from the produced XMI file.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="call-to-action section">
	<div class="container">
		<div class="row">
			<div class="col-sm-12 text-center">
				<h2>You have any doubt wandering your mind?</h2>
				<p>Contact us directly to ask your questions about this project! <br> We will try our best to solve your curiousity!</p>
				<a href="{{ route('contact')}}" class="btn btn-main text-white">Contact Us</a>
			</div>
		</div>
	</div>
</section>

@guest
<section class="bg-dark section text-white">
	<div class="container">
		<div class="row">
			<div class="col-sm-12 text-center">
				<h2>Are you ready?</h2>
				<p class="text-white">Help us now by submitting your samples of UML diagram or Goal Model!</p>
				<a href="{{ route('login')}}" class="btn btn-main text-white">Login</a>
			</div>
		</div>
	</div>
</section>
@endguest

@endsection

﻿<?php
require_once($_SERVER['DOCUMENT_ROOT'].'/templates/_functions.php');

//Change page name here:
$PageName = 'Working Baseline';

require_once($_SERVER['DOCUMENT_ROOT'].'/templates/_header.php');
?>

		<div id="Content">
<!-- ------------------------------------------ Content starts here ------------------------------------------------ -->
		
			<!-- ---------------------------------------- Global index ----------------------------------------------- -->
			<table class="TableInvisible">
				<tbody>
					<tr>
						<td valign="top">
							<a href="/releases/BASE/latest/architecture_overview.html" target="_blank"><b>Architecture Overview</b></a> |
							<a href="/releases/AM/latest/Overview.html" target="_blank"><b>Archetype Technology</b></a> |
							<a href="/UML" target="_blank"><b>GLOBAL UML</b></a> |
							<a href="/releases/AA_GLOBAL/latest/index.html" target="_blank"><b>CLASS INDEX</b></a>
						</td>
					</tr>
				</tbody>
			</table>

			<!-- =============== Implementation Specs =============== -->
			<table class="TableBasic">
				<tbody>
					<tr>
						<th style="text-align:center"> Component</th>
						<th style="text-align:center"> Implementation Specifications </th>
						<th style="text-align:center"> Releases </th>
					</tr>

					<!-------------- CNF --------------->
					<tr>
						<td> 
							<a name="CNF"></a><a href="/releases/CNF/latest/index" target="_blank"><b>CNF</b><br>(Conformance)</a><br>
							<a href="https://openehr.atlassian.net/issues/?filter=11108" target="_blank">PRs</a>|<a href="https://openehr.atlassian.net/projects/SPECCNF?orderField=RANK&selectedItem=com.atlassian.jira.jira-projects-plugin%3Arelease-page&status=released-unreleased" target="_blank">CRs</a>
						</td>
						<td style="text-align:center">
							<table>
								<tbody>
									<tr>
										<td style="text-align:left">
											<a href="/releases/CNF/latest/openehr_platform_conformance.html" target="_blank"><b>Platform Conformance</b></a>: System Under Test (SUT), Conformance Schedule, Profiles, Certification
										</td>
									</tr>
								</tbody>
							</table>
						</td>
						<td style="white-space: nowrap"> 
						</td>
						
					</tr>

					<!-------------- ITS --------------->
					<tr>
						<td> <a name="ITS"></a><a href="/releases/ITS/latest/index" target="_blank"><b>ITS</b><br>(Implementation Technologies)</a><br>
						<a href="https://openehr.atlassian.net/issues/?filter=11118" target="_blank">PRs</a>|<a href="https://openehr.atlassian.net/projects/SPECITS?orderField=RANK&selectedItem=com.atlassian.jira.jira-projects-plugin%3Arelease-page&status=released-unreleased" target="_blank">CRs</a>
						</td>
						<td style="text-align:center">
							<table>
								<tbody>
									<tr>
										<td colspan="2" style="text-align:left"><a href="https://github.com/openEHR/specifications-ITS-REST" target="_blank"><b>REST APIs</b></a>: 
                                            <a href="/releases/ITS-REST/latest/ehr.html" target="_blank"><b>EHR</b></a>, 
                                            <a href="/releases/ITS-REST/latest/query.html" target="_blank"><b>Query</b></a>, 
                                            <a href="/releases/ITS-REST/latest/definitions.html" target="_blank"><b>Definitions</b></a>
                                        </td>
									</tr>
									<tr>
										<td style="text-align:left">
                                            <a href="https://github.com/openEHR/specifications-ITS-XML" target="_blank"><b>XSDs</b></a>: XML Schemas for the openEHR RM and AM
                                        </td>
										<td style="text-align:left">
                                            <a href="https://github.com/openEHR/specifications-ITS-JSON" target="_blank"><b>JSON schema</b></a>: JSON Schemas for the openEHR RM and AM
                                        </td>
									</tr>
									<tr>
										<td colspan="2" style="text-align:left">
											<a href="https://github.com/openEHR/specifications-ITS-BMM" target="_blank"><b>BMMs</b></a>: BMM schemas for Task Planning, RM, Expressions, BASE
										</td>
									</tr>
								</tbody>
							</table>
						</td>
						<td style="white-space: nowrap"> 
							<a href="https://openehr.atlassian.net/browse/SPECITS/fixforversion/12522" target="_blank">JSON 1.0.0</a> (cooking) <br>
							<a href="https://openehr.atlassian.net/projects/SPECITS/versions/12520/tab/release-report-all-issues" target="_blank">XML 2.0.0</a> (cooking) <br>
							<a href="/releases/ITS-REST/Release-1.0.0/" target="_blank">REST 1.0.0</a> (07 Dec 2018)<br>
							<a href="https://github.com/openEHR/specifications-ITS-XML/releases/tag/Release-1.0.2" target="_blank">XML 1.0.2</a> (31 Dec 2008)
						</td>
						
					</tr>
				</tbody>
			</table>

			<!-- =============== Formal Specs =============== -->
			<table class="TableBasic">
				<tbody>
					<tr>
						<th style="text-align:center"> Component</th>
						<th style="text-align:center"> Formal Specifications</th>
						<th style="text-align:center"> Releases </th>
					</tr>

					<!-------------- SM --------------->
					<tr>
						<td style="white-space: nowrap"> <a name="SM"></a><a href="/releases/SM/latest/index" target="_blank"><b>SM</b><br>(Service Model)</a><br>
						<a href="https://openehr.atlassian.net/issues/?filter=11104" target="_blank">PRs</a>|<a href="https://openehr.atlassian.net/projects/SPECSM?orderField=RANK&selectedItem=com.atlassian.jira.jira-projects-plugin%3Arelease-page&status=released-unreleased" target="_blank">CRs</a></td>
						<td style="text-align:center">
							<table>
								<tbody>
									<tr>
										<td style="text-align:left">
											<a href="/releases/SM/latest/openehr_platform.html" target="_blank"><b>Platform Services</b></a>: Ehr, Query, Definitions, EhrIndex, Admin, Demographic, Terminology, Message, SystemLog
										</td>
									</tr>
								</tbody>
							</table>
						</td>
						<td> 
						</td>
					</tr>

					<!-------------- CDS --------------->
					<tr>
						<td> <a name="CDS"></a><a href="/releases/CDS/latest/index" target="_blank"><b>CDS</b><br>(Clinical Decision Support)</a><br>
						<a href="https://openehr.atlassian.net/issues/?filter=11107" target="_blank">PRs</a>|<a href="https://openehr.atlassian.net/projects/SPECCDS?orderField=RANK&selectedItem=com.atlassian.jira.jira-projects-plugin%3Arelease-page&status=released-unreleased" target="_blank">CRs</a></td>
						<td style="text-align:center">
							<table>
								<tbody>
									<tr>
										<td style="text-align:left">
											<a href="/releases/CDS/latest/GDL.html" target="_blank"><b>GDL</b></a>: Guideline Definition Language
										</td>
									</tr>
								</tbody>
							</table>
						</td>
						<td> 
						</td>
					</tr>

					<!-------------- PROC --------------->
					<tr>
						<td>
                            <a name="PROC"></a>
                            <a href="/releases/PROC/latest/index" target="_blank"><b>PROC</b><br>(Process Model)</a><br>
						    <a href="https://openehr.atlassian.net/issues/?filter=11106" target="_blank">PRs</a>|
                            <a href="https://openehr.atlassian.net/projects/SPECPROC?orderField=RANK&selectedItem=com.atlassian.jira.jira-projects-plugin%3Arelease-page&status=released-unreleased" target="_blank">CRs</a>
                        </td>
						<td style="text-align:center">
							<table>
								<tbody>
									<tr>
										<td style="text-align:left">
                                            <a href="/releases/PROC/latest/task_planning.html" target="_blank"><b>Task Planning</b></a>: An adaptive, executable, team-based model of workflow -<br> Work Plan, Task Plan, Event
                                        </td>
									</tr>
								</tbody>
							</table>
						</td>
						<td> 
							<a href="/releases/PROC/Release-1.0.0/" target="_blank">1.0.0</a> (1 Dec 2017)
						</td>
					</tr>

					<!-------------- QUERY --------------->
					<tr>
						<td> <a name="QUERY"></a><a href="/releases/QUERY/latest/index" target="_blank"><b>QUERY</b><br>(Query language)</a><br>
						<a href="https://openehr.atlassian.net/issues/?filter=11109" target="_blank">PRs</a>|<a href="https://openehr.atlassian.net/projects/SPECQUERY?orderField=RANK&selectedItem=com.atlassian.jira.jira-projects-plugin%3Arelease-page&status=released-unreleased" target="_blank">CRs</a></td>
						<td style="text-align:center">
							<table>
								<tbody>
									<tr>
										<td style="text-align:left">
											<a href="/releases/QUERY/latest/AQL.html" target="_blank"><b>AQL</b></a>: Archetype Querying Language
										</td>
									</tr>
								</tbody>
							</table>
						</td>
						<td style="white-space: nowrap"> 
							<a href="/releases/QUERY/Release-1.0.0/" target="_blank">1.0.0</a> (15 Nov 2017)
						</td>
					</tr>

					<!-------------- RM --------------->
					<tr>
						<td> <a name="RM"></a><a href="/releases/RM/latest/index" target="_blank"><b>RM</b><br>(Reference Model)</a><br>
						<a href="https://openehr.atlassian.net/issues/?filter=11103" target="_blank">PRs</a>|<a href="https://openehr.atlassian.net/projects/SPECRM?orderField=RANK&selectedItem=com.atlassian.jira.jira-projects-plugin%3Arelease-page&status=released-unreleased" target="_blank">CRs</a></td>
						<td style="text-align:center">
							<table>
								<tbody>
									<tr>
										<td style="text-align:left">
                                            <a href="/releases/RM/latest/demographic.html" target="_blank"><b>Demographic</b></a>: Party, Party_relationship, Actor, Role, Contact, Address
                                        </td>
										<td colspan="2" style="text-align:left">
                                            <a href="/releases/RM/latest/ehr.html" target="_blank"><b>EHR</b></a>: Composition, Section, Entry, Observation, Evaluation, Instruction, Action, Admin_entry
                                        </td>
										<td style="text-align:left">
                                            <a href="/releases/RM/latest/ehr_extract.html" target="_blank"><b>EHR Extract</b></a>: OpenehrExtract, GenericExtract
                                        </td>
									</tr>
									<tr>
										<td colspan="2" style="text-align:left">
                                            <a href="/releases/RM/latest/common.html" target="_blank"><b>Common</b></a>: Versioned_object, Version, Party_self, Audit_details
                                        </td>
										<td colspan="2" style="text-align:left">
                                            <a href="/releases/RM/latest/integration.html" target="_blank"><b>Integration</b></a>: IntegrationEntry
                                        </td>
									</tr>
									<tr>
										<td  colspan="2" style="text-align:left">
											<a href="/releases/RM/latest/data_structures.html" target="_blank"><b>Data Structures</b></a>: History, Event, ItemTree, Cluster, Element
										</td>
										<td colspan="2" style="text-align:left">
                                            <a href="/releases/RM/latest/data_types.html" target="_blank"><b>Data Types</b></a>: DvBoolean, DvText, DvCodedText, DvUri, DvQuantity, DvDate/Time types, DvMultimedia
                                        </td>
									</tr>
									<tr>
										<td colspan="4" style="text-align:left"><a href="/releases/RM/latest/support.html" target="_blank"><b>Support</b></a>: Terminology and Measurement service interfaces</td>
									</tr>
								</tbody>
							</table>
						</td>
						<td style="white-space: nowrap"> 
							<a href="https://openehr.atlassian.net/projects/SPECRM/versions/11074/tab/release-report-all-issues" target="_blank">1.0.4</a> (cooking)<br>
							<a href="/releases/RM/Release-1.0.3/" target="_blank">1.0.3</a> (15 Dec 2015)<br>
							<a href="/releases/RM/Release-1.0.2/" target="_blank">1.0.2</a> (20 Dec 2008)
						</td>
					</tr>

					<!-------------- AM --------------->
					<tr>
						<td> <a name="AM"></a><a href="/releases/AM/latest/index" target="_blank"><b>AM</b><br>(Archetype Model)</a><br>
						<a href="https://openehr.atlassian.net/issues/?filter=11101" target="_blank">PRs</a>|<a href="https://openehr.atlassian.net/projects/SPECAM?orderField=RANK&selectedItem=com.atlassian.jira.jira-projects-plugin%3Arelease-page&status=released-unreleased" target="_blank">CRs</a></td>
						<td style="text-align:center">
							<table>
								<tbody>
									<tr>
										<td style="text-align:left">
											<a href="" target="_blank"><b>OPT 1.4</b></a>: Operational Template 1.4
										</td>
										<td style="text-align:left">
											<a href="/releases/AM/latest/OPT2.html" target="_blank"><b>OPT 2</b></a>: Operational Template 2
										</td>
									</tr>
									<tr>
										<td style="text-align:left">
											<a href="/releases/AM/latest/ADL1.4.html" target="_blank"><b>ADL 1.4</b></a>: Archetype Definition Language 1.4
										</td>
										<td style="text-align:left">
                                            <a href="/releases/AM/latest/ADL2.html" target="_blank"><b>ADL 2</b></a>: Archetype Definition Language 2
                                        </td>
									</tr>
									<tr>
										<td style="text-align:left">
                                            <a href="/releases/AM/latest/AOM1.4.html" target="_blank"><b>AOM 1.4</b></a>: Archetype, CObject, ArchetypeSlot, CAttribute, CPrimitive
                                        </td>
										<td style="text-align:left">
                                            <a href="/releases/AM/latest/AOM2.html" target="_blank"><b>AOM 2</b></a>: Archetype, AuthoredArchetype,Template, OperationalTemplate, CObject, ArchetypeSlot, CAttribute, CPrimitive
                                        </td>
									</tr>
									<tr>
										<td colspan="2" style="text-align:left"><a href="/releases/AM/latest/Identification.html" target="_blank"><b>Identification</b></a>: archetype / template identifiers; versioning rules</td>
									</tr>
								</tbody>
							</table>
						</td>
						<td> 
							<a href="/releases/AM/Release-2.0.6/" target="_blank">2.0.6</a> (07 Jan 2017)
							<a href="/releases/AM/Release-2.0.6/" target="_blank">1.4</a> (31 Dec 2008)
						</td>
					</tr>

					<!-------------- LANG --------------->
					<tr>
						<td style="white-space: nowrap"> <a name="LANG"></a><a href="/releases/LANG/latest/index" target="_blank"><b>LANG</b><br>(Generic Languages)</a><br>
						<a href="https://openehr.atlassian.net/issues/?filter=11116" target="_blank">PRs</a>|<a href="https://openehr.atlassian.net/projects/SPECLANG?orderField=RANK&selectedItem=com.atlassian.jira.jira-projects-plugin%3Arelease-page&status=released-unreleased" target="_blank">CRs</a></td>
						<td style="text-align:center">
							<table>
								<tbody>
									<tr>
										<td rowspan="2" style="text-align:left">
											<a href="/releases/LANG/latest/expression_language.html" target="_blank"><b>*Expression Language</b></a>: a syntax for formal expressions
                                        </td>
										<td style="text-align:left">
                                            <a href="/releases/LANG/latest/bmm.html" target="_blank"><b>BMM</b></a>: Basic Meta-Model -<br>BmmSchema, BmmModel, BmmClass, BmmType, BmmProperty
                                        </td>
										<td rowspan="2" style="text-align:left">
											<a href="/releases/LANG/latest/odin.html" target="_blank"><b>ODIN</b></a>: Object Data Instance Notation
                                        </td>
									</tr>
									<tr>
										<td style="text-align:left">
                                            <a href="/releases/LANG/latest/bmm_persistence.html" target="_blank"><b>P_BMM</b></a>: BMM Human-readable serial format -<br>PBmmSchema, P_xxx types
                                        </td>
									</tr>
								</tbody>
							</table>
						</td>
						<td> 
							<a href="https://openehr.atlassian.net/projects/SPECLANG/versions/12518/tab/release-report-all-issues" target="_blank">1.0.0</a> (cooking)<br>
						</td>
					</tr>

					<!-------------- BASE --------------->
					<tr>
						<td> <a name="BASE"></a><a href="/releases/BASE/latest/index" target="_blank"><b>BASE</b><br>(Base models)</a><br>
							<a href="https://openehr.atlassian.net/issues/?filter=11105" target="_blank">PRs</a>|<a href="https://openehr.atlassian.net/projects/SPECBASE?orderField=RANK&selectedItem=com.atlassian.jira.jira-projects-plugin%3Arelease-page&status=released-unreleased" target="_blank">CRs</a></td>
						<td style="text-align:center">
							<table>
								<tbody>
									<tr>
										<td style="text-align:left">
                                            <a href="/releases/BASE/latest/base_types.html" target="_blank"><b>Base Types</b></a>: Identifiers
                                        </td>
										<td style="text-align:left">
                                            <a href="/releases/BASE/latest/resource.html" target="_blank"><b>Resource</b></a>: AuthoredResource
                                        </td>
									</tr>
									<tr>
                                        <td colspan="2" style="text-align:left">
                                            <a href="/releases/BASE/latest/foundation_types.html" target="_blank"><b>Foundation Types</b></a>: Primitive types: Values, Structures, Interval, Date/times
                                        </td>
									</tr>
								</tbody>
							</table>
						</td>
						<td> 
							<a href="https://openehr.atlassian.net/projects/SPECBASE/versions/11760/tab/release-report-all-issues" target="_blank">1.1.0</a> (cooking)<br>
							<a href="/releases/BASE/Release-1.0.3/" target="_blank">1.0.3</a> (15 Dec 2015)
						</td>
					</tr>

					<!-------------- TERM --------------->
					<tr>
						<td> <a name="TERM"></a><a href="/releases/TERM/latest/index" target="_blank"><b>TERM</b><br>(Terminology)</a><br>
							<a href="https://openehr.atlassian.net/issues/?filter=11110" target="_blank">PRs</a>|<a href="https://openehr.atlassian.net/projects/SPECTERM?orderField=RANK&selectedItem=com.atlassian.jira.jira-projects-plugin%3Arelease-page&status=released-unreleased" target="_blank">CRs</a></td>
						<td style="text-align:center">
							<table>
								<tbody>
									<tr>
										<td style="text-align:left"><a href="/releases/TERM/latest/SupportTerminology.html" target="_blank"><b>openEHR Terminology</b></a></td>
									</tr>
								</tbody>
							</table>
						</td>
						<td> 
							<a href="/releases/TERM/Release-2.1.0/" target="_blank">2.1.0</a> (08 Nov 2017)
						</td>
					</tr>
				</tbody>
			</table>
			
			<!-- ------------------------------ UML quick access ------------------------------------------- -->
			<h2>UML Model Files</h2>
			<table class="TableBasic">
				<tbody>
					<tr>
						<th style="text-align:center"> Component </th>
						<th style="text-align:center"> UML source </th>
					</tr>

					<!-------------- SM --------------->
					<tr>
						<td> <a name="SM"></a><a href="/releases/SM/latest/index" target="_blank">SM</a></td>
						<td> <a href="/releases/SM/latest/UML/openEHR_UML-SM.mdzip">openEHR_UML-SM.mdzip</a></td>
					</tr>

					<!-------------- PROC --------------->
					<tr>
						<td> <a name="PROC"></a><a href="/releases/PROC/latest/index" target="_blank">PROC</a></td>
						<td> <a href="/releases/PROC/latest/UML/openEHR_UML-PROC.mdzip">openEHR_UML-PROC.mdzip</a></td>
					</tr>

					<!-------------- RM --------------->
					<tr>
						<td> <a name="RM"></a><a href="/releases/RM/latest/index" target="_blank">RM</a></td>
						<td> <a href="/releases/RM/latest/UML/openEHR_UML-RM.mdzip">openEHR_UML-RM.mdzip</a></td>
					</tr>

					<!-------------- AM --------------->
					<tr>
						<td> <a name="AM"></a><a href="/releases/AM/latest/index" target="_blank">AM</a></td>
						<td> 
							<a href="/releases/AM/latest/UML/openEHR_UML-AM.mdzip">openEHR_UML-AM.mdzip</a><br>
							<a href="/releases/AM/latest/UML/openEHR_UML-AM-14.mdzip">openEHR_UML-AM-14.mdzip</a>
						</td>
					</tr>

					<!-------------- LANG --------------->
					<tr>
						<td> <a name="LANG"></a><a href="/releases/LANG/latest/index" target="_blank">LANG</a></td>
						<td> <a href="/releases/LANG/latest/UML/openEHR_UML-LANG.mdzip">openEHR_UML-LANG.mdzip</a></td>
					</tr>

					<!-------------- BASE --------------->
					<tr>
						<td> <a name="BASE"></a><a href="/releases/BASE/latest/index" target="_blank">BASE</a></td>
						<td> <a href="/releases/BASE/latest/UML/openEHR_UML-Base.mdzip">openEHR_UML-BASE.mdzip</a></td>
					</tr>

				</tbody>
			</table>
			

<!-- ------------------------------------------- Content ends here ------------------------------------------------- -->
		</div>	
<?php require_once($_SERVER['DOCUMENT_ROOT'].'/templates/_footer.php');?>

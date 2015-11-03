<%
'Sends an email

Dim formOrder(74)

formOrder(0) = "heading"
formOrder(1) = "applicant_name"
formOrder(2) = "dog_applied_for"
formOrder(3) = "applicant_address"
formOrder(4) = "applicant_addr_city"
formOrder(5) = "applicant_addr_state"
formOrder(6) = "applicant_addr_zip"
formOrder(7) = "applicant_home"
formOrder(8) = "applicant_cell"
formOrder(9) = "applicant_email"
formOrder(10) = "applicant_work_hours"
formOrder(11) = "referred_by"
formOrder(12) = "coapplicant_name"
formOrder(13) = "relationship_to_applicant"
formOrder(14) = "coapplicant_addr"
formOrder(15) = "coapplicant_city"
formOrder(16) = "coapplicant_state"
formOrder(17) = "coapplicant_zip"
formOrder(18) = "coapplicant_home_phone"
formOrder(19) = "coapplicant_cell_phone"
formOrder(20) = "coapplicant_email"
formOrder(21) = "coapplicant_work_hrs"
formOrder(22) = "other_active_application"
formOrder(23) = "other_rescue_grp_info"
formOrder(24) = "other_application_5_years"
formOrder(25) = "other_rescue_outcome"
formOrder(26) = "other_rescue_grp2_info"
formOrder(27) = "rent_or_own"
formOrder(28) = "dwelling_type"
formOrder(29) = "location"
formOrder(30) = "lot_size"
formOrder(31) = "fenced_yard"
formOrder(32) = "yard_dimensions"
formOrder(33) = "exercise_toilet"
formOrder(34) = "swimming_pool"
formOrder(35) = "swimming_pool_secure"
formOrder(36) = "dog_argmt_day"
formOrder(37) = "dog_argmt_night"
formOrder(38) = "dog_argmt_while_away"
formOrder(39) = "num_in_household"
formOrder(40) = "all_agree"
formOrder(41) = "not_all_agree_explanation"
formOrder(42) = "allergic"
formOrder(43) = "allergy_control_explanation"
formOrder(44) = "num_hours_with_adult"
formOrder(45) = "typical_week_day_desc"
formOrder(46) = "typical_weekend_desc"
formOrder(47) = "travel_freq"
formOrder(48) = "past_pet_species"
formOrder(49) = "past_pet_year_required"
formOrder(50) = "past_pet_result"
formOrder(51) = "curr_pet_species"
formOrder(52) = "curr_pet_acq_year"
formOrder(53) = "male_or_female"
formOrder(54) = "curr_pet_age"
formOrder(55) = "curr_pet_weight"
formOrder(56) = "spayed_neutered"
formOrder(57) = "not_spayed_reason"
formOrder(58) = "vaccinated"
formOrder(59) = "not_vacc_reason"
formOrder(60) = "flea_tick_heartworm_preventative"
formOrder(61) = "no_preventative_reason"
formOrder(62) = "vet_name"
formOrder(63) = "vet_phone"
formOrder(64) = "vet_address"
formOrder(65) = "vet_pets"
formOrder(66) = "corgi_research"
formOrder(67) = "prev_corgi_ownership"
formOrder(68) = "willing_to_housetrain"
formOrder(69) = "home_visit"
formOrder(70) = "no_home_visit_reason"
formOrder(71) = "particular_dog_reason"
formOrder(72) = "addl_questions"
formOrder(73) = "addl_info"
formOrder(74) = "spam_check"

Dim d
Set d=Server.CreateObject("Scripting.Dictionary")
d.Add  "heading", "Application Form"
d.Add  "applicant_name", "Name of Applicant"
d.Add  "dog_applied_for", "Name of Dog Applied For"
d.Add  "applicant_address", "Home Address"
d.Add  "applicant_addr_city", "City"
d.Add  "applicant_addr_state", "State"
d.Add  "applicant_addr_zip", "ZIP"
d.Add  "applicant_home", "Home Phone"
d.Add  "applicant_cell", "Cell Phone"
d.Add  "applicant_email", "Email"
d.Add  "applicant_work_hours", "Work Hours"
d.Add  "referred_by", "Referred By"
d.Add  "coapplicant_name", "Co-Applicant Name"
d.Add  "relationship_to_applicant", "Relationship to Applicant"
d.Add  "coapplicant_addr", "Home Address (if different from applicant)"
d.Add  "coapplicant_city", "City"
d.Add  "coapplicant_state", "State"
d.Add  "coapplicant_zip", "ZIP"
d.Add  "coapplicant_home_phone", "Home Phone"
d.Add  "coapplicant_cell_phone", "Cell Phone"
d.Add  "coapplicant_email", "Email of Co-Applicant"
d.Add  "coapplicant_work_hrs", "Work Hours"
d.Add  "other_active_application", "Do you have an active application with any other rescue group?"
d.Add  "other_rescue_grp_info", "Name of group and contact information"
d.Add  "other_application_5_years", "Have you applied for a dog with any other rescue group in the past 5 years?"
d.Add  "other_rescue_outcome", "What was the outcome?"
d.Add  "other_rescue_grp2_info", "Name of group and contact information"
d.Add  "rent_or_own", "Do you rent or own?"
d.Add  "dwelling_type", "What type of dwelling?"
d.Add  "location", "Location?"
d.Add  "lot_size", "Lot size"
d.Add  "fenced_yard", "Do you have a fenced yard?"
d.Add  "yard_dimensions", "Yard/Fence Dimensions"
d.Add  "exercise_toilet", "If you don't have a yard, what arrangements will you have for the dog's exercise and toilet area?"
d.Add  "swimming_pool", "Do you have a swimming pool?"
d.Add  "swimming_pool_secure", "Is the swimming pool secured?"
d.Add  "dog_argmt_day", "Where will the dog be kept during the day?"
d.Add  "dog_argmt_night", "During the night?"
d.Add  "dog_argmt_while_away", "While Away from Home?"
d.Add  "num_in_household", "Number of adults/children in your houshold"
d.Add  "all_agree", "Do all members agree with the adoption?"
d.Add  "not_all_agree_explanation", "If no, please explain"
d.Add  "allergic", "Is anyone allergic to dogs?"
d.Add  "allergy_control_explanation", "How will the allergy be controlled?"
d.Add  "num_hours_with_adult", "How many hours of the day is there an adult at home?"
d.Add  "typical_week_day_desc", "Describe a typical weekday in your home"
d.Add  "typical_weekend_desc", "Describe a typical weekend in your home"
d.Add  "travel_freq", "How often do you travel that would necessitate the dog to be boarded or left with a petsitter?"
d.Add  "past_pet_species", "What spcecies/breed was your last pet"
d.Add  "past_pet_year_required", "Year Acquired/Duration of last pet ownership"
d.Add  "past_pet_result", "Why do you no longer have this pet?"
d.Add  "curr_pet_species", "Current pet species/breed"
d.Add  "curr_pet_acq_year", "Current pet year acquired/Duration of ownership"
d.Add  "male_or_female", "Current Pet Gender"
d.Add  "curr_pet_age", "Current Pet Age"
d.Add  "curr_pet_weight", "Current Pet Weight"
d.Add  "spayed_neutered", "Is your current Pet spayed/neutered?"
d.Add  "not_spayed_reason", "If not spayed/neutered, why not?"
d.Add  "vaccinated", "Is your current pet up to date on vaccinations?"
d.Add  "not_vacc_reason", "If not up-to-date, why not?"
d.Add  "flea_tick_heartworm_preventative", "Is your current pet on flea/tick/heartworm preventative?"
d.Add  "no_preventative_reason", "If not on preventative, why not?"
d.Add  "vet_name", "Vet name"
d.Add  "vet_phone", "Vet phone"
d.Add  "vet_address", "Vet address"
d.Add  "vet_pets", "Pets treated by this Vet"
d.Add  "corgi_research", "Have you done any research on this dog's breed characteristics"
d.Add  "prev_corgi_ownership", "Have you ever owned this dog's breed before?"
d.Add  "willing_to_housetrain", "Are you willing to housetrain this dog if necessary?"
d.Add  "home_visit", "Are you willing to have a home visit prior to the adoption?"
d.Add  "no_home_visit_reason", "If not, explain why"
d.Add  "particular_dog_reason", "Why do you want this particular dog"
d.Add  "addl_questions", "Any additional questions"
d.Add  "addl_info", "Any additional info"
d.Add  "spam_check", "AM I A SPAM BOT?"

Dim mail
Set mail = Server.CreateObject("CDO.Message")

mail.AutoGenerateTextBody = false


mail.To="blumebb@yahoo.com"
mail.Cc="liechtywebdesign@gmail.com"

mail.From="submit@corgisncritters.org" 

mail.Subject = "Application Received"

Dim req_vars
req_vars = ""

Dim isSpam
isSpam = false

For Each Item In formOrder
 req_vars = req_vars & d.Item(Item) & ": " & Request.Form(Item) & "<br>"
 If ((Item = "spam_check") AND (Request.Form(Item) <> "")) Then
 	isSpam = true
 End If
Next

If (isSpam <> true) Then
 mail.HTMLBody = req_vars
 mail.Send()

 'Destroy the mail object!
 Set mail = nothing

End If

Response.Redirect("/app-confirmation.html")
%>

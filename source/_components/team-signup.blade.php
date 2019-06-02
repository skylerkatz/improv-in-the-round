<form name="team-signup" method="POST" class="bg-white max-w-lg px-20 py-10 rounded shadow w-full xl:w-3/4 mx-auto"
    data-netlify="true">
    <div class="flex flex-wrap -mx-3 mb-6">
        <div class="w-full px-3">
            <label class="block uppercase tracking-wide text-gray-darker text-xs font-bold mb-2" for="team-name">
                Team Name
            </label>
            <input
                class="appearance-none block w-full bg-gray-lightest text-gray-darker border border-gray-lightest rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-purple"
                name="team-name" type="text" placeholder="Clouds of Bliss" required>
            <p class="text-gray-dark text-xs italic">What is your team name?</p>
        </div>
    </div>
    <div class="flex flex-wrap -mx-3 mb-6">
        <div class="w-full px-3">
            <label class="block uppercase tracking-wide text-gray-darker text-xs font-bold mb-2" for="contact-name">
                Contact Name
            </label>
            <input
                class="appearance-none block w-full bg-gray-lightest text-gray-darker border border-gray-lightest rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-purple"
                name="contact-name" type="text" placeholder="Janet Grimes" required>
            <p class="text-gray-dark text-xs italic">Please provide a team contact person</p>
        </div>
    </div>
    <div class="flex flex-wrap -mx-3 mb-6">
        <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
            <label class="block uppercase tracking-wide text-gray-darker text-xs font-bold mb-2" for="contact-email">
                Contact Email
            </label>
            <input
                class="appearance-none block w-full bg-gray-lightest text-gray-darker border border-gray-lightest rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-purple"
                name="contact-email" type="email" placeholder="janet@example.com" required>
            <p class="text-gray-dark text-xs italic">Please provide a team contact email</p>
        </div>
        <div class="w-full md:w-1/2 px-3">
            <label class="block uppercase tracking-wide text-gray-darker text-xs font-bold mb-2" for="contact-phone">
                Contact Phone Number
            </label>
            <input
                class="appearance-none block w-full bg-gray-lightest text-gray-darker border border-gray-lightest rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-purple"
                name="contact-phone" type="tel" placeholder="555-555-5555" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}"
                required>
            <p class="text-gray-dark text-xs italic">Please provide a team contact phone number(555-555-5555)</p>
        </div>
    </div>
    <div class="flex flex-wrap -mx-3 mb-6">
        <div class="w-full px-3">
            <label class="block uppercase tracking-wide text-gray-darker text-xs font-bold mb-2" for="team-photo">
                Team Photo (Optional)
            </label>
            <input
                class="appearance-none block w-full bg-gray-lightest text-gray-darker border border-gray-lightest rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-purple"
                name="team-photo" type="file">
            <p class="text-gray-dark text-xs italic">Upload a team photo if you have one</p>
        </div>
    </div>

    <button
        class="shadow bg-purple hover:bg-purple-dark focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded"
        type="submit">
        Sign Up
    </button>
</form>
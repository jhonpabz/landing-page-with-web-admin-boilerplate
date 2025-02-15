<form action="" method="">
    <h2>Create a New Jhonpabz</h2>

    <!-- Jhonpabz Name -->
    <label for="name">Jhonpabz Name:</label>
    <input type="text" id="name" name="name" value="{{ old('name') }}" required>

    <!-- Jhonpabz Strength -->
    <label for="skill">Jhonpabz Skill (0-100):</label>
    <input type="number" id="skill" name="skill" required>

    <!-- Jhonpabz Bio -->
    <label for="bio">Biography:</label>
    <textarea rows="5" id="bio" name="bio" required></textarea>

    <!-- select a network -->
    <label for="network_id">Network:</label>
    <select id="network_id" name="network_id" required>
        <option value="" disabled selected>Select a network</option>

    </select>

    <button type="submit" class="btn mt-4">Create Jhonpabz</button>

    <!-- validation errors -->

</form>

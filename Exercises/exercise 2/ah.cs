using System;

public class RandomValueScript
{
    // Array containing -1 and 1
    private int[] values = { -1, 1 };

    // Variable to store the randomly selected value
    private int randomValue;

    // Constructor
    public RandomValueScript()
    {
        // Create a new instance of System.Random
        Random random = new Random();

        // Select a random index from the values array
        int randomIndex = random.Next(0, values.Length);

        // Assign the randomly selected value to randomValue
        randomValue = values[randomIndex];

        // Print the selected value (optional)
        Console.WriteLine("Random value selected: " + randomValue);
    }

    // Example method to demonstrate usage
    public void DoSomethingWithRandomValue()
    {
        // Example usage of randomValue
        Console.WriteLine("Random value: " + randomValue);
    }

    public static void Main(string[] args)
    {
        // Create an instance of the RandomValueScript class
        RandomValueScript script = new RandomValueScript();

        // Example usage of the randomly selected value
        script.DoSomethingWithRandomValue();
    }
}
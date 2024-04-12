import OpenAI from "openai";

const openai = new OpenAI({
    apiKey: 'your-key-here'
});

async function main() {
    const completion = await openai.chat.completions.create({
        messages: [{ role: "system", content: "Ola chat gpt como vai seu dia?"}],
        model: "gpt-3.5-turbo",
    });

    console.log(completion.choices[0]);
}

main();
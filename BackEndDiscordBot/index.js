const {
    Client,
    Intents,
    Interaction
} = require('discord.js');
const client = new Client({
    intents: [Intents.FLAGS.GUILDS, Intents.FLAGS.GUILD_MESSAGES]
});

// Place your client and guild ids here
const clientId = '890874779349954561';
const guildId = '884389553136369665';

client.on('ready', () => {
    console.log(`Logged in as ${client.user.tag}!`);


    //register Commands
    client.user.setActivity("Cornhub", {
        type: "WATCHING"
    });

    const guild = client.guilds.cache.get(guildId);

    let commands;
    if (guild) {
        commands = guild.commands;
    } else {
        commands = client.application.commands;
    }

    commands.create({
        name: "message",
        description: "Send a message to a user.",
        options: [{
                name: "target",
                description: "target to message",
                type: "USER",
                required: true
            },
            {
                name: "message",
                description: "Message",
                type: "STRING",
                required: true
            }
        ],
    });
});



client.on('messageCreate', async message => {
    if (message.author.bot) return;
    if (message.member.roles.cache.has("942735765488676874")) {
        message.reply(`Boeie`);
        return;
    }
    if (message.content.includes("good bot")) {
        message.reply("prrrr...");
    }
    if (message.content.includes("bad bot")) {
        message.reply("Sorry papa...");
    }
    if (message.content.includes("backend") || message.content.includes("Backend")) {
        message.reply("Ja wat is er?");
    }
})

client.on('message', message => {
    if (message.channel.type === 'dm'){ 
     // put your code here
     console.log(message.content)

}
});



client.on("interactionCreate", async Interaction => {
    if (Interaction.isCommand()) {
        const currentDate = new Date();
        const {
            commandName,
            options
        } = Interaction;
        if (Interaction.guild.id === guildId) {
            if (commandName === "message") {
                const target = Interaction.options.getMember('target');
                const message = Interaction.options.getString('message') || "Yeet";
                try {
                    target.send(message);
                    Interaction.reply({
                        content: `Message send!`,
                        ephemeral: true
                    })
                    console.log(`${Interaction.member.user.tag} send message to ${target.user.tag}`);
                } catch (error) {
                    Interaction.reply({
                        content: `Error, message did not send!`,
                        ephemeral: true
                    })
                    console.log(error);
                    return;
                }
            }
        }
    }
})


client.login('ODkwODc0Nzc5MzQ5OTU0NTYx.YU2Jyw.t1ufaLJ0vnDIh2e3QQ3uCk5RrMY');